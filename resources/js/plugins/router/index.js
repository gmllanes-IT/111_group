import { createRouter, createWebHistory } from 'vue-router';

import Index from '../../templates/index.vue';
import NotFound from '../../pages/NotFound.vue';

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