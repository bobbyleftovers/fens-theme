import Vue from 'vue';
import VueCurrencyFilter from 'vue-currency-filter';
import router from './setup/router';
import store from './setup/store';

Vue.use(VueCurrencyFilter,{
    symbol : '$',
    thousandsSeparator: ',',
    fractionCount: 0,
    fractionSeparator: '.',
    symbolPosition: 'front',
    symbolSpacing: false
});


//LoDash cuse it awesome
window._ = require('lodash');

/**
 * AXIOS
 */

window.axios = require('axios');

// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

//import vue
window.Vue = require('vue');

//Bus for emits and ons
window.Bus = new Vue();

Vue.prototype.$_window = window;

/**
 * Startup Vue
 */

//  require('./setup/main.js');

const app = new Vue({
    el: '#app',
    router,
    store
});

// window.axios.interceptors.response.use(function (response) {
//     return response;
// }, function (error) {
//     switch (error.response.status) {
//         case 401:
//             // window.location = '/login/expired'
//             break;

//         case 419:
//             // window.location = '/login/expired';
//             break;

//     }

//     return Promise.reject(error);
// });