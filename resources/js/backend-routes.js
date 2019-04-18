import Dashboard from './components/backend/Dashboard';
import NotFound from './components/backend/NotFound';

let routes = [
    {
        path: '/',
        component: Dashboard,
    },
    {
        path: '*',
        component: NotFound,
    },
];

export default routes;