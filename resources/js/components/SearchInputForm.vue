<template>
  <div class="flex items-center justify-center bg-white rounded-full p-2 shadow-md">
    <label for="input" class="flex items-center justify-center w-8 h-8 rounded-full mx-2">
      <i class="bx bx-xs bx-search text-blue-primary"></i>
    </label>
    <input
      id="input"
      type="text"
      class="bg-transparent text-blue-primary-50 text-sm italic outline-none focus:outline-none w-96"
      placeholder="Cari data dokter berdasarkan nama atau email dokter"
      @input="handleInput"
    >
  </div>
</template>

<script>
export default {
  name: 'SearchInputForm',

  methods: {
    handleInput () {
      const manipulateClass = (add, remove) => {
        event.target.classList.add(add)
        event.target.classList.remove(remove)
      }

      event.target.value.trim().length
        ? manipulateClass('not-italic', 'italic')
        : manipulateClass('italic', 'not-italic')

      this.$emit('search', event.target.value)
    }
  }
}
</script>
