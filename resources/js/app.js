import './bootstrap';
import Vue from 'vue';
import App from './components/App';

import Routes from './router/router';

const app = new Vue({
    el: '#app',
    router: Routes,
    render: h => h(App)
});

export default app;
