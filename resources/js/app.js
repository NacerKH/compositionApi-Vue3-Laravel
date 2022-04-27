require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { createApp } from 'vue';
import router from './router';
import TrackIndex from './components/Tracks.vue';
import TracksCreate from './components/TracksCreate.vue';
import TracksEdit from './components/TracksEdit.vue';
import Pagination  from 'laravel-vue-pagination';

createApp({
    components:{
        TrackIndex,
        Pagination,
          TracksCreate,
          TracksEdit
    }
})
.use(router)
.mount('#app');
