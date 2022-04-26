import {createRouter,createWebHistory} from 'vue-router';
import TracksIndex from '../components/Tracks.vue'
import TracksCreate from '../components/TracksCreate.vue'
import TracksEdit from '../components/TracksEdit.vue'

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
        },
         {
            path: '/track/:id/Edit',
            name:'tracks.edit',
            props:true,
            component : TracksEdit,
            }


];
export default createRouter({
    history : createWebHistory(),
    routes
})
