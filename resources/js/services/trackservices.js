import axios from "axios";
import { ref } from "vue";
export default function useTracks(){
    const tracks =ref([]);


    const getTracks= async(page = 1) => {
        let response = await axios('/api/Tracks?page=' + page);
        tracks.value=response.data;

    };


    return {
        tracks,
        getTracks
    }
}
