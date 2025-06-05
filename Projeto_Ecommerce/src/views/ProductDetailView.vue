<template>
  <div>
    <h1>{{ product.title }}</h1>
    <img :src="product.thumbnail" 
     class="max-w-md w-full h-auto object-contain mx-auto">
    <p>{{ product.description }}</p>
    <button @click="addToCart(product)" class="bg-green-500 text-white p-2">Adicionar ao Carrinho</button>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { useRoute } from 'vue-router'
import api from '../components/services/api.js'

const route = useRoute()
const product = ref({})

async function fetchProduct() {
  const { data } = await api.get(`/products/${route.params.id}`)
  product.value = data
}

function addToCart(product) {
  let cart = JSON.parse(localStorage.getItem('cart') || '[]')
  cart.push({...product, quantity: 1})
  localStorage.setItem('cart', JSON.stringify(cart))
}

onMounted(fetchProduct)
</script>
