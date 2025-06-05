<template>
  <div class="flex gap-2">
    <input v-model="search" placeholder="Buscar..." class="border rounded p-2 flex-1">
    <button @click="onSearch" class="bg-blue-600 text-white px-4 rounded">Buscar</button>
  </div>
</template>

<script setup>
import { ref } from 'vue'
const emit = defineEmits(['search'])
const search = ref('')
function onSearch() {
  emit('search', search.value)
}
</script>
