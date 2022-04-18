import {createRouter,createWebHistory} from 'vue-router';
import TracksIndex from '../components/Tracks.vue'
import TracksCreate from '../components/TracksCreate.vue'

const routes=[
    {
    path: '/dashboard',
    name:'tracks.index',
    component : TracksIndex,
    },
    {
        path: '/track/create',
        name:'tracks.create',
        component : TracksCreate,
        }

];
export default createRouter({
    history : createWebHistory(),
    routes
})
