import Vue from 'vue';
import VueFullPage from 'vue-fullpage.js'


Vue.component('header-component'    , require('./components/HeaderComponent.vue').default);
Vue.component('home-component'      , require('./components/HomeComponent.vue').default);
Vue.component('myproject-component' , require('./components/MyProjectComponent.vue').default);
Vue.component('usetech-component'   , require('./components/UseTechComponent.vue').default);
Vue.component('about-component'     , require('./components/AboutComponent.vue').default);
Vue.component('contact-component'   , require('./components/ContactUsComponent.vue').default);
Vue.component('full-component'      , require('./components/FullComponent.vue').default);

Vue.use(VueFullPage);

new Vue({
    el: "#app",
})
