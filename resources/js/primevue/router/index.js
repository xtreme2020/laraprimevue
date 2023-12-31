import { createRouter, createWebHistory } from 'vue-router';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/'
        },
        {
            path:'/table'
        }
    ]
});

export default router;
