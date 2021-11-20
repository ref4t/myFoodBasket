<template>
    <div class="grid grid-cols-6 gap-4 bg-yellow-400">
        <div class= "col-start-2 col-end-6 font-sans antialiased" id="app">
            <nav class=" flex items-center justify-between flex-wrap  text-white">
                <div class="flex items-center flex-no-shrink text-white mr-6">
                
                </div>
                <div class="block xl:hidden">
                <button @click="toggle2" class="flex items-center  text-teal-lighter  hover:border-white text-2xl">
                    <svg class="fill-current h-6 w-6 p-1" viewBox="0 0 20 20" ><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
                </div>
                <div :class="open2 ? 'block': 'hidden'" class="w-full flex-grow xl:flex xl:items-center ">
                <div class=" xl:flex-grow">
                    <Link :href="route('shopHome')" class="no-underline block  xl:inline-block xl:text-xl  text-teal-lighter hover:text-black mr-4">
                    Home
                    </Link>
                    <Link :href="route('shopMember')" class="no-underline block  xl:inline-block xl:text-xl xl:mt-0 text-teal-lighter hover:text-black mr-4">
                    Member
                    </Link>
                    <Link :href="route('shopmenu')" class="no-underline block  xl:inline-block xl:text-xl xl:mt-0 text-teal-lighter hover:text-black mr-4">
                    Menu
                    </Link>
                    <Link :href="route('shopcheckout')" class="no-underline block  xl:inline-block xl:text-xl xl:mt-0 text-teal-lighter hover:text-black mr-4">
                    Check Out
                    </Link>
                    <Link :href="route('shopcontactus')" class="no-underline block  xl:inline-block xl:text-xl xl:mt-0 text-teal-lighter hover:text-black mr-4">
                    Contact Us
                    </Link>
                </div>
                <div>
                    <Link :href="route('shopcart')" class="no-underline block  xl:inline-block xl:text-xl xl:mt-0 text-teal-lighter hover:text-black mr-4">
                    My Basket numerber of items
                    </Link>
                </div>
                </div>
            </nav>
        </div>
    </div>
</template>

<script>

    import { Head, Link } from '@inertiajs/inertia-vue3';
    
    export default{
        
        name:"LowerShopNav",

        components:{
            Link
        },
        data() {
            return {
                open2:false,
            }
        },

        methods:{
            toggle2(){
                this.open = !this.open
            }
        }
    };
    

</script>