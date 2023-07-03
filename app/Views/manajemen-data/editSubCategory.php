
<?= $this->extend('dashboard/templates/main'); ?>

<?= $this->section('content'); ?>
    <?php use PHPUnit\Util\Xml\Validator;
    if (session()->getFlashdata('error')) {
        $validator  = session()->getFlashdata('error');
    }?>

    <form action="/subcategory/add" method="POST">
        <div class="container w-3/4 py-5 px-5">
            <p class="font-bold mb-2 text-xl">Isilah Data Berikut :</p>
            <hr>
            
            <div class="w-1/2 mt-5">

                <div class="form-item mb-2">
                    <input type="hidden" name="id" value="<?= isset($data['id']) ? $data['id'] : '' ?>">
                    <label for="kategori" class="block mb-2 mt-5 text-sm font-medium text-black dark:text-black">Kategori</label>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full mb-3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="kategori">
                        <?php foreach ($jb as $row => $value) { ?>
                            <option <?= !empty($request->getPost('jb')) && $request->getPost('jb') == $value->id ? 'selected' : '' ?> value="<?= $value->id ?>"><?= $value->kategori; ?></option>
                        <?php } ?>   
                    </select>
                    <p class="text-red-500"><?= isset($validator) ? (array_key_exists('kategori', $validator) ? $validator['kategori'] : null) : null ?></p>
                </div>

                <div class="form-item mt-2 mb-4">
                    <label for="subkategori" class="block mb-2 text-sm font-medium text-black dark:text-black">Sub-Kategori</label>
                    <input type="text" name="subkategori" id="subkategori" placeholder="Sub-Kategori" class="bg-gray-50 border border-gray-500 text-black placeholder-gray-700 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-400" value="<?= isset($data['subkategori']) ? $data['subkategori'] : '' ?>">
                    <p class="text-red-500"><?= isset($validator) ? (array_key_exists('subkategori', $validator) ? $validator['subkategori'] : null) : null ?></p>
                </div>

                <div class="form-item mb-3">
                    <label for="nilai_subkategori" class="block mb-2 text-sm font-medium text-black dark:text-black">Nilai Sub Kategori</label>
                    <input type="numeric" name="nilai_subkategori" id="nilai_subkategori" placeholder="Nilai Sub Kategori" class="bg-gray-50 border border-gray-500 text-black placeholder-gray-700 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-400" value="<?= isset($data['nilai_subkategori']) ? $data['nilai_subkategori'] : '' ?>">
                    <p class="text-red-500"><?= isset($validator) ? (array_key_exists('nilai_subkategori', $validator) ? $validator['nilai_subkategori'] : null) : null ?></p>
                </div>
           
                <button class="mt-3 py-3 px-3 bg-gray-500 hover:bg-gray-900 hover:text-white rounded-xl" type="submit">Edit Sub-Category</button>
            </div>
        </div>
    </form>
<?= $this->endSection(); ?>