import VueRouter from 'vue-router';
import AppBackend from './components/backend/AppBackend';
import Login from './components/backend/Login';
import BackendRoutes from './backend-routes';

let routes = [
    {
        path: '/admin',
        component: AppBackend,
        children: BackendRoutes,
    },
    {
        path: '/loginAdmin',
        component: Login,
        name: 'login',
    },
];

export default new VueRouter({
    routes: routes,
    mode: 'history',
})