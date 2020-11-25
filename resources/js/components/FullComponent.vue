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
                <UseTechComponent/>
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
import UseTechComponent from "./UseTechComponent";
import AboutComponent from "./AboutComponent";
import ContactUsComponent from "./ContactUsComponent";


export default {
    components : {
        HeaderComponent,
        HomeComponent,
        MyProjectComponent,
        UseTechComponent,
        AboutComponent,
        ContactUsComponent
    },
    name: "FullComponent",
    data(){
        return {
            options: {
                licenseKey: '',
                menu: "#menu",
                anchors: ['page1', 'page2', 'page3','page4','page5'],
                sectionsColor: ['#41b883', '#ff5f45', '#0798ec','#ffffff','#ff5f45']
            }
        }
    },
    mounted() {
        console.log('full-page mounted.')
    },
    methods:{
    }
}
</script>
<style>

</style>
