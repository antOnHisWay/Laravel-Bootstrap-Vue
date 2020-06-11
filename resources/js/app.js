require('./bootstrap');

import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

import router from './router/index'
import store from './store/index'

Vue.use(BootstrapVue);
Vue.use(IconsPlugin);

import 'bootstrap-vue/dist/bootstrap-vue.css'

window.Vue = require('vue');

Vue.component('Layout', () => import('./layout/Layout.vue'));

window.onload = function() {
  const app = new Vue({
    router,
    store,
    el: '#app',
    experiment: ''
  });
};
