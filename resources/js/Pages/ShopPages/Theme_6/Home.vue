<template>
<Head>
           
</Head>
<TopHeaderSix :logo="setting.config_logo" :total="cartTotal" :cartCount="Object.keys(cartTest).length" :openingTime="setting.opening_time" :timeSetting="timeSetting"></TopHeaderSix>

<!-- slider -->
    <section class="home-slide-v6 wow animate__fadeInUp" data-wow-duration="1s">
      <div class="home-slide-v6-swiper">
        <div class="swiper">
          <div class="swiper-wrapper">

            <div v-for="slider in layout.get_slider" :key="slider" class="swiper-slide" :style="'background-image: url(' + slider.path + ')'">
              <div class="container">
                <!-- <div class="slide-logo"><img class="img-fluid" :src="'/image/'+setting.config_logo"/></div> -->
                <h2 class="__title" > {{slider.title}} </h2>
                <p> {{slider.description}} </p>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="order-online-v6"><strong class="title text-uppercase">order online</strong>
        <input class="form-control" placeholder="Eg. AA11AA"/>
        <p>Please enter your postcode to view our<br> menu and place an order</p>
        <div class="btn__group"><a class="btn btn-white text-uppercase">collection</a><a class="btn btn-red text-uppercase">delivery</a></div>
      </div>
      <div class="__btn-bottom"><i class="fas fa-arrow-down"></i></div>
    </section>

<!-- ABOUT US SECTION -->
    <section class="who-are-we-v6 pt-90 pb-90 wow animate__fadeInUp" data-wow-duration="1s" :style="'background-color:'+ layout.about_bg" >
      <div class="container">
        <div class="default-title-v6"><strong class="sub-title color-orange text-uppercase">about us</strong>
          <h3 class="title text-uppercase" :style="'color:'+ layout.about_content" >SEE WHO WE ARE AND WHAT WE OFFER!</h3>
        </div>
        <p>{{ layout.about_description }}</p><a class="btn text-uppercase" href="">read more</a>
      </div>
    </section>

<!-- BOOKING SECTION -->
    <section v-if="layout.booking == 1" class="reservation-v6 pt-90 pb-90 wow animate__fadeInUp" data-wow-duration="1s" :style="'background-color:'+ layout.booking_bg">
      <form class="container">
        <div class="default-title-v6"><strong class="sub-title color-orange text-uppercase">reservation</strong>
          <h3 class="title text-uppercase" :style="'color:'+ layout.booking_content" >BOOK A TABLE NOW!</h3>
        </div>
        <div class="row">
          <div class="col">
            <input class="form-control" placeholder="Full Name" type="text"/>
          </div>
          <div class="col">
            <input class="form-control" placeholder="Phone Number" type="text"/>
          </div>
          <div class="col">
            <div class="icon"><i class="fas fa-chevron-down"></i>
              <select class="form-control select2">
                <option value="" selected="selected">Person</option>
                <option value="10">10</option>
              </select>
            </div>
          </div>
          <div class="col">
            <div class="icon"><i class="fas fa-chevron-down"></i>
              <input class="form-control icon" placeholder="Date &amp; Time" id="date" type="text"/>
            </div>
          </div>
          <div class="col">
            <button class="btn btn-red text-capitalize">book now</button>
          </div>
        </div>
      </form>
    </section>

<!-- GALERRY SECTION -->

    <section v-if="layout.gallery == 1" class="photo-gallery-v6 pt-90 pb-90 wow animate__fadeInUp" data-wow-duration="1s" :style="'background-color:'+ layout.gallery_bg">
      <div class="default-title-v6"><strong class="sub-title color-orange text-uppercase">gallery</strong>
        <h3 class="title text-uppercase" :style="'color:'+ layout.gallery_content" >OUR RESTAURANT AND THE FOOD THEY SERVE THEIR GUESTS</h3>
      </div>
      <div class="container-fluid">
        <div class="row">

          <div v-for=" gallery in layout.get_gallery" :key="gallery" class="col">
            <div class="item"><a class="fas fa-search-plus" :href="gallery.path" data-fancybox="photoGallery"></a><img class="img-fluid" :src="gallery.path"/></div>
          </div>
        </div>
      </div>
    </section>

<!-- POPULAR SECTION -->
    <section v-if="layout.popular == 1" class="popular-foods-v6 pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s" :style="'background-color:'+ layout.popular_bg">
      <div class="default-title-v6"><strong class="sub-title color-orange text-uppercase">Popular Foods</strong>
        <h3 class="title text-uppercase" :style="'color:'+ layout.popular_content" >CHECK OUT OUR MENU AND SELECT SOMETHING FOR EVERYONE</h3>
      </div>
      <div class="container">
        <div class="row list-item">
          <div v-for="popular in layout.get_popular" :key="popular" class="col-12 col-sm-12 col-md-6">
            <div v-if="popular.path" class="item">
              <div class="img"><img class="img-fluid" :src="'/image/' + popular.path"/></div>
              <div class="text-content"><strong class="text-capitalize">{{popular.name}}</strong>
                <p v-html="decodeHtml(popular.description)" ></p>
              </div>
            </div>
            <div v-else class="item">
              <div class="img"><img class="img-fluid" :src="'/image/demo_img.png'"/></div>
              <div class="text-content"><strong class="text-capitalize">{{popular.name}}</strong>
                <p v-html="decodeHtml(popular.description)" ></p>
              </div>
            </div>
          </div>
        
        </div>
      </div>
    </section>
<!-- CATEGORY SECTION -->
    <section v-if="layout.category == 1" class="popular-categories-v6 pt-90 pb-75 wow animate__fadeInUp" data-wow-duration="1s" :style="'background-color:'+ layout.category_bg">
      <div class="default-title-v6 text-center container"><strong class="sub-title text-uppercase">popular categories</strong>
        <h3 class="title text-capitalize" :style="'color:'+ layout.category_content">CHECK OUT OUR MENU AND SELECT SOMETHING FOR EVERYONE</h3>
      </div>
      <div class="container">
        <div class="popular-categories-v6-swiper">
          <div class="__btn-list"><a class="text-uppercase active" href="" data-filter="all">all</a><a class="text-uppercase" href="" data-filter="breakfast">breakfast</a><a class="text-uppercase" href="" data-filter="soup">soup</a></div>
          <div class="swiper">
            <div class="swiper-wrapper">
              <div v-for="category in layout.get_category" :key="category" class="swiper-slide" data-slide-filter="breakfast">
                <div v-if="category.path" class="item">
                  <div class="img"><img class="img-fluid" :src="category.path"/></div>
                  <div class="text-content"><strong class="text-capitalize">{{category.title}}</strong>
                    <p v-html="decodeHtml(category.description)" ></p>
                  </div>
                </div>
                <div v-else class="item">
                  <div class="img"><img class="img-fluid" :src="'/image/demo_img.png'"/></div>
                  <div class="text-content"><strong class="text-capitalize">{{category.title}}</strong>
                    <p v-html="decodeHtml(category.description)" ></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </section>
<!-- RATING SECTION -->
    <section class="user-comments-v6 pt-90 pb-90" :style="'background-color:'+ layout.rating_bg"  >
      <div class="container pt-110 pb-110 wow animate__fadeInUp" data-wow-duration="1s">
        <div class="default-title-v6"><strong class="sub-title text-uppercase">Testimonials</strong>
          <h3 class="title" :style="'color:'+ layout.rating_content" >WHAT OUR CUSTOMERS SAY</h3>
        </div>
        <div class="user-comments-v6-swiper position-relative">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide" v-for="review in reviews" :key="review">
                <p>{{review.message}}</p>
                <strong>{{review.get_customer.firstname}} {{review.get_customer.lastname}}</strong>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </section>
<!-- OPENNING HOUR SECTION -->
    <section class="opening-hours-v6 pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s" :style="'background-color:'+ layout.opening_bg">
      <div class="default-title-v6 text-center"><strong class="sub-title text-capitalize">opening hourse</strong>
        <h3 class="title text-capitalize" :style="'color:'+ layout.opening_content" >open {{openTime.length}} days a week</h3>
      </div>
      <div class="__info">
        <div class="__container"><img class="img-fluid mb-3" src="/img/icon/time-clock.svg"/>
          <div class="__divider"></div><strong class="__time-title">OPEN NOW</strong>
          <div class="__divider"></div>
          
          <div class="__time" v-for="day in openTime" :key="day"><strong>{{day[0]}}</strong>
            <div class="__time-box">
              <div class="__left-time"><span>{{day[1]}}</span></div>
              
            </div>
          </div>
          <!-- <div class="__time"><strong>Sunday</strong>
            <div class="__time-box">
              <div class="__left-time"><span>12:00</span><span>AM</span></div>
              <div class="__time-divier"></div>
              <div class="__right-time"><span>11:30</span><span>PM</span></div>
            </div>
          </div> -->
        </div>
      </div>
    </section>
    
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
        layout:Object,
        reviews:Object
    },
    computed:{
      openTime:function(){
         let days=this.setting.opening_time.split(" ")
      let finalDays=[];
      days.forEach((val,ind) => {
        finalDays[ind]=val.split(',');
      });
      const d = new Date();
      console.log(finalDays);
      return finalDays;
      }
    },
    methods:{
      decodeHtml(html) {
            var txt = document.createElement("textarea");
            txt.innerHTML = html;
            return txt.value;
        },
    }
}

</script>
<style>
    
</style>