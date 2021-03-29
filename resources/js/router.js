
import About from './views/About.vue'
import Contact from './views/Contact.vue'



export default {
  
    mode: 'history',

    routes: [
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