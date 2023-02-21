import { createRouter, createWebHistory } from 'vue-router'


const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes: [
        {
            path: '/',
            name: 'index',
            component: () => import('../views/main/index.vue')
        },

        {
            path: '/products',
            name: 'products.index',
            component: () => import('../views/products/index.vue')
        },

        {
            path: '/products/:id',
            name: 'products.show',
            component: () => import('../views/products/show.vue')
        },

        {
            path: '/cart',
            name: 'cart.index',
            component: () => import('../views/cart/index.vue')
        }

    ]
})

export default router
