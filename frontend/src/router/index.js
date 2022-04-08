import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'login',
      component: () => import('../views/Login/Login.vue')
    },
    {
      path: '/home',
      name: 'home',
      component: () => import('../views/Home/Home.vue')
    },
    {
      path: '/produtos',
      name: 'products',
      component: () => import('../views/Products/Products.vue')
    },
    {
      path: '/clientes',
      name: 'clients',
      component: () => import('../views/Clients/Clients.vue')
    }
  ]
})

export default router
