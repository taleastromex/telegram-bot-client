import SignIn from "../pages/SignIn/SignIn.vue";
import SignUp from "../pages/SignUp/SignUp.vue";
import Dashboard from "../pages/Dashboard/Dashboard.vue";
import Empty from "../layouts/Empty/Empty.vue";
import Main from "../layouts/Main/Main.vue";
import PageNotFound from "../pages/ErrorPages/PageNotFound.vue";

export const routes = [
    {
        name: 'dashboard',
        path: '/app',
        component: Main,
        children: [
            {
                name: 'dashboard',
                path: '',
                component: Dashboard,
                meta: { title: 'Dashboard', required_auth: true }
            }
        ],
    },
    {
        name: 'auth',
        path: '/auth',
        component: Empty,
        children: [
            {
                path: '',
                redirect: 'auth/sign-in'
            },
            {
                name: 'sign-in',
                path: 'sign-in',
                component: SignIn,
                meta: { title: 'Sign In', required_auth: false }
            },
            {
                name: 'sign-up',
                path: 'sign-up',
                component: SignUp,
                meta: { title: 'Sign Up', required_auth: false }
            },
        ]
    },
    {
        name: '404',
        path: '/:pathMatch(.*)*',
        component: PageNotFound,
        meta: { title: 'Page Not Found', required_auth: false }
    }
]
