

<template>




<carousel :slides="slides" :interval="3000" controls indicators></carousel>





<div class="relative  flex   bg-yellow-500 ">
<div class="banner__layer flex "></div>
</div>
<div class="m-10 flex h-full bg-yellow-900 mx-auto container">
    kali
</div>




</template>

<script>
import Carousel from "./carousel/Carousel.vue";
export default {
  name: "App",
  components: { Carousel },
  data: () => ({
    slides: [
      "/img/Banner1.jpg",
      "https://picsum.photos/id/1033/900/400",
      "https://picsum.photos/id/1037/900/400",
      "https://picsum.photos/id/1035/900/400",
      "https://picsum.photos/id/1036/900/400",
    ],
  }),
};
</script>
<style scoped>
.banner__layer {
    position: absolute;
    top: 0;
    right: 0px;
    transform: translateY(0%);
    z-index: 10;
    height: 30px ;
    width: 100%;
    background-image: linear-gradient(90deg, #964f1085, #713f12, #713f12, #964f1085);
}

</style>
