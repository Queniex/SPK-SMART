<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Link daisyui -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.24.2/dist/full.css" rel="stylesheet" type="text/css" />

    <!-- Link tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
            container: {
                center: true,
                padding: '16px'
            },
            extend: {
                colors: {
                primary: '#14b8a6',
                },
                screens: {
                '2xl': '1320px',
                }
            }
            }
        }
        </script>

        <style type="text/tailwindcss">
        /* import font */
        @import url('https://fonts.googleapis.com/css2?family=Comic+Neue&family=Dosis:wght@500&family=Luckiest+Guy&family=Poppins:ital,wght@0,300;0,500;0,600;0,800;0,900;1,600&display=swap');

        @layer utilities {

        @layer base {
            *{
            font-family: 'Poppins', sans-serif;
            color: black;
            /* border: 1px solid red; */
            }
        }
        }
        </style>
</head>
<body>
     
    <?php use PHPUnit\Util\Xml\Validator;
    if (session()->getFlashdata('error')) {
        $validator  = session()->getFlashdata('error');
    }?>   

    <?php if(session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-<?= session()->getFlashdata('warna'); ?>" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <div class="flex flex-wrap min-h-screen w-full flex justify-center items-center">
        <div class="absolute w-60 h-60 rounded-xl bg-purple-300 -top-5 -left-16 z-0 transform rotate-45 hidden md:block">
        </div>
        <div class="absolute w-48 h-48 rounded-xl bg-purple-300 bottom-6 right-10 transform rotate-12 hidden md:block">
        </div>
        <div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
            <div>
                <h1 class="text-3xl font-bold text-purple-700 text-center mb-4 cursor-pointer">REGISTER</h1>
                <p class="w-80 text-center text-sm mb-8 font-semibold text-gray-700 tracking-wide cursor-pointer">Buatlah akun untuk mengakses fitur website SPK Pemilihan Kambing Kurban</p>
            </div>
            <form action="/register" method="POST">
                <div class="space-y-4">
                    <input type="text" name="username" placeholder="Username" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    <p class="text-red-500"><?= isset($validator) ? (array_key_exists('username', $validator) ? $validator['username'] : null) : null ?></p>
                    <input type="text" name="password" placeholder="Password" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    <p class="text-red-500"><?= isset($validator) ? (array_key_exists('password', $validator) ? $validator['password'] : null) : null ?></p>
                </div>
                <div class="text-center mt-6">
                    <button class="px-2 py-1.5 rounded-md w-72 text-white bg-purple-700 hover:bg-purple-500 hover:text-black rounded-2xl">Buat Akun</button>
                    <div class=""><a href="<?= base_url('/login'); ?>" class="mt-4 text-sm">Sudah punya akun? <span class="underline cursor-pointer"> Sign In</span>
                    </a></div>
                </div>
            </form>
        </div>
        <div class="w-40 h-40 absolute bg-purple-300 rounded-full top-0 right-12 hidden md:block"></div>
            <div class="w-20 h-40 absolute bg-purple-300 rounded-full bottom-20 left-10 transform rotate-45 hidden md:block">
        </div>
	</div>    
</body>
</html>