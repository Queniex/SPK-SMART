<?= $this->extend('dashboard/templates/main'); ?>

<?= $this->section('content'); ?>

    <div class="w-full flex flex-col h-screen">
        <div class="min-w-screen min-h-screen grid justify-items-center font-sans">
            <div class="w-full mt-2 lg:w-5/6">
                <div class="flex flex-col items-center justify-center">
                    <div class="w-2/3 mt-2 mb-2 flex items-center justify-start">
                        <button class="flex items-center justify-start group relative h-10 w-42 mb-2 px-2 rounded-lg bg-red-500 text-lg shadow">
                            <span href="/spk/data/delete" class="relative text-black text-sm group-hover:text-white">Reset</span>
                        </button>
                    </div>

                    <table class="min-w-max w-2/3 mb-5 table-auto shadow-md rounded-xl">
                        <thead>
                            <tr class="border-solid border-2 border-black bg-black uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-white text-center">Nomor Pilihan</th>
                                <th class="py-3 px-6 text-white text-left">Kategori</th>
                                <th class="py-3 px-6 text-white text-center">Sub-Kategori</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <?php
                            $i = 1;
                            $temp = null;
                            $temp1 = null;
                            ?>
                            <?php foreach ($data as $item) : ?>
                                <?php for ($j = 0; $j < count($item['kategori']); $j++) : ?>
                                    <tr class="border-solid border-2 border-black hover:bg-gray-400 hover:text:white even:bg-gray-200">
                                        <?php if ($temp != $item['num_choose']) : ?>
                                            <td class="py-3 px-6 text-center" 
                                                rowspan="<?php if ($temp != $item['num_choose']) {
                                                                echo count($item['kategori']);
                                                                $temp = $item['num_choose'];
                                                            } else {
                                                                null;
                                                            }
                                                            ?>">
                                                <?= $i++; ?>
                                            </td>
                                            <?php $temp = $item['num_choose'];?>
                                        <?php endif; ?>
                                        <td class="py-3 px-6 text-left">
                                            <div class="flex items-center">
                                                <?= $item['kategori'][$j] ?>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <span class="font-bold">
                                                <?= $item['subkategori'][$j] ?></span>
                                        </td>
                                        <?php $temp = $item['num_choose']; ?>
                                    </tr>
                                <?php endfor; ?>
                            <?php endforeach; ?>    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>