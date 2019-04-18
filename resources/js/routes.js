import VueRouter from 'vue-router';
import AppBackend from './components/backend/AppBackend';
import NotFound from './components/backend/NotFound';
import BackendRoutes from './backend-routes';

let routes = [
    {
        path: '/admin',
        component: AppBackend,
        children: BackendRoutes,
    },
];

export default new VueRouter({
    routes: routes,
    mode: 'history',
})