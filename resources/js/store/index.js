import Vue from 'vue'
import Vuex from'vuex'

Vue.use(Vuex)
export default new Vuex.Store({
    state: {
        CheckUser : 0,
        board:[
            {title : "Gochi", content : "Java를 이용한 다마고치 미니 프로젝트",
                image: "https://user-images.githubusercontent.com/53847348/101485950-48450c00-399f-11eb-88ac-508a41076820.png"},
            {title : "kimino", content : "교실의 대기 질(CO2, 미세먼지, 초미세먼지)를 측정하여 웹/어플/하드웨어를 통해 보여주는 프로젝트",
                image: 'https://user-images.githubusercontent.com/53847348/101485972-5004b080-399f-11eb-9469-e7c6499b2163.png'},
            {title : "Syder", content : "교내 오토바이 배달 사고를 해결 하기 위한 자율 주행 자동차",
                image: 'https://user-images.githubusercontent.com/53847348/101485987-5561fb00-399f-11eb-9bee-edbf941e3266.png'},
            {title : "MyFarm", content : "Python을 이용한 미니 게임(농장 키우기)",
                image: 'https://user-images.githubusercontent.com/53847348/101486002-5abf4580-399f-11eb-9eb7-de9050baf5cc.png'},
            {title : "Follow-Me", content : "비콘을 활용한 실내 측위 내비게이션 프로젝트",
                image: 'https://user-images.githubusercontent.com/53847348/101486013-5f83f980-399f-11eb-8841-b671058cb1cd.png'},
        ],
    },
    getters: {
    },
    actions: {
    },
    mutations: {
    }
})
