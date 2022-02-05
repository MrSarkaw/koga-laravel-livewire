
window.Vue = require('vue').default;



Vue.component('example-component', require('./components/ExampleComponent.vue').default);

var Turbolinks = require("turbolinks")
Turbolinks.start()


const app = new Vue({
    el: '#app',
});
