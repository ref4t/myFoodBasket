<template>
      <Head>
</Head>
<TopHeader :logo="setting.config_logo" :total="cartTotal" :cartCount="Object.keys(cartTest).length" :openingTime="setting.opening_time" :timeSetting="timeSetting"></TopHeader>
    <div class="container mb-5" style="min-height:34vh;">
        <h1 class="my-5 text-uppercase">Contact US</h1>
        <div class="row">
            <div class="col-12 border-bottom border-top border-3 border-info">
                <div class="text-center my-2">
                     <iframe :src="setting.map_ifram" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
                                    <form class="contact-info ets_derection" :action="'//www.google.com/maps/dir/'+directionForm.getDirections+'/'+setting.config_name+' '+setting.config_address+' '+setting.map_post_code" method="get" target="_blank">
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text fa fa-crosshairs" id="addon-wrapping"></span>
                                            <input type="text" class="form-control" placeholder="Enter Your location" aria-label="Location" aria-describedby="addon-wrapping" v-model="directionForm.getDirections">
                                        </div>
                                        <div class="d-grid gap-2 my-2">
                                            <button class="btn btn-primary" type="submit">Get Directions</button>
                                        </div>
                                    </form>
                                    <div class="ybc_addresses_location text-center">
                                        <h2>{{setting.config_name}}</h2>
                                        <div class="contact-info">
                                            <div class="content">
                                                <p class="etsAddress"> {{setting.config_address}}</p>
                                                <p class="etsAddress"> {{setting.map_post_code}}</p>
                                                <b>Tel:</b>   {{setting.config_telephone}}
                                              
                                            </div>
                                        </div>
                                                    <a class="ybc_logo_contact" href="">
                                            <img :src="'/image/'+setting.config_logo" title="" alt="">
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
<TopFooter :name="setting.config_name" :logo="setting.config_logo" :address="setting.config_address" :telephone="setting.config_telephone" :email="setting.config_email" />
</template>
<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import TopHeader from '@/Pages/ShopPages/Theme_5/Header5.vue';
import TopFooter from '@/Pages/ShopPages/Theme_5/Footer5.vue';
import Button from '@/Components/Button.vue';
import { reactive } from 'vue';
export default {
     components:{
        Head,
        Link,
        TopHeader,
        TopFooter,
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
        timeSetting:Object,
    },
    setup(){
        const directionForm = reactive({
            getDirections:null
        })
        return {directionForm}
    },
}
</script>
<style lang="">
    
</style>