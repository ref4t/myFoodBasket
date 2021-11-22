<template>
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
              <p style="display: none">menu</p>
            </div>

            <div class="tables_cart">
              <div id="cart" class="ybccart">
                <!-- <a href="http://www.123.the-public.co.uk/index.php?route=checkout/cart"> -->
                <a href="checkout/cart">
                  <h4>My Basket</h4>
                  <span>My Basket</span>
                  <div id="basket_icon"></div>
                  <span class="fix-cart" id="cart-total"
                    >6 x items | Total: £17.64</span
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
                            Chicken Chat
                            <div></div>
                          </td>
                          <td class="quantity">x&nbsp;1</td>
                          <td class="total">£3.50</td>
                          <td class="remove">
                            <img
                              src="catalog/view/theme/default/image/remove-small.png"
                              alt="Remove"
                              title="Remove"
                              onclick="removeCart('9380:YToxOntzOjc6InRvcHBpbmciO2E6MTp7czo0OiJiYXNlIjthOjA6e319fQ==::YTo0OntzOjY6ImlkX2NhdCI7czowOiIiO3M6NzoicmVxdWVzdCI7czowOiIiO3M6OToic2l6ZV9iYXNlIjtzOjA6IiI7czo4OiJ0b3BwaW5ncyI7YTowOnt9fQ==');"
                            />
                          </td>
                        </tr>
                        <tr>
                          <td class="image"></td>
                          <td class="name">
                            Seekh Kebab Roll
                            <div></div>
                          </td>
                          <td class="quantity">x&nbsp;1</td>
                          <td class="total">£5.25</td>
                          <td class="remove">
                            <img
                              src="catalog/view/theme/default/image/remove-small.png"
                              alt="Remove"
                              title="Remove"
                              onclick="removeCart('9381:YToxOntzOjc6InRvcHBpbmciO2E6MTp7czo0OiJiYXNlIjthOjA6e319fQ==::YTo0OntzOjY6ImlkX2NhdCI7czowOiIiO3M6NzoicmVxdWVzdCI7czowOiIiO3M6OToic2l6ZV9iYXNlIjtzOjA6IiI7czo4OiJ0b3BwaW5ncyI7YTowOnt9fQ==');"
                            />
                          </td>
                        </tr>
                        <tr>
                          <td class="image"></td>
                          <td class="name">
                            Mushroom Pakora
                            <div></div>
                          </td>
                          <td class="quantity">x&nbsp;1</td>
                          <td class="total">£2.70</td>
                          <td class="remove">
                            <img
                              src="catalog/view/theme/default/image/remove-small.png"
                              alt="Remove"
                              title="Remove"
                              onclick="removeCart('9383:YToxOntzOjc6InRvcHBpbmciO2E6MTp7czo0OiJiYXNlIjthOjA6e319fQ==::YTo0OntzOjY6ImlkX2NhdCI7czowOiIiO3M6NzoicmVxdWVzdCI7czowOiIiO3M6OToic2l6ZV9iYXNlIjtzOjA6IiI7czo4OiJ0b3BwaW5ncyI7YTowOnt9fQ==');"
                            />
                          </td>
                        </tr>
                        <tr>
                          <td class="image"></td>
                          <td class="name">
                            Reshmi Kebab Starter
                            <div></div>
                          </td>
                          <td class="quantity">x&nbsp;1</td>
                          <td class="total">£2.90</td>
                          <td class="remove">
                            <img
                              src="catalog/view/theme/default/image/remove-small.png"
                              alt="Remove"
                              title="Remove"
                              onclick="removeCart('2360:YToxOntzOjc6InRvcHBpbmciO2E6MTp7czo0OiJiYXNlIjthOjA6e319fQ==::YTo0OntzOjY6ImlkX2NhdCI7czowOiIiO3M6NzoicmVxdWVzdCI7czowOiIiO3M6OToic2l6ZV9iYXNlIjtzOjA6IiI7czo4OiJ0b3BwaW5ncyI7YTowOnt9fQ==');"
                            />
                          </td>
                        </tr>
                        <tr>
                          <td class="image"></td>
                          <td class="name">
                            Shami Kebab Starter
                            <div></div>
                          </td>
                          <td class="quantity">x&nbsp;2</td>
                          <td class="total">£6.40</td>
                          <td class="remove">
                            <img
                              src="catalog/view/theme/default/image/remove-small.png"
                              alt="Remove"
                              title="Remove"
                              onclick="removeCart('2361:YToxOntzOjc6InRvcHBpbmciO2E6MTp7czo0OiJiYXNlIjthOjA6e319fQ==::YTo0OntzOjY6ImlkX2NhdCI7czowOiIiO3M6NzoicmVxdWVzdCI7czowOiIiO3M6OToic2l6ZV9iYXNlIjtzOjA6IiI7czo4OiJ0b3BwaW5ncyI7YTowOnt9fQ==');"
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
                          <td class="right">£20.75</td>
                        </tr>
                        <tr>
                          <td class="right"><b>Coupon(WELCOME15):</b></td>
                          <td class="right">£-3.11</td>
                        </tr>
                        <tr>
                          <td class="right"><b>Total to pay:</b></td>
                          <td class="right">£17.64</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="checkout">
                    <a
                      href="http://www.123.the-public.co.uk/index.php?route=checkout/cart&amp;prams=collection"
                      class="checkbut"
                      >View Cart</a
                    >&nbsp;
                    <a
                      href="https://www.123.the-public.co.uk/index.php?route=stepcheckout/checkout"
                      class="redbutton minimum_ets"
                      >Checkout</a
                    >
                  </div>
                </div>
                <!-- End ETS customize -->
              </div>
            </div>

            <div class="main-menu-full-width">
              <ul id="menu_list_ets" class="menuResp">
                <li>
                  <Link :href="route('shopHome')" >Home</Link>
                </li>
                <!-- Begin ETS customize -->
                <li>
                  <Link :href="route('shopMember')" >Member</Link>
                </li>
                <li>
                  <Link :href="route('shopMenu')" >Menu</Link>
                </li>
                
                <!-- End ETS customize -->


                <!-- Begin ETS customize -->
                <li><Link :href="route('shopcheckout')" >Check out</Link></li>
                <li><Link :href="route('shopcontactus')" >Contact Us</Link></li>
                <!-- End ETS customize -->
                <!----------------------------------Cart------------------------------------------>
                <div id="cart" class="ybccart">
                  <!-- <a href="http://www.123.the-public.co.uk/index.php?route=checkout/cart"> -->
                  <Link :href="route('shopcart')" >
                  
                    <h4>My Basket</h4>
                    <span>My Basket</span>
                    <div id="basket_icon"></div>
                    <span class="fix-cart" id="cart-total"
                      >6 x items | Total: £17.64</span
                    >
                  </Link>

                  <!-- Begin ETS customize  -->
                  <div class="content">
                    <div class="mini-cart-info">
                      <table>
                        <tbody>
                          <tr>
                            <td class="image"></td>
                            <td class="name">
                              Chicken Chat
                              <div></div>
                            </td>
                            <td class="quantity">x&nbsp;1</td>
                            <td class="total">£3.50</td>
                            <td class="remove">
                              <img
                                src="catalog/view/theme/default/image/remove-small.png"
                                alt="Remove"
                                title="Remove"
                                onclick="removeCart('9380:YToxOntzOjc6InRvcHBpbmciO2E6MTp7czo0OiJiYXNlIjthOjA6e319fQ==::YTo0OntzOjY6ImlkX2NhdCI7czowOiIiO3M6NzoicmVxdWVzdCI7czowOiIiO3M6OToic2l6ZV9iYXNlIjtzOjA6IiI7czo4OiJ0b3BwaW5ncyI7YTowOnt9fQ==');"
                              />
                            </td>
                          </tr>
                          <tr>
                            <td class="image"></td>
                            <td class="name">
                              Seekh Kebab Roll
                              <div></div>
                            </td>
                            <td class="quantity">x&nbsp;1</td>
                            <td class="total">£5.25</td>
                            <td class="remove">
                              <img
                                src="catalog/view/theme/default/image/remove-small.png"
                                alt="Remove"
                                title="Remove"
                                onclick="removeCart('9381:YToxOntzOjc6InRvcHBpbmciO2E6MTp7czo0OiJiYXNlIjthOjA6e319fQ==::YTo0OntzOjY6ImlkX2NhdCI7czowOiIiO3M6NzoicmVxdWVzdCI7czowOiIiO3M6OToic2l6ZV9iYXNlIjtzOjA6IiI7czo4OiJ0b3BwaW5ncyI7YTowOnt9fQ==');"
                              />
                            </td>
                          </tr>
                          <tr>
                            <td class="image"></td>
                            <td class="name">
                              Mushroom Pakora
                              <div></div>
                            </td>
                            <td class="quantity">x&nbsp;1</td>
                            <td class="total">£2.70</td>
                            <td class="remove">
                              <img
                                src="catalog/view/theme/default/image/remove-small.png"
                                alt="Remove"
                                title="Remove"
                                onclick="removeCart('9383:YToxOntzOjc6InRvcHBpbmciO2E6MTp7czo0OiJiYXNlIjthOjA6e319fQ==::YTo0OntzOjY6ImlkX2NhdCI7czowOiIiO3M6NzoicmVxdWVzdCI7czowOiIiO3M6OToic2l6ZV9iYXNlIjtzOjA6IiI7czo4OiJ0b3BwaW5ncyI7YTowOnt9fQ==');"
                              />
                            </td>
                          </tr>
                          <tr>
                            <td class="image"></td>
                            <td class="name">
                              Reshmi Kebab Starter
                              <div></div>
                            </td>
                            <td class="quantity">x&nbsp;1</td>
                            <td class="total">£2.90</td>
                            <td class="remove">
                              <img
                                src="catalog/view/theme/default/image/remove-small.png"
                                alt="Remove"
                                title="Remove"
                                onclick="removeCart('2360:YToxOntzOjc6InRvcHBpbmciO2E6MTp7czo0OiJiYXNlIjthOjA6e319fQ==::YTo0OntzOjY6ImlkX2NhdCI7czowOiIiO3M6NzoicmVxdWVzdCI7czowOiIiO3M6OToic2l6ZV9iYXNlIjtzOjA6IiI7czo4OiJ0b3BwaW5ncyI7YTowOnt9fQ==');"
                              />
                            </td>
                          </tr>
                          <tr>
                            <td class="image"></td>
                            <td class="name">
                              Shami Kebab Starter
                              <div></div>
                            </td>
                            <td class="quantity">x&nbsp;2</td>
                            <td class="total">£6.40</td>
                            <td class="remove">
                              <img
                                src="catalog/view/theme/default/image/remove-small.png"
                                alt="Remove"
                                title="Remove"
                                onclick="removeCart('2361:YToxOntzOjc6InRvcHBpbmciO2E6MTp7czo0OiJiYXNlIjthOjA6e319fQ==::YTo0OntzOjY6ImlkX2NhdCI7czowOiIiO3M6NzoicmVxdWVzdCI7czowOiIiO3M6OToic2l6ZV9iYXNlIjtzOjA6IiI7czo4OiJ0b3BwaW5ncyI7YTowOnt9fQ==');"
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
                            <td class="right">£20.75</td>
                          </tr>
                          <tr>
                            <td class="right">
                              <b>Coupon(WELCOME15):</b>
                            </td>
                            <td class="right">£-3.11</td>
                          </tr>
                          <tr>
                            <td class="right"><b>Total to pay:</b></td>
                            <td class="right">£17.64</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="checkout">
                      <a
                        href="http://www.123.the-public.co.uk/index.php?route=checkout/cart&amp;prams=collection"
                        class="checkbut"
                        >View Cart</a
                      >&nbsp;
                      <a
                        href="https://www.123.the-public.co.uk/index.php?route=stepcheckout/checkout"
                        class="redbutton minimum_ets"
                        >Checkout</a
                      >
                    </div>
                  </div>
                  <!-- End ETS customize -->
                </div>
                <!----------------------------------End cart------------------------------------------>
              </ul>
            </div>
          </div>
        </div>

        <div class="etswarning main">
          <div class="topnote"><div id="notification"></div></div>
        </div>

        <!----------------------------------End Menu------------------------------------------>

        <div class="ctr"></div>
      </div>
    </div>
  </div>
</template>


<script>

import { Head, Link } from "@inertiajs/inertia-vue3";
import { Method } from "@inertiajs/inertia";

export default {
  name: "LowerShopNav",

  components: {
    Link,
  },


  
};
</script>

<style >
.menuResp > li > a {
    background-color: #2575C7;
    color: #FFFFFF;
}
</style>