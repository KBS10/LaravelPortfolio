<template>
    <div id="HeaderComponent">
        <nav>
            <h1> <a href="#page1" class="logo"> KBS </a></h1>
            <div id="Header">
                <ul id="menu_bar" >
                    <li> <a href="#page1">{{ items[0] }}</a></li>
                    <li> <a href="#page2">{{ items[1] }}</a></li>
                    <li> <a href="#page3">{{ items[2] }}</a></li>
                    <li> <a href="#page4">{{ items[3] }}</a></li>
                    <li> <a href="#page5">{{ items[4] }}</a></li>
                </ul>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    data: () => ({
        tab   : null,
        items : ["Home", "MyProject", "UseTech", "About", "CONTACT US"]
    }),
    mounted() {
        console.log('HeaderComponent mounted.')
    },
    methods: {

    },
}
</script>
<style>
    #HeaderComponent{
        position: fixed;
        top: 0;
        width: 100%;
        background: #000000;
        z-index: 1000;
    }
    a{
        text-decoration: none;
    }
    nav {
        display: flex;
        justify-content: space-between;
    }
    .logo {
        font-size: 2rem;
        display: inline-block;
        padding: 0 20px;
        margin-left: 20px;
        /*background: #F35B66;*/
        color: #fff;
        transition: all .2s;
    }
    ul {
        list-style: none;
        display: flex;
        padding: 0 10px;
        transition: margin .2s;
    }
    li:not(:last-child) {
        margin-right: 20px;
    }
    li a {
        color: white;
        display: block;
        padding: 10px 20px;
    }
    li a:hover{
        color: #F35B66;
    }

</style>
