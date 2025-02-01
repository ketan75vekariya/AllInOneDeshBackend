<script lang="ts" setup>
import {ref} from 'vue';
const count = ref<number>(0);

</script>
<template>
  <div class="container">
    <h1>Vue 3 + Vite + TypeScript</h1>
    <p>{{ count }}</p>
    <button @click="count++">Increment</button>
  
  <RouterView/>
  </div>
</template>