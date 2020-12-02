<template>
    <div id="AboutComponent">
        <div id="About"/>
        <div id="ImageMe"/>

        <div id="content">
            <div id="leftAbout">
                <ul id="About_ul">
                    <li>N A M E_ 김범수</li>
                    <li>D A T E_ B I R T H_ 1998. 05. 27</li>
                    <li>BLOOD_GROUPS_ B형</li>
                    <li>M O T O_ 하고싶은대로 살자</li>
                    <li>H O B B Y_  맛집탐방</li>
                </ul>
            </div>
            <div id="rightAbout">
                <p>아래의 연락처로 문자 또는 메일을 주시면 됩니다.</p>
                <table>
                    <tr>
                        <td><div id="ImgPhone"/></td>
                        <td><div id="ImgMessage"/></td>
                    </tr>
                    <tr>
                        <td>010 - 4922 - 7711</td>
                        <td>gimbeomsu59@gmail.com</td>
                    </tr>
                    <tr>
                        <td colspan="2"><div id="ImageTogether"/></td>
                    </tr>
                </table>
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

#ImageMe{
    display: inline-block;
    background-image: url("../../imgs/Me.png");
    background-repeat: no-repeat;
    width : 200px;
    height : 500px;
}

#ImageTogether{
    display: block;
    float : right;
    background-image: url("../../imgs/Together.png");
    background-repeat: no-repeat;
    margin-right : 50px;
    width : 350px;
    height : 200px;
}
#content{
    display: inline-block;
    margin: 0 auto;
    width: 1000px;
}

#rightAbout{
    float: right;
}
#leftAbout{
    float : left;
}
#About_ul{
    display: block;
}
#About_ul > li{
    margin: 20px;
    font-size : 1.5rem;
}
#rightAbout > p {
    font-size: 1.3rem;
}

#ImgPhone{
    width : 200px;
    height : 200px;
    background-image: url("https://user-images.githubusercontent.com/53847348/100840410-2e945800-34b9-11eb-8a10-0cd88f15d0f2.png");
    background-repeat: no-repeat;
}
#ImgMessage{
    width : 200px;
    height : 150px;
    background-image: url("https://user-images.githubusercontent.com/53847348/100840427-3522cf80-34b9-11eb-8ed6-57e64bb164eb.png");
    background-repeat: no-repeat;
}

#rightAbout > table {
    font-size: 1.2em;
}
</style>
