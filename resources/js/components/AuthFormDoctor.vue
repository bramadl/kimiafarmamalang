<template>
  <div class="absolute left-0 top-0 w-full h-screen flex" :class="targetZIndex">
    <div class="flex-1 flex items-center justify-center overflow-hidden">
      <div
        ref="login-dokter-form"
        class="w-full flex items-center justify-center transform transition-all ease-out duration-300"
        :class="doctorForm"
      >
        <div class="w-3/4 text-primary-blue">
          <div class="mb-8">
            <h1 class="text-3xl font-thin">
              Halo <strong class="font-bold">Dokter!</strong>
            </h1>
            <p class="text-lg font-thin">
              {{ $route.path === '/login' ? 'Silahkan Login Dengan Akun Anda.' : 'Silahkan Isi Beberapa Data Untuk Akun Anda.' }}
            </p>
          </div>
          <slot />
        </div>
      </div>
    </div>
    <div class="flex-1 flex items-center justify-center overflow-hidden">
      <div
        ref="login-dokter-banner"
        class="login-dokter-bg w-full h-screen flex items-center justify-center transform transition-all ease-out duration-300"
        :class="doctorBanner"
      >
        <div class="w-3/4 text-center text-white">
          <h1 class="text-3xl font-bold">
            Selamat Datang!
          </h1>
          <p class="text-md font-thin leading-5 my-4">
            Sekarang Dokter dapat menuliskan <br>
            resep obat untuk pasien melalui aplikasi <strong class="font-bold">Elektronik Resep</strong>.
          </p>
          <p
            v-if="$route.path === '/login'"
            class="text-sm font-thin leading-5"
          >
            Dokter belum punya akun ?
            <router-link to="/register" class="font-bold underline">
              <span @click="switchFormTo('register')">Silahkan Daftarkan Akun</span>
            </router-link>
            dokter terlebih dahulu
          </p>
          <p
            v-else
            class="text-sm font-thin leading-5"
          >
            Dokter sudah punya akun ?
            <router-link to="/login" class="font-bold underline">
              <span @click="switchFormTo('login')">Silahkan Login Akun</span>
            </router-link>
            dokter untuk masuk ke aplikasi.
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'AuthFormDoctor',

  props: {
    initialClasses: {
      type: Object,
      required: true
    }
  },

  computed: {
    doctorBanner () {
      return this.initialClasses.doctorBanner
    },
    doctorForm () {
      return this.initialClasses.doctorForm
    },
    targetZIndex () {
      return this.initialClasses.doctorZIndex
    }
  },

  methods: {
    switchFormTo (to) {
      event.preventDefault()
      this.$router.push(`/${to}`)
    }
  }
}
</script>
