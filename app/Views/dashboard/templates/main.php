<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    Dashboard Page
  </title>
  <!-- Link daisyui -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.1.6/dist/full.css" rel="stylesheet" type="text/css" />

  <!-- Link tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

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
          },
          backgroundColor: ['even']
        }
      }
    }
  </script>

  <style type="text/tailwindcss">
    @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; }

        @layer utilities {

         @layer base {
          *{
            font-family: 'Poppins', sans-serif;
            color: black;
            /* border: 1px solid red; */
          }

          <?= $this->renderSection('custom-css'); ?>
         }
        }
      </style>

</head>

<body class="bg-gray-300 font-family-karla flex">

  <?= $this->include('dashboard/templates/sidebar'); ?>

  <div class="w-full flex flex-col h-screen overflow-y-hidden">
    <?= $this->include('dashboard/templates/header'); ?>
    <div class="w-full overflow-x-hidden border-t flex flex-col">
      <?= $this->renderSection('content'); ?>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
  <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
  <!-- AlpineJS -->
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <!-- Font Awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
      integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
  <!-- ChartJS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
    integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
</body>

</html>