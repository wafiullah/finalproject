
import About from './views/About.vue'
import Contact from './views/Contact.vue'
import Home from './views/Home.vue'
import Login from './views/Login.vue'
import Register from './views/Register.vue'
import Shop from './views/Shop.vue'

export default {
  
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
    ]


}