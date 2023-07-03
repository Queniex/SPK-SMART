<?= $this->extend('dashboard/templates/main'); ?>

<?= $this->section('content'); ?>
    <?php
    // Fungsi untuk menghasilkan warna berdasarkan nilai id
    function generateColorFromId($id) {
    $colorClasses = [
        'bg-gray-100',
        'bg-gray-200',
        'bg-gray-300',
        'bg-gray-400',
        'bg-gray-500',
        'bg-gray-600'
    ];

    // Hashing nilai id untuk mendapatkan indeks warna
    $hash = md5($id);
    $index = hexdec(substr($hash, 0, 2)) % count($colorClasses);
    return $colorClasses[$index];
    }
    ?>
    <?php if(session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-<?= session()->getFlashdata('warna'); ?>" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="w-full flex flex-col h-screen">
        <div class="min-w-screen h-screen grid justify-items-center font-sans">
            <div class="w-full mt-7 lg:w-5/6">
                <div class="flex flex-col items-center justify-center">
                    <table class="min-w-max w-2/3 table-auto shadow-md rounded-xl mb-5">
                        <thead>
                            <tr class="bg-black uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-white text-center">No</th>
                                <th class="py-3 px-6 text-white text-left">Kategori</th>
                                <th class="py-3 px-6 text-white text-center">Nilai Bobot</th>
                                <th class="py-3 px-6 text-white text-left">Sub-Kategori</th>
                                <th class="py-3 px-6 text-white text-center">Nilai Sub-Kategori</th>
                                <th class="py-3 px-6 text-white text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <?php $i = 1; ?>
                            <?php foreach($query as $item): ?>
                            <!-- <tr class="border-b border-gray-200 hover:bg-gray-400 hover:text:white even:bg-gray-200"> -->
                            <tr class="border-b border-gray-200 hover:text:white hover:bg-gray-300 <?php echo generateColorFromId($item->id_kategori); ?>">
                                <td class="py-3 px-6 whitespace-nowrap">
                                    <div class="flex justify-center items-center text-center">
                                        <span class="font-medium text-center"><?= $i; ?></span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <?= $item->kategori; ?>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs font-bold">
                                        <?= $item->nilai_bobot; ?></span>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <?= $item->subkategori; ?>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="bg-blue-200 text-blue-600 py-1 px-3 rounded-full text-xs font-bold">
                                        <?= $item->nilai_subkategori; ?></span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <a href="<?= base_url('subcategory/update/'.$item->id)?>" class="relative hover:text-black text-sm text-green-700 px-4 py-2  font-bold focus:text-indigo">Edit</a>  
                                    || 
                                    <a href="<?= base_url('category/delete/'.$item->id)?>" class="relative hover:text-black text-sm text-red-500 px-4 py-2  font-bold focus:text-indigo">Delete</a>  
                                </td>
                            </tr>
                            <?php $i++ ?>
                            <?php endforeach; ?>    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>