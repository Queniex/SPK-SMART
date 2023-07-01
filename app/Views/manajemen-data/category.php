<?= $this->extend('dashboard/templates/main'); ?>

<?= $this->section('content'); ?>
    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <div class="min-w-screen min-h-screen bg-gray-100 grid justify-items-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full mt-7 lg:w-5/6">
                <div class="flex flex-col items-center justify-center">
                    <div class="w-2/3 mt-2 mb-2 flex items-center justify-start">
                        <button class="flex items-center justify-start group relative h-10 w-42 mb-2 px-2 overflow-hidden rounded-lg bg-red-500 text-lg shadow">
                            <a href="/category/delete" class="relative text-black text-sm group-hover:text-white">Reset</a>
                        </button>
                    </div>

                    <table class="min-w-max w-2/3 table-auto shadow-md rounded-xl">
                        <thead>
                            <tr class="bg-black uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-white text-center">No</th>
                                <th class="py-3 px-6 text-white text-left">Kategori</th>
                                <th class="py-3 px-6 text-white text-center">Nilai Bobot</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <?php $i = 1; ?>
                            <?php foreach($kategori as $item): ?>
                            <tr class="border-b border-gray-200 hover:bg-gray-400 hover:text:white even:bg-gray-200">
                                <td class="py-3 px-6 whitespace-nowrap">
                                    <div class="flex justify-center items-center text-center">
                                        <span class="font-medium text-center"><?= $i; ?></span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <?= $item['kategori'] ?>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs font-bold"><?= $item['nilai_bobot'] ?></span>
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