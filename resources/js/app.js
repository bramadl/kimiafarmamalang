require('./bootstrap');

import Vue from 'vue'

import AuthForm from './components/AuthForm'
import AuthFormInput from './components/AuthFormInput'
import AuthFormToggleButton from './components/AuthFormToggleButton.vue'

import router from './router'

Vue.config.productionTip = false
Vue.prototype.$eventBus = new Vue()

window.Swal = require('sweetalert2')
window.vm = new Vue({
  el: '#app',

  router,

  components: {
    AuthForm,
    AuthFormInput,
    AuthFormToggleButton
  }
})