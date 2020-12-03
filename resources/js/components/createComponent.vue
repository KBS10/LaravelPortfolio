<template>
    <div>
        <form class="w-full max-w-lg " enctype="multipart/form-data" @submit.prevent="submit()">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password" >
                        Title
                    </label>
                    <input ref="title" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="title" >
                    <p class="text-gray-600 text-xs italic">Some tips - as long as needed</p>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        name
                    </label>
                    <input :value="currentUser.user.name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="text" type="text" readonly>
                    <p class="text-gray-600 text-xs italic">Some tips - as long as needed</p>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        body
                    </label>
                    <textarea ref="body" class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message"></textarea>
                    <p class="text-gray-600 text-xs italic">Re-size can be disabled by set by resize-none / resize-y / resize-x / resize</p>
                </div>
            </div>
            <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                </svg>
                <span class="mt-2 text-base leading-normal">Select a file</span>
                <input type='file' class="hidden"  v-on:change="onImageChange">
            </label>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3">
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
            body  : null,
            user  : null,
            user_id : null,
            image: '',
        }
    },
    mounted() {
        console.log('Component mounted.')
    },
    methods:{
        onImageChange(e){
            console.log(e.target.files[0]);
            this.image = e.target.files[0];
        },
        submit(){
            this.title = this.$refs.title.value;
            this.body  = this.$refs.body.value;
            this.user_id = this.currentUser.user.id;
            const config = {
                headers: { 'content-type': 'multipart/form-data' }
            }
            let formData = new FormData();
            formData.append('image', this.image);
            formData.append('title', this.title);
            formData.append('body', this.body);
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
