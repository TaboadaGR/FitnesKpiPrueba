import './bootstrap';

import { createApp } from 'vue';

const app = createApp({});

import main from './components/main.vue';
app.component('main-component', main);

app.mount('#app');
