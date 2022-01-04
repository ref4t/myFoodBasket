<template>

     <TopHeader :logo="setting.config_logo" :total="cartTotal" :cartCount="Object.keys(cartTest).length" :openingTime="setting.opening_time" :timeSetting="timeSetting"/>


    <section class="home-slide-v4 wow animate__fadeInUp" data-wow-duration="1s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-7 position-relative">
            <div class="__circle">
              <div class="__thumbs-item">
                <a v-for="(slider,index) in layout.get_slider" :key="slider" href="#" :style="'background-image: url(' + slider.path + ')'" :data-index="index"></a>
                
              </div>
            </div>
            <div class="__circle"></div>
            <div class="__circle"></div>
            <div class="swiper">
              <div  class="swiper-wrapper">
                 <div v-for="slider in layout.get_slider" :key="slider" class="swiper-slide"><img class="img-fluid" :src="slider.path"/></div>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-5">
            <div class="order-online-v4">
              <h1 class="__title">{{layout.slider_title}}</h1><strong class="title text-uppercase">order online</strong>
              <input class="form-control" placeholder="Eg. AA11AA"/>
              <p>Please enter your postcode to view our<br> menu and place an order</p>
              <div class="btn__group"><a class="btn btn-purple text-uppercase">collection</a><a class="btn btn-green text-uppercase">delivery</a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="who-are-we-v4 pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s" :style="'background-color:'+ layout.about_bg">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-6">
            <div class="default-title-v4"><strong class="sub-title color-green">About Us</strong>
              <h3 class="title" :style="'color:'+ layout.about_content">{{layout.about_title}}</h3>
            </div>
            <p>{{layout.about_description}}</p>
          </div>
          <div class="col-12 col-md-12 col-lg-6 img"><img class="img-fluid" src="/image/gallery/about/about-us.png"/></div>
        </div>
      </div>
    </section>
    
    <section v-if="layout.category == 1" class="best-categories-v4 pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s">
      <div class="default-title-v4 text-center container"><strong class="sub-title color-green">Your Choose</strong>
        <h3 class="title text-capitalize"  :style="'color:'+ layout.category_content">best categories</h3>
      </div>
      <div class="container">
        <div class="row list-item">
          <div v-for="category in layout.get_category" :key="category" class="col-12 col-sm-6 col-lg-3">
            <div class="item">
              <div class="img"><img class="img-fluid" :src="category.path"/></div>
              <div class="text-content"><strong class="text-capitalize">{{category.title}}</strong>
                <p>{{category.description}}</p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    
    <section class="popular-foods-v4 pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s" :style="'background-color:'+ layout.popular_bg">
      <div class="container">
        <div class="default-title-v4 text-center"><strong class="sub-title color-purple">Delicious Ones</strong>
          <h3 class="title text-capitalize" :style="'color:'+ layout.popular_content">popular foods</h3>
        </div>
        <div class="row list-item">
          <div v-for="popular in layout.get_popular" :key="popular" class="col-12 col-md-6">
            <div class="item">
              <div class="img"><img class="img-fluid" :src="popular.path"/></div>
              <div class="text-content"><strong class="text-capitalize">{{popular.name}}</strong>
                <p>{{popular.description}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- reviews -->
    <section class="user-comments-v4 pt-75 pb-75">
      <div class="container pt-110 pb-110 wow animate__fadeInUp" data-wow-duration="1s">
        <div class="default-title-v4 text-center mb-0"><strong class="sub-title color-green">Reviews</strong>
          <h3 class="title">Recent Web Reviews</h3><img class="img-fluid" src="/assets/img/icon/commit-icon.svg"/>
        </div>
        <div class="user-comments-v4-swiper position-relative">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="message-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad <br>minim veniam, quis nostrud exercitation 0</p>
                </div>
                <div class="message-info"><strong>Selçuk Aker</strong><span>UX Designer</span></div>
              </div>
              <div class="swiper-slide">
                <div class="message-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad <br>minim veniam, quis nostrud exercitation 1</p>
                </div>
                <div class="message-info"><strong>Selçuk Aker</strong><span>UX Designer</span></div>
              </div>
              <div class="swiper-slide">
                <div class="message-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad <br>minim veniam, quis nostrud exercitation 2</p>
                </div>
                <div class="message-info"><strong>Selçuk Aker</strong><span>UX Designer</span></div>
              </div>
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </section>
    
    <div v-if="layout.gallery == 1" class="photo-gallery-v4 pt-75 pb-75" :style="'background-color:'+ layout.gallery_bg">
      <div class="container">
        <div class="default-title-v4 text-center"><strong class="sub-title color-purple">Delicious Foods</strong>
          <h3 class="title text-capitalize" :style="'color:'+ layout.gallery_content">photo gallery</h3>
          <p>{{layout.gallery_description}}</p>
        </div>
      </div>
      <div class="list-item-container">
        <div class="list-item">
          <div v-for=" gallery in layout.get_gallery" :key="gallery" class="item"><a class="fas fa-search-plus" :href="gallery.path" data-fancybox="photoGallery"></a><img class="img-fluid" :src="gallery.path"/></div>
          
        </div>
      </div>
      <div style="clear:both;"></div>
    </div>
    
    <section v-if="layout.booking == 1" class="reservation-v4 pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s" :style="'background-color:'+ layout.booking_bg">
      <form class="container">
        <div class="default-title-v4 text-center"><strong class="sub-title color-purple text-capitalize">book now</strong>
          <h3 class="title text-capitalize" :style="'color:'+ layout.booking_content">make a reservation</h3>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-6 col-md-4 mb-4">
            <input class="form-control" placeholder="Full Name" type="text"/>
          </div>
          <div class="col-12 col-sm-6 col-md-4 mb-4">
            <input class="form-control" placeholder="Phone Number" type="text"/>
          </div>
          <div class="col-12 col-sm-6 col-md-4 mb-4">
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
          <div class="col-12 col-sm-6 col-md-4 mb-4">
            <div class="icon"><i class="fas fa-chevron-down"></i>
              <input class="form-control icon" placeholder="Date" id="date" type="text"/>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 mb-4">
            <div class="icon"><i class="fas fa-chevron-down"></i>
              <input class="form-control icon" placeholder="Time" id="time" type="text"/>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-12 text-center">
            <button class="btn btn-purple text-capitalize">make reservation now</button>
          </div>
        </div>
      </form>
    </section>
    
    <section class="opening-hours-v4 pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s">
      <div class="container">
        <div class="default-title-v4"><strong class="sub-title color-orange text-capitalize">Open 7 Days a Week</strong>
          <h3 class="title text-capitalize">opening hours</h3>
        </div>
        <br/>
        <div class="__time">
          <div class="__time-item"><strong>Mon - Fri</strong>
            <div><span>09AM</span><span>23PM</span></div>
          </div>
          <div class="__time-item"><strong>Sunday</strong>
            <div><span>12AM</span><span>23PM</span></div>
          </div>
        </div>
      </div>
    </section>

     <TopFooter :name="setting.config_name" :logo="setting.config_logo" :address="setting.config_address" :telephone="setting.config_telephone" :email="setting.config_email" />


</template>


<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import TopHeader from '@/Pages/ShopPages/Theme_4/Header.vue';
import TopFooter from '@/Pages/ShopPages/Theme_4/Footer.vue';
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