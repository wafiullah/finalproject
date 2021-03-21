require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import routes from './routes'





import App from './App.vue';

 const app = new Vue({
    el: '#app',
    components: { App},
    router: new VueRouter(routes),

    render: h => h(App)
});
