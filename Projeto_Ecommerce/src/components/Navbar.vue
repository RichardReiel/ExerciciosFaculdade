<script setup>
import SearchBar from './SearchBar.vue'
import { useRouter } from 'vue-router'

const router = useRouter()

function onSearch(term) {
  router.push({ path: '/', query: { search: term } })
}
</script>

<template>
  <nav class="bg-blue-800 p-4 text-white flex justify-between items-center">
    <div class="flex gap-4">
      <router-link to="/">Home</router-link>
      <router-link to="/cart">Carrinho</router-link>
    </div>
    <SearchBar @search="onSearch" />
  </nav>
</template>
