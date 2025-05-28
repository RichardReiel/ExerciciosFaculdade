<template>
    <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-6 border-b-4 border-blue-500 inline-block pb-2">
      {{ title }}
    </h1>
  </template>
  
  <script>
  export default {
    name: 'SectionTitle',
    props: {
      title: {
        type: String,
        required: true
      }
    }
  }
  </script>
  