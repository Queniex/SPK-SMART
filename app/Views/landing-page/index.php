<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page | SPK Kambing Kurban</title>
    <!-- <link rel="stylesheet" href="temp/tailwind.css"> -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .header {
            background-color: #fefeff;
            background-image: url("data:image/svg+xml,%3Csvg width='32' height='26' viewBox='0 0 32 26' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M14 0v3.994C14 7.864 10.858 11 7 11c-3.866 0-7-3.138-7-7.006V0h2v4.005C2 6.765 4.24 9 7 9c2.756 0 5-2.236 5-4.995V0h2zm0 26v-5.994C14 16.138 10.866 13 7 13c-3.858 0-7 3.137-7 7.006V26h2v-6.005C2 17.235 4.244 15 7 15c2.76 0 5 2.236 5 4.995V26h2zm2-18.994C16 3.136 19.142 0 23 0c3.866 0 7 3.138 7 7.006v9.988C30 20.864 26.858 24 23 24c-3.866 0-7-3.138-7-7.006V7.006zm2-.01C18 4.235 20.244 2 23 2c2.76 0 5 2.236 5 4.995v10.01C28 19.765 25.756 22 23 22c-2.76 0-5-2.236-5-4.995V6.995z' fill='%23e2dfe7' fill-opacity='0.4' fill-rule='evenodd'/%3E%3C/svg%3E");
        }
        .subtitle span {
            left: 50%;
            bottom: -10px;
            transform: translateX(-50%);
            height: 3px;
        }
        .nav-bg-show {
            background: #fff;
            box-shadow: 0 1px 2px 0 rgb(0 0 0 / 5%);
        }
        @media (max-width:787px) {
            .menu {
                position: fixed;
                width: 300px;
                height: 100vh;
                top: 0;
                right: 0;
                bottom: 0;
                background: #fff;
                z-index: 9;
                transition: all 0.5s ease-in;
                box-shadow: 0 1px 2px 0 rgb(0 0 0 / 5%);
                transform: translateX(100%);
            }
            .menu.active {
                transform: translateX(0%);
            }
            .nav-open-btn,
            .nav-close-btn {
                display: inline-block;
            }
            .nav-open-btn {
                transform: translate(0, 5px);
            }
            .menu ul {
                display: block;
                padding: 10px;
            }
            .menu a {
                display: block;
                border-bottom: 1px solid #ebebeb;
            }
        }
    </style>
</head>
<body>
    <nav class="w-full px-0 md:px-10 py-3 fixed top-0 left-0 right-0 z-10 transition-all" id="nav">
        <div class="flex justify-between items-center container m-auto px-4 md:px-10">
            <a href="#" class="logo text-md md:text-2xl font-bold text-purple-600">  
                <span class="inline-block">Kambing-Ku</span></a>
            <div class="menu">
                <button class="hidden nav-close-btn mt-4 ml-5 p-1 focus:outline-none" onclick="navClose()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <ul class="flex">
                    <li><a href="#home" class="px-4 py-2 mx-1 text-md font-semibold text-gray-800 hover:text-black hover:underline">Home</a></li>
                    <li><a href="#alternatif" class="px-4 py-2 mx-1  text-md font-semibold text-gray-800 hover:text-black hover:underline">Alternatif</a></li>
                    <li><a href="#testimoni" class="px-4 py-2 mx-1 text-md font-semibold text-gray-800 hover:text-black hover:underline">Testimoni</a></li>
                    <li><a href="#about-us" class="px-4 py-2 mx-1 text-md font-semibold text-gray-800 hover:text-black hover:underline">About Us</a></li>
                </ul>
            </div>
            <div>
                
                <a href="<?= base_url('/login'); ?>" class="px-2 md:px-4 py-1 md:py-2 text-sm transition-all font-semibold hover:text-purple-500 text-white bg-purple-500 mr-2  hover:bg-white rounded-md">Log in</a>
                <button class="hidden nav-open-btn ml-1 focus:outline-none" onclick="navOpen()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>
    <header class="header" id="home">
        <div class="header-container min-h-screen flex flex-col md:flex-row-reverse items-center px-10 container m-auto">
            <div class="px-8 py-6 w-full md:w-3/6 mt-20 md:mt-1">
                <img src="https://i.postimg.cc/kg6VKSvv/kambing1.png" class="ml-28" alt="">
            </div>
            <div class="h-full w-full md:w-3/6">
                <h1 class="text-2xl mt-2 md:mt-0 sm:text-4xl md:text-6xl font-bold leading-tight">
                    Pemilihan <span class="text-purple-600">Kambing</span> (Terbaik) SPK SMART
                </h1>
                <p class="text-gray-600 mb-6 mt-2">Sistem ini membantu lembaga terkait dalam proses identifikasi dan pemilihan kambing terbaik secara cepat, tepat, dan efisien!</p>
                <a href="#alternatif" class="px-6 py-2 text-sm font-semibold text-purple-600 bg-white border hover:bg-purple-500 hover:text-white border-purple-500 mr-2 rounded-md">Lebih Detail</a>
            </div>
           
        </div>
    </header>
    <div id="alternatif">
        <section class="sec1 p-5 container m-auto">
            <div class="subtitle text-center relative">
                <h1 class="inline-block text-3xl font-bold">Alternatif Penilaian</h1>
                <span class="rounded absolute w-56 bg-purple-600 inline-block "></span>
            </div>
            <div class="flex justify-center mt-16 mb-16 overflow-x-auto">
            <?php foreach($data as $item): ?>
                <button class="px-3 md:px-4 py-2 shadow-xl mx-1 md:mx-2 focus:outline-none">💠<?= $item['kategori'] ?></button>
            <?php endforeach; ?>
            </div>
        </section>
    
        <section class="sec2 p-10 container  m-auto">
            <div class="subtitle text-center relative">
                <h1 class="inline-block text-3xl font-bold">Alternatif Kriteria</h1>
                <span class="rounded absolute w-32 bg-purple-600 inline-block "></span>
            </div>
            <p class="text-gray-600 my-5 mb-10 text-sm mx-auto w-64 text-center">Berbagai cakupan kriteria kami sediakan untuk anda sehingga variasinya luas </p>
            
            <div class="grid xs:grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-8 md:p-10">
                <div>
                    <div class="flex items-center">
                        <img src="https://i.pinimg.com/564x/4a/4b/9a/4a4b9a63f74a2199ee85626f3cd70147.jpg" alt="" class="h-12 w-12 object-fill rounded-xl">
                        <h1 class="text-purple-500 font-bold text-lg p-2">Kriteria 1</h1>
                    </div>
                    <p class="mt-1 text-gray-600 my-5 text-sm">Kambing jantan, Berat 30 kg, Usia 1 thn. </p>
                </div>
                <div>
                    <div class="flex items-center">
                        <img src="https://i.pinimg.com/564x/40/e7/b0/40e7b0ea778a9dca1ed2f464ce79a050.jpg" alt="" class="h-12 w-12 object-fill rounded-xl">
                        <h1 class="text-purple-500 font-bold text-lg p-2">Kriteria 2</h1>
                    </div>
                    <p class="mt-1 text-gray-600 my-5 text-sm">Kambing Betina, Berat 35 kg, Usia 1 thn. </p>
                </div>
                <div>
                    <div class="flex items-center">
                        <img src="https://i.pinimg.com/564x/87/0e/ee/870eee93d0109e0e22dd34036df3f755.jpg" alt="" class="h-12 w-12 object-fill rounded-xl">
                        <h1 class="text-purple-500 font-bold text-lg p-2">Kriteria 3</h1>
                    </div>
                    <p class="mt-1 text-gray-600 my-5 text-sm">Kambing jantan, Berat 40 kg, Usia 1 thn. </p>
                </div>
                <div>
                    <div class="flex items-center">
                        <img src="https://i.pinimg.com/564x/2e/d8/b5/2ed8b5a312eed59d9bdeaee5b5f00ed0.jpg" alt="" class="h-12 w-12 object-fill rounded-xl">
                        <h1 class="text-purple-500 font-bold text-lg p-2">Kriteria 4</h1>
                    </div>
                    <p class="mt-1 text-gray-600 my-5 text-sm">Kambing jantan, Berat 35 kg, Usia 3 thn. </p>
                </div>
                <div>
                    <div class="flex items-center">
                        <img src="https://i.pinimg.com/564x/d3/75/4d/d3754dadeed8a28dea4a423cc75b9cc7.jpg" alt="" class="h-12 w-12 object-fill rounded-xl">
                        <h1 class="text-purple-500 font-bold text-lg p-2">Kriteria 5</h1>
                    </div>
                    <p class="mt-1 text-gray-600 my-5 text-sm">Kambing Betina, Berat 20 kg, Usia 4 thn. </p>
                </div>
                <div>
                    <div class="flex items-center">
                        <img src="https://i.pinimg.com/564x/30/a9/77/30a977a58956901efe0ed637941708a2.jpg" alt="" class="h-12 w-12 object-fill rounded-xl">
                        <h1 class="text-purple-500 font-bold text-lg p-2">Kriteria 6</h1>
                    </div>
                    <p class="mt-1 text-gray-600 my-5 text-sm">Kambing jantan, Berat 20 kg, Usia 2 thn.</p>
                </div>
            </div>
        </section>
    </div>
    <section class="sec3 p-10 container  m-auto bg-gray-100">
        <div class="subtitle text-center relative">
            <h1 class="inline-block text-3xl font-bold">Coba Layanan Kami!</h1>
            <span class="rounded absolute w-48 bg-purple-600 inline-block "></span>
        </div>

        <div class="md:flex sm:flex-col md:flex-row justify-center md:p-10 mt-10">
            <div class="md:px-8 w-full md:w-2/5">
                <div class="bg-purple-600 w-full h-8"></div>
                <div class="bg-purple-600 w-full h-8 mt-2"></div>
                <div class="bg-purple-600 w-full h-8 mt-2"></div>
                <div class="bg-purple-600 w-full h-8 mt-2"></div>
            </div>
            <div class="md:p-4 md:mt-0 w-full md:w-1/2">
                <h2 class="text-2xl font-bold mt-0 text-purple-600">Kambing-ku</h2>
                <p class="text-gray-600 mt-2 mb-4 text-sm">Tersedia berbagai kriteria yang dibutuhkan. Bermacam alternatif juga diberikan. Siapkah melakukan pemilihan kambing kurban? </p>
                <a href="<?= base_url('/login'); ?>"class="px-6 py-2 text-sm font-semibold text-white bg-purple-600 hover:bg-white hover:text-purple-600 rounded-md">Login</a>
            </div>
        </div>
    </section>
    <section class="sec5 p-10 container m-auto border" id="testimoni">
        <div class="subtitle text-center relative">
            <h1 class="inline-block text-3xl font-bold">Testimoni</h1>
            <span class="rounded absolute w-32 bg-purple-600 inline-block "></span>
        </div>
        <h3 class="font-bold mt-6 text-center text-sm">Apa yang mereka katakan tentang kami?</h3>
    
        <div class="md:flex items-center justify-around md:flex-row-reverse mt-16">
            <div class="w-full md:w-1/2">
                <img src="https://raw.githubusercontent.com/AmardeepKesharwani/education-landing-page/7463805ddcd393c958883a39e27f1e29e288aec6/img/Grades_re_j7d6.svg" alt="">
            </div>
            <div class="w-full md:w-1/3">
                <p class="text-gray-800 text-md mb-2">"SPK pemilihan kambing kurban sangat membantu dalam menghemat waktu dan memastikan kambing yang dipilih sesuai kriteria. Terima kasih!"
                </p>
                <a href="#" class="text-purple-600 font-semibold"> - Ny. Siti Lela</a>
            </div>
        </div>
    
    </section>
    <section class="sec8 p-10 container  m-auto">
        <div class="subtitle text-center relative">
            <h1 class="inline-block text-3xl font-bold">Pelanggan Kami</h1>
            <span class="rounded absolute w-32 bg-purple-600 inline-block "></span>
        </div>
        <div class="max-w-4xl my-10 mx-auto">
            <img src="https://github.com/AmardeepKesharwani/education-landing-page/blob/main/img/bg-testimonials.jpg?raw=true" alt="">
        </div>
    </section>

    <footer class="bg-black" id="about-us">
        <div class="container m-auto p-2 p-10">
            <h2 class="text-2xl md:text-3xl font-semibold text-white">Tentang Kami</h2>
            <p class="text-gray-500 mt-2 mb-2 text-sm max-w-xl">Website Ini Dibentuk Oleh <span class="text-gray-300">Kelompok 1</span> Untuk Memenuhi Tugas Akhir Matakuliah Framework Programming dan Sistem Pendukung Keputusan</p>
        </div>
    </footer>
    <script>
        const nav = document.getElementById("nav");
        const menu = document.querySelector(".menu")
        window.addEventListener("scroll", () => {
            let offset = window.pageYOffset;
            if(offset > 50) {
                if(!nav.classList.contains("nav-bg-show")) {
                    nav.classList.add("nav-bg-show")
                }
            } else {
                if(nav.classList.contains("nav-bg-show")) {
                    nav.classList.remove("nav-bg-show")
                }
            }
        })

        const navOpen = () => menu.classList.add("active");
        const navClose = () => menu.classList.remove("active");

    </script>
</body>
</html>