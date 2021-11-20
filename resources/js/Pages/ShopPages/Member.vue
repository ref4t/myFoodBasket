<template>
    <Head title="Shop Name"/>
    <div class="bg-white">
        <!-- uppper nav bar -->
        <UpperShopNav/>
        
        <div v-if="openBanner" class="grid grid-cols-12">
            <img class=" col-start-3 col-end-5" src="../../../../public/images/store_logo.jpg" alt="logo">
            <img class=" col-end-11 col-span-2" src="../../../../public/images/open.jpg" alt="open">
        </div>
        <!-- lower nav bar -->
        <LowerShopNav/>

        account login

        <!-- footer -->
        
        <Footer/>

    </div>
</template>

<script>

import { Head, Link } from '@inertiajs/inertia-vue3';
import { Method } from '@inertiajs/inertia';
import { Carousel, Navigation, Pagination, Slide } from 'vue3-carousel';

import 'vue3-carousel/dist/carousel.css';

import UpperShopNav from '@/Components/UpperShopNav.vue';
import LowerShopNav from '@/Components/LowerShopNav.vue'
import Footer from '@/Components/Footer.vue';
export default{

    name: 'Autoplay',
    components: {
        Head,
        Link,
        Carousel,
        Slide,
        Pagination,
        Navigation,
        UpperShopNav,
        LowerShopNav,
        Footer,
    },
    props:{
        openBanner: Boolean
    },
    data() {
        return {
            open2:false,
            form: { gender: "", fname:"", email:"",number:"" },
            
        }
    },
    methods:{
        submit(){
            this.$inertia.post('/',this.form)
        }
    }
};
</script>
