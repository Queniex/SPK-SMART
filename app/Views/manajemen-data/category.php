<?= $this->extend('dashboard/templates/main'); ?>

<?= $this->section('content'); ?>
    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <div class="min-w-screen min-h-screen bg-gray-100 grid justify-items-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full mt-7 lg:w-5/6">
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
                                        <a href="/category/delete" class="relative text-black text-sm group-hover:text-white bg-red-500 hover:bg-red-700 px-4 py-2 rounded-lg rounded-xl border transition-colors duration-150 ease-linear border-gray-200 focus:outline-none focus:ring-0 font-bold hover:text-white focus:bg-indigo-50 focus:text-indigo">Reset</a>
                                        <button @click="showModal = !showModal" class="px-4 py-2 text-sm bg-black rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-white focus:outline-none focus:ring-0 font-bold hover:bg-white hover:text-black focus:bg-indigo-50 focus:text-indigo">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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