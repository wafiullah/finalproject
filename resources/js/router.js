
import About from './views/About.vue'
import Contact from './views/Contact.vue'
import Home from './views/Home.vue'
import Login from './views/Login.vue'
import Registration from './views/Registration.vue'

export default {
  
    mode: 'history',

    routes: [
        {
            path: '/', 
            name: 'Home',
            component: Home
        },
        {
            path: '/contact', 
            name: 'Contact',
            component: Contact
        },
        {
            path: '/about', 
            name: 'About',
            component: About
        },
       {
            path: '/login', 
            name: 'Login',
            component: Login
        }, 
        {
            path: '/register', 
            name: 'Register',
            component: Registration
        },
    ]


}