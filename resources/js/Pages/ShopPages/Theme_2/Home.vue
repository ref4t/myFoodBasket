<template>

     <TopHeader :logo="setting.config_logo" :total="cartTotal" :cartCount="Object.keys(cartTest).length" :openingTime="setting.opening_time" :timeSetting="timeSetting"/>


    
    <div class="home-slide-v2 swiper wow animate__fadeInDown" data-wow-duration="1s">
      <div class="swiper-wrapper">
        <div v-for="slider in layout.get_slider" :key="slider" class="swiper-slide" :style="'background-image: url(' + slider.path + ')'">
          <div class="container">
            <h3 class="text-capitalize">star kebab & pizza 0</h3><img class="img-fluid __icon" src="assets/img/icon/slide-divider.svg"/>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in  nulla pariatur anim id est laborum sunt in dolor in reprehenderit in.</p><a class="text-uppercase" href="#">read more<span></span></a>
          </div>
        </div>
      </div>
      <button class="swiper-button-next"><i class="fas fa-chevron-right"></i></button>
      <button class="swiper-button-prev"><i class="fas fa-chevron-left"></i></button>
    </div>


    <div class="about-us container wow animate__fadeInUp" data-wow-duration="1s">
      <div class="row">
        <div class="col-md-12 col-lg-6 img"><img class="img-fluid" src="/image/gallery/about/about-us.png"/></div>
        <div class="col-md-12 col-lg-6 content"><strong class="sub-title text-capitalize">star kebab & pizza</strong>
          <h3 class="title text-uppercase">about us</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada. Ac odio tempor orci dapibus ultrices in. Egestas diam in arcu cursus</p>
          <div class="about-us-swiper swiper">
            <div class="swiper-wrapper">
              <div  v-for=" gallery in layout.get_gallery" :key="gallery" class="swiper-slide"><img class="img-fluid" :src="gallery.path"/></div>
            </div>
            <button class="swiper-button-next"></button>
            <button class="swiper-button-prev"></button>
          </div>
        </div>
      </div>
    </div>

    <section v-if="layout.category == 1" class="categories-v2 pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s" :style="'background-color:'+ layout.category_bg">
      <div class="container">
        <div class="default-title-v2 text-center">
          <h3 class="title color-red" :style="'color:'+ layout.category_content">Best Categories</h3>
          <p class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum <br> dolore eu fugiat nulla pariatur.</p>
        </div>
        <div class="categories-swiper-v2 position-relative">
          <div class="swiper">
            <div class="swiper-wrapper">
              <a v-for="category in layout.get_category" :key="category" class="swiper-slide" href="#">
                <div class="img"><img class="img-fluid" :src="category.path"/></div><strong>{{category.title}}</strong>
                <p>{{category.description}}</p>
              </a>
                
                
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>


    <section v-if="layout.popular == 1" class="popular-foods-v2 pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s" :style="'background-color:'+ layout.popular_bg">
      <div class="container">
        <div class="default-title-v2 text-center">
          <h3 class="title color-red" :style="'color:'+ layout.popular_content"><span>Popular &nbsp;</span>Foods</h3>
          <p class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum <br> dolore eu fugiat nulla pariatur.</p>
        </div>
        <div class="popular-foods-swiper-v2 position-relative">
          <div class="swiper">
            <div class="swiper-wrapper">
              <a v-for="popular in layout.get_popular" :key="popular" class="swiper-slide" href="#">
                <div class="img"><img class="img-fluid" :src="popular.path"/></div><strong>{{popular.name}}</strong>
                <p>{{popular.description}}</p>
              </a>
                
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>

    <section class="user-comments-v2 pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s">
      <div class="container-fluid">
        <div class="default-title-v2 text-center">
          <h3 class="title">Recent Web Reviews</h3>
          <p class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum <br> dolore eu fugiat nulla pariatur.</p>
        </div>
        <div class="user-comments-v2-swiper position-relative">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="message-text"><strong>THAT’S AN AWESOME RESTAURANT & FOOD 0</strong>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad <br>minim veniam, quis nostrud exercitation 0</p>
                </div>
                <div class="message-info"><strong>Selçuk Aker</strong><span>UX Designer</span></div>
              </div>
              <div class="swiper-slide">
                <div class="message-text"><strong>THAT’S AN AWESOME RESTAURANT & FOOD 1</strong>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad <br>minim veniam, quis nostrud exercitation 1</p>
                </div>
                <div class="message-info"><strong>Selçuk Aker</strong><span>UX Designer</span></div>
              </div>
              <div class="swiper-slide">
                <div class="message-text"><strong>THAT’S AN AWESOME RESTAURANT & FOOD 2</strong>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad <br>minim veniam, quis nostrud exercitation 2</p>
                </div>
                <div class="message-info"><strong>Selçuk Aker</strong><span>UX Designer</span></div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>

    <section v-if="layout.booking == 1" class="reservation-v2 pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s" :style="'background-color:'+ layout.booking_bg">
      <div class="container">
        <div class="default-title-v2 text-center">
          <h3 class="title text-capitalize" :style="'color:'+ layout.booking_content"><span>make a &nbsp;</span>reservation</h3>
          <p class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum <br> dolore eu fugiat nulla pariatur.</p>
        </div>
        <form class="row" method="" action="">
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
            <input class="form-control" placeholder="Full Name" type="text"/>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
            <input class="form-control" placeholder="Phone Number" type="text"/>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
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
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
            <div class="icon"><i class="fas fa-chevron-down"></i>
              <input class="form-control icon" placeholder="Date" id="date" type="text"/>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
            <div class="icon"><i class="fas fa-chevron-down"></i>
              <input class="form-control icon" placeholder="Time" id="time" type="text"/>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
            <button class="__btn text-capitalize">make reservation now<i class="fas fa-arrow-right"></i></button>
          </div>
        </form>
      </div>
    </section>


    <section  v-if="layout.gallery == 1" class="photo-gallery-v2 pt-75 wow animate__fadeInUp" data-wow-duration="1s" :style="'background-color:'+ layout.gallery_bg">
      <div class="container">
        <div class="default-title-v2 text-center">
          <h3 class="title text-capitalize"><span>photo &nbsp;</span>gallery</h3>
          <p class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum <br> dolore eu fugiat nulla pariatur.</p>
        </div>
      </div>
      <div class="container-fluid wow animate__fadeInUp" data-wow-duration="1s">
        <div class="row">
          <div  v-for=" gallery in layout.get_gallery" :key="gallery" class="col-sm-12 col-md-6 col-lg-3">
            <div class="box single"><a class="fas fa-search-plus" :href="gallery.path" data-fancybox="photoGallery"></a><img class="img-fluid" :src="gallery.path"/></div>
          </div>
        </div>
      </div>
    </section>
    <section class="opening-hours-v2 pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s">
      <div class="container"><img class="img-fluid" src="assets/img/icon/opening-hours-top-divider.svg"/>
        <h3 class="title text-uppercase">opening hours</h3>
        <div class="_divider"></div><a href="tel:03254769875">TEL: 03254769875</a>
        <h3 class="title text-uppercase __divider">hours</h3>
        <div class="__time"><span>MON-FRI</span><span>9.30AM-11PM</span></div>
        <div class="__time"><span>SUN</span><span>9.30AM-11PM</span></div><img class="img-fluid" src="assets/img/icon/opening-hours-bottom-divider.svg"/>
      </div>
    </section>
    
    

    <TopFooter/>


</template>


<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import TopHeader from '@/Pages/ShopPages/Theme_2/Header.vue';
import TopFooter from '@/Pages/ShopPages/Theme_2/Footer.vue';
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
    props:{
        setting:Object,
        cartItems:Object,
        cTotal:String,
        cSubtotal:String,
        timeSetting:Object,
        layout:Object
    },
  //   mounted() {
  //       let links=[ 
  //                   '/js/theme6/app.js'
  //                 ];
  // links.forEach(function(value,index){
  //   let externalScript = document.createElement('script')
  //     // externalScript.async = true
  //     externalScript.setAttribute('src', value)
  //     document.body.appendChild(externalScript)
  // });
      
  //  },
}

</script>