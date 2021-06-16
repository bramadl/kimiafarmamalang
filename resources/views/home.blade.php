<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Web Title -->
  <title>Halaman Utama | Aplikasi Resep Elektronik</title>
  <!-- Google Fonts: Roboto -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
  <!-- Boxicons -->
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
  <!-- Main Style -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <div id="app">
    <div class="w-full h-screen flex flex-col bg-primary-gray text-primary-blue">
      <div>
        <div class="shadow-md bg-white relative z-10">
          <div class="container mx-auto grid grid-cols-3">
            <div class="py-8 flex items-center justify-start">
              <button class="flex items-center justify-center">
                <i class="bx bx-sm bx-menu"></i>
              </button>
            </div>
            <div class="py-8 flex items-center justify-center">
              <a href="/home">
                <img src="/img/logo.svg" alt="Logo Kimia Farma">
              </a>
            </div>
            <div class="py-8 flex items-center justify-end">
              <a href="/account" class="block w-8 h-8 rounded-full overflow-hidden border">
                <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" alt="Doctor's Avatar" class="w-full h-full object-cover object-center">
              </a>
            </div>
          </div>
        </div>
        <div class="shadow-md bg-white relative">
          <div class="py-6">
            <p class="text-center font-light">
              Selamat datang, <strong class="font-bold">Administrator Apotek</strong> !  Di halaman ini, Anda dapat melihat ulasan data terkait Apotek Anda.
            </p>
          </div>
        </div>
      </div>
      <div class="flex-1 flex">
        <div class="w-56 bg-white">
          <div class="py-8 pr-8">
            <a href="/home" class="block w-full h-auto px-4 py-3 bg-primary-yellow rounded-r-full">
              <div class="text-sm text-white tracking-widest font-bold flex items-center">
                <i class="bx bx-sm bxs-dashboard" ></i>
                <span class="ml-4">Dashboard</span>
              </div>
            </a>

            <div class="my-8">
              <h2 class="text-sm text-primary-blue font-medium uppercase mb-4">Kelola Data Apotek</h2>
              <a href="/doctors" class="block w-full h-auto px-4 py-3 group hover:bg-primary-yellow transition ease-out duration-300 rounded-r-full">
                <div class="text-sm text-primary-blue group-hover:text-white tracking-widest font-light flex items-center">
                  <i class="bx bx-sm bx-user"></i>
                  <span class="ml-4">Data Dokter</span>
                </div>
              </a>
              <a href="/patients" class="block w-full h-auto px-4 py-3 group hover:bg-primary-yellow transition ease-out duration-300 rounded-r-full">
                <div class="text-sm text-primary-blue group-hover:text-white tracking-widest font-light flex items-center">
                  <i class="bx bx-sm bx-group"></i>
                  <span class="ml-4">Data Pasien</span>
                </div>
              </a>
            </div>

            <div class="my-8">
              <h2 class="text-sm text-primary-blue font-medium uppercase mb-4">Kelola Resep Obat</h2>
              <a href="/prescriptions" class="block w-full h-auto px-4 py-3 group hover:bg-primary-yellow transition ease-out duration-300 rounded-r-full">
                <div class="text-sm text-primary-blue group-hover:text-white tracking-widest font-light flex items-center">
                <i class="bx bx-sm bx-file-blank"></i>
                  <span class="ml-4">Draft Resep</span>
                </div>
              </a>
              <a href="/prescriptions/archive" class="block w-full h-auto px-4 py-3 group hover:bg-primary-yellow transition ease-out duration-300 rounded-r-full">
                <div class="text-sm text-primary-blue group-hover:text-white tracking-widest font-light flex items-center">
                  <i class="bx bx-sm bx-archive"></i>
                  <span class="ml-4">Arsip Resep</span>
                </div>
              </a>
            </div>

            <div class="my-8">
              <h2 class="text-sm text-primary-blue font-medium uppercase mb-4">Kelola Akun Admin</h2>
              <a href="/account" class="block w-full h-auto px-4 py-3 group hover:bg-primary-yellow transition ease-out duration-300 rounded-r-full">
                <div class="text-sm text-primary-blue group-hover:text-white tracking-widest font-light flex items-center">
                <i class="bx bx-sm bx-file-blank"></i>
                  <span class="ml-4">Account</span>
                </div>
              </a>
              <a href="/logout" class="block w-full h-auto px-4 py-3 group hover:bg-primary-yellow transition ease-out duration-300 rounded-r-full">
                <div class="text-sm text-primary-blue group-hover:text-white tracking-widest font-light flex items-center">
                  <i class="bx bx-sm bx-archive"></i>
                  <span class="ml-4">Logout</span>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="flex-1 border">
          <div class="p-10">
            <router-view></router-view>
          </div>
        </div>
      </div>
    </div>
  </div>

  <form action="{{ action('AuthController@logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
  </form>

  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>