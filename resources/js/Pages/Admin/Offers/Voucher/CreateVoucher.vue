<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Voucher/Edit</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form @submit.prevent="submitForm(this.voucher)" method="post">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <Link :href="route('admin.offers.voucher.index')" as="button" class="btn btn-warning rounded-pill m-2" type="submit" > CANCEL</Link>

                            <button class="btn btn-success rounded-pill m-2" type="submit" > SAVE</button>
                            
                        </div>
                    </div>
                    <ul class="nav  nav-tabs font-weight-bold">
                        <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#general"
                            >General</a
                        >
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="general" class=" tab-pane active custom" >
                            <div class="card-body table-responsive p-0">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td style="width:25%" >Code:
                                                <span class="info" >
                                                    Enable to add into cart automatically
                                                </span>
                                            </td>
                                            <td>
                                                <input v-model="this.voucher.code" class="form-input" type="text">

                                                <div class="custom-control custom-switch " style="margin-top: 10px" >
                                                    <input v-model="this.voucher.on_off" type="checkbox" class="custom-control-input" id="customSwitch1">
                                                    <label v-if="this.voucher.on_off" class="custom-control-label green" for="customSwitch1">ON</label>
                                                    <label v-else class="custom-control-label" for="customSwitch1">OFF</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >Apply for :</td>
                                            <td>
                                                <div class="form-check form-check-inline ">
                                                    <input class="form-check-input" type="radio" v-model="this.voucher.apply_shipping" :value="1" >
                                                    <label class="form-check-label" for="inlineRadio1">Delivery</label>
                                                </div>
                                                <div class="form-check form-check-inline  ">
                                                    <input class="form-check-input" type="radio" v-model="this.voucher.apply_shipping" :value="2">
                                                    <label class="form-check-label" for="inlineRadio2">Collection</label>
                                                </div>
                                                <div class="form-check form-check-inline  ">
                                                    <input class="form-check-input" type="radio" v-model="this.voucher.apply_shipping" :value="3" >
                                                    <label class="form-check-label" for="inlineRadio3">Both</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                From Name:
                                            </td>
                                            <td>
                                                <input v-model="this.voucher.from_name" class="form-input" type="text">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                From Email:
                                            </td>
                                            <td>
                                                <input v-model="this.voucher.from_email" class="form-input" type="text">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                To Name:
                                            </td>
                                            <td>
                                                <input v-model="this.voucher.to_name" class="form-input" type="text">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                To Email:
                                            </td>
                                            <td>
                                                <input v-model="this.voucher.to_email" class="form-input" type="text">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                Theme:
                                            </td>
                                            <td>
                                                <select v-model="this.voucher.voucher_theme_id" class="form-input" >
                                                    <option v-for="theme in themeData" :key="theme.voucher_theme_id" :value="theme.voucher_theme_id"  > {{theme.get_name.name}} </option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                Message:
                                            </td>
                                            <td>
                                                 <textarea class="form-control" v-model="this.voucher.message" name="comment" placeholder="Leave a message" id="floatingTextarea2" style="height: 100px"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                Amount:
                                            </td>
                                            <td>
                                                <input v-model="this.voucher.amount" class="form-input" type="text">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td >
                                                Status:
                                            </td>
                                            <td>
                                                <select v-model="this.voucher.status" class="form-input" >
                                                    <option value="1" selected > Enabled </option>
                                                    <option value="0"> Disabled </option>
                                                </select>
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
import Pagination from "@/Components/Pagination";
import Datepicker from 'vue3-date-time-picker';
import 'vue3-date-time-picker/dist/main.css';

export default {
  components: {
    Head,
    Link,
    AdminLayout,
    Pagination,
    Datepicker
  },

  props: {
      themeData: Object,
  },
  data() {
      return {
         voucher:{
             code:'',
             on_off:'true',
             apply_shipping: 1,
             from_name:'',
             from_email:'',
             to_name:'',
             to_email:'',
             voucher_theme_id:8,
             message:'',
             amount:'',
             status: 1
         }
      }
    },
    created() {
        
    
    },
    methods:{
        format(value) {
            let val = (value / 1).toFixed(2);
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        },
        trimDate(value){
            return value = value.split(' ')[0];
        },
        submitForm(voucher){
            let con = confirm("Create New Voucher?");

            if (con){
                
                if(voucher.on_off == true){
                voucher.on_off = 1
                }
                else{
                    voucher.on_off = 0
                }
                this.$inertia.post(this.route('admin.offers.voucher.store',{voucher},{
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
.info{
    color: #666;
    font-size: 11px;
    font-weight: 400;
    font-family: Verdana,Geneva,sans-serif;
    display: block;
}
</style>