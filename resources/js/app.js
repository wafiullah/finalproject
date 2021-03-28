require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import carousel from 'vue-owl-carousel'


import routes from './router'

Vue.use(carousel)
Vue.use(VueRouter)







import App from './App.vue';

 const app = new Vue({
    el: '#app',
    components: { App},
    router: new VueRouter(routes),

    render: h => h(App)
});
