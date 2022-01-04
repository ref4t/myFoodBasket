<template >
<footer class="footer-v3 wow animate__fadeInUp" data-wow-duration="1s">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-3">
              <div class="footer-about">
                <h5 class="footer-title text-capitalize"> <img class="img-fluid" :src="'/image/'+logo"/> </h5>
                
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-9">
              <h5 class="footer-title text-capitalize">get in touch</h5>
              <div class="row">
                <div class="col-12 col-sm-12 col-md-6">
                  <div class="__info-item"><strong>Office Address</strong>
                    <p>{{address}}</p>
                  </div>
                  <div class="__info-item"><strong>Phone Number</strong><a href="tel:">{{telephone}}</a></div>
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                  <div class="__info-item"><strong>E-mail Address</strong><a href="mailto:">{{email}}</a></div>
                  <div class="__info-item"><strong>Online Follow Us</strong>
                    <div class="__social-links"><a class="fab fa-facebook-f"></a><a class="fab fa-twitter"></a><a class="fab fa-linkedin"></a><a class="fab fa-instagram"></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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