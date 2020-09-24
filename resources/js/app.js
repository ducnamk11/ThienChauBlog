require('./bootstrap');
import AdminMain from "./components/admin/AdminMain";
import VueRouter from 'vue-router';
import PublicMain from "./components/public/PublicMain";
import {routes} from './routes';
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
// const Toast = Swal.mixin({
//     toast: true,
//     position: 'top-end',
//     showConfirmButton: false,
//     timer: 3000,
//     timerProgressBar: true,
//     onOpen: (toast) => {
//         toast.addEventListener('mouseenter', Swal.stopTimer)
//         toast.addEventListener('mouseleave', Swal.resumeTimer)
//     }
// });
// window.Toast = Toast


const router = new VueRouter({
    routes,
    mode: 'hash'
});

const app = new Vue({
    el: '#app',
    router
});
