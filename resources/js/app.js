require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'

import { library } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(fas) 

Vue.component('font-awesome-icon', FontAwesomeIcon)


Vue.use(VueRouter)


import routes from './routes'





import App from './App.vue';

 const app = new Vue({
    el: '#app',
    components: { App},
    router: new VueRouter(routes),

    render: h => h(App)
});
