require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)


// vee validate
import * as VeeValidate from 'vee-validate'
import {
    ValidationObserver,
    ValidationProvider,
    extend
} from "vee-validate";

import * as rules from "vee-validate/dist/rules";
Object.keys(rules).forEach(rule => {
    extend(rule, rules[rule]);
});

Vue.component('ValidationProvider' ,  ValidationProvider);
Vue.component('ValidationObserver' ,  ValidationObserver);
Vue.use(VeeValidate)
// end vee validate

// carousel
import carousel from 'vue-owl-carousel'
Vue.use(carousel)

// end carousel

import routes from './router'


import App from './App.vue';

 const app = new Vue({
    el: '#app',
    components: { App},
    router: new VueRouter(routes),

    render: h => h(App)
});
