require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { createApp } from 'vue';
import router from './router';
import TrackIndex from './components/Tracks.vue';
import TracksCreate from './components/TracksCreate.vue';
import TracksEdit from './components/TracksEdit.vue';
import Home from './components/Home.vue';
import Pagination  from 'laravel-vue-pagination';
import Preview from './components/Preview.vue'


createApp({
    components:{
        TrackIndex,
        Pagination,
          TracksCreate,
          TracksEdit,
          Home,
          Preview
    }
})
.use(router)
.mount('#app');
