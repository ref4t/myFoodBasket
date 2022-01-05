<template>

     <TopHeader :logo="setting.config_logo" :total="cartTotal" :cartCount="Object.keys(cartTest).length" :openingTime="setting.opening_time" :timeSetting="timeSetting"/>


    <section class="home-slide-v5 wow animate__fadeInUp" data-wow-duration="1s">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-sm-12 col-lg-5 wow animate__fadeInLeft" data-wow-duration="1s">
            <div class="order-online-v5">
              <h2 class="__title"><span class="color-orange"> {{ layout.slider_description }} </span> </h2>
              <strong class="title text-uppercase">order online</strong>
              <input class="form-control" placeholder="Eg. AA11AA"/>
              <p>Please enter your postcode to view our<br> menu and place an order</p>
              <div class="btn__group"><a class="btn btn-red text-uppercase">collection</a><a class="btn btn-yellow text-uppercase">delivery</a></div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-lg-7 wow animate__fadeInRight position-relative" data-wow-duration="1s">
            <div class="home-slide-v5-swiper swiper">
              <div class="swiper-wrapper">
                <div  v-for="slider in layout.get_slider" :key="slider" class="swiper-slide"><img class="img-fluid" :src="slider.path"/></div>
                <!-- <div class="swiper-slide"><img class="img-fluid" src="/demo-data/slider.png"/></div>
                <div class="swiper-slide"><img class="img-fluid" src="/demo-data/slider.png"/></div> -->
              </div>
              <!-- <div class="happy-customers"><strong class="text-uppercase">our happy customers</strong>
                <div class="__img-list">
                  <div class="__img"><img class="img-fluid" src="/demo-data/girl.jpeg"/></div>
                  <div class="__img"><img class="img-fluid" src="/demo-data/girl.jpeg"/></div>
                  <div class="__img"><img class="img-fluid" src="/demo-data/girl.jpeg"/></div>
                  <div class="__count">8+</div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
      <div class="home-slide-category">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide" v-for="category in layout.get_category" :key="category" >
              <div class="swiper-slide-item">
                <div class="img"><img class="img-fluid" :src="category.path"/></div>
                <div class="__text-content">
                  <h4 class="text-uppercase"></h4><strong class="text-uppercase">{{category.title}}</strong>
                </div>
              </div>
            </div> </div>
        </div>
        <div class="swiper-button-prev"><i class="fas fa-long-arrow-alt-left"></i></div>
        <div class="swiper-button-next"><i class="fas fa-long-arrow-alt-right"></i></div>
      </div>
    </section>


<!-- ABOUT US -->
    <section class="who-are-we-v5 pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6"><img class="img-fluid" src="/image/gallery/about/about-us.png"/></div>
          <div class="col-sm-12 col-md-6">
            <div class="default-title-v5"><strong class="sub-title color-orange text-uppercase">about us</strong>
              <h3 class="title">{{layout.about_title}}</h3>
              <p> {{ layout.about_description }} </p>
            </div><a class="btn btn-orange text-uppercase" href="">read more</a>
          </div>
        </div>
      </div>
    </section>


    <section v-if="layout.category == 1" class="best-categories-v5 pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s">
      <div class="default-title-v5 text-center container"><strong class="sub-title text-uppercase color-green">best categories</strong>
        <h3 class="title text-capitalize">best categories</h3>
        <p> {{layout.category_description}} </p>
      </div>
      <div class="container">
        <div class="best-categories-v5-swiper">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div v-for="category in layout.get_category" :key="category" class="swiper-slide">
                <div v-if="category.path" class="item">
                  <div class="img"><img class="img-fluid" :src="category.path"/></div>
                  <div class="text-content"><strong class="text-capitalize">{{category.title}}</strong>
                    <p>{{category.description}}</p>
                  </div>
                </div>
                <div v-else class="item">
                  <div class="img"><img class="img-fluid" :src="'/image/demo_img.png'"/></div>
                  <div class="text-content"><strong class="text-capitalize">{{category.title}}</strong>
                    <p>{{category.description}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="best-categories-v5-swiper-control">
            <div class="__empty"></div>
            <div class="number-of-slide"><span class="__text">Number of slide</span>
              <div class="swiper-scrollbar"></div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="best-categories-buttons">
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section  v-if="layout.popular == 1" class="popular-foods-v5 pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s">
      <div class="default-title-v5 text-center container"><strong class="sub-title text-uppercase color-orange">popular foods</strong>
        <h3 class="title text-capitalize">Popular foods in restaurant</h3>
        <p>{{layout.popular_description}}</p>
      </div>
      <div class="container">
        <div class="popular-foods-v5-swiper">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div v-for="popular in layout.get_popular" :key="popular" class="swiper-slide">
                <div v-if="popular.path" class="item">
                  <div class="img"><img class="img-fluid"  :src="'/image/' + popular.path"/></div>
                  <div class="text-content"><strong class="text-capitalize">{{popular.name}}</strong>
                    <p v-html="decodeHtml(popular.description)" ></p>
                    <!-- <a href="">Read more</a> -->
                  </div>
                </div>
                <div v-else class="item">
                  <div class="img"><img class="img-fluid"   :src="'/image/demo_img.png'"/></div>
                  <div class="text-content"><strong class="text-capitalize">{{popular.name}}</strong>
                    <p>{{popular.description}}</p>
                    <p v-html="decodeHtml(popular.description)" ></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="popular-foods-v5-swiper-control">
            <div class="__empty"></div>
            <div class="number-of-slide"><span class="__text">Number of slide</span>
              <div class="swiper-scrollbar"></div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="best-categories-buttons">
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="user-comments-v5 pt-75 pb-75">
      <div class="container pt-110 pb-110 wow animate__fadeInUp" data-wow-duration="1s">
        <div class="default-title-v5"><strong class="sub-title text-uppercase color-orange">Recent Web  Reviews</strong>
          <h3 class="title">What costumers says about best <br> food in restaurant</h3>
         
        </div>
        <div class="user-comments-v5-swiper position-relative">
          <div class="swiper">
            <div class="swiper-wrapper" v-for="review in reviews" :key="review">
              <div class="swiper-slide"><strong>{{review.get_customer.firstname}} {{review.get_customer.lastname}}</strong>
                <p>{{review.message}}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="user-comments-v5-swiper-control">
          <div class="number-of-slide"><span class="__text">Number of slide</span>
            <div class="swiper-scrollbar"></div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </section>


    <div class="photo-gallery-v5 pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-lg-3 offset-lg-1">
            <div class="default-title-v5"><strong class="sub-title color-red text-uppercase color-orange">gallery</strong>
              <h3 class="title text-capitalize mb-5">Our gallery in the restaurant and you can see them.</h3>
              <p>{{layout.gallery_description}}</p>
            </div>
            <div class="user-comments-v5-swiper-info">
              <div class="number-of-slide"><span class="__text">Number of slide</span>
                <div class="swiper-scrollbar"></div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-8">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div v-for=" gallery in layout.get_gallery" :key="gallery" class="swiper-slide">
                  <div class="item"><a class="fas fa-search-plus" :href="gallery.path" data-fancybox="photoGallery"></a><img class="img-fluid" :src="gallery.path"/></div>
                </div></div>
            </div>
            <div class="photo-gallery-v5-swiper-control">
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="reservation-v5 pt-75 pb-75 wow animate__fadeInUp" data-wow-duration="1s">
      <form class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-5 wow animate__fadeInLeft" data-wow-duration="1s">
            <div class="default-title-v5"><strong class="sub-title color-orange text-capitalize">reservation</strong>
              <h3 class="title text-capitalize">{{layout.booking_description}}</h3>
            </div>
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
              <div class="col-12 col-sm-6 mb-4">
                <div class="icon"><i class="fas fa-chevron-down"></i>
                  <input class="form-control icon" placeholder="Time" id="time" type="text"/>
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <button class="btn btn-orange text-capitalize">make reservation now</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </section>


    <section class="opening-hours-v5 pt-75 wow animate__fadeInUp" data-wow-duration="1s">
      <div class="default-title-v5 text-center"><strong class="sub-title color-orange text-capitalize">opening hourse</strong>
        <h3 class="title text-capitalize">open {{openTime.length}} days a week</h3>
      </div>
      <div class="__info">
        <div class="__container"><img class="img-fluid mb-3" src="/img/icon/time-top-flower.svg"/><strong class="__time-title">OPEN NOW</strong>
          <div class="__time" v-for="day in openTime" :key="day" style="max-width:none" ><span>{{day[0]}}</span><span>{{day[1]}}</span></div>
          <!-- <div class="__time" v-for="day in openTime" :key="day"><strong>{{day[0]}}</strong>
            <div class="__time-box">
              <div class="__left-time"><span>{{day[1]}}</span></div>
            </div>
          </div> -->
          <img class="img-fluid mt-3" src="/img/icon/time-bottom-flower.svg"/>
        </div>
      </div>
    </section>

    <TopFooter :name="setting.config_name" :logo="setting.config_logo" :address="setting.config_address" :telephone="setting.config_telephone" :email="setting.config_email" />


</template>


<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import TopHeader from '@/Pages/ShopPages/Theme_5/Header5.vue';
import TopFooter from '@/Pages/ShopPages/Theme_5/Footer5.vue';
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
        layout:Object,
        reviews:Object,
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
      }
    }
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