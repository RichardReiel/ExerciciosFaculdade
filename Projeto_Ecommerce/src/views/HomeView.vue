<template>
  <div class="flex min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="w-1/4 p-4">
      <Sidebar :categories="categories" :filter="filterCategory" />
    </div>
    <div class="flex-1 p-4">
      <div class="flex justify-between mb-4">
        <select
          v-model="sort"
          @change="sortProducts"
          class="border rounded p-2"
        >
          <option value="">Ordenar</option>
          <option value="price-asc">Preço ↑</option>
          <option value="price-desc">Preço ↓</option>
        </select>
      </div>

      <ProductGrid :products="products" :addToCart="addToCart" />

      <Pagination :page="page" @change="changePage" />
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, watchEffect } from 'vue'
import { useRoute } from 'vue-router'
import api from '../components/services/api.js'
import Sidebar from '../components/Sidebar.vue'
import ProductGrid from '../components/ProductGrid.vue'
import Pagination from '../components/Pagination.vue'

const products = ref([])
const categories = ref([])
const page = ref(1)
const search = ref('')
const sort = ref('')

const route = useRoute()

async function fetchProducts() {
  const { data } = await api.get(`/products?limit=9&skip=${(page.value - 1) * 9}`)
  products.value = data.products
}

async function fetchCategories() {
  const { data } = await api.get('/products/categories')
  categories.value = data
}

async function searchProducts(term) {
  if (!term) return fetchProducts()
  const { data } = await api.get(`/products/search?q=${term}`)
  products.value = data.products
}

function filterCategory(slug) {
  api.get(`/products/category/${slug}`).then(res => {
    products.value = res.data.products
  })
}

function sortProducts() {
  if (sort.value === 'price-asc') products.value.sort((a, b) => a.price - b.price)
  if (sort.value === 'price-desc') products.value.sort((a, b) => b.price - a.price)
}

function changePage(newPage) {
  page.value = newPage
  fetchProducts()
}

function addToCart(product) {
  let cart = JSON.parse(localStorage.getItem('cart') || '[]')
  cart.push({ ...product, quantity: 1 })
  localStorage.setItem('cart', JSON.stringify(cart))
}

onMounted(() => {
  fetchProducts()
  fetchCategories()
})

watchEffect(() => {
  const searchTerm = route.query.search
  if (searchTerm) {
    searchProducts(searchTerm)
  } else {
    fetchProducts()
  }
})
</script>
