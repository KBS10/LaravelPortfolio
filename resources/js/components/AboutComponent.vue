<template>
    <div id="AboutComponent">
        <div id="About"/>
        <div id="content">
            <div id="leftContent">
                <div id="Me"/>
                <div id="intro">
                    <div>HELLO!</div>
                    <div>I'm Beomsoo Kim</div>
                    <div id="japanese"> 私はキムボムスです。</div>
                </div>
            </div>
            <div id="rightContent">
                <div id="profile">
                    <div id="category1">PROFILE</div>
                    <div>Beomsoo Kim / 김범수</div>
                    <div id="phoneNumber">
                        010 - 4922 - 7711
                        <span id="block1"> | </span>
                        gimbeomsu59@gmail.com
                        <span id="block2"> | </span>
                        대구시 동구 거주
                    </div>
                </div>

                <div id="projects">
                    <div id="category2">PROJECTS</div>
                    <div id="year2019">2019</div>
                        <div>Java "Gochi" 미니 프로젝트</div>
                    <div id="year2020">2020</div>
                        <div>Front End(Vue) "Kimino" 프로젝트</div>
                        <div id="syder">Android "SYDER" 프로젝트(실패작)</div>
                        <div>Front End(Vue) "Follow-Me" 프로젝트현재 진행 중</div>
                </div>

                <div id="skills">
                    <div id="category3">SKILLS</div>
                    <div id="language"></div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    name: "AboutComponent",
    mounted() {
        console.log('About mounted.')
    },
}
</script>
<style>
#About{
    float : top;
    margin: 0 auto;
    background-image: url("https://user-images.githubusercontent.com/53847348/100836245-4fa57a80-34b2-11eb-8010-f63ead35de63.png");
    background-repeat: no-repeat;
    width: 200px;
    height: 75px;
}
#content{
    display : block;
 }
#leftContent{
    display : inline-block;
    float : left;
    width : 50%;
}
#rightContent{
    display : inline-block;
    float : right;
    width : 50%;
}
#Me{
    margin : 0 auto;
    background-image: url("../../imgs/Me.png");
    background-repeat: no-repeat;
    width : 400px;
    height : 410px;
}
#intro{
    margin : 0 auto;
    font-size: 1.5em;
    text-align: center;
    font-weight : bold;
}
#japanese{
    margin-left : 30px;
}
#rightContent{
    font-weight : bold;
}
#category1,#category2,#category3,#block1,#block2{
    color : #868e96;
    margin : 20px 0;
}

#year2019, #year2020, #phoneNumber, #syder{
    margin : 10px 0;
}
#language{
    background-image: url("../../imgs/language.png");
    background-repeat: no-repeat;
    width: 370px;
    height: 38px;
}
</style>
