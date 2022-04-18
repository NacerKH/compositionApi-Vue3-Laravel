require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { createApp } from 'vue';
import router from './router';
import TrackIndex from './components/Tracks.vue';
import Pagination from 'v-pagination-3';

createApp({
    components:{
        TrackIndex,
        Pagination,
    }
})
.use(router)
.mount('#app');
