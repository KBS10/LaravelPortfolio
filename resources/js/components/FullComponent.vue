<template>
    <div id="FullComponent">
        <HeaderComponent></HeaderComponent>
        <full-page ref="fullpage" :options="options" id="fullpage">
            <div class="section">
                <HomeComponent/>
            </div>
            <div class="section">
                <MyProjectComponent/>
            </div>
            <div class="section">
                <AboutComponent/>
            </div>
            <div class="section">
                <ContactUsComponent/>
            </div>
        </full-page>
    </div>
</template>

<script>
import HeaderComponent  from "./HeaderComponent";
import HomeComponent from "./HomeComponent";
import MyProjectComponent from "./MyProjectComponent";
import AboutComponent from "./AboutComponent";
import ContactUsComponent from "./ContactUsComponent";
import axios from "axios";

export default {
    components : {
        HeaderComponent,
        HomeComponent,
        MyProjectComponent,
        AboutComponent,
        ContactUsComponent
    },
    name: "FullComponent",
    data(){
        return {
            data : "",
            options: {
                licenseKey: '',
                menu: "menu",
                anchors: ['page1', 'page2', 'page3','page4'],
                sectionsColor: ['#000000', '#fffffff', '#fffffff','#000000']
            }
        }
    },
    mounted() {
        this.axios();
    },
    methods:{
        axios(){
            axios.get('http://localhost:8000/Check')
                .then((response) =>{
                    this.$store.state.CheckUser = response.data;
                    console.log(this.$store.state.CheckUser)
                })
                .catch(function(error){
                    console.log(error)
                })
        }
    }
}
</script>
<style>
</style>
