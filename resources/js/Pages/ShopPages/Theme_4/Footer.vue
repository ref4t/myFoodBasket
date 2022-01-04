<template >
<footer class="footer-v4 wow animate__fadeInUp" data-wow-duration="1s">
      <div class="footer-top">
        <div class="container">
          <ul class="__menu">
            <li><a class="text-uppercase" ref="/"         >home</a></li>
            <li><a class="text-uppercase" ref="/member"   >member</a></li>
            <li><a class="text-uppercase" ref="/menu"     >menu</a></li>
            <li><a class="text-uppercase" ref="/checkout" >check out</a></li>
            <li><a class="text-uppercase" ref="/contactus">contact us</a></li>
          </ul>
          <div class="__social-links"><a class="fab fa-facebook-f"></a><a class="fab fa-twitter"></a><a class="fab fa-linkedin"></a><a class="fab fa-instagram"></a></div>
        </div><a class="f-logo" href="#"><img class="img-fluid" :src="'/image/'+logo"/></a>
      </div>
      <div class="footer-bottom">
        <p>Copyright © 2021 {{name}}</p>
      </div>
    </footer><a id="go-up" href="javascript:void(0)"><i class="fas fa-angle-up"></i></a>

</template>
<script>
export default {
    props:['logo','name','address','telephone','email'],
}
</script>
<style>
    
</style>