<template>
    <div>
        <form class="w-full max-w-lg " enctype="multipart/form-data" @submit.prevent="submit()">
            <div id="title">제목</div>
            <input type="제목">
            <div id="content">내용</div>
            <textarea id="message"></textarea>
            <label >
                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" >
                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                </svg>
                <input type='file' class="hidden"  v-on:change="onImageChange">
            </label>
            <div>
                <div>
                    <button class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" >
                        Send
                    </button>
                </div>
                <div class="md:w-2/3"></div>
            </div>
        </form>

    </div>
</template>


<script>
export default {
    props:{
        currentUser: {
            type: Object,
            required: true
        }
    },

    data(){
        return {
            title : null,
            content  : null,
            user_id : null,
            image: '',
        }
    },
    mounted() {
        // console.log('Component mounted.')
    },
    methods:{
        onImageChange(e){
            console.log(e.target.files[0]);
            this.image = e.target.files[0];
        },
        submit(){
            this.title  = this.$refs.title.value;
            this.content = this.$refs.content.value;
            this.user_id = this.currentUser.user.id;
            const config = {
                headers: { 'content-type': 'multipart/form-data' }
            }
            let formData = new FormData();
            formData.append('image', this.image);
            formData.append('title', this.title);
            formData.append('body', this.content);
            formData.append('user_id', this.user_id);
            
            axios.post('/create', formData, config)
                .then(res =>{
                    location.href = "/";
                })
                .catch(error =>{
                    console.log(error);
                });
        }
    }

}
</script>
