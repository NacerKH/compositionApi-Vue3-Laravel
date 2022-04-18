require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { createApp } from 'vue';
import router from './router';
import TrackIndex from './components/Tracks.vue';
import TracksCreate from './components/TracksCreate.vue';
import LaravelVuePagination from 'laravel-vue-pagination';

createApp({
    components:{
        TrackIndex,
          'Pagination': LaravelVuePagination,
          TracksCreate,
    }
})
.use(router)
.mount('#app');
