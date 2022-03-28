
import About from './views/About.vue'
import Contact from './views/Contact.vue'
import Home from './views/Home.vue'
import Login from './views/Login.vue'
import Register from './views/Register.vue'
import Shop from './views/Shop.vue'
import SingleProduct from './views/SingleProduct.vue'
import Dashboard from './views/User/Dashboard.vue'

import Vue from "vue";
import Router from "vue-router";
import Checkout from './views/Checkout.vue'

Vue.use(Router);
const router = new Router({
    mode: 'history',
    routes: [
        {
            path: '/', 
            name: 'home',
            component: Home
        },
        {
            path: '/contact', 
            name: 'contact',
            component: Contact
        },
        {
            path: '/checkout', 
            name: 'checkout',
            component: Checkout
        },
        {
            path: '/about', 
            name: 'about',
            component: About
        },
       {
            path: '/login', 
            name: 'login',
            component: Login
        }, 
        {
            path: '/register', 
            name: 'register',
            component: Register
        },
        {
            path: '/shop', 
            name: 'shop',
            component: Shop
        },
        {
            path: '/product/:id', 
            name: 'product-details',
            component: SingleProduct,
            props: true
        },
        {
            path: '/dashboard', 
            name: 'dashboard',
            component: Dashboard,
            meta: {
                requiresAuth: true
            }
        },
    ]


});

router.beforeEach((to, from, next) => {
    //  If the next route is requires user to be Logged IN
    if (to.matched.some(m => m.meta.requiresAuth)) {
        var token = localStorage.getItem("company_user_token");
        if (!token) {
            next("/login");
        }
    }

    return next();
});

export default router;