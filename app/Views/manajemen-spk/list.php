<?= $this->extend('dashboard/templates/main'); ?>

<?= $this->section('content'); ?>

<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <div class="min-w-screen min-h-screen bg-gray-100 grid justify-items-center bg-gray-100 font-sans overflow-hidden">
        <div class="w-full mt-5 lg:w-5/6">
            <!-- component -->
            <button class="group relative h-10 w-42 mb-2 px-2 overflow-hidden rounded-lg bg-green-500 text-lg shadow">
                <span class="relative text-black text-sm group-hover:text-white">Tambah Data [+]</span>
            </button>
            <div class="bg-white shadow-md rounded">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-center">No</th>
                            <th class="py-3 px-6 text-left">Nama</th>
                            <th class="py-3 px-6 text-center">Role</th>
                            <th class="py-3 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 whitespace-nowrap">
                                <div class="flex justify-center items-center text-center">
                                    <span class="font-medium text-center">1</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full"
                                            src="https://randomuser.me/api/portraits/men/1.jpg" />
                                    </div>
                                    <span>Eshal Rosas</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Admin</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">

                                    <!-- modal -->
                                    <div x-data="{ showModalx : false }">
                                        <button @click="showModalx = !showModalx"
                                            class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </button>

                                        <!-- Modal Background -->
                                        <div x-show="showModalx"
                                            class="fixed text-gray-500 flex items-center justify-center overflow-auto z-50 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0"
                                            x-transition:enter="transition ease duration-300"
                                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                            x-transition:leave="transition ease duration-300"
                                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                            <!-- Modal -->
                                            <div x-show="showModalx"
                                                class="bg-white rounded-xl shadow-2xl p-6 sm:w-1/2 mx-10"
                                                @click.away="showModalx = false"
                                                x-transition:enter="transition ease duration-100 transform"
                                                x-transition:enter-start="opacity-0 scale-90 translate-y-1"
                                                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                                                x-transition:leave="transition ease duration-100 transform"
                                                x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                                                x-transition:leave-end="opacity-0 scale-90 translate-y-1">

                                                <div class="flex flex-row mb-2">
                                                    <div class="w-1/3">
                                                        <span><img class="rounded-xl mt-5"
                                                                src="https://i.pinimg.com/564x/45/11/c5/4511c5871ff8011385b023be70878d81.jpg"
                                                                alt=""></span>
                                                    </div>
                                                    <div class="ml-5 w-2/3 flex flex-col">
                                                        <!-- Title -->
                                                        <span class="font-bold text-blue-600 underline underline-offset-1 block text-2xl mb-5 text-center">Detail
                                                            Data Pemilik Hak Akses</span>
                                                        <hr>
                                                        <span class="text-left">Email : <span
                                                                class="font-bold">Ashley@gmail.com</span></span>
                                                        <span class="text-left">UserName : <span class="font-bold">Ashleyyyyy || <span
                                                                    class="underline underline-offset-2"> Admin </span>
                                                            </span></span>
                                                        <hr>
                                                        <span class="mt-1 text-left">Nama Lengkap: <span class="font-bold">Ashley
                                                                Anonymous</span></span>
                                                        <span class="text-left">No Telphone : <span
                                                                class="font-bold">08123355324</span></span>
                                                        <span class="text-left">Jenis Kelamin : <span
                                                                class="font-bold">Perempuan</span></span>
                                                        <hr>
                                                    </div>
                                                </div>

                                                <!-- Buttons -->
                                                <div class="text-right space-x-5 mt-5">
                                                    <button @click="showModalx = !showModalx"
                                                        class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-300 hover:text-black focus:bg-indigo-50 focus:text-indigo">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
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