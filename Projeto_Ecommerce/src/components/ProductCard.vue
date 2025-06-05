<template>
  <div 
    class="border rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300 bg-white cursor-pointer"
    @click="goToDetails"
  >
    <div class="w-full h-48 overflow-hidden">
      <img :src="product.thumbnail" class="w-full h-full object-cover" />
    </div>
    <div class="p-4">
      <h3 class="text-lg font-semibold mb-1">{{ product.title }}</h3>
      <p class="text-gray-700 mb-2">R$ {{ product.price }}</p>
      <p class="text-sm text-gray-500 mb-2">Estoque: {{ product.stock }}</p>
      <button
        @click.stop="addToCart(product)"
        class="block w-full mt-3 bg-green-600 hover:bg-green-700 active:scale-95 transform transition rounded py-2 text-white font-semibold"
      >
        Adicionar ao Carrinho
      </button>
    </div>
  </div>
</template>

<script setup>
import { useRouter } from 'vue-router'

const props = defineProps({
  product: Object,
  addToCart: Function
})

const router = useRouter()

function goToDetails() {
  router.push(`/product/${props.product.id}`)
}
</script>
