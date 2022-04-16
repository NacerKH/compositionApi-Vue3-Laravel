require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { createApp } from 'vue';
import router from './router';
import TrackIndex from './components/Tracks.vue';


createApp({
    components:{
        TrackIndex,
    }
})
.use(router)
.mount('#app');
