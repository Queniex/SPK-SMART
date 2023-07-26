<?= $this->extend('dashboard/templates/main'); ?>

<?= $this->section('content'); ?>

    <div class="w-full flex flex-col h-screen">
        <div class="min-w-screen min-h-screen grid justify-items-center font-sans">
            <div class="w-full mt-10 lg:w-5/6">
                <div class="flex flex-col items-center justify-center">

                    <p class="font-bold underline underline-offset-4">Tabel Nilai Bobot Utility</p>
                    <!-- Tabel Bobot Utility -->
                    <table class="min-w-max w-2/3 mt-3 mb-5 table-auto shadow-md rounded-xl">
                        <thead>
                            <tr class="border-solid border-2 border-black bg-black uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-white text-center">No.</th>
                                <th class="py-3 px-6 text-white text-left">Kategori</th>
                                <th class="py-3 px-6 text-white text-center">Sub-Kategori</th>
                                <th class="py-3 px-6 text-white text-center">Nilai Utility</th>
                                <th class="py-3 px-6 text-white text-center">Nilai Bobot Utility</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <?php
                            $i = 1;
                            $temp = null;
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
                                                <?= $item['subkategori'][$j] ?>
                                            </span>
                                        </td>
                                        <td class="py-3 px-6 text-left">
                                            <div class="flex items-center">
                                                <?= $item['nilai_subkategori'][$j] ?>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <span class="font-bold">
                                                <?= $item['bobot_utility'][$j] ?>
                                            </span>
                                        </td>
                                    </tr>
                                <?php endfor; ?>
                            <?php endforeach; ?>    
                        </tbody>
                    </table>                                        

                    <p class="font-bold underline underline-offset-4">Tabel Hasil Penentuan</p>
                    <!-- Tabel Hasil Penentuan -->
                    <table class="min-w-max w-full mt-3 mb-5 table-auto shadow-md rounded-xl">
                        <thead>
                            <tr class="border-solid border-2 border-black bg-black uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-white text-center">Nomor Pilihan</th>
                                <th class="py-3 px-6 text-white text-left">Nilai Akhir</th>
                                <th class="py-3 px-6 text-white text-center">Status Keputusan</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <?php for ($k=0; $k < count($nilai_spk['nilai_spk']);$k++) : ?>
                                <tr class="border-solid border-2 border-black hover:bg-gray-400 hover:text-white even:bg-gray-200">
                                        <td class="py-3 px-6 text-center <?php echo $nilai_spk['status'][$k] == "Sangat Direkomendasikan" ? "bg-green-500" : '' ?>"> 
                                            <?= $nilai_spk['num_choose'][$k]; ?>
                                        </td>
                                    <td class="py-3 px-6 text-left <?php echo $nilai_spk['status'][$k] == "Sangat Direkomendasikan" ? "bg-green-500" : '' ?>">
                                        <div class="flex items-center">
                                            <?= $nilai_spk['nilai_spk'][$k]; ?>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center <?php echo $nilai_spk['status'][$k] == "Sangat Direkomendasikan" ? "bg-green-500" : '' ?>">
                                        <span class="font-bold">
                                            <?= $nilai_spk['status'][$k]; ?>    
                                        </span>
                                    </td>
                                </tr>    
                            <?php endfor; ?>                                   
                        </tbody>
                    </table>                                        
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>