<template>
  <Head title="Home">
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
                          <div id="wrapper">
                            <!-- route : information/contact -->
                            <div class="box list_category_style_1">
                              <p id="toggle_category_home">Menu</p>
                              <div class="custom-category-heading">
                                Categories
                              </div>
                              <div
                                class="box-content"
                                id="list_category_style_content"
                                style="display: none"
                              >
                                <ul class="box-category">
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#starters"
                                      class="cat-active"
                                      data-name="Starters"
                                      data-href="#starters"
                                      data-id="409"
                                      >Starters (21)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#soups"
                                      class="cat-active"
                                      data-name="Soups"
                                      data-href="#soups"
                                      data-id="410"
                                      >Soups (1)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#tandoori-main-dishes"
                                      class="cat-active"
                                      data-name="Tandoori Main Dishes"
                                      data-href="#tandoori-main-dishes"
                                      data-id="411"
                                      >Tandoori Main Dishes (7)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#chef-special-dishes"
                                      class="cat-active"
                                      data-name="Chef Special Dishes"
                                      data-href="#chef-special-dishes"
                                      data-id="412"
                                      >Chef Special Dishes (18)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#jalfrezi-dishes"
                                      class="cat-active"
                                      data-name="Jalfrezi Dishes"
                                      data-href="#jalfrezi-dishes"
                                      data-id="413"
                                      >Jalfrezi Dishes (7)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#korai-dishes"
                                      class="cat-active"
                                      data-name="Korai Dishes"
                                      data-href="#korai-dishes"
                                      data-id="414"
                                      >Korai Dishes (6)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#continental-dishes"
                                      class="cat-active"
                                      data-name="Continental Dishes"
                                      data-href="#continental-dishes"
                                      data-id="415"
                                      >Continental Dishes (4)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#saag-dishes"
                                      class="cat-active"
                                      data-name="Saag Dishes"
                                      data-href="#saag-dishes"
                                      data-id="416"
                                      >Saag Dishes (6)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#curry-dishes"
                                      class="cat-active"
                                      data-name="Curry Dishes"
                                      data-href="#curry-dishes"
                                      data-id="417"
                                      >Curry Dishes (6)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#korma-dishes"
                                      class="cat-active"
                                      data-name="Korma Dishes"
                                      data-href="#korma-dishes"
                                      data-id="418"
                                      >Korma Dishes (6)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#bhuna-dishes"
                                      class="cat-active"
                                      data-name="Bhuna Dishes"
                                      data-href="#bhuna-dishes"
                                      data-id="419"
                                      >Bhuna Dishes (6)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#dansak-dishes"
                                      class="cat-active"
                                      data-name="Dansak Dishes"
                                      data-href="#dansak-dishes"
                                      data-id="420"
                                      >Dansak Dishes (6)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#pathia-dishes"
                                      class="cat-active"
                                      data-name="Pathia Dishes"
                                      data-href="#pathia-dishes"
                                      data-id="421"
                                      >Pathia Dishes (6)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#rogan-josh-dishes"
                                      class="cat-active"
                                      data-name="Rogan Josh Dishes"
                                      data-href="#rogan-josh-dishes"
                                      data-id="422"
                                      >Rogan Josh Dishes (5)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#dupiaza-dishes"
                                      class="cat-active"
                                      data-name="Dupiaza Dishes"
                                      data-href="#dupiaza-dishes"
                                      data-id="423"
                                      >Dupiaza Dishes (5)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#madras-dishes"
                                      class="cat-active"
                                      data-name="Madras Dishes"
                                      data-href="#madras-dishes"
                                      data-id="424"
                                      >Madras Dishes (6)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#vindaloo-dishes"
                                      class="cat-active"
                                      data-name="Vindaloo Dishes"
                                      data-href="#vindaloo-dishes"
                                      data-id="425"
                                      >Vindaloo Dishes (6)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#phall-dishes"
                                      class="cat-active"
                                      data-name="Phall Dishes"
                                      data-href="#phall-dishes"
                                      data-id="426"
                                      >Phall Dishes (6)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#balti-dishes"
                                      class="cat-active"
                                      data-name="Balti Dishes"
                                      data-href="#balti-dishes"
                                      data-id="427"
                                      >Balti Dishes (6)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#biryani-dishes"
                                      class="cat-active"
                                      data-name="Biryani Dishes"
                                      data-href="#biryani-dishes"
                                      data-id="428"
                                      >Biryani Dishes (8)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#vegetable-dishes"
                                      class="cat-active"
                                      data-name="Vegetable Dishes"
                                      data-href="#vegetable-dishes"
                                      data-id="429"
                                      >Vegetable Dishes (17)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#sundries"
                                      class="cat-active"
                                      data-name="Sundries"
                                      data-href="#sundries"
                                      data-id="430"
                                      >Sundries (24)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#english-dishes"
                                      class="cat-active"
                                      data-name="English Dishes"
                                      data-href="#english-dishes"
                                      data-id="431"
                                      >English Dishes (10)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#set-meals"
                                      class="cat-active"
                                      data-name="Set Meals"
                                      data-href="#set-meals"
                                      data-id="432"
                                      >Set Meals (3)</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="https://www.123.the-public.co.uk/menu#drinks"
                                      class="cat-active"
                                      data-name="Drinks"
                                      data-href="#drinks"
                                      data-id="434"
                                      >Drinks (8)</a
                                    >
                                  </li>
                                </ul>
                              </div>
                              <div class="responsive_cart">
                                <div id="cart" class="ybccart">
                                  <!-- <a href="http://www.123.the-public.co.uk/index.php?route=checkout/cart"> -->
                                  <a href="checkout/cart">
                                    <h4>My Basket</h4>
                                    <span>My Basket</span>
                                    <div id="basket_icon"></div>
                                    <span class="fix-cart" id="cart-total"
                                      >0 x items | Total: £0.00</span
                                    >
                                  </a>

                                  <!-- Begin ETS customize  -->
                                  <div class="content">
                                    <div class="empty">
                                      Your shopping cart is empty!
                                    </div>
                                  </div>
                                  <!-- End ETS customize -->
                                </div>
                              </div>
                            </div>




                            <!-- <script>
                              $(document).ready(function () {
                                var catname = window.location.hash;
                                $("ul.box-category li").each(function () {
                                  if (catname != "") {
                                    if (
                                      $(this).find("a").attr("data-href") ==
                                      catname
                                    ) {
                                      $(this).find("a").addClass("active");
                                    }
                                  } else {
                                    var cName = "";
                                    if (cName != "") {
                                      if (
                                        $(this).find("a").attr("data-href") ==
                                        "#" + cName
                                      ) {
                                        $(this).find("a").addClass("active");
                                        $("html, body").animate(
                                          {
                                            scrollTop: $("#" + cName).offset()
                                              .top,
                                          },
                                          2000
                                        );
                                      }
                                    }
                                  }
                                });
                                $("#list_category_style_content").hide();
                                $("#toggle_category_home").click(function () {
                                  $("#list_category_style_content").toggle();
                                });
                              });
                            </script> -->






                            <div id="content">
                              <div class="topHead">
                                <h1 style="padding-top: 0; margin-top: 0">
                                  Contact Us
                                </h1>
                              </div>
                              <div class="ybc_information_map">
                                <div class="col-sm-12 default opening_hr">
                                  <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9881.274299130162!2d-0.4721822!3d51.7454979!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x80a7429f09a9e66f!2sA+K+Spices!5e0!3m2!1sen!2suk!4v1471800527223"
                                    width="450"
                                    height="270"
                                    frameborder="0"
                                    style="border: 0"
                                  ></iframe>
                                </div>
                              </div>
                              <div class="leftContent">
                                <form
                                  class="contact-info ets_derection"
                                  action="//maps.google.com/maps"
                                  method="get"
                                  target="_blank"
                                >
                                  <h2>Get Directions</h2>
                                  <div
                                    class="
                                      ybc_custom_form_group
                                      fa fa-crosshairs
                                    "
                                  >
                                    <input
                                      class="ybc_search_location"
                                      style="margin-left: 10px"
                                      placeholder="Enter your location"
                                      type="text"
                                      name="saddr"
                                    />

                                    <input
                                      type="hidden"
                                      name="daddr"
                                      value="HP3 9HH"
                                    />
                                  </div>

                                  <input
                                    class="button ybc_search_location_submit"
                                    style="margin-left: 10px"
                                    type="submit"
                                    value="Get Directions"
                                  />
                                </form>
                                <div class="ybc_addresses_location">
                                  <h2>A.K. Spices-Stage</h2>
                                  <div class="contact-info">
                                    <div class="content">
                                      <p class="etsAddress">
                                        33 Lawn Lane,<br />
                                        Hemel Hempstead<br />HP3 9HH
                                      </p>
                                      <b>Tel:</b>
                                      01442 258 803 <b>Tel 2:</b> 01442 258 354
                                    </div>
                                  </div>
                                  <a class="ybc_logo_contact" href="">
                                    <img
                                      src="https://www.123.the-public.co.uk/image/data/shop-files/A-B/ak-spices/logo-ak.png"
                                      title=""
                                      alt=""
                                    />
                                  </a>
                                </div>
                              </div>
                              <div class="rightContent ybc_information_content">
                                <form
                                  action="https://www.123.the-public.co.uk/index.php?route=information/contact"
                                  method="post"
                                  enctype="multipart/form-data"
                                  id="contact-form"
                                >
                                  <h2>Contact us form</h2>
                                  <div
                                    class="
                                      ybc_custom_form_group
                                      fa fa-user
                                      ybc_custom_form_title
                                    "
                                  >
                                    <select
                                      name="name"
                                      class="large-field"
                                      placeholder="Title"
                                      style="width: 100%; border-radius: 0"
                                    >
                                      <option value="">Title</option>
                                      <option value="Mr.">Mr.</option>
                                      <option value="Mrs.">Mrs.</option>
                                      <option value="Ms.">Ms.</option>
                                      <option value="Miss.">Miss.</option>
                                      <option value="Dr.">Dr.</option>
                                      <option value="Prof.">Prof.</option>
                                    </select>

                                    <!--input type="text" name="name" placeholder="" value="" class="large-field" /-->
                                  </div>
                                  <div
                                    class="
                                      ybc_custom_form_group
                                      ybc_custom_form_firstname
                                    "
                                  >
                                    <input
                                      type="text"
                                      name="firstname"
                                      placeholder="Name"
                                      value=""
                                      class="large-field"
                                    />
                                  </div>
                                  <div
                                    class="
                                      ybc_custom_form_group
                                      fa fa-user
                                      ybc_custom_form_lastname
                                    "
                                  >
                                    <input
                                      type="text"
                                      name="lastname"
                                      placeholder="Surname"
                                      value=""
                                      class="large-field"
                                    />
                                  </div>

                                  <div
                                    class="ybc_custom_form_group fa fa-envelope"
                                  >
                                    <input
                                      type="text"
                                      name="email"
                                      placeholder="Email address"
                                      value=""
                                    />
                                  </div>

                                  <div
                                    class="ybc_custom_form_group fa fa-phone"
                                  >
                                    <input
                                      type="text"
                                      name="phone"
                                      placeholder="Phone number"
                                      value=""
                                    />
                                  </div>
                                  <div
                                    class="
                                      ybc_custom_form_group
                                      fa fa-file-text-o
                                    "
                                  >
                                    <textarea
                                      name="enquiry"
                                      placeholder="Your enquiry"
                                      cols="40"
                                      rows="7"
                                      style="width: 100%; border-radius: 0"
                                    ></textarea>
                                  </div>

                                  <!--
                <tr>
                    <td class="firstTd">Enter the code in the box below:</td>
                    <td><input type="text" name="captcha" value="" /></td>
                </tr>
                
                <tr>
                    <td class="firstTd">
                        <img src="index.php?route=information/contact/captcha" alt="" />
                                            </td>
                </tr>
                -->

                                  <div
                                    class="g-recaptcha"
                                    data-sitekey="6LdztoYUAAAAADmF38E8npHZCjgcpxaYtUACg1kd"
                                  >
                                    <div style="width: 304px; height: 78px">
                                      <div>
                                        <iframe
                                          title="reCAPTCHA"
                                          src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdztoYUAAAAADmF38E8npHZCjgcpxaYtUACg1kd&amp;co=aHR0cHM6Ly93d3cuMTIzLnRoZS1wdWJsaWMuY28udWs6NDQz&amp;hl=en&amp;v=_7Co1fh8iT2hcjvquYJ_3zSP&amp;size=normal&amp;cb=jdkggu8uvue9"
                                          width="304"
                                          height="78"
                                          role="presentation"
                                          name="a-3a11b9acko2v"
                                          frameborder="0"
                                          scrolling="no"
                                          sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"
                                        ></iframe>
                                      </div>
                                      <textarea
                                        id="g-recaptcha-response"
                                        name="g-recaptcha-response"
                                        class="g-recaptcha-response"
                                        style="
                                          width: 250px;
                                          height: 40px;
                                          border: 1px solid rgb(193, 193, 193);
                                          margin: 10px 25px;
                                          padding: 0px;
                                          resize: none;
                                          display: none;
                                        "
                                      ></textarea>
                                    </div>
                                    <iframe style="display: none"></iframe>
                                  </div>
                                  <input
                                    style="width: 100%"
                                    type="submit"
                                    value="submit"
                                    class="
                                      button
                                      ybc_search_location_submit
                                      contact-form-submit
                                    "
                                  />
                                  <!--<p style="margin-top: 10px;">Feilds marked width * are a mandatory feilds</p>-->
                                </form>
                              </div>

                              <!-- Begin ETS customize -->
                              <div class="etsrow spacing2">
                                <div class="col-sm-12 default">
                                  <div class="bot_box_sec">
                                    <div class="bot_box_secInr">
                                      <div class="row">
                                        <div class="col-lg-7 delivary">
                                          <div class="caif_img"></div>
                                          <h2>
                                            For Home Delivery Call us on 01442
                                            258 803
                                          </h2>
                                          <div class="col-sm-5">
                                            <p>You can pay cash or with..</p>
                                          </div>
                                          <div class="sm sm_visa_icon"></div>
                                          <div class="sm icon2"></div>
                                          <div class="sm icon3"></div>
                                          <div class="sm icon4"></div>
                                        </div>
                                        <div class="col-lg-5 discunt">
                                          <div
                                            class="opening_hr_bot"
                                            style="margin-right: 10px"
                                          >
                                            <a href=""><h3></h3></a>
                                            <p>
                                              Click to <a href="">download</a> a
                                              PDF copy of our menu.
                                            </p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <!-- End ETS customize -->

                              <div class="clear"></div>
                            </div>




                            <!-- <script type="text/javascript">
                              $(".contact-form-submit").on(
                                "click",
                                function (e) {
                                  if (grecaptcha.getResponse() == "") {
                                    e.preventDefault();
                                    alert("You can't proceed!");
                                  } else {
                                    $("form#contact-form").submit();
                                  }
                                }
                              );
                            </script>
                             -->
                            
                            
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