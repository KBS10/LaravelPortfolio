import Vue from 'vue';
import VueFullPage from 'vue-fullpage.js'
import Router from 'vue-router'
import store from "./store"

Vue.use(Router)
Vue.use(VueFullPage)
Vue.component('header-component'    , require('./components/HeaderComponent.vue').default);
Vue.component('home-component'      , require('./components/HomeComponent.vue').default);
Vue.component('myproject-component' , require('./components/MyProjectComponent.vue').default);
Vue.component('project-component'   , require('./components/ProjectComponent.vue').default);
Vue.component('about-component'     , require('./components/AboutComponent.vue').default);
Vue.component('contact-component'   , require('./components/ContactUsComponent.vue').default);
Vue.component('full-component'      , require('./components/FullComponent.vue').default);
Vue.component('login-component'      , require('./components/FullComponent.vue').default);

new Vue({
    el: "#app",
    store,
})
