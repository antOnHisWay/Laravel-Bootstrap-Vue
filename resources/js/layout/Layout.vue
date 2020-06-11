<template>
    <div>
        <div class="vertical-layout" v-bind:class="{'toggle-menu': this.$store.state.sidebar}">
            <overlay></overlay>
            <leftbar></leftbar>
        </div>

        <rightbar></rightbar>

    </div>
</template>

<script>
  import Leftbar from "./Leftbar";
  import Rightbar from "./Rightbar";
  import Overlay from "./Overlay";

  export default {
    name: 'Layout',
    components: {
      Overlay,
      Rightbar,
      Leftbar
    },
  }
</script>