import Dashboard from './components/backend/Dashboard';
import Elements from './components/backend/Elements';
import Table from './components/backend/Table';
import NotFound from './components/backend/NotFound';

let routes = [
    {
        path: '',
        component: Dashboard,
        name: 'dashboard',
    },
    {
        path: 'elements',
        component: Elements,
        name: 'elements',
    },
    {
        path: 'tables',
        component: Table,
        name: 'tables',
    },
    {
        path: '*',
        component: NotFound,
    },
];

export default routes;