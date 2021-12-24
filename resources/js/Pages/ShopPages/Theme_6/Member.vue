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
    <div class="container mb-5">
        <h1 class="my-5 text-uppercase">Account Login</h1>
        <div class="row">
            <div class="col-lg-6 col-12">
                <h2>New Customer</h2>
                    <p><b>Register Account</b></p>
                    <p> By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made. </p>
                    <a class="btn btn-success" href="http://www.huaxin.co.uk/registration"> Continue </a>
                    
            </div>
            <div class="col-lg-6 col-12">
                <h2>Returning Customer</h2>
                <form action="">
                    <p>I am a returning customer</p>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="my-3">
                    <button type="submit" class="btn btn-success">Sign in</button>
                    </div>
                </form>
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