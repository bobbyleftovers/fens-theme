//LoDash cuse it awesome
window._ = require('lodash');

//window.URI = require('urijs');
//window.Promise = require('promise');
//window.Cookies = require('js-cookie');

/**
 * We'll load jQuery and the Bootstrap jQuery
 */

// try {
//     window.$ = window.jQuery = require('jquery');
// } catch (e) {}

/**
 * AXIOS
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';