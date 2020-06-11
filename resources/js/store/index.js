import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const store = new Vuex.Store({
  state: {
    sidebar: false,
    sidebar_overlay_show: false,
    topbar_toggle_hamburger: false
  },
  mutations: {
    sidebarToggle (state) {
      state.sidebar = !state.sidebar
    },
    sidebarOverlayShow (state) {
      state.sidebar_overlay_show = !state.sidebar_overlay_show
    },
    sidebarToggleHamburger (state) {
      state.topbar_toggle_hamburger = !state.topbar_toggle_hamburger
    }
  }
});

export default store