<template>
    <Head title="Shop Name"/>
    <div class="bg-gray-200">
        <!-- uppper nav bar -->
        <UpperShopNav/>
        
        <div v-if="openBanner" class="grid grid-cols-12">
            <img class=" col-start-3 col-end-5" src="../../../../public/images/store_logo.jpg" alt="logo">
            <img class=" col-end-11 col-span-2" src="../../../../public/images/open.jpg" alt="open">
        </div>
        <!-- lower nav bar -->
        <LowerShopNav/>

        
        <div class="grid grid-cols-12 mt-2">

            <!-- slider -->
            <div class=" col-start-3 col-end-8 bg-white p-4">
                <Carousel :autoplay="3000" :wrap-around="true"  >
                    <Slide v-for="slide in 10" :key="slide" >
                    <div class="carousel__item">
                        <img src="../../../../public/images/banner_4.jpg" alt="">
                    </div>
                    </Slide>

                    <template #addons>
                        <Pagination />
                        <Navigation/>
                    </template>
                </Carousel>
                
            </div>

            <!-- search -->
            <div class="col-start-8 col-end-11 bg-white">
                <div class="p-8">
                    <div class="text-center text-7xl mt-4 border-b-4 pb-6 border-yellow-400">
                        Hungry?
                    </div>
                    <div class="pl-4 mt-4">
                        <p class="text-5xl"> Start Here</p>
                    </div>
                    <div class="text-center mt-6">

                        <input class="shadow appearance-none border rounded py-2 px-3 text-grey-darker" placeholder="eg. HP3 1AA">

                    </div>
                    <div class="pl-4 mt-4">
                        <p class="text-xl text-yellow-400">
                        Please enter your postcode to view our menu and place an order
                        </p>
                    </div>
                    <button class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-12  focus:outline-none focus:shadow-outline  mt-6   w-1/2" type="submit">
                        COLLECTION
                    </button>
                    <button class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-12  focus:outline-none focus:shadow-outline  mt-6   w-1/2" type="submit">
                        DELIVERY
                    </button>
                </div>
                
            </div>
        </div>

        <!-- text area -->
        <div class="grid grid-cols-12 ">
            <div class="col-start-3 col-end-11 bg-white" >
                <p class="text-center text-4xl text-yellow-400 mt-8">WELCOME TO A.K. SPICES</p>

                <p class="text-left text-1xl mt-8">Do you feel like ordering in? Are you too tired to dress up and go out for dinner? Well, there is no problem at all because A.K. Spices is here to cater for you right at your home. Are you wondering what kind of food we can deliver? Everything; from Fast Food to proper meals; you get everything when you order your dinner at A.K. Spices.

                </p>
                <p class="text-left text-1xl mt-4">Do you feel like ordering in? Are you too tired to dress up and go out for dinner? Well, there is no problem at all because A.K. Spices is here to cater for you right at your home. Are you wondering what kind of food we can deliver? Everything; from Fast Food to proper meals; you get everything when you order your dinner at A.K. Spices.

                </p>
            </div>
        </div>



        <!-- cards -->
         
        
        <div class="grid grid-cols-12 ">
            <div class="col-start-3 col-end-11 bg-white">
                <div class="grid grid-col-3 gap-6 mt-12">
                    <div class="lg:col-start-1 md:w-full rounded overflow-hidden shadow">
                        <div class="px-6 py-4 text-center">
                            <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                            
                        </div>
                        <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                        <div class="px-6 py-4 text-center">
                            <p class="text-grey-darker text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>

                    <div class="lg:col-start-2 md:w-full rounded overflow-hidden shadow ">
                        <div class="px-6 py-4 text-center">
                            <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                        </div>
                        <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                        <div class="px-6 py-4 text-center">
                            <p class="text-grey-darker text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>

                    <div class="lg:col-start-3 md:w-full rounded overflow-hidden shadow ">
                        <div class="px-6 py-4 text-center">
                            <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                        </div>
                        <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                        <div class="px-6 py-4 text-center">
                            <p class="text-grey-darker text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- credit and newsletter -->


        <div class="grid grid-cols-12  ">
            <div class="col-start-3 col-end-11 bg-white">
                <div class="grid grid-cols-2 gap-6 mt-12 mb-24">
                    <div class="lg:col-start-1 lg:col-end-2 col-start-1 col-span-2 md:w-full  ">
                        <div class="flex items-center rounded overflow-hidden shadow ">
                                <img alt="mountain" class="w-45 rounded-md" src="https://picsum.photos/seed/picsum/200" />
                                <div id="body" class=" ml-5">
                                    <h4 id="name" class="text-xl font-semibold mb-2">We accept credit cards</h4>
                                    <p id="job" class="text-gray-800 mt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <div class="flex mt-5">
                                    <img alt="avatar" class="w-6 rounded-full border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
                                    <p class="ml-3">John Doe</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- news Letter Form -->
                    <div class="lg:col-start-2  col-start-1 col-span-2 w-full">
                        
                        <form @submit.prevent="submit" class="rounded overflow-hidden shadow p-4">
                            
                            <p class="antialiased  text-center text-4xl">NEWSLETTER</p>
                                <p class="text-center mt-3">Sign up for our News and Special Offers</p>
                                
                            <div class="inline-block mt-6 w-1/5 pr-2">
        
                                <!-- <select v-model="form.gender" name="gender" autocomplete="gender" placeholder="Gender" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded ">
                                    <option>Male</option>
                                    <option>female</option>
                                    <option>other</option>
                                </select> -->
                                <select class="appearance-none w-full px-2 py-2 text-gray-700 bg-gray-200 rounded">
                                    <option>Mr.</option>
                                    <option>Mrs</option>
                                    <option>Ms</option>
                                    <option>Miss</option>
                                    <option>Dr.</option>
                                    <option>Prof.</option>
                                    </select>
                            </div>
                            <div class="inline-block mt-6 -mx-1  w-2/5">
                                <label class="hidden block text-sm text-gray-600" for="fname">First Name</label>
                                <input v-model="form.fname" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="fname"  name="fname" type="text" required="" placeholder="First Name" aria-label="Email">
                            </div>
                            <div class="inline-block mt-6  pl-2 w-2/5">
                                <label class="hidden block text-sm text-gray-600" for="lname">Last Name</label>
                                <input v-model="form.lname" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="lname"  name="lname" type="text" required="" placeholder="Last Name" aria-label="Email">
                            </div>

                            <div class="inline-block mt-6 w-1/2 pr-1">
                                <label class="hidden block text-sm text-gray-600" for="cus_email">Email</label>
                                <input v-model="form.email" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="email" required="" placeholder="Email" aria-label="Email">
                            </div>
                            <div class="inline-block mt-6 -mx-1 pl-1 w-1/2">
                                <label class="hidden block text-sm text-gray-600" for="cus_phone">Phone Number</label>
                                <input v-model="form.number" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_phone"  name="cus_phone" type="text" required="" placeholder="Phone Number" aria-label="Email">
                            </div>
                            <div class="flex items-center justify-center mt-6 mb-6">
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-12 rounded focus:outline-none focus:shadow-outline" type="submit">
                                    Sign In
                                </button>
                            </div>
                        </form>
                        
                    </div>
                    
                </div>
            </div>
        </div>
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
        toggle(){
            this.open = !this.open
        },
        toggle2(){
            this.open2 = !this.open2
        },
        submit(){
            this.$inertia.post('/',this.form)
        }
    }
};
</script>
