<template>
  <Head title="Shop name">
    <link rel="stylesheet" href="/css/shoptheme1/stylesheet.css" />
    <link rel="stylesheet" href="/css/shoptheme1/responsive.css" />
    <link rel="stylesheet" href="/css/shoptheme1/responsive1.css" />
    <link rel="stylesheet" href="/css/shoptheme1/accordion.css" />
    <link rel="stylesheet" href="/css/shoptheme1/camera.css" />
    <link rel="stylesheet" href="/css/shoptheme1/fast_order.css" />
    <link rel="stylesheet" href="/css/shoptheme1/font-awesome.css" />
    <link rel="stylesheet" href="/css/shoptheme1/owl.carousel.css" />
    <link rel="stylesheet" href="/css/shoptheme1/topmenu.css" />
    <link rel="stylesheet" href="/css/shoptheme1/ybc-testimonials.css" />
    <link rel="stylesheet" href="/css/shoptheme1/ets_green.css" />
    <!-- <link rel="stylesheet" href="/css/shoptheme1/customt2.css" /> -->
  </Head>

  <body class="page_category lang_en ets_green  customCategoryWrapper">
    <UpperShopNav/>
    <!-- end conteinner header -->
    <div class="body_ets">
      <div class="bg_option_header">
        <div class="header_banner_custom_full_width">
          <div class="ets_main_content">
            <div class="fix_ets_main_content">
              <div class="main ets">
                <div id="wrapper" class="relat">

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
                            <img :src="'/image/'+setting.config_logo" :title="setting.config_name" :alt="setting.config_name" />
                          </div>
                        </a>
                      </div>

                      <div class="timeStore shop_closed">
                        <img v-if="!timeSetting.open"
                          src="/image/data/open_close/new_closed.png"
                          width="235"
                          height="145"
                        /><img v-else
                          src="/image/data/open_close/new_open.png"
                          width="235"
                          height="145"
                        />
                        <div v-if="!timeSetting.open" class="shop_closed_ets">
                          <p class="ybc_open_back">
                            <span>We will be opening back at 14:40 Today</span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="ctr"></div>
                </div>
              </div>
              <!-- main ets-->
            </div>
          </div>
        </div>
        <div id="sang_menu" class="ybc_menu_custom wide_menu_full">
          <div class="ets_main_content">
            <div class="home_menu ">
              <!----------------------------------Menu------------------------------------------>

              <LowerShopNav/>

              <div class="etswarning main">
                <div class="topnote"><div id="notification"></div></div>
              </div>

              <!----------------------------------End Menu------------------------------------------>

              <div class="ctr"></div>
            </div>
          </div>
        </div>
      </div>


 <div id="wrapper" class="etsWrapper middle_bg_custom body_full_width " style="transform: none;">
    <div class="ets_main_content" style="transform: none;">
    <div class="fix_ets_main_content" style="transform: none;">
        <div class="etsWrapper body_content_sec" style="transform: none;">    

<div class="etsmain" style="transform: none;">
    
  <div class="ets-product-list" style="transform: none;">
    <div class="content_top_ybc"> 
        </div>

   <div class="outBorder" style="margin-top: 20px; transform: none;">

    <div class="mainBorder" style="transform: none;">
     <div class="border" style="transform: none;">      
      <div class="before-content" style="transform: none;">
      <div id="content" style="transform: none;">

              <div id="column-left" class="sticky" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
    <!-- route : product/category -->



  <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;"><div class="box ">
      <div class="custom-category-heading">Categories</div>
  <div class="box-content" id="">
    <ul class="box-category" style="display: block;" >
            <li v-for="category in category">
              <a href="https://www.store2.the-public.co.uk/menu#pizza" class="cat-active" data-name="Pizza" data-href="#pizza" data-id="436">{{category.get_category_description_with_products.name}} ({{category.get_category_description_with_products.get_category_product.length}})</a>
            </li>
          </ul>
  </div>
  </div></div></div>
 
        <!----------------------------------------- End ETS customize ------------->
                  <div class="product-list" id="boxfeatured" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
              
                    <!--post id_category -------------------------------------------------------------------------------------------------->
          
          <!--END post ---------------------------------------------------------------------------------------------------------->

          <!--SHOW product and option of product ------------------------------------------------------------------------------------->
                      <div class="theiaStickySidebar" style="padding-top: 1px; padding-bottom: 1px; position: static; transform: none;">
                        <div class="box des_cat">
            </div>
            <input type="hidden" id="id_cat" name="id_cat" value="">
            <div v-for="category in category">
            <div id="pizza" class="main-cat-title pizza">
              <a href="javascript:void(0);" class="slideprods" rel="pizza">
                <h1 class="cat-title">{{htmlDecode(category.get_category_description_with_products.name)}}</h1></a></div>
                <div class="main-cat-desc">
                  <p>{{htmlDecode(category.get_category_description_with_products.description)}}</p>
                </div>
<br>
<div class="item block nopic " v-for="product in category.get_category_description_with_products.get_category_product">
              <div class="item_top_wrapper">
                <div class="left">
                  <div class="product_id_ets product_2543">
                    <input type="hidden" name="product_id" class="id_product" value="2543">
                  </div>
                                  </div>
                <div class="right">
                  <div class="name">{{htmlDecode(product.get_product_description.name)}}<div class="product-icons"><span class="proIcons"><img src="/image/food-icons/vegetarian.png" title="Vegetarian"></span></div></div>
                                      <div class="description ets longdes2543"><span v-html="product.get_product_description.description"></span></div>
                  <!-- main price co gia chinh la su dung gia chinh---------------------------------------------------------------------------------- -->
                                     <!-- BY ETS HIEU -->
                       <div class="ets-options ets-option-2546" id="ets-option-2546" v-if="product.get_product_description.size_info">
                   <div class="options">  
                    <div class="option">
                                                <select class="etsSelect sizeoptionselect" rel="2546" cat="436" name="size_base" style="display: none;">
                          </select>
                                       
                             
                                                             
                                                             
                                <div class="optionsize" v-for="sizes in product.get_product_description.size_info">
                                  <span class="sizename">{{htmlDecode(sizes.size)}}</span>
                                   
                                  <a class="custom-itemprice-label button size-popup " @click="addToCart(sizes.id_product,sizes.id_size)" rel="480">
                                    <span class="sizeprice hide-carttext">£{{htmlDecode(sizes.price)}}</span><span class="show-carttext sizeprice" style="display: none;">Added</span>
                                    <div class="basket"></div>  
                                  </a>
                              	  </div>
                               
                                                             
                                                                                            
                               
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                                                                                                        </div>
                      <!-- <input id="qty-2546" class="qty" type="text" name="quantity" class="qty" value="1" /> -->
                    </div>
                  </div>              
                  <!-- <div id="price_ets_2543" class="price" data-price="1">
                                                                                                    </div> -->
                  <input id="qty-2543" class="qty" type="hidden" name="quantity" value="1">
                  <!-- end show main price ets hieu------------------------------------------------------------------------------------------------- -->

                  <!--Not main price use set price for config category--------------------------------------------------------------------------------- -->
                 
                <!--End show price group for config category------------------------------------------------------------------------------------------------ -->
              </div>
            </div>
            <!--SHOW OPTION PRODUCT -------------------------------------------------------------------------------------------------->
            <div class="popup-options">
              <div class="popupscrollable">
               
                  <!--END SHOW OPTION PRODUCT ---------------------------------------------------------------------------------------------------------->

                  <div class="boxcomment request-2543">
                    <b class="request_ets">Add your special request?</b>
                    <textarea maxlength="100" name="request" rows="5" onkeypress="return StringValidation(event)"></textarea> <!-- cols="50" -->
                  </div> 
                </div>
                 
                                  <div id="buttonrow" class="cmn-add-cart" v-if="product.get_product_description.price != '0.00'">
                      <div class="cart popup-add-to-cart">
                        <a class="button" onclick="popuplight();"><span class="sizeprice">£{{product.get_product_description.price}}</span><div class="basket"></div></a>
                      </div>
                  </div>
                             

                <!--------POPUP ADD TO CART---------->
                                      
                    
                    
                                    <!------------------>

                </div>
                                  
                
                <!-- end .ets-extra-block -->
                                <!--dev hiepaiq -->
                <div id="bg_cart_2543" class="bg_cart_fixed"></div>
               
                <!--end dev hiepaiq -->
                
                                <!--END SHOW BUTTON ADD CART -------------------------------------------------------------------------------------------->  
              </div>
                      </div>
              <div class="pagination"></div><div class="main-pro-icons"><span class="proIcons"><img src="/image/data/icons/new.jpg" alt="New Product!" title="New Product!"><span>New Product</span></span><span class="proIcons"><img src="/image/food-icons/vegetarian.png" alt="Vegetarian" title="Vegetarian"><span>Vegetarian</span></span><span class="proIcons"><img src="/image/food-icons/contains-nut.png" alt="Warning! This product contains nut." title="Warning! This product contains nut."><span>Contains Nut</span></span><span class="proIcons"><img src="/image/food-icons/hot-mild.png" alt="Hot Level: Mild" title="Hot Level: Mild"><span>Mild</span></span><span class="proIcons"><img src="/image/food-icons/hot-medium.png" alt="Hot Level: Medium" title="Hot Level: Medium"><span>Medium</span></span></div></div></div>
     
              </div>
        <div id="column-right" class="sticky-right" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
  <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; left: 1138.2px; top: 0px;"><div id="dynamicminicart" class="box minicartbox">
    <div class="mob-basket" style="display: none;">0 X ITEMS | TOTAL: £0.00</div>
   <div class="shop_open_msg"><h2> We are open now!</h2></div><div class="custom-rightcol-minicart">  
<div class="box-heading">
    <div class="mainHeading">
        <div class="box-heading">My Basket</div>
    </div>
    <div class="basket"></div>
</div>

<div class="box-content">
        <!-- <div class="empty">Your shopping cart is empty!</div> -->
        <div class="mini-cart-info">
      <table>
             
        <tbody>
          <tr class="product_2546" style="" v-for="item in catItems">
          <td rowspan="2" width="20" class="remove">
            <img src="/images/remove-small.png" alt="" title="">
            </td>
          <td colspan="2" class="name">
            <div class="miniproduct-name">
           <span class="itemqty">{{item.qty}}<sub>X</sub></span>
            {{item.options.size+' '+item.name}}</div>
            <span class="pro-toppings">
                                         
             
            </span>
                        <span class="proprice">£{{item.subtotal}}</span>
          </td>
        
        </tr>
        
                      </tbody>
                      </table>
    </div>
    <div class="mini-cart-total">
      <ul class="lists-group">
                <li class="lists-group-item">
          <strong>Sub-Total:</strong>
          <span class="pull-right total-price">£0.00</span>
          <input type="hidden" class="sub_total_ets" value="0">
        </li>
                <li class="lists-group-item">
          <strong>Total to pay:</strong>
          <span class="pull-right total-price">£0.00</span>
          <input type="hidden" class="total_ets" value="0">
        </li>
              </ul>
    </div>
    <div id="order_type_top">
        <table>
                         <tbody><tr>
                                <td>                        
                    <label class=""><input id="delivery_ets" type="radio" name="setdelivery" value="1"><span class="order-type">Delivery<span class="del-time">50 min</span></span>
                    </label>                    
                </td>
                                                <td>                                            
                    <label class=""><input id="collection_ets" type="radio" name="setdelivery" value="2"><span class="order-type">Collection<span class="col-time">20 min</span></span></label>
                </td>   
                             
            </tr>         
                        
        </tbody></table>        
    </div>
    </div>
</div>
              <div class="checkout">
                <a class="button view_cart_button" style="display: none;" href="http://www.store2.the-public.co.uk/index.php?route=checkout/cart&amp;prams=">View Cart</a>
                                <input id="spend_ets" type="hidden" data-spend-total="£10.00" data-check-allow="1" data-del-msg="" data-st="35" data-text="£10.00" name="spend" value="10.00">  
                <a href="https://www.store2.the-public.co.uk/index.php?route=stepcheckout/checkout" class="checkoutIcon button ">Checkout</a>
            </div>
	

</div><div id="order_type_warning" style="display: none;" title="Warning">
    <div class="content">
        <div style="text-align: center;" class="control-group">
            <div class="controls">
                
            </div>
          </div>
    </div>
</div></div></div>
      </div>
  		
    </div>
  </div>  
  </div>

<!-- Begin ETS customize -->
<div class="etsrow  spacing2">
  <div class="col-sm-12 default">
    <div class="bot_box_sec">
      <div class="bot_box_secInr">
        <div class="row">
          <div class="col-lg-7 delivary">
            <div class="caif_img"></div>
            <h2>For Home Delivery Call us on 01291630436</h2>
            <div class="col-sm-5">
              <p>You can pay cash or with..
              </p>
            </div>
            <div class="sm sm_visa_icon"></div>
            <div class="sm icon2"></div>
            <div class="sm icon3"></div>
            <div class="sm icon4"></div>
          </div>
          <div class="col-lg-5 discunt">
            <div class="opening_hr_bot" style="margin-right: 10px;">
              <a href=""><h3></h3></a>
              <p>Click to <a href="">download</a> a PDF copy of our menu.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>



<div id="content-div" style="display: none"><h2>Sorry we are closed now!</h2></div>
<!-- End ETS customize -->

<div class="clear"></div>


<div class="clear"></div>

</div> <!--------------end main------------------>

</div></div></div></div>     



      <Footer/>
      <!--end ets body-->

      <div id="sticker">
        <span class="sticky-icon"
          >you can use your same login details wherever you see this logo.</span
        >
      </div>
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
  data(){
        return{
            cartItems:this.catItems,
        }
    },
  props:{
    setting:Object,
    category:Array,
    timeSetting:Object,
    catItems:Object,
  },
  components: {
    Head,
    Link,
    UpperShopNav,
    LowerShopNav,
    Footer
  },
   methods: {
        htmlDecode(input) {
        var doc = new DOMParser().parseFromString(input, "text/html");
        return doc.documentElement.textContent;
        },
        addToCart(productId,sizeId){
          let  pdata={'id_product':productId,'id_size':sizeId}
               console.log(pdata)
          this.axios.post('/addtocart',pdata).then((response) => {
              this.cartItems=response.data;
            }).catch(error => {
      this.errorMessage = error.message;
      // console.error("There was an error!", error);
        });
        }
   },
};
</script>
<style type="text/css">
#colorbox, #cboxOverlay, #cboxWrapper{ z-index:10003;}
</style>
<style type="text/css">
		 			body > div#container{background-color: #A3140D;}
             .ma-nav-mobile-container .navbar {background-color: #A3140D;}
		     #ma-mobilemenu {background-color: #A3140D;}
        			.colormenu, .tabs, .top_menu_responsive .btn-navbar, .list_category_style_1 {background-color: #2B2B2B;}
			            h2.ybcgeneral.title-toggle, .title-heading,
            h2.ybcgeneral.title-toggle::before, .title-heading::before {border-color: #2B2B2B;}
					.menuResp > li > a, .mobilemenu a, .navbar .textmenu {color: #FFFFFF;}				
					.menuResp > li:hover > a {
				color: #C1FF47;}
		
        			.menuResp > li:hover, body .tabs li a.active {
				background-color: #6D9028;}
				
					.menuResp ul li a, .menuResp > li > div > ul > li > a, .menuResp > li > div > a {
				color: #6D9028;}				
					.menuResp ul li a:hover, .menuResp > li > div > a:hover, .menuResp > li > div > ul > li > a:hover{
				color: #000000;}				
					.menuResp > li > div > ul > li > a span{
				background-color: #C1FF47;}				
					.menuResp #subcategory .sub_image{display:none;}
             			.box-category > li > a, .box-account > li > a, .vtabs li a {
				color: #330206;}				
			
					.box-category li a:hover, .box-category > li > a.active, .box-account li a:hover,
			.vtabs li a:hover, .vtabs li a.selected  {
				color: #FBA82B;}
			.box-category li  a:hover, .box-category > li > a.active, .vtabs li a.selected,
		    .box-account li a:hover{
			  border-color:#FBA82B;}			
					#footer h3 {color: #262626;}				
			
					#footer .column a{color: #262626;}				
					#footer .column a:hover {
				color: #D30A17;}				
					#footer .column a:hover {background-color: #FFFFFF;}				
					#footer, #powered, #powered a {color: #181888;}				
					a, a b, .product-compare a, .main_header_responsive .responsive_cart #cart .name{
				color: #3DBCD4;}				
					a:hover, .breadcrumb a:hover, .product-compare a:hover, .boxfeatured .name a:hover, .product-grid .name a:hover, .product-list .name a:hover, .boxfeatured .description a:hover,
			.product-list .description a:hover, .checkout-heading a:hover, .st-accordion ul li > a:hover, .top-nav #topbox > a:hover,
			.verticaltab .name a:hover, .product-grid .description a:hover, .box-news h4 a:hover, .htabs a.selected, .htabs a:hover
			{color: #FF1B11;}
			
			.block:hover{border-color: #FF1B11;}
			.htabs a.selected, .htabs a:hover  {border-top-color: #FF1B11;}

         			/* .ets-loginpopup .row-content .heading, h1, h2, h4, .welcome #title, .etstotal > b, .est_ordered_product_name, .order-id, .box span, .product-info #opname, .verticaltab .name_categ a, .checkout-heading span{color: #065979!important;}	 */
            .ets-loginpopup {border: 7px solid #065979;}			
				.boxfeatured .name a, .product-grid .name a, .product-list .name, .verticaltab .name a{color: #FBBC4B;}				
					#column-left .box .box-heading, #column-right .box .box-heading, .manufacturer-heading{
				color: #000000;}				
					.box .box-heading, #fast_order_form .fast_order_center{
				color: #000000;}				
					.description{
				color: #333333;}				
					body, .boxfeatured .description a, .product-info .price-tax, .product-info .price .reward,
			.product-info .price .discount, .cart-total td b, .scroll_ybc_h{
				color: #777777;}				
					.boxfeatured .price, .product-grid .price,  .product-list .price, .product-info .price, .verticaltab .price, .compare-info .price{
				color: #D30A17;}				
				.boxfeatured .price-new, .product-grid .price-new, .product-list .price-new, .product-info .price-new, .verticaltab .price-new, .compare-info .price-new{
				color: #FB2B75;}				
				.savemoney{ background-color: #FB2B75;}				
					.ui-widget-header, .boxfeatured .cart a.button, .product-grid .cart a.button, .product-list .cart a.button, .cart input.button,
			.verticaltab .cart a.button, a.button, input.button, a.checkbut, a.redbutton, button, .box-news .readmore {
				background-color: #6D9028;}
                .ui-widget-header{background: #6D9028;}				
					.boxfeatured .cart a.button:hover, .product-grid .cart a.button:hover, .product-list .cart a.button:hover, .verticaltab .cart a.button:hover, .colorbox div#plus,
			.wishlist a:hover, .compare a:hover, .cart input.button:hover, a.button:hover, input.button:hover, a.checkbut:hover, button:hover,  a.redbutton:hover, .box-news .readmore:hover,
			 a#arrow_left:hover, a#arrow_right:hover{
				background-color: #C1FF47;}	
                .ui-widget-header:hover{background: #C1FF47;}			
					.colormenu{width:100%;}
			.topnote{width:100%;}
            #container .ets_main_content.style_header_1.ets_main_content_top{width:100%}
			@media only screen and (max-width: 1200px){
			.colormenu{ min-width:270px; width: auto;}
			.topnote{ min-width:270px; width: auto;}
			}			
					.category-info{ display:none;}			
					.category-list{ display:none;}			
				  #footer .part { width:50%; float:left;}
	 	  #footer .column {width: 50%;}
		  @media only screen and (max-width: 770px){
		    #footer .part{ width:100%; float:none;}	
		    }
			@media only screen  and (max-width: 480px) {
			#footer .column{ width:99%; padding-top:10px; margin-right:0px; float:none; min-height: 100px; }
			}
		
   	</style>
     <style type="text/css">
    
    @media (max-width: 649px){
        body #header{ background-color: #FFFFFF; }
    }
    
        body > div#container {
      border-bottom: 1px solid #C1FF47;
    }
        
        
        .body_ets{
								background-color: #0A3616;
			        }
        
        .body_ets, .hieu, .homepagefooter {
							background-image: url("https://www.store2.the-public.co.uk/image/data/patterns/overlay6.png"); 
			                            background-repeat: repeat;
                       
           background-position: left top  ;
            
		}
        
    
    
            .body_ets:before {

				  
			                            background-repeat: no-repeat;
                       
           background-position: center top  ;
            
		}
        
    
        .bg_custom_footer:before{        
                        /** dola update **/
            background-repeat: no-repeat;
             background-position: center center ;
    }

            .bottomFooter {        
                            background-color: #2B2B2B;
                    }
        
                            .topFooterRes {
                                            background-color: #2B2B2B;
                                    }

                            .footer {
                                        
                    background-repeat: no-repeat;
                    background-position: center center;
                }    
    
                    @media (min-width:1000px) {

            div.ybc_wide_banner_fullwidth,div.main-menu-full-width,div.ets_main_content,.top_footer{
                padding: 0px !important;
                width:100%;
            }
            div.top_footer div{
                width: 1000px;
                float: none;
                margin: auto;
            }
            .top_footer ul{
                padding: 0px !important;
            }
            .topnav_full_content, .page_category .before-content{
                    width: 1000px;
                    float: none;
                    margin: auto;
                    padding: 0px !important;
            }
            .header_banner, .menuResp, .body_content_sec #content:not(.homepage){
                width: 1000px;
                margin: auto;
                float: none;
            }
            
                .home_logo_table{
                    padding-left: 0;
                }
                .page_checkout #content, .sitemap-page, .page_login #content, .customCategoryWrapper .custom-category-heading, .page_account .topHead, body.page_account #wrapper .mainContent, #step_payment_method{
                    padding:0px;
                }
                #column-right{
                    margin:0px;
                }

                .box-category > li > a{
                    padding:8px 4px 8px 0px;
                }
                .top-nav, .timeStore{
                    padding: 0px !important;
                }
            }

 
           
    
    
    
    
    
        #wrapper.etsWrapper {        
                        
            background-repeat: no-repeat;
            background-position: center center;
    }
        
    
    
    
                        .middle_bg_custom .fix_ets_main_content > .etsWrapper
                {
                                                                background-color: #FFFFFF;
                                
                                                    			background-repeat: no-repeat;  
            		                }
        		
  /* background -color footer  */ 
    		
    
    
        
    
    
    .checkout-heading span{
                    background-color: transparent;
            }
    
    .ets_main_content {
        width: 880px;
    }
    
    
    
    
    
    
        
        #jssor_1{
                            width: 900px;  
                    }
    
    
    
    /*.ybc_wide_banner_fullwidth,.main-menu-full-width{
        margin:0 auto;
            			width: 1000px;  
	           
                }*/
        @media (min-width: 1000px){
        .ybc_wide_banner_fullwidth,.main-menu-full-width {
                margin:0 auto;
                    			width: 1000px;  
    	           
                            }
         }
         
         
            #header #wrapper {
            
                			width: 1000px;  
    		        }
        
    
        
    
        input:hover, textarea:hover, select:hover{
        border-color: #D30A17 !important;
    }
            input:focus, textarea:focus, select:focus{
        border-color: #A3010C !important;
    }
            #search_result .store_list.wrap_row, .error{
        color: #FF0000 !important;
    }
     input.errors,select.errors{
        border-color: #FF0000 !important;
    }
    
             input, textarea, select{
        border-color: #616161 !important;
    }
            input, textarea, select{
        color: #919191;
    }

    ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
      opacity: 1;
      color: #919191;
    }
    ::-moz-placeholder { /* Firefox 19+ */
    opacity: 1;
    color: #919191;
    }
    :-ms-input-placeholder { /* IE 10+ */
    opacity: 1;
    color: #919191;
    }
    :-moz-placeholder { /* Firefox 18- */
    opacity: 1;
    color: #919191;
    }
        
    
    
        input:focus, textarea:focus, select:focus{
        color: #292929;
    }
      input:focus::-webkit-input-placeholder,textarea:focus::-webkit-input-placeholder { /* Chrome/Opera/Safari */
      
       color: #292929;
    }
    input:focus::-moz-placeholder,textarea:focus::-moz-placeholder { /* Firefox 19+ */
    
     color: #292929;
    }
    input:focus:-ms-input-placeholder,textarea:focus:-ms-input-placeholder { /* IE 10+ */
    
     color: #292929;
    }
    input:focus:-moz-placeholder,textarea:focus:-moz-placeholder { /* Firefox 18- */
   
     color: #292929;
    }
    
        
    /* sang */
    
        body > div#container{
        background-color: #A3140D;
    }
    
        
    
        a{
        color: #3DBCD4;
    }
    
        
    
        a:hover{
        color: #FF1B11;
    }    
        
        h1,h2,h3,h4, .hieu{
        color: #065979;
    }    
        
    
        .responsive_cart{
        background-color: #5AB1EB;
    }    
        
        .footer a{
        color: #262626;
    }    
        
        .footer a:active, .footer a.active{
        color: #FFFFFF;
    }    
        
        .footer a:hover{
        color: #D30A17;
    }    
        
        .footer .top_footer{
        color: #262626;
    }    
        
    
    
        .footer .bottomFooter p{
        color: #FFFFFF;
    }    
        
        .footer .bottomFooter a{
        color: #181888;
    }    
        
        .footer .bottomFooter a:hover{
        color: #FFFFFF;
    }    
        
            body{
            font-size: nonepx;  
        }
	    
            h1{
            font-size: nonepx;
            line-height: nonepx;  
        }
	    
            h2{
            font-size: nonepx;  
        }
	    
            h3, .footer h3{
            font-size: nonepx;  
        }
	    
            h4{
            font-size: nonepx;  
        }
	    
            .box-category > li > a{
            font-size: nonepx;  
        }
	    
            .product-list .name{
            font-size: nonepx;  
        }
	    
            .product-list .price{
            font-size: nonepx;  
        }
	    
    
    
    /* option for wide menu */
            .menuResp > li > a {
                                      background-color: #6D9028;
                                                      color: #FFFFFF;
                                            }
        .menuResp > li > a:hover {
                              background-color: #C1FF47;
                                          color: #000000;
                    }
        
        
                    .menuResp a {
              font-size: nonepx;
            }
                
        
                    .ybccart a {
              background-color: #6D9028;
            }
                
                    #cart.ybccart a:hover {
              background-color: #C1FF47;
            }
                            #cart.ybccart a:hover, #cart.ybccart a:hover * {
              color: #000000;
            }
                            #cart.ybccart a, #cart.ybccart a * {
              color: #FFFFFF;
            }
            
    /* end */
    
            .ets_main_content .etsFloat .ecslideshow {
          margin-left: 0 !important;
          width: 100% !important;  
        }
				.box.box_section.custom-col-12 .inner_box_section{
				max-width: 100% !important; 
				margin: auto;
				float: none;
			}
	
		
       
        .body_full_width .ets_main_content {
            width: 100%;
        }
    
    
    
    
    
    @media (min-width: 659px) and (max-width: 1199px){
                
                
                        
        
                
    .bg_option_header, .hieu {
		/*					background-color: #E3E3E3;
							background-image: url("https://www.store2.the-public.co.uk/image/data/patterns/overlay6.png"); 
			                        background-repeat: repeat;
                        background-position: center 0;*/
		}
            
        
                                    
                                    
                            
                                    
        
                    #wrapper.etsWrapper.middle_bg_custom {        
                                }
                
        	
        
                                        .footer {
                                            }    
                            
    }
    
    @media (max-width: 649px){
        #payment-address{
            margin-top:30px;
        }
                    body > div#container{
                background-color: #FFFFFF;
            }
                
                
        
        
                        /* .main_header_responsive{
           background-color: #0A3616;
        } */
                
                                    
                            
                                    
                    #wrapper.etsWrapper.middle_bg_custom {        
                                }
            
        
                    .body_ets:before{        
                                }
                
        	
        
                                        .footer {
                                            }    
                            
    }

    @media (min-width: 320px) and (max-width: 480px) {
                    .main_header_responsive{
                background-image: url("https://www.store2.the-public.co.uk/image/data/patterns/overlay6.png");   
            }
            }

    @media (min-width: 481px) and (max-width: 767px) {
                    .main_header_responsive{
                background-image: url("https://www.store2.the-public.co.uk/image/data/patterns/overlay6.png");   
            }
            }
    
    /*end*/
</style>
<style type="text/css">.fancybox-margin{margin-right:17px;}</style>
<style type="text/css">
@font-face {
  font-weight: 400;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Book-cd7d2bcec649b1243839a15d5eb8f0a3.woff2') format('woff2');
}

@font-face {
  font-weight: 500;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Medium-d74eac43c78bd5852478998ce63dceb3.woff2') format('woff2');
}

@font-face {
  font-weight: 700;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Bold-83b8ceaf77f49c7cffa44107561909e4.woff2') format('woff2');
}

@font-face {
  font-weight: 900;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Black-bf067ecb8aa777ceb6df7d72226febca.woff2') format('woff2');
}</style>