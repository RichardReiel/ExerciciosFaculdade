<template>
    <section class="p-6 md:p-12 max-w-6xl mx-auto">
      <div class="mb-8">
        <h1 class="text-4xl font-extrabold text-gray-800 mb-4">Meus Projetos</h1>
        <p class="text-lg text-gray-600">Aqui estão alguns dos projetos que desenvolvi ao longo da minha graduação.</p>
      </div>
      
      <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
          <h2 class="text-2xl font-semibold text-gray-700 mb-2">Projeto 1</h2>
          <p class="text-gray-600 mb-4">Sistema que traz informações de personagens da API do Dragon Ball Z. Tecnologias: HTML, CSS. JavaScript</p>
          <a href="https://github.com/RichardReiel/ExerciciosFaculdade/tree/main/DBZ_API" class="text-blue-600 hover:underline font-medium">Ver mais →</a>
        </div>
  
        <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
          <h2 class="text-2xl font-semibold text-gray-700 mb-2">Projeto 2</h2>
          <p class="text-gray-600 mb-4">Lógica de um jogo de RPG com Classe e Objeto em PHP. Tecnologias: HTML, PHP.</p>
          <a href="https://github.com/RichardReiel/ExerciciosFaculdade/tree/main/RPG" class="text-blue-600 hover:underline font-medium">Ver mais →</a>
        </div>
  
        <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
          <h2 class="text-2xl font-semibold text-gray-700 mb-2">Projeto 3</h2>
          <p class="text-gray-600 mb-4">Lógica de funcionamento de um escritório com armarios e gavetas. Tecnologias: HTML, PHP.</p>
          <a href="https://github.com/RichardReiel/ExerciciosFaculdade/tree/main/Escritorio" class="text-blue-600 hover:underline font-medium">Ver mais →</a>
        </div>
      </div>
    </section>
  </template>
  
  <script>
  export default {
    name: 'Projects'
  }
  </script>
  
  <style scoped>
  </style>
  