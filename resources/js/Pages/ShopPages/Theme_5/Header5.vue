<template>
    <header class="header-v5">
      <div class="header-top wow animate__fadeInDown" data-wow-duration="1s">
        <div class="container">
          <div class="working-time"><strong class="text-uppercase">Working Time:</strong><span>{{openTime}}</span></div><a class="logo" href="#slide"><img class="img-fluid" :src="'/image/'+logo"/></a>
          <ul class="authentication-links">
            <li><Link href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="far fa-user"></i><span>Login</span></Link></li>
            <li><Link href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-sign-in-alt"></i><span>Register</span></Link></li>
          </ul>
        </div>
      </div>
      <div class="header-bottom wow animate__fadeInDown" data-wow-duration="1s">
        <div class="container">
          <!-- restaurant açık ise open kapalı ise closed clas'ını kullanın-->
          <div :class="'restaurant-status '+(timeSetting.open?'open':'closed')+' wow animate__bounceInDown'" data-wow-duration="1s">
            <img class="img-fluid" :src="'/image/'+logo"/>
            <img class="img-fluid" src="/img/icon/open.svg"/><img class="img-fluid" src="/img/icon/closed.svg"/>
          </div>
          <ul class="menu">
            <li :class="route().current('shopHome') ? 'active' : ' ' "><Link class="text-uppercase" href="/">home</Link></li>
            <li :class="route().current('shopMember') ? 'active' : ' ' "><Link class="text-uppercase" href="/member">member</Link></li>
            <li :class="route().current('shopMenu') ? 'active' : ' ' "><Link class="text-uppercase" href="/menu">menu</Link></li>
            <li :class="route().current('shopcheckout') ? 'active' : ' ' "><Link class="text-uppercase" href="/checkout">check out</Link></li>
            <li :class="route().current('shopcontactus') ? 'active' : ' ' "><Link class="text-uppercase" href="/contactus">contact us</Link></li>
          </ul>
          <Link class="menu-shopping-cart" href="/cart">
            <div class="number"><i class="fas fa-shopping-basket"></i><span>{{cartCount}}</span></div>
            <div class="price-box"><strong>Shopping Cart:</strong>
              <div class="price"><i class="fas fa-dollar-sign"></i><span class="pirce-value">{{total}}</span></div>
            </div></Link><a class="open-mobile-menu" href="javascript:void(0)"><span class="text-uppercase">menu</span><i class="fas fa-bars"></i></a>
        </div>
      </div>
    </header>
    <div class="mobile-menu-shadow"></div>
    <sidebar class="mobile-menu"><a class="close far fa-times-circle" href="#"></a><a class="logo" href="#slide"><img class="img-fluid" src="/assets/img/logo/black-logo.svg"/></a>
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
          <li><a class="fab fa-facebook" href="#" target="_blank"></a></li>
          <li><a class="fab fa-twitter" href="#" target="_blank"></a></li>
          <li><a class="fab fa-pinterest-p" href="#" target="_blank"></a></li>
          <li><a class="fab fa-instagram" href="#" target="_blank"></a></li>
        </ul>
      </div>
    </sidebar>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Login</button>
          </div>
        </div>
      </div>
    </div>
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