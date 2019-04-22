import Dashboard from './components/backend/Dashboard';
import Elements from './components/backend/Elements';
import ProductList from './components/backend/products/List';
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
        path: 'products',
        component: ProductList,
        name: 'products',
    },
    {
        path: '*',
        component: NotFound,
    },
];

export default routes;