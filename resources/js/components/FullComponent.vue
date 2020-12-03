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
            options: {
                licenseKey: '',
                menu: "menu",
                anchors: ['page1', 'page2', 'page3','page4'],
                sectionsColor: ['#000000', '#fffffff', '#fffffff','#000000']
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
