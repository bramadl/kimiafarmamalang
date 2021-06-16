<template>
  <button
    class="flex items-center justify-center bg-white rounded-full p-2 shadow-md focus:outline-none"
    @click="$emit('createNewDoctor')"
  >
    <div class="flex items-center justify-center bg-primary-blue w-8 h-8 rounded-full">
      <i class="bx bx-sm bx-plus text-white"></i>
    </div>
    <div class="mx-2">
      <p>Buat Data Dokter Baru</p>
    </div>
  </button>
</template>

<script>
export default {

}
</script>

<style>

</style>