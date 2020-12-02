<template>
    <div id="ContactUsComponent">
        <div id="ContactUs" ></div>

        <form action="#" id="contact">
            <label for="name">NAME</label>
            <input type="text" id="name" name="name" placeholder="NAME">

            <label for="email">EMAIL</label>
            <input type="text" id="email" name="email" placeholder="EMAIL">

            <label for="phone">PHONE</label>
            <input type="text" id="phone" name="phone" placeholder="PHONE">

            <label for="message">MESSAGE</label>
            <textarea id="message" name="message" placeholder="MESSAGE" style="height:200px"></textarea>

            <input type="button" id="send" value="SEND">
        </form>
    </div>
</template>

<script>
export default {
    name: "ContactUsComponent",
    mounted() {
        console.log('Cointact Us mounted.')
    },
}
</script>
<style>
#ContactUsComponent{
    display: block;
}
#ContactUs{
    float : top;
    margin: 0 auto;
    background-image: url("https://user-images.githubusercontent.com/53847348/100832501-5b417300-34ab-11eb-8f17-be0b9ef4ab53.png");
    background-repeat: no-repeat;
    width: 350px;
    height: 100px;
}

#contact{
    margin : 0 auto;
    width: 500px;
}
input[type=text], select, textarea {
    background-color : #2B2B2B;
    color : white;
    width: 100%;
    padding: 12px;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

#send {
    margin : 0 auto;
    display : block;
    background-color: #2B2B2B;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
#send:hover {
    background-color: #9B2D44;
}

</style>
