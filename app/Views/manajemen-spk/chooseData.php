<?= $this->extend('dashboard/templates/main'); ?>

<?= $this->section('content'); ?>
    <?php use PHPUnit\Util\Xml\Validator;
    if (session()->getFlashdata('error')) {
        $validator  = session()->getFlashdata('error');}
    ?>

    <form action="/spk/choose" method="POST">
        <div class="container w-3/4 py-5 px-5">
            <p class="font-bold mb-2 text-xl">Isilah Data Berikut :</p>
            <hr>
            
            <div class="w-1/2">
            <?php foreach ($data as $item) : ?>
                <div class="form-item">
                    <label for="kategori" class="block mb-2 mt-5 text-sm font-medium text-gray-900 dark:text-black"><?= $item['kategori'] ?></label>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full mb-3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="<?= str_replace(" ", "_",$item['kategori']) ?>">
                        <?php foreach ($item['subkategori'] as $subitem) : ?>
                        
                            <option class="text-white" value="<?= $subitem ?>"><?= $subitem ?></option>

                        <?php endforeach; ?>
                    </select>
                    <p class="text-red-500"><?= isset($validator) ? (array_key_exists(str_replace(" ", "_",$item['kategori']), $validator) ? $validator['kategori'] : null) : null ?></p>
                </div>
            <?php endforeach; ?>
         
            <?php if($data != null) :?>
                <button class="mt-4 py-3 px-3 bg-gray-500 hover:bg-gray-900 hover:text-white rounded-xl" type="submit">Add Data</button>
            <?php endif; ?>
            </div>
        </div>
    </form>
<?= $this->endSection(); ?>