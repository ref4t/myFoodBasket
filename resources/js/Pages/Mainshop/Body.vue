<template>
<div class="home lang_en">
        
    <div class="container">
        <div class="row">
<div class="slider">
<img src="//www.myfoodbasket.co.uk/catalog/view/theme/mainshop/image/slider-1.jpg">
</div>

<div class="search_home_page">
    <div class="table">
        <div class="table-cell">
            <p class="main_description">Find restaurant and order directly from restaurant website</p>
            <div class="input-group">
                <i class="fa fa-map-marker mylocation"></i>
                <input type="text" placeholder="Eg. WN4 OAR" name="search_resault" class="form-control col-sm-3" v-model="zipCode">
                <p class="bg-danger" v-if="$page.props.message">{{htmlDecode($page.props.message)}}</p>
                <div class="btn-group">
                    <button id="search-resault" class="btn btn-default" type="button" v-on:click="searchShop">FIND</button>
                </div>
            </div>  
            <div class="how_it_work">
                <label class="title_block">How it work</label>
                <ul>
                    <li class="mail">Enter Your <br> Post Code &amp; Search</li>
                    <li class="arrow"></li>
                    <li class="restaurant">Find Restaurant<br>Delivers In Your Area</li>
                    <li class="arrow"></li>
                    <li class="order">View <br>Menu &amp; Order</li>
                    <li class="arrow"></li>
                    <li class="meal">Enjoy <br>Your Meal</li>
                </ul>
            </div>    
        </div>
    </div>
    
</div>
        </div>
    </div>
</div>
</template>
<script>
import { useToast } from "vue-toastification";
export default {
    setup() {
      const toast = useToast();
      return { toast }
    },
      props:{
        message:String,
    },
    data(){
        return{
            zipCode:null,
            messages:this.message,
        }
    },
     methods: {
         htmlDecode(input) {
        var doc = new DOMParser().parseFromString(input, "text/html");
        return doc.documentElement.textContent;
        },
         searchShop(){
            //  console.log(this.messages);
             if(!this.zipCode){
                 this.toast.warning('Please Search Post Codes to View Restaurants');
             }
              this.$inertia.get(this.route('mainshopSearch'),{zip:this.zipCode},{ preserveState: true, preserveScroll: true})
         }
     }
}
</script>