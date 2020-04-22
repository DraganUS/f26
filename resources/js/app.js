/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('home-main-component', require('./components/HomeMainComponent.vue').default);
Vue.component('reg-home-main-component', require('./components/RegistredHomeMainComponent').default);
Vue.component('show-image-component', require('./components/ShowImage.vue').default);
Vue.component('home-2-component', require('./components/Home2Component.vue').default);
Vue.component('home-3-component', require('./components/Home3Component.vue').default);
Vue.component('how-it-works-component', require('./components/HowItWorks.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


