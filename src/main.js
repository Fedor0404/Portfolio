import Vue from 'vue';
import App from './App.vue';
import store from './store';
import BootstrapVue from 'bootstrap-vue';
import HeaderPattern from '@/components/HeaderPattern.vue';
import HamburgerPromo from '@/components/HamburgerPromo.vue';
import PrivacyModal from '@/components/PrivacyModal.vue';
Vue.component('HeaderPattern', HeaderPattern);
Vue.component('HamburgerPromo', HamburgerPromo);
Vue.component('PrivacyModal', PrivacyModal);
// import './assets/scss/styles.scss';

Vue.use(BootstrapVue);

Vue.config.productionTip = false;

new Vue({
    store,
    render: (h) => h(App),
}).$mount('#app');
