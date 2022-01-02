<template>

     <TopHeader5 :logo="setting.config_logo" :total="cartTotal" :cartCount="Object.keys(cartTest).length" :openingTime="setting.opening_time" :timeSetting="timeSetting"/>


    <div class="container mb-5">
        <h1 class="my-5 text-uppercase">Account Login</h1>
        <div class="row">
            <div class="col-lg-6 col-12">
                <h2>New Customer</h2>
                    <p><b>Register Account</b></p>
                    <p> By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made. </p>
                    <a class="btn btn-success" href="http://www.huaxin.co.uk/registration"> Continue </a>
                    
            </div>
            <div class="col-lg-6 col-12">
                <h2>Returning Customer</h2>
                <form action="">
                    <p>I am a returning customer</p>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="my-3">
                    <button type="submit" class="btn btn-success">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <TopFooter5/>


</template>


<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import TopHeader5 from '@/Pages/ShopPages/Theme_5/Header5.vue';
import TopFooter5 from '@/Pages/ShopPages/Theme_5/Footer5.vue';
export default {
    components:{
        Head,
        Link,
        TopHeader5,
        TopFooter5,
    },
    data(){
        return{
            cartTest:this.cartItems,
            cartTotal:this.cTotal,
            cartSubtotal:this.cSubtotal,
        }
        
    },
    props:{
        setting:Object,
        cartItems:Object,
        cTotal:String,
        cSubtotal:String,
        timeSetting:Object,
        layout:Object
    },
    mounted() {
        let links=[ 
                    '/js/theme6/app.js'
                  ];
  links.forEach(function(value,index){
    let externalScript = document.createElement('script')
      // externalScript.async = true
      externalScript.setAttribute('src', value)
      document.body.appendChild(externalScript)
  });
      
   },
}

</script>