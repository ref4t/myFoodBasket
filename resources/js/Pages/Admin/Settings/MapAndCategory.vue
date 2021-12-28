<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Settings</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form @submit.prevent="updateSettings(data)">
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
                                    <input v-model="data.config_url" class="form-control" type="text">
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
                                        <input v-model="data.config_secure" :value="'1'" class="form-check-input" type="radio" >
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline  ">
                                        <input v-model="data.config_secure" :value="'0'" class="form-check-input" type="radio" >
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
                                    <input v-model="data.config_ssl" class="form-control" type="text">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%" >
                                    Shop Name:
                                  </td>
                                  <td>
                                    <input v-model="data.config_name" class="form-control" type="text">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%" >
                                    Shop Owner Name:
                                  </td>
                                  <td>
                                    <input v-model="data.config_owner" class="form-control" type="text">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%" >
                                    Address:
                                  </td>
                                  <td>
                                    <textarea class="form-control " v-model="data.config_address"  ></textarea>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Region/State:</td>
                                  <td>
                                    <select v-model="data.config_zone_id" class="form-control" name="" id="">
                                      <template v-for="zone in zone" :key="zone.zone_id" >
                                        <option v-if="zone.country_id == data.config_country_id" :value="zone.zone_id"> {{zone.name}} </option>
                                      </template>
                                    </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Postcode:</td>
                                  <td>
                                    <input class="form-control" type="text" name="postcode" v-model="data.map_post_code" aria-label="postcode">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Country:</td>
                                  <td>
                                    <select v-model="data.config_country_id" class="form-control" name="country" id="country">
                                      <option v-for="country in country" :key="country.country_id" :value="country.country_id"> {{country.name}} </option>
                                    </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Google Maps:</td>
                                  <td>
                                    <input class="form-control" type="text" name="postcode" v-model="data.map_ifram" aria-label="postcode">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Google Sitemap URL:</td>
                                  <td>
                                    <input class="form-control" type="text" name="postcode" v-model="data.sitemap_url" aria-label="postcode">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Telephone 1:</td>
                                  <td>
                                    <input class="form-control" type="text" name="postcode" v-model="data.config_telephone" aria-label="postcode">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Telephone 2:</td>
                                  <td>
                                    <input class="form-control" type="text" name="postcode" v-model="data.config_sms_telephone" aria-label="postcode">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Language:</td>
                                  <td>
                                    <select v-model="data.config_language" class="form-control" name="country" id="country">
                                      <option v-for="language in language" :key="language.language_id" :value="language.code"> {{language.name}} </option>
                                    </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Currency:</td>
                                  <td>
                                    <select v-model="data.config_currency" class="form-control" name="country" id="country">
                                      <option v-for="currency in currency" :key="currency.currency_id" :value="currency.code"> {{currency.title}} </option>
                                    </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Title:</td>
                                  <td>
                                    <input class="form-control" type="text" name="postcode" v-model="data.config_title" aria-label="postcode">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Meta Tag Description:</td>
                                  <td>
                                    <textarea class="form-control" type="text" name="postcode" v-model="data.config_meta_description" aria-label="postcode"></textarea>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Logo:</td>
                                  <td>
                                    
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
                                    
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">
                                    Google ReCaptcha:
                                  </td>
                                  <td>
                                    <span as="button" @click="enableGcap" v-if="this.toggleGcap == 1" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span as="button" v-else @click="enableGcap" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                    <span as="button" @click="disableGcap" v-if="this.toggleGcap == 0" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span as="button" v-else @click="disableGcap" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                  </td>
                                </tr>
                                
                                <tr>
                                  <td style="width:30%">Google reCAPTCHA Site Key:</td>
                                  <td>
                                    <input class="form-control" type="text" name="postcode" v-model="data.recaptcha_sitekey" aria-label="postcode">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">Google reCAPTCHA Secret:</td>
                                  <td>
                                    <input class="form-control" type="text" name="postcode" v-model="data.recaptcha_secret" aria-label="postcode">
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">
                                    Booking Module:
                                  </td>
                                  <td>
                                    <span as="button" @click="enableMod" v-if="this.toggleModule == 1" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span as="button" v-else @click="enableMod" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                    <span as="button" @click="disableMod" v-if="this.toggleModule == 0" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span as="button" v-else @click="disableMod" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:30%">File Directory URL:</td>
                                  <td>
                                    <input class="form-control" type="text" name="postcode" v-model="data.file_directory_url" aria-label="postcode">
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
                                    <input class="form-control" type="text" name="postcode" v-model="data.service_charge" aria-label="postcode">
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
                                        <input class="form-control" type="text" name="postcode" v-model="data.config_email" aria-label="postcode">
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
                                        <span as="button" @click="enableSMS" v-if="this.toggleSMS == 1" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span as="button" v-else @click="enableSMS" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                        <span as="button" @click="disableSMS" v-if="this.toggleSMS == 0" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span as="button" v-else @click="disableSMS" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
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
                                        <input class="form-control" type="text" name="postcode" v-model="data.curren_store_id"  aria-label="postcode" readonly >  
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:30%">
                                        Account
                                      </td>
                                      <td>
                                        <input class="form-control" type="text" name="postcode" v-model="data.config_account_printer" aria-label="postcode"  >  
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:30%">
                                        Password
                                      </td>
                                      <td>
                                        <input class="form-control" type="text" v-model="data.config_password_printer" name="postcode"  aria-label="postcode"  >  
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
                                        <span as="button" @click="enableAjax" v-if="this.toggleAjax == 1" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span as="button" v-else @click="enableAjax" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                        <span as="button" @click="disableAjax" v-if="this.toggleAjax == 0" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span as="button" v-else @click="disableAjax" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:30%">
                                        Enable Notification Email	:
                                      </td>
                                      <td>
                                        <span as="button" @click="enableSMS" v-if="this.toggleSMS == 1" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span as="button" v-else @click="enableSMS" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                        <span as="button" @click="disableSMS" v-if="this.toggleSMS == 0" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span as="button" v-else @click="disableSMS" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:30%">
                                        Enable Reservation API:
                                      </td>
                                      <td>
                                        <span as="button" @click="enableRes" v-if="this.toggleRes == 1" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span as="button" v-else @click="enableRes" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                        <span as="button" @click="disableRes" v-if="this.toggleRes == 0" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span as="button" v-else @click="disableRes" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:30%">
                                        Enable Message API:
                                      </td>
                                      <td>
                                        <span as="button" @click="enableSMS" v-if="this.toggleSMS == 1" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span as="button" v-else @click="enableSMS" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                        <span as="button" @click="disableSMS" v-if="this.toggleSMS == 0" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span as="button" v-else @click="disableSMS" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
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
                                      <input @click="data.suspend_permanently = 'no'" type="checkbox" v-if="data.suspend_permanently == 'yes'" class="form-input" checked>
                                      <input @click="data.suspend_permanently = 'yes'" type="checkbox" v-if="data.suspend_permanently == 'no'" class="form-input" >
                                    </td>
                                  </tr>
                                  <tr>
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
                                  </tr>
                                  <tr>
                                    <td style="width:30%">
                                      Suspend for time:
                                    </td>
                                    <td>
                                      <Datepicker v-model="data.suspend_time"  class="form-input" style="width: 200px" />
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
                                      <input v-model="data.suspend_title" class="form-control" type="text" name="postcode"  aria-label="postcode"   >  
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="width:30%">
                                      Description:
                                    </td>
                                    <td>
                                      <textarea v-model="data.description" class="form-control" type="text" name="postcode"  aria-label="postcode"   >  </textarea>
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

export default {
  components: {
    Head,
    Link,
    AdminLayout,
    Datepicker,
  },

  props: {
      store: Object,
      data: Object,
      country: Object,
      zone: Object,
      language: Object,
      currency: Object,
      
  },
  data() {
      return {
          v$: useValidate(),
          toggleModule: 0,
          toggleGcap: 0,
          toggleSMS: 0,
          toggleAjax: 0,
          toggleRes: 0,
        }
    },

    validations() {
        return {
            
          
        }
    },

    created(){
        if(this.data.enable_booking_module == '1'){
            this.toggleModule = 1
        }else{
            this.toggleModule = 0
        }
        if(this.data.grecaptcha == '1'){
            this.toggleGcap = 1
        }else{
            this.toggleGcap = 0
        }
        if(this.data.statussms == '1'){
            this.toggleSMS = 1
        }else{
            this.toggleSMS = 0
        }
        if(this.data.enable_ajax_checkout == '1'){
            this.toggleAjax = 1
        }else{
            this.toggleAjax = 0
        }
        if(this.data.enable_res_api == '1'){
            this.toggleRes = 1
        }else{
            this.toggleRes = 0
        }
        
        
    },

    methods:{
        enableMod(){
            this.toggleModule = 1;
        },
        disableMod(){
            this.toggleModule = 0;
        },
        enableGcap(){
            this.toggleGcap = 1;
        },
        disableGcap(){
            this.toggleGcap = 0;
        },
        enableSMS(){
            this.toggleSMS = 1;
        },
        disableSMS(){
            this.toggleSMS = 0;
        },
        updateSettings(data){

            
            // this.v$.settings.$touch()
            // if(!this.v$.settings.$error){
                
                let con = confirm("Save Changes?");

                if(con){
                    this.$inertia.post(this.route('admin.settings.cat.update',{data},{
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
