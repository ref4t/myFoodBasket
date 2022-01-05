<template>

     <TopHeader :logo="setting.config_logo" :total="cartTotal" :cartCount="Object.keys(cartTest).length" :openingTime="setting.opening_time" :timeSetting="timeSetting"/>


      <section class="home-slide-v3 wow animate__fadeInUp" data-wow-duration="1s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-6 wow animate__fadeInLeft" data-wow-duration="1s">
            <div class="order-online-v3">
              <h1 class="__title">{{layout.slider_title}}</h1><strong class="title text-uppercase">order online</strong>
              <input class="form-control" placeholder="Eg. AA11AA"/>
              <p>Please enter your postcode to view our<br> menu and place an order</p>
              <div class="btn__group"><a class="btn btn-red text-uppercase">collection</a><a class="btn btn-orange text-uppercase">delivery</a></div>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 wow animate__fadeInRight position-relative" data-wow-duration="1s">
            <!-- <div class="swiper-text-content">
              <div class="text-content"><strong class="__title">Lorem Ipsum</strong>
                <p>Lorem Ipsum Dolar</p>
              </div>
              <div class="swiper-buttons">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>
            </div> -->
            <div class="swiper">
              <div class="swiper-wrapper">
                <div v-for="slider in layout.get_slider" :key="slider" class="swiper-slide" :style="'background-image: url(' + slider.path + ')'"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="who-are-we pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s" :style="'background-color:'+ layout.about_bg">
      <div class="container text-center">
        <div class="default-title-v3">
          <h3 class="title color-green"  :style="'color:'+ layout.about_content">Who are we?</h3>
        </div>
        <h4 class="__title">{{layout.about_title}}</h4>
        <p>{{layout.about_description}}</p>
      </div>
    </section>


    <section v-if="layout.category == 1" class="best-categories-icon pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s">
      <div class="default-title-v3 text-center container">
        <h3 class="title text-capitalize" :style="'color:'+ layout.category_content">best categories</h3>
        <p> {{layout.category_description}} </p>
      </div>
      <div class="container">
        <div class="row list-item">
          <div v-for="category in layout.get_category" :key="category" class="col-6 col-md-4 col-lg-2">
            <div v-if="category.path" class="item">
              <div class="img"><img class="img-fluid" :src="category.path"/></div>
              <strong class="text-capitalize">{{category.title}}</strong>
            </div>
            <div v-else class="item">
              <div class="img"><img class="img-fluid" :src="'/image/demo_img.png'"/></div>
              <strong class="text-capitalize">{{category.title}}</strong>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section  v-if="layout.popular == 1" class="popular-foods-v3 pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s" :style="'background-color:'+ layout.popular_bg">
      <div class="container">
        <div class="default-title-v3 text-center">
          <h3 class="title text-capitalize color-green" :style="'color:'+ layout.popular_content">popular foods</h3>
          <p>{{layout.popular_description}}</p>
        </div>
        <div class="row list-item">
          <div  v-for="popular in layout.get_popular" :key="popular" class="col-12 col-md-6 col-lg-4">
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

    <section class="user-comments-v3 pt-75 pb-75">
      <div class="container pt-110 pb-110 wow animate__fadeInUp" data-wow-duration="1s">
        <div class="default-title-v3 text-center">
          <h3 class="title color-red">Recent Web <br> Reviews</h3>
        </div>
        <div class="user-comments-v3-swiper position-relative">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide" v-for="review in reviews" :key="review">
                <div class="message-text"><strong>{{review.title}}</strong>
                  <p>{{review.message}}</p>
                </div>
                <div class="message-info"><strong>{{review.get_customer.firstname}} {{review.get_customer.lastname}}</strong></div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </section>


    <div v-if="layout.gallery == 1" class="photo-gallery-v3 pt-75 pb-75"  :style="'background-color:'+ layout.gallery_bg">
      <div class="container">
        <div class="default-title-v3 text-center">
          <h3 class="title text-capitalize color-red" :style="'color:'+ layout.gallery_content">photo gallery</h3>
          <p>{{layout.gallery_description}}</p>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row list-item">
          <div class="col-12 col-md-6 col-lg-3" v-for="gallery in layout.get_gallery" :key="gallery">
            <div class="item"><a class="fas fa-search-plus" :href="gallery.path" data-fancybox="photoGallery"></a><img class="img-fluid" :src="gallery.path"/></div>
          </div>
        </div>
      </div>
    </div>


    <section v-if="layout.booking == 1" class="reservation-v3 pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s" :style="'background-color:'+ layout.booking_bg">
      <form class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-5 wow animate__fadeInLeft" data-wow-duration="1s">
            <div class="default-title-v3">
              <h3 class="title color-green text-capitalize" :style="'color:'+ layout.booking_content">make a <br>reservation</h3>
              <p>{{layout.booking_description}}</p>
            </div>
            <button class="btn btn-red text-capitalize">make reservation now</button>
          </div>
          <div class="col-md-12 col-lg-7 wow animate__fadeInRight" data-wow-duration="1s">
            <div class="row">
              <div class="col-12 col-sm-6 mb-4">
                <input class="form-control" placeholder="Full Name" type="text"/>
              </div>
              <div class="col-12 col-sm-6 mb-4">
                <input class="form-control" placeholder="Phone Number" type="text"/>
              </div>
              <div class="col-12 col-sm-6 mb-4">
                <div class="icon"><i class="fas fa-chevron-down"></i>
                  <select class="form-control select2">
                    <option value="" selected="selected">Person</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-sm-6 mb-4">
                <div class="icon"><i class="fas fa-chevron-down"></i>
                  <input class="form-control icon" placeholder="Date" id="date" type="text"/>
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="icon"><i class="fas fa-chevron-down"></i>
                  <input class="form-control icon" placeholder="Time" id="time" type="text"/>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-red text-capitalize __mobile-show">make reservation now</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </section>
    
    <section class="opening-hours-v3 pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s">
      <div class="container">
        <div class="default-title-v3 text-center">
          <h3 class="title text-capitalize">opening hours</h3>
          <p>Open {{openTime.length}} Days a Week</p>
        </div>
        <div class="__time" style="max-width: none;">
          <div class="__time-item" v-for="day in openTime" :key="day"><strong>{{day[0]}}</strong><span>{{day[1]}}</span></div>
          <!-- <div class="__time-item"><strong>Sunday</strong><span>12:00 - 23:00</span></div> -->
        </div>
      </div>
    </section>
    
    

    <TopFooter :name="setting.config_name" :logo="setting.config_logo" :address="setting.config_address" :telephone="setting.config_telephone" :email="setting.config_email" />


</template>


<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import TopHeader from '@/Pages/ShopPages/Theme_3/Header.vue';
import TopFooter from '@/Pages/ShopPages/Theme_3/Footer.vue';
export default {
    components:{
        Head,
        Link,
        TopHeader,
        TopFooter,
    },
    data(){
        return{
            cartTest:this.cartItems,
            cartTotal:this.cTotal,
            cartSubtotal:this.cSubtotal,
        }
        
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
      // let todayDay = d.toLocaleString('en-GB', { weekday: 'long' });
      // let timeToday=null;
      // finalDays.forEach(element => {
      //   if(element[0] === todayDay){
          
      //     timeToday= element[1];
      //   }
        
      // });
      // if(!timeToday){
      //     return "Closed Today";
      //   }
      //   else{
      //     return timeToday;
      //   }
      }
    },
    props:{
        setting:Object,
        cartItems:Object,
        cTotal:String,
        cSubtotal:String,
        timeSetting:Object,
        layout:Object,
        reviews:Object,
    },
    methods:{
      decodeHtml(html) {
            var txt = document.createElement("textarea");
            txt.innerHTML = html;
            return txt.value;
      }
    }
}

</script>