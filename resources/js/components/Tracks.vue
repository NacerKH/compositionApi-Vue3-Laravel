<template>
<div class="flex justify-end">
<div class=" flex ">
    <router-link  :to="{name:'tracks.create'}" class="bg-orange-400 hover:bg-orange-100 hover:text-black rounded py-1 px-1 mb-4 text-white ">Create Track </router-link>
</div>

</div>

  <div class="mx-auto">
    <div class="flex flex-col">
      <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block w-full align-middle text-center">
          <div class="overflow-hidden">
            <table
              class="
                w-full
                divide-y divide-gray-200
                table-fixed
                dark:divide-orange-700
              "
            >
              <thead class="bg-orange-100 dark:bg-orange-300">
                <tr>
                  <th
                    scope="col"
                    class="
                      py-3
                      px-6
                      text-xs
                      font-semibold
                      tracking-wider
                      text-left text-gray-700
                      uppercase
                      dark:text-gray-400
                    "
                  >
                    title
                  </th>
                  <th
                    scope="col"
                    class="
                      py-3
                      px-6
                      text-xs
                      font-semibold
                      tracking-wider
                      text-left text-gray-700
                      uppercase
                      dark:text-gray-400
                    "
                  >
                    <div class="flex">
                      <div class="flex-1">description</div>
                      <div class="flex-1">
                        <DocumentTextIcon
                          class="h-4 w-5 text-blue-500 hover:text-blue-700"
                        />
                      </div>
                    </div>
                  </th>
                  <th
                    scope="col"
                    class="
                      py-3
                      px-6
                      text-xs
                      font-semibold
                      tracking-wider
                      text-left text-gray-700
                      uppercase
                      dark:text-gray-400
                    "
                  >
                    <div class="flex">
                      <div class="flex-1">picture</div>
                      <div class="flex-1">
                        <PhotographIcon
                          class="h-4 w-5 text-blue-500 hover:text-blue-700"
                        />
                      </div>
                    </div>
                  </th>
                  <th
                    scope="col"
                    class="
                      py-3
                      px-6
                      text-xs
                      font-semibold
                      tracking-wider
                      text-left text-gray-700
                      uppercase
                      dark:text-gray-400
                    "
                  >
                    <div class="flex">
                      <div class="flex-1">audio</div>
                      <div class="flex-1">
                        <MusicNoteIcon
                          class="h-4 w-5 text-blue-500 hover:text-blue-700"
                        />
                      </div>
                    </div>
                  </th>
                  <th
                    scope="col"
                    class="
                      p-4
                      py-3
                      px-6
                      text-xs
                      font-semibold
                      tracking-wider
                      text-left text-gray-700
                      uppercase
                      dark:text-gray-400
                    "
                  >
                    <div class="flex">
                      <div class="flex-1">favourite</div>
                      <div class="flex-1">
                        <HeartIcon
                          class="h-4 w-5 text-blue-500 hover:text-blue-700"
                        />
                      </div>
                    </div>
                  </th>
                  <th
                    scope="col"
                    class="
                      p-4
                      py-3
                      px-6
                      text-xs
                      font-semibold
                      tracking-wider
                      text-center text-gray-700
                      uppercase
                      dark:text-gray-400
                    "
                  >
                    action
                    <span class="sr-only">Edit</span>
                  </th>
                </tr>
              </thead>
              <tbody
                class="
                  bg-white
                  w-full
                  divide-y divide-gray-200
                  dark:bg-orange-300 dark:divide-orange-700
                "
              >
                <template v-for="track in tracks.data" :key="track.id">
                  <tr class="hover:bg-orange-100 dark:hover:bg-orange-100">
                    <td
                      class="
                        py-4
                        px-6
                        text-sm
                        font-medium
                        text-gray-900
                        whitespace-wrap
                        dark:text-black
                      "
                      v-text="track.title"
                    ></td>
                    <td
                      class="
                        py-4
                        px-6
                        text-sm
                        font-medium
                        text-gray-500
                        whitespace-wrap
                        dark:text-black
                        line-clamp-2
                        hover:line-clamp-5
                      "
                      v-text="track.description"
                    ></td>
                    <td
                      class="
                        py-4
                        px-6
                        text-sm
                        font-medium
                        text-gray-900
                        whitespace-wrap
                        dark:text-black
                      "
                    >
                      <img
                        class="object-contain rounded"
                        v-bind:src="track.image"
                      />
                    </td>
                    <td
                      class="
                        py-4
                        px-6
                        text-sm
                        font-medium
                        text-gray-900
                        whitespace-wrap
                        dark:text-white
                        line-clamp-2
                      "
                      v-text="track.audio"
                    ></td>
                    <td
                      class="
                        py-4
                        px-6
                        text-sm
                        font-medium
                        text-gray-900
                        whitespace-wrap
                        dark:text-white
                      "
                    >
                      <span
                        class="
                          px-2
                          inline-flex
                          text-xs
                          leading-5
                          font-semibold
                          rounded-full
                        "
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
                      class="
                        py-4
                        px-6
                        text-sm
                        font-medium
                        text-center
                        whitespace-wrap
                      "
                    >
    <router-link  :to="{name:'tracks.edit',params:{id:track.id}}" class="bg-orange-400  hover:underline hover:bg-orange-700 hover:text-black rounded py-1 px-1 mb-4 text-white ">Edit</router-link>
<!--
                      <a
                        href="#"
                        class="text-blue-600 dark:text-blue-500 hover:underline"
                        >Edit</a -->

                    </td>
                  </tr>
                </template>
              </tbody>
            </table>

          </div>


        </div>
      </div>
    </div>
     <Pagination :data="tracks" @pagination-change-page="getTracks" class="mt-3" />


  </div>

</template>

<script>
import { onMounted } from "vue";
import useTracks from "../services/trackservices";
import { MusicNoteIcon, PhotographIcon, CheckCircleIcon,DocumentTextIcon, HeartIcon} from "@heroicons/vue/solid";


export default {
  components: {MusicNoteIcon,PhotographIcon,CheckCircleIcon,DocumentTextIcon, HeartIcon},
      setup() {  //composition Api  less code in component
    const { getTracks, tracks } = useTracks();
    onMounted(getTracks);

    return {
      tracks,getTracks
    };
  },
};
</script>

// //simple method
//  /* import { onMounted } from "vue";
// import useTracks from "../services/trackservices";
// import { MusicNoteIcon, PhotographIcon, CheckCircleIcon,DocumentTextIcon, HeartIcon} from "@heroicons/vue/solid";
// export default {
//   components: {MusicNoteIcon,PhotographIcon,CheckCircleIcon,DocumentTextIcon, HeartIcon},
//  data() {

//     return {
//         tracks:{},

//     }
// },
//  mounted() {
//         // Fetch initial results
//         this.getTracks();
//     },


//  methods: {
//         // Our method to GET results from a Laravel endpoint
//         getTracks(page = 1) {
//             axios.get('/api/Tracks?page=' + page)
//                 .then(response => {
//                     this.tracks = response.data.data;
//                 });
//         }
//      }, **/



