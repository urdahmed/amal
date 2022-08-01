window._ = require('lodash');
try {
    window.Typed  = require('typed.js');
    window.$ = window.jQuery = require('jquery');
    window.bootstrap =require('bootstrap');
} catch (e) { }


window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

