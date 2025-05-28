<script setup>
import { RouterLink, RouterView } from 'vue-router'
import Navbar from './components/NavbarComponent.vue'
</script>

<template>
  <div class="flex flex-col mb-10">
    <Navbar/>
  </div>

  <div>
    <router-view></router-view>
  </div>
</template>