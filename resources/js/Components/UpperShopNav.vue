<template>
  <div id="container">
    <div class="ets_main_content style_header_1 ets_main_content_top">
      <div id="header" class="topnav_full_content">
        <div id="wrapper">
          <div class="top-nav">
            <div class="links">
              <a
                class="my_account"
                href="https://www.123.the-public.co.uk/account/account"
                ><i class="fa fa-user"></i>Account</a
              >
              <a
                class="order_history"
                href="https://www.123.the-public.co.uk/account/account"
                ><i class="fa fa-file-text"></i>Order History</a
              >
              <a class="shopping_cart" href="checkout/cart"
                ><i class="fa fa-shopping-basket"></i>My Basket</a
              >
              <a
                class="checkout_text"
                href="https://www.123.the-public.co.uk/stepcheckout/checkout"
                ><i class="fa fa-sign-out"></i>Checkout</a
              >
            </div>
            <div class="ctr"></div>
          </div>
          <div id="loginregister">
            <div style="float: right" id="register" class="login_pop">
              <i class="fa fa-sign-in"></i
              ><a onclick="return false;" href="#">Register</a>
            </div>
            <div style="float: right" id="register" class="login_pop">
              <i class="fa fa-user"></i
              ><a onclick="return false;" href="#">Login</a>
            </div>

            <div class="modal-content" style="display: none">
              <!--<h5><strong>Dear Customer Please Signin or Register Below To Continue.</strong></h5>-->
              <div class="row-content">
                <div class="row" id="form-1">
                  <!--<span class="heading">Existing Customer</span>-->
                  <!--<span class="note">If you are already a member? sign in now.</span>-->
                  <h2
                    class="ets-title"
                    data-disable="no"
                    data-toggle="tab-login"
                  >
                    Log in
                  </h2>
                  <div class="error-login"></div>
                  <form action="" method="post" id="form_login">
                    <div class="ybc_custom_form_group fa fa-envelope">
                      <input
                        class="lg-email"
                        type="text"
                        placeholder="Email Address"
                        value=""
                        name="email"
                      />
                    </div>
                    <div class="ybc_custom_form_group fa fa-lock">
                      <input
                        class="lg-pass"
                        type="password"
                        placeholder="Password"
                        value=""
                        name="password"
                      />
                    </div>
                    <div class="form-group">
                      <a class="forgotten" href="?route=account/forgotten"
                        >Forgotten Password?</a
                      >
                      <div class="remember">
                        <label for="remember">Remember me</label>
                        <input
                          class="lg-remember"
                          type="checkbox"
                          value="1"
                          name="remember"
                          id="remember"
                        />
                      </div>
                    </div>
                    <div class="form-group form-group-submit">
                      <input
                        type="submit"
                        value="Login"
                        class="buttonLogin button"
                      />
                    </div>
                  </form>
                </div>
                <div class="row" id="form-2">
                  <!--<span class="heading">New Customer</span>
            <span class="note">If you are a new member? please fill in the below details and click submit.</span>-->
                  <h2
                    class="ets-title"
                    data-disable="no"
                    data-toggle="tab-login"
                  >
                    Create an account
                  </h2>
                  <form action="" method="post" id="form_register">
                    <div class="form-group">
                      <label class="style-select">
                        <select
                          class="input-xlarge form-control"
                          name="gender"
                          id="title"
                        >
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
                    <div
                      class="ybc_custom_form_group ybc_custom_form_firstname"
                    >
                      <input
                        class="ets-firtname"
                        type="text"
                        placeholder="Name"
                        value=""
                        name="firstname"
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
                        class="ets-surname"
                        type="text"
                        value=""
                        placeholder="Surname"
                        name="lastname"
                      />
                    </div>

                    <div class="ybc_custom_form_group fa fa-envelope">
                      <input
                        type="text"
                        placeholder="Email address"
                        value=""
                        name="email"
                      />
                    </div>
                    <!--<div class="form-group">
                    <label>Confirm E-Mail</label>
                    <input type="text" value="" name="remail" />
                </div>-->
                    <div class="ybc_custom_form_group fa fa-phone">
                      <input
                        type="text"
                        placeholder="Phone number"
                        value=""
                        name="telephone"
                      />
                    </div>
                    <div class="ybc_custom_form_group fa fa-lock">
                      <input
                        type="password"
                        placeholder="Password"
                        value=""
                        name="password"
                      />
                    </div>
                    <div class="ybc_custom_form_group fa fa-lock">
                      <input
                        type="password"
                        placeholder="Confirm Password"
                        value=""
                        name="rpassword"
                      />
                    </div>
                    <div class="form-group form-group-submit">
                      <input
                        type="submit"
                        value="Create"
                        class="buttonregister button"
                      />
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- menu responsive -->
          <div class="main_header_responsive" style="display: none">
            <div class="responsive_login">
              <div id="res_login2">
                <button class="bt" id="res_btlogin2">
                  <i class="fa fa-user"></i>Login / Register
                </button>
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

                    <ul
                      id="ma-mobilemenu"
                      class="top_res_menu mobilemenu nav-collapse collapse"
                      style="display: none"
                    >
                      <li>
                        <a
                          href="https://www.123.the-public.co.uk/index.php?route=common/home"
                          ><i class="fa fa-home"></i>Home</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.123.the-public.co.uk/account/account"
                          ><i class="fa fa-users"></i>Member</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.123.the-public.co.uk/account/account"
                          ><i class="fa fa-user"></i>Account</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.123.the-public.co.uk/account/account"
                          ><i class="fa fa-file-text"></i>Order History</a
                        >
                      </li>
                      <li>
                        <a href="checkout/cart"
                          ><i class="fa fa-shopping-cart"></i>My Basket</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.123.the-public.co.uk/stepcheckout/checkout"
                          ><i class="fa fa-arrow-right"></i>Checkout</a
                        >
                      </li>

                      <li>
                        <a href="contact"
                          ><i class="fa fa-envelope-o"></i>Contact Us</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="res_bg-logo">
              <a
                href="https://www.123.the-public.co.uk/index.php?route=common/home"
                ><img
                  src="https://www.123.the-public.co.uk/image/data/shop-files/A-B/ak-spices/logo-ak.png"
                  title="A.K. Spices-Stage"
                  alt="A.K. Spices-Stage"
              /></a>
            </div>
          </div>
          <!-- end menu -->
        </div>
      </div>
    </div>
    <!-- end ets main content -->
  </div>
  <!-- end conteinner header -->
</template>

<script>

import { Head, Link } from "@inertiajs/inertia-vue3";
import { Method } from "@inertiajs/inertia";

export default {
  name: "UpperShopNav",
};
</script>
