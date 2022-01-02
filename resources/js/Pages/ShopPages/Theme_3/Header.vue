<template>
   <header class="header-v3">
      <div class="header-top wow animate__fadeInDown" data-wow-duration="1s">
        <div class="container">
          <div class="working-time"><strong class="text-uppercase">Working Time:</strong><span>09:00 - 23:00</span></div>
          <div class="__right-content">
            <ul class="authentication-links">
          <li><Link href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="far fa-user"></i><span>Login</span></Link></li>
          <li><Link href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-sign-in-alt"></i><span>Register</span></Link></li>
        </ul><a class="menu-shopping-cart" href="">
              <div class="number"><i class="fas fa-shopping-basket"></i><span>{{cartCount}}</span></div>
              <div class="price-box"><strong>Shopping Cart:</strong>
                <div class="price"><i class="fas fa-dollar-sign"></i><span class="pirce-value">{{total}}</span></div>
              </div></a>
          </div>
        </div>
      </div>
      <div class="header-bottom wow animate__fadeInDown" data-wow-duration="1s">
        <div class="container"><a class="logo" href="#slide"><img class="img-fluid" :src="'/image/'+logo"/></a>
          <ul class="menu">
            <li :class="route().current('shopHome') ? 'active' : ' ' "><Link class="text-uppercase" href="/">home</Link></li>
            <li :class="route().current('shopMember') ? 'active' : ' ' "><Link class="text-uppercase" href="/member">member</Link></li>
            <li :class="route().current('shopMenu') ? 'active' : ' ' "><Link class="text-uppercase" href="/menu">menu</Link></li>
            <li :class="route().current('shopcheckout') ? 'active' : ' ' "><Link class="text-uppercase" href="/checkout">check out</Link></li>
            <li :class="route().current('shopcontactus') ? 'active' : ' ' "><Link class="text-uppercase" href="/contactus">contact us</Link></li>
          </ul>
          <!-- restaurant açık ise open kapalı ise closed clas'ını kullanın-->
          <div class="restaurant-status open wow animate__bounceInDown" data-wow-duration="1s"><img class="img-fluid" src="/assets/img/icon/open.svg"/><img class="img-fluid" src="/assets/img/icon/closed.svg"/></div><a class="open-mobile-menu" href="javascript:void(0)"><span class="text-uppercase">menu</span><i class="fas fa-bars"></i></a>
        </div>
      </div>
    </header>
    <div class="mobile-menu-shadow"></div>
    <sidebar class="mobile-menu"><a class="close far fa-times-circle" href="#"></a><a class="logo" href="#slide"><img class="img-fluid" :src="'/image/'+logo"/></a>
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
          <li><Link href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="far fa-user"></i><span>Login</span></Link></li>
          <li><Link href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-sign-in-alt"></i><span>Register</span></Link></li>
        </ul>
      </div>
      <div class="bottom">
        <div class="working-time"><strong class="text-uppercase">Working Time:</strong><span>09:00 - 23:00</span></div>
        <ul class="social-links">
          <li><Link class="fab fa-facebook" href="javascript:void(0)" target="_blank"></Link></li>
          <li><Link class="fab fa-twitter" href="javascript:void(0)" target="_blank"></Link></li>
          <li><Link class="fab fa-pinterest-p" href="javascript:void(0)" target="_blank"></Link></li>
          <li><Link class="fab fa-instagram" href="javascript:void(0)" target="_blank"></Link></li>
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
    props:['logo','total','cartCount','openingTime','timeSetting'],
    computed:{
      openTime:function(){
         let days=this.openingTime.split(" ")
      let finalDays=[];
      days.forEach((val,ind) => {
        finalDays[ind]=val.split(',');
      });
      const d = new Date();
      let todayDay = d.toLocaleString('en-GB', { weekday: 'long' });
      let timeToday=null;
      finalDays.forEach(element => {
        if(element[0] === todayDay){
          
          timeToday= element[1];
        }
        
      });
      if(!timeToday){
          return "Closed Today";
        }
        else{
          return timeToday;
        }
      }
    },
    mounted(){
    
      
    }
}
</script>