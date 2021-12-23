<template>
    <header class="header-v6">
      <div class="header-top wow animate__fadeInDown" data-wow-duration="1s">
        <div class="container">
          <ul class="authentication-links">
            <li><a href="#"><i class="far fa-user"></i><span>Login</span></a></li>
            <li><a href="#"><i class="fas fa-sign-in-alt"></i><span>Register</span></a></li>
          </ul><a class="menu-shopping-cart" href="">
            <div class="number"><i class="fas fa-shopping-basket"></i><span>2</span></div>
            <div class="price-box"><strong>Shopping Cart:</strong>
              <div class="price"><i class="fas fa-dollar-sign"></i><span class="pirce-value">32.10</span></div>
            </div></a>
        </div>
      </div>
      <div class="header-center">
        <div class="container">
          <ul class="menu">
            <li class="active"><a class="text-uppercase" href="#">home</a></li>
            <li><a class="text-uppercase" href="#">member</a></li>
            <li><a class="text-uppercase" href="#">menu</a></li>
            <li><a class="text-uppercase" href="#">check out</a></li>
            <li><a class="text-uppercase" href="#">contact us</a></li>
          </ul>
        </div>
      </div>
      <div class="header-bottom wow animate__fadeInDown" data-wow-duration="1s">
        <div class="container">
          <div class="working-time"><i class="far fa-clock"></i>
            <div><strong class="text-uppercase">Working Time:</strong><span>09:00 - 23:00</span></div>
          </div><a class="logo" href="#slide"><img class="img-fluid" src="/img/logo/logo.svg"/></a>
          <!-- restaurant açık ise open kapalı ise closed clas'ını kullanın-->
          <div class="restaurant-status open wow animate__bounceInDown" data-wow-duration="1s"><img class="img-fluid" src="/img/icon/open.svg"/><img class="img-fluid" src="/img/icon/closed.svg"/></div><a class="open-mobile-menu" href="javascript:void(0)"><span class="text-uppercase">menu</span><i class="fas fa-bars"></i></a>
        </div>
      </div>
    </header>
    <div class="mobile-menu-shadow"></div>
    <sidebar class="mobile-menu"><a class="close far fa-times-circle" href="#"></a><a class="logo" href="#slide"><img class="img-fluid" src="/img/logo/black-logo.svg"/></a>
      <div class="top">
        <ul class="menu">
          <li class="active"><a class="text-uppercase" href="#">home</a></li>
          <li><a class="text-uppercase" href="#">member</a></li>
          <li><a class="text-uppercase" href="#">menu</a></li>
          <li><a class="text-uppercase" href="#">check out</a></li>
          <li><a class="text-uppercase" href="#">contact us</a></li>
        </ul>
      </div>
      <div class="center">
        <ul class="authentication-links">
          <li><a href="#"><i class="far fa-user"></i><span>Login</span></a></li>
          <li><a href="#"><i class="fas fa-sign-in-alt"></i><span>Register</span></a></li>
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
</template>
<script>
export default {
    
}
</script>
<style>
    
</style>