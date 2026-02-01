import './bootstrap';
import { createApp } from 'vue';
import HomePage from './Pages/HomePage.vue';
import ContentPage from './Pages/ContentPage.vue';

const app = createApp({});

app.component('home-page', HomePage);
app.component('content-page', ContentPage);

app.mount('#app');
