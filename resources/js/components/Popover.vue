<template>
    <div class="text-center my-3">
        <b-button v-b-popover.hover.top="'I am popover directive content!'" title="Popover Title">
            Hover Me
        </b-button>

        <b-button id="popover-target-1">
            Hover Me
        </b-button>
        <b-popover target="popover-target-1" triggers="hover" placement="top">
            <template v-slot:title>Popover Title</template>
            I am popover <b>component</b> content!
        </b-popover>
    </div>
</template>

<script>
  export default {
    name: 'Popover'
  }
</script>