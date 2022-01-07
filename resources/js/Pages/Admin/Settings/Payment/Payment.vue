<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Payment Methods</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
              <div class="card">
                    <div class="card-body table-responsive">
                        <table class="table" >
                            <tr>
                                <td class="text-bold">
                                    CASH
                                </td>
                                <td class="text-right">
                                    <span as="button" v-if="data.cod_admin_status == 1" @click="data.cod_admin_status = 0" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span v-else @click="data.cod_admin_status = 1" as="button" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                    <span as="button" v-if="data.cod_admin_status == 0" @click="data.cod_admin_status = 1" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span v-else @click="data.cod_admin_status = 0" as="button" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold">
                                    PAYMENT BY CARD ON DELIVERY
                                </td>
                                <td class="text-right">
                                    <span as="button" v-if="data.ccod_admin_status == 1" @click="data.ccod_admin_status = 0" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span v-else @click="data.ccod_admin_status = 1" as="button" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                    <span as="button" v-if="data.ccod_admin_status == 0" @click="data.ccod_admin_status = 1" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span v-else @click="data.ccod_admin_status = 0" as="button" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold">
                                    PAYPAL
                                </td>
                                <td class="text-right">
                                    <span as="button" v-if="data.paypal_admin_status == 1" @click="data.paypal_admin_status = 0" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span v-else @click="data.paypal_admin_status = 1" as="button" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                    <span as="button" v-if="data.paypal_admin_status == 0" @click="data.paypal_admin_status = 1" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span v-else @click="data.paypal_admin_status = 0" as="button" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold">
                                    WORLDPAY
                                </td>
                                <td class="text-right">
                                    <span as="button" v-if="data.worldpayhp_admin_status == 1" @click="data.worldpayhp_admin_status = 0" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span v-else @click="data.worldpayhp_admin_status = 1" as="button" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                    <span as="button" v-if="data.worldpayhp_admin_status == 0" @click="data.worldpayhp_admin_status = 1" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span v-else @click="data.worldpayhp_admin_status = 0" as="button" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold">
                                    TAKE PAYMENTS
                                </td>
                                <td class="text-right">
                                    <span as="button" v-if="data.takepayments_gateway_admin_status == 1" @click="data.takepayments_gateway_admin_status = 0" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span v-else @click="data.takepayments_gateway_admin_status = 1" as="button" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                    <span as="button" v-if="data.takepayments_gateway_admin_status == 0" @click="data.takepayments_gateway_admin_status = 1" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span v-else @click="data.takepayments_gateway_admin_status = 0" as="button" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold" @click="myfb" style="cursor: pointer" >
                                    MYFOODBASKET
                                </td>
                                <td class="text-right">
                                    <span as="button" v-if="data.myfoodbasket_admin_status == 1" @click="data.myfoodbasket_admin_status = 0" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span v-else  @click="data.myfoodbasket_admin_status = 1" as="button" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                    <span as="button" v-if="data.myfoodbasket_admin_status == 0" @click="data.myfoodbasket_admin_status = 1" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span v-else  @click="data.myfoodbasket_admin_status = 0" as="button" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                </td>
                            </tr>
                        </table>
                    </div>
              </div>
            
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
      data: Object
  },
  data() {
      return {
          v$: useValidate(),
          
        }
    },

    validations() {
        return {
          
        }
    },

    created(){
        
        
    },

    methods:{
        myfb(){
            this.$inertia.get(this.route('admin.settings.payment.myfb'))
        }
        
    },
  watch: {
      
      data:{
          handler(){
              let params = this.data;
            //   console.log(params);
              
              this.$inertia.get(this.route('admin.settings.payment.update'),params, {replace: true, preserveState: true})
          },
          deep: true,
      }
  }
};
</script>
