<template>
    <div class="topbar-mobile">
        <div class="align-items-center">
            <div class="col-md-12">
                <div class="mobile-logobar">
                    <b-link href="/front/" class="mobile-logo"><img src="/theme/images/logo.svg" class="img-fluid" alt="logo"></b-link>
                </div>
                <div class="mobile-togglebar">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <div class="topbar-toggle-icon">
                                <b-link class="topbar-toggle-hamburger" href="javascript:void(0);" @click="sidebarToggleHamburger">
                                    <img src="/theme/images/svg-icon/horizontal.svg" class="img-fluid menu-hamburger-horizontal" alt="horizontal" v-if="!this.$store.state.topbar_toggle_hamburger">
                                    <img src="/theme/images/svg-icon/verticle.svg" class="img-fluid menu-hamburger-vertical" alt="verticle" v-if="this.$store.state.topbar_toggle_hamburger">
                                </b-link>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="menubar">
                                <b-link class="menu-hamburger" href="javascript:void(0);" @click="showmenu">
                                    <img src="/theme/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse" v-if="!this.$store.state.sidebar">
                                    <img src="/theme/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close" v-if="this.$store.state.sidebar">
                                </b-link>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
      name: 'TopbarMobile',
      methods: {
        showmenu: function() {
          this.$store.commit('sidebarToggle');
        },
        sidebarOverlayShow: function() {
          this.$store.commit('sidebarOverlayShow');
        },
        sidebarToggleHamburger: function () {
          this.$store.commit('sidebarToggleHamburger');
        }
      }
    }
</script>