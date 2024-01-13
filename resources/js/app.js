import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler';
import SearchComponent from './vue/SearchComponent.vue';

const app = createApp({});

app.component('search-component', SearchComponent);

// Mount the Vue app
app.mount('#app');
