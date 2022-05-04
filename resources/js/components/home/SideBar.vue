<template>

    <div class="grid grid-cols-1 gap-2"  >

<div class="bg-yellow-200 w-52 h-72 m-4 static rounded-lg ">
        <div class="bg-yellow-900 w-52 h-72 m-2 hover:m-0 absolute rounded-lg shadow-lg hover:shadow-2xl transition-all duration-150 ease-out hover:ease-in ">
            <h1 class="m-4 text-2xl font-bold">Wat is Lorem Ipsum?</h1>
            <hr class="m-4 rounded-2xl border-t-2">
            <p class="m-4 text-sm">Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak</p>
        </div>

    </div>
        <div class="bg-yellow-200 w-52 h-72 m-4 static rounded-lg ">
        <div class="bg-yellow-900  w-52 h-72 m-2 hover:m-0 absolute rounded-lg shadow-lg hover:shadow-2xl transition-all duration-150 ease-out hover:ease-in ">
            <h1 class="m-4 text-2xl font-bold">Wat is Lorem Ipsum?</h1>
            <hr class="m-4 rounded-2xl border-t-2">
            <p class="m-4 text-sm">Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak</p>
        </div>

    </div>
        <div class="bg-yellow-200 w-52 h-72 m-4 static rounded-lg ">
        <div class="bg-yellow-900  w-52 h-72 m-2 hover:m-0 absolute rounded-lg shadow-lg hover:shadow-2xl transition-all duration-150 ease-out hover:ease-in ">
            <h1 class="m-4 text-2xl font-bold">Wat is Lorem Ipsum?</h1>
            <hr class="m-4 rounded-2xl border-t-2">
            <p class="m-4 text-sm">Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak</p>
        </div>

    </div>



</div>
</template>
<script>

export default {
     props: {
    news: {
      type: Array,
      required: true,
    }
     },
    setup() {

    },
}
</script>
