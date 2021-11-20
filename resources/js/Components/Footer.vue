<template>
    <div class="grid grid-cols-12">
        <div class="col-start-3 col-end-9">
            <Link :href="route('dashboard')" class="hover:text-red-500 ">Home</Link>::<Link :href="route('dashboard')" class="hover:text-red-500">Order Online</Link>::<Link :href="route('dashboard')" class="hover:text-red-500">Contact Us</Link>::<Link :href="route('dashboard')" class="hover:text-red-500">Site map</Link>
        </div>
    </div>

    <div class="bg-yellow-400">
        <p class="text-center text-sm font-bold">Copyright © 2021 A.K. Spices-Stage</p>
        <div class="h-48 flex flex-wrap justify-center" >
            <Link :href="route('dashboard')" ><img src="../../../public/images/myfoodbasket.png" class="mt-12" alt="logo"></Link>
        </div>

    </div>
</template>

<script>
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default{
        name:"Footer",

        components:{
            Link,
        }
    };
    

</script>