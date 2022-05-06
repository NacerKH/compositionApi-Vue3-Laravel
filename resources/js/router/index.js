import {createRouter,createWebHistory} from 'vue-router';
import Home from '../components/Home.vue'
import TracksIndex from '../components/Tracks.vue'
import TracksCreate from '../components/TracksCreate.vue'
import TracksEdit from '../components/TracksEdit.vue'
import Preview from '../components/Preview.vue'

const routes=[
    {
        path: '',
        name:'home',
        component : Home,
        },

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
            },
            {
                path: '/track/:id/preview',
                name:'preview',
                props:true,
                component : Preview,
                }


];
export default createRouter({
    history : createWebHistory(),
    routes
})
