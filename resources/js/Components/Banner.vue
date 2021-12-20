<template>
  <div class="header_banner">
    <div class="ybc_wide_banner_fullwidth">
      <div
        class="
          logo-desktop-enable logo-desktop
          home_logo_table
          enable_logo_tablet
        "
      >
        <a href="https://www.123.the-public.co.uk/index.php?route=common/home">
          <div class="bg-logo">
            <img
              :src="'/image/'+shopLogo"
              title="A.K. Spices-Stage"
              alt="A.K. Spices-Stage"
            />
          </div>
        </a>
      </div>

      <div class="timeStore shop_closed">
        <img v-if="shopOpen" src="/images/open.png" />
        <img v-else src="/images/ets_close.png" />
      </div>
    </div>
  </div>
</template>

<script>

import { Head, Link } from "@inertiajs/inertia-vue3";
import { Method } from "@inertiajs/inertia";

export default {
   props:['shopLogo','shopOpen'],
   setup(props){
     console.log(props);
   }
}
</script>