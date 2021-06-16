<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Web Title -->
  <title>Autentikasi Akun | Portal Aplikasi</title>
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
    <auth-form>
      <template #login-form-administrator>
        <form action="">
          <auth-form-input
            icon-class="bx bx-at"
            input-type="text"
            input-name="username"
            input-id="username"
            label-for="username"
            label-text="Username Administrator Apotek Anda"
            placeholder="kimiafarma-malang.kawi@administrator"
          ></auth-form-input>
          <auth-form-input
            icon-class="bx bxs-lock"
            input-type="password"
            input-name="password"
            input-id="password"
            label-for="password"
            label-text="Password"
            placeholder="silahkan masukkan password anda"
          ></auth-form-input>
          <div class="mt-12 text-center">
            <button
              type="submit"
              class="uppercase text-white font-bold bg-primary-blue px-16 py-3 rounded-full transform hover:-translate-y-2 transition ease-out duration-300"
            >
              Login
            </button>
          </div>
        </form>
      </template>

      <template #login-form-doctor>
        <form action="{{ action('AuthController@postLogin') }}" method="POST">
          @csrf
          <auth-form-input
            icon-class="bx bx-at"
            input-type="email"
            input-name="email_address"
            input-id="email_address"
            label-for="email_address"
            label-text="Alamat Email"
            placeholder="kimiafarma-malang.kawi@administrator"
          >
            <span class="text-red-400 text-xs italic font-thin">@error('email_address') {{ $message }} @enderror</span>
          </auth-form-input>
          <auth-form-input
            icon-class="bx bx-lock"
            input-type="password"
            input-name="password"
            input-id="password"
            label-for="password"
            label-text="Password"
            placeholder="silahkan masukkan password anda"
          >
            <span class="text-red-400 text-xs italic font-thin">@error('password') {{ $message }} @enderror</span>
          </auth-form-input>
          <div class="mt-12 text-center">
            <button
              type="submit"
              class="uppercase text-white font-bold bg-primary-blue px-16 py-3 rounded-full transform hover:-translate-y-2 transition ease-out duration-300"
            >
              Login
            </button>
          </div>
        </form>
      </template>

      <template #register-form-doctor>
        <form action="{{ action('AuthController@postRegister') }}" method="POST">
          @csrf
          <auth-form-input
            icon-class="bx bxs-user-circle"
            input-type="text"
            input-name="fullname"
            input-id="text"
            label-for="text"
            label-text="Nama Lengkap"
            placeholder="nama lengkap tanpa gelar dokter"
          >
            <span class="text-red-400 text-xs italic font-thin">@error('fullname') {{ $message }} @enderror</span>
          </auth-form-input>
          <auth-form-input
            icon-class="bx bx-at"
            input-type="email"
            input-name="email_address"
            input-id="email_address"
            label-for="email_address"
            label-text="Alamat Email"
            placeholder="kimiafarma-malang.kawi@administrator"
          >
            <span class="text-red-400 text-xs italic font-thin">@error('email_address') {{ $message }} @enderror</span>
          </auth-form-input>
          <auth-form-input
            icon-class="bx bx-lock"
            input-type="password"
            input-name="password"
            input-id="password"
            label-for="password"
            label-text="Password"
            placeholder="silahkan masukkan password anda"
          >
            <span class="text-red-400 text-xs italic font-thin">@error('password') {{ $message }} @enderror</span>
          </auth-form-input>
          <div class="mt-12 text-center">
            <button
              type="submit"
              class="uppercase text-white font-bold bg-primary-blue px-16 py-3 rounded-full transform hover:-translate-y-2 transition ease-out duration-300"
            >
              Register
            </button>
          </div>
        </form>
      </template>
    </auth-form>
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
  @include ('mixins.swalMixins')
</body>
</html>