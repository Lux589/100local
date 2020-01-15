import './bootstrap';
import Vue from 'vue';
import App from './App';
import Routes from './router/router';
import vuetify from './plugins/vuetify';

const app = new Vue({
    el: '#app',
    vuetify,
    router: Routes,
    render: h => h(App)
});

export default app;
