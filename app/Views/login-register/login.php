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

<div class="flex flex-wrap min-h-screen w-full content-center justify-center py-10">
        <div class="absolute w-60 h-60 rounded-xl bg-purple-300 -top-5 -left-16 z-0 transform rotate-45 hidden md:block">
        </div>
        <div class="absolute w-48 h-48 rounded-xl bg-purple-300 bottom-6 right-10 transform rotate-12 hidden md:block">
        </div>
  <!-- Login component -->
  <div class="flex shadow-md">
    <!-- Login form -->
    <div class="flex flex-wrap content-center justify-center rounded-l-md bg-white" style="width: 24rem; height: 32rem;">
      <div class="w-72">
        <!-- Heading -->
        <h4 class="text-gray-400 text-sm text-center">Selamat Datang Kembali!</h4>
        <h1 class="text-xl font-semibold text-center">SPK Rekomendasi Pemilihan <span class="text-purple-700">Kambing</span> Kurban</h1>

        <!-- Form -->
        <form action="/login" method="POST" class="mt-10">
          <div class="mb-3">
            <label class="mb-2 block text-xs font-semibold">Username</label>
            <input type="text" name="username" placeholder="Masukan Username" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500 text-sm" />
            <p class="text-red-500"><?= isset($validator) ? (array_key_exists('username', $validator) ? $validator['username'] : null) : null ?></p>
          </div>

          <div class="mb-3">
            <label class="mb-2 block text-xs font-semibold">Password</label>
            <input type="password" name="password" placeholder="*****" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500 text-sm" />
            <p class="text-red-500"><?= isset($validator) ? (array_key_exists('password', $validator) ? $validator['password'] : null) : null ?></p>
          </div>

          <!-- <div class="mb-3 flex flex-wrap content-center">
            <input id="remember" type="checkbox" class="mr-1 checked:bg-purple-700" /> <label for="remember" class="mr-auto text-xs font-semibold">Remember for 30 days</label>
            <a href="#" class="text-xs font-semibold text-purple-700">Forgot password?</a>
          </div> -->

          <div class="mb-3">
            <button class="mb-1.5 block w-full text-center text-white bg-purple-700 hover:bg-purple-900 px-2 py-1.5 rounded-md">Sign in</button>
            <div class="text-center"><a href="<?= base_url('/register'); ?>" class="mt-4 text-sm">Belum punya akun? <span class="underline cursor-pointer">Register</span>
            </a></div>
          </div>
        </form>

        <div class="w-40 h-40 absolute bg-purple-300 rounded-full top-0 right-12 hidden md:block"></div>
            <div class="w-20 h-40 absolute bg-purple-300 rounded-full bottom-20 left-10 transform rotate-45 hidden md:block">
        </div>
      </div>
    </div>

    <!-- Login banner -->
    <div class="flex flex-wrap content-center justify-center rounded-r-md" style="width: 24rem; height: 32rem;">
      <img class="w-full h-full bg-center bg-no-repeat bg-cover rounded-r-md" src="https://i.pinimg.com/564x/a8/41/70/a841701336a0dd1cdc35cbfb0cde3707.jpg">
    </div>

  </div>

</div>
</body>
</html>