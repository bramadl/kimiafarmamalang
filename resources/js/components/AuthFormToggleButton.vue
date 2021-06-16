<template>
  <div class="absolute z-50  bottom-8 left-1/2 transform -translate-x-1/2">
    <div class="flex w-96">
      <button
        class="flex-1 font-bold py-3 rounded-l-full hover:underline focus:outline-none border-none appearance-none transition-all ease-out duration-500"
        :class="[ currentLoginForm === 'administrator' ? 'bg-white text-primary-blue' : 'bg-primary-blue text-white' ]"
        @click="$emit('showAdministratorLoginForm')"
      >
        Administrator
      </button>
      <button
        class="flex-1 font-bold py-3 rounded-r-full hover:underline focus:outline-none border-none appearance-none transition-all ease-out duration-500"
        :class="[ currentLoginForm === 'dokter' ? 'bg-white text-primary-blue' : 'bg-primary-blue text-white' ]"
        @click="$emit('showDoctorLoginForm')"
      >
        Dokter
      </button>
    </div>
  </div>
</template>

<script>
export default {
  name: 'AuthFormToggleButton',

  props: {
    currentLoginForm: {
      type: String,
      required: true
    }
  }
}
</script>
