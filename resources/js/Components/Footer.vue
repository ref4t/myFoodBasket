<template>
  <div class="bg_custom_footer">
    <div class="fix_ets_main_content">
      <div class="etsWrapper">
        <div class="row footer sticky-stopper">
          <div class="contentFooter">
            <div class="top_footer">
              <div>
                <ul class="pull-left footer_menu">
                  <img
                    alt="Order online &amp; pay by card www.myfoodbasket.co.uk"
                    src="//www.myfoodbasket.co.uk/image/payment_logos/checkout-payment-card.png"
                    style="height: 25px"
                  />
                  <br />
                  <li><a href="/">Home</a><span>::</span></li>
                  <li><a href="/menu">Order Online</a><span>::</span></li>
                  <li><a href="/contact">Contact Us</a><span>::</span></li>
                  <li><a href="/sitemap">Site Map</a></li>
                </ul>
                <ul class="pull-right ftr_sm">
                  <li>
                    <a
                      target="_blank"
                      href="https://www.facebook.com/profile.php?id=100013083164384"
                      ><i class="fa fa-facebook-official"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-sm-12 bottomFooter">
              <p class="pull-left">
                Copyright © 2021 A.K. Spices-Stage <br />
                <a href="//www.myfoodbasket.co.uk/">
                  <img
                    alt="Online Ordering For Takeaways, powered by My Food Basket"
                    src="//www.myfoodbasket.co.uk/image/powered-by-mfb.png"
                  />
                </a>
              </p>
            </div>
          </div>
        </div>

        <!-------------------------------Polianna js---------------------------------------------------------------->
      </div>
    </div>
  </div>
</template>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3";
import { Method } from "@inertiajs/inertia";

export default {
  name: "Footer",

  components: {
    Link,
  },
};
</script>