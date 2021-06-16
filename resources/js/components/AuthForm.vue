<template>
  <div class="relative w-full h-screen">
    <AuthFormToggleButton
      :current-login-form="currentLoginForm"
      @showAdministratorLoginForm="showAdministratorLoginForm"
      @showDoctorLoginForm="showDoctorLoginForm"
    />
    <AuthFormDoctor :initial-classes="initialFormClasses">
      <transition name="fade-in" mode="in-out">
        <slot v-if="$route.path === '/login'" name="login-form-doctor" />
        <slot v-else name="register-form-doctor" />
      </transition>
    </AuthFormDoctor>
    <AuthFormAdministrator :initial-classes="initialFormClasses">
      <slot name="login-form-administrator" />
    </AuthFormAdministrator>
  </div>
</template>

<script>
import AuthFormToggleButton from './AuthFormToggleButton.vue'
import AuthFormDoctor from './AuthFormDoctor.vue'
import AuthFormAdministrator from './AuthFormAdministrator.vue'

export default {
  name: 'AuthForm',

  components: {
    AuthFormToggleButton,
    AuthFormDoctor,
    AuthFormAdministrator
  },

  data () {
    return {
      currentLoginForm: 'administrator',
      initialFormClasses: {
        administratorForm: '',
        administratorBanner: '',
        administratorZIndex: 'z-10',
        doctorForm: 'translate-x-full',
        doctorBanner: '-translate-x-full',
        doctorZIndex: 'z-0'
      }
    }
  },

  watch: {
    currentLoginForm () {
      let {
        administratorForm: af, administratorBanner: ab, administratorZIndex: az,
        doctorForm: fd, doctorBanner: db, doctorZIndex: dz
      } = this.initialFormClasses

      const ifc = this.initialFormClasses

      if (af === '' && ab === '' && az === 'z-10') {
        ifc.administratorForm = '-translate-x-full'
        ifc.administratorBanner = 'translate-x-full'
        ifc.administratorZIndex = 'z-0'
      } else {
        ifc.administratorForm = ''
        ifc.administratorBanner = ''
        ifc.administratorZIndex = 'z-10'
      }

      if (fd === 'translate-x-full' && db === '-translate-x-full' && dz === 'z-0') {
        ifc.doctorForm = ''
        ifc.doctorBanner = ''
        ifc.doctorZIndex = 'z-10'
      } else {
        ifc.doctorForm = 'translate-x-full'
        ifc.doctorBanner = '-translate-x-full'
        ifc.doctorZIndex = 'z-0'
      }
    }
  },

  mounted () {
    this.currentLoginForm = this.$route.path === '/login' ? 'administrator' : 'dokter'
  },

  methods: {
    showAdministratorLoginForm () {
      if (this.$route.path === '/register') {
        this.$router.push('/login')
      }
      this.currentLoginForm = 'administrator'
    },
    showDoctorLoginForm () {
      this.currentLoginForm = 'dokter'
    }
  }
}
</script>

<style lang="scss">
.login-admin-bg {
  background: linear-gradient(28.52deg, #2E3A59 6.16%, rgba(46, 58, 89, 0.5) 94.26%),
              url('/img/bg/admin-login.png');
}
.login-dokter-bg {
  background: linear-gradient(28.52deg, #2E3A59 6.16%, rgba(46, 58, 89, 0.5) 94.26%),
              url('/img/bg/dokter-login.png')
}
.fade-in-enter-active,
.fade-in-leave-active {
  transition: .4s ease-out;
}
.fade-in-enter,
.fade-in-leave-to {
  opacity: 0;
  transform: translateY(1rem);
}
</style>