

<template>
  <carousel :slides="slides" :interval="3000" controls indicators></carousel>
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
