<template>
    <div>
        <div id="infobar-settings-sidebar" class="infobar-settings-sidebar" :class="{sidebarshow : this.$store.state.sidebar_overlay_show}">
            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                <h4>Settings</h4><a href="javascript:void(0)" id="infobar-settings-close" class="infobar-settings-close" @click="sidebarOverlayShow"><img src="/theme/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
            </div>
            <div class="infobar-settings-sidebar-body">
                <b-container class="custom-mode-setting">
                    <b-row class="align-items-center pb-3">
                        <b-col cols="8"><h6 class="mb-0">Payment Reminders</h6></b-col>
                        <b-col cols="4" class="text-right"><input type="checkbox" class="js-switch-setting-first" checked /></b-col>
                    </b-row>
                    <b-row class="align-items-center pb-3">
                        <b-col cols="8"><h6 class="mb-0">Stock Updates</h6></b-col>
                        <b-col cols="4" class="text-right"><input type="checkbox" class="js-switch-setting-second" checked /></b-col>
                    </b-row>
                    <b-row class="align-items-center pb-3">
                        <b-col cols="8"><h6 class="mb-0">Open for New Products</h6></b-col>
                        <b-col cols="4" class="text-right"><input type="checkbox" class="js-switch-setting-third" /></b-col>
                    </b-row>
                    <b-row class="align-items-center pb-3">
                        <b-col cols="8"><h6 class="mb-0">Enable SMS</h6></b-col>
                        <b-col cols="4" class="text-right"><input type="checkbox" class="js-switch-setting-fourth" checked /></b-col>
                    </b-row>
                    <b-row class="align-items-center pb-3">
                        <b-col cols="8"><h6 class="mb-0">Newsletter Subscription</h6></b-col>
                        <b-col cols="4" class="text-right"><input type="checkbox" class="js-switch-setting-fifth" checked /></b-col>
                    </b-row>
                    <b-row class="align-items-center pb-3">
                        <b-col cols="8"><h6 class="mb-0">Show Map</h6></b-col>
                        <b-col cols="4" class="text-right"><input type="checkbox" class="js-switch-setting-sixth" /></b-col>
                    </b-row>
                    <b-row class="align-items-center pb-3">
                        <b-col cols="8"><h6 class="mb-0">e-Statement</h6></b-col>
                        <b-col cols="4" class="text-right"><input type="checkbox" class="js-switch-setting-seventh" checked /></b-col>
                    </b-row>
                    <b-row class="row align-items-center">
                        <b-col cols="8"><h6 class="mb-0">Monthly Report</h6></b-col>
                        <b-col cols="4" class="text-right"><input type="checkbox" class="js-switch-setting-eightth" checked /></b-col>
                    </b-row>
                </b-container>
            </div>
        </div>
        <div class="infobar-settings-sidebar-overlay" :class="{'sidebar-overlay-show': this.$store.state.sidebar_overlay_show}"></div>
    </div>
</template>

<script>
    export default {
      name: 'Overlay',
      methods: {
        sidebarOverlayShow: function() {
          this.$store.commit('sidebarOverlayShow');
        }
      }
    }
</script>