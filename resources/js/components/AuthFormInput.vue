<template>
  <div class="mb-4">
    <label
      :for="labelFor"
      class="block text-primary-blue mb-4"
    >{{ labelText }}</label>
    <div class="flex">
      <div class="px-4 py-3 bg-primary-blue rounded-l-md flex items-center justify-center">
        <i class="text-white" :class="iconClass"></i>
      </div>
      <input
        :id="inputId"
        :name="inputName"
        :type="inputType"
        class="block w-full h-auto rounded-r-md bg-transparent outline-none focus:outline-none border border-primary-blue-50 placeholder-primary-blue-50 px-4 py-3 italic"
        :placeholder="placeholder"
        @input="handleInput">
    </div>
    <slot />
  </div>
</template>

<script>
export default {
  name: 'AuthFormInput',

  props: {
    iconClass: {
      type: String,
      required: true
    },
    inputId: {
      type: String,
      required: true
    },
    inputType: {
      type: String,
      required: true
    },
    inputName: {
      type: String,
      required: true
    },
    labelFor: {
      type: String,
      required: true
    },
    labelText: {
      type: String,
      required: true
    },
    placeholder: {
      type: String,
      required: true
    }
  },

  methods: {
    handleInput () {
      const manipulateClass = (add, remove) => {
        event.target.classList.add(add)
        event.target.classList.remove(remove)
      }

      event.target.value.trim().length
        ? manipulateClass('not-italic', 'italic')
        : manipulateClass('italic', 'not-italic')
    }
  }
}
</script>
