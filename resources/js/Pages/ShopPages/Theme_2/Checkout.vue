<template>
  <Head title="Shop name">
    <link rel="stylesheet" href="/css/shoptheme1/stylesheet.css" />
    <link rel="stylesheet" href="/css/shoptheme1/responsive.css" />
    <link rel="stylesheet" href="/css/shoptheme1/responsive1.css" />
    <link rel="stylesheet" href="/css/shoptheme1/accordion.css" />
    <link rel="stylesheet" href="/css/shoptheme1/camera.css" />
    <link rel="stylesheet" href="/css/shoptheme1/fast_order.css" />
    <link rel="stylesheet" href="/css/shoptheme1/font-awesome.css" />
    <link rel="stylesheet" href="/css/shoptheme1/news.css" />
    <link rel="stylesheet" href="/css/shoptheme1/owl.carousel.css" />
    <link rel="stylesheet" href="/css/shoptheme1/topmenu.css" />
    <link rel="stylesheet" href="/css/shoptheme1/ybc-testimonials.css" />
    <link rel="stylesheet" href="/css/shoptheme1/ets_green.css" />
    <link rel="stylesheet" href="/css/shoptheme1/customt2.css" />
    <link rel="stylesheet" href="/css/shoptheme1/stepcheckout.css" />
  </Head>

  <body class="close_shop home lang_en ets_green">
    <UpperShopNav />
    <!-- end conteinner header -->

    <div class="shopStatus shopStatusMobile" style="display: none">
      <div class="shop_close_ets">
        <h2 class="title-close-ets">Sorry we are closed now!</h2>
        <span class="lable-close-ets"
          >We will be opening back at 14:40 Today</span
        >
      </div>
    </div>

    <div class="body_ets">
      <div class="bg_option_header">
        <div class="header_banner_custom_full_width">
          <div class="ets_main_content">
            <div class="fix_ets_main_content">
              <div class="main ets">
                <div id="wrapper" class="relat">
                  <!--div class="top_info">
         <div>
         
                       
            
           
           </div>
           
           <div>
                      
                                     </div>  
         </div -->

                  <div class="ctr"></div>

                  <div class="header_banner">
                    <div class="ybc_wide_banner_fullwidth">
                      <div
                        class="
                          logo-desktop-enable logo-desktop
                          home_logo_table
                          enable_logo_tablet
                        "
                      >
                        <a
                          href="https://www.stationkebabs.co.uk/index.php?route=common/home"
                        >
                          <div class="bg-logo">
                            <img
                              src="https://www.stationkebabs.co.uk/image/data/shop-files/S-T/station-kebab-clackton/logo-100h.png"
                              title="STATION KEBABS CLACTON-ON-SEA"
                              alt="STATION KEBABS CLACTON-ON-SEA"
                            />
                          </div>
                        </a>
                      </div>

                      <div class="timeStore shop_closed">
                        <img
                          src="https://www.stationkebabs.co.uk/image/data/open_close/new_closed.png"
                          width="235"
                          height="145"
                        />
                        <div class="shop_closed_ets">
                          <p class="ybc_open_back">
                            <span>We will be opening back at 14:40 Today</span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- <script type="text/javascript">
                    $(document).ready(function () {
                      if ($(".right .cart input.button").length > 0) {
                        $(".right .cart input.button").remove();
                      }
                      if ($(".right > .cart > div .links").length > 0) {
                        $(".right > .cart > div:first-child").html(
                          $(".right > .cart > div .links").html()
                        );
                      }
                      if ($(".box-product div .cart input.button").length > 0) {
                        $(".box-product div .cart input.button").remove();
                      }
                    });
                  </script> -->

                  <div class="ctr"></div>
                </div>
              </div>
              <!-- main ets-->
            </div>
          </div>
        </div>
        <div id="sang_menu" class="ybc_menu_custom wide_menu_full">
          <div class="ets_main_content">
            <div class="home_menu">
              <!----------------------------------Menu------------------------------------------>

              <LowerShopNav />

              <div class="etswarning main">
                <div class="topnote"><div id="notification"></div></div>
              </div>

              <!----------------------------------End Menu------------------------------------------>

              <div class="ctr"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- bg_option_header -->

      <!-- <script type="text/javascript">
        $(document).ready(function () {
          $(".menu_responsive .btn-navbar").click(function () {
            $(this).parent().parent().find(".mobilemenu ").toggle();
          });
          $(".top_res_click").click(function () {
            $(this).parent().parent().find(".top_res_menu ").toggle();
          });
          $("#res_btlogin2").click(function () {
            $(".login_pop").click();
          });
          $("#toggle-menu").click(function () {
            $("#menu_list_ets").toggle();
          });
        });
      </script> -->

      <div id="wrapper" class="etsWrapper middle_bg_custom body_full_width">
        <div class="ets_main_content">
          <div class="fix_ets_main_content">
            <div class="etsWrapper body_content_sec" style="min-height: 435px">
              <div id="content">
                <!-- route : stepcheckout/checkout -->
                <div class="box list_category_style_1">
                  <p id="toggle_category_home">Menu</p>
                  <div class="custom-category-heading">Categories</div>
                  <div
                    class="box-content"
                    id="list_category_style_content"
                    style="display: none"
                  >
                    <ul class="box-category">
                      <li>
                        <a
                          href="https://www.stationkebabs.co.uk/menu#pizzas"
                          class="cat-active"
                          data-name="PIZZAS"
                          data-href="#pizzas"
                          data-id="1742"
                          >PIZZAS (11)</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.stationkebabs.co.uk/menu#kebabs"
                          class="cat-active"
                          data-name="KEBABS"
                          data-href="#kebabs"
                          data-id="1739"
                          >KEBABS (18)</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.stationkebabs.co.uk/menu#wraps"
                          class="cat-active"
                          data-name="WRAPS"
                          data-href="#wraps"
                          data-id="1740"
                          >WRAPS (5)</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.stationkebabs.co.uk/menu#meal-deals"
                          class="cat-active"
                          data-name="MEAL DEALS"
                          data-href="#meal-deals"
                          data-id="1918"
                          >MEAL DEALS (6)</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.stationkebabs.co.uk/menu#burgers"
                          class="cat-active"
                          data-name="BURGERS"
                          data-href="#burgers"
                          data-id="1741"
                          >BURGERS (8)</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.stationkebabs.co.uk/menu#jacket-potatoes"
                          class="cat-active"
                          data-name="JACKET POTATOES"
                          data-href="#jacket-potatoes"
                          data-id="1743"
                          >JACKET POTATOES (5)</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.stationkebabs.co.uk/menu#starters"
                          class="cat-active"
                          data-name="STARTERS"
                          data-href="#starters"
                          data-id="1744"
                          >STARTERS (12)</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.stationkebabs.co.uk/menu#extras"
                          class="cat-active"
                          data-name="EXTRAS"
                          data-href="#extras"
                          data-id="1745"
                          >EXTRAS (16)</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.stationkebabs.co.uk/menu#desserts"
                          class="cat-active"
                          data-name="DESSERTS"
                          data-href="#desserts"
                          data-id="1746"
                          >DESSERTS (4)</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.stationkebabs.co.uk/menu#pizza-deals"
                          class="cat-active"
                          data-name="PIZZA DEALS"
                          data-href="#pizza-deals"
                          data-id="1747"
                          >PIZZA DEALS (8)</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.stationkebabs.co.uk/menu#kids-meal"
                          class="cat-active"
                          data-name="KIDS MEAL"
                          data-href="#kids-meal"
                          data-id="1749"
                          >KIDS MEAL (5)</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.stationkebabs.co.uk/menu#sauces"
                          class="cat-active"
                          data-name="SAUCES"
                          data-href="#sauces"
                          data-id="1748"
                          >SAUCES (6)</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.stationkebabs.co.uk/menu#drinks"
                          class="cat-active"
                          data-name="DRINKS"
                          data-href="#drinks"
                          data-id="1919"
                          >DRINKS (18)</a
                        >
                      </li>
                    </ul>
                  </div>
                  <div class="responsive_cart">
                    <div id="cart" class="ybccart">
                      <!-- <a href="http://www.stationkebabs.co.uk/index.php?route=checkout/cart"> -->
                      <a href="checkout/cart">
                        <h4>My Basket</h4>
                        <span>My Basket</span>
                        <div id="basket_icon"></div>
                        <span class="fix-cart" id="cart-total"
                          >1 x items | Total: £9.50</span
                        >
                      </a>

                      <!-- Begin ETS customize  -->
                      <div class="content">
                        <div class="mini-cart-info">
                          <table>
                            <tbody>
                              <tr>
                                <td class="image"></td>
                                <td class="name">
                                  CHICKEN SHISH KEBAB
                                  <div></div>
                                </td>
                                <td class="quantity">x&nbsp;1</td>
                                <td class="total">£9.50</td>
                                <td class="remove">
                                  <img
                                    src="catalog/view/theme/default/image/remove-small.png"
                                    alt="Remove"
                                    title="Remove"
                                    onclick="removeCart('13878:YToxOntzOjc6InRvcHBpbmciO2E6MTp7czo0OiJiYXNlIjthOjA6e319fQ==::YTo0OntzOjY6ImlkX2NhdCI7czo0OiIxNzM5IjtzOjc6InJlcXVlc3QiO3M6MDoiIjtzOjk6InNpemVfYmFzZSI7czo0OiIxMzgxIjtzOjg6InRvcHBpbmdzIjthOjM6e2k6MTEyNDthOjE6e2k6MDtzOjU6IjExMjE2Ijt9aToxMTI1O2E6MTp7aTowO3M6NToiMTEyMTkiO31pOjExMjY7YToxOntpOjA7czo1OiIxMTIyOSI7fX19');"
                                  />
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>

                        <div class="mini-cart-total">
                          <table>
                            <tbody>
                              <tr>
                                <td class="right"><b>Sub-Total:</b></td>
                                <td class="right">£9.50</td>
                              </tr>
                              <tr>
                                <td class="right"><b>Total to pay:</b></td>
                                <td class="right">£9.50</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>

                        <div class="checkout">
                          <a
                            href="http://www.stationkebabs.co.uk/index.php?route=checkout/cart&amp;prams=collection"
                            class="checkbut"
                            >View Cart</a
                          >&nbsp;
                          <a
                            href="https://www.stationkebabs.co.uk/index.php?route=stepcheckout/checkout"
                            class="redbutton minimum_ets"
                            >Checkout</a
                          >
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
                        if ($(this).find("a").attr("data-href") == catname) {
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
                                scrollTop: $("#" + cName).offset().top,
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
                <!--
  <h1>Checkout</h1>
-->
                <div class="checkout">
                  <div id="checkout" class="step_1">
                    <div class="checkout-heading">Checkout - step 1/3</div>
                    <div class="checkout-content">
                      <h2
                        data-toggle="tab-login"
                        data-disable="no"
                        class="ybcgeneral title-toggle"
                      >
                        <input
                          type="radio"
                          name="login_radio"
                          id="login_radio"
                          checked="checked"
                        />Log in
                      </h2>
                      <div
                        id="tab-login"
                        class="content-tab"
                        style="display: none; overflow: hidden"
                      >
                        <a class="btnloginwithfacebook" href="#"
                          ><i
                            class="fa fa-facebook-official"
                            aria-hidden="true"
                          ></i>
                          Log in with Facebook</a
                        >
                        <br />
                        <div class="clearfix">
                          <p class="or_login"><b>OR</b></p>
                        </div>
                        <div class="ybc_custom_form_group fa fa-envelope">
                          <input
                            placeholder="Email address"
                            type="text"
                            name="email"
                            value=""
                          />
                        </div>
                        <br />
                        <div class="ybc_custom_form_group fa fa-lock">
                          <input
                            placeholder="Password"
                            type="password"
                            name="password"
                            value=""
                          />
                        </div>
                        <br />
                        <input
                          type="button"
                          value="Log in"
                          id="button-login"
                          class="button"
                        /><br />
                        <br />
                      </div>

                      <h2
                        data-toggle="tab-gest"
                        data-disable="yes"
                        class="ybcgeneral title-toggle guest-h2 title-active"
                        F
                      >
                        <input
                          type="radio"
                          id="guest_radio"
                          name="guest_radio"
                        />Guest checkout
                      </h2>
                      <div
                        id="tab-gest"
                        class="content-tab"
                        style="overflow: hidden; display: block"
                      >
                        <div>
                          <!--  <h2>Your Personal Details</h2> -->
                          <table>
                            <tbody>
                              <tr>
                                <td style="display: none"></td>
                                <td>
                                  <label class="style-select">
                                    <select name="gender">
                                      <option value="">Title</option>
                                      <option value="1">Mr.</option>
                                      <option value="2">Mrs.</option>
                                      <option value="3">Ms.</option>
                                      <option value="4">Miss.</option>
                                      <option value="5">Dr.</option>
                                      <option value="6">Prof.</option>
                                    </select>
                                  </label>
                                </td>
                              </tr>
                              <tr>
                                <td style="display: none">
                                  <span class="required">*</span>
                                </td>
                                <td>
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
                                      class="large-field text-bold change_color"
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
                                      class="large-field text-bold change_color"
                                    />
                                  </div>
                                </td>
                              </tr>

                              <tr>
                                <td style="display: none">
                                  <span class="required">*</span>
                                </td>
                                <td>
                                  <div
                                    class="ybc_custom_form_group fa fa-envelope"
                                  >
                                    <input
                                      type="text"
                                      placeholder="Email address"
                                      name="email"
                                      value=""
                                      class="large-field text-bold change_color"
                                    />
                                  </div>
                                </td>
                              </tr>

                              <tr>
                                <td style="display: none">
                                  <span class="required">*</span>
                                </td>
                                <td>
                                  <div
                                    class="ybc_custom_form_group fa fa-phone"
                                  >
                                    <input
                                      type="text"
                                      placeholder="Phone number"
                                      name="telephone"
                                      value=""
                                      class="large-field text-bold change_color"
                                    />
                                  </div>
                                </td>
                              </tr>

                              <tr>
                                <td style="display: none">&nbsp;</td>
                                <td>
                                  <div class="buttons">
                                    <div class="left">
                                      <input
                                        type="button"
                                        value="Checkout"
                                        id="button-guest"
                                        class="button"
                                      />
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>

                      <h2
                        data-toggle="tab-register"
                        data-disable="yes"
                        class="ybcgeneral title-toggle"
                      >
                        <input
                          type="radio"
                          id="acc_radio"
                          name="acc_radio"
                        />Create an account
                      </h2>
                      <div id="tab-register" class="content-tab">
                        <div class="">
                          <table>
                            <tbody>
                              <tr>
                                <td style="display: none"></td>
                                <td>
                                  <label class="style-select">
                                    <select name="gender">
                                      <option value="">Title</option>
                                      <option value="1">Mr.</option>
                                      <option value="2">Mrs.</option>
                                      <option value="3">Ms.</option>
                                      <option value="4">Miss.</option>
                                      <option value="5">Dr.</option>
                                      <option value="6">Prof.</option>
                                    </select>
                                  </label>
                                </td>
                              </tr>
                              <tr>
                                <td style="display: none">
                                  <span class="required">*</span>
                                </td>
                                <td>
                                  <div
                                    class="
                                      ybc_custom_form_group
                                      ybc_custom_form_firstname
                                    "
                                  >
                                    <input
                                      type="text"
                                      name="firstname"
                                      value=""
                                      class="large-field"
                                      placeholder="Name"
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
                                      value=""
                                      class="large-field"
                                      placeholder="Surname"
                                    />
                                  </div>
                                </td>
                              </tr>

                              <tr>
                                <td style="display: none">
                                  <span class="required">*</span> Email Address:
                                </td>
                                <td>
                                  <div
                                    class="ybc_custom_form_group fa fa-envelope"
                                  >
                                    <input
                                      type="text"
                                      name="email"
                                      value=""
                                      class="large-field"
                                      placeholder="Email address"
                                    />
                                  </div>
                                </td>
                              </tr>

                              <tr>
                                <td style="display: none">
                                  <span class="required">*</span> Telephone:
                                </td>
                                <td>
                                  <div
                                    class="ybc_custom_form_group fa fa-phone"
                                  >
                                    <input
                                      type="text"
                                      name="telephone"
                                      value=""
                                      class="large-field"
                                      placeholder="Phone number"
                                    />
                                  </div>
                                </td>
                              </tr>

                              <tr>
                                <td style="display: none">
                                  <span class="required">*</span> Password:
                                </td>
                                <td>
                                  <div class="ybc_custom_form_group fa fa-lock">
                                    <input
                                      type="password"
                                      name="password"
                                      value=""
                                      class="large-field"
                                      placeholder="Password"
                                    />
                                  </div>
                                </td>
                              </tr>

                              <tr>
                                <td style="display: none">
                                  <span class="required">*</span> Password
                                  Confirm:
                                </td>
                                <td>
                                  <div class="ybc_custom_form_group fa fa-lock">
                                    <input
                                      type="password"
                                      name="confirm"
                                      value=""
                                      class="large-field"
                                      placeholder="Confirm Password"
                                    />
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>

                        <!-- <div class="right">
  <h2>Your Address</h2>
  
  <table>
    <tr>
        <td style="display: none;">Company:</td>
        <td>
        <div class="ybc_custom_form_group fa fa-building">
        <input type="text" name="company" value="" placeholder="Company:" class="large-field" /></td>
        </div>
    </tr>
    
     <div style="display: none;">
          Business Type:<br />
                              <input type="radio" name="customer_group_id" value="1" id="customer_group_id1" checked="checked" />
          <label for="customer_group_id1">Default</label>
          <br />
                          </div>
     
     <tr  id="company-id-display">
        <td style="display: none;"><span id="company-id-required" class="required">*</span> Company ID:</td>
        <td> 
        <div class="ybc_custom_form_group fa fa-building">
        <input type="text" name="company_id" value="" class="large-field" placeholder="Company ID:" /></td>
        </div>
     </tr>
     
     <tr id="tax-id-display">
        <td style="display: none;"><span id="tax-id-required" class="required">*</span> Tax ID:</td>
        <td>
        <div class="ybc_custom_form_group fa fa-money">
        <input type="text" name="tax_id" value="" class="large-field" placeholder="Tax ID:" /></td>
        </div>
     </tr>
    
     <tr>
        <td style="display: none;"><span class="required">*</span> Address line 1:</td>
        <td>
        <div class="ybc_custom_form_group fa fa-map-marker">
        <input type="text" name="address_1" value="" class="large-field" placeholder="Address line 1:" /></td>
        </div>
     </tr>
     
     <tr>
        <td style="display: none;">Address line 2:</td>
        <td>
        <div class="ybc_custom_form_group fa fa-map-marker">
        <input type="text" name="address_2" value="" class="large-field" placeholder="Address line 2:" /></td>
        </div>
     </tr>
     
     <tr>
        <td style="display: none;"><span class="required">*</span> City:</td>
        <td>
        <div class="ybc_custom_form_group fa fa-map-marker">
        <input type="text" name="city" value="" class="large-field" placeholder="City:" /></td>
        </div>
     </tr>
     
     <tr>
        <td style="display: none;"><span id="payment-postcode-required" class="required">*</span> Post Code:</td>
        <td>
        <div class="ybc_custom_form_group fa fa-map-marker">
        <input type="text" name="postcode" value="" class="large-field" placeholder=" Post Code:" /></td>
        </div>
     </tr>
     
     <tr>
        <td style="display: none;"><span class="required">*</span> Country:</td>
        <td>
            <select name="country_id" class="large-field">
              <option value="">Country:</option>
                                          <option value="244">Aaland Islands</option>
                                                        <option value="1">Afghanistan</option>
                                                        <option value="2">Albania</option>
                                                        <option value="3">Algeria</option>
                                                        <option value="4">American Samoa</option>
                                                        <option value="5">Andorra</option>
                                                        <option value="6">Angola</option>
                                                        <option value="7">Anguilla</option>
                                                        <option value="8">Antarctica</option>
                                                        <option value="9">Antigua and Barbuda</option>
                                                        <option value="10">Argentina</option>
                                                        <option value="11">Armenia</option>
                                                        <option value="12">Aruba</option>
                                                        <option value="13">Australia</option>
                                                        <option value="14">Austria</option>
                                                        <option value="15">Azerbaijan</option>
                                                        <option value="16">Bahamas</option>
                                                        <option value="17">Bahrain</option>
                                                        <option value="18">Bangladesh</option>
                                                        <option value="19">Barbados</option>
                                                        <option value="20">Belarus</option>
                                                        <option value="21">Belgium</option>
                                                        <option value="22">Belize</option>
                                                        <option value="23">Benin</option>
                                                        <option value="24">Bermuda</option>
                                                        <option value="25">Bhutan</option>
                                                        <option value="26">Bolivia</option>
                                                        <option value="245">Bonaire, Sint Eustatius and Saba</option>
                                                        <option value="27">Bosnia and Herzegovina</option>
                                                        <option value="28">Botswana</option>
                                                        <option value="29">Bouvet Island</option>
                                                        <option value="30">Brazil</option>
                                                        <option value="31">British Indian Ocean Territory</option>
                                                        <option value="32">Brunei Darussalam</option>
                                                        <option value="33">Bulgaria</option>
                                                        <option value="34">Burkina Faso</option>
                                                        <option value="35">Burundi</option>
                                                        <option value="36">Cambodia</option>
                                                        <option value="37">Cameroon</option>
                                                        <option value="38">Canada</option>
                                                        <option value="251">Canary Islands</option>
                                                        <option value="39">Cape Verde</option>
                                                        <option value="40">Cayman Islands</option>
                                                        <option value="41">Central African Republic</option>
                                                        <option value="42">Chad</option>
                                                        <option value="43">Chile</option>
                                                        <option value="44">China</option>
                                                        <option value="45">Christmas Island</option>
                                                        <option value="46">Cocos (Keeling) Islands</option>
                                                        <option value="47">Colombia</option>
                                                        <option value="48">Comoros</option>
                                                        <option value="49">Congo</option>
                                                        <option value="50">Cook Islands</option>
                                                        <option value="51">Costa Rica</option>
                                                        <option value="52">Cote D'Ivoire</option>
                                                        <option value="53">Croatia</option>
                                                        <option value="54">Cuba</option>
                                                        <option value="246">Curacao</option>
                                                        <option value="55">Cyprus</option>
                                                        <option value="56">Czech Republic</option>
                                                        <option value="237">Democratic Republic of Congo</option>
                                                        <option value="57">Denmark</option>
                                                        <option value="58">Djibouti</option>
                                                        <option value="59">Dominica</option>
                                                        <option value="60">Dominican Republic</option>
                                                        <option value="61">East Timor</option>
                                                        <option value="62">Ecuador</option>
                                                        <option value="63">Egypt</option>
                                                        <option value="64">El Salvador</option>
                                                        <option value="65">Equatorial Guinea</option>
                                                        <option value="66">Eritrea</option>
                                                        <option value="67">Estonia</option>
                                                        <option value="68">Ethiopia</option>
                                                        <option value="69">Falkland Islands (Malvinas)</option>
                                                        <option value="70">Faroe Islands</option>
                                                        <option value="71">Fiji</option>
                                                        <option value="72">Finland</option>
                                                        <option value="74">France, Metropolitan</option>
                                                        <option value="75">French Guiana</option>
                                                        <option value="76">French Polynesia</option>
                                                        <option value="77">French Southern Territories</option>
                                                        <option value="126">FYROM</option>
                                                        <option value="78">Gabon</option>
                                                        <option value="79">Gambia</option>
                                                        <option value="80">Georgia</option>
                                                        <option value="81">Germany</option>
                                                        <option value="82">Ghana</option>
                                                        <option value="83">Gibraltar</option>
                                                        <option value="84">Greece</option>
                                                        <option value="85">Greenland</option>
                                                        <option value="86">Grenada</option>
                                                        <option value="87">Guadeloupe</option>
                                                        <option value="88">Guam</option>
                                                        <option value="89">Guatemala</option>
                                                        <option value="241">Guernsey</option>
                                                        <option value="90">Guinea</option>
                                                        <option value="91">Guinea-Bissau</option>
                                                        <option value="92">Guyana</option>
                                                        <option value="93">Haiti</option>
                                                        <option value="94">Heard and Mc Donald Islands</option>
                                                        <option value="95">Honduras</option>
                                                        <option value="96">Hong Kong</option>
                                                        <option value="97">Hungary</option>
                                                        <option value="98">Iceland</option>
                                                        <option value="99">India</option>
                                                        <option value="100">Indonesia</option>
                                                        <option value="101">Iran (Islamic Republic of)</option>
                                                        <option value="102">Iraq</option>
                                                        <option value="103">Ireland</option>
                                                        <option value="104">Israel</option>
                                                        <option value="105">Italy</option>
                                                        <option value="106">Jamaica</option>
                                                        <option value="107">Japan</option>
                                                        <option value="240">Jersey</option>
                                                        <option value="108">Jordan</option>
                                                        <option value="109">Kazakhstan</option>
                                                        <option value="110">Kenya</option>
                                                        <option value="111">Kiribati</option>
                                                        <option value="113">Korea, Republic of</option>
                                                        <option value="114">Kuwait</option>
                                                        <option value="115">Kyrgyzstan</option>
                                                        <option value="116">Lao People's Democratic Republic</option>
                                                        <option value="117">Latvia</option>
                                                        <option value="118">Lebanon</option>
                                                        <option value="119">Lesotho</option>
                                                        <option value="120">Liberia</option>
                                                        <option value="121">Libyan Arab Jamahiriya</option>
                                                        <option value="122">Liechtenstein</option>
                                                        <option value="123">Lithuania</option>
                                                        <option value="124">Luxembourg</option>
                                                        <option value="125">Macau</option>
                                                        <option value="127">Madagascar</option>
                                                        <option value="128">Malawi</option>
                                                        <option value="129">Malaysia</option>
                                                        <option value="130">Maldives</option>
                                                        <option value="131">Mali</option>
                                                        <option value="132">Malta</option>
                                                        <option value="133">Marshall Islands</option>
                                                        <option value="134">Martinique</option>
                                                        <option value="135">Mauritania</option>
                                                        <option value="136">Mauritius</option>
                                                        <option value="137">Mayotte</option>
                                                        <option value="138">Mexico</option>
                                                        <option value="139">Micronesia, Federated States of</option>
                                                        <option value="140">Moldova, Republic of</option>
                                                        <option value="141">Monaco</option>
                                                        <option value="142">Mongolia</option>
                                                        <option value="242">Montenegro</option>
                                                        <option value="143">Montserrat</option>
                                                        <option value="144">Morocco</option>
                                                        <option value="145">Mozambique</option>
                                                        <option value="146">Myanmar</option>
                                                        <option value="147">Namibia</option>
                                                        <option value="148">Nauru</option>
                                                        <option value="149">Nepal</option>
                                                        <option value="150">Netherlands</option>
                                                        <option value="151">Netherlands Antilles</option>
                                                        <option value="152">New Caledonia</option>
                                                        <option value="153">New Zealand</option>
                                                        <option value="154">Nicaragua</option>
                                                        <option value="155">Niger</option>
                                                        <option value="156">Nigeria</option>
                                                        <option value="157">Niue</option>
                                                        <option value="158">Norfolk Island</option>
                                                        <option value="112">North Korea</option>
                                                        <option value="159">Northern Mariana Islands</option>
                                                        <option value="160">Norway</option>
                                                        <option value="161">Oman</option>
                                                        <option value="162">Pakistan</option>
                                                        <option value="163">Palau</option>
                                                        <option value="247">Palestinian Territory, Occupied</option>
                                                        <option value="164">Panama</option>
                                                        <option value="165">Papua New Guinea</option>
                                                        <option value="166">Paraguay</option>
                                                        <option value="167">Peru</option>
                                                        <option value="168">Philippines</option>
                                                        <option value="169">Pitcairn</option>
                                                        <option value="170">Poland</option>
                                                        <option value="171">Portugal</option>
                                                        <option value="172">Puerto Rico</option>
                                                        <option value="173">Qatar</option>
                                                        <option value="174">Reunion</option>
                                                        <option value="175">Romania</option>
                                                        <option value="176">Russian Federation</option>
                                                        <option value="177">Rwanda</option>
                                                        <option value="178">Saint Kitts and Nevis</option>
                                                        <option value="179">Saint Lucia</option>
                                                        <option value="180">Saint Vincent and the Grenadines</option>
                                                        <option value="181">Samoa</option>
                                                        <option value="182">San Marino</option>
                                                        <option value="183">Sao Tome and Principe</option>
                                                        <option value="184">Saudi Arabia</option>
                                                        <option value="185">Senegal</option>
                                                        <option value="243">Serbia</option>
                                                        <option value="186">Seychelles</option>
                                                        <option value="187">Sierra Leone</option>
                                                        <option value="188">Singapore</option>
                                                        <option value="189">Slovak Republic</option>
                                                        <option value="190">Slovenia</option>
                                                        <option value="191">Solomon Islands</option>
                                                        <option value="192">Somalia</option>
                                                        <option value="193">South Africa</option>
                                                        <option value="194">South Georgia &amp; South Sandwich Islands</option>
                                                        <option value="248">South Sudan</option>
                                                        <option value="195">Spain</option>
                                                        <option value="196">Sri Lanka</option>
                                                        <option value="249">St. Barthelemy</option>
                                                        <option value="197">St. Helena</option>
                                                        <option value="250">St. Martin (French part)</option>
                                                        <option value="198">St. Pierre and Miquelon</option>
                                                        <option value="199">Sudan</option>
                                                        <option value="200">Suriname</option>
                                                        <option value="201">Svalbard and Jan Mayen Islands</option>
                                                        <option value="202">Swaziland</option>
                                                        <option value="203">Sweden</option>
                                                        <option value="204">Switzerland</option>
                                                        <option value="205">Syrian Arab Republic</option>
                                                        <option value="206">Taiwan</option>
                                                        <option value="207">Tajikistan</option>
                                                        <option value="208">Tanzania, United Republic of</option>
                                                        <option value="209">Thailand</option>
                                                        <option value="210">Togo</option>
                                                        <option value="211">Tokelau</option>
                                                        <option value="212">Tonga</option>
                                                        <option value="213">Trinidad and Tobago</option>
                                                        <option value="214">Tunisia</option>
                                                        <option value="215">Turkey</option>
                                                        <option value="216">Turkmenistan</option>
                                                        <option value="217">Turks and Caicos Islands</option>
                                                        <option value="218">Tuvalu</option>
                                                        <option value="219">Uganda</option>
                                                        <option value="220">Ukraine</option>
                                                        <option value="221">United Arab Emirates</option>
                                                        <option value="222" selected="selected">United Kingdom</option>
                                                        <option value="223">United States</option>
                                                        <option value="224">United States Minor Outlying Islands</option>
                                                        <option value="225">Uruguay</option>
                                                        <option value="226">Uzbekistan</option>
                                                        <option value="227">Vanuatu</option>
                                                        <option value="228">Vatican City State (Holy See)</option>
                                                        <option value="229">Venezuela</option>
                                                        <option value="230">Viet Nam</option>
                                                        <option value="231">Virgin Islands (British)</option>
                                                        <option value="232">Virgin Islands (U.S.)</option>
                                                        <option value="233">Wallis and Futuna Islands</option>
                                                        <option value="234">Western Sahara</option>
                                                        <option value="235">Yemen</option>
                                                        <option value="238">Zambia</option>
                                                        <option value="239">Zimbabwe</option>
                                        </select>
        </td>
     </tr>
     
     <tr>
        <td style="display: none;"><span class="required">*</span> Region / State:</td>
        <td>
            <select name="zone_id" class="large-field">
            </select>
        </td>
     </tr>
  </table>

</div> -->
                        <div
                          style="
                            clear: both;
                            padding-top: 15px;
                            border-top: 1px solid #eeeeee;
                          "
                        >
                          <div style="display: none">
                            <input
                              type="checkbox"
                              name="newsletter"
                              value="1"
                              id="newsletter"
                            />
                            <label for="newsletter"
                              >I wish to subscribe to the STATION KEBABS
                              CLACTON-ON-SEA newsletter.</label
                            >
                            <br />
                          </div>
                          <br />
                          <br />
                        </div>
                        <div class="buttons">
                          <div class="u">
                            <input
                              type="button"
                              value="Create"
                              id="button-register"
                              class="button"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="payment-address" class="step_2 stepcheckout">
                    <div class="checkout-heading">
                      Checkout - step 2/3
                      <a>Modify »</a>
                    </div>
                    <div class="checkout-content">
                      <table class="form 1" id="customer" style="display: none">
                        <tbody>
                          <tr>
                            <td>
                              <select name="gender">
                                <option>Title</option>
                                <option value="1">Mr.</option>
                                <option value="2">Mrs.</option>
                                <option value="3">Ms.</option>
                                <option value="4">Miss.</option>
                                <option value="5">Dr.</option>
                                <option value="6">Prof.</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input
                                type="text"
                                name="firstname"
                                placeholder="First Name:"
                                value=""
                                class="large-field"
                              />
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input
                                placeholder="Last Name:"
                                type="text"
                                name="lastname"
                                value=""
                                class="large-field"
                              />
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input
                                placeholder="Email Adress"
                                type="text"
                                name="email"
                                value=""
                                class="large-field"
                              />
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input
                                type="text"
                                placeholder="Telephone"
                                name="telephone"
                                value=""
                                class="large-field"
                              />
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input
                                type="text"
                                placeholder="Mobile"
                                name="fax"
                                value=""
                                class="large-field"
                              />
                            </td>
                          </tr>
                          <input type="hidden" name="email2" value="" />
                        </tbody>
                      </table>
                      <div class="partcheckout">
                        <div class="title-heading">
                          <span>Order Type</span>
                        </div>
                        <div id="order_type_top" class="contentpart">
                          <label
                            ><input
                              class="input-delivery"
                              type="radio"
                              checked="checked"
                              value="2"
                              name="setdelivery"
                            /><span>I will collect my order</span></label
                          >
                          <label
                            ><input
                              class="input-collection"
                              type="radio"
                              value="1"
                              name="setdelivery"
                            /><span>Deliver to my address</span></label
                          >
                          <div id="mindeliveryrequire"></div>
                        </div>
                      </div>
                      <div class="partcheckout">
                        <div class="title-heading">
                          <span
                            class="titlevanchuyen title-delivery"
                            style="display: none"
                            >Delivery Time</span
                          >
                          <span style="" class="titlevanchuyen title-collection"
                            >Collection Time</span
                          >
                        </div>
                        <div class="contentpart">
                          <label class="style-select box-time-select">
                            <select class="time_select" name="time_method">
                              <option id="time_0" value="ASAP">ASAP</option>
                              <option id="time_1" value="17:00-17:15">
                                17:00-17:15
                              </option>
                              <option id="time_2" value="17:15-17:30">
                                17:15-17:30
                              </option>
                              <option id="time_3" value="17:30-17:45">
                                17:30-17:45
                              </option>
                              <option id="time_4" value="17:45-18:00">
                                17:45-18:00
                              </option>
                              <option id="time_5" value="18:00-18:15">
                                18:00-18:15
                              </option>
                              <option id="time_6" value="18:15-18:30">
                                18:15-18:30
                              </option>
                              <option id="time_7" value="18:30-18:45">
                                18:30-18:45
                              </option>
                              <option id="time_8" value="18:45-19:00">
                                18:45-19:00
                              </option>
                              <option id="time_9" value="19:00-19:15">
                                19:00-19:15
                              </option>
                              <option id="time_10" value="19:15-19:30">
                                19:15-19:30
                              </option>
                              <option id="time_11" value="19:30-19:45">
                                19:30-19:45
                              </option>
                              <option id="time_12" value="19:45-20:00">
                                19:45-20:00
                              </option>
                              <option id="time_13" value="20:00-20:15">
                                20:00-20:15
                              </option>
                              <option id="time_14" value="20:15-20:30">
                                20:15-20:30
                              </option>
                              <option id="time_15" value="20:30-20:45">
                                20:30-20:45
                              </option>
                              <option id="time_16" value="20:45-21:00">
                                20:45-21:00
                              </option>
                              <option id="time_17" value="21:00-21:15">
                                21:00-21:15
                              </option>
                              <option id="time_18" value="21:15-21:30">
                                21:15-21:30
                              </option>
                              <option id="time_19" value="21:30-21:45">
                                21:30-21:45
                              </option>
                              <option id="time_20" value="21:45-22:00">
                                21:45-22:00
                              </option>
                              <option id="time_21" value="22:00-22:15">
                                22:00-22:15
                              </option>
                              <option id="time_22" value="22:15-22:30">
                                22:15-22:30
                              </option>
                              <option id="time_23" value="22:30-22:45">
                                22:30-22:45
                              </option>
                              <option id="time_24" value="22:45-23:00">
                                22:45-23:00
                              </option>
                              <option id="time_25" value="23:00-23:15">
                                23:00-23:15
                              </option>
                            </select>
                          </label>
                        </div>
                      </div>

                      <div class="box-delivery-address" style="display: none">
                        <div class="title-heading">
                          <span>Delivery address</span>
                        </div>
                        <div class="add_0 form_add">
                          <input
                            type="hidden"
                            name="payment_address"
                            value="new"
                            id="payment-address-new"
                          />
                          <table class="form 3">
                            <tbody>
                              <tr>
                                <td style="display: none"></td>
                                <td colspan="2">
                                  <div
                                    class="
                                      ybc_custom_form_group
                                      fa fa-map-marker
                                    "
                                  >
                                    <input
                                      placeholder="Address line 1:"
                                      type="text"
                                      name="address_1"
                                      value=""
                                      class="large-field"
                                    />
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td style="display: none"></td>
                                <td colspan="2">
                                  <div
                                    class="
                                      ybc_custom_form_group
                                      fa fa-map-marker
                                    "
                                  >
                                    <input
                                      placeholder="Address line 2:"
                                      type="text"
                                      name="address_2"
                                      value=""
                                      class="large-field"
                                    />
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td style="display: none"></td>
                                <td style="text-align: right">
                                  <div
                                    class="ybc_custom_form_group input-short"
                                  >
                                    <input
                                      placeholder="City:"
                                      type="text"
                                      name="city"
                                      value=""
                                      class="large-field"
                                    />
                                  </div>
                                </td>
                                <td style="text-align: left">
                                  <div
                                    class="
                                      ybc_custom_form_group
                                      input-short
                                      fa fa-map-marker
                                    "
                                  >
                                    <input
                                      placeholder="Post Code:"
                                      type="text"
                                      name="postcode"
                                      value=""
                                      class="large-field"
                                    />
                                  </div>
                                </td>
                              </tr>
                              <!--<tr>
              <td style="display: none"></td>
              
            </tr>-->

                              <tr>
                                <td style="display: none"></td>
                                <td colspan="2">
                                  <div
                                    class="ybc_custom_form_group fa fa-phone"
                                  >
                                    <input
                                      type="text"
                                      placeholder="Phone number"
                                      name="phone"
                                      onkeypress="return NumericValidation(event)"
                                      value=""
                                      class="large-field"
                                    />
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td style="display: none"></td>

                                <td colspan="2">
                                  <div class="ybc_custom_form_group fa fa-road">
                                    <textarea
                                      placeholder="Aditional directions (optional)"
                                      name="company"
                                      onkeypress="return StringValidation(event)"
                                      rows="5"
                                      cols="41"
                                    ></textarea>
                                  </div>
                                </td>
                              </tr>
                              <tr style="display: none">
                                <td>
                                  <span class="required">*</span> Country:
                                </td>
                                <td>
                                  <select name="country_id" class="large-field">
                                    <option value="">
                                      --- Please Select ---
                                    </option>
                                    <option value="244">Aaland Islands</option>
                                    <option value="1">Afghanistan</option>
                                    <option value="2">Albania</option>
                                    <option value="3">Algeria</option>
                                    <option value="4">American Samoa</option>
                                    <option value="5">Andorra</option>
                                    <option value="6">Angola</option>
                                    <option value="7">Anguilla</option>
                                    <option value="8">Antarctica</option>
                                    <option value="9">
                                      Antigua and Barbuda
                                    </option>
                                    <option value="10">Argentina</option>
                                    <option value="11">Armenia</option>
                                    <option value="12">Aruba</option>
                                    <option value="13">Australia</option>
                                    <option value="14">Austria</option>
                                    <option value="15">Azerbaijan</option>
                                    <option value="16">Bahamas</option>
                                    <option value="17">Bahrain</option>
                                    <option value="18">Bangladesh</option>
                                    <option value="19">Barbados</option>
                                    <option value="20">Belarus</option>
                                    <option value="21">Belgium</option>
                                    <option value="22">Belize</option>
                                    <option value="23">Benin</option>
                                    <option value="24">Bermuda</option>
                                    <option value="25">Bhutan</option>
                                    <option value="26">Bolivia</option>
                                    <option value="245">
                                      Bonaire, Sint Eustatius and Saba
                                    </option>
                                    <option value="27">
                                      Bosnia and Herzegovina
                                    </option>
                                    <option value="28">Botswana</option>
                                    <option value="29">Bouvet Island</option>
                                    <option value="30">Brazil</option>
                                    <option value="31">
                                      British Indian Ocean Territory
                                    </option>
                                    <option value="32">
                                      Brunei Darussalam
                                    </option>
                                    <option value="33">Bulgaria</option>
                                    <option value="34">Burkina Faso</option>
                                    <option value="35">Burundi</option>
                                    <option value="36">Cambodia</option>
                                    <option value="37">Cameroon</option>
                                    <option value="38">Canada</option>
                                    <option value="251">Canary Islands</option>
                                    <option value="39">Cape Verde</option>
                                    <option value="40">Cayman Islands</option>
                                    <option value="41">
                                      Central African Republic
                                    </option>
                                    <option value="42">Chad</option>
                                    <option value="43">Chile</option>
                                    <option value="44">China</option>
                                    <option value="45">Christmas Island</option>
                                    <option value="46">
                                      Cocos (Keeling) Islands
                                    </option>
                                    <option value="47">Colombia</option>
                                    <option value="48">Comoros</option>
                                    <option value="49">Congo</option>
                                    <option value="50">Cook Islands</option>
                                    <option value="51">Costa Rica</option>
                                    <option value="52">Cote D'Ivoire</option>
                                    <option value="53">Croatia</option>
                                    <option value="54">Cuba</option>
                                    <option value="246">Curacao</option>
                                    <option value="55">Cyprus</option>
                                    <option value="56">Czech Republic</option>
                                    <option value="237">
                                      Democratic Republic of Congo
                                    </option>
                                    <option value="57">Denmark</option>
                                    <option value="58">Djibouti</option>
                                    <option value="59">Dominica</option>
                                    <option value="60">
                                      Dominican Republic
                                    </option>
                                    <option value="61">East Timor</option>
                                    <option value="62">Ecuador</option>
                                    <option value="63">Egypt</option>
                                    <option value="64">El Salvador</option>
                                    <option value="65">
                                      Equatorial Guinea
                                    </option>
                                    <option value="66">Eritrea</option>
                                    <option value="67">Estonia</option>
                                    <option value="68">Ethiopia</option>
                                    <option value="69">
                                      Falkland Islands (Malvinas)
                                    </option>
                                    <option value="70">Faroe Islands</option>
                                    <option value="71">Fiji</option>
                                    <option value="72">Finland</option>
                                    <option value="74">
                                      France, Metropolitan
                                    </option>
                                    <option value="75">French Guiana</option>
                                    <option value="76">French Polynesia</option>
                                    <option value="77">
                                      French Southern Territories
                                    </option>
                                    <option value="126">FYROM</option>
                                    <option value="78">Gabon</option>
                                    <option value="79">Gambia</option>
                                    <option value="80">Georgia</option>
                                    <option value="81">Germany</option>
                                    <option value="82">Ghana</option>
                                    <option value="83">Gibraltar</option>
                                    <option value="84">Greece</option>
                                    <option value="85">Greenland</option>
                                    <option value="86">Grenada</option>
                                    <option value="87">Guadeloupe</option>
                                    <option value="88">Guam</option>
                                    <option value="89">Guatemala</option>
                                    <option value="241">Guernsey</option>
                                    <option value="90">Guinea</option>
                                    <option value="91">Guinea-Bissau</option>
                                    <option value="92">Guyana</option>
                                    <option value="93">Haiti</option>
                                    <option value="94">
                                      Heard and Mc Donald Islands
                                    </option>
                                    <option value="95">Honduras</option>
                                    <option value="96">Hong Kong</option>
                                    <option value="97">Hungary</option>
                                    <option value="98">Iceland</option>
                                    <option value="99">India</option>
                                    <option value="100">Indonesia</option>
                                    <option value="101">
                                      Iran (Islamic Republic of)
                                    </option>
                                    <option value="102">Iraq</option>
                                    <option value="103">Ireland</option>
                                    <option value="104">Israel</option>
                                    <option value="105">Italy</option>
                                    <option value="106">Jamaica</option>
                                    <option value="107">Japan</option>
                                    <option value="240">Jersey</option>
                                    <option value="108">Jordan</option>
                                    <option value="109">Kazakhstan</option>
                                    <option value="110">Kenya</option>
                                    <option value="111">Kiribati</option>
                                    <option value="113">
                                      Korea, Republic of
                                    </option>
                                    <option value="114">Kuwait</option>
                                    <option value="115">Kyrgyzstan</option>
                                    <option value="116">
                                      Lao People's Democratic Republic
                                    </option>
                                    <option value="117">Latvia</option>
                                    <option value="118">Lebanon</option>
                                    <option value="119">Lesotho</option>
                                    <option value="120">Liberia</option>
                                    <option value="121">
                                      Libyan Arab Jamahiriya
                                    </option>
                                    <option value="122">Liechtenstein</option>
                                    <option value="123">Lithuania</option>
                                    <option value="124">Luxembourg</option>
                                    <option value="125">Macau</option>
                                    <option value="127">Madagascar</option>
                                    <option value="128">Malawi</option>
                                    <option value="129">Malaysia</option>
                                    <option value="130">Maldives</option>
                                    <option value="131">Mali</option>
                                    <option value="132">Malta</option>
                                    <option value="133">
                                      Marshall Islands
                                    </option>
                                    <option value="134">Martinique</option>
                                    <option value="135">Mauritania</option>
                                    <option value="136">Mauritius</option>
                                    <option value="137">Mayotte</option>
                                    <option value="138">Mexico</option>
                                    <option value="139">
                                      Micronesia, Federated States of
                                    </option>
                                    <option value="140">
                                      Moldova, Republic of
                                    </option>
                                    <option value="141">Monaco</option>
                                    <option value="142">Mongolia</option>
                                    <option value="242">Montenegro</option>
                                    <option value="143">Montserrat</option>
                                    <option value="144">Morocco</option>
                                    <option value="145">Mozambique</option>
                                    <option value="146">Myanmar</option>
                                    <option value="147">Namibia</option>
                                    <option value="148">Nauru</option>
                                    <option value="149">Nepal</option>
                                    <option value="150">Netherlands</option>
                                    <option value="151">
                                      Netherlands Antilles
                                    </option>
                                    <option value="152">New Caledonia</option>
                                    <option value="153">New Zealand</option>
                                    <option value="154">Nicaragua</option>
                                    <option value="155">Niger</option>
                                    <option value="156">Nigeria</option>
                                    <option value="157">Niue</option>
                                    <option value="158">Norfolk Island</option>
                                    <option value="112">North Korea</option>
                                    <option value="159">
                                      Northern Mariana Islands
                                    </option>
                                    <option value="160">Norway</option>
                                    <option value="161">Oman</option>
                                    <option value="162">Pakistan</option>
                                    <option value="163">Palau</option>
                                    <option value="247">
                                      Palestinian Territory, Occupied
                                    </option>
                                    <option value="164">Panama</option>
                                    <option value="165">
                                      Papua New Guinea
                                    </option>
                                    <option value="166">Paraguay</option>
                                    <option value="167">Peru</option>
                                    <option value="168">Philippines</option>
                                    <option value="169">Pitcairn</option>
                                    <option value="170">Poland</option>
                                    <option value="171">Portugal</option>
                                    <option value="172">Puerto Rico</option>
                                    <option value="173">Qatar</option>
                                    <option value="174">Reunion</option>
                                    <option value="175">Romania</option>
                                    <option value="176">
                                      Russian Federation
                                    </option>
                                    <option value="177">Rwanda</option>
                                    <option value="178">
                                      Saint Kitts and Nevis
                                    </option>
                                    <option value="179">Saint Lucia</option>
                                    <option value="180">
                                      Saint Vincent and the Grenadines
                                    </option>
                                    <option value="181">Samoa</option>
                                    <option value="182">San Marino</option>
                                    <option value="183">
                                      Sao Tome and Principe
                                    </option>
                                    <option value="184">Saudi Arabia</option>
                                    <option value="185">Senegal</option>
                                    <option value="243">Serbia</option>
                                    <option value="186">Seychelles</option>
                                    <option value="187">Sierra Leone</option>
                                    <option value="188">Singapore</option>
                                    <option value="189">Slovak Republic</option>
                                    <option value="190">Slovenia</option>
                                    <option value="191">Solomon Islands</option>
                                    <option value="192">Somalia</option>
                                    <option value="193">South Africa</option>
                                    <option value="194">
                                      South Georgia &amp; South Sandwich Islands
                                    </option>
                                    <option value="248">South Sudan</option>
                                    <option value="195">Spain</option>
                                    <option value="196">Sri Lanka</option>
                                    <option value="249">St. Barthelemy</option>
                                    <option value="197">St. Helena</option>
                                    <option value="250">
                                      St. Martin (French part)
                                    </option>
                                    <option value="198">
                                      St. Pierre and Miquelon
                                    </option>
                                    <option value="199">Sudan</option>
                                    <option value="200">Suriname</option>
                                    <option value="201">
                                      Svalbard and Jan Mayen Islands
                                    </option>
                                    <option value="202">Swaziland</option>
                                    <option value="203">Sweden</option>
                                    <option value="204">Switzerland</option>
                                    <option value="205">
                                      Syrian Arab Republic
                                    </option>
                                    <option value="206">Taiwan</option>
                                    <option value="207">Tajikistan</option>
                                    <option value="208">
                                      Tanzania, United Republic of
                                    </option>
                                    <option value="209">Thailand</option>
                                    <option value="210">Togo</option>
                                    <option value="211">Tokelau</option>
                                    <option value="212">Tonga</option>
                                    <option value="213">
                                      Trinidad and Tobago
                                    </option>
                                    <option value="214">Tunisia</option>
                                    <option value="215">Turkey</option>
                                    <option value="216">Turkmenistan</option>
                                    <option value="217">
                                      Turks and Caicos Islands
                                    </option>
                                    <option value="218">Tuvalu</option>
                                    <option value="219">Uganda</option>
                                    <option value="220">Ukraine</option>
                                    <option value="221">
                                      United Arab Emirates
                                    </option>
                                    <option value="222" selected="selected">
                                      United Kingdom
                                    </option>
                                    <option value="223">United States</option>
                                    <option value="224">
                                      United States Minor Outlying Islands
                                    </option>
                                    <option value="225">Uruguay</option>
                                    <option value="226">Uzbekistan</option>
                                    <option value="227">Vanuatu</option>
                                    <option value="228">
                                      Vatican City State (Holy See)
                                    </option>
                                    <option value="229">Venezuela</option>
                                    <option value="230">Viet Nam</option>
                                    <option value="231">
                                      Virgin Islands (British)
                                    </option>
                                    <option value="232">
                                      Virgin Islands (U.S.)
                                    </option>
                                    <option value="233">
                                      Wallis and Futuna Islands
                                    </option>
                                    <option value="234">Western Sahara</option>
                                    <option value="235">Yemen</option>
                                    <option value="238">Zambia</option>
                                    <option value="239">Zimbabwe</option>
                                  </select>
                                </td>
                              </tr>
                              <tr style="display: none">
                                <td>
                                  <span class="required">*</span> Region /
                                  State:
                                </td>
                                <td>
                                  <select name="zone_id" class="large-field">
                                    <option selected="selected" value="3513">
                                      Aberdeen
                                    </option>
                                  </select>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <input type="hidden" name="guestaddress" value="1" />
                        </div>
                      </div>

                      <div class="buttons box-action box-action-step2">
                        <div class="backbtn">
                          <input
                            type="button"
                            onclick="$('#payment-address').addClass('stepcheckout');$('#checkout').removeClass('stepcheckout');return false;"
                            value="Back"
                            class="button text-bold change_color"
                          />
                        </div>
                        <div class="right">
                          <input
                            style="text-transform: none"
                            type="button"
                            value="Next"
                            id="button-guest-address"
                            class="button"
                          />
                        </div>
                      </div>

                      <div
                        id="check_postcode"
                        style="display: none"
                        title="Enter Postcode"
                      >
                        <div class="content">
                          "phone"
                          <div style="text-align: center" class="control-group">
                            <div class="controls">
                              <div
                                style="color: red"
                                id="postcodeResponse"
                              ></div>
                              Postal Code<br />
                              <input
                                type="text"
                                onkeyup="jQuery(this).val(jQuery(this).val().toUpperCase());"
                                class="input-xlarge focused"
                                id="your_postcode"
                                name="keyword"
                                value=""
                              />
                            </div>
                          </div>
                          <!--  <div id="postcode_btn" ><a href="javascript:void(0)" id="col" onclick="changemenucard();" >COLLECTION</a><a href="javascript:void(0)" id="sub" onclick="getDeliveryArea()" >DELIVERY</a></div> -->
                        </div>
                      </div>

                      <div
                        id="order_type_warning"
                        style="display: none"
                        title="Warning"
                      >
                        <div class="content">
                          <div style="text-align: center" class="control-group">
                            <div class="controls"></div>
                          </div>
                        </div>
                      </div>

                      <!-- <script>
    function changemenucard(){
        $.ajax({
            url: 'index.php?route=module/minicart/collectionajax', 
    		type: 'post',
    		data: $('#your_postcode'),
    		dataType: 'json', 
            success: function(){
                $('.box-delivery-address').hide();
                $('.title-delivery').hide(); 
                $('.title-collection').show();
                updatetimeselect();
            }
        });
    }
    function changemenucard2(){
        $.ajax({
            url: 'index.php?route=module/minicart/deliveryajax', 
    		type: 'post',
    		data: $('#your_postcode'),
    		dataType: 'json', 
            success: function(){
                $('.box-delivery-address').show(); 
                $('.title-delivery').show(); 
                $('.title-collection').hide();
                updatetimeselect();
            }
        });
    }
    </script> -->
                    </div>
                  </div>
                  <div id="payment-method" class="step_3 stepcheckout">
                    <div class="checkout-heading">Checkout - step 3/3</div>
                    <div class="checkout-content"></div>
                  </div>

                  <div id="confirm" class="step_4 stepcheckout">
                    <div class="checkout-heading">Checkout</div>
                    <div class="checkout-content"></div>
                  </div>
                </div>

                <!-- <script type="text/javascript"> -->
                <!--
                  var ok_popup=false;
                  var handler;
                  $('#checkout .checkout-content input[name=\'account\']').live('change', function() {
                  	if ($(this).attr('value') == 'register') {
                  		$('#payment-address .checkout-heading span').html('Your Details');
                  	} else {
                  		$('#payment-address .checkout-heading span').html('Your Details');
                  	}
                  });

                  $('.checkout-heading a').live('click', function() {
                  	$('.checkout-content').slideUp('slow');

                  	$(this).parent().parent().find('.checkout-content').slideDown('slow');
                  });

                  $('#useloyality').live('click', function() {
                      var loyality = 'no';
                      if($('#useloyality').is(":checked"))
                      {
                          loyality = 'yes';
                      }
                      $.ajax({
                      	url: 'index.php?route=stepcheckout/cart/useloyality&loyality='+loyality,
                      	dataType: 'html',
                      	success: function(html) {

                      	}
                      });
                  });

                  $(document).ready(function() {
                          $('.step_1').toggleClass('stepcheckout');
                  		$.ajax({
                  			url: 'index.php?route=stepcheckout/login',
                  			dataType: 'html',
                  			success: function(html) {
                  				$('#checkout .checkout-content').html(html);

                  				$('#checkout .checkout-content').slideDown('slow');
                  			},
                  			error: function(xhr, ajaxOptions, thrownError) {
                  				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  			}
                  		});
                  });

                  // Login
                  $('#button-login').live('click', function() {
                  	$.ajax({
                  		url: 'index.php?route=stepcheckout/login/validate',
                  		type: 'post',
                  		data: $('#checkout #tab-login :input'),
                  		dataType: 'json',
                  		beforeSend: function() {
                  			$('#button-login').attr('disabled', true);
                  			$('#button-login').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
                  		},
                  		complete: function() {
                  			$('#button-login').attr('disabled', false);
                  			$('.wait').remove();
                  		},
                  		success: function(json) {
                  			$('.warning, .error').remove();

                  			if (json['redirect']) {
                  				location = json['redirect'];
                  			} else if (json['error']) {
                  				$('#checkout .checkout-content').prepend('<div class="warning" style="display: none;">' + json['error']['warning'] + '</div>');

                  				$('.warning').fadeIn('slow');

                                  $('#tab-login input[name=\'email\'],#tab-login input[name=\'password\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                  			}
                              else
                              {
                                  afterLogin();
                                  $('.step_1').toggleClass('stepcheckout');
                                  $('.step_2').toggleClass('stepcheckout');
                                  $.ajax({
                          			url: 'index.php?route=stepcheckout/payment_address',
                          			dataType: 'html',
                          			success: function(html) {
                          				$('#payment-address .checkout-content').html(html);

                          				$('#payment-address .checkout-content').slideDown('slow');
                          			},
                          			error: function(xhr, ajaxOptions, thrownError) {
                          				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                          			}
                          		});
                              }
                  		},
                  		error: function(xhr, ajaxOptions, thrownError) {
                  			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  		}
                  	});
                  });

                  // Register
                  $('#button-register').live('click', function() {
                  	$.ajax({
                  		url: 'index.php?route=stepcheckout/register/validate',
                  		type: 'post',
                  		data: $('#tab-register input[type=\'text\'], #tab-register input[type=\'password\'], #tab-register input[type=\'checkbox\']:checked, #tab-register input[type=\'radio\']:checked, #tab-register input[type=\'hidden\'], #tab-register select'),
                  		dataType: 'json',
                  		beforeSend: function() {
                  			$('#button-register').attr('disabled', true);
                  			$('#button-register').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
                  		},
                  		complete: function() {
                  			$('#button-register').attr('disabled', false);
                  			$('.wait').remove();
                  		},
                  		success: function(json) {
                  			$('.warning, .error').remove();

                  			if (json['redirect']) {
                  				location = json['redirect'];
                  			} else if (json['error']) {
                  				if (json['error']['warning']) {
                  					$('#tab-register .checkout-content').prepend('<div class="warning" style="display: none;">' + json['error']['warning'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');

                  					$('.warning').fadeIn('slow');
                  				     $('.error').click(function(){
                                          $(this).remove();
                                      })
                                  }
                  				if (json['error']['gender']) {
                  					$('#tab-register select[name=\'gender\']').after('<span class="error 2">' + json['error']['gender'] + '</span>');
                  				     $('.error').click(function(){
                                          $(this).remove();
                                      });
                                     $('#tab-register select[name=\'gender\']').addClass('errors');
                                       $( "select" ).hover(function() {
                                              $( this ).removeClass("errors");
                                     });
                                  }
                  				if (json['error']['firstname']) {
                  					$('#tab-register input[name=\'firstname\']').after('<span class="error 4">' + json['error']['firstname'] + '</span>');
                  				     $('.error').click(function(){
                                          $(this).remove();
                                      });
                                     $('#tab-register input[name=\'firstname\']').addClass('errors');
                                     $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['lastname']) {
                  					$('#tab-register input[name=\'lastname\']').after('<span class="error">' + json['error']['lastname'] + '</span>');
                  				     $('.error').click(function(){
                                          $(this).remove();
                                      });
                                      $('#tab-register input[name=\'lastname\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });

                                      }

                  				if (json['error']['email']) {
                  					$('#tab-register input[name=\'email\']').after('<span class="error">' + json['error']['email'] + '</span>');
                  				     $('.error').click(function(){
                                          $(this).remove();
                                      })
                                      $('#tab-register input[name=\'email\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['telephone']) {
                  					$('#tab-register input[name=\'telephone\']').after('<span class="error">' + json['error']['telephone'] + '</span>');
                  			          $('.error').click(function(){
                                          $(this).remove();
                                      });
                                      $('#tab-register input[name=\'telephone\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                              	}

                  				if (json['error']['company_id']) {
                  					$('#tab-register input[name=\'company_id\']').after('<span class="error">' + json['error']['company_id'] + '</span>');
                  				     $('.error').click(function(){
                                          $(this).remove();
                                      })
                                      $('#tab-register input[name=\'company_id\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['tax_id']) {
                  					$('#tab-register input[name=\'tax_id\']').after('<span class="error">' + json['error']['tax_id'] + '</span>');
                  				     $('.error').click(function(){
                                          $(this).remove();
                                      });
                                       $('#tab-register input[name=\'tax_id\']').addClass('errors');
                                       $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['address_1']) {
                  					$('#tab-register input[name=\'address_1\']').after('<span class="error">' + json['error']['address_1'] + '</span>');
                  				     $('.error').click(function(){
                                          $(this).remove();
                                      });
                                       $('#tab-register input[name=\'address_1\']').addClass('errors');
                                       $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['city']) {
                  					$('#tab-register input[name=\'city\']').after('<span class="error">' + json['error']['city'] + '</span>');
                  				     $('.error').click(function(){
                                          $(this).remove();
                                      });
                                       $('#tab-register input[name=\'city\']').addClass('errors');
                                       $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });

                                  }

                  				if (json['error']['postcode']) {
                  					$('#tab-register input[name=\'postcode\']').after('<span class="error s">' + json['error']['postcode'] + '</span>');

                                       $('.error').click(function(){
                                          $(this).remove();
                                      });
                                       $('#tab-register input[name=\'postcode\']').addClass('errors');
                                       $( "input" ).focus(function() {
                                              $( this ).removeClass("errors");
                                          });

                              	}

                  				if (json['error']['country']) {
                  					$('#tab-register select[name=\'country_id\']').after('<span class="error">' + json['error']['country'] + '</span>');
                  				     $('.error').click(function(){
                                          $(this).remove();
                                      });
                                       $('#tab-register select[name=\'country_id\']').addClass('errors');
                                       $( "select" ).hover(function() {
                                              $( this ).removeClass("errors");
                                     });
                                  }

                  				if (json['error']['zone']) {
                  					$('#tab-register select[name=\'zone_id\']').after('<span class="error">' + json['error']['zone'] + '</span>');
                  				    $('#tab-register select[name=\'zone_id\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });

                                  }

                  				if (json['error']['password']) {
                  					$('#tab-register input[name=\'password\']').after('<span class="error">' + json['error']['password'] + '</span>');
                  				     $('#tab-register input[name=\'password\']').addClass('errors');
                                       $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['confirm']) {
                  					$('#tab-register input[name=\'confirm\']').after('<span class="error">' + json['error']['confirm'] + '</span>');
                  				    $('#tab-register input[name=\'confirm\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }
                  			} else {

                  				$.ajax({
                  					url: 'index.php?route=stepcheckout/payment_address',
                  					dataType: 'html',
                  					success: function(html) {
                  						$('#payment-address .checkout-content').html(html);
                                          $('.step_1').toggleClass('stepcheckout');
                                          $('.step_2').toggleClass('stepcheckout');
                  					},
                  					error: function(xhr, ajaxOptions, thrownError) {
                  						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  					}
                  				});

                                  $.ajax({
                  					url: 'index.php?route=stepcheckout/payment_method',
                  					dataType: 'html',
                  					success: function(html) {
                  						$('#payment-method .checkout-content').html(html);
                  					},
                  					error: function(xhr, ajaxOptions, thrownError) {
                  						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  					}
                  				});
                  			}
                  		},
                  		error: function(xhr, ajaxOptions, thrownError) {
                  			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  		}
                  	});
                  });

                  // Payment Address
                  $('#button-payment-address').live('click', function() {

                      //hiep-ets
                      var add_form = $('#change_add').val();
                      var collection=0;var delivery=0;var prams=0;

                      if($('.input-delivery').is(':checked'))
                         collection=$('.input-delivery').val();

                      if($('.input-collection').is(':checked'))
                         delivery=$('.input-collection').val();

                      if(delivery>0)
                          prams=delivery;
                      else
                          prams=collection;

                       //end hiep-ets

                  	$.ajax({
                  		url: 'index.php?route=stepcheckout/payment_address/validate&prams='+prams,
                  		type: 'post',
                  		data: $('#payment-address #customer input, #payment-address select[name="time_method"], #payment-address input[type="radio"]:checked, #payment-address #customer select, #payment-address .add_'+add_form+' input[type=\'text\'], #change_add, #payment-address .add_'+add_form+' textarea, #payment-address .add_'+add_form+' input[type=\'password\'], #payment-address .add_'+add_form+' input[type=\'checkbox\']:checked, #payment-address .add_'+add_form+' input[type=\'radio\']:checked, #payment-address .add_'+add_form+' input[type=\'hidden\'], #payment-address .add_'+add_form+' select'),
                          dataType: 'json',
                  		beforeSend: function() {
                  			$('#button-payment-address').attr('disabled', true);
                  			$('#button-payment-address').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
                  		},
                  		complete: function() {
                  			$('#button-payment-address').attr('disabled', false);
                  			$('.wait').remove();
                  		},
                  		success: function(json) {
                  			$('.warning, .error').remove();

                  			if (json['redirect']) {
                  				location = json['redirect'];
                  			} else if (json['error']) {
                  				if (json['error']['warning']) {
                  					$('#payment-address .checkout-content').prepend('<div class="warning" style="display: none;">' + json['error']['warning'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');

                  					$('.warning').fadeIn('slow');
                  				}
                  				if (json['error']['mindelivery']) {
                  					$('#mindeliveryrequire').html(json['error']['mindelivery']);
                  					$('html, body').animate({
                  						scrollTop: $("#order_type_top").offset().top
                  					}, 2000);
                  				}
                  				if (json['error']['firstname']) {
                  					$('#payment-address input[name=\'firstname\']').after('<span class="error">' + json['error']['firstname'] + '</span>');

                                      $('#payment-address input[name=\'firstname\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });

                                  }

                  				if (json['error']['lastname']) {
                  					$('#payment-address input[name=\'lastname\']').after('<span class="error">' + json['error']['lastname'] + '</span>');
                  			         $('#payment-address input[name=\'lastname\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });

                              	}

                  				if (json['error']['telephone']) {
                  					$('#payment-address input[name=\'telephone\']').after('<span class="error">' + json['error']['telephone'] + '</span>');
                  				    $('#payment-address input[name=\'telephone\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });

                                  }

                  				if (json['error']['company_id']) {
                  					$('#payment-address input[name=\'company_id\']').after('<span class="error">' + json['error']['company_id'] + '</span>');
                  			        $('#payment-address input[name=\'company_id\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                              	}

                  				if (json['error']['tax_id']) {
                  					$('#payment-address input[name=\'tax_id\']').after('<span class="error">' + json['error']['tax_id'] + '</span>');
                  			        $('#payment-address input[name=\'tax_id\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });

                              	}

                  				if (json['error']['address_1']) {
                  					$('#payment-address input[name=\'address_1\']').after('<span class="error">' + json['error']['address_1'] + '</span>');
                  				    $('#payment-address input[name=\'address_1\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });

                                  }

                  				if (json['error']['city']) {
                  					$('#payment-address input[name=\'city\']').after('<span class="error">' + json['error']['city'] + '</span>');
                  				    $('#payment-address input[name=\'city\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });

                                  }

                  				if (json['error']['area']) {
                  					$('#payment-address select[name=\'area\']').after('<span class="error">' + json['error']['area'] + '</span>');
                  				    $('#payment-address select[name=\'area\']').addClass('errors');
                                      $( "select" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });

                                  }

                  				if (json['error']['postcode']) {
                  					$('#payment-address input[name=\'postcode\']').after('<span class="error ss">' + json['error']['postcode'] + '</span>');
                  				      $('.error').click(function(){
                                          $(this).remove();
                                      })
                                      $('#payment-address input[name=\'postcode\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });

                                  }

                  				if (json['error']['country']) {
                  					$('#payment-address select[name=\'country_id\']').after('<span class="error">' + json['error']['country'] + '</span>');
                  				    $('#payment-address select[name=\'country_id\']').addClass('errors');
                                       $( "select" ).hover(function() {
                                          $( this ).removeClass("errors");
                                       });
                                  }

                  				if (json['error']['zone']) {
                  					$('#payment-address select[name=\'zone_id\']').after('<span class="error">' + json['error']['zone'] + '</span>');
                  				    $('#payment-address select[name=\'zone_id\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });

                                  }
                  			} else {


                  				$.ajax({
                  					url: 'index.php?route=stepcheckout/payment_method&prams='+prams,
                  					dataType: 'html',
                  					success: function(html) {
                  					    $('.step_2').toggleClass('stepcheckout');
                  						$('#payment-method .checkout-content').html(html);
                                          $('.step_3').toggleClass('stepcheckout');
                                          /*
                  						$('#payment-address .checkout-content').slideUp('slow');

                  						$('#payment-method .checkout-content').slideDown('slow');

                  						$('#payment-address .checkout-heading a').remove();
                  						$('#payment-method .checkout-heading a').remove();

                  						$('#payment-address .checkout-heading').append('<a>Modify &raquo;</a>');
                                          */
                  					},
                  					error: function(xhr, ajaxOptions, thrownError) {
                  						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  					}
                  				});

                  				$.ajax({
                  					url: 'index.php?route=stepcheckout/payment_address&prams='+prams,
                  					dataType: 'html',
                  					success: function(html) {
                  						$('#payment-address .checkout-content').html(html);
                  					},
                  					error: function(xhr, ajaxOptions, thrownError) {
                  						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  					}
                  				});

                  			}
                  		},
                  		error: function(xhr, ajaxOptions, thrownError) {
                  			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  		}
                  	});
                  });

                  $('#button-guest-address').live('click', function() {
                    var add_form = $('#change_add').val();
                  	$.ajax({
                  		url: 'index.php?route=stepcheckout/guest/validate',
                  		type: 'post',
                  		data: $('.add_0.form_add input, .add_0.form_add textarea,.add_0.form_add select'),
                          dataType: 'json',
                  		beforeSend: function() {
                  			$('#button-guest-address').attr('disabled', true);
                  			$('#button-guest-address').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
                  		},
                  		complete: function() {
                  			$('#button-guest-address').attr('disabled', false);
                  			$('.wait').remove();
                  		},
                  		success: function(json) {
                  			$('.warning, .error').remove();

                  			if (json['redirect']) {
                  				location = json['redirect'];
                  			} else if (json['error']) {
                  				if (json['error']['mindelivery']) {
                  					$('#mindeliveryrequire').html(json['error']['mindelivery']);
                  					$('html, body').animate({
                  						scrollTop: $("#order_type_top").offset().top
                  					}, 2000);
                  				}
                  				if (json['error']['warning']) {
                  					$('#payment-address .checkout-content').prepend('<div class="warning" style="display: none;">' + json['error']['warning'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');
                  					$('.warning').fadeIn('slow');
                  				}
                  				if (json['error']['firstname']) {
                  					$('#payment-address input[name=\'firstname\']').after('<span class="error">' + json['error']['firstname'] + '</span>');
                  				    $('#payment-address input[name=\'firstname\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }
                  				if (json['error']['lastname']) {
                  					$('#payment-address input[name=\'lastname\']').after('<span class="error">' + json['error']['lastname'] + '</span>');
                  				    $('#payment-address input[name=\'lastname\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }
                  				if (json['error']['telephone']) {
                  					$('#payment-address input[name=\'telephone\']').after('<span class="error">' + json['error']['telephone'] + '</span>');
                  			        $('#payment-address input[name=\'telephone\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                              	}
                  				if (json['error']['company_id']) {
                  					$('#payment-address input[name=\'company_id\']').after('<span class="error">' + json['error']['company_id'] + '</span>');
                  			        $('#payment-address input[name=\'company_id\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                              	}
                  				if (json['error']['tax_id']) {
                  					$('#payment-address input[name=\'tax_id\']').after('<span class="error">' + json['error']['tax_id'] + '</span>');
                  			        $('#payment-address input[name=\'tax_id\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                              	}
                  				if (json['error']['address_1']) {
                  					$('#payment-address input[name=\'address_1\']').after('<span class="error">' + json['error']['address_1'] + '</span>');
                  				    $('#payment-address input[name=\'address_1\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }
                  				if (json['error']['city']) {
                  					$('#payment-address input[name=\'city\']').after('<span class="error">' + json['error']['city'] + '</span>');
                  				    $('#payment-address input[name=\'city\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['area']) {
                  					$('#payment-address select[name=\'area\']').after('<span class="error">' + json['error']['area'] + '</span>');
                  				    $('#payment-address select[name=\'area\']').addClass('errors');
                                      $( "select" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });

                                  }

                  				if (json['error']['postcode']) {
                  					$('#payment-address input[name=\'postcode\']').after('<span class="error ds">' + json['error']['postcode'] + '</span>');
                  				      $('.error').click(function(){
                                          $(this).remove();
                                      });
                                      $('#payment-address input[name=\'postcode\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }
                  				if (json['error']['country']) {
                  					$('#payment-address select[name=\'country_id\']').after('<span class="error">' + json['error']['country'] + '</span>');
                  				    $('#payment-address select[name=\'country_id\']').addClass('errors');
                                      $( "select" ).hover(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }
                  				if (json['error']['zone']) {
                  					$('#payment-address select[name=\'zone_id\']').after('<span class="error">' + json['error']['zone'] + '</span>');

                                  }
                  			} else {

                  				$.ajax({
                  					url: 'index.php?route=stepcheckout/payment_method',
                  					dataType: 'html',
                  					success: function(html) {
                  					    $('.step_2').toggleClass('stepcheckout');
                  						$('#payment-method .checkout-content').html(html);
                                          $('.step_3').toggleClass('stepcheckout');
                  					},
                  					error: function(xhr, ajaxOptions, thrownError) {
                  						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  					}
                  				});

                  				$.ajax({
                  					url: 'index.php?route=stepcheckout/payment_address',
                  					dataType: 'html',
                  					success: function(html) {
                  						$('#payment-address .checkout-content').html(html);
                  					},
                  					error: function(xhr, ajaxOptions, thrownError) {
                  						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  					}
                  				});

                  			}
                  		},
                  		error: function(xhr, ajaxOptions, thrownError) {
                  			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  		}
                  	});
                  });
                  // Shipping Address
                  $('#button-shipping-address').live('click', function() {
                  	$.ajax({
                  		url: 'index.php?route=stepcheckout/shipping_address/validate',
                  		type: 'post',
                  		data: $('#shipping-address input[type=\'text\'], #shipping-address input[type=\'password\'], #shipping-address input[type=\'checkbox\']:checked, #shipping-address input[type=\'radio\']:checked, #shipping-address select'),
                  		dataType: 'json',
                  		beforeSend: function() {
                  			$('#button-shipping-address').attr('disabled', true);
                  			$('#button-shipping-address').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
                  		},
                  		complete: function() {
                  			$('#button-shipping-address').attr('disabled', false);
                  			$('.wait').remove();
                  		},
                  		success: function(json) {
                  			$('.warning, .error').remove();

                  			if (json['redirect']) {
                  				location = json['redirect'];
                  			} else if (json['error']) {
                  				if (json['error']['warning']) {
                  					$('#shipping-address .checkout-content').prepend('<div class="warning" style="display: none;">' + json['error']['warning'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');

                  					$('.warning').fadeIn('slow');
                  				}

                  				if (json['error']['firstname']) {
                  					$('#shipping-address input[name=\'firstname\']').after('<span class="error">' + json['error']['firstname'] + '</span>');
                  			        $('#shipping-address input[name=\'firstname\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                              	}

                  				if (json['error']['lastname']) {
                  					$('#shipping-address input[name=\'lastname\']').after('<span class="error">' + json['error']['lastname'] + '</span>');
                  				    $('#shipping-address input[name=\'lastname\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['email']) {
                  					$('#shipping-address input[name=\'email\']').after('<span class="error">' + json['error']['email'] + '</span>');
                  				    $('#shipping-address input[name=\'email\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['telephone']) {
                  					$('#shipping-address input[name=\'telephone\']').after('<span class="error">' + json['error']['telephone'] + '</span>');
                  			        $('#shipping-address input[name=\'telephone\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                              	}

                  				if (json['error']['address_1']) {
                  					$('#shipping-address input[name=\'address_1\']').after('<span class="error">' + json['error']['address_1'] + '</span>');
                  				    $('#shipping-address input[name=\'address_1\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['city']) {
                  					$('#shipping-address input[name=\'city\']').after('<span class="error">' + json['error']['city'] + '</span>');
                  				    $('#shipping-address input[name=\'city\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['postcode']) {
                  					$('#shipping-address input[name=\'postcode\']').after('<span class="error ddd">' + json['error']['postcode'] + '</span>');
                  				      $('.error').click(function(){
                                          $(this).remove();
                                      })
                                      $('#shipping-address input[name=\'postcode\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['country']) {
                  					$('#shipping-address select[name=\'country_id\']').after('<span class="error">' + json['error']['country'] + '</span>');
                  				    $('#shipping-address select[name=\'country_id\']').addClass('errors');
                                      $( "select" ).hover(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['zone']) {
                  					$('#shipping-address select[name=\'zone_id\']').after('<span class="error">' + json['error']['zone'] + '</span>');
                  				    $('#shipping-address select[name=\'zone_id\']').addClass('errors');
                                      $( "select" ).hover(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }
                  			} else {
                  				$.ajax({
                  					url: 'index.php?route=stepcheckout/shipping_method',
                  					dataType: 'html',
                  					success: function(html) {
                  						$('#shipping-method .checkout-content').html(html);

                  						$('#shipping-address .checkout-content').slideUp('slow');

                  						$('#shipping-method .checkout-content').slideDown('slow');

                  						$('#shipping-address .checkout-heading a').remove();
                  						$('#shipping-method .checkout-heading a').remove();
                  						$('#payment-method .checkout-heading a').remove();

                  						$('#shipping-address .checkout-heading').append('<a>Modify &raquo;</a>');

                  						$.ajax({
                  							url: 'index.php?route=stepcheckout/shipping_address',
                  							dataType: 'html',
                  							success: function(html) {
                  								$('#shipping-address .checkout-content').html(html);
                  							},
                  							error: function(xhr, ajaxOptions, thrownError) {
                  								alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  							}
                  						});
                  					},
                  					error: function(xhr, ajaxOptions, thrownError) {
                  						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  					}
                  				});

                  				$.ajax({
                  					url: 'index.php?route=stepcheckout/payment_address',
                  					dataType: 'html',
                  					success: function(html) {
                  						$('#payment-address .checkout-content').html(html);
                  					},
                  					error: function(xhr, ajaxOptions, thrownError) {
                  						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  					}
                  				});
                  			}
                  		},
                  		error: function(xhr, ajaxOptions, thrownError) {
                  			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  		}
                  	});
                  });

                  // Guest
                  $('#button-guest').live('click', function() {
                  	$.ajax({
                  		url: 'index.php?route=stepcheckout/guest/validate',
                  		type: 'post',
                  		data: $('#tab-gest input[type=\'text\'], #tab-gest input[type=\'checkbox\']:checked, #tab-gest input[type=\'radio\']:checked, #tab-gest input[type=\'hidden\'], #tab-gest select'),
                  		dataType: 'json',
                  		beforeSend: function() {
                  			$('#button-guest').attr('disabled', true);
                  			$('#button-guest').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
                  		},
                  		complete: function() {
                  			$('#button-guest').attr('disabled', false);
                  			$('.wait').remove();
                  		},
                  		success: function(json) {
                  			$('.warning, .error').remove();

                  			if (json['redirect']) {
                  				location = json['redirect'];
                  			} else if (json['error']) {
                  				if (json['error']['warning']) {
                  					$('#tab-gest .checkout-content').prepend('<div class="warning" style="display: none;">' + json['error']['warning'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');

                  					$('.warning').fadeIn('slow');
                  				}
                  				if (json['error']['gender']) {
                  					$('#tab-gest select[name=\'gender\']').after('<span class="error">' + json['error']['gender'] + '</span>');
                  				    $('#tab-gest select[name=\'gender\']').addClass('errors');
                                      $( "select" ).hover(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }
                  				if (json['error']['firstname']) {
                  					$('#tab-gest input[name=\'firstname\']').after('<span class="error">' + json['error']['firstname'] + '</span>');
                  			        $('#tab-gest input[name=\'firstname\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                              	}

                  				if (json['error']['lastname']) {
                  					$('#tab-gest input[name=\'lastname\']').after('<span class="error em">' + json['error']['lastname'] + '</span>');
                  				    $('input[name=\'lastname\']').after('<span class="error">' + json['error']['lastname'] + '</span>');
                                      $('#tab-gest input[name=\'lastname\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['email']) {
                  					$('#tab-gest input[name=\'email\']').after('<span class="error">' + json['error']['email'] + '</span>');
                  				    $('#tab-gest input[name=\'email\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['telephone']) {
                  					$('#tab-gest input[name=\'telephone\']').after('<span class="error">' + json['error']['telephone'] + '</span>');
                  				    $('#tab-gest input[name=\'telephone\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['company_id']) {
                  					$('#tab-gest input[name=\'company_id\']').after('<span class="error">' + json['error']['company_id'] + '</span>');
                  				    $('#tab-gest input[name=\'company_id\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['tax_id']) {
                  					$('#tab-gest input[name=\'tax_id\']').after('<span class="error">' + json['error']['tax_id'] + '</span>');
                  				    $('#tab-gest input[name=\'tax_id\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['address_1']) {
                  					$('#tab-gest input[name=\'address_1\']').after('<span class="error">' + json['error']['address_1'] + '</span>');
                  				    $('#tab-gest input[name=\'address_1\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['city']) {
                  					$('#tab-gest input[name=\'city\']').after('<span class="error">' + json['error']['city'] + '</span>');
                  				    $('#tab-gest input[name=\'city\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['postcode']) {
                  					$('#tab-gest input[name=\'postcode\']').after('<span class="error sfdsd">' + json['error']['postcode'] + '</span>');
                  				     $('.error').click(function(){
                                          $(this).remove();
                                      })
                                      $('#tab-gest input[name=\'postcode\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['country']) {
                  					$('#tab-gest select[name=\'country_id\']').after('<span class="error">' + json['error']['country'] + '</span>');
                  			       $('#tab-gest select[name=\'country_id\']').addClass('errors');
                                      $( "select" ).hover(function() {
                                          $( this ).removeClass("errors");
                                      });
                              	}

                  				if (json['error']['zone']) {
                  					$('#tab-gest select[name=\'zone_id\']').after('<span class="error">' + json['error']['zone'] + '</span>');
                  				    $('#tab-gest select[name=\'zone_id\']').addClass('errors');
                                      $( "select" ).hover(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }
                  			} else {
                  								$.ajax({
                  					url: 'index.php?route=stepcheckout/payment_address',
                  					dataType: 'html',
                  					success: function(html) {
                  					   $('.step_1').toggleClass('stepcheckout');
                                          $('.step_2').toggleClass('stepcheckout');
                  						$('#payment-address .checkout-content').html(html);

                  					//	$('#payment-address .checkout-content').slideUp('slow');

                  						//$('#payment-method .checkout-content').slideDown('slow');

                  						$('#payment-address .checkout-heading a').remove();
                  						$('#payment-method .checkout-heading a').remove();

                  						$('#payment-address .checkout-heading').append('<a>Modify &raquo;</a>');
                  					},
                  					error: function(xhr, ajaxOptions, thrownError) {
                  						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  					}
                  				});
                  							}
                  		},
                  		error: function(xhr, ajaxOptions, thrownError) {
                  			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  		}
                  	});
                  });

                  // Guest Shipping
                  $('#button-guest-shipping').live('click', function() {
                  	$.ajax({
                  		url: 'index.php?route=stepcheckout/guest_shipping/validate',
                  		type: 'post',
                  		data: $('#shipping-address input[type=\'text\'], #shipping-address select'),
                  		dataType: 'json',
                  		beforeSend: function() {
                  			$('#button-guest-shipping').attr('disabled', true);
                  			$('#button-guest-shipping').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
                  		},
                  		complete: function() {
                  			$('#button-guest-shipping').attr('disabled', false);
                  			$('.wait').remove();
                  		},
                  		success: function(json) {
                  			$('.warning, .error').remove();

                  			if (json['redirect']) {
                  				location = json['redirect'];
                  			} else if (json['error']) {
                  				if (json['error']['warning']) {
                  					$('#shipping-address .checkout-content').prepend('<div class="warning" style="display: none;">' + json['error']['warning'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');

                  					$('.warning').fadeIn('slow');
                  				}

                  				if (json['error']['firstname']) {
                  					$('#shipping-address input[name=\'firstname\']').after('<span class="error">' + json['error']['firstname'] + '</span>');
                  			        $('#shipping-address input[name=\'firstname\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                              	}

                  				if (json['error']['lastname']) {
                  					$('#shipping-address input[name=\'lastname\']').after('<span class="error">' + json['error']['lastname'] + '</span>');
                  				    $('#shipping-address input[name=\'lastname\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['address_1']) {
                  					$('#shipping-address input[name=\'address_1\']').after('<span class="error">' + json['error']['address_1'] + '</span>');
                  				    $('#shipping-address input[name=\'address_1\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['city']) {
                  					$('#shipping-address input[name=\'city\']').after('<span class="error">' + json['error']['city'] + '</span>');
                  				    $('#shipping-address input[name=\'city\']').addClass('errors');
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['postcode']) {
                  					$('#shipping-address input[name=\'postcode\']').after('<span class="error dfd">' + json['error']['postcode'] + '</span>');
                  			           $('.error').click(function(){
                                          $(this).remove();
                                      });
                                      $('#shipping-address input[name=\'postcode\']')
                                      $( "input" ).focus(function() {
                                          $( this ).removeClass("errors");
                                      });
                              	}

                  				if (json['error']['country']) {
                  					$('#shipping-address select[name=\'country_id\']').after('<span class="error">' + json['error']['country'] + '</span>');
                  				    $('#shipping-address select[name=\'country_id\']').addClass('errors');
                                      $( "select" ).hover(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }

                  				if (json['error']['zone']) {
                  					$('#shipping-address select[name=\'zone_id\']').after('<span class="error">' + json['error']['zone'] + '</span>');
                  				    $('#shipping-address select[name=\'zone_id\']').addClass('errors');
                                      $( "select" ).hover(function() {
                                          $( this ).removeClass("errors");
                                      });
                                  }
                  			} else {
                  				$.ajax({
                  					url: 'index.php?route=stepcheckout/shipping_method',
                  					dataType: 'html',
                  					success: function(html) {
                  						$('#shipping-method .checkout-content').html(html);

                  						$('#shipping-address .checkout-content').slideUp('slow');

                  						$('#shipping-method .checkout-content').slideDown('slow');

                  						$('#shipping-address .checkout-heading a').remove();
                  						$('#shipping-method .checkout-heading a').remove();
                  						$('#payment-method .checkout-heading a').remove();

                  						$('#shipping-address .checkout-heading').append('<a>Modify &raquo;</a>');
                  					},
                  					error: function(xhr, ajaxOptions, thrownError) {
                  						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  					}
                  				});
                  			}
                  		},
                  		error: function(xhr, ajaxOptions, thrownError) {
                  			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  		}
                  	});
                  });

                  $('#button-shipping-method').live('click', function() {
                  	$.ajax({
                  		url: 'index.php?route=stepcheckout/shipping_method/validate',
                  		type: 'post',
                  		data: $('#shipping-method input[type=\'radio\']:checked, #shipping-method textarea'),
                  		dataType: 'json',
                  		beforeSend: function() {
                  			$('#button-shipping-method').attr('disabled', true);
                  			$('#button-shipping-method').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
                  		},
                  		complete: function() {
                  			$('#button-shipping-method').attr('disabled', false);
                  			$('.wait').remove();
                  		},
                  		success: function(json) {
                  			$('.warning, .error').remove();

                  			if (json['redirect']) {
                  				location = json['redirect'];
                  			} else if (json['error']) {
                  				if (json['error']['warning']) {
                  					$('#shipping-method .checkout-content').prepend('<div class="warning" style="display: none;">' + json['error']['warning'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');

                  					$('.warning').fadeIn('slow');
                  				}
                  			} else {
                  				$.ajax({
                  					url: 'index.php?route=stepcheckout/payment_method',
                  					dataType: 'html',
                  					success: function(html) {
                  						$('#payment-method .checkout-content').html(html);

                  						$('#shipping-method .checkout-content').slideUp('slow');

                  						$('#payment-method .checkout-content').slideDown('slow');

                  						$('#shipping-method .checkout-heading a').remove();
                  						$('#payment-method .checkout-heading a').remove();

                  						$('#shipping-method .checkout-heading').append('<a>Modify &raquo;</a>');
                  					},
                  					error: function(xhr, ajaxOptions, thrownError) {
                  						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  					}
                  				});
                  			}
                  		},
                  		error: function(xhr, ajaxOptions, thrownError) {
                  			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  		}
                  	});
                  });

                  $('input[name="shipping_address"]').live('click', function(){
                      var shipping_addresss = $('#billingaddress input[name=\'shipping_address\']:checked').attr('value');
                          if(shipping_addresss)
                          {
                              console.log('check');
                              $('.billing-address').hide();
                          }
                          else
                          {
                              console.log('not check');
                              $('.billing-address').show();
                          }
                  });

                  var selectedPayment = 'cod';
                  $('#button-payment-method').live('click', function() {
                  	var method = $('#payment-method input[type=\'radio\']:checked').val();
                  	if(method == 'stripe') {
                  	$( "#button-confirm" ).trigger( "click" );
                  	}  else {
                       //hiep-ets
                      //handler.open();
                      //setTimeout(function(){ handler.open(); }, 5000);
                      //setInterval(function(){ if(ok_popup) handler.open(); ok_popup=false; }, 500);
                      //handler.open();
                      var collection=0;var delivery=0;var prams=0;
                      if($('.input-delivery').is(':checked'))
                         collection=$('.input-delivery').val();

                      if($('.input-collection').is(':checked'))
                         delivery=$('.input-collection').val();

                      if(delivery>0)
                          prams=delivery;
                      else
                          prams=collection;

                       //end hiep-ets
                  	$.ajax({
                  		url: 'index.php?route=stepcheckout/payment_method/validate&prams='+prams,
                  		type: 'post',
                  		data: $('#payment-method input[type=\'radio\']:checked, #payment-method input[type=\'text\'], #payment-method input[type=\'checkbox\']:checked, #payment-method textarea, #payment-method select'),
                  		dataType: 'json',
                  		beforeSend: function() {
                  			$('#button-payment-method').attr('disabled', true);
                  			//$('#button-payment-method').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
                  		},
                  		complete: function() {
                  			$('#button-payment-method').attr('disabled', true);
                              $('#button-payment-method').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
                  			//$('.wait').remove();

                  		},
                  		success: function(json) {
                  			$('.warning, .error').remove();

                  			if (json['redirect']) {
                  				location = json['redirect'];
                  			} else if (json['error']) {
                  				if (json['error']['warning']) {
                  					$('#payment-method .checkout-content').prepend('<div class="warning" style="display: none;">' + json['error']['warning'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');

                  					$('.warning').fadeIn('slow');
                  				}
                                  if (json['error']['address_1']) {
                  					$('.billing-address input[name=\'address_1\']').after('<span class="error">' + json['error']['address_1'] + '</span>');
                  				}
                                  if (json['error']['city']) {
                  					$('.billing-address input[name=\'city\']').after('<span class="error">' + json['error']['city'] + '</span>');
                  				}
                                  if (json['error']['postcode']) {
                  					$('.billing-address input[name=\'postcode\']').after('<span class="error">' + json['error']['postcode'] + '</span>');
                  				}
                  			} else {

                  				$.ajax({
                  					url: 'index.php?route=stepcheckout/confirm&prams='+prams,
                  					dataType: 'html',
                  					success: function(html) {
                  						$('.step_4 .checkout-content').html(html);
                  						if(method == 'ogone_ecommerce') {
                  							$( "#button-confirm" ).trigger( "click" );
                  						}

                  						else {
                  							$( "#payment" ).submit() ;
                  						}
                  						$('#payment-method .checkout-heading a').remove();
                  						$('#payment-method .checkout-heading').append('<a>Modify &raquo;</a>');
                  					},
                  					error: function(xhr, ajaxOptions, thrownError) {
                  						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                                          $('#button-payment-method').attr('disabled', false);
                                          $('.wait').remove();
                  					}
                  				}).done(function(){

                  							if ($('.payment.right input[type=button]').length>0){
                  								$('.payment.right input[type=button]').trigger("click");
                  							}
                  							else if(jQuery.type($('.payment.right a').attr('href'))==='undefined'){
                  								//$('.payment.right a').trigger('onclick');
                  								//alert('xxxx');
                  								//handler.open();
                  								//ok_popup=true;
                  							}
                  							else{
                  								window.location.href=$('.payment.right a').attr('href');
                  							}


                                    });
                  			}
                  		},
                  		error: function(xhr, ajaxOptions, thrownError) {
                  			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                              $('#button-payment-method').attr('disabled', false);
                  	        $('.wait').remove();
                  		}
                  	});
                  }
                  });

                  $.urlParam = function(name){
                      var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
                      if (results==null){
                         return null;
                      }
                      else{
                         return results[1] || 0;
                      }
                  }
                  //coupon
                  $('#coupon input[type="submit"]').live('click', function(){

                      //hiep-ets
                      var collection=0;var delivery=0;var prams=0;

                      if($('.input-delivery').is(':checked'))
                         collection=$('.input-delivery').val();

                      if($('.input-collection').is(':checked'))
                         delivery=$('.input-collection').val();

                      if(delivery>0)
                          prams=delivery;
                      else
                          prams=collection;
                      //alert($('#coupon form').attr('action')+'&prams='+prams);
                      //end hiep-ets

                      $.ajax({
                  		url: $('#coupon form').attr('action'),
                          type: 'post',
                          data: $('#coupon form input'),
                  		dataType: 'html',
                  		success: function(html) {
                  		    $.ajax({
                          		url: 'index.php?route=stepcheckout/payment_method&prams='+prams,
                          		dataType: 'html',
                          		success: function(html) {
                          			$('#payment-method .checkout-content').html(html);
                          		},
                          		error: function(xhr, ajaxOptions, thrownError) {
                          			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                          		}
                          	});
                  		},
                  		error: function(xhr, ajaxOptions, thrownError) {
                  			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  		}
                  	});
                      return false;
                  });

                  $('#voucher input[type="submit"]').live('click', function(){
                      //hiep-ets
                      var collection=0;var delivery=0;var prams=0;

                      if($('.input-delivery').is(':checked'))
                         collection=$('.input-delivery').val();

                      if($('.input-collection').is(':checked'))
                         delivery=$('.input-collection').val();

                      if(delivery>0)
                          prams=delivery;
                      else
                          prams=collection;
                      //end hiep-ets
                      $.ajax({
                  		url: $('#voucher form').attr('action'),
                          type: 'post',
                          data: $('#voucher form input'),
                  		dataType: 'html',
                  		success: function(html) {
                  		    $.ajax({
                          		url: 'index.php?route=stepcheckout/payment_method&prams='+prams,
                          		dataType: 'html',
                          		success: function(html) {
                          			$('#payment-method .checkout-content').html(html);

                          		},
                          		error: function(xhr, ajaxOptions, thrownError) {
                          			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);

                          		}
                          	});
                  		},
                  		error: function(xhr, ajaxOptions, thrownError) {
                  			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  		}
                  	});
                      return false;
                  });

                  function updatepaymentmethod()
                  {
                      $.ajax({
                  		url: 'index.php?route=stepcheckout/payment_method',
                  		dataType: 'html',
                  		success: function(html) {
                  			$('#payment-method .checkout-content').html(html);
                  		},
                  		error: function(xhr, ajaxOptions, thrownError) {
                  			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  		}
                  	   });
                      $.get('index.php?route=module/cart', function(data){
                          $('.ybccart').replaceWith(data);
                      });
                  }

                  $('#cartdetail .quantity input').live('change', function(){
                      var productchangeqtkey = $(this).attr('data-key');
                      console.log(productchangeqtkey);
                     /** hieu dang lam 30-05-2016 */
                      $.ajax({
                  		url: 'index.php?route=stepcheckout/cart',
                          type: 'post',
                          data: $('#cartdetail .quantity input'),
                  		dataType: 'html',
                          beforeSend: function() {
                  			$('.update_'+productchangeqtkey).addClass('active');
                  		},
                  		complete: function() {
                  		//	$('.update_'+productchangeqtkey).removeClass('updateloadding');
                            //  alert('ok');
                  		},
                  		success: function(html) {
                  			//$('#cartdetail').html(html);
                              updatepaymentmethod();
                  		},
                  		error: function(xhr, ajaxOptions, thrownError) {
                  			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  		}
                  	});
                  });

                  $('.remove_product').live('click', function(){
                      var productchangeqtkey = $(this).attr('data-key');
                      $.ajax({
                  		url: $(this).attr('href'),
                          type: 'get',
                          beforeSend: function() {
                  			$('.update_'+productchangeqtkey).addClass('active');
                  		},
                  		success: function(html) {
                  		      updatepaymentmethod();
                  			//$.ajax({
                      //        		url: 'index.php?route=stepcheckout/cart',
                      //                type: 'get',
                      //        		dataType: 'html',
                      //                beforeSend: function() {
                      //        			$('.update_'+productchangeqtkey).addClass('active');
                      //        		},
                      //        		success: function(html) {
                      //        			$('#cartdetail').html(html);
                      //        		},
                      //        		error: function(xhr, ajaxOptions, thrownError) {
                      //        			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                      //        		}
                      //        	});
                  		},
                  		error: function(xhr, ajaxOptions, thrownError) {
                  			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  		}
                  	});
                      return false;
                  });


                  function quickConfirm(module){
                  	$.ajax({
                  		url: 'index.php?route=stepcheckout/confirm',
                  		dataType: 'html',
                  		success: function(html) {
                  			$('#confirm .checkout-content').html(html);
                  			$('#confirm .checkout-content').slideDown('slow');


                  			$('.checkout-heading a').remove();

                  			$('#checkout .checkout-heading a').remove();
                  			$('#checkout .checkout-heading').append('<a>Modify &raquo;</a>');

                  			$('#shipping-address .checkout-heading a').remove();
                  			$('#shipping-address .checkout-heading').append('<a>Modify &raquo;</a>');

                  			$('#shipping-method .checkout-heading a').remove();
                  			$('#shipping-method .checkout-heading').append('<a>Modify &raquo;</a>');

                  			$('#payment-address .checkout-heading a').remove();
                  			$('#payment-address .checkout-heading').append('<a>Modify &raquo;</a>');

                  			$('#payment-method .checkout-heading a').remove();
                  			$('#payment-method .checkout-heading').append('<a>Modify &raquo;</a>');

                  		},
                  		error: function(xhr, ajaxOptions, thrownError) {
                  			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  		}
                  	});

                  }
                      $(document).ready(function(){
                          $('#order_type_top input').click(function(){
                             if($(this).val() == 2){
                                  changemenucard();
                             } else if($(this).val() == 1){
                                  changemenucard2();
                             };
                          });
                          $('.time_select').change(function(){
                              $.ajax({
                              url: 'index.php?route=stepcheckout/payment_address/settime',
                      		type: 'post',
                      		data: $('.time_select'),
                      		dataType: 'json',
                              success: function(){
                                  //location.reload();
                              }
                          });
                          });
                      });
                      function updatetimeselect()
                      {
                          $.ajax({
                              url: 'index.php?route=stepcheckout/payment_address/gettimeselect',
                      		type: 'get',
                      		data: '',
                      		dataType: 'html',
                              success: function(html){
                                  $('.time_select').html(html);
                              }
                          });
                      }
                      function popuplight(){
                          $( "#check_postcode" ).dialog({
                                  resizable: false,
                                  modal: true,
                                  buttons: {
                                      "Delivery": function() {
                                          getDeliveryArea();
                                      },
                                      "Collection": function() {
                                          changemenucard();
                                      }
                                                      },
                                   close: function() {
                                      location.reload();
                                  }
                         });
                      }
                      function changemenucard(){
                          $.ajax({
                              url: 'index.php?route=module/minicart/collectionajax',
                      		type: 'post',
                      		data: $('#your_postcode'),
                      		dataType: 'json',
                              success: function(){
                                  //location.reload();
                                  updatetimeselect();
                              }
                          });
                      }
                      function changemenucard2(){
                          $.ajax({
                              url: 'index.php?route=module/minicart/deliveryajax',
                      		type: 'post',
                      		data: $('#your_postcode'),
                      		dataType: 'json',
                              success: function(){
                                  //location.reload();
                                  updatetimeselect();
                              }
                          });
                      }
                      function getDeliveryArea(){
                          var keyword = $('#your_postcode').val();
                          $.ajax({
                              url: 'index.php?route=module/minicart/'+ajax_page,
                      		type: 'post',
                      		data: 'keyword='+keyword+'&id_store='+'',
                      		dataType: 'json',
                              success: function(json){
                      			if(json['success'])
                                  {
                                      $('#check_postcode').dialog("close");
                                      location.reload();
                                  }
                                  else if(json['error'])
                                  {
                                      $('#check_postcode #postcodeResponse').html(json['error']);
                                  }
                      		},
                          });
                      }
                  //-->
                <!-- </script> -->

                <div class="clear"></div>
              </div>
              <!--------------end main------------------>
            </div>
          </div>
        </div>
      </div>

      <Footer />
      <!--end ets body-->

      <div id="sticker">
        <span class="sticky-icon"
          >you can use your same login details wherever you see this logo.</span
        >
      </div>

      <!-- <script type="text/javascript">
        $(document).ready(function () {
          var containerheight = $(".etsWrapper.middle_bg_custom").height();
          var windowheight = $(window).height();
          var header = $(".bg_option_header").height();
          var footer = $(".bg_custom_footer").height();
          var topmenu = $(".ets_main_content_top").height();
          var height = windowheight - header - footer - topmenu;

          if (containerheight < height)
            $(".middle_bg_custom .fix_ets_main_content .etsWrapper").css(
              "min-height",
              height
            );
        });
        $(window).on("resize", function () {
          var win = $(this);
          var containerheight = $(".etsWrapper.middle_bg_custom").height();
          var windowheight = win.height();
          var header = $(".bg_option_header").height();
          var footer = $(".bg_custom_footer").height();
          var topmenu = $(".ets_main_content_top").height();
          var height = windowheight - header - footer - topmenu;

          if (containerheight < height)
            $(".middle_bg_custom .fix_ets_main_content .etsWrapper").css(
              "min-height",
              height
            );
        });
      </script> -->

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
import LowerShopNav from "@/Components/LowerShopNav.vue";
import Footer from "@/Components/Footer.vue";

export default {
  name: "Home",

  components: {
    Head,
    Link,
    UpperShopNav,
    LowerShopNav,
    Footer,
  },
};
</script>

<style>
.stepcheckout {
  display: none;
}
#button-payment-method:disabled {
  background: #d2d2d2;
  color: #3e3e3e;
}
</style>