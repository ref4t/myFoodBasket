<template>
<Head>
</Head>
<TopHeaderSix :logo="setting.config_logo" :total="cartTotal" :cartCount="Object.keys(cartTest).length" :openingTime="setting.opening_time" :timeSetting="timeSetting"></TopHeaderSix>
    <div class="container mb-5" style="min-height:34vh;">
        <h1 class="my-5 text-uppercase">SHOPPING CART</h1>
        <div class="row">
            <div class="col-12 border-bottom">
                <p class="fw-light" v-if=" cartTest.length === 0">Your shopping cart is empty!</p>
                <table class="table table-hover" v-else>
                        <thead>
                            <tr>
                                <th scope="col">Quantity</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             <tr  v-for="item in cartTest" :key="item">
                                <th scope="row">{{item.qty}}</th>
                                <td>{{item.name}}</td>
                                <td>{{item.price}}</td>
                                <td><a href="javascript:void(0)"><i class="fas fa-times-circle me-2" style="color:red" @click="removeFromCart(item.id,item.rowId)"></i></a></td>
                            </tr>
                        </tbody>
                </table>
            </div>
            <div class="col-12 my-3 ">
                <Link :href="(cartTotal != 0?'/checkout':'/menu')" class="btn btn-success" style="float:right">Continue</Link>
            </div>
        </div>
    </div>
<TopFooterSix :logo="setting.config_logo" :name="setting.config_name"></TopFooterSix>
</template>
<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import TopHeaderSix from '@/Pages/ShopPages/Theme_6/Header6.vue';
import TopFooterSix from '@/Pages/ShopPages/Theme_6/Footer6.vue';
import { useToast } from "vue-toastification";
export default {
     components:{
        Head,
        Link,
        TopHeaderSix,
        TopFooterSix,
    },
    setup(){
      const toast = useToast();
        return {toast}
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
    methods:{
        removeFromCart(productId,rowID){
             let  pdata={'id_product':productId,'rowId':rowID};
             let cd=this;
             this.axios.post('/removefromcart',pdata).then((response) => {
                 cd.cartTest=response.data.contents;
                 cd.cartSubtotal=response.data.subtotal;
               cd.cartTotal=response.data.total;
              this.toast.warning('Removed from cart');
            //    console.log(response.data);
            this.Inrtia.reload();
                    }).catch(error => {
                this.errorMessage = error.message;
                });
        }
    },
}
</script>
<style lang="">
    
</style>