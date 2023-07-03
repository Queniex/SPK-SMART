<?= $this->extend('dashboard/templates/main'); ?>

<?= $this->section('content'); ?>

    <div class="w-full flex flex-col h-screen">
        <div class="min-w-screen min-h-screen grid justify-items-center font-sans">
            <div class="w-full mt-2 lg:w-5/6">
                <div class="flex flex-col items-center justify-center">
                    <div class="w-2/3 mt-2 mb-2 flex items-center justify-start">
                        <div class="" x-data="{ showModal : false }">
                            <button @click="showModal = !showModal" class="flex items-center justify-start group relative h-10 w-42 mb-2 px-2 rounded-lg bg-red-500 text-sm shadow hover:bg-red-600">
                             Reset
                            </button>
                            <!-- Modal Background -->
                            <div x-show="showModal" class="fixed text-gray-500 flex items-center justify-center overflow-auto z-50 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0" x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                <!-- Modal -->
                                <div x-show="showModal" class="bg-white rounded-xl shadow-2xl p-6 sm:w-3/2 mx-10" @click.away="showModal = false" x-transition:enter="transition ease duration-100 transform" x-transition:enter-start="opacity-0 scale-90 translate-y-1" x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease duration-100 transform" x-transition:leave-start="opacity-100 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                                    <!-- Title -->
                                    <span class="font-bold block text-2xl mb-3">Apakah Anda Yakin Ingin Menghapus Seluruh Data? </span>
                                    <!-- Some beer ? -->
                                    <p class="mb-5">Data yang terhapus tidak dapat dikembalikan kembali.</p>

                                    <!-- Buttons -->
                                    <div class="text-right space-x-3 mt-5">
                                        <a href="/spk/data/delete" class="relative text-black text-sm group-hover:text-white bg-red-500 hover:bg-red-700 px-4 py-2 rounded-lg rounded-xl border transition-colors duration-150 ease-linear border-gray-200 focus:outline-none focus:ring-0 font-bold hover:text-white focus:bg-indigo-50 focus:text-indigo">Reset</a>
                                        <button @click="showModal = !showModal" class="px-4 py-2 text-sm bg-black rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-white focus:outline-none focus:ring-0 font-bold hover:bg-white hover:text-black focus:bg-indigo-50 focus:text-indigo">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                                <div class="bg-red-500 border border-black rounded-3xl text-black bg hover:bg-white cursor-pointer">
                                                    <a href="<?= base_url('spk/data/delete/'.$item['num_choose'])?>">Delete</a>
                                                </div>
                                            </td>
                                            <?php $temp = $item['num_choose'];?>
                                        <?php endif; ?>
                                        <td class="py-3 px-6 text-left hover:bg-gray-400">
                                            <div class="flex items-center">
                                                <?= $item['kategori'][$j] ?>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-center hover:bg-gray-400">
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