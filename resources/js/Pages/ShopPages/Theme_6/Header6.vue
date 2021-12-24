<template>
    <header class="header-v6">
      <div class="header-top wow animate__fadeInDown" data-wow-duration="1s">
        <div class="container">
          <ul class="authentication-links">
            <li><Link href="#"><i class="far fa-user"></i><span>Login</span></Link></li>
            <li><Link href="#"><i class="fas fa-sign-in-alt"></i><span>Register</span></Link></li>
          </ul><Link class="menu-shopping-cart" href="">
            <div class="number"><i class="fas fa-shopping-basket"></i><span>{{cartCount}}</span></div>
            <div class="price-box"><strong>Shopping Cart:</strong>
              <div class="price"><i class="fas fa-dollar-sign"></i><span class="pirce-value">{{total}}</span></div>
            </div></Link>
        </div>
      </div>
      <div class="header-center">
        <div class="container">
          <ul class="menu">
            <li :class="route().current('shopHome') ? 'active' : ' ' "><Link class="text-uppercase" href="/">home</Link></li>
            <li :class="route().current('shopMember') ? 'active' : ' ' "><Link class="text-uppercase" href="/member">member</Link></li>
            <li :class="route().current('shopMenu') ? 'active' : ' ' "><Link class="text-uppercase" href="/menu">menu</Link></li>
            <li :class="route().current('shopcheckout') ? 'active' : ' ' "><Link class="text-uppercase" href="/checkout">check out</Link></li>
            <li :class="route().current('shopcontactus') ? 'active' : ' ' "><Link class="text-uppercase" href="/contactus">contact us</Link></li>
          </ul>
        </div>
      </div>
      <div class="header-bottom wow animate__fadeInDown" data-wow-duration="1s">
        <div class="container">
          <div class="working-time"><i class="far fa-clock"></i>
            <div><strong class="text-uppercase">Working Time:</strong><span>09:00 - 23:00</span></div>
          </div><Link class="logo" href="#slide"><img class="img-fluid" :src="'/image/'+logo" style="max-height:100px"/></Link>
          <!-- restaurant açık ise open kapalı ise closed clas'ını kullanın-->
          <div class="restaurant-status open wow animate__bounceInDown" data-wow-duration="1s"><img class="img-fluid" src="/img/icon/open.svg"/><img class="img-fluid" src="/img/icon/closed.svg"/></div><Link class="open-mobile-menu" href="javascript:void(0)"><span class="text-uppercase">menu</span><i class="fas fa-bars"></i></Link>
        </div>
      </div>
    </header>
    <div class="mobile-menu-shadow"></div>
    <sidebar class="mobile-menu"><Link class="close far fa-times-circle" href="#"></Link><Link class="logo" href="#slide"><img class="img-fluid" src="/img/logo/black-logo.svg"/></Link>
      <div class="top">
        <ul class="menu">
          <li :class="route().current('shopHome') ? 'active' : ' ' "><Link class="text-uppercase" href="/">home</Link></li>
          <li :class="route().current('shopMember') ? 'active' : ' ' "><Link class="text-uppercase" href="/member">member</Link></li>
          <li :class="route().current('shopMenu') ? 'active' : ' ' "><Link class="text-uppercase" href="/menu">menu</Link></li>
          <li :class="route().current('shopcheckout') ? 'active' : ' ' "><Link class="text-uppercase" href="/checkout">check out</Link></li>
          <li :class="route().current('shopcontactus') ? 'active' : ' ' "><Link class="text-uppercase" href="/contactus">contact us</Link></li>
        </ul>
      </div>
      <div class="center">
        <ul class="authentication-links">
          <li><Link href="#"><i class="far fa-user"></i><span>Login</span></Link></li>
          <li><Link href="#"><i class="fas fa-sign-in-alt"></i><span>Register</span></Link></li>
        </ul>
      </div>
      <div class="bottom">
        <div class="working-time"><strong class="text-uppercase">Working Time:</strong><span>09:00 - 23:00</span></div>
        <ul class="social-links">
          <li><Link class="fab fa-facebook" href="#" target="_blank"></Link></li>
          <li><Link class="fab fa-twitter" href="#" target="_blank"></Link></li>
          <li><Link class="fab fa-pinterest-p" href="#" target="_blank"></Link></li>
          <li><Link class="fab fa-instagram" href="#" target="_blank"></Link></li>
        </ul>
      </div>
    </sidebar>
</template>
<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
export default {
    components:{
      Head, 
      Link
    },
    props:['logo','total','cartCount'],
}
</script>
<style>
    
</style>