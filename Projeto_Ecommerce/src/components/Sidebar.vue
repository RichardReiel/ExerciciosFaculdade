<template>
  <aside class="bg-gray-100 p-4 rounded-lg shadow-md">
    <h2 class="text-xl font-bold mb-3">Categorias</h2>
    <ul class="space-y-2">
      <li v-for="category in categories" :key="category.slug"
          @click="filter(category.slug)"
          class="cursor-pointer hover:text-blue-600 hover:underline">
        {{ category.name }}
      </li>
    </ul>
  </aside>
</template>

<script setup>
const props = defineProps(['categories', 'filter'])
</script>
  