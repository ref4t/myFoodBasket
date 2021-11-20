<template>
    <div class="font-sans antialiased" id="app">
        <nav class="flex items-center justify-between flex-wrap bg-teal p-2 bg-black text-white">
            
            <div class="flex items-center flex-no-shrink text-white mr-6">
            
            </div>
            <div class="block sm:hidden">
            <button @click="toggle" class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-gray hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
            </div>                                                                                                                                                                                                                                                                                                                                                                                                                     
            <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
                <div class="text-sm sm:flex-grow">
                    <a href="#responsive-header" class="no-underline block  sm:inline-block sm:mt-0 text-teal-lighter hover:text-yellow-500 mr-4">
                    Acount
                    </a>
                    <a href="#responsive-header" class="no-underline block  sm:inline-block sm:mt-0 text-teal-lighter hover:text-yellow-500 mr-4">
                    Order History
                    </a>
                    <a href="#responsive-header" class="no-underline block  sm:inline-block sm:mt-0 text-teal-lighter hover:text-yellow-500 mr-4">
                    My Basket
                    </a>
                    <a href="#responsive-header" class="no-underline block  sm:inline-block sm:mt-0 text-teal-lighter hover:text-yellow-500 mr-4">
                    Checkout
                    </a>
                </div>
                <div>
                    <a href="#responsive-header" class="no-underline block  sm:inline-block sm:mt-0 text-teal-lighter hover:text-yellow-500 mr-4">
                    Login
                    </a>
                    <a href="#responsive-header" class="no-underline block  sm:inline-block sm:mt-0 text-teal-lighter hover:text-yellow-500 mr-4">
                    Register
                    </a>
                </div>
            </div>
        </nav>
    </div>
</template>


<script>
    export default{
        name:"UpperShopNav",
        data() {
            return {
                open:false,
            }
        },

        methods:{
            toggle(){
                this.open = !this.open
            }
        }
    };
    

</script>
