<template>
  <Head title="Check Out">
    <link rel="stylesheet" href="/css/shoptheme1/stylesheet.css" />
    <link rel="stylesheet" href="/css/shoptheme1/responsive.css" />
    <link rel="stylesheet" href="/css/shoptheme1/responsive1.css" />
    <link rel="stylesheet" href="/css/shoptheme1/ecslideshow.css" />
    <link rel="stylesheet" href="/css/shoptheme1/accordion.css" />
    <link rel="stylesheet" href="/css/shoptheme1/camera.css" />
    <link rel="stylesheet" href="/css/shoptheme1/fast_order.css" />
    <link rel="stylesheet" href="/css/shoptheme1/font-awesome.css" />
    <link rel="stylesheet" href="/css/shoptheme1/news.css" />
    <link rel="stylesheet" href="/css/shoptheme1/owl.carousel.css" />
    <link rel="stylesheet" href="/css/shoptheme1/topmenu.css" />
    <link rel="stylesheet" href="/css/shoptheme1/ybc-testimonials.css" />
  </Head>

  <body class="home lang_en ets_green">
    <div
      id="smartbanner"
      class="android shown"
      style="position: static; top: 0px; display: none"
    >
      <div class="sb-container">
        <a href="#" class="sb-close">×</a
        ><span
          class="sb-icon"
          style="
            background-image: url('https://www.123.the-public.co.uk/image/data/app-icons/ak-spices-hemel-hempstead.png');
          "
        ></span>
        <div class="sb-info">
          <strong>A.K. Spices-Stage</strong><span>A.K. Spices-Stage</span
          ><span>FREE - In Google Play</span>
        </div>
        <a
          href="market://details?id=com.emz.ak_spices_indain_takeaway_hemel_hempstead"
          class="sb-button"
          ><span>VIEW</span></a
        >
      </div>
    </div>

    <UpperShopNav />

    <div class="shopStatus shopStatusMobile" style="display: none">
      <div class="shop_open_msg"><h2>We are open now!</h2></div>
    </div>

    <div class="body_ets">
      <div class="bg_option_header">
        <div class="header_banner_custom_full_width">
          <div class="ets_main_content">
            <div class="fix_ets_main_content">
              <div class="main ets">
                <div id="wrapper" class="relat">
                  <div class="ctr"></div>

                  <!-- Banner -->
                  <Banner />

                  <div class="ctr"></div>
                </div>
              </div>
              <!-- main ets-->
            </div>
          </div>
        </div>
        <!-- LowerNav -->
        <LowerShopNav />
      </div>
      <!-- bg_option_header -->

      <div id="wrapper" class="etsWrapper middle_bg_custom">
        <div class="ets_main_content">
          <div class="fix_ets_main_content">
            <div class="etsWrapper body_content_sec">
              <div class="etsFloat">
                <div id="content" class="homepage">
                  <!-- route :  -->

                  <Menu />

                  <div id="wrapper" class="etsWrapper middle_bg_custom">
                    <div class="ets_main_content">
                      <div class="fix_ets_main_content">
                        <div class="etsWrapper body_content_sec">
                          <div class="breadcrumb">
                            <div id="wrapper">
                              <a
                                href="http://www.123.the-public.co.uk/index.php?route=common/home"
                                >Home</a
                              >

                              »
                              <a
                                href="http://www.123.the-public.co.uk/index.php?route=checkout/cart&amp;prams=2"
                                >Shopping Cart</a
                              >
                            </div>
                          </div>
                          <div id="wrapper">
                            <div id="content">
                              <h1>Shopping Cart</h1>
                              <div class="content">
                                Your shopping cart is empty!
                              </div>
                              <div class="buttons">
                                <div class="right">
                                  <a
                                    href="http://www.123.the-public.co.uk/index.php?route=common/home"
                                    class="button"
                                    >Continue</a
                                  >
                                </div>
                              </div>
                            </div>

                            <div class="clear"></div>
                            <div class="clear"></div>
                          </div>
                          <!--------------end main------------------>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- </div> -->
                </div>
                <div class="clear"></div>
              </div>
              <!--------------end main------------------>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <Footer />

      <!--end ets body-->

      <div id="sticker">
        <span class="sticky-icon"
          >you can use your same login details wherever you see this logo.</span
        >
      </div>

      <!--div class="pop-bdy"> </div-->
    </div>
    <ul
      class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all"
      role="listbox"
      aria-activedescendant="ui-active-menuitem"
      style="z-index: 2; top: 0px; left: 0px; display: none"
    ></ul>
    <div
      id="topcontrol"
      style="
        position: fixed;
        bottom: 20px;
        right: 20px;
        opacity: 0;
        cursor: pointer;
      "
    >
      <div id="scroll_ico"></div>
    </div>
  </body>
</template>








<script>
import { Head, Link } from "@inertiajs/inertia-vue3";
import { Method } from "@inertiajs/inertia";
import UpperShopNav from "@/Components/UpperShopNav.vue";
import Banner from "@/Components/Banner.vue";
import LowerShopNav from "@/Components/LowerShopNav.vue";
import Menu from "@/Components/Menu.vue";
import Footer from "@/Components/Footer.vue";

export default {
  components: {
    Head,
    Link,
    UpperShopNav,
    Banner,
    LowerShopNav,
    Menu,
    Footer,
  },
  props: {},
};
</script>



<style>
body > div#container {
  background-color: #2e2e2e;
}

body > div#container {
  border-bottom: 1px solid #fbbc4b;
}
body > div#container {
  background-color: #2e2e2e;
}
.camera_wrap {
  width: 63%;
}
.colormenu {
  width: 100%;
}

.colormenu,
.tabs,
.top_menu_responsive .btn-navbar,
.list_category_style_1 {
  background-color: #fbbc4b;
}
</style>


<style >
.header_banner {
  height: 170px;

  background-position: px px;
}

body h1,
body h2,
body h3,
body h4 {
}

@media (max-width: 649px) {
  body #header {
    background-color: #ffffff;
  }
}

body > div#container {
  border-bottom: 1px solid #fbbc4b;
}

.body_ets {
  background-color: #ffffff;
}

.body_ets,
.hieu,
.homepagefooter {
  background-image: url("https://www.123.the-public.co.uk/image/data/patterns/overlay5.png");
  background-repeat: repeat;

  background-position: left top;
}

.body_ets:before {
  background-repeat: no-repeat;

  background-position: center top;
}

.bg_custom_footer:before {
  /** dola update **/
  background-repeat: no-repeat;
  background-position: center center;
}

.bottomFooter {
  background-color: #fbbc4b;
}

.topFooterRes {
  background-color: #fbbc4b;
}

.footerRes {
  background-repeat: no-repeat;
  background-position: center center;
}

#wrapper.etsWrapper {
  background-repeat: no-repeat;
  background-position: center center;
}

.middle_bg_custom .fix_ets_main_content > .etsWrapper {
  background-color: #ffffff;

  background-repeat: no-repeat;
}

/* background -color footer  */

.etsWrapper .fix_ets_main_content,
.bg_custom_footer .fix_ets_main_content,
.home_menu {
}

.ets_main_content .main.ets {
  box-shadow: 0 0 10px 5px black;
}

.checkout-heading span {
  background-color: transparent;
}

.ets_main_content {
  width: 880px;
}

.ets_main_content,
#container .ets_main_content.style_header_1.ets_main_content_top {
  width: 1000px;
}

#jssor_1 {
  width: 900px;
}

/*.ybc_wide_banner_fullwidth,.main-menu-full-width{
        margin:0 auto;
            			width: 1000px;  
	           
                }*/
div .top_footer {
  margin: 0 auto;
  width: 1000px;
}
@media (min-width: 1000px) {
  .ybc_wide_banner_fullwidth,
  .main-menu-full-width {
    margin: 0 auto;
    width: 1000px;
  }
}

input:hover,
textarea:hover,
select:hover {
  border-color: #d30a17 !important;
}
input:focus,
textarea:focus,
select:focus {
  border-color: #fbbc4b !important;
}
#search_result .store_list.wrap_row,
.error {
  color: #ff0000 !important;
}
input.errors,
select.errors {
  border-color: #ff0000 !important;
}

input,
textarea,
select {
  border-color: #616161 !important;
}
input,
textarea,
select {
  color: #919191;
}

::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  opacity: 1;
  color: #919191;
}
::-moz-placeholder {
  /* Firefox 19+ */
  opacity: 1;
  color: #919191;
}
:-ms-input-placeholder {
  /* IE 10+ */
  opacity: 1;
  color: #919191;
}
:-moz-placeholder {
  /* Firefox 18- */
  opacity: 1;
  color: #919191;
}

input:focus,
textarea:focus,
select:focus {
  color: #292929;
}
input:focus::-webkit-input-placeholder,
textarea:focus::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */

  color: #292929;
}
input:focus::-moz-placeholder,
textarea:focus::-moz-placeholder {
  /* Firefox 19+ */

  color: #292929;
}
input:focus:-ms-input-placeholder,
textarea:focus:-ms-input-placeholder {
  /* IE 10+ */

  color: #292929;
}
input:focus:-moz-placeholder,
textarea:focus:-moz-placeholder {
  /* Firefox 18- */

  color: #292929;
}

/* sang */

body > div#container {
  background-color: #2e2e2e;
}

a {
  color: #3dbcd4;
}

a:hover {
  color: #ff1b11;
}

h1,
h2,
h3,
h4,
.hieu {
  color: #065979;
}

.responsive_cart {
  background-color: #5ab1eb;
}

.footer a {
  color: #262626;
}

.footer a:active,
.footer a.active {
  color: #ffffff;
}

.footer a:hover {
  color: #d30a17;
}

.footer .top_footer {
  color: #262626;
}

.footer .bottomFooter p {
  color: #ffffff;
}

.footer .bottomFooter a {
  color: #181888;
}

.footer .bottomFooter a:hover {
  color: #ffffff;
}

body {
  font-size: nonepx;
}

h1 {
  font-size: nonepx;
  line-height: nonepx;
}

h2 {
  font-size: nonepx;
}

h3,
.footer h3 {
  font-size: nonepx;
}

h4 {
  font-size: nonepx;
}

.box-category > li > a {
  font-size: nonepx;
}

.product-list .name {
  font-size: nonepx;
}

.product-list .price {
  font-size: nonepx;
}

/* option for wide menu */
.menuResp > li > a {
  background-color: #fbbc4b;
  color: #fffef5;
}
.menuResp > li > a:hover {
  background-color: #fff169;
  color: #bb1a20;
}

.menuResp a {
  font-size: nonepx;
}

.ybccart a {
  background-color: #fbbc4b;
}

#cart.ybccart a:hover {
  background-color: #fff169;
}
#cart.ybccart a:hover,
#cart.ybccart a:hover * {
  color: #bb1a20;
}
#cart.ybccart a,
#cart.ybccart a * {
  color: #fffff7;
}

/* end */

@media (min-width: 659px) and (max-width: 1199px) {
  .bg_option_header,
  .hieu {
    /*					background-color: #FFFFB3;
							background-image: url("https://www.123.the-public.co.uk/image/data/patterns/overlay5.png"); 
			                        background-repeat: repeat;
                        background-position: center 0;*/
  }

  #wrapper.etsWrapper.middle_bg_custom {
  }

  .middle_bg_custom .fix_ets_main_content > .etsWrapper {
  }
}

@media (max-width: 649px) {
  #payment-address {
    margin-top: 30px;
  }
  body > div#container {
    background-color: #ffffff;
  }

  /* .main_header_responsive{
           background-color: #FFFFFF;
        } */

  #wrapper.etsWrapper.middle_bg_custom {
  }

  .body_ets:before {
  }

  .middle_bg_custom .fix_ets_main_content > .etsWrapper {
  }
}

@media (min-width: 320px) and (max-width: 480px) {
  .main_header_responsive {
    background-image: url("https://www.123.the-public.co.uk/image/data/patterns/overlay5.png");
  }
}

@media (min-width: 481px) and (max-width: 767px) {
  .main_header_responsive {
    background-image: url("https://www.123.the-public.co.uk/image/data/patterns/overlay5.png");
  }
}

/*end*/
</style>