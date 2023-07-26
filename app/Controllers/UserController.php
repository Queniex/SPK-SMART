<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Kategori;
use App\Models\SubKategori;
// use App\Models\TransactionModel;
// use App\Controllers\BaseController;
use Config\Services;

class UserController extends BaseController
{

    protected $username, $role, $session;
    public function __construct()
    {
        $this->model = new User();
        $this->kategori = new Kategori();
        $this->subkategori = new SubKategori();
        // $this->transaction = new TransactionModel();
        // $this->data['session'] = \Config\Services::session();
    }

    public function landing_page()
    {
        $this->data = [
            "data" => $this->kategori->findAll()
        ];
        return view('landing-page/index', $this->data);
    }

    public function index()
    {
        //
        $this->data = [
            "judul" => "Dashboard",
            "jlh_kategori" => count($this->kategori->findAll()),
            "jlh_subkategori" => count($this->subkategori->findAll()),
        ];
        return view('dashboard/index', $this->data);
    }

    public function login()
    {
        //
        $this->data = [
            "judul" => "login"
        ];
        return view('login-register/login', $this->data);
    }

    public function logout()
    {
        session()->removeTempdata('logged_in');
        session()->setFlashdata('logout', "berhasil logout, silahkan login kembali");
        return redirect()->to(base_url('/login'));
    }

    public function register()
    {
        // helper('form');
        // $this->data['validation'] = \Config\Services::validation();
        // d($this->session);
        // d($this->data['validation']);
        return view('login-register/register');
    }

    public function store()
    {

        $dataInput = $this->request->getVar();

        $filterData = [
            "username" => esc($dataInput['username']),
            "password" => password_hash(esc($dataInput['password']), PASSWORD_BCRYPT),
            "role" => "user"
        ];

        if (!$this->validate([
            "username" => [
                "rules" => "required|max_length[8]|is_unique[user.username]",
                "errors" => [
                    "required" => "Harap isi {field} terlebih dahulu",
                    "max_length" => "{field} maksimal karakter 20",
                    "is_unique" => "{field} sudah terdaftar",
                ]
            ],
            "password" => [
                "rules" => "required",
                "errors" => [
                    "required" => "Harap isi password terlebih dahulu"
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->getErrors());
            return redirect()->to(base_url('/register'))->withInput();
        }

        // Insert ke db
        $this->model->insert($filterData);
        $this->authenticate();
        return redirect()->to(base_url('/login'))->with('daftar_berhasil', 'Pendaftaran Akun Berhasil');
    }

    public function authenticate()
    {
        $dataInput = $this->request->getVar();
        $filterData = [
            "username" => esc($dataInput['username']),
            "password" => esc($dataInput['password']),
        ];

        if (!$this->validate([
            "username" => [
                "rules" => "required",
                "errors" => [
                    "required" => "Harap isi {field} terlebih dahulu",
                ]
            ],
            "password" => [
                "rules" => "required",
                "errors" => [
                    "required" => "Harap isi password terlebih dahulu"
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->getErrors());
            return redirect()->to(base_url('/login'))->withInput();
        }

        // dd($filterData["username"]);
        $role = $this->model->select('role')->where('username', $filterData["username"])->first()['role'];
        // Cari akun pengguna
        $login_account = $this->model->getAccountByUsername($filterData['username']);

        // Cek passwordnya
        if ($login_account) {
            $password = $login_account['password'];
            if (password_verify($filterData['password'], $password)) {
                if ($role == "admin") {
                    session()->set([
                        'role' => 'admin',
                        'logged_in' => $login_account
                    ]);
                    return redirect()->to(base_url('/spk'));
                } else if ($role == "user") {
                    session()->set([
                        'role' => 'user',
                        'logged_in' => $login_account
                    ]);
                    return redirect()->to(base_url('/spk'));
                } else {
                    session()->setFlashdata('Gagal', "Role tidak dikenali, silahkan login kembali");
                    return redirect()->back();
                }
            }
        }

        // Apabila tidak ditemukan
        return redirect()->to(base_url('/login'))->with('not_found', 'Username atau password salah');
    }

    public function kempty()
    {
        // helper('form');
        // $this->data['validation'] = \Config\Services::validation();
        // d($this->session);
        // d($this->data['validation']);
        //
        $this->data = [
            "judul" => "Kategori Kosong"
        ];
        return view('errors/kempty', $this->data);
    }

}