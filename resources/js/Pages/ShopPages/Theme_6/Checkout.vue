<template>
      <Head>
</Head>
<TopHeaderSix :logo="setting.config_logo" :total="cartTotal" :cartCount="Object.keys(cartTest).length" :openingTime="setting.opening_time" :timeSetting="timeSetting"></TopHeaderSix>
    <div class="container mb-5" style="min-height:34vh;">
        <h2 class="my-5 text-uppercase text-center" id="checkoutPageHeader2">Checkout - Step {{stepCount}}/3</h2>
        <div class="progress mb-3" style="height: 10px;">
            <div class="progress-bar" role="progressbar" :style="'width:'+progressStatus+'%;'" :aria-valuenow="progressStatus" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="row">
            <div class="col-12 border-bottom" v-show="stepCount === 1">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" @click="checkboxCheck('flexRadioDefault1')">
                          <input type="radio" class="form-check-input me-3" name="checkoutAs" id="flexRadioDefault1" checked> 
                          <label class="form-check-label" for="flexRadioDefault1"> Log in </label>
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body" style="text-align:center">
                               <a class="btn btn-primary" href="#" style="background-color:#3b5998; color:white"><i class="fab fa-facebook-f me-2" style="color:white"></i> Log in with Facebook</a>
                               <p class="m-3">OR</p>
                               <form @submit.prevent="submit" style="width:50%;display: inline-block;">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" v-model="loginForm.email" :class="v$.loginForm.email.$error ? 'is-invalid' : ' ' ">
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" v-model="loginForm.password" :class="v$.loginForm.password.$error ? 'is-invalid' : ' ' ">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                    <div class="my-3">
                                        <button type="submit" class="btn btn-success" @click="customerLogin()">Log in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" @click="checkboxCheck('flexRadioDefault2')">
                          <input type="radio" class="form-check-input me-3" name="checkoutAs" id="flexRadioDefault2"> 
                          <label class="form-check-label" for="flexRadioDefault2"> Guest checkout </label>
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body" style="text-align:center">
                                <form @submit.prevent="submit" style="width:50%; display: inline-block;">
                                    <div class="form-control">  
                                    <div class="row">
                                    <div class="col-12">
                                    <div class="form-floating my-3">
                                        <select name="gender" class="form-select" aria-label="Default select example" v-model="guestForm.gender" :class="v$.guestForm.gender.$error ? 'is-invalid' : ' ' " >
                                            <option value=null>Title</option>
                                            <option value="1">Mr.</option> 
                                            <option value="2">Mrs.</option> 
                                            <option value="3">Ms.</option> 
                                            <option value="4">Miss.</option> 
                                            <option value="5">Dr.</option> 
                                            <option value="6">Prof.</option> 
                                        </select>
                                    </div>
                                    </div>
                                    <div class="col-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="GueastFormFirst" placeholder="John"  v-model="guestForm.firstName" :class="v$.guestForm.firstName.$error ? 'is-invalid' : ' ' ">
                                        <label for="GueastFormFirst">First Name</label>
                                    </div>
                                    </div>
                                    <div class="col-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="GueastFormLast" placeholder="Doe"  v-model="guestForm.lastName" :class="v$.guestForm.lastName.$error ? 'is-invalid' : ' ' " >
                                        <label for="GueastFormLast">Last Name</label>
                                    </div>
                                    </div>
                                    <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="GueastFormEmail" placeholder="name@example.com"  v-model="guestForm.email " :class="v$.guestForm.email.$error ? 'is-invalid' : ' ' " >
                                        <label for="GueastFormEmail">Email address</label>
                                    </div>
                                    </div>
                                    <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="GueastFormPhone" placeholder="12341234"  v-model="guestForm.phone" :class="v$.guestForm.phone.$error ? 'is-invalid' : ' ' " >
                                        <label for="GueastFormPhone">Phone Number</label>
                                    </div>
                                    </div>
                                    <div class="my-3">
                                    <button type="submit" class="btn btn-success" @click="guestCustomer()">Continue</button>
                                    </div>
                                    </div>
                                    </div>
                                </form>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree" @click="checkboxCheck('flexRadioDefault3')">
                          <input type="radio" class="form-check-input me-3" name="checkoutAs" id="flexRadioDefault3"> 
                          <label class="form-check-label" for="flexRadioDefault3"> Create an account </label>
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body" style="text-align:center">
                            <form @submit.prevent="submit" style="width:50%; display: inline-block;">
                                <div class="form-control mb-3">
                                    <div class="row">
                                        <div class="form-floating mb-3 ">
                                            <select name="gender" class="form-select my-3" aria-label="Default select example" v-model="createForm.gender" :class="v$.createForm.gender.$error ? 'is-invalid' : ' ' " >
                                                <option value=null>Title</option>
                                                <option value="1">Mr.</option> 
                                                <option value="2">Mrs.</option> 
                                                <option value="3">Ms.</option> 
                                                <option value="4">Miss.</option> 
                                                <option value="5">Dr.</option> 
                                                <option value="6">Prof.</option> 
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating mb-3 ">
                                                <input type="text" class="form-control" id="createFormFirstName" placeholder="John" v-model="createForm.firstName" :class="v$.createForm.firstName.$error ? 'is-invalid' : ' ' " >
                                                <label for="createFormFirstName">First Name</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="createFormLastName" placeholder="Doe" v-model="createForm.lastName" :class="v$.createForm.lastName.$error ? 'is-invalid' : ' ' " >
                                                <label for="createFormLastName">Last Name</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="createFormEmail" placeholder="name@example.com" v-model="createForm.email" :class="v$.createForm.email.$error ? 'is-invalid' : ' ' " >
                                                <label for="createFormEmail">Email address</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="createFormPhone" placeholder="12341234" v-model="createForm.phone" :class="v$.createForm.phone.$error ? 'is-invalid' : ' ' " >
                                                <label for="createFormPhone">Phone Number</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" id="createFormPass" placeholder="Password" v-model="createForm.password" :class="v$.createForm.password.$error ? 'is-invalid' : ' ' " >
                                                <label for="createFormPass">Password</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" id="createFormConPass" placeholder="Password" v-model="createForm.password_confirmation" :class="v$.createForm.password_confirmation.$error ? 'is-invalid' : ' ' ">
                                                <label for="createFormConPass">Confirm Password</label>
                                            </div>
                                        </div>

                                        <div class="my-3">
                                            <button type="submit" class="btn btn-success" @click="createCustomer()">Create</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 border-bottom" v-show="stepCount === 2">
                <div class="card text-center">
                    <div class="card-header fw-bold">
                        Order Type
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioOrderType" id="flexRadioOrderType1">
                                    <label class="form-check-label" for="flexRadioOrderType1">
                                        I will collect my order
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioOrderType" id="flexRadioOrderType2" checked>
                                    <label class="form-check-label" for="flexRadioOrderType2">
                                        Deliver to my address
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-header fw-bold">
                        Delivery Time
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-2">
                               <select class="form-select" aria-label="Default select example">
                                    <option selected="selected" value="ASAP">ASAP</option>
                                    <option value="11:30-11:45">11:30-11:45</option>
                                    <option value="11:15-11:30">11:15-11:30</option>
                                    <option value="11:45-12:00">11:45-12:00</option>
                                    <option value="12:00-12:15">12:00-12:15</option>
                                    <option value="12:15-12:30">12:15-12:30</option>
                                    <option value="12:30-12:45">12:30-12:45</option>
                                    <option value="12:45-13:00">12:45-13:00</option>
                                    <option value="13:00-13:15">13:00-13:15</option>
                                    <option value="13:15-13:30">13:15-13:30</option>
                                    <option value="13:30-13:45">13:30-13:45</option>
                                    <option value="13:45-14:00">13:45-14:00</option>
                                    <option value="14:00-14:15">14:00-14:15</option>
                                    <option value="14:15-14:30">14:15-14:30</option>
                                    <option value="14:30-14:45">14:30-14:45</option>
                                    <option value="14:45-15:00">14:45-15:00</option>
                                    <option value="15:00-15:15">15:00-15:15</option>
                                    <option value="15:15-15:30">15:15-15:30</option>
                                    <option value="15:30-15:45">15:30-15:45</option>
                                    <option value="15:45-16:00">15:45-16:00</option>
                                    <option value="16:00-16:15">16:00-16:15</option>
                                    <option value="16:15-16:30">16:15-16:30</option>
                                    <option value="16:30-16:45">16:30-16:45</option>
                                    <option value="16:45-17:00">16:45-17:00</option>
                                    <option value="17:00-17:15">17:00-17:15</option>
                                    <option value="17:15-17:30">17:15-17:30</option>
                                    <option value="17:30-17:45">17:30-17:45</option>
                                    <option value="17:45-18:00">17:45-18:00</option>
                                    <option value="18:00-18:15">18:00-18:15</option>
                                    <option value="18:15-18:30">18:15-18:30</option>
                                    <option value="18:30-18:45">18:30-18:45</option>
                                    <option value="18:45-19:00">18:45-19:00</option>
                                    <option value="19:00-19:15">19:00-19:15</option>
                                    <option value="19:15-19:30">19:15-19:30</option>
                                    <option value="19:30-19:45">19:30-19:45</option>
                                    <option value="19:45-20:00">19:45-20:00</option>
                                    <option value="20:00-20:15">20:00-20:15</option>
                                    <option value="20:15-20:30">20:15-20:30</option>
                                    <option value="20:30-20:45">20:30-20:45</option>
                                    <option value="20:45-21:00">20:45-21:00</option>
                                    <option value="21:00-21:15">21:00-21:15</option>
                                    <option value="21:15-21:30">21:15-21:30</option>
                                    <option value="21:30-21:45">21:30-21:45</option>
                                    <option value="21:45-22:00">21:45-22:00</option>
                                    <option value="22:00-22:15">22:00-22:15</option>
                                    <option value="22:15-22:30">22:15-22:30</option>
                                    <option value="22:30-22:45">22:30-22:45</option>
                                    <option value="22:45-23:00">22:45-23:00</option>
                                    <option value="23:00-23:15">23:00-23:15</option>
                                    <option value="23:15-23:30">23:15-23:30</option>
                                    <option value="23:30-23:45">23:30-23:45</option>
                                    <option value="23:45-00:00">23:45-00:00</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="card text-center">
                    <div class="card-header fw-bold">
                        Delivery Address
                    </div>
                    <div class="card-body" style="text:center">
                        <div class="form-control w-50" style="display:inline-block">  
                            <div class="row">
                                <div class=" col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="addressFormLine1" placeholder="name@example.com" v-model="addressForm.line1" :class="v$.addressForm.line1.$error ? 'is-invalid' : ' ' " >
                                        <label for="addressFormLine1">Address Line 1</label>
                                    </div>
                                </div>
                                <div class=" col-12">
                                     <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="addressFormLine2" placeholder="name@example.com" v-model="addressForm.line2" :class="v$.addressForm.line2.$error ? 'is-invalid' : ' ' ">
                                        <label for="addressFormLine2">Address Line 2</label>
                                    </div>
                                </div>
                                <div class=" col-md-6 col-6">
                                     <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="addressFormCity" placeholder="name@example.com" v-model="addressForm.city" :class="v$.addressForm.city.$error ? 'is-invalid' : ' ' " >
                                        <label for="addressFormCity">City</label>
                                    </div>
                                </div>
                                <div class=" col-md-6 col-6">
                                     <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="addressFormPost" placeholder="name@example.com" v-model="addressForm.post" :class="v$.addressForm.post.$error ? 'is-invalid' : ' ' ">
                                        <label for="addressFormPost">Post Code</label>
                                    </div>
                                </div>
                                <div class=" col-12">
                                     <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="addressFormPhone" placeholder="name@example.com" v-model="addressForm.phone" :class="v$.addressForm.phone.$error ? 'is-invalid' : ' ' ">
                                        <label for="addressFormPhone">Phone</label>
                                    </div>
                                </div>
                                <div class=" col-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" v-model="addressForm.addtional"></textarea>
                                        <label for="floatingTextarea2">Additional Directions (optional)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-3">
                             <div class="col-6 ">
                                <button class="btn btn-light" @click="previousStep"><i class="fas fa-chevron-left"></i> Back</button>
                            </div>
                            <div class="col-6 ">
                                <button class="btn btn-success" @click="nextStep">Next</button>
                            </div>
                        </div>
                    </div>
                 </div>

            </div>
            <div class="col-12 border-bottom" v-show="stepCount === 3">
                <div class="card text-center">
                    <div class="card-header fw-bold">
                        My Basket
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Quantity</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             <tr  v-for="item in cartTest" :key="item">
                                <th scope="row">{{item.qty}}</th>
                                <td>{{ htmlDecode(item.options.length != 0 ? item.options.size : '')+' '+item.name}}</td>
                                <td>{{item.price}}</td>
                                <td><a href="javascript:void(0)"><i class="fas fa-times-circle me-2" style="color:red" @click="removeFromCart(item.id,item.rowId)"></i></a></td>
                            </tr>
                            <tr>
                                <td colspan="3" style="text-align-last: end; padding-right: 50px;">
                                    Subtotal:  {{cartSubtotal}} <br/>
                                    Total: {{cartTotal}}
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="card-body">
                        <div class="flex-end">
                          
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-header fw-bold">
                        Coupons/Vouchers/Loyalty
                    </div>
                    <div class="card-body">
                        <div class="form-control w-50" style="display:inline-block">  
                            <div class="row">
                                <div class=" col-9">
                                    <div class="form-floating my-3">
                                        <input type="text" class="form-control" id="voucher1"  v-model="finalForm.voucher">
                                        <label for="voucher1">Voucher Code</label>
                                    </div>
                                </div>
                                <div class="col-3 my-3">
                                    <button class="btn btn-success" type="button">Apply</button>
                                </div>
                                <div class=" col-9">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="coupon1"  v-model="finalForm.coupon">
                                        <label for="coupon1">Coupon Code</label>
                                    </div>
                                </div>
                                <div class="col-3 mb-3">
                                    <button class="btn btn-success" type="button">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-header fw-bold">
                        Payment Options
                    </div>
                    <div class="card-body">
                        <div class="form-control">
                            <div class="col-3" style="text-align:center;display:inline-block;">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="paymentMethod1" checked v-model="finalForm.payment">
                                    <label class="form-check-label" for="paymentMethod1">
                                       Pay Online Through Card
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="paymentMethod2" v-model="finalForm.payment" >
                                    <label class="form-check-label" for="paymentMethod2">
                                        Pay Through Card on Collection
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-3 text-center">
                    <div class="col-6 ">
                        <button class="btn btn-light" @click="previousStep"><i class="fas fa-chevron-left"></i> Back</button>
                    </div>
                    <div class="col-6 ">
                        <button class="btn btn-success" @click="checkoutSubmit">Pay £{{cartTotal}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<TopFooterSix :logo="setting.config_logo" :name="setting.config_name"></TopFooterSix>
</template>
<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import TopHeaderSix from '@/Pages/ShopPages/Theme_6/Header6.vue';
import TopFooterSix from '@/Pages/ShopPages/Theme_6/Footer6.vue';
import { reactive } from 'vue';
import { useToast } from "vue-toastification";
import useValidate from '@vuelidate/core'
import { required, email, minLength, maxLength, sameAs, numeric } from '@vuelidate/validators'

export default {
     components:{
        Head,
        Link,
        TopHeaderSix,
        TopFooterSix,
    },
    setup(){
        const loginForm = reactive({
            email: null,
            password: null,
        })
        const guestForm = reactive({
                    gender: null,
                    firstName: null,
                    lastName: null,
                    email: null,
                    phone: null,
                    })
        const createForm = reactive({
            gender: null,
            firstName: null,
            lastName: null,
            email: null,
            phone: null,
            password:null,
            password_confirmation:null,
        })
        const addressForm = reactive({
            line1:null,
            line2:null,
            city:null,
            post:null,
            phone:null,
            additional:null,
        })
        const finalForm = reactive({
            voucher:null,
            coupon:null,
        })
        const toast = useToast();
        return {loginForm, guestForm, createForm, addressForm, toast, finalForm}
    },
    data(){
        return{
            v$: useValidate(),
            cartTest:this.cartItems,
            cartTotal:this.cTotal,
            cartSubtotal:this.cSubtotal,
            stepCount:1,
        }
        
    },
    validations(){
        return {
            loginForm:{
                email: {required,email},
                password: {required},
            },
            guestForm:{
                gender: {required},
                firstName: {required},
                lastName: {required},
                email: {required, email},
                phone: {required},
            },
            createForm :{
                gender:     {required},
                firstName:  {required},
                lastName:   {required},
                email:      {required,email},
                phone:      {required},
                password:   {required},
                password_confirmation:{required, sameAs: sameAs(this.createForm.password) },
            },
            addressForm :{
                line1:{required},
                line2:{required},
                city:{required},
                post:{required},
                phone:{required},
                additional:{},
            }
        }
    },
    computed:{
        progressStatus: function () {
            return this.stepCount*(100/3);
        }
    },
    props:{
        setting:Object,
        cartItems:Object,
        cTotal:String,
        cSubtotal:String,
        timeSetting:Object,
    },
    methods:{
        htmlDecode(input) {
        var doc = new DOMParser().parseFromString(input, "text/html");
        return doc.documentElement.textContent;
        },
        checkboxCheck(checkId){
            document.getElementById(checkId).checked = true;
        },
        customerLogin(){
            this.v$.loginForm.$validate()
            
            if(!this.v$.loginForm.$error){
                console.log("validated login");
                console.log(this.loginForm);

                // to get password reset token
                // axios.post(this.route('customer.login'), this.loginForm)

                // to send email with password reset link
                axios.post(this.route('customer.password.email'), this.loginForm)
                .then((response) => {
                    console.log(response);
                    // window.location.href = this.route('admin.dashboard');
                })
                .catch((error) => {
                    console.log(error);
                    // this.error.status = true;
                    // this.error.message = 'Email or password is incorrect...';
                });
            }
            else{
                console.log("failed customer")
            }
        },
        createCustomer(){
            this.v$.createForm.$validate()
            
            if(!this.v$.createForm.$error){
                console.log("validated");
                console.log(this.createForm);

                axios.post(this.route('customer.register'), this.createForm)
                .then((response) => {
                    console.log(response);
                    // window.location.href = this.route('admin.dashboard');

                    if (response.headers.status) { //if there is server side error
                        console.log(response.data); //error messages
                    } else {
                        
                        // this.stepCount=2;
                        // document.getElementById('checkoutPageHeader2').scrollIntoView();
                    }
                })
                .catch((error) => {
                    console.log(error.headers);
                    // this.error.status = true;
                    // this.error.message = 'Email or password is incorrect...';
                });
            }
            else{
                console.log("failed")
            }
        },
        guestCustomer(){
            this.v$.guestForm.$validate()
            
            if(!this.v$.guestForm.$error){
                console.log("validated");

                console.log(this.guestForm);
                this.stepCount=2;
                document.getElementById('checkoutPageHeader2').scrollIntoView();
                console.log(this.progressStatus)
            }else{
                console.log("failed")
            }
        },
        previousStep(){
            if(this.stepCount != 1){
                this.stepCount= this.stepCount-1;
                document.getElementById('checkoutPageHeader2').scrollIntoView();
            }

        },
        nextStep(){

            this.v$.addressForm.$validate()
            
            if(!this.v$.addressForm.$error){
                console.log("validated");
            
                this.stepCount=3;
                document.getElementById('checkoutPageHeader2').scrollIntoView();
            }else{
                console.log("failed")
            }

        },
        removeFromCart(productId,rowID){
             let  pdata={'id_product':productId,'rowId':rowID};
             let cd=this;
             this.axios.post('/removefromcart',pdata).then((response) => {
              this.toast.warning('Removed from cart');
                 cd.cartTest=response.data.contents;
                 cd.cartSubtotal=response.data.subtotal;
               cd.cartTotal=response.data.total;
            //    console.log(response.data);
                    }).catch(error => {
                this.errorMessage = error.message;
                });
        },
    }
}
</script>
<style lang="">
    
</style>