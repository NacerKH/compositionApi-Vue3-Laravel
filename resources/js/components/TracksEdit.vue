<template>
    <div v-if="errors">
        <div
            v-for="(field, k) in errors"
            :key="k"
            class="bg-red-500 text-white rounded font-bold mb-4 shadow-lg py-2 px-4 pr-0"
        >
            <p
                v-for="error in field"
                :key="error"
                class="text-sm"
                v-text="error"
            ></p>
        </div>
    </div>
    <div
        class="flex justify-center bg-orange-200 rounded px-5 py-2 hover:bg-orange-300"
    >
        <div class="flex-1">
            <label for="" class="text-orange-500 hover:text-orange-900">
                New Track
            </label>
        </div>
        <div class="flex flex-1 justify-end">
            <MusicNoteIcon class="h-4 w-5 text-blue-500 hover:text-blue-700" />
        </div>
    </div>
    <form
        action=""
        class="bg-orange-200 hover:bg-orange-300 rounded space-y-6"
        @submit.prevent="saveTrack" enctype="multipart/form-data"
    >
        <div class="flex flex-col">
            <div
                class="flex text-orange-500 m-2 flex-wrap inline-flex items-center"
            >
                <label class="basis-1/3">Title: </label>
                <input
                    type="text"
                    id="title"
                    class="md:w-64 sm:w-32 rounded"
                    v-model="track.title"
                    placeholder="Title here .."
                />
            </div>
            <div
                class="flex text-orange-500 m-2 flex-wrap inline-flex items-center"
            >
                <label class="basis-1/3"> Description: </label>
                <input
                    type="text"
                    id="description"
                    class="md:w-64 sm:w-32 rounded"
                    v-model="track.description"
                    placeholder="description here .."
                />
            </div>
            <div
                class="flex text-orange-500 m-2 flex-wrap inline-flex items-center shrink-0"
            >
                <div class="flex flex-1 shrink-0">
                    <label class="basis-1/3 gap-6">Picture: </label>
                </div>
                <div class="flex flex-1 shrink-0">
                    <input

                        type="file"
                        id="image"
                        name="image"
                        class="md:w-64 sm:w-32 rounded form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        accept="image/*"
                        v-on:change="handleImageSelected"
                    />
                </div>

                <div
                    class="flex flex-1 justify-center items-center inline-flex"
                >
                    <img v-if="imageUrl==''"

                        :src="track.image"
                        class="w-30 h-20 object-contain"
                    />
                    <img
                        v-show="imageUrl"
                        :src="imageUrl"
                        class="w-30 h-20 object-contain"
                    />
                </div>
            </div>
            <div
                class="flex text-orange-500 m-2 flex-wrap inline-flex items-center"
            >
                <label class="basis-1/3">Audio :</label>
                <input
                    type="file"
                    id="audio"
                    class="md:w-64 sm:w-32 rounded form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                 accept=".mp3,audio/*"
                                             v-on:change="uploadAudio"  />
            </div>
            <div
                class="flex text-orange-500 m-2 flex-wrap inline-flex items-center"
            >
                <div class="flex-1">
                    <label class="basis-1/3">Is Favourite: </label>
                </div>
                <div class="flex-1">
                    <input
                        type="checkbox"
                        id="is_favourite"
                        class="flex justify-end rounded form-checkbox h-5 w-5 text-gray-600"
                        v-model="track.is_favourite"
                    />
                </div>
            </div>
            <div class="flex text-orange-500 justify-end flex-wrap">
                <button
                    class="py-1 px-2 bg-orange-400 hover:bg-orange-300 rounded text-white hover:text-black"
                >
                    Update Track
                </button>
            </div>
        </div>
    </form>
</template>

<script>
import {
    MusicNoteIcon,
    PhotographIcon,
    CheckCircleIcon,
    DocumentTextIcon,
    HeartIcon,
} from "@heroicons/vue/solid";
import { reactive, ref } from "vue";
import { onMounted} from "vue";
import useTracks from "../services/trackservices";

export default {
    components: {
        MusicNoteIcon,
        PhotographIcon,
        CheckCircleIcon,
        DocumentTextIcon,
        HeartIcon,
    },
    props:{
        id:{
            required:true,
            type:String
        }
    },
    setup(props) {
        let message = ref("");
        let images = ref([]);
 const form = reactive({

         image: "",
         audio: "",

        });
        const {
            getTrack,
            editTrack,
            track,
            imageFile,
            imageUrl,
            handleImageSelected,
            errors,
            UpdateTracks,
            uploadAudio
        } = useTracks();
    onMounted(getTrack(props.id));
        const saveTrack = async() => {
            await UpdateTracks(props.id);

        };
        return {
            form,
            getTrack,
            track,
            saveTrack,
          handleImageSelected,
            imageUrl,
            message,
            images,
            errors,
            uploadAudio
        };
    },
};
</script>
