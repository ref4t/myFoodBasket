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
<div class="page_common page_store">
<div class="container">
        <div class="row"><div class="col-sm-12 content_page">
    <div class="col-sm-4 left-column">
                            </div>

            
        </div>
      
                        <div id="list-store" class="list detailList">
                                            <div class="row listing-row">
                            <div class="col-xs-12 col-sm-4 col-xs-4">
                                <a class="thumbnail" href="http://www.the-public.co.uk/index.php?route=common/store&amp;store=35">
                                    <img :src="'/image/'+setting.config_logo" :alt="setting.config_name">
                                </a>
                            </div>            
                            <div class="col-xs-12 col-sm-4 col-md-6 col-xs-5">
                                <h3><a :href="'/restaurant/'+setting.store_id" class="">{{setting.config_name}}</a></h3>
                                <div class="reviews">
                                    <div class="star-rating rating-sm rating-disabled"><div class="rating-container rating-gly-star" data-content="">
                                        <div class="rating-stars" style="width: 80%;"></div>
                                            <star-rating :star-size="18" :show-rating="false" :increment=".5" :rating="rating" :read-only="true" />
                                        </div>
                                        </div>
                                    <label>(2 Reviews)</label>
                                    <a class="writereview" rel="35" href="#">Write a review</a>
                                </div>
                                <p class="address">{{setting.config_address}}</p>
                                <p class="phone">{{setting.config_telephone}}</p>
                                <p class="delivery">Minimum delivery: 0.00</p>
                                <p class="free">Free delivery availble</p>
                                </div>
                            <div class="col-xs-12 col-sm-4 col-md-2 timesetting col-xs-3">
                                                                    <button class="btn btn-primary btn-close">Close</button>
                                    <a href="http://www.store2.the-public.co.uk/" class="gotoweb">Visit website</a> 
                                    <div class="timesetting_store">
                                    <label class="">We will be back within</label>
                                    <div class="timedown is-countdown" data-until="600"><span class="countdown-row countdown-show3"><span class="countdown-section"><span class="countdown-amount">0</span><span class="countdown-period">Hours</span></span><span class="countdown-section"><span class="countdown-amount">6</span><span class="countdown-period">Minutes</span></span><span class="countdown-section"><span class="countdown-amount">56</span><span class="countdown-period">Seconds</span></span></span></div>
                                    </div>
                                 </div>
                            <div class="col-xs-12 col-sm-12 col-md-5 col-sm-offset-0 col-md-offset-4">
                                </div>
                        </div>
                                </div>
                <div class="row directory-counties">
            <div class="directory-counties_content">
                
                <ul id="myTab" class="nav nav-tabs">
                    <li class=""><a class="tab_about" href="#about" data-toggle="tab">About</a></li>
                    <li class=""><a class="tab_menu" href="#menu" data-toggle="tab">Menu</a></li>
                    <li class=""><a class="tab_review" href="#review" data-toggle="tab">Reviews</a></li>
                    <li class=""><a class="tab_map" href="#map" data-toggle="tab">Directions</a></li>
                    <li class="active"><a class="tab_openhours" href="#openhours" data-toggle="tab">Opening Hours</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane counties-pane" id="about">
                        About shop
                    </div>
                    <div class="tab-pane counties-pane" id="menu">
                        <div class="col-sm-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <ul class="box-category">
                                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=436">Pizza (53)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=437">Kebabs (18)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=438">Burgers (35)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=439">Wraps (10)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=441">Omelettes (7)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=440">Kids Menu (5)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=443">Drinks (22)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=1752">weekend Special (1)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=1754">Hotdog (3)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=1770">Popular Dishes (1)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=1771">Special Offers (19)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=1772">Garlic Breads (6)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=1773">Fried Chicken (14)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=1774">Hot Wings (2)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=1775">Chicken Strips (2)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=1776">Chicken Nuggets (2)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=1777">Extras (17)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=1778">Desserts (4)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=1779">Kids Meals (7)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=1780">Meal Deals (12)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=1784">Baguette (2)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=1785">Big Feast (1)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=1787">Meal Deal (2)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=1788">Peri Peri (10)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=1789">Kids Korner (4)</a>
                  </li>
                                    <li>
                    <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=1790">Salads (2)</a>
                  </li>
                                              </ul>
        </div>
    </div>
</div>
                    </div>
                    <div class="tab-pane counties-pane" id="review">
                                                <button type="button" class="btn btn-default" data-target="#popuplogin" data-toggle="modal">Login</button>
                <div class="row listing-row" v-for="reviews in review">
                    <div class="col-xs-3 col-sm-2 avatar" style="display:none;">
                        <a class="thumbnail " href="#">
                            <img src="image/david jame.jpeg">
                            <span class="name-author">testdev</span>
                        </a>
                    </div>  
                    <div class="col-xs-12 col-sm-12 review_content">
                        <div class="infor-review">
                            <p class="author pull-left"><span class="name-author"><b>Customer: </b>{{reviews.customer_id}}</span>
                                                        <span class="date_review"><b>Order date: </b>{{reviews.date_added}}</span>  </p>
                            <div class="pull-right">
                                <div class="star-rating rating-sm rating-disabled"><div class="rating-container rating-gly-star" data-content=""><div class="rating-stars" data-content="" style="width: 80%;"></div><input value="4" type="number" class="rating form-control hide" name="quality" disabled="true" min="0" max="5" step="1" data-size="sm"></div></div>
                            </div>
                        </div>
                        <div class="line cleafix"></div>
                        <h4>{{reviews.title}}</h4>
                        <p>{{reviews.message}}</p>
                        <div class="rate-review">
                            <div class="form-group">
                                <label class="col-sm-7 control-label">Food Quality</label>
                                <div class="col-sm-5">
                                    <div class="star-rating rating-sm rating-disabled">
                                        <div class="rating-container rating-gly-star" data-content="">
                                                <star-rating :star-size="18" :show-rating="false" :increment=".5" :rating="reviews.quality" :read-only="true" />
                                                </div>
                                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-7 control-label">Customer service</label>
                                <div class="col-sm-5">
                                    <div class="star-rating rating-sm rating-disabled">
                                        <div class="rating-container rating-gly-star" data-content="">
                                                <star-rating :star-size="18" :show-rating="false" :increment=".5" :rating="reviews.service" :read-only="true" />
                                            </div>
                                            </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-7 control-label">Timing</label>
                                <div class="col-sm-5">
                                    <div class="star-rating rating-sm rating-disabled">
                                        <div class="rating-container rating-gly-star" data-content="">
                                                <star-rating :star-size="18" :show-rating="false" :increment=".5" :rating="reviews.service" :read-only="true" />
                                            </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                    </div>   
                    <div class="tab-pane counties-pane" id="map">
                                               
                        <h4>Guiding Map</h4>
                        <div class="form-group">
                            <label>Get directions from</label>
                            <input type="text" id="noixuatphat" value="" class="pac-target-input" placeholder="Enter a location" autocomplete="off">
                        </div>
                        <div class="show_map">
                            
                        </div>
                            </div>  
                    <div class="tab-pane counties-pane active" id="openhours">
                        Open hours
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

import MainshopFooter from '@/Pages/Mainshop/Footer.vue';
import StarRating from 'vue-star-rating';
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Head,
        MainshopHeader,
        MainshopFooter,
        StarRating,

    },
    props: {
    setting: Object,
    review:Array,
  },
  data() {
      return {
         
            rating:4.5,
      
      };
  },
};
</script>
<style>
.footer{
    bottom:auto;
}
</style>