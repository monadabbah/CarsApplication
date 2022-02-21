import Login from '../components/Login'
import Register from '../components/Register'
import Dashboard from '../components/Dashboard'
import Brand from '../components/Brand'
import Dealership from '../components/Dealership'
import i18n from '../i18n'

/*const routes = [{
        path: '/',
        redirect: `/${i18n.locale}`
    },
    {
        path: '/:lang',
        component: {
            render(c) { return c('router-view') }
        },
        children: [{
                path: '/',
                component: Login
            },
            {
                name: 'login',
                path: 'login',
                component: Login
            },
            {
                path: 'register',
                component: Register
            },
            {
                path: 'dashboard',
                component: Dashboard,
                name: 'Dashboard'
            },
            {
                path: 'brands',
                component: Brand,
                name: 'Brand'
            },
            {
                path: 'dealerships',
                component: Dealership,
                name: 'Dealership'
            }
        ]
    }
]*/

const routes = [{
        path: '/',
        component: Login,
        name: 'Home',
    },
    {
        name: 'login',
        path: '/login',
        component: Login
    },
    {
        path: '/register',
        component: Register
    },
    {
        path: '/dashboard',
        component: Dashboard,
        name: 'Dashboard'
    },
    {
        path: '/brands',
        component: Brand,
        name: 'Brand'
    },
    {
        path: '/dealerships',
        component: Dealership,
        name: 'Dealership'
    }
]

export default routes;