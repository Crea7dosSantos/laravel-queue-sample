import Vue from 'vue'
import VueRouter from 'vue-router'

import Guest from './components/pages/Guest.vue'
import Guest2 from './components/pages/Guest2.vue'
import NotFound from './components/pages/NotFound.vue'

Vue.use(VueRouter)

const routes = [
    {
        path: '*',
        name: 'notfound',
        component: NotFound
    },
    {
        path: '/',
        name: 'guest',
        component: Guest,
    },
    {
        path: '/guest2',
        name: 'guest2',
        component: Guest2,
    },
]

const router = new VueRouter({
    mode: 'history',
    routes
})

export default router
