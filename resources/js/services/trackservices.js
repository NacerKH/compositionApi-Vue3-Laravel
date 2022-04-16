import axios from "axios";
import { ref } from "vue";
export default function useTracks(){
    const tracks =ref([]);


    const getTracks= async() => {
        let reponse = await axios('api/Tracks');
        tracks.value=reponse;
    };
    return {
        tracks,
        getTracks
    }
}
