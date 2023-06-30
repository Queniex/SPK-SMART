<aside class="relative h-screen w-64 bg-gray-200 hidden sm:block shadow-xl">
  <div class="p-6">
    <a href="index.html" class="text-black text-2xl font-semibold uppercase hover:text-gray-300">SPK SMART</a>
    <h1 class="text-blue-800">ADMIN</h1>
    <hr>
  </div>

  <nav class="text-white text-base font-semibold pt-3">
    <div class="mt-3 px-3 py-4 overflow-y-auto">
      <ul class="space-y-2">
        <li>
          <a href="<?= base_url('/'); ?>"
            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 hover:text-white dark:hover:bg-gray-700">
            <i class="fas fa-home"></i>
            <span class="ml-3">Dashboard</span>
          </a>
        </li>
        <!-- <li>
          <a href="#"
            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 hover:text-white dark:hover:bg-gray-700">
            <i class="fas fa-users"></i>
            <span class="flex-1 ml-3 whitespace-nowrap">Kelola Warga</span>
            <span
              class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
          </a>
        </li> -->
        <li>
          <button type="button"
            class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 hover:text-white dark:text-white dark:hover:bg-gray-700"
            aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
            <i class="fas fa-file-alt"></i>
            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Kelola Data</span>
            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
          <ul id="dropdown-example" class="hidden py-1 space-y-1">
            <li>
              <a href="<?= base_url('/category'); ?>"
                class="flex items-center w-full p-2 font-normal text-black transition duration-75 rounded-lg group hover:bg-gray-100 dark:hover:text-white dark:hover:bg-gray-700 pl-7"> - List Kategori</a>
            </li>
            <li>
              <a href="<?= base_url('/subcategory'); ?>"
                class="flex items-center w-full p-2 font-normal text-black transition duration-75 rounded-lg group hover:bg-gray-100 dark:hover:text-white dark:hover:bg-gray-700 pl-7"> - List SubKategori</a>
            </li>
            <li>
              <a href="<?= base_url('/product/index'); ?>"
                class="flex items-center w-full p-2 font-normal text-black transition duration-75 rounded-lg group hover:bg-gray-100 dark:hover:text-white dark:hover:bg-gray-700 pl-7"> - [+] Kategori</a>
            </li>
            <li>
              <a href="<?= base_url('/product/index'); ?>"
                class="flex items-center w-full p-2 font-normal text-black transition duration-75 rounded-lg group hover:bg-gray-100 dark:hover:text-white dark:hover:bg-gray-700 pl-7"> - [+] SubKategori</a>
            </li>
          </ul>
        </li>
        <li>
          <button type="button"
            class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:hover:text-white dark:text-white dark:hover:bg-gray-700"
            aria-controls="dropdown-examplex" data-collapse-toggle="dropdown-examplex">
            <i class="fas fa-atom"></i>
            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>SMART</span>
            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
          <ul id="dropdown-examplex" class="hidden py-1 space-y-1">
            <li>
              <a href="<?= base_url('/spk'); ?>"
                class="flex items-center w-full p-2 font-normal text-black transition duration-75 rounded-lg group hover:bg-gray-100 dark:hover:text-white dark:text-black dark:hover:bg-gray-700 pl-7"> - Pemilihan Data</a>
            </li>
            <li>
              <a href="<?= base_url('/spk/data'); ?>"
                class="flex items-center w-full p-2 font-normal text-black transition duration-75 rounded-lg group hover:bg-gray-100 dark:hover:text-white dark:hover:bg-gray-700 pl-7"> - Data Dipilih</a>
            </li>
            <li>
              <a href="<?= base_url('/product/index'); ?>"
                class="flex items-center w-full p-2 font-normal text-black transition duration-75 rounded-lg group hover:bg-gray-100 dark:hover:text-white dark:hover:bg-gray-700 pl-7"> - Hitung SMART</a>
            </li>
          </ul>
        </li>
        <!-- <li>
          <a href="#"
            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
            <span>&#10003;</span>
            <span class="flex-1 ml-3 whitespace-nowrap">Hasil Penilaian</span>
            <span
              class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
          </a>
        </li>
        <li>
          <a href="#"
            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
            <i class="fas fa-user-tie"></i>
            <span class="flex-1 ml-3 whitespace-nowrap">Kelola Admin</span>
          </a>
        </li> -->
        <li class="mb-2">
          <a href="#"
            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
            <svg
              class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
              fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                clip-rule="evenodd"></path>
            </svg>
            <span class="flex-1 ml-3 whitespace-nowrap">Log Out</span>
          </a>
        </li>
      </ul>
    </div>

  </nav>
</aside>