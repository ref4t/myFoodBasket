<template>
      <Head>
</Head>
<TopHeaderSix :logo="setting.config_logo" :total="cartTotal" :cartCount="Object.keys(cartTest).length" :openingTime="setting.opening_time" :timeSetting="timeSetting"></TopHeaderSix>
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
        timeSetting:Object,
    },
}
</script>
<style lang="">
    
</style>