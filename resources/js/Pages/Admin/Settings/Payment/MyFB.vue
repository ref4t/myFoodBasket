<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Myfoodbasket Payment Gateway</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
              <form @submit.prevent="submit(data)">
                  <div class="card">
                    <div class="card-header">
                            <div class="d-flex flex-row-reverse bd-highlight">
                                <button type="submit" class="btn btn-success rounded-pill m-2" > SAVE </button>
                                <Link :href="route('admin.settings.payment.index')" as="button" type="button" class="btn btn-danger rounded-pill m-2" > CANCEL </Link>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table" >
                                <tr>
                                    <td>
                                        myfoodbasket Gateway Module Status:
                                        <span class="info">Enable or disable the module:</span>
                                    </td>
                                    <td>
                                        <select v-model="data.myfoodbasketpayments_gateway_status" class="form-control" name="" id="">
                                            <option value="1">Enable</option>
                                            <option value="0">Disable</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Printer Text
                                    </td>
                                    <td>
                                        <input v-model="data.myfoodbasketpayments_printer_text" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Commision Rate(%):
                                    </td>
                                    <td>
                                        <input v-model="data.myfoodbasketpayments_commision_rate" class="form-control" type="text">
                                        <span class=" custom "> Enter Commision Rate(%) </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Fixed Price Per Transaction:
                                    </td>
                                    <td>
                                        <input v-model="data.myfoodbasketpayments_fixed_price_per_transaction" class="form-control" type="text">
                                        <span class=" custom "> Enter Fixed Price Per Transaction </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Fixed Monthly Rate:
                                    </td>
                                    <td>
                                        <input v-model="data.myfoodbasketpayments_fixed_monthly_rate" class="form-control" type="text">
                                        <span class=" custom "> Enter Fixed Monthly Rate </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Pay Out Term:
                                    </td>
                                    <td>
                                        <input v-model="data.myfoodbasketpayments_pay_out_term" class="form-control" type="text">
                                        <span class=" custom ">Select Pay Out Term </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Service Charge:
                                    </td>
                                    <td>
                                        <input v-model="data.myfoodbasketpayments_service_charge" class="form-control" type="text">
                                        <span class=" custom "> Enter Service Charge </span>
                                    </td>
                                </tr>
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
        submit(data){
            
            let con = confirm("Save Changes?");

            if(con){
                this.$inertia.post(this.route('admin.settings.payment.myfb.update',{data},{
                        replace: true, 
                        preserveState: true
                        }))

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

.custom{
    color: rgb(255, 0, 0);
    font-size: 11px;
    font-weight: 400;
    font-family: Verdana,Geneva,sans-serif;
    display: block;
}
</style>