<template>
      <Head>
    <!-- <link rel="stylesheet" href="/css/theme-6.css"> -->
            <link rel="stylesheet" href="/css/shoptheme6/bootstrap.min.css">
            <link rel="stylesheet" href="/css/shoptheme6/bootstrap-datetimepicker.min.css">
            <link rel="stylesheet" href="/css/shoptheme6/all.min.css">
            <link rel="stylesheet" href="/css/shoptheme6/swiper-bundle.min.css">
            <link rel="stylesheet" href="/css/shoptheme6/fancybox.css">
            <link rel="stylesheet" href="/css/shoptheme6/animate.min.css">
            <link rel="stylesheet" href="/css/shoptheme6/select2.min.css">
            <link rel="stylesheet" href="/css/shoptheme6/app.css">
            <link rel="stylesheet" href="/css/shoptheme6/responsive.css">
</Head>
<TopHeaderSix :logo="setting.config_logo" :total="cartTotal" :cartCount="Object.keys(cartTest).length"></TopHeaderSix>
    <div class="container mb-5" style="min-height:34vh;">
        <h1 class="my-5 text-uppercase">SHOPPING CART</h1>
        <div class="row">
            <div class="col-12 border-bottom">
                <p class="fw-light">Your shopping cart is empty!</p>
            </div>
            <div class="col-12 my-3 ">
                <Link href="/menu" class="btn btn-success" style="float:right">Continue</Link>
            </div>
        </div>
    </div>
<TopFooterSix :logo="setting.config_logo" :name="setting.config_name"></TopFooterSix>
</template>
<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import TopHeaderSix from '@/Pages/ShopPages/Theme_6/Header6.vue';
import TopFooterSix from '@/Pages/ShopPages/Theme_6/Footer6.vue';
export default {
     components:{
        Head,
        Link,
        TopHeaderSix,
        TopFooterSix,
    },
    data(){
        return{
            cartTest:this.cartItems,
            cartTotal:this.cTotal,
            cartSubtotal:this.cSubtotal,
        }
        
    },
    props:{
        setting:Object,
        cartItems:Object,
        cTotal:String,
        cSubtotal:String,
    },
}
</script>
<style lang="">
    
</style>