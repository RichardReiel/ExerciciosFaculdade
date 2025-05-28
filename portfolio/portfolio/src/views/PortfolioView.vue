<template>
  <section class="p-6 md:p-12 max-w-4xl mx-auto">
    <Card>
      <SectionTitle title="Trajetória Profissional" />
      <ul class="space-y-6 mt-4">
        <li v-for="(job, index) in career" :key="index" class="border-l-4 border-blue-500 pl-4">
          <h2 class="text-2xl font-semibold text-gray-700">{{ job.role }}</h2>
          <p class="text-sm text-gray-500">{{ job.period }}</p>
          <p class="text-gray-600 mt-2">{{ job.description }}</p>
        </li>
      </ul>
    </Card>
  </section>
</template>

<script>
import SectionTitle from '@/components/SectionTitle.vue'
import Card from '@/components/Card.vue'

export default {
  name: 'Career',
  components: { SectionTitle, Card },
  data() {
    return {
      career: [
        {
          role: 'Analista de Projetos Senior - Empresa: E-commerce Planet',
          period: 'mai/2025 - Presente',
          description: 'Atuo na análise e implementação de projetos de e-commerce, ajudando na tomada de decisões no quesito Tecnologias para e-commerce.'
        },
        {
          role: 'Analista de Suporte Junior - Empresa: E-commerce Planet',
          period: 'dez/2024 - mai/2025',
          description: 'Experiência em auxiliar clientes na configurações e parametrização de sistemas.'
        },
        {
          role: 'Operador de Telemarketing - Empresa: Paschoalotto',
          period: 'fev/2024 - nov/2024',
          description: 'Atuação na negociação de contratos de cartão de crédito.'
        },
        {
          role: 'Auxiliar de eletricista - Empresa: Viação Sorriso de Marília',
          period: 'jun/2022 - set/2022',
          description: 'Experiência em dar manutenção em sistemas elétricos de ônibus de transporte coletivo.'
        }
      ]
    }
  }
}
</script>
