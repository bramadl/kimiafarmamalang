<template>
  <div class="absolute left-0 top-0 w-full h-screen flex" :class="targetZIndex">
    <div class="flex-1 flex items-center justify-center overflow-hidden">
      <div
        ref="login-administrator-banner"
        class="login-admin-bg w-full h-screen flex items-center justify-center transform transition-all ease-out duration-300"
        :class="administratorBanner"
      >
        <div class="w-3/4 text-center text-white">
          <h1 class="text-3xl font-bold mb-4">
            Selamat Datang!
          </h1>
          <p class="text-md font-thin leading-5">
            Sekarang Administrator Apotek dapat <br>
            mengelola resep obat dokter melalui aplikasi <strong class="font-bold">Elektronik Resep</strong>.
          </p>
        </div>
      </div>
    </div>
    <div class="flex-1 flex items-center justify-center overflow-hidden">
      <div
        ref="login-administrator-form"
        class="w-full h-screen flex items-center justify-center transform transition-all ease-out duration-300"
        :class="administratorForm"
      >
        <div class="w-3/4 text-primary-blue">
          <div class="mb-8">
            <h1 class="text-3xl font-thin">
              Halo <strong class="font-bold">Admin!</strong>
            </h1>
            <p class="text-lg font-thin">
              Silahkan Login Dengan Akun Apotek Anda.
            </p>
          </div>
          <slot />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'AuthFormAdministrator',

  props: {
    initialClasses: {
      type: Object,
      required: true
    }
  },

  computed: {
    administratorBanner () {
      return this.initialClasses.administratorBanner
    },
    administratorForm () {
      return this.initialClasses.administratorForm
    },
    targetZIndex () {
      return this.initialClasses.administratorZIndex
    }
  }
}
</script>
