<template>
<Head title="Home">
    <link rel="stylesheet" href="/css/mainshop/style_page_other.css">
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
                                <h3><a :href="'/restaurant/'+setting.store_id" class="">{{htmlDecode(setting.config_name)}}</a></h3>
                                <div class="reviews">
                                    <div class="star-rating rating-sm rating-disabled"><div class="rating-container rating-gly-star" data-content="">
                                        <div class="rating-stars" style="width: 80%;"></div>
                                            <star-rating :star-size="18" :show-rating="false" :increment=".5" :rating="rating" :read-only="true" />
                                        </div>
                                        </div>
                                    <label>({{review_count}} Reviews)</label>
                                    <a class="writereview" rel="35" href="#">Write a review</a>
                                </div>
                                <p class="address">{{setting.config_address}}</p>
                                <p class="phone">{{setting.config_telephone}}</p>
                                <p class="delivery">Minimum delivery: 0.00</p>
                                <p class="free">Free delivery availble</p>
                                </div>
                            <div class="col-xs-12 col-sm-4 col-md-2 timesetting col-xs-3">
                                    <button class="btn btn-primary btn-open" v-if="timeSetting.open">Open</button>
                                    <button class="btn btn-primary btn-close" v-else>Close</button>
                                    <a :href="setting.config_ssl" class="gotoweb">Visit website</a> 
                                    <div class="timesetting_store" v-if="!timeSetting.open">
                                    <label class="">We will be back within</label>
                                    <div class="timedown is-countdown" data-until="600">
                                        <span class="countdown-row countdown-show3">
                                            <span class="countdown-section">
                                                <span class="countdown-amount">{{hours}}</span><span class="countdown-period">Hours</span></span>
                                                    <span class="countdown-section">
                                                        <span class="countdown-amount">{{minutes}}</span>
                                                    <span class="countdown-period">Minutes</span></span>
                                                    <span class="countdown-section">
                                                        <span class="countdown-amount">{{seconds}}</span>
                                                        <span class="countdown-period">Seconds</span></span></span></div>
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
                <li v-for="category in category">
                    <a :href="setting.config_ssl+'menu?category='+category.category_id">{{htmlDecode(category.get_category_description.name)+' ('+category.get_category_description.get_category_product_count+')'}} </a>
                </li>                     
            </ul>
        </div>
    </div>
</div>
                    </div>
                    <div class="tab-pane counties-pane" id="review">
                    <button type="button" class="btn btn-default" data-target="#popuplogin" data-toggle="modal">Login</button>
                <div class="row listing-row" v-for="reviews in review.data">
                    <div class="col-xs-3 col-sm-2 avatar" style="display:none;">
                        <a class="thumbnail " href="#">
                            <img src="image/david jame.jpeg">
                            <span class="name-author">testdev</span>
                        </a>
                    </div>  
                    <div class="col-xs-12 col-sm-12 review_content">
                        <div class="infor-review">
                            <p class="author pull-left"><span class="name-author" v-if="reviews.get_customer"><b>Customer: </b>{{reviews.get_customer.firstname+' '+reviews.get_customer.lastname}}</span>
                                                        <span class="date_review"><b>Time: </b>{{reviews.date_added}}</span>  </p>
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
                <Pagination :links="review.links"></Pagination>
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
import Pagination from "@/Components/Pagination";
import MainshopFooter from '@/Pages/Mainshop/Footer.vue';
import StarRating from 'vue-star-rating';
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Head,
        MainshopHeader,
        MainshopFooter,
        StarRating,
        Pagination,

    },
    props: {
    setting: Object,
    review:Object,
    delivery:Array,
    timeSetting:Object,
    reviewCount:Array,
    category:Array,
  },
  data() {
      return {
            opening_hours:null,
            rating:0,
            review_count:null,
            store_open_staus:null,
            hours:0,
            minutes:0,
            seconds:0,
            counter:0,
      
      };
  },
  created(){
      this.review_count=this.reviewCount[0].total;
      this.rating=Math.round(this.reviewCount[0].point);
        setInterval(() => {
            var timeSeconds = this.timeSetting.until;
            var distance = timeSeconds - this.counter;
                var hours = Math.floor((distance % ( 60 * 60 * 24)) / (60 * 60));
                var minutes = Math.floor((distance % (60 * 60)) / ( 60));
                var seconds = Math.floor((distance % ( 60)));
                
                this.hours=hours;
                this.minutes=minutes;
                this.seconds=seconds;
                this.counter++;               
            }, 1000)
        
  },
  methods: {
        htmlDecode(input) {
        var doc = new DOMParser().parseFromString(input, "text/html");
        return doc.documentElement.textContent;
        }
  },
};
</script>
<style>
.footer{
    bottom:auto;
}
</style>