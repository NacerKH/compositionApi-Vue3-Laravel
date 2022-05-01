<template>
    <div class="flex justify-end">
        <div class="flex">
            <router-link
                :to="{ name: 'tracks.create' }"
                class="bg-orange-400 hover:bg-orange-100 hover:text-black rounded py-1 px-1 mb-4 text-white"
                >Create Track
            </router-link>
        </div>
    </div>

    <div class="mx-auto">
        <div class="flex flex-col">
            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                <div class="inline-block w-full align-middle text-center">
                    <div class="overflow-hidden">
                        <table
                            class="w-full divide-y divide-gray-200 table-fixed dark:divide-orange-700"
                        >
                            <thead class="bg-orange-100 dark:bg-orange-300">
                                <tr>
                                    <th
                                        scope="col"
                                        class="py-3 px-6 text-xs font-semibold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                    >
                                        title
                                    </th>
                                    <th
                                        scope="col"
                                        class="py-3 px-6 text-xs font-semibold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                    >
                                        <div class="flex justify-center ">
                                            <div class="flex justify-center">
                                                description
                                            </div>
                                            <div class="flex justify-center">
                                                <DocumentTextIcon
                                                    class="h-4 w-5 text-blue-500 hover:text-blue-700"
                                                />
                                            </div>
                                        </div>
                                    </th>
                                    <th
                                        scope="col"
                                        class="py-3 px-6 text-xs font-semibold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                    >
                                        <div class="flex justify-center">
                                            <div class="flex justify-center">picture</div>
                                            <div class="flex justify-center">
                                                <PhotographIcon
                                                    class="h-4 w-5 text-blue-500 hover:text-blue-700"
                                                />
                                            </div>
                                        </div>
                                    </th>
                                    <th
                                        scope="col"
                                        class="py-3 px-6 text-xs font-semibold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                    >
                                        <div class="flex justify-center ">
                                            <div class="flex justify-center">audio</div>
                                            <div class="flex justify-center">
                                                <MusicNoteIcon
                                                    class="h-4 w-5 text-blue-500 hover:text-blue-700"
                                                />
                                            </div>
                                        </div>
                                    </th>
                                    <th
                                        scope="col"
                                        class="p-4 py-3 px-6 text-xs font-semibold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"
                                    >
                                        <div class="flex justify-center">
                                            <div class="flex justify-center">favourite</div>
                                            <div class="flex justify-center">
                                                <HeartIcon
                                                    class="h-4 w-5 text-blue-500 hover:text-blue-700"
                                                />
                                            </div>
                                        </div>
                                    </th>
                                    <th
                                        scope="col"
                                        class="p-4 py-3 px-6 text-xs font-semibold tracking-wider text-center text-gray-700 uppercase dark:text-gray-400"
                                    >
                                        action
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody
                                class="bg-white w-full divide-y divide-gray-200 dark:bg-orange-300 dark:divide-orange-700"
                            >
                                <template
                                    v-for="track in tracks.data"
                                    :key="track.id"
                                >
                                    <tr
                                        class="hover:bg-orange-100 dark:hover:bg-orange-100"
                                    >
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-wrap dark:text-black"
                                            v-text="track.title"
                                        ></td>
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-wrap dark:text-black line-clamp-2 hover:line-clamp-5"
                                            v-text="track.description"
                                        ></td>
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-wrap dark:text-black"
                                        >
                                            <img
                                                class="object-contain rounded"
                                                v-bind:src="track.image"
                                            />
                                        </td>
                                        <td
                                            class="py-4 px-6 text-sm font-medium  text-gray-900 whitespace-wrap dark:text-white "

                                        >
                                        <audio controls class="w-44  h-8" preload="none">
                                            <source :src="track.audio" type="audio/mpeg">
                                        </audio>

                                            </td>
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-wrap dark:text-white"
                                        >
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full"
                                                v-bind:class="{
                                                    'bg-green-100 text-green-800 hover:bg-green-500':
                                                        track.is_favourite,
                                                    'bg-red-100 text-red-800 hover:bg-red-500':
                                                        !track.is_favourite,
                                                }"
                                                v-text="track.is_favourite"
                                            ></span>
                                        </td>

                                        <td
                                            class="py-4 px-6 text-sm font-medium text-center whitespace-wrap"
                                        >
                                            <router-link
                                                :to="{
                                                    name: 'tracks.edit',
                                                    params: { id: track.id },
                                                }"
                                                class="bg-orange-400 hover:underline hover:bg-orange-700 hover:text-black rounded py-2 px-1 mb-4 text-white"
                                                >Edit</router-link
                                            >
                                            <!--
                      <a
                        href="#"
                        class="text-blue-600 dark:text-blue-500 hover:underline"
                        >Edit</a -->
                                            <button
                                                class="bg-red-400 hover:bg-red-700 text-white rounded py-2 px-1 m-1"
                                               v-on:click="deleteTrack(track.id)"
                                            >
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                        <Pagination
                            :data="tracks"
                            @pagination-change-page="getTracks"
                            class="mt-1 bg-orange-300 inline-flex items-center justify-center -space-x-px w-full"
                        >
                            <template #prev-nav>
                                <a
                                    href="#"
                                    class="inline-flex items-center py-2 px-4 mr-3 text-sm font-medium text-gray-500 bg-orange-400 rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 hover:bg-orange-300 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-orange-400 dark:hover:text-white"
                                >
                                    <svg
                                        class="mr-2 w-5 h-5"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                    Previous
                                </a>
                            </template>
                            <template #next-nav>
                                <a
                                    href="#"
                                    class="inline-flex items-center py-2 px-4 mr-3 text-sm font-medium text-gray-500 bg-orange-400 rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 hover:bg-orange-300 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-orange-400 dark:hover:text-white"
                                >
                                    Next
                                    <svg
                                        class="ml-2 w-5 h-5"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                </a>
                            </template>
                        </Pagination>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { onMounted } from "vue";
import useTracks from "../services/trackservices";
import {
    MusicNoteIcon,
    PhotographIcon,
    CheckCircleIcon,
    DocumentTextIcon,
    HeartIcon,
} from "@heroicons/vue/solid";
import Pagination from "laravel-vue-pagination";

export default {
    components: {
        MusicNoteIcon,
        PhotographIcon,
        CheckCircleIcon,
        DocumentTextIcon,
        HeartIcon,
        Pagination,
    },
     setup() {
        //composition Api  less code in component

        const { getTracks, tracks, destroyTrack} = useTracks();
        onMounted(getTracks);
        const deleteTrack = async (id) => {
            return await destroyTrack(id);
        };
        return {
            tracks,
            getTracks,
            deleteTrack,
        };
    },
};
</script>

// //simple method // /* import { onMounted } from "vue"; // import useTracks
from "../services/trackservices"; // import { MusicNoteIcon, PhotographIcon,
CheckCircleIcon,DocumentTextIcon, HeartIcon} from "@heroicons/vue/solid"; //
export default { // components:
{MusicNoteIcon,PhotographIcon,CheckCircleIcon,DocumentTextIcon, HeartIcon}, //
data() { // return { // tracks:{}, // } // }, // mounted() { // // Fetch initial
results // this.getTracks(); // }, // methods: { // // Our method to GET results
from a Laravel endpoint // getTracks(page = 1) { //
axios.get('/api/Tracks?page=' + page) // .then(response => { // this.tracks =
response.data.data; // }); // } // }, **/
