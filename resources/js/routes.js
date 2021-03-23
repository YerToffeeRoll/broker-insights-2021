import AllPolicy from './components/AllPolicy.vue';
import CreatePolicy from './components/CreatePolicy.vue';
import EditPolicy from './components/EditPolicy.vue';

export const routes = [{
        name: 'home',
        path: '/',
        component: AllPolicy
    },
    {
        name: 'create',
        path: '/create',
        component: CreatePolicy
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditPolicy
    }
];