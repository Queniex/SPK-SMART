<?= $this->extend('dashboard/templates/main'); ?>

<?= $this->section('content'); ?>
    <?php use PHPUnit\Util\Xml\Validator;
    if (session()->getFlashdata('error')) {
        $validator  = session()->getFlashdata('error');
    }?>

    <form action="/category/add" method="POST">
        <div class="container w-3/4 py-5 px-5">
            <p class="font-bold mb-2 text-xl">Isilah Data Berikut :</p>
            <hr>
            
            <div class="w-1/2 mt-5">

                <div class="form-item mb-4">
                    <label for="kategori" class="block mb-2 text-sm font-medium text-black dark:text-black">Kategori</label>
                    <input type="text" name="kategori" id="kategori" placeholder="Nama Kategori" class="bg-gray-50 border border-gray-500 text-black placeholder-gray-700 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-400">
                    <p class="text-red-500"><?= isset($validator) ? (array_key_exists('kategori',$validator) ? $validator["kategori"] : null) : null ?></p>
                </div>

                <div class="form-item mb-3">
                    <label for="nilai_bobot" class="block mb-2 text-sm font-medium text-black dark:text-black">Nilai Bobot</label>
                    <input type="numeric" name="nilai_bobot" id="nilai_bobot" placeholder="Nilai Bobot" class="bg-gray-50 border border-gray-500 text-black placeholder-gray-700 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-400">
                    <p class="text-red-500"><?= isset($validator) ? (array_key_exists('nilai_bobot',$validator)? $validator['nilai_bobot'] : null) : null ?></p>
                </div>
           
                <button class="mt-3 py-3 px-3 bg-gray-500 hover:bg-gray-900 hover:text-white rounded-xl" type="submit">Add Data</button>
            </div>
        </div>
    </form>
<?= $this->endSection(); ?>