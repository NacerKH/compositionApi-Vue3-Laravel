
<template>

<div class="max-w-2xl mx-auto">

	<div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block w-full align-middle text-center">
            <div class="overflow-hidden ">
                <table class="w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>

                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                               title
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                description
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                picture
                            </th>
                            <th scope="col" class="p-4">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white w-full divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                      <template  v-for="track in tracks"  :key="track.id">
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-wrap dark:text-white"  v-text="track.title"></td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-wrap dark:text-white line-clamp-3 hover:line-clamp-5" v-text="track.description"></td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-wrap dark:text-white "><img class="object-contain rounded" v-bind:src="track.image" /></td>
                            <td class="py-4 px-6 text-sm font-medium text-right whitespace-wrap">
                                <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        </template>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</div>
</template>

<script>
import { onMounted } from 'vue';
import useTracks from '../services/trackservices'
export default {

    setup() {
    const {getTracks ,tracks} =useTracks();
    onMounted(getTracks);

    return {

        tracks
    };
    },
}
</script>
