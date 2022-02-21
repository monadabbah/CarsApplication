import App from './App.vue'
require('./bootstrap');
import vuetify from './vuetify';
import router from './router';
import i18n from './i18n';

let token = localStorage.getItem('token');
if (token) {
    window.axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
    router.push({ name: 'Dashboard' });
} else {
    router.push({ name: 'login' });
}

axios.interceptors.response.use(response => response, error => {
    const status = error.response ? error.response.status : null;

    if (status == 401) {
        router.push({ name: 'login' });
    }

    return Promise.reject(error);
});

let lang = localStorage.getItem('lang');
i18n.locale = lang.toLowerCase();

window.Vue = require('vue').default;

Vue.config.productionTip = false;

const app = new Vue({
    router,
    vuetify,
    render: h => h(App),
    i18n
}).$mount('#app');