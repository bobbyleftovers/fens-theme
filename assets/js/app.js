import Vue from 'vue';

require('./setup/bootstrap.js');

console.log('wordpress started, starting vue, fen says');

//import vue
window.Vue = require('vue');

//Bus for emits and ons
window.Bus = new Vue();

Vue.prototype.$_window = window;

/**
 * Load components, launch Vue and set up nav bar
 */

/**
 * Startup Vue
 */

const app = new Vue({
    el: '#app',
    data:{
        message: 'how are you?'
    },
    methods: {
    }
});

// window.axios.interceptors.response.use(function (response) {
//     return response;
// }, function (error) {
//     switch (error.response.status) {
//         case 401:
//             window.location = '/login/expired'
//             break;

//         case 419:
//             window.location = '/login/expired';
//             break;

//     }

//     return Promise.reject(error);
// });