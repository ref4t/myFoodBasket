<template >
<footer class="footer-v5 wow animate__fadeInUp" data-wow-duration="1s">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="footer-about mb-4"><a class="f-logo" href="#"> <img class="img-fluid" :src="'/image/'+logo"/></a>
               
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-6 offset-lg-2">
              <h5 class="footer-title text-uppercase">quick links</h5>
              <div class="row">
                <div class="col-12 col-sm-12 col-md-8">
                  <ul class="__footer-menu row mb-4">
                    <li class="col-6"><a class="text-uppercase" href="/"          >home</a></li>
                    <li class="col-6"><a class="text-uppercase" href="/member"    >member</a></li>
                    <li class="col-6"><a class="text-uppercase" href="/menu"      >menu</a></li>
                    <li class="col-6"><a class="text-uppercase" href="/checkout"  >check out</a></li>
                    <li class="col-6"><a class="text-uppercase" href="/contactus" >contact us</a></li>
                  </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-4">
                  <div class="__social-links mb-4"><a class="bg-facebook"><i class="fab fa-facebook-f"></i><span>Facebook</span></a><a class="bg-twitter"><i class="fab fa-twitter"></i><span>Twitter</span></a><a class="bg-linkedin"><i class="fab fa-linkedin"></i><span>Linkedin</span></a><a class="bg-instagram"><i class="fab fa-instagram"></i><span>Instagram</span></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright">
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