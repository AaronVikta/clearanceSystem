
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

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));
Vue.prototype.$userId = document.querySelector("meta[name='user-id']").getAttribute('content');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('student-affairs', require('./components/StudentAffairsComponent.vue').default);
Vue.component('security-component', require('./components/SecurityComponent.vue').default);
Vue.component('alumni-component', require('./components/AlumniComponent.vue').default);
Vue.component('library-component', require('./components/LibraryComponent.vue').default);
Vue.component('audit-component', require('./components/AuditComponent.vue').default);
Vue.component('faculty-component', require('./components/FacultyComponent.vue').default);
Vue.component('profile-component', require('./components/profileComponent.vue').default);
Vue.component('status-component', require('./components/statusComponent.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
