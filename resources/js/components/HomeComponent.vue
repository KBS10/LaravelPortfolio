<template>
    <div id="HomeComponent">
        <h1 id="title">KIM BEOM SOO</h1>
        <div id="sakura"></div>
    </div>
</template>

<script>
export default {
    name: "HomeComponent",
    mounted() {
        console.log('Home mounted.')
    },
}
</script>

<style scoped>

    #title{
        text-align: center;
        color: black;
    }
    #sakura{
        width: 800px;
        height: 500px;
        background-image: url("https://user-images.githubusercontent.com/53847348/100203451-f71c2d80-2f45-11eb-9cc7-dff9a50ebd54.png");
        background-repeat: no-repeat;
    }

</style>
