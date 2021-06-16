import Vue from 'vue'
import VueRouter from 'vue-router'

import AuthForm from '../components/AuthForm'
import Home from '../components/Home'

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
  },
  {
    path: '/home',
    name: 'Home',
    component: Home
  }
]

export default new VueRouter({
  routes,
  mode: 'history'
})