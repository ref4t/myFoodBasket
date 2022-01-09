<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Cash</h1>
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
                                        Front end text for collection
                                    </td>
                                    <td>
                                        <input v-model="data.cod_front_text" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Printer Text
                                    </td>
                                    <td>
                                        <input v-model="data.cod_printer_text"  class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       Front end text for delivery
                                    </td>
                                    <td>
                                        <input v-model="data.cod_front_text_delivery" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Charge for payment
                                    </td>
                                    <td>
                                        <input v-model="data.cod_charge_payment" class="form-control" type="text">
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       Minimum Amounth
                                    </td>
                                    <td>
                                        <input v-model="data.cod_total" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Sort Order:
                                    </td>
                                    <td>
                                        <input v-model="data.cod_sort_order" class="form-control" type="text">
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
                this.$inertia.post(this.route('admin.settings.payment.cash.update',{data},{
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