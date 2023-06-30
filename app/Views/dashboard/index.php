<?= $this->extend('dashboard/templates/main'); ?>

<?= $this->section('content'); ?>

<div class="w-full flex flex-col h-screen overflow-y-hidden">

  <div class="w-full overflow-x-hidden border-t flex flex-col">
    <main class="w-full flex-grow p-6">

      <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
          <div>
            <p
              class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-white bg-black uppercase rounded-full">
              Beranda
            </p>
          </div>
          <h2
            class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
            <span class="relative inline-block">
              <svg viewBox="0 0 52 24" fill="currentColor"
                class="absolute top-0 -left-2 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                <defs>
                  <pattern id="d5589eeb-3fca-4f01-ac3e-983224745704" x="0" y="0" width=".135" height=".30">
                    <circle cx="1" cy="1" r=".7"></circle>
                  </pattern>
                </defs>
                <rect fill="url(#d5589eeb-3fca-4f01-ac3e-983224745704)" width="52" height="24"></rect>
              </svg>
              <span class="relative">Selamat Datang!</span>
            </span>
          </h2>
          <p class="text-base text-gray-700 md:text-lg">
            Sistem Layanan Bantuan
          </p>
          <p class="text-base text-gray-700 md:text-lg">
            Pencarian Keputusan Pemilihan <span class="font-bold">Kambing</span> Kurban
          </p>
        </div>
        <div
          class="relative w-1/2 p-px mx-auto mb-4 overflow-hidden transition-shadow duration-300 rounded lg:mb-8 lg:max-w-4xl group hover:shadow-xl">
          <div
            class="absolute bottom-0 left-0 w-1/2 h-1 duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100">
          </div>

          <div
            class="relative flex flex-col items-center justify-center h-full py-10 duration-300 bg-white rounded-sm transition-color sm:items-stretch sm:flex-row">
            <div class="px-12 py-4 text-center">
              <h6 class="text-4xl font-bold text-green-600 sm:text-5xl">
                5
              </h6>
              <p class="text-center md:text-base">
                Kategori
              </p>
            </div>
            <div
              class="w-40 h-1 transition duration-300 transform bg-gray-300 rounded-full group-hover:bg-deep-purple-accent-400 group-hover:scale-110 sm:h-auto sm:w-1">
            </div>
            <div class="px-12 py-4 text-center">
              <h6 class="text-4xl font-bold text-blue-600 sm:text-5xl">
                15
              </h6>
              <p class="text-center md:text-base">
                SubKategori
            </div>
          </div>

          <div class='flex items-center mt-4 justify-center' x-data="{ reportsOpen: false }">
            <div class='w-full max-w-lg px-10 py-3 mx-auto bg-white rounded-lg shadow-xl'>
                <div class='max-w-md mx-auto space-y-6'>
            
                    <p class='text-gray-600'></p>
            
                    <div @click="reportsOpen = !reportsOpen" class='flex items-center text-gray-600 w-full border-b overflow-hidden mt-32 md:mt-0 mb-5 mx-auto'>
                    <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out' :class="{'rotate-90': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>          
                    </div>
                    <div class='flex items-center px-2 py-3'>
                    <div class='mx-3'>
                        <button class="hover:underline font-bold">Step Petunjuk Penggunaan Website</button>
                    </div>
                    </div>
                    </div>

                    <div class="flex flex-col p-5 md:p-0 w-full transform transition duration-300 ease-in-out border-b pb-10"
                    x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms >
                    <span>1. Untuk memulai pilihlah data alternatif dengan klik pada tab "Smart". </span>
                    <span>2. Setelah memilih data, data yang dipilih akan tampil pada subtab "Data Dipilih".</span>
                    <span>3. Untuk melihat perhitungan nilai normalisasi, nilai utility, dan nilai akhir Anda dapat
                    melihat pada bagian subtab "Hitung SMART".</span>
                    </div>

                </div>
            </div>
        </div>

        </div>
        <p class="mx-auto text-gray-600 sm:text-center lg:max-w-2xl lg:mb-6 md:px-16">
          Sistem ini bertujuan untuk membantu lembaga terkait dalam proses identifikasi dan seleksi hewan kurban
        </p>

       
      </div>

    </main>
  </div>

  <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
  <script src="https://unpkg.com/alpinejs" defer></script>

</div>
<?= $this->endSection(); ?>