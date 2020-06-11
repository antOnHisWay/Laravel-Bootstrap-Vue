<template>
    <div>
        <b-form-rating v-model="value"></b-form-rating>
        <p class="mt-2">Value: {{ value }}</p>
    </div>
</template>

<script>
  export default {
    name: 'FormRating',
    data() {
      return {
        value: null
      }
    }
  }
</script>