<template>
    <div id="HomeComponent">
        <div id="sakura"></div>
        <div id="HomeRight">
            <div id="name">KIM BEOM SOO</div>
            <div id="portfolio">PORTFOLIO</div>
            <p id="introduce">안녕하세요. 프론트엔드 김범수의 개인 포트폴리오 사이트입니다</p>
        </div>
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
    #HomeComponent{
        display: block;
    }

    #sakura{
        display: inline-block;
        width: 50%;
        height: 500px;
        margin-top: 100px;
        float: left;
        background-image: url("../../imgs/sakura.png");
        background-repeat: no-repeat;
        background-size: 700px  500px;
    }
    #HomeRight{
        margin-top: 100px;
        display: inline-block;
        text-align: center;
        width: 50%;
        height : 500px;
        float : right;
        color: white;
        border : 1px white;
    }
    h1{
        margin:  0 auto;
    }
    #name{
        font-size: 4rem;
        font-weight: bold;
        margin-top: 20%;
    }
    #portfolio{
        font-size: 4rem;
        font-weight: bold;
    }
    #HomeRight > p {
        font-size: 1.5rem;
    }

</style>
