<template>
    <div id="MyProjectComponent">
            <div id="MyProject" ></div>
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" v-for="list in this.$store.state.board" :key="list">

                    <div id="project_Content">
                        <img id="images" v-bind:src="list.image">
                        <div id="title">{{ list.title}}</div>
                        <div id="content">{{ list.content}}</div>
                    </div>

                </div>
            </div>

            <!-- 네비게이션 -->
            <div class="swiper-button-next"></div><!-- 다음 버튼 (오른쪽에 있는 버튼) -->
            <div class="swiper-button-prev"></div><!-- 이전 버튼 -->

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <div id="button">
<!--             v-if="this.$store.state.CheckUser === 1"-->

            <button id="create" onclick="window.location.href='create'">글쓰기</button>
        </div>
    </div>
</template>

<script>
export default {
    name: "MyProjectComponent",
    data(){
        return{
            // swiper_List : [1,2,3,4,5],
        }

    },
    mounted() {
        // console.log('MyProject mounted.')
    },
    methods: {
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
    height: 70px;
}
#button{
    margin : 5px auto;
    width: 100px;

}
#create{
    display : inline-block;
    background-color: #4CAF50;
    padding: 10px 24px;
    border-radius: 8px;
    border: 1px white;
    color : white;
}
#create:hover{
    background-color: #9B2D44;
}
.swiper-pagination{
    display : block;
    z-index: -10;
}

#project_Content{
    display : inline-block;
    width : 100%;
}
#images{
    margin : 0 auto;
    margin-left : 100px;
    border : 1px solid;
    width : 300px;
    height : 250px;
}
#title{
    text-align : center;
    font-size : 1.2em;
    font-weight : bold;
    margin: 10px auto;
    border : 1px solid;
    width : 300px;
    height : 50px;
}
#content{
    margin : 0 auto;
    border : 1px solid;
    width : 300px;
    height : 150px;
}
#buttons{
    width : 90%;
    height : 10px;
    margin : 10px;
}
#delete{
    float : right;
    z-index: 1000;
}
</style>
