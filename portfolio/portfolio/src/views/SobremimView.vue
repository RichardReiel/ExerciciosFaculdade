<template>
  <section class="p-6 md:p-12 max-w-4xl mx-auto">
    <Card>
      <SectionTitle title="Sobre Mim" />
      <p class="text-lg text-gray-600 leading-relaxed">
        Olá! Meu nome é <span class="font-semibold text-blue-600">Richard Reiel</span>. 
        Sou um analista de projetos apaixonado por tecnologia, design e inovação. 
        Atualmente sou líder do setor de projetos na <span class="font-semibold text-blue-600">E-commerce Planet</span>.
      </p>
    </Card>
  </section>
</template>

<script>
import SectionTitle from '@/components/SectionTitle.vue'
import Card from '@/components/Card.vue'

export default {
  name: 'AboutMe',
  components: { SectionTitle, Card }
}
</script>
