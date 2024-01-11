import { createRouter, createWebHistory } from 'vue-router';

import Index from '../../templates/index.vue';
import NotFound from '../../pages/NotFound.vue';
import Footer from '../../components/Footer.vue'
import Header from '../../components/Header.vue';
import PortalHome from '../../pages/Service/PortalHome.vue'


const routes = [
    // {
    //   path: '/',
    //   redirect: '/'
    // },
    {
        path: '/',
        name: '',
        component: Index
    },
    {
        path: '/Header',
        name: '',
        component: Header
    },
    {
        path: '/Footer',
        name: '',
        component: Footer
    },
    {
        path: '/PortalHome',
        name: '',
        component: PortalHome
    },
    {
        path: '/:pathMatch(.*)*',
        component: NotFound,
        meta: {
            permissionSlugs: [],
        },
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;