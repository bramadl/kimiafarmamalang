import Vue from 'vue'
import VueRouter from 'vue-router'

import AuthForm from '../pages/AuthForm'
import Home from '../pages/Home'
import Doctors from '../pages/Doctors'

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
  },
  {
    path: '/doctors',
    name: 'Doctor',
    component: Doctors
  }
]

export default new VueRouter({
  routes,
  mode: 'history'
})