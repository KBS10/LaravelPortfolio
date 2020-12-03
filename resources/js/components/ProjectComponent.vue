<template>
    <div id="ProjectComponent">
        <div id="project_Content">
            <div id="images">Images</div>
            <div id="title">Title</div>
            <div id="board">Board</div>
        </div>
        <div id="buttons">
            <button id="delete" @click="deleteButton()">삭제</button>
        </div>
    </div>
</template>

<script>
export default {
    name: "Project",
    mounted() {
        console.log('Project mounted.')
    },
    methods: {
        deleteButton(){
            console.log("삭제버튼")
        },
    }
}
</script>
<style>
#ProjectComponent{
    display: block;
    width: 70%;
    height: 100%;
    border : 1px solid;
    margin : 0 auto;
    padding : 10px;
}
#project_Content{
    display : inline-block;
    width : 100%;
}
#images{
    margin : 0 auto;
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
#board{
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
