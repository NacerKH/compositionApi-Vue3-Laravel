

<template>




<carousel :slides="slides" :interval="3000" controls indicators></carousel>






<div class="relative  flex   bg-yellow-500 ">
<div class="banner__layer flex "></div>

</div>

<div class="mt-10 flex  ">
    <div class=" flex m-1  mt-4  ">
 <SideBar :news="news" />
</div>
<div class=" container mx-auto flex     grow-0 shrink basis-4/5	  flex-wrap  bg-yellow-900 h-screen  ml-4 " >
    <div class="flex flex-1  justify-center">
  <label for=""  class="title"> Radio 📻 💁</label>


    </div>
    </div>


</div>






</template>

<script>
import Carousel from "./carousel/Carousel.vue";
import SideBar from "./home/SideBar.vue";
export default {
  name: "home",
  components: { Carousel , SideBar },
  data: () => ({
    slides: [
      "/img/Banner1.jpg",
      "https://picsum.photos/id/1033/900/400",
      "https://picsum.photos/id/1037/900/400",
      "https://picsum.photos/id/1035/900/400",
      "https://picsum.photos/id/1036/900/400",
    ],
    news:[]
  }),
};
</script>
<style scoped>
.title{
    font-family: 'Permanent Marker', cursive;
    font-size: 22px;
}
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
.sidenav {
  width: 130px;
  position: fixed;
  z-index: 0;
  top: 20px;
  left: 10px;
  background: #eee;
  overflow-x: hidden;
  padding: 8px 0;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #2196F3;
  display: block;
}

.sidenav a:hover {
  color: #064579;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
