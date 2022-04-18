<template>
<div class="flex  justify-center bg-orange-200 rounded px-5 py-2 hover:bg-orange-300 ">
    <div class="flex-1  ">
 <label for="" class=" text-orange-500 hover:text-orange-900">  New Track
       </label>
    </div>
        <div class="flex flex-1 justify-end ">
        <MusicNoteIcon class="h-4 w-5 text-blue-500 hover:text-blue-700" />
    </div>

</div>
<form action=""  class="bg-orange-200 hover:bg-orange-300 rounded">
    <div class="flex flex-col   ">
        <div class=" flex text-orange-500 m-2 flex-wrap	 inline-flex items-center">
            <label class=" basis-1/3">Title: </label>
            <input type="text" class="md:w-64 sm:w-32 rounded ">
        </div>
     <div class="flex  text-orange-500 m-2 flex-wrap inline-flex items-center	">
        <label class="basis-1/3"> Description: </label>
        <input type="text" class="md:w-64 sm:w-32 rounded">
    </div>
    <div class="flex text-orange-500 m-2 flex-wrap inline-flex items-center	">
        <label class="basis-1/3">Picture: </label>
        <input type="file" class="md:w-64 sm:w-32 rounded form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
    </div>
  <div class="flex text-orange-500 m-2 flex-wrap inline-flex items-center	">
        <label class="basis-1/3">Audio :</label>
         <input type="file" class="md:w-64 sm:w-32 rounded form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">

    </div>
    <div class="flex text-orange-500 m-2 flex-wrap 	inline-flex items-center">
        <label class="basis-1/3">Is Favourite: </label>
        <input type="checkbox"  class=" flex justify-end rounded form-checkbox h-5 w-5 text-gray-600 " >
    </div>
 <div class="flex text-orange-500 justify-end flex-wrap	">
    <button class="py-1  px-2 bg-orange-400 hover:bg-orange-300  rounded text-white hover:text-black"> Add Track</button>
    </div>
    </div>
</form>

</template>

<script>
import { MusicNoteIcon, PhotographIcon, CheckCircleIcon,DocumentTextIcon, HeartIcon} from "@heroicons/vue/solid";


export default {
  components: {MusicNoteIcon,PhotographIcon,CheckCircleIcon,DocumentTextIcon, HeartIcon},

};
</script>

