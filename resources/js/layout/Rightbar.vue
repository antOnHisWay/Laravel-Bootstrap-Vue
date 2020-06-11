<template>
    <div class="rightbar" :class="{'toggle-menu': this.$store.state.sidebar}">

        <topbar-mobile></topbar-mobile>

        <topbar></topbar>

        <breadcrumb></breadcrumb>

        <div class="content-main">
            <router-view></router-view>
        </div>

        <rightbar-footer></rightbar-footer>
    </div>
</template>

<script>
    import TopbarMobile from "./TopbarMobile";
    import Topbar from "./Topbar";
    import RightbarFooter from "./RightbarFooter";
    import Breadcrumb from "./Breadcrumb";

    export default {
      name: 'Rightbar',
      components: {
        Breadcrumb,
        RightbarFooter,
        Topbar,
        TopbarMobile},
    }
</script>