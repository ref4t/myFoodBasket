<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Reservations Settings</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form @submit.prevent="submit(this.settings,this.from,this.to)" method="post">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <button type="submit" class="btn btn-success rounded-pill m-2" > SAVE </button>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table" >
                            <tbody>
                                <tr>
                                    <td style="width:25%" >
                                        Booking Module
                                    </td>
                                    <td>
                                        <span as="button" @click="enableMod" v-if="this.toggleModule == 1" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span as="button" v-else @click="enableMod" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                        <span as="button" @click="disableMod" v-if="this.toggleModule == 0" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span as="button" v-else @click="disableMod" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Temporary Disable	
                                    </td>
                                    <td v-if="this.disable"  >
                                        <div class="row form-inline" >
                                            <i @click="this.disable = false" class="fas fa-plus fa-2x text-green" style="margin-left: 10px"></i>
                                        </div>
                                    </td>
                                    <td v-else  >
                                        <div class="row form-inline" >
                                            <div class="form-inline">
                                                <label class="p-2" for="from">From:</label>    
                                                <Datepicker v-model="from"  class="form-input" style="width: 200px" />
                                            </div>
                                            <div class="form-inline">
                                                <label class="p-2" for="to">To:</label>    
                                                <Datepicker v-model="to"  class="form-input" style="width: 200px" />
                                            </div>
                                            <i  @click="this.disable = true" class="far fa-times-circle fa-2x text-red" style="margin-left: 10px"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Message if Temporary Disabled:
                                    </td>
                                    <td>
                                        <textarea class="form-control " v-model="settings.message_if_disable"  ></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Max Number of People:
                                    </td>
                                    <td>
                                        <input class="form-control " v-model="settings.max_people" type="number"  min="0" max="100" step="1"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Enable Google ReCaptcha:
                                    </td>
                                    <td>
                                         <span as="button" @click="enableCap" v-if="this.toggleCap == 1" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span as="button" v-else @click="enableCap" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                        <span as="button" @click="disableCap" v-if="this.toggleCap == 0" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span as="button" v-else @click="disableCap" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Background Options:
                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" v-model="settings.header_background_options" :value="'transparent'" >
                                            <label class="form-check-label" for="inlineRadio1">Transparent</label>
                                        </div>
                                        <div class="form-check form-check-inline  ">
                                            <input class="form-check-input" type="radio" v-model="settings.header_background_options" :value="'color'">
                                            <label class="form-check-label" for="inlineRadio2">Color</label>
                                        </div>
                                        <div class="form-check form-check-inline  ">
                                            <input class="form-check-input" type="radio" v-model="settings.header_background_options" :value="'image'" >
                                            <label class="form-check-label" for="inlineRadio3">Image</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr v-if="settings.header_background_options == 'color'">
                                    <td>Background Color:</td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr v-if="settings.header_background_options == 'image'">
                                    <td>Background Image:</td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>Header Text:</td>
                                    <td>
                                        <input v-model="settings.header_message" type="text" class="form-control "/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Header Description:</td>
                                    <td>
                                        <textarea v-model="settings.header_description" class="form-control "  />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Footer Text:</td>
                                    <td>
                                        <input v-model="settings.footer_message" type="text" class="form-control "/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Confirmation Message:</td>
                                    <td>
                                        <input v-model="settings.confirm_message" type="text" class="form-control "/>
                                    </td>
                                </tr>
                                <tr v-if="settings.enable_opening_closing_time == 1" >
                                    <td>Opening Closing Times:</td>
                                    <td>
                                       Use Store Opening Time <input type="checkbox" @click="settings.opening_closing_time = ''" v-if="settings.opening_closing_time == 1" checked > <input  @click="settings.opening_closing_time = 1" v-else type="checkbox" >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
      settings: Object,
      from: String,
      to: String,
  },
  data() {
      return {
          v$: useValidate(),
          toggleModule: 0,
          toggleCap: 0,
          disable: false
        }
    },

    validations() {
        return {
            settings:{
                enable_reservation_module:{numeric},
                temporary_disable:{maxLength: maxLength(255)},
                message_if_disable:{maxLength: maxLength(255)},     
                max_people:{numeric},    
                google_recapcha:{numeric},	          
                header_message:{maxLength: maxLength(255)},       
                header_description:{maxLength: maxLength(255)},	      
                header_background_options:{maxLength: maxLength(255)},
                header_background_image:{maxLength: maxLength(255)}, 
                header_background_color:{maxLength: maxLength(255)},  
                footer_message:{maxLength: maxLength(255)},
                confirm_message:{maxLength: maxLength(255)},	          
                enable_opening_closing_time:{numeric},
                opening_closing_time:{numeric},
            }
          
        }
    },

    created(){
        if(this.settings.enable_reservation_module == 1){
            this.toggleModule = 1
        }else{
            this.toggleModule = 0
        }
        if(this.settings.google_recapcha == 1){
            this.toggleCap = 1
        }else{
            this.toggleCap = 0
        }

        if(this.from == ''){
            this.disable = true
        }
        
    },

    methods:{
        enableMod(){
            this.toggleModule = 1;
        },
        disableMod(){
            this.toggleModule = 0;
        },
        enableCap(){
            this.toggleCap = 1;
        },
        disableCap(){
            this.toggleCap = 0;
        },
        submit(settings,from,to){

            if(this.toggleModule == 1){
                
                
            }else{
                settings.enable_reservation_module = 0
            }
            if(this.toggleCap == 1){
                
                settings.google_recapcha = 1
            }else{
                settings.google_recapcha = 0
            }
            this.v$.settings.$touch()
            if(!this.v$.settings.$error){
                
                let con = confirm("Save Changes?");

                if(con){
                    this.$inertia.post(this.route('admin.reservation.setting.update',{settings,from,to},{
                            replace: true, 
                            preserveState: true
                            }))
                }
            }
            
        }
    },
  watch: {
    
  }
};
</script>
