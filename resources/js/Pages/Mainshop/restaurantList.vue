<template>
 <Head title="Home">
        <link rel="stylesheet" href="/css/mainshop/bootstrap.css">
        <link rel="stylesheet" href="/css/mainshop/theme.css">
        <link rel="stylesheet" href="/css/mainshop/style_new.css">
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
                                <input type="text" placeholder="Eg. WN4 OAR" name="search_resault" value="BA11 1DR" class="form-control col-sm-3">
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
                                                <div class="loadding">
                    <div id="floatingBarsG">
                    	<div class="blockG" id="rotateG_01"></div>
                    	<div class="blockG" id="rotateG_02"></div>
                    	<div class="blockG" id="rotateG_03"></div>
                    	<div class="blockG" id="rotateG_04"></div>
                    	<div class="blockG" id="rotateG_05"></div>
                    	<div class="blockG" id="rotateG_06"></div>
                    	<div class="blockG" id="rotateG_07"></div>
                    	<div class="blockG" id="rotateG_08"></div>
                    </div>
                </div>
                             
                                
                <div id="list-store" class="list">
                    
                                            <div class="row  listing-row">
                            <div class="listing_content">
                            <div class="col-xs-12 col-sm-4 thumbnail_store">
                                <a class="thumbnail" href="http://www.the-public.co.uk/index.php?route=common/store&amp;store=35">
                                    <div class="table">
                                        <div class="table-cell">
                                        <img src="/image/data/demo-store-logo.png" alt="2- Demo Pizza &amp; Kebab">
                                        </div>
                                    </div>
                                                                            <div class="timesetting_store" style="display: none;">
                                                                                    </div>
                                     
                                </a>
                                                                <div class="btn-store">
                                    <div class="table">
                                        <div class="table-cell">
                                            <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=679">View Menu</a>
                                            <a href="http://www.store2.the-public.co.uk/index.php?route=product/category&amp;path=679">Place Order</a>
                                        </div>
                                    </div>
                                </div>
                                                            </div>
            
                            <div class="col-xs-12 col-sm-8 col-md-6 decription_store">
                                <h3><a href="http://www.the-public.co.uk/index.php?route=common/store&amp;store=35" class="">2- Demo Pizza &amp; Kebab</a></h3>
                                <div class="reviews">
                                    <div class="star-rating rating-sm rating-disabled"><div class="rating-container rating-gly-star" data-content=""><div class="rating-stars" data-content="" style="width: 80%;"></div><input value="4" type="number" disabled="true" class="rating form-control hide" name="service" min="0" max="5" step="1" data-size="sm"></div></div>
                                    <label>(2 Reviews)</label>
                                    <a class="writereview" rel="35" href="#">Write a review</a>
                                </div>
                                <p class="address">Shofiur</p>
                                <p class="phone">01291630436</p>
                                                                <p class="delivery">Minimum delivery: <span class="minspend">£0.00</span></p>
                                <p class="free">Free delivery availble</p>
                                                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-2 timesetting">
                                                                    <button class="btn btn-primary btn-open">Open</button>
                                    <a href="http://www.store2.the-public.co.uk/" class="gotoweb">Visit website</a>
                                    <div class="timesetting_store" style="display: none;">
                                                                            </div>
                                                            </div>
                            
                            </div>
                    </div>
                                            <div class="row  listing-row">
                            <div class="listing_content">
                            <div class="col-xs-12 col-sm-4 thumbnail_store">
                                <a class="thumbnail" href="http://www.the-public.co.uk/index.php?route=common/store&amp;store=91">
                                    <div class="table">
                                        <div class="table-cell">
                                        <img src="/image/data/shop-files/E-F/frome-kebab/logo-new.png" alt="FROME KEBAB AND PIZZA">
                                        </div>
                                    </div>
                                                                            <div class="timesetting_store" style="display: none;">
                                                                                    </div>
                                     
                                </a>
                                                                <div class="btn-store">
                                    <div class="table">
                                        <div class="table-cell">
                                            <a href="http://www.fromekebabandpizza.co.uk/index.php?route=product/category&amp;path=">View Menu</a>
                                            <a href="http://www.fromekebabandpizza.co.uk/index.php?route=product/category&amp;path=">Place Order</a>
                                        </div>
                                    </div>
                                </div>
                                                            </div>
            
                            <div class="col-xs-12 col-sm-8 col-md-6 decription_store">
                                <h3><a href="http://www.the-public.co.uk/index.php?route=common/store&amp;store=91" class="">FROME KEBAB AND PIZZA</a></h3>
                                <div class="reviews">
                                    <div class="star-rating rating-sm rating-disabled"><div class="rating-container rating-gly-star" data-content=""><div class="rating-stars" data-content="" style="width: 100%;"></div><input value="5" type="number" disabled="true" class="rating form-control hide" name="service" min="0" max="5" step="1" data-size="sm"></div></div>
                                    <label>(25 Reviews)</label>
                                    <a class="writereview" rel="91" href="#">Write a review</a>
                                </div>
                                <p class="address">1 Eagle Lane,
Frome
Somerset</p>
                                <p class="phone">01373466060</p>
                                                                <p class="delivery">Minimum delivery: <span class="minspend">£10.00</span></p>
                                <p class="free">Free delivery availble</p>
                                                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-2 timesetting">
                                                                    <button class="btn btn-primary btn-open">Open</button>
                                    <a href="http://www.fromekebabandpizza.co.uk/" class="gotoweb">Visit website</a>
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

import MainshopFooter from '@/Pages/Mainshop/Footer.vue';
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Head,
        MainshopHeader,
        MainshopFooter,
    },
};
</script>