require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import carousel from 'vue-owl-carousel'
import { ValidationProvider } from 'vee-validate/dist/vee-validate.full.esm'
import ValidationObserver from 'vee-validate'

Vue.component(' ValidationProvider' ,  ValidationProvider);
Vue.component(' ValidationObserver' ,  ValidationObserver);


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
