import { createRouter, createWebHistory } from 'vue-router'
import SobremimView from '../views/SobremimView.vue'
import TrajetoriaView from '../views/TrajetoriaView.vue'
import PortfolioView from '../views/PortfolioView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: SobremimView,
    },
    {
      path: '/trajetoria',
      name: 'trajetoria',
      component: TrajetoriaView,
    },
    {
      path: '/portfolio',
      name:'portfolio',
      component: PortfolioView,
    }
  ],
})

export default router
