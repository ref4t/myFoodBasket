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
        <h1 class="my-5 text-uppercase">Contact US</h1>
        <div class="row">
            <div class="col-12 border-bottom border-top border-3 border-info">
                <div class="text-center my-2">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d29198.951035545873!2d90.41319874948042!3d23.823261214263447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sairport!5e0!3m2!1sen!2sbd!4v1640357539882!5m2!1sen!2sbd" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-12 my-3 ">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="container py-3 d-flex flex-column">
                            <div class="card shadow rounded-3 my-auto">
                                <div class="card-header p-3 h4">
                                    Get Directions
                                </div>
                                <div class="card-body p-4">
                                    <form class="contact-info ets_derection" action="//maps.google.com/maps" method="get" target="_blank">
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text fa fa-crosshairs" id="addon-wrapping"></span>
                                            <input type="text" class="form-control" placeholder="Enter Your location" aria-label="Location" aria-describedby="addon-wrapping">
                                        </div>
                                        <div class="d-grid gap-2 my-2">
                                            <button class="btn btn-primary" type="button">Get Directions</button>
                                        </div>
                                    </form>
                                    <div class="ybc_addresses_location text-center">
                                        <h2>2- Demo Pizza &amp; Kebab</h2>
                                        <div class="contact-info">
                                            <div class="content">
                                                <p class="etsAddress"> Shofiur<br>BA11 1DR</p>
                                                <b>Tel:</b>   01291630436
                                                <b>Tel 2:</b> 238683839
                                            </div>
                                        </div>
                                                    <a class="ybc_logo_contact" href="">
                                            <img src="https://www.store2.the-public.co.uk/image/data/demo-store-logo.png" title="" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="container py-3 d-flex flex-column">
                            <div class="card shadow rounded-3 my-auto">
                                <div class="card-header p-3 h4">
                                    Contact Us Form
                                </div>
                                <div class="card-body p-4">
                                    <form role="form" class="row mb-5">
                                        <div class="form-group col-lg-4">
                                            <label class="form-control-label" for="form-group-input">Name</label>
                                            <input type="text" class="form-control" id="form-group-input" name="name">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label class="form-control-label" for="form-group-input">Email</label>
                                            <input type="text" class="form-control" id="form-group-input" name="email">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label class="form-control-label" for="form-group-input">Purpose of Request</label>
                                            <select size="0" class="form-control" name="reason">
                                                <option>Sales</option>
                                                <option>Tech Support</option>
                                                <option>General Feedback</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label class="form-control-label" for="form-group-input">Notes</label>
                                            <textarea class="form-control" id="form-group-input" name="notes" rows="6"></textarea>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <button class="btn btn-warning float-end mt-2" for="form-group-input">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<TopFooterSix :logo="setting.config_logo" :name="setting.config_name"></TopFooterSix>
</template>
<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import TopHeaderSix from '@/Pages/ShopPages/Theme_6/Header6.vue';
import TopFooterSix from '@/Pages/ShopPages/Theme_6/Footer6.vue';
import Button from '@/Components/Button.vue';
export default {
     components:{
        Head,
        Link,
        TopHeaderSix,
        TopFooterSix,
          Button,
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