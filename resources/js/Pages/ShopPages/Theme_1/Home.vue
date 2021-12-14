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
    <link rel="stylesheet" href="/css/shoptheme1/ets_green.css" />
  </Head>

  <div class="home lang_en ets_green">
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
                  <Banner :shop-logo='shopLogo' :shop-open="shopOpen"/>

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

                  <div class="ecslideshow s" style="width: 100%; height: ">
                    <div
                      class="camera_wrap camera_azure_skin"
                      id="ecslideshow0"
                      style="display: block; height: 400px; margin-bottom: 0px"
                    >
                      <div class="camera_fakehover">
                        <div class="camera_src camerastarted">
                          <div
                            data-thumb="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-3-80x80.jpg"
                            data-src="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-3-550x400.jpg"
                            data-link=""
                          >
                            <!--
 					<div class="fadeIn camera_effected" style="position:absolute;">The text of your html element</div>-->
                          </div>
                          <div
                            data-thumb="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-1-80x80.jpg"
                            data-src="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-1-550x400.jpg"
                            data-link=""
                          >
                            <!--
 					<div class="fadeIn camera_effected" style="position:absolute;">The text of your html element</div>-->
                          </div>
                          <div
                            data-thumb="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-2-80x80.jpg"
                            data-src="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-2-550x400.jpg"
                            data-link=""
                          >
                            <!--
 					<div class="fadeIn camera_effected" style="position:absolute;">The text of your html element</div>-->
                          </div>
                          <div
                            data-thumb="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-4-80x80.jpg"
                            data-src="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-4-550x400.jpg"
                            data-link=""
                          >
                            <!--
 					<div class="fadeIn camera_effected" style="position:absolute;">The text of your html element</div>-->
                          </div>
                          <div
                            data-thumb="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-6-80x80.jpg"
                            data-src="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-6-550x400.jpg"
                            data-link=""
                          >
                            <!--
 					<div class="fadeIn camera_effected" style="position:absolute;">The text of your html element</div>-->
                          </div>
                          <div
                            data-thumb="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-5-80x80.jpg"
                            data-src="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-5-550x400.jpg"
                            data-link=""
                          >
                            <!--
 					<div class="fadeIn camera_effected" style="position:absolute;">The text of your html element</div>-->
                          </div>
                        </div>
                        <div class="camera_target">
                          <div class="cameraCont">
                            <div
                              class="cameraSlide cameraSlide_0"
                              style="
                                visibility: visible;
                                display: none;
                                z-index: 1;
                              "
                            >
                              <img
                                src="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-3-550x400.jpg?1637510230762"
                                class="imgLoaded"
                                style="
                                  visibility: visible;
                                  height: 440px;
                                  margin-left: 0px;
                                  margin-right: 0px;
                                  margin-top: -20px;
                                  position: absolute;
                                  width: 605px;
                                "
                                data-alignment=""
                                data-portrait=""
                                width="550"
                                height="400"
                              />
                              <div
                                class="camerarelative"
                                style="width: 605px; height: 400px"
                              ></div>
                            </div>
                            <div
                              class="cameraSlide cameraSlide_1"
                              style="display: none; z-index: 1"
                            >
                              <img
                                src="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-1-550x400.jpg?1637510232046"
                                class="imgLoaded"
                                data-alignment=""
                                data-portrait=""
                                width="550"
                                height="400"
                                style="
                                  visibility: visible;
                                  height: 440px;
                                  margin-left: 0px;
                                  margin-right: 0px;
                                  margin-top: -20px;
                                  position: absolute;
                                  width: 605px;
                                "
                              />
                              <div
                                class="camerarelative"
                                style="width: 605px; height: 400px"
                              ></div>
                            </div>
                            <div
                              class="cameraSlide cameraSlide_2"
                              style="
                                display: none;
                                z-index: 1;
                                margin-left: 0px;
                                margin-top: 0px;
                              "
                            >
                              <img
                                src="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-2-550x400.jpg?1637510355570"
                                class="imgLoaded"
                                data-alignment=""
                                data-portrait=""
                                width="550"
                                height="400"
                                style="
                                  visibility: visible;
                                  height: 440px;
                                  margin-left: 0px;
                                  margin-right: 0px;
                                  margin-top: -20px;
                                  position: absolute;
                                  width: 605px;
                                "
                              />
                              <div
                                class="camerarelative"
                                style="width: 605px; height: 400px"
                              ></div>
                            </div>
                            <div
                              class="cameraSlide cameraSlide_3"
                              style="
                                display: none;
                                z-index: 1;
                                margin-left: 0px;
                                margin-top: 0px;
                              "
                            >
                              <img
                                src="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-4-550x400.jpg?1637510374300"
                                class="imgLoaded"
                                data-alignment=""
                                data-portrait=""
                                width="550"
                                height="400"
                                style="
                                  visibility: visible;
                                  height: 440px;
                                  margin-left: 0px;
                                  margin-right: 0px;
                                  margin-top: -20px;
                                  position: absolute;
                                  width: 605px;
                                "
                              />
                              <div
                                class="camerarelative"
                                style="width: 605px; height: 400px"
                              ></div>
                            </div>
                            <div
                              class="cameraSlide cameraSlide_4 cameracurrent"
                              style="
                                display: block;
                                z-index: 999;
                                margin-left: 0px;
                                margin-top: 0px;
                              "
                            >
                              <img
                                src="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-6-550x400.jpg?1637510385126"
                                class="imgLoaded"
                                data-alignment=""
                                data-portrait=""
                                width="550"
                                height="400"
                                style="
                                  visibility: visible;
                                  height: 440px;
                                  margin-left: 0px;
                                  margin-right: 0px;
                                  margin-top: -20px;
                                  position: absolute;
                                  width: 605px;
                                "
                              />
                              <div
                                class="camerarelative"
                                style="width: 605px; height: 400px"
                              ></div>
                            </div>
                            <div
                              class="cameraSlide cameraSlide_5 cameranext"
                              style="display: none; z-index: 1"
                            >
                              <img
                                src="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-5-550x400.jpg?1637510395743"
                                class="imgLoaded"
                                data-alignment=""
                                data-portrait=""
                                width="550"
                                height="400"
                                style="
                                  visibility: visible;
                                  height: 440px;
                                  margin-left: 0px;
                                  margin-right: 0px;
                                  margin-top: -20px;
                                  position: absolute;
                                  width: 605px;
                                "
                              />
                              <div
                                class="camerarelative"
                                style="width: 605px; height: 400px"
                              ></div>
                            </div>
                            <div
                              class="cameraSlide cameraSlide_6 cameranext"
                              style="z-index: 1; display: none"
                            >
                              <div
                                class="camerarelative"
                                style="width: 605px; height: 400px"
                              ></div>
                            </div>
                          </div>
                        </div>
                        <div class="camera_overlayer"></div>
                        <div class="camera_target_content">
                          <div class="cameraContents">
                            <div
                              class="cameraContent"
                              style="display: none"
                            ></div>
                            <div
                              class="cameraContent"
                              style="display: none"
                            ></div>
                            <div
                              class="cameraContent"
                              style="display: none"
                            ></div>
                            <div
                              class="cameraContent"
                              style="display: none"
                            ></div>
                            <div
                              class="cameraContent cameracurrent"
                              style="display: block"
                            ></div>
                            <div
                              class="cameraContent"
                              style="display: none"
                            ></div>
                          </div>
                        </div>
                        <div class="camera_pie">
                          <canvas
                            id="pie_0"
                            width="38"
                            height="38"
                            style="
                              position: absolute;
                              z-index: 1002;
                              right: 0px;
                              top: 0px;
                              opacity: 0.8;
                              display: block;
                            "
                          ></canvas>
                        </div>
                      </div>
                      <div>
                        <div class="camera_thumbs">
                          <div>
                            <div class="camera_command_wrap">
                              <div class="camera_prevThumbs hideNav">
                                <div></div>
                              </div>
                              <div class="camera_nextThumbs"><div></div></div>
                              <div
                                class="camera_thumbs_cont"
                                style="visibility: visible"
                              >
                                <div>
                                  <ul
                                    style="
                                      width: 480px;
                                      margin-left: auto;
                                      margin-right: auto;
                                      margin-top: 0px;
                                    "
                                  >
                                    <li
                                      class="
                                        pix_thumb pix_thumb_0
                                        camera_visThumb
                                      "
                                      style=""
                                    >
                                      <img
                                        src="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-3-80x80.jpg"
                                        class="camera_thumb"
                                        style="opacity: 0.5"
                                      />
                                    </li>
                                    <li
                                      class="
                                        pix_thumb pix_thumb_1
                                        camera_visThumb
                                      "
                                      style=""
                                    >
                                      <img
                                        src="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-1-80x80.jpg"
                                        class="camera_thumb"
                                        style="opacity: 0.5"
                                      />
                                    </li>
                                    <li
                                      class="
                                        pix_thumb pix_thumb_2
                                        camera_visThumb
                                      "
                                      style=""
                                    >
                                      <img
                                        src="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-2-80x80.jpg"
                                        class="camera_thumb"
                                        style="opacity: 0.5"
                                      />
                                    </li>
                                    <li
                                      class="
                                        pix_thumb pix_thumb_3
                                        camera_visThumb
                                      "
                                      style=""
                                    >
                                      <img
                                        src="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-4-80x80.jpg"
                                        class="camera_thumb"
                                        style="opacity: 0.5"
                                      />
                                    </li>
                                    <li
                                      class="
                                        pix_thumb pix_thumb_4
                                        cameracurrent
                                        camera_visThumb
                                      "
                                      style=""
                                    >
                                      <img
                                        src="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-6-80x80.jpg"
                                        class="camera_thumb"
                                        style="opacity: 1"
                                      />
                                    </li>
                                    <li
                                      class="
                                        pix_thumb pix_thumb_5
                                        camera_visThumb
                                      "
                                      style=""
                                    >
                                      <img
                                        src="https://www.123.the-public.co.uk/image/cache/data/shop-files/A-B/Balti-Village-AL5/slide-5-80x80.jpg"
                                        class="camera_thumb"
                                        style="opacity: 0.5"
                                      />
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="camera_loader"
                        style="display: none; visibility: visible"
                      ></div>
                    </div>
                    <div class="find">
                      <!-- by YourBestCode.Com -->

                      <div class="store_search">
                        <div id="store_search_div">
                          <div class="hungry">
                            <p>Hungry?</p>
                          </div>
                          <ul class="searchFullScreen">
                            <span>Start here...</span>
                            <li class="searchBox">
                              <input
                                id="search_input"
                                placeholder="eg. HP3 1AA"
                                style=""
                                type="text"
                                value=""
                                class="ui-autocomplete-input"
                                autocomplete="off"
                                role="textbox"
                                aria-autocomplete="list"
                                aria-haspopup="true"
                              />
                              <img
                                id="loading_icon"
                                src="image/ajax-loader-small.gif"
                                height="16"
                                width="16"
                                alt="loading"
                                title="loading"
                              />
                            </li>

                            <li class="enter_postcode">
                              <p>
                                Please enter your postcode to view our menu and
                                place an order
                              </p>
                            </li>
                            <li class="submit_code">
                              <div class="button_content">
                                <button class="collection_button">
                                  Collection
                                </button>
                                <button class="delivery_button">
                                  Delivery
                                </button>
                              </div>
                            </li>
                          </ul>

                          <ul class="searchRes">
                            <span>Start here...</span>
                            <li class="searchBox">
                              <input
                                id="search_input"
                                placeholder="eg. HP3 1AA"
                                style=""
                                type="text"
                                value=""
                              />
                              <img
                                id="loading_icon"
                                src="image/ajax-loader-small.gif"
                                height="16"
                                width="16"
                                alt="loading"
                                title="loading"
                              />
                            </li>

                            <li class="enter_postcode">
                              <p>
                                Please enter your postcode to view our menu and
                                place an order
                              </p>
                            </li>
                            <li class="submit_code">
                              <button class="collection_button">
                                Collection
                              </button>
                              <button class="delivery_button">Delivery</button>
                            </li>
                          </ul>

                          <div class="payment-logo">
                            <!-- /image/paymentlogo.png -->
                            <img
                              class="cod_pay"
                              src="catalog/view/theme/modern/image/cod_pay.png"
                            />
                            <img
                              class="paypal_pay"
                              src="catalog/view/theme/modern/image/paypal_pay_or.png"
                            />
                          </div>
                        </div>
                      </div>

                      <!-- End by YourBestCode.Com -->
                    </div>
                    <br class="clear clr" />
                  </div>
                  <div style="display: none" id="search_result"></div>

                  <div class="custom-row-start" style="width: 100%">
                    <div
                      class="box box_section custom-col-12 ybctablet ybcmobile"
                      style="padding: 10px !important"
                      data-box="12"
                    >
                      <div
                        class="box-content ybc_content htmlcontent"
                        style="
                          background-size: cover;
                          background-position: top;
                          background-attachment: fixed;
                        "
                      >
                        <div class="inner_box_section">
                          <div class="inner_box_table_cell verticle-top">
                            <h1 style="text-align: center">
                              WELCOME TO A.K. SPICES
                            </h1>

                            <p style="text-align: justify">&nbsp;</p>

                            <p style="text-align: justify">
                              Do you feel like ordering in? Are you too tired to
                              dress up and go out for dinner? Well, there is no
                              problem at all because A.K. Spices is here to
                              cater for you right at your home. Are you
                              wondering what kind of food we
                              <em>can</em> deliver? Everything; from Fast Food
                              to proper meals; you get everything when you order
                              your dinner at A.K. Spices.
                            </p>

                            <p style="text-align: justify">&nbsp;</p>

                            <p style="text-align: justify">
                              Our lavish and delicious menu includes tasty
                              dishes like Curry, Korma, Biryani, English
                              Foods..etc Can it get any easier than this? We
                              don’t think so. So next time you feel like
                              ordering ANYTHING to eat while you sit back and
                              relax at home, think of A.K. Spices!
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- custom-row end -->
                  </div>

                  <div class="custom-row-start" style="width: 100%">
                    <div
                      class="box box_section custom-col-4 ybctablet ybcmobile"
                      style="padding: 10px !important; background: #ffffff"
                      data-box="4"
                    >
                      <div
                        class="box-content ybc_content htmlcontent"
                        style="
                          border: 1px solid #b2b2b2;
                          box-shadow: 0 3px 9px #ccc;
                          background-size: cover;
                          background-position: top;
                          background-attachment: fixed;
                        "
                      >
                        <div class="inner_box_section">
                          <div class="inner_box_table_cell verticle-top">
                            <div style="height: 250px">
                              <p style="text-align: center">
                                <strong
                                  ><span style="font-size: 20px"
                                    >10% DISCOUNT</span
                                  ></strong
                                >
                              </p>

                              <p style="text-align: center">
                                <br />
                                <img
                                  src="/image/data/icons/brown/10_discount.png"
                                />
                              </p>

                              <p style="text-align: center">
                                Get 10% discount on your<br />
                                first online order.
                              </p>

                              <p style="text-align: center">&nbsp;</p>

                              <p style="text-align: center">
                                &nbsp;
                                <strong>Use Coupon Code:</strong> WELCOME10
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="box box_section custom-col-4 ybctablet ybcmobile"
                      style="padding: 10px !important; background: #ffffff"
                      data-box="8"
                    >
                      <div
                        class="box-content ybc_content htmlcontent"
                        style="
                          border: 1px solid #b2b2b2;
                          border-radius: 0px;
                          box-shadow: 0 3px 9px #ccc;
                          background-size: cover;
                          background-position: top;
                          background-attachment: fixed;
                        "
                      >
                        <div class="inner_box_section">
                          <div class="inner_box_table_cell verticle-top">
                            <div style="height: 250px">
                              <p style="text-align: center">
                                <strong
                                  ><span style="font-size: 20px"
                                    >DOWNLOAD OUR MENU</span
                                  ></strong
                                >
                              </p>

                              <p style="text-align: center">
                                <br />
                                <img
                                  src="/image/data/icons/brown/menu_download.png"
                                /><br />
                                <br />
                                Click to download a PDF copy of<br />
                                our menu.<br />
                                <br />
                                <a href="##">Download File</a>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="box box_section custom-col-4 ybctablet ybcmobile"
                      style="padding: 10px !important; background: #ffffff"
                      data-box="12"
                    >
                      <div
                        class="box-content ybc_content htmlcontent"
                        style="
                          border: 1px solid #b2b2b2;
                          border-radius: 0px;
                          box-shadow: 0 3px 9px #ccc;
                          background-size: cover;
                          background-position: top;
                          background-attachment: fixed;
                        "
                      >
                        <div class="inner_box_section">
                          <div class="inner_box_table_cell verticle-top">
                            <div style="height: 250px">
                              <p style="text-align: center">
                                <span style="font-size: 20px"
                                  ><strong>OPENING HOURS</strong></span
                                >
                              </p>

                              <p style="text-align: center">
                                <br />
                                <img
                                  src="/image/data/icons/brown/opening_times.png"
                                /><br />
                                <br />
                                <strong>OPEN 7 DAYS A WEEK</strong>
                              </p>

                              <p style="text-align: center">17:00 to 23:00</p>

                              <p style="text-align: center">&nbsp;</p>

                              <p style="text-align: center">
                                <br />
                                <strong>Last orders at 22:45</strong>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- custom-row end -->
                  </div>

                  <div class="custom-row-start" style="width: 100%">
                    <div
                      class="box box_section custom-col-6 ybctablet ybcmobile"
                      style="padding: 10px !important; background: #ffffff"
                      data-box="6"
                    >
                      <div
                        class="box-content ybc_content htmlcontent"
                        style="
                          border: 1px solid #b2b2b2;
                          border-radius: 10px;
                          box-shadow: 0 0px 4px #b2b2b2;
                          background-size: cover;
                          background-position: top;
                          background-attachment: fixed;
                        "
                      >
                        <div class="inner_box_section">
                          <div class="inner_box_table_cell verticle-top">
                            <table
                              align="center"
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              style="height: 90px; width: 100%"
                            >
                              <tbody>
                                <tr>
                                  <td style="vertical-align: middle">
                                    <p><strong>&nbsp;&nbsp; </strong></p>

                                    <p>&nbsp;</p>

                                    <p>
                                      <strong
                                        >&nbsp; CREDIT CARDS ACCEPTED</strong
                                      >
                                    </p>

                                    <p>&nbsp;</p>

                                    <p>&nbsp;</p>
                                  </td>
                                  <td style="vertical-align: middle">
                                    <img
                                      src="https://www.myfoodbasket.co.uk/image/data/icons/credit_cards.jpg"
                                    />
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="
                        box box_section
                        custom-col-6
                        ybctablet
                        ybcmobile
                        ybc_newletter_custom
                      "
                      style="padding: 10px !important; background: #ffffff"
                      data-box="12"
                    >
                      <div
                        class="box-content ybc_content su mailsubcriber"
                        style="
                          border: 1px solid #b2b2b2;
                          border-radius: 10px;
                          box-shadow: 0 0px 4px #b2b2b2;
                          background-size: cover;
                          background-position: top;
                          background-attachment: fixed;
                        "
                      >
                        <div class="inner_box_section">
                          <div class="inner_box_table_cell verticle-top">
                            <div class="ybc_newletter">
                              <div class="box-heading">Newsletter</div>
                              <div class="pragrapFooter">
                                Sign up for our News and Special Offers
                              </div>
                              <div
                                class="box-content"
                                style="text-align: center"
                              >
                                <div id="frm_subscribe">
                                  <form
                                    @submit.prevent="newsform"
                                  >
                                    <div class="row subscribe-form-sec">
                                      <div class="left_cd">
                                        <select v-model="newsData.title" name="title">
                                          <option value="">Select Title</option>
                                          <option value="Mr.">Mr.</option>
                                          <option value="Mrs.">Mrs.</option>
                                          <option value="Ms.">Ms.</option>
                                          <option value="Miss.">Miss.</option>
                                          <option value="Dr.">Dr.</option>
                                          <option value="Prof.">Prof.</option>
                                        </select>
                                      </div>
                                      <div class="left_cd">
                                        <input
                                          v-model="newsData.firstName"
                                          type="text"
                                          name="subscribe_name"
                                          placeholder="Enter Your First Name"
                                        />
                                      </div>
                                      <div class="left_cd">
                                        <input
                                          v-model="newsData.lastName"
                                          type="text"
                                          name="last-name"
                                          placeholder="Enter Your Last Name"
                                        />
                                      </div>
                                      <div class="left_cd">
                                        <input
                                          v-model="newsData.email"
                                          type="text"
                                          name="subscribe_email"
                                          placeholder="Enter your email address"
                                        />
                                      </div>
                                      <div class="left_cd">
                                        <input
                                          v-model="newsData.telephone"
                                          type="text"
                                          name="telephone"
                                          placeholder="Enter your Telephone"
                                        />
                                      </div>
                                      <div v-if="v$.newsData.$error" id="subscribe_result"><span class="error">Invalid Data</span></div>
                                      <div class="newBookingbtn">
                                        <button
                                          class="cusButton"
                                          type="submit"
                                          ><span>Sign up</span></button
                                        >
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- custom-row end -->
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
  </div>
</template>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3";
import { Method } from "@inertiajs/inertia";
import UpperShopNav from "@/Components/UpperShopNav.vue";
import Banner from "@/Components/Banner.vue";
import LowerShopNav from "@/Components/LowerShopNav.vue";
import Menu from "@/Components/Menu.vue";
import Footer from "@/Components/Footer.vue";
import useValidate from '@vuelidate/core'
import { required, email, alpha, minValue} from '@vuelidate/validators'

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
  props: {
    setting: Object,
    delivery:Array,
    timeSetting:Object,
  },
  data() {
    return{
      shopLogo:this.setting.config_logo,
      shopOpen:this.timeSetting.open,
      v$: useValidate(),
      newsData:{
        title: "",
        firstName: "",
        lastName: "",
        email: "",
        telephone: "",
      }
    }
  },

  validations(){
    return{
      newsData:{
        title: {required},
        firstName: {required,alpha},
        lastName:  {required,alpha},
        email:  {required,email},
        telephone: {required},
      }
    }
  },
  methods: {
    newsform(){
      this.v$.$validate()
      if(!this.v$.$error){
        console.log("Success")
      }else{
        console.log("failed")
        console.log(this.v$.$errors)
        console.log(this.newsData)
      }
    }
  },
  created(){
    console.log(this.shopLogo);
  }
};
</script>



<style>
.cusButton{
  background-color: #FBBC4B; 
  border: none;
  color: white;
  padding: 5px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  
}
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