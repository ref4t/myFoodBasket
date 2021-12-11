<template>
 <Head title="Home">
    </Head>
    <MainshopHeader/>
    <div id="resault-slider">
    <ul>
        <li>
            <img src="/image/slider.png">
        </li>
    </ul>
</div>
<div class="container">
  <div class="row">
     <div class="col-sm-12 content_page">
            <div class="col-sm-4 left-column">
                <!--button id="changesite">change</button-->
   <div class="col-sm-12">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54540.824097171266!2d-0.06659311254617067!3d51.54959894421955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ad73297f857%3A0xb1723f26e03c12a8!2sZSL%20London%20Zoo!5e0!3m2!1sen!2suk!4v1637452614554!5m2!1sen!2suk"  height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
   </div>
                <div class="col-sm-12">
    <div class="panel panel-default">
        <div class="panel-heading title_filter">Category filter</div>
        <div class="panel-body content_filter_left">
            <ul class="nav" id="catfilter">
                                  <li>
                    <input id="cat_1" class="filter" type="checkbox" value="1" name="catfilter[]">
                    <label for="cat_1">American (Traditional)</label>
                  </li>
                                    <li>
                    <input id="cat_2" class="filter" type="checkbox" value="2" name="catfilter[]">
                    <label for="cat_2">Italian</label>
                  </li>
                                    <li>
                    <input id="cat_3" class="filter" type="checkbox" value="3" name="catfilter[]">
                    <label for="cat_3">Asian Food</label>
                  </li>
                                    <li>
                    <input id="cat_4" class="filter" type="checkbox" value="4" name="catfilter[]">
                    <label for="cat_4">British continental food</label>
                  </li>
                                    <li>
                    <input id="cat_5" class="filter" type="checkbox" value="5" name="catfilter[]">
                    <label for="cat_5">Latin American cuisine</label>
                  </li>
                                    <li>
                    <input id="cat_6" class="filter" type="checkbox" value="6" name="catfilter[]">
                    <label for="cat_6">South-American cuisine</label>
                  </li>
                                    <li>
                    <input id="cat_7" class="filter" type="checkbox" value="7" name="catfilter[]">
                    <label for="cat_7">Oceanian cuisine</label>
                  </li>
                                    <li>
                    <input id="cat_9" class="filter" type="checkbox" value="9" name="catfilter[]">
                    <label for="cat_9">Grill Dish</label>
                  </li>
                                    <li>
                    <input id="cat_13" class="filter" type="checkbox" value="13" name="catfilter[]">
                    <label for="cat_13">Sunday Roast</label>
                  </li>
                              </ul>
        </div>
    </div>
</div>
                            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div style="text-align: center" class="col-sm-12">
                        <div class="row">
                            <div class="input-group resault_search">
                                <span><i title="Display restaurants around my location first" class=" fa fa-map-marker mylocation"></i></span>
                                <input type="text" placeholder="Eg. WN4 OAR" name="search_resault" class="form-control col-sm-3" v-model="search">
                                <div class="btn-group">
                                    <button id="search-resault" class="btn btn-default" type="button">FIND</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-top: -10px;" class="row listing-row grid_list">
                    <div class="pull-left">
                        <strong>Restaurants found in your area</strong>
                    </div>
                    <div class="pull-right" id="ybcgl">  
                        <i class="fa fa-th-list active" id="ybclist"></i>
                        <i class="fa fa-th" id="ybcgrid"></i>
                    </div>
                </div>
                                                            
                <div v-for="shop in shops" id="list-store" class="list" >
                    
                        <div class="row  listing-row">
                            <div class="listing_content">
                            <div class="col-xs-12 col-sm-4 thumbnail_store">
                                <a class="thumbnail" href="http://www.the-public.co.uk/index.php?route=common/store&amp;store=35">
                                    <div class="table">
                                        <div class="table-cell">
                                        <img :src="'/image/'+shop.config_logo" :alt="shop.config_name">
                                        </div>
                                    </div>
                                     
                                </a>
                            </div>
            
                            <div class="col-xs-12 col-sm-8 col-md-6 decription_store">
                                <h3><a :href="'/restaurant/'+shop.store_id+'?zip='+search" class="">{{shop.config_name}}</a></h3>
                                <div class="reviews">
                                    <div class="star-rating rating-sm rating-disabled">
                                        <div class="rating-container rating-gly-star" data-content="">                    
                                                <star-rating :star-size="18" :show-rating="false" :increment=".5" :rating="rating" :read-only="true" />
                                                </div>
                                                </div>
                                    <label>(2 Reviews)</label>
                                    <a class="writereview" rel="35" href="#">Write a review</a>
                                </div>
                                <p class="address">{{shop.config_address}}</p>
                                <p class="phone">{{shop.config_telephone}}</p>
                                                                <p class="delivery">Minimum delivery: <span class="minspend">£0.00</span></p>
                                <p class="free">Free delivery availble</p>
                                                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-2 timesetting">
                                                                    <button class="btn btn-primary btn-open">Open</button>
                                    <Link :href="shop.config_ssl" class="gotoweb">Visit website</Link>
                                    <div class="timesetting_store" style="display: none;">
                                                                            </div>
                                                            </div>
                            
                            </div>
                    </div>
                                    </div>
                                            </div>  
        </div>
  </div>
</div>
<MainshopFooter/>
</template>
<script>
import MainshopHeader from '@/Pages/Mainshop/Header.vue';
import StarRating from 'vue-star-rating';
import MainshopFooter from '@/Pages/Mainshop/Footer.vue';
import { Head,Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Head,
        Link,
        MainshopHeader,
        MainshopFooter,
        StarRating,
    },
    props: {
    shops: Object,
    search:String,
  },
  data() {
      return {
         
            search:this.search,
            rating:4.5,
      
      };
  },
 created() {
           
    }
};
</script>
