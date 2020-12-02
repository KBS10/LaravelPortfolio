<template>
    <div id="MyProjectComponent">
        <div id="MyProject" ></div>
    </div>
</template>

<script>
export default {
    name: "MyProjectComponent",
    mounted() {
        console.log('MyProject mounted.')
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
