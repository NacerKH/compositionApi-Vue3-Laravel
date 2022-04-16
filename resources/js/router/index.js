import {createRouter,createWebHistory} from 'vue-router';
import TracksIndex from '../components/Tracks.vue'

const routes=[
    {
    path: '/dashboard',
    name:'tracks.index',
    component : TracksIndex,
    }

];
export default createRouter({
    history : createWebHistory(),
    routes
})
