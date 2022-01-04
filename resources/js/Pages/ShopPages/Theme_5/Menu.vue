<template>
    <Head>
            <link rel="stylesheet" href="/css/shoptheme6/app.css">
            <link rel="stylesheet" href="/css/shoptheme6/responsive.css">
    </Head>
<TopHeader :logo="setting.config_logo" :total="cartTotal" :cartCount="Object.keys(cartTest).length" :openingTime="setting.opening_time" :timeSetting="timeSetting"></TopHeader>

<!-- Modal -->
<div class="modal fade" id="coordinateModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger text-center w-100" id="staticBackdropLabel">Please Enter Your Post Code</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
           <div class="row justify-content-center">
               <div class="col-10">
                   <p>To start placing delivery order, please enter your full postcode here:</p>
               </div>
               <div class="col-10">
                   <input type="text" class="form-control" id="" placeholder="eg.AA1 1BB">
               </div>
               <div class="col-10 text-center my-3">
                    <div class="d-grid gap-2">
                        <button class="btn btn-success" type="button">Deliver my order</button>
                        <button class="btn btn-success" type="button">I will come and collect</button>
                    </div>
               </div>
           </div>
      </div>
      <div class="modal-footer justify-content-center">
         <a href="javascript:void(0)" class="link-danger" data-bs-dismiss="modal" aria-label="Close">Cancel and go back</a>
      </div>
    </div>
  </div>
</div>
<div class="container my-5">
    <div class="row gx-5">
        <div class="col-auto d-none d-lg-block">
            <div class="list-group sticky-lg-top">
                <a href="javascript:void(0)" class="list-group-item list-group-item-action" v-for="category in category" :key="category" style="font-size:.8em; padding: 0.2rem 1rem;">
                    {{category.get_category_description_with_products.name}} 
                    <span class="badge bg-secondary rounded-pill float-end">{{category.get_category_description_with_products.get_category_product.length}}</span>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div v-for="(category,index) in category" class="my-4" :key="index">
                <div class="d-grid gap-1">
                <a class="btn btn-secondary" data-bs-toggle="collapse" :href="'#collapseExample'+index" role="button" aria-expanded="true" :aria-controls="'collapseExample'+index">
                    {{category.get_category_description_with_products.name}}
                </a>
                </div>
                <div class="collapse show" :id="'collapseExample'+index">
                    <div class="card card-body">
                    <template class="text-center" v-html="category.get_category_description_with_products.description" ></template>
                        <div class="m-2 border border-1 rounded p-3" v-for="(product,index2) in category.get_category_description_with_products.get_category_product" :key="index2">
                            <h5>{{htmlDecode(product.get_product_description.name)}} <span v-if="product.get_product_description.icon_info"><img :src="'/'+product.get_product_description.icon_info.icon_url" alt=""></span></h5>
                            <!-- <div class="mb-3">
                                <label for="specialReq" class="form-label">Add your special request?</label>
                                <textarea class="form-control" id="specialReq" rows="3"></textarea>
                            </div> -->
                    
                            <div v-if="product.get_product_description.size_info && product.get_product_description.price == 0">
                            <div class="row justify-content-between my-2">
                               <div class="col-auto" >
                                   <div class="item" v-if="product.get_product_description.image">
                                     <img class="rounded float-start" style="height:80px;width:auto;" :src="'/image/'+product.get_product_description.image" :data-fancybox="'photoGallery'+index2">
                                    </div>
                               </div>
                                <div class="col-4">
                                    <div v-for="sizes in product.get_product_description.size_info" :key="sizes"  style="float:right; margin-bottom:10px">
                                    <span class="mx-2 fw-bold" v-if="sizes.price > 0 && sizes.size != null">{{htmlDecode(sizes.size)}}</span>
                                    <a type="button" class="btn btn-success btn-sm" @click="addToCart(sizes.id_product,sizes.id_size)" v-if="sizes.price > 0 && sizes.size != null">
                                        £{{htmlDecode(sizes.price)}} |
                                        <i class="fas fa-shopping-basket" style="color:white;"></i>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div v-else class="row justify-content-between my-2">
                                <div class="col-auto">
                                   <div class="item" v-if="product.get_product_description.image">
                                     <img class="rounded float-start" style="height:80px;width:auto;" :src="'/image/'+product.get_product_description.image" :data-fancybox="'photoGallery'+index2">
                                    </div>
                               </div>
                                <div class="col-auto">
                                     <a type="button" class="btn btn-success btn-sm" @click="addToCart(product.get_product_description.product_id,0)">
                                    £ {{htmlDecode(product.get_product_description.price)}} |
                                    <i class="fas fa-shopping-basket" style="color:white;"></i>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 d-none d-lg-block">
            <div class="card sticky-lg-top">
                <div class="alert alert-success" style="color:white; background: #01a101;font-weight:bold" v-if="tSetting.open">
                         We are open now!
                </div>
                <div class="alert alert-danger" style="color:white; background: #ca0e16;font-weight:bold" v-else>
                         We are closed now!
                </div>
            <!-- <div class="card-body" style="background: #01a101;" >
               <h4 style="color:white;"></h4> 
            </div> -->
            <div class="card-body">
                <h5 class="card-title">My Basket  <i class="fas fa-shopping-basket align-items-end" style="color:black;"></i></h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item" v-for="item in cartTest" :key="item">
                    <a href="javascript:void(0)"><i class="fas fa-times-circle me-2" style="color:red" @click="removeFromCart(item.id,item.rowId)"></i></a>
                    {{item.qty+' &#215; '+ htmlDecode(item.options.length != 0 ? item.options.size : '')+' '+item.name+' - '+ (item.price*item.qty).toFixed(2)}}
                </li>
            </ul>
            <ul class="list-group list-group-flush">
               <li class="list-group-item"> <h6>Subtotal: {{cartSubtotal}}</h6> </li>
               <li class="list-group-item"> <h5>Total to pay: {{cartTotal}}</h5></li>
            </ul>
            <ul class="list-group list-group-flush">
                <div class="form-control">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="OrderTypeOptions" id="inlineRadio1" value="delivery" v-model="orderType.type" @change="orderTypeChange">
                    <label class="form-check-label" for="inlineRadio1">Delivery</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="OrderTypeOptions" id="inlineRadio2" value="collection" v-model="orderType.type" @change="orderTypeChange">
                    <label class="form-check-label" for="inlineRadio2">Collection</label>
                </div>
                </div>
            </ul>
            <div class="card-body">
                <div class="d-grid gap-2">
                <Link type="button" :href="cartTotal !=0 ?'/checkout':'/cart'" class="btn btn-success">Checkout</Link>
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
import { useToast } from "vue-toastification";
import { reactive } from 'vue'

export default {
     components:{
        Head,
        Link,
        TopHeader,
        TopFooter,
    },
    setup() {
      const toast = useToast();
      const orderType = reactive({
          type:null
      })
      return { toast,orderType }
    },
    data(){
        return{
            cartTest:this.cartItems,
            cartTotal:this.cTotal,
            cartSubtotal:this.cSubtotal,
            tSetting:this.timeSetting,
            orderTypeStatus:null,
        }
        
    },
    props:{
        setting:Object,
        category:Array,
        timeSetting:Object,
        cartItems:Object,
        cTotal:String,
        cSubtotal:String,
        layout:Object
    },
    methods: {
        htmlDecode(input) {
        var doc = new DOMParser().parseFromString(input, "text/html");
        return doc.documentElement.textContent;
        },
        addToCart(productId,sizeId){
            // this.tSetting.open=true;
            if(!this.tSetting.open){
                this.toast.error('We are closed now');
                return 0;
            }
          let  pdata={'id_product':productId,'id_size':sizeId}
          let cd=this;
            //    console.log(pdata)
          this.axios.post('/addtocart',pdata).then((response) => {
              this.toast.success('Added to cart');
               cd.cartTest=response.data.contents;
               cd.cartSubtotal=response.data.subtotal;
               cd.cartTotal=response.data.total;
            //    console.log(response.data);
            }).catch(error => {
         this.errorMessage = error.message;
        });
        },
        removeFromCart(productId,rowID){
             let  pdata={'id_product':productId,'rowId':rowID};
             let cd=this;
             this.axios.post('/removefromcart',pdata).then((response) => {
              this.toast.warning('Removed from cart');
                 cd.cartTest=response.data.contents;
                 cd.cartSubtotal=response.data.subtotal;
               cd.cartTotal=response.data.total;
            //    console.log(response.data);
                    }).catch(error => {
                this.errorMessage = error.message;
                });
        },
        orderTypeChange(){
            console.log(this.orderType);
        }
   },
//     mounted() {
//         // var myModal = new bootstrap.Modal(document.getElementById('coordinateModal'), {})
//         // myModal.toggle()

//         let links=[ 
//                     '/js/theme6/app.js'
//                   ];
//         links.forEach(function(value,index){
//             let externalScript = document.createElement('script')
//             externalScript.async = true
//             externalScript.setAttribute('src', value)
//             document.body.appendChild(externalScript)
//         });
//    },
}
</script>
<style>
    
</style>