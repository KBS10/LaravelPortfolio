<template>
    <div id="FullComponent">
        <full-page ref="fullpage" :options="options" id="fullpage">
            <div class="section">
                First Section ...
            </div>
            <div class="section">
                Second section....
            </div>
        </full-page>
    </div>
</template>

<script>
export default {
    name: "FullComponent",
    data(){
        return {
            options: {
                licenseKey: '',
                menu: "#menu",
                anchors: ['page1', 'page2', 'page3'],
                sectionsColor: ['#41b883', '#ff5f45', '#0798ec']
            }
        }
    },
    mounted() {
        console.log('full-page mounted.')
    },
}
</script>
<style>

</style>
