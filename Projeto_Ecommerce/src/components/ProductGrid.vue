<template>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <ProductCard v-for="product in products" :key="product.id" :product="product" :addToCart="addToCart" />
    </div>
  </template>
  
  
  <script setup>
  import ProductCard from './ProductCard.vue'
  const props = defineProps(['products', 'addToCart'])
  </script>
  