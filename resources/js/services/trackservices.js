import axios from "axios";
import { ref, watch } from "vue";
import router from '../router/index.js'

export default function useTracks() {
    const tracks = ref([]);
    const errors = ref('');
    const track = ref([]);
    let imageFile = ref("");
    let imageUrl = ref("");

    const getTrack = async (id) => {

        console.log(id);

        let response = await axios.get('/api/Tracks/' + id);
        track.value = response.data.data;
        console.log(response);

    };

    const getTracks = async (page = 1) => {
        let response = await axios('/api/Tracks?page=' + page);
        tracks.value = response.data;

    };
    const createTracks = async (data) => {
        errors.value = ''
        try {
            await axios.post('/api/Tracks', data);
            await router.push({ name: 'tracks.index' })
        } catch (e) {
            if (e.response.status === 422) {

                errors.value = e.response.data.errors;
            };
        };
    };
    const editTrack = async (data) => {
        errors.value = ''
        try {
            await axios.post('/api/Tracks', data);
            await router.push({ name: 'tracks.index' })
        } catch (e) {
            if (e.response.status === 422) {

                errors.value = e.response.data.errors;
            };
        };
    };
    const UpdateTracks = async (id) => {
        errors.value = ''
        try {
            await axios.put('/api/Tracks/'+ id,track.value);
            await router.push({ name: 'tracks.index' })
        } catch (e) {
            if (e.response.status === 422) {

                errors.value = e.response.data.errors;
            };
        };
    };

    function handleImageSelected(event) {
        if (event.target.files.length === 0) {
            imageFile.value = "";
            imageUrl.value = "";
            return;
        }

        imageFile.value = event.target.files[0];

    }

    watch(imageFile, (imageFile) => {
        if (!(imageFile instanceof File)) {
            return;
        }

        let fileReader = new FileReader();

        fileReader.readAsDataURL(imageFile);

        fileReader.addEventListener("load", () => {
            imageUrl.value = fileReader.result;
        });
    });


    return {
        tracks,
        getTracks,
        createTracks,
        imageFile,
        imageUrl,
        handleImageSelected,
        errors,
        track,
        editTrack,
        getTrack,
        UpdateTracks


    }
}
