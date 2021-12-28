<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Add Store</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form @submit.prevent="saveStore(this.data,this.inputData)">
              <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <button type="submit" class="btn btn-success rounded-pill m-2" > SAVE </button>
                            <Link :href="route('admin.settings.shop.list')" as="button" type="button" class="btn btn-danger rounded-pill m-2" > CANCEL </Link>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                      <ul class="nav  nav-tabs font-weight-bold">
                        <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#general"
                            >General</a
                        >
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#notifications"
                            >Notifications</a
                        >
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#suspend"
                            >Suspend / Maintenance Mode</a
                        >
                        </li>
                      </ul>
                      <div class="tab-content">
                          <div id="general" class=" tab-pane active custom" >
                            <br/>

                            <table class="table" >
                              <tbody>
                                <tr>
                                  <td style="width:30%" >
                                    Website Address:
                                    <span class="info" >
                                      Include the full URL to your store. Make sure to add '/' at the end. Example: http://www.yourdomain.com/path/

                                      Don't use directories to create a new store. You should always point another domain or sub domain to your hosting
                                    </span>
                                  </td>
                                  <td>
                                    <input v-model="this.data.config_url" class="form-control" type="text">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%" >
                                    Use SSL:
                                    <span class="info" >
                                      To use SSL check with your host if a SSL certificate is installed.
                                    </span>
                                  </td>
                                  <td>
                                    <div class="form-check form-check-inline ">
                                        <input v-model="this.data.config_secure" :value="'1'" class="form-check-input" type="radio" >
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline  ">
                                        <input v-model="this.data.config_secure" :value="'0'" class="form-check-input" type="radio" >
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td style="width:30%" >
                                    SSL URL:
                                    <span class="info" >
                                      SSL URL to your store. Make sure to add '/' at the end. Example: http://www.yourdomain.com/path/

                                      Don't use directories to create a new store. You should always point another domain or sub domain to your hosting.
                                    </span>
                                  </td>
                                  <td>
                                    <input v-model="this.data.config_ssl" class="form-control" type="text">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%" >
                                    Shop Name:
                                  </td>
                                  <td>
                                    <input v-model="this.data.config_name" class="form-control" type="text">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%" >
                                    Shop Owner Name:
                                  </td>
                                  <td>
                                    <input v-model="this.data.config_owner" class="form-control" type="text">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%" >
                                    Address:
                                  </td>
                                  <td>
                                    <textarea class="form-control " v-model="this.data.config_address"  ></textarea>
                                  </td>
                                </tr>

                                <tr>
                                  <td style="width:30%">Country:</td>
                                  <td>
                                    <select v-model="this.data.config_country_id" class="form-control" name="country" id="country">
                                      <option v-for="country in country" :key="country.country_id" :value="country.country_id"> {{country.name}} </option>
                                    </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Region/State:</td>
                                  <td>
                                    <select v-model="this.data.config_zone_id" class="form-control" name="" id="">
                                      <template v-for="zone in zone" :key="zone.zone_id" >
                                        <option v-if="zone.country_id == this.data.config_country_id" :value="zone.zone_id"> {{zone.name}} </option>
                                      </template>
                                    </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Postcode:</td>
                                  <td>
                                    <input class="form-control" type="text" name="postcode" v-model="this.data.map_post_code" aria-label="postcode">
                                  </td>
                                </tr>
                                
                                <tr>
                                  <td style="width:30%">Google Maps:</td>
                                  <td>
                                    <input class="form-control" type="text" name="postcode" v-model="this.data.map_ifram" aria-label="postcode">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Google Sitemap URL:</td>
                                  <td>
                                    <input class="form-control" type="text" name="postcode" v-model="this.data.sitemap_url" aria-label="postcode">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Telephone 1:</td>
                                  <td>
                                    <input class="form-control" type="text" name="postcode" v-model="this.data.config_telephone" aria-label="postcode">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Telephone 2:</td>
                                  <td>
                                    <input class="form-control" type="text" name="postcode" v-model="this.data.config_sms_telephone" aria-label="postcode">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Language:</td>
                                  <td>
                                    <select v-model="this.data.config_language" class="form-control" name="country" id="country">
                                      <option v-for="language in language" :key="language.language_id" :value="language.code"> {{language.name}} </option>
                                    </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Currency:</td>
                                  <td>
                                    <select v-model="this.data.config_currency" class="form-control" name="country" id="country">
                                      <option v-for="currency in currency" :key="currency.currency_id" :value="currency.code"> {{currency.title}} </option>
                                    </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Title:</td>
                                  <td>
                                    <input class="form-control" type="text" name="postcode" v-model="this.data.config_title" aria-label="postcode">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Meta Tag Description:</td>
                                  <td>
                                    <textarea class="form-control" type="text" name="postcode" v-model="this.data.config_meta_description" aria-label="postcode"></textarea>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Logo:</td>
                                  <td>
                                      <input type="file" @input="inputData.logo = $event.target.files[0]" />
                                      
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">
                                    Icon:
                                    <span class="info">
                                      The icon should be a PNG that is 16px x 16px.
                                    </span>
                                  </td>
                                  <td>
                                      <input type="file" @input="inputData.icon = $event.target.files[0]" />
                                      
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">
                                    Google ReCaptcha:
                                  </td>
                                  <td>
                                    <span as="button" @click="this.data.grecaptcha = 0" v-if="this.data.grecaptcha == 1" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span as="button" v-else @click="data.grecaptcha = 1" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                    <span as="button" @click="this.data.grecaptcha = 1" v-if="this.data.grecaptcha == 0" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span as="button" v-else @click="data.grecaptcha = 0" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                  </td>
                                </tr>
                                
                                <tr>
                                  <td style="width:30%">Google reCAPTCHA Site Key:</td>
                                  <td>
                                    <input class="form-control" type="text" name="postcode" v-model="this.data.recaptcha_sitekey" aria-label="postcode">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Google reCAPTCHA Secret:</td>
                                  <td>
                                    <input class="form-control" type="text" name="postcode" v-model="this.data.recaptcha_secret" aria-label="postcode">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">
                                    Booking Module:
                                  </td>
                                  <td>
                                    <span as="button" @click="this.data.enable_booking_module = 0" v-if="this.data.enable_booking_module == 1" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span as="button" v-else @click="data.enable_booking_module = 1" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                    <span as="button" @click="this.data.enable_booking_module = 1" v-if="this.data.enable_booking_module == 0" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span as="button" v-else @click="data.enable_booking_module = 0" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                    
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">File Directory URL:</td>
                                  <td>
                                    <input class="form-control" type="text" name="postcode" v-model="this.data.file_directory_url" aria-label="postcode">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Service Charges</td>
                                  <td>
                                    <div class="form-check form-check-inline ">
                                        <input class="form-check-input" name="service_charge" type="radio" >
                                        <label class="form-check-label" for="inlineRadio1"><b>Fixed</b></label>
                                    </div>
                                    <div class="form-check form-check-inline  ">
                                        <input class="form-check-input" name="service_charge" type="radio" >
                                        <label class="form-check-label" for="inlineRadio2"><b>Percentage</b></label>
                                    </div>
                                    <input class="form-control" type="text" name="postcode" v-model="this.data.service_charge" aria-label="postcode">
                                  </td>
                                </tr>
                                      
                                      
                              </tbody>
                            </table>




                          </div>
                          <div id="notifications" class=" tab-pane fade">
                              <br/>
                                <table class="table" >
                                  <tbody>
                                    <tr>
                                      <td style="width:30%">Email:</td>
                                      <td>
                                        <input class="form-control" type="text" name="postcode" v-model="this.data.config_email" aria-label="postcode">
                                      </td>
                                    </tr>
                                    <tr>
                                      <th colspan="2" style="color: #FF802B;">
                                        SMS NOTTIFICATION
                                      </th>
                                    </tr>
                                    <tr>
                                      <td style="width:30%">
                                        SMS Notification:
                                      </td>
                                      <td>
                                        <span as="button" @click="this.data.statussms = 0" v-if="this.data.statussms == 1" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span as="button" v-else @click="data.statussms = 1" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                        <span as="button" @click="this.data.statussms = 1" v-if="this.data.statussms == 0" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span as="button" v-else @click="data.statussms = 0" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                    
                                      </td>
                                    </tr>
                                    
                                    <tr>
                                      <td style="width:30%">
                                        Notification Number
                                      </td>
                                      <td>
                                        <input class="form-control" type="text" name="postcode"  aria-label="postcode">  
                                      </td>
                                    </tr>
                                    <tr>
                                      <th colspan="2" style="color: #FF802B;">
                                        PRINTER CONFIG
                                      </th>
                                    </tr>
                                    <tr>
                                      <td style="width:30%">
                                        Restaurant id
                                      </td>
                                      <td>
                                        <input class="form-control" type="text" name="postcode" v-model="this.data.curren_store_id"  aria-label="postcode" readonly >  
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:30%">
                                        Account
                                      </td>
                                      <td>
                                        <input class="form-control" type="text" name="postcode" v-model="this.data.config_account_printer" aria-label="postcode"  >  
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:30%">
                                        Password
                                      </td>
                                      <td>
                                        <input class="form-control" type="text" v-model="this.data.config_password_printer" name="postcode"  aria-label="postcode"  >  
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:30%">
                                        Feed url:
                                      </td>
                                      <td>
                                        <input class="form-control" type="text" name="postcode"  aria-label="postcode" readonly  >  
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:30%">
                                        Callback url:
                                      </td>
                                      <td>
                                        <input class="form-control" type="text" name="postcode"  aria-label="postcode" readonly >  
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:30%">
                                        API Feed url:
                                      </td>
                                      <td>
                                        <input class="form-control" type="text" name="postcode"  aria-label="postcode" readonly >  
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:30%">
                                        Order API Callback url:
                                      </td>
                                      <td>
                                        <input class="form-control" type="text" name="postcode"  aria-label="postcode"  readonly>  
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:30%">
                                        Reservation API Callback url:
                                      </td>
                                      <td>
                                        <input class="form-control" type="text" name="postcode"  aria-label="postcode" readonly >  
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:30%">
                                        Message API Callback url:
                                      </td>
                                      <td>
                                        <input class="form-control" type="text" name="postcode"  aria-label="postcode" readonly >  
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:30%">
                                        Enable Ajax Checkout:
                                      </td>
                                      <td>
                                        <span as="button" @click="this.data.enable_ajax_checkout = 0" v-if="this.data.enable_ajax_checkout == 1" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span as="button" v-else @click="data.enable_ajax_checkout = 1" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                        <span as="button" @click="this.data.enable_ajax_checkout = 1" v-if="this.data.enable_ajax_checkout == 0" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span as="button" v-else @click="data.enable_ajax_checkout = 0" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                    
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:30%">
                                        Enable Notification Email	:
                                      </td>
                                      <td>
                                        <span as="button" @click="this.data.enable_notify_email = 0" v-if="this.data.enable_notify_email == 1" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span as="button" v-else @click="data.enable_notify_email = 1" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                        <span as="button" @click="this.data.enable_notify_email = 1" v-if="this.data.enable_notify_email == 0" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span as="button" v-else @click="data.enable_notify_email = 0" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                    
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:30%">
                                        Enable Reservation API:
                                      </td>
                                      <td>
                                        <span as="button" @click="this.data.enable_res_api = 0" v-if="this.data.enable_res_api == 1" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span as="button" v-else @click="data.enable_res_api = 1" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                        <span as="button" @click="this.data.enable_res_api = 1" v-if="this.data.enable_res_api == 0" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span as="button" v-else @click="data.enable_res_api = 0" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                    
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:30%">
                                        Enable Message API:
                                      </td>
                                      <td>
                                        <span as="button" @click="this.data.enable_msg_api = 0" v-if="this.data.enable_msg_api == 1" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span as="button" v-else @click="data.enable_msg_api = 1" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                        <span as="button" @click="this.data.enable_msg_api = 1" v-if="this.data.enable_msg_api == 0" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span as="button" v-else @click="data.enable_msg_api = 0" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                    
                                      </td>
                                    </tr>

                                  </tbody>
                                </table>
                          </div>
                          <div id="suspend" class=" tab-pane fade">
                              <br/>
                              <table class="table" >
                                <tbody>
                                  <tr>
                                    <td style="width:30%">
                                      Suspend Permanently:
                                    </td>
                                    <td>
                                      <input @click="this.data.suspend_permanently = 'no'" type="checkbox" v-if="this.data.suspend_permanently == 'yes'" class="form-input" checked>
                                      <input @click="this.data.suspend_permanently = 'yes'" type="checkbox" v-if="this.data.suspend_permanently == 'no'" class="form-input" >
                                    </td>
                                  </tr>
                                  <!-- <tr>
                                    <td style="width:30%">
                                      Suspend:
                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline ">
                                            <input  :value="'1'" class="form-check-input" type="radio" >
                                            <label class="form-check-label" for="inlineRadio1">Web</label>
                                        </div>
                                        <div class="form-check form-check-inline  ">
                                            <input  :value="'0'" class="form-check-input" type="radio" >
                                            <label class="form-check-label" for="inlineRadio2">App</label>
                                        </div>
                                        <div class="form-check form-check-inline  ">
                                            <input  :value="'0'" class="form-check-input" type="radio" >
                                            <label class="form-check-label" for="inlineRadio2">Both</label>
                                        </div>
                                    </td>
                                  </tr> -->
                                  <tr>
                                    <td style="width:30%">
                                      Suspend for time:
                                    </td>
                                    <td>
                                      <Datepicker v-model="this.data.suspend_time"  class="form-input" style="width: 200px" />
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="width:30%">
                                      Icon:
                                    </td>
                                    <td>
                                      <input type="file" name="" id="">
                                    </td>
                                  </tr>

                                  <tr>
                                    <td style="width:30%">
                                      Title:
                                    </td>
                                    <td>
                                      <input v-model="this.data.suspend_title" class="form-control" type="text" name="postcode"  aria-label="postcode"   >  
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="width:30%">
                                      Description:
                                    </td>
                                    <td>
                                      <textarea v-model="this.data.suspend_description" class="form-control" type="text" name="postcode"  aria-label="postcode"   >  </textarea>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                          </div>
                          
                      </div>
                    </div>
              </div>
                
            </form>
          </div>
        </div>
      </div>
    </section>

  </admin-layout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout";
import { Head,Link } from '@inertiajs/inertia-vue3';
import Datepicker from 'vue3-date-time-picker';
import 'vue3-date-time-picker/dist/main.css';
import useValidate from '@vuelidate/core'
import { required, email, minLength,maxLength, sameAs, numeric } from '@vuelidate/validators'
import { useForm } from '@inertiajs/inertia-vue3'
import { reactive } from 'vue'

export default {
  components: {
    Head,
    Link,
    AdminLayout,
    Datepicker,
  },

  props: {
      store: Object,
      
      country: Object,
      zone: Object,
      language: Object,
      currency: Object,
      
  },
  data() {
      return {
          

           inputData:useForm({
              logo : null ,
              icon : null ,
          }),

          data:{
              config_url: '',
              config_secure: 0,
              config_ssl: '',
              config_name:'',
              config_owner:'',
              config_address:'',
              config_zone_id:'',
              map_post_code:'',
              config_country_id:'',
              map_ifram:'',
              sitemap_url:'index.php?route=feed/google_sitemap',
              config_telephone:'',
              config_sms_telephone:'',
              config_language:'',
              config_currency:'',
              config_title:'',
              config_meta_description:'',
              grecaptcha: 1,
              recaptcha_sitekey:'',
              recaptcha_secret:'',
              enable_booking_module: 0,
              file_directory_url:'/',
              service_charge:'',

              config_email:'',
              statussms:0 ,
              curren_store_id:'',
              config_account_printer:'',
              config_password_printer:'',
              enable_ajax_checkout:'',
              enable_notify_email: 0,
              enable_res_api: 0 ,  
              enable_msg_api: 0,
              suspend_permanently: 'no',
              suspend_time:'',
              suspend_title:'',
              suspend_logo: null,
              suspend_description:'',

          }

        }
    },

    validations() {
        return {
            
          
        }
    },


    methods:{
        saveStore(data,image){

            
        // this.v$.settings.$touch()
        // if(!this.v$.settings.$error){

            console.log(image)
            
            let con = confirm("Craete a new store?");

            if(con){
                this.$inertia.post(this.route('admin.settings.shop.store',{data,image},{
                        replace: true, 
                        preserveState: true
                        }))

                console.log(data);
            }
            }
            
        
    },
  watch: {
    
  }
};
</script>

<style>
.info {
    color: #666;
    font-size: 11px;
    font-weight: 400;
    font-family: Verdana,Geneva,sans-serif;
    display: block;
}
</style>
