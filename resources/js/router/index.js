import Vue from 'vue'
import VueRouter from 'vue-router'

import AuthForm from '../components/AuthForm'

Vue.use(VueRouter)

const routes = [
  {
    path: '/login',
    name: 'Login',
    component: AuthForm
  },
  {
    path: '/register',
    name: 'Register',
    component: AuthForm
  }
]

export default new VueRouter({
  routes,
  mode: 'history'
})