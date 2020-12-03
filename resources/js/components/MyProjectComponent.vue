<template>
    <div id="MyProjectComponent">
        <div id="MyProject" ></div>
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
                <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div>
                <div class="swiper-slide">Slide 10</div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</template>

<script>

export default {
    name: "MyProjectComponent",
    mounted() {
        console.log('MyProject mounted.')
    },
    methods: {
        onSwiper(swiper) {
            console.log(swiper)
        },
        onSlideChange() {
            console.log('slide change')
        },
    },
}
</script>
<style>
#MyProject{
    float : top;
    margin: 0 auto;
    background-image: url("https://user-images.githubusercontent.com/53847348/100836405-95624300-34b2-11eb-90f4-ff41d96f8c4d.png");
    background-repeat: no-repeat;
    width: 250px;
    height: 80px;
}
</style>
