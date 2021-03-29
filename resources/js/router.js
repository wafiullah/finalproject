
import About from './views/About.vue'
import Contact from './views/Contact.vue'
import Home from './views/Home.vue'

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
    ]


}