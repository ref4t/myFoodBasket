<template >
<footer class="footer-v2 wow animate__fadeInUp" data-wow-duration="1s">
      <div class="footer-content">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-4"><a class="f-logo" href="#"><img class="img-fluid" :src="'/image/'+logo"/></a>
              <p></p>
              <div class="social-links"><a class="fab fa-facebook-f" href="#" target="_blank"></a><a class="fab fa-twitter" href="#" target="_blank"></a><a class="fab fa-instagram" href="#" target="_blank"></a><a class="fab fa-linkedin" href="#" target="_blank"></a></div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-list">
                <h5 class="footer-title text-uppercase">contacts</h5>
                <p>{{address}} </p><a href="#">{{telephone}}</a><a href="#">{{email}}</a>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <h5 class="footer-title text-uppercase">quick links</h5>
              <ul class="row quick-links">
                <li class="col-6"><a class="text-uppercase" href="/"          >home</a></li>
                <li class="col-6"><a class="text-uppercase" href="/member"    >member</a></li>
                <li class="col-6"><a class="text-uppercase" href="/menu"      >menu</a></li>
                <li class="col-6"><a class="text-uppercase" href="/checkout"  >check out</a></li>
                <li class="col-6"><a class="text-uppercase" href="/contactus" >contact us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          <p>Copyright © 2021 {{name}}</p>
        </div>
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