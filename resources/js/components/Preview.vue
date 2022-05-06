<template>
 <div class="flex flex-col justify-center items-center  ">
     <div class="flex flex-1 justify-center custom-width h-72 bg-gradient-to-r from-neutral-700 via-zinc-100 to-neutral-700 hover:from-pink-500 hover:to-yellow-500 ">
         <img :src="track.image" alt="" class="image-Player w-48 h-48">
     </div>

    <div id="audio" class=" flex  flex-1 justify-center ">

        <audio-player :file="track.audio"> </audio-player>
    </div>
 </div>
</template>
<script>
import AudioPlayer from "./AudioPlayer.vue";
import useTracks from "../services/trackservices";
import { onMounted } from "vue";

export default {
    components: { AudioPlayer },
    props: {
        id: {
            required: true,
            type: String,
        },
    },
    data() {
        return {
            file: "",
        };
    },
    setup(props) {
        const { getTrack, track } = useTracks();
        onMounted(getTrack(props.id));

        return {
            getTrack,
            track,
        };
    },
};
</script>
<style scoped>
.player-wrapper {
    align-items: center;
    background-color: #fff;
    background-image: linear-gradient(90deg, #fff 0, #e0e0e0);
    display: flex;
    height: 100vh;
    justify-content: center;
}
.custom-width{
    width: 31.5rem;

}
</style>
