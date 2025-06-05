<template>
    <div class="flex gap-2 justify-center">
      <button @click="prev" :disabled="page === 1" class="p-2 bg-gray-300">Anterior</button>
      <span class="p-2">Página {{ page }}</span>
      <button @click="next" class="p-2 bg-gray-300">Próxima</button>
    </div>
  </template>
  
  <script setup>
  const props = defineProps(['page'])
  const emit = defineEmits(['change'])
  
  function prev() {
    if (props.page > 1) emit('change', props.page - 1)
  }
  
  function next() {
    emit('change', props.page + 1)
  }
  </script>
  