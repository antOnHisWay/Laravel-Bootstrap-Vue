<template>
    <div>
        <label for="tags-basic">Type a new tag and press enter</label>
        <b-form-tags input-id="tags-basic" v-model="value" class="mb-2"></b-form-tags>
        <p>Value: {{ value }}</p>
    </div>
</template>

<script>
  export default {
    name: 'FormTags',
    data() {
      return {
        value: ['apple', 'orange']
      }
    }
  }
</script>