<template>
    <div id="container">
 <div class="ets_main_content style_header_1 ets_main_content_top">
    <div id="header" class="">
        <div id="wrapper">
                
                        
                
            <div class="top-nav">  
                <div class="links">
                    <a class="my_account" href="https://www.store2.the-public.co.uk/account/account"><i class="fa fa-user"></i>Account</a>
                    <a class="order_history" href="https://www.store2.the-public.co.uk/account/account"><i class="fa fa-file-text"></i>Order History</a>
                    <a class="shopping_cart" href="checkout/cart"><i class="fa fa-shopping-basket"></i>My Basket</a>
                    <a class="checkout_text" href="https://www.store2.the-public.co.uk/stepcheckout/checkout"><i class="fa fa-sign-out"></i>Checkout</a>
                </div>
                <div class="ctr"></div>
            </div>
            <div id="loginregister">
<div style="float: right;" id="register" class="login_pop">
    <i class="fa  fa-sign-in"></i><a onclick="return false;" href="#">Register</a>
</div>
<div style="float: right;" id="register" class="login_pop">
    <i class="fa fa-user"></i><a onclick="return false;" href="#">Login</a>
</div>

<div class="modal-content" style="display: none;">
    <!--<h5><strong>Dear Customer Please Signin or Register Below To Continue.</strong></h5>-->
    <div class="row-content">
        <div class="row" id="form-1">
            <!--<span class="heading">Existing Customer</span>-->
            <!--<span class="note">If you are already a member? sign in now.</span>-->
            <h2 class="ets-title" data-disable="no" data-toggle="tab-login">Log in</h2>
            <div class="error-login"></div>
            <form action="" method="post" id="form_login" _lpchecked="1">
                                 <div class="ybc_custom_form_group fa fa-envelope">
                    <input class="lg-email text-bold change_color" type="text" placeholder="Email Address" value="" name="email" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;);">
                </div>
                <div class="ybc_custom_form_group fa fa-lock">
                    <input class="lg-pass text-bold change_color" type="password" placeholder="Password" value="" name="password" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;);">
                </div>
                <div class="form-group">
                    <a class="forgotten" href="?route=account/forgotten">Forgotten Password?</a>
                    <div class="remember">
                        <label for="remember">Remember me</label>
                        <input class="lg-remember" type="checkbox" value="1" name="remember" id="remember">                    
                     </div>
                </div>
                 <div class="form-group form-group-submit">
                    <input type="submit" value="Login" class="buttonLogin button"> 
                </div>
                
                
                
            </form> 
        </div> 
        <div class="row" id="form-2">
            <!--<span class="heading">New Customer</span>
            <span class="note">If you are a new member? please fill in the below details and click submit.</span>-->
            <h2 class="ets-title" data-disable="no" data-toggle="tab-login">Create an account</h2>
            <form action="" method="post" id="form_register" _lpchecked="1">
                <div class="form-group">                    
                    <label class="style-select">
                        <select class="input-xlarge form-control" name="gender" id="title">
                            <option value="">Title</option>
                                                    	<option value="1">Mr.</option> 
                                                    	<option value="2">Mrs.</option> 
                                                    	<option value="3">Ms.</option> 
                                                    	<option value="4">Miss.</option> 
                                                    	<option value="5">Dr.</option> 
                                                    	<option value="6">Prof.</option> 
                                                    </select>
                    </label>
                </div>
                <div class="ybc_custom_form_group ybc_custom_form_firstname">                  
                    <input class="ets-firtname" type="text" placeholder="Name" value="" name="firstname" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">                    
                </div>
                <div class="ybc_custom_form_group fa fa-user ybc_custom_form_lastname">
                    <input class="ets-surname" type="text" value="" placeholder="Surname" name="lastname">
                </div>
                
                <div class="ybc_custom_form_group fa fa-envelope">
                    <input type="text" placeholder="Email address" value="" name="email" class="text-bold change_color">
                </div>
                <!--<div class="form-group">
                    <label>Confirm E-Mail</label>
                    <input type="text" value="" name="remail" />
                </div>-->
                 <div class="ybc_custom_form_group fa fa-phone">
                    <input type="text" placeholder="Phone number" value="" name="telephone">
                </div>
               <div class="ybc_custom_form_group fa fa-lock">
                    <input type="password" placeholder="Password" value="" name="password" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;);" class="text-bold change_color">
                </div>
                <div class="ybc_custom_form_group fa fa-lock">
                    <input type="password" placeholder="Confirm Password" value="" name="rpassword" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACIUlEQVQ4EX2TOYhTURSG87IMihDsjGghBhFBmHFDHLWwSqcikk4RRKJgk0KL7C8bMpWpZtIqNkEUl1ZCgs0wOo0SxiLMDApWlgOPrH7/5b2QkYwX7jvn/uc//zl3edZ4PPbNGvF4fC4ajR5VrNvt/mo0Gr1ZPOtfgWw2e9Lv9+chX7cs64CS4Oxg3o9GI7tUKv0Q5o1dAiTfCgQCLwnOkfQOu+oSLyJ2A783HA7vIPLGxX0TgVwud4HKn0nc7Pf7N6vV6oZHkkX8FPG3uMfgXC0Wi2vCg/poUKGGcagQI3k7k8mcp5slcGswGDwpl8tfwGJg3xB6Dvey8vz6oH4C3iXcFYjbwiDeo1KafafkC3NjK7iL5ESFGQEUF7Sg+ifZdDp9GnMF/KGmfBdT2HCwZ7TwtrBPC7rQaav6Iv48rqZwg+F+p8hOMBj0IbxfMdMBrW5pAVGV/ztINByENkU0t5BIJEKRSOQ3Aj+Z57iFs1R5NK3EQS6HQqF1zmQdzpFWq3W42WwOTAf1er1PF2USFlC+qxMvFAr3HcexWX+QX6lUvsKpkTyPSEXJkw6MQ4S38Ljdbi8rmM/nY+CvgNcQqdH6U/xrYK9t244jZv6ByUOSiDdIfgBZ12U6dHEHu9TpdIr8F0OP692CtzaW/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                </div>
                <div class="form-group form-group-submit">
                    <input type="submit" value="Create" class="buttonregister button"> 
                </div>
                
            </form>
        </div>  
    </div>
    </div>
</div>
       <!-- menu responsive -->
        <div class="main_header_responsive" style="display: none;">
        <div class="responsive_login">
                                            <div id="res_login2">
                            <button class="bt" id="res_btlogin2"><i class="fa fa-user"></i>Login / Register</button>
                        </div>
                                            <div class="top_menu_responsive">
                            <div class="navbar">
                                <div id="navbar-inner" class="navbar-inner navbar-inactive">
                                    <div class="etsBorderOut">
                                        <a class="btn btn-navbar top_res_click">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </a>
                                    </div>
                
                                    <ul id="ma-mobilemenu" class="top_res_menu mobilemenu nav-collapse collapse" style="display: none;">
                                        <li><a href="https://www.store2.the-public.co.uk/index.php?route=common/home"><i class="fa fa-home"></i>Home</a></li>
                                        <li><a href="https://www.store2.the-public.co.uk/account/account"><i class="fa fa-users"></i>Member</a></li>
                                        <li><a href="https://www.store2.the-public.co.uk/account/account"><i class="fa fa-user"></i>Account</a></li>
                                        <li><a href="https://www.store2.the-public.co.uk/account/account"><i class="fa fa-file-text"></i>Order History</a></li>
                                        <li><a href="checkout/cart"><i class="fa fa-shopping-cart"></i>My Basket</a></li>
                                                                                <li><a href="https://www.store2.the-public.co.uk/stepcheckout/checkout"><i class="fa fa-arrow-right"></i>Checkout</a></li>
                                                                                
                                        <li><a href="contact"><i class="fa fa-envelope-o"></i>Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                       
                   
                </div>
                                     <div class="res_bg-logo"><a href="https://www.store2.the-public.co.uk/index.php?route=common/home"><img src="https://www.store2.the-public.co.uk/image/data/demo-store-logo.png" title="2- Demo Pizza &amp; Kebab" alt="2- Demo Pizza &amp; Kebab"></a></div>       
                                
                
                
            </div><!-- end menu -->
        </div>
    </div>
    </div><!-- end ets main content -->  
</div>
<div class="bg_option_header">
<div class="header_banner_custom">
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
                        <div class="logo-desktop-enable logo-desktop home_logo_table enable_logo_tablet">
                 <a href="https://www.store2.the-public.co.uk/index.php?route=common/home">
                    <div class="bg-logo">
                        <img src="https://www.store2.the-public.co.uk/image/data/demo-store-logo.png" title="2- Demo Pizza &amp; Kebab" alt="2- Demo Pizza &amp; Kebab">
                    </div>
                 </a>       
            </div>
                
       
    <div class="timeStore shop_closed">

            
                            <img src="https://www.store2.the-public.co.uk/image/data/open_close/new_open.png">
                      
     </div>
    </div>
     
 </div>

<div class="ctr"></div>

 </div>
    
</div> <!-- main ets-->

</div>
</div>
</div>
<div id="sang_menu" class="ybc_menu_custom wide_menu_full">    
<div class="ets_main_content">    
<div class="home_menu">
 <!----------------------------------Menu------------------------------------------>
 
<div id="wrapper_menu" class="colormenu responsive_menu">

<div class="ets_main_content">

    <div id="toggle-menu" class="">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <p style="display: none;">menu</p>        
    </div>
    
            <div class="tables_cart show_cart_when_close">
            <div id="cart" class="ybccart">
    <!-- <a href="http://www.store2.the-public.co.uk/index.php?route=checkout/cart"> -->
    <a href="checkout/cart">
        <h4>My Basket</h4>
        <span>My Basket</span>
        <div id="basket_icon"></div>
        <span class="fix-cart" id="cart-total">0 x items | Total: £0.00</span>
    </a>
    
 <!-- Begin ETS customize  -->
 <div class="content">
        <div class="empty">Your shopping cart is empty!</div>
      </div>
<!-- End ETS customize -->
</div>        </div>
        
  <div class="main-menu-full-width">    
  <ul id="menu_list_ets" class="menuResp show_cart_when_close">
      <li><a href="https://www.store2.the-public.co.uk/index.php?route=common/home">Home</a></li>
       <!-- Begin ETS customize -->
      <li><a href="account/login">Member</a></li>
    <!-- End ETS customize -->
  
    
    <li><a id="catpath" href="menu">Menu</a>
   	     
    
    
        
      <!--
            
        -->
    <!-- Begin ETS customize -->
        </li><li><a href="stepcheckout/checkout">Check Out</a></li>
        <li><a href="contact">Contact Us</a></li>
    <!-- End ETS customize -->
    <!----------------------------------Cart------------------------------------------>  
                 <div id="cart" class="ybccart">
    <!-- <a href="http://www.store2.the-public.co.uk/index.php?route=checkout/cart"> -->
    <a href="checkout/cart">
        <h4>My Basket</h4>
        <span>My Basket</span>
        <div id="basket_icon"></div>
        <span class="fix-cart" id="cart-total">0 x items | Total: £0.00</span>
    </a>
    
 <!-- Begin ETS customize  -->
 <div class="content">
        <div class="empty">Your shopping cart is empty!</div>
      </div>
<!-- End ETS customize -->
</div>      <!----------------------------------End cart------------------------------------------> 

  </ul>
    </div>     </div>
</div>

    <div class="etswarning main"><div class="topnote"><div id="notification"></div></div></div>

 <!----------------------------------End Menu------------------------------------------>
  


  <div class="ctr"></div>

</div></div></div>

</div>
</template>