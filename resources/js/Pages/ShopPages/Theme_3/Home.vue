<template>

     <TopHeader :logo="setting.config_logo" :total="cartTotal" :cartCount="Object.keys(cartTest).length" :openingTime="setting.opening_time" :timeSetting="timeSetting"/>


      <section class="home-slide-v3 wow animate__fadeInUp" data-wow-duration="1s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-6 wow animate__fadeInLeft" data-wow-duration="1s">
            <div class="order-online-v3">
              <h1 class="__title">Welcome to <br><span>STAR KEBAB & PIZZA</span></h1><strong class="title text-uppercase">order online</strong>
              <input class="form-control" placeholder="Eg. AA11AA"/>
              <p>Please enter your postcode to view our<br> menu and place an order</p>
              <div class="btn__group"><a class="btn btn-red text-uppercase">collection</a><a class="btn btn-orange text-uppercase">delivery</a></div>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 wow animate__fadeInRight position-relative" data-wow-duration="1s">
            <div class="swiper-text-content">
              <div class="text-content"><strong class="__title">Lorem Ipsum</strong>
                <p>Lorem Ipsum Dolar</p>
              </div>
              <div class="swiper-buttons">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>
            </div>
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
        <h4 class="__title">"Star Kebab & Pizza WANT TO BE LIMITED."</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid consectetur deleniti dolorum est facilis labore maiores molestias odio officiis quam qui quisquam repellendus sapiente sequi suscipit tempora, ut. <br>Magnam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>At autem consequatur consequuntur dolor dolorum eligendi error excepturi facere illum, inventore laudantium, <br>libero minima mollitia nihil nobis quis quod tenetur vitae?</p>
      </div>
    </section>


    <section v-if="layout.category == 1" class="best-categories-icon pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s">
      <div class="default-title-v3 text-center container">
        <h3 class="title text-capitalize" :style="'color:'+ layout.category_content">best categories</h3>
        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa earum excepturi fugit, <br> maiores praesentium qui, quidem rerum sed suscipit tempora temporibus totam voluptatibus.</p> -->
      </div>
      <div class="container">
        <div class="row list-item">
          <div v-for="category in layout.get_category" :key="category" class="col-6 col-md-4 col-lg-2">
            <div class="item">
              <div class="img"><img class="img-fluid" :src="category.path"/></div><strong class="text-capitalize">{{category.title}}</strong>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section  v-if="layout.popular == 1" class="popular-foods-v3 pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s" :style="'background-color:'+ layout.popular_bg">
      <div class="container">
        <div class="default-title-v3 text-center">
          <h3 class="title text-capitalize color-green" :style="'color:'+ layout.popular_content">popular foods</h3>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Culpa earum excepturi fugit, maiores praesentium qui</p> -->
        </div>
        <div class="row list-item">
          <div  v-for="popular in layout.get_popular" :key="popular" class="col-12 col-md-6 col-lg-4">
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

    <section class="user-comments-v3 pt-75 pb-75">
      <div class="container pt-110 pb-110 wow animate__fadeInUp" data-wow-duration="1s">
        <div class="default-title-v3 text-center">
          <h3 class="title color-red">Recent Web <br> Reviews</h3>
        </div>
        <div class="user-comments-v3-swiper position-relative">
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
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </section>


    <div v-if="layout.gallery == 1" class="photo-gallery-v3 pt-75 pb-75"  :style="'background-color:'+ layout.gallery_bg">
      <div class="container">
        <div class="default-title-v3 text-center">
          <h3 class="title text-capitalize color-red" :style="'color:'+ layout.popular_content">photo gallery</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Culpa earum excepturi fugit, maiores praesentium qui</p>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row list-item">
          <div class="col-12 col-md-6 col-lg-3" v-for="popular in layout.get_popular" :key="popular">
            <div class="item"><a class="fas fa-search-plus" :href="popular.path" data-fancybox="photoGallery"></a><img class="img-fluid" :src="popular.path"/></div>
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
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum <br> dolore eu fugiat nulla pariatur.</p>
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
          <p>Open 7 Days a Week</p>
        </div>
        <div class="__time">
          <div class="__time-item"><strong>Monday - Friday</strong><span>09:00 - 23:00</span></div>
          <div class="__time-item"><strong>Sunday</strong><span>12:00 - 23:00</span></div>
        </div>
      </div>
    </section>
    
    

    <TopFooter/>


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