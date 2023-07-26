<?php

namespace App\Controllers;

use App\Models\Kategori;
use App\Models\SubKategori;
use App\Models\User;
use Config\Services;

class HomeController extends BaseController
{
    public $db, $data;
    public $kategori;
    public $user;
    public $subkategori;
    
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->subkategori = new SubKategori();
        $this->kategori = new Kategori();
        $this->user = session()->get('logged_in');
        $this->data['session'] = \Config\Services::session();
    }

    public function index()
    {
        $this->data = [
            "judul" => "LIST KATEGORI"
        ];
        return view('manajemen-data/category', $this->data);
    }

    public function addCategoryView()
    {
        $this->data = [
            "judul" => "TAMBAH KATEGORI [+]"
        ];
        echo view('manajemen-data/addCategory', $this->data);
    }

    public function addCategory()
    {
        if (!$this->validate([
            'kategori' => [
                'rules' => 'required|alpha', "errors" => [
                    'required' => "field ketegori harus diisi",
                    'alpha' => 'Field kategori hanya boleh berisi huruf'
                ]
            ],

            "nilai_bobot" => ["rules" => 'required|numeric|greater_than_equal_to[0]', "errors" => [
                "required" => "field nilai bobot harus diisi",
                'numeric' => 'Field nilai bobot harus berupa angka',
                'greater_than_equal_to' => 'Field nilai bobot tidak boleh kurang dari 0'
            ]]
        ])) {
            session()->setFlashdata('error', $this->validator->getErrors());
            return redirect()->back()->withInput();
        } else {
            $idUser = session()->get('logged_in')['id'];
            $nilai_bobot = $this->request->getGetPost('nilai_bobot')/100;
            $this->kategori->insert([
                'id_user' => $idUser,
                'kategori' => $this->request->getGetPost('kategori'),
                'status' => $this->request->getGetPost('status'),
                'nilai_bobot' => $nilai_bobot
            ]);
            return redirect()->back();
        }
    }

    public function addSubCategoryView()
    {
        $kategori = $this->kategori->where('id_user', $this->user['id'])->findAll();
        if($kategori){
            $this->data = [
                "judul" => "TAMBAH SUB-KATEGORI [+]",
                "kategori" => $kategori
            ];
            echo view('manajemen-data/addSubCategory', $this->data);
        }else{
            $this->data = [
                "judul" => "LIST KATEGORI",
            ];
            return view('errors/kempty', $this->data);
        }
    }

    public function addSubCategory()
    {
        if(!empty($this->request->getPost('id'))){
            $dataInput = $this->request->getVar();    
            $nilai_subkategori = esc($dataInput['nilai_subkategori'])/10;
            $post = [
                'id_kategori' => esc($dataInput['kategori']),
                'subkategori' => esc($dataInput['subkategori']),
                'nilai_subkategori' => $nilai_subkategori,
            ];    
            $save = $this->subkategori->where(['id'=>$this->request->getPost('id')])->set($post)->update();
            if($save){
                $query = $this->db->query("SELECT kategori.kategori, kategori.nilai_bobot, subkategori.id_kategori, subkategori.id, subkategori.subkategori, subkategori.nilai_subkategori FROM `subkategori` JOIN kategori ON kategori.id = subkategori.id_kategori ");
                if($query){
                    $this->data = [
                        "judul" => "LIST SUB-KATEGORI",
                        "query" => $query->getResult()
                    ];
                    echo view('manajemen-data/subcategory',$this->data);
                    }
            }
        } else {
            if (!$this->validate([
                'kategori' => [
                    'rules' => 'required', "errors" => [
                        'required' => "field ketegori harus diisi"
                    ]
                ],
                "subkategori" => ["rules" => 'required|alpha', "errors" => [
                    "required" => "field subkategori harus diisi",
                    'alpha' => 'Field kategori hanya boleh berisi huruf'
                ]],

                "nilai_subkategori" => ["rules" => 'required|numeric|greater_than_equal_to[0]', "errors" => [
                    "required" => "field nilai utility harus diisi",
                    'numeric' => 'Field nilai bobot harus berupa angka',
                    'greater_than_equal_to' => 'Field nilai bobot tidak boleh kurang dari 0'
                ]]
            ])) {
                session()->setFlashdata('error', $this->validator->getErrors());
                return redirect()->back()->withInput();
            } else {
                $nilai_subkategori = $this->request->getGetPost('nilai_subkategori')/10;
                $this->subkategori->insert([
                    'id_kategori' => $this->request->getGetPost('kategori'),
                    'subkategori' => $this->request->getGetPost('subkategori'),
                    'nilai_subkategori' => $nilai_subkategori,

                ]);
                return redirect()->back();
            }
        
        }

    }

    public function subcategory()
    {

        $query = $this->db->query("SELECT kategori.kategori, kategori.nilai_bobot, subkategori.id_kategori, subkategori.id, subkategori.subkategori, subkategori.nilai_subkategori FROM `subkategori` JOIN kategori ON kategori.id = subkategori.id_kategori ");
        if($query){
            $this->data = [
                "judul" => "LIST SUB-KATEGORI",
                "query" => $query->getResult()
            ];
            echo view('manajemen-data/subcategory',$this->data);
        }else{
            $this->data = [
                "judul" => "LIST KATEGORI",
            ];
            return view('errors/kempty', $this->data);
        }
    }

    public function category(){
        $kategori = $this->kategori->findAll();
        $this->data = [
            "judul" => "LIST KATEGORI",
            "kategori" => $kategori,
        ];
        if(!$kategori){
            $this->data = [
                "judul" => "LIST KATEGORI",
            ];
            return view('errors/kempty', $this->data);
        }else{
            return view('manajemen-data/category', $this->data);
        }

    }

    public function update($id){
        $qry= $this->subkategori->select('*')->where(['id'=>$id]);
        $this->data = [
            "judul" => "EDIT SUB-KATEGORI",
            "request"=>$this->request,
            "data" => $qry->first(),
            "jb" => $this->kategori->orderBy('id ASC')->select('*')->get()->getResult(),
        ];
        return view('manajemen-data/editSubCategory', $this->data);
    }

    public function delete($id=''){
        $delete = $this->subkategori->delete($id);
        if($delete){
            return redirect()->back();
        }
    }

    public function deleteCategory(){
        $this->db->query('DELETE FROM subkategori');
        $this->db->query("DELETE FROM kategori");
        return redirect()->back();
    }

}
