import About from '../views/About.vue'
import Contact from '../views/Contact.vue'
import HomePage from '../views/HomePage.vue'


export default {
  
    mode: 'history',

    routes: [
        {
            path: '/', 
            name: 'home',
            component: HomePage
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
