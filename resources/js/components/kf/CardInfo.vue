<template>
  <div class="bg-white border-l-4 border-primary-yellow rounded-sm shadow-md">
    <div class="py-8 mx-6">
      <h3 class="text-xl mb-2">{{ value }}</h3>
      <p class="text-lg leading-none">{{ label.en }}</p>
      <p class="text-xs font-thin">{{ label.in }}</p>
    </div>
  </div>
</template>

<script>
export default {
  name: 'CardInfo',

  props: {
    label: {
      type: [Object],
      required: true
    },
    value: {
      type: Number,
      required: true
    }
  }
}
</script>
