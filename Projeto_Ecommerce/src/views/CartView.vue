<template>
  <div>
    <h1 class="text-2xl font-bold mb-4">Carrinho</h1>
    <div v-for="item in cart" :key="item.id" class="flex items-center border p-4 mb-2 rounded-lg shadow">
      <img :src="item.thumbnail" class="w-16 h-16 object-cover mr-4">
      <div class="flex-1">
        <p class="font-semibold">{{ item.title }}</p>
        <input type="number" v-model="item.quantity" min="1" class="border p-1 w-16">
      </div>
      <button @click="remove(item.id)" class="ml-4 bg-red-500 hover:bg-red-600 text-white p-2 rounded">
        Remover
      </button>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
const cart = ref([])

function loadCart() {
  cart.value = JSON.parse(localStorage.getItem('cart') || '[]')
}

function remove(id) {
  cart.value = cart.value.filter(item => item.id !== id)
  localStorage.setItem('cart', JSON.stringify(cart.value))
}

onMounted(loadCart)
</script>
