<template>
    <div id="UseTechComponent">
        <div id="UseTech" ></div>
        <div id="UseTech_Content">
            <div id="vue"></div>
            <div id="html"></div>
            <div id="android"></div>
        </div>
        <div id="Languages"></div>

    </div>
</template>

<script>
export default {
    name: "UseTechComponent",
    mounted() {
        console.log('UseTech mounted.')
    },
}
</script>
<style>
#UseTechComponent{
    margin: 0 auto;
    width: 1200px;
}
#UseTech{
    margin: 0 auto;
    background-image: url("https://user-images.githubusercontent.com/53847348/100836327-7663b100-34b2-11eb-81f5-0740c89d9461.png");
    background-repeat: no-repeat;
    width: 200px;
    height: 80px;
}

#Languages{
    width: 350px;
    height: 200px;
    background-image: url("https://github-readme-stats.vercel.app/api/top-langs/?username=KBS10&layout=compact&count_private=true&langs_count=30&hide=Python");
    background-repeat: no-repeat;
}
#UseTech_Content{
    display : block;
    margin: 0 auto;
}
#vue{
    display : inline-block;
    width: 350px;
    height: 200px;
    background-image: url("../../imgs/vue.png");
    background-repeat: no-repeat;
}
#html{
    display : inline-block;
    width: 350px;
    height: 200px;
    background-image: url("../../imgs/html.png");
    background-repeat: no-repeat;
}
#android{
    display : inline-block;
    background-image: url("../../imgs/android.png");
    width: 250px;
    height: 100px;
    background-repeat: no-repeat;
}
</style>
