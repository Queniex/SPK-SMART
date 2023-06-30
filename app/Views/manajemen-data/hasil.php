<?= $this->extend('dashboard/templates/main'); ?>

<?= $this->section('content'); ?>

<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <div class="min-w-screen min-h-screen bg-gray-100 grid justify-items-center bg-gray-100 font-sans overflow-hidden">
        <div class="w-full mt-10 lg:w-5/6">
            <div class="bg-white shadow-md rounded">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-4 text-left">Nama Warga</th>
                            <th class="py-3 px-4 text-center">Alamat</th>
                            <th class="py-3 px-4 text-center">Rank</th>
                            <th class="py-3 px-4 text-center">Bobot</th>
                            <th class="py-3 px-4 text-center">Hasil</th>
                            <th class="py-3 px-4 text-center">Penerimaan</th>
                            <th class="py-3 px-4 text-center">Status</th>
                            <th class="py-3 px-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-4 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full"
                                            src="https://randomuser.me/api/portraits/men/1.jpg" />
                                    </div>
                                    <span>Eshal Rosas</span>
                                </div>
                            </td>
                            <td class="py-3 px-4 text-center">
                                <h1>Jagakarsa</h1>
                            </td>
                            <td class="py-3 px-4 text-center">
                                <h1>2</h1>
                            </td>
                            <td class="py-3 px-4 text-center">
                                <h1>25%</h1>
                            </td>
                            <td class="py-3 px-4 text-center">
                                <h1>Prioritas</h1>
                            </td>
                            <td class="py-3 px-4 text-center">
                                <h1>Rp 300.000,00</h1>
                            </td>
                            <td class="py-3 px-4 text-center">
                                <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Diterima</span>
                            </td>
                            <td class="py-3 px-4 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="green" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>
<?= $this->endSection(); ?>