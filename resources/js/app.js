require('./bootstrap');
import AdminMain from "./components/admin/AdminMain";
import VueRouter from 'vue-router';
import PublicMain from "./components/public/PublicMain";
import {routes} from './routes';
import VueClock from '@dangvanthanh/vue-clock';
Vue.use(VueClock);
import {VueEditor} from "vue2-editor";
//support Moment js
import {filter} from "./filter"

//VUEX
import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)
import storeData from "./store/index"

const store = new Vuex.Store(
    storeData
)
// Vform
import {AlertError, Form, HasError} from 'vform'


window.Vue = require('vue');
Vue.component('admin-main', AdminMain);
Vue.component('public-main', PublicMain);
Vue.use(VueRouter);

window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

//SWEET ALERT
import Swal from 'sweetalert2'

window.Swal = Swal


const router = new VueRouter({
    routes,
    mode: 'hash'
});

const app = new Vue({
    el: '#app',
    store,
    router
});
