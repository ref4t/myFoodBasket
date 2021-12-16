<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Coupon</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form @submit.prevent="submitForm(coupon)" method="post">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <Link :href="route('admin.offers.coupon.index')" as="button" class="btn btn-warning rounded-pill m-2" type="submit" > CANCEL</Link>

                            <button class="btn btn-success rounded-pill m-2" type="submit" > SAVE</button>
                            
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td style="width:25%" >Counpon Name:</td>
                                    <td>
                                        <input v-model="coupon.name" class="form-input" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td >Code:
                                        <span class="info" >
                                            Enable to add into cart automatically
                                        </span>
                                    </td>
                                    <td>
                                        <input v-model="coupon.code" class="form-input" type="text">

                                        <div class="custom-control custom-switch " style="margin-top: 10px" >
                                            <input v-model="coupon.on_off" type="checkbox" class="custom-control-input" id="customSwitch1">
                                            <label v-if="coupon.on_off" class="custom-control-label green" for="customSwitch1">ON</label>
                                            <label v-else class="custom-control-label" for="customSwitch1">OFF</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td >Apply for :</td>
                                    <td>
                                        <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" v-model="coupon.apply_shipping" :value="1"  >
                                            <label class="form-check-label" for="inlineRadio1">Delivery</label>
                                        </div>
                                        <div class="form-check form-check-inline  ">
                                            <input class="form-check-input" type="radio" v-model="coupon.apply_shipping" :value="2">
                                            <label class="form-check-label" for="inlineRadio2">Collection</label>
                                        </div>
                                        <div class="form-check form-check-inline  ">
                                            <input class="form-check-input" type="radio" v-model="coupon.apply_shipping" :value="3" checked>
                                            <label class="form-check-label" for="inlineRadio3">Both</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td >
                                        Type:
                                        <span class="info" >
                                            Percentage or Fixed Amount
                                        </span>
                                    </td>
                                    <td>
                                        <select v-model="coupon.type" class="form-input" >
                                            <option selected value="P"> Percentage </option>
                                            <option value="F"> Fixed Amount </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td >Discount:</td>
                                    <td>
                                        <input v-model="coupon.discount" class="form-input" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td >
                                        Total Amount:
                                        <span class="info">
                                            The total amount that must reached before the coupon is valid.
                                        </span>
                                    </td>
                                    <td>
                                        <input v-model="coupon.total" class="form-input" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td >
                                        Customer Login:
                                        <span class="info">
                                            Customer must be logged in to use the coupon.
                                        </span>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" v-model="coupon.logged" :value="1"  >
                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline  ">
                                            <input class="form-check-input" type="radio" v-model="coupon.logged" :value="2" checked >
                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td >
                                        Free Shipping:
                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" v-model="coupon.shipping" :value="1"  >
                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline  ">
                                            <input class="form-check-input" type="radio" v-model="coupon.shipping" :value="2" checked>
                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td >
                                        Products:
                                        <span class="info">
                                            Choose specific products the coupon will apply to. Select no products to apply coupon to entire cart.
                                        </span>
                                    </td>
                                    <td>
                                        <input v-model="coupon.products" class="form-input" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td >
                                        Category:
                                        <span class="info">
                                            Choose all products under selected category.
                                        </span>
                                    </td>
                                    <td>
                                        <input v-model="coupon.category" class="form-input" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td >
                                        Start Date:
                                    </td>
                                    <td>
                                         <Datepicker v-model="coupon.date_start" class="form-input" style="width: 200px" />
                                    </td>
                                </tr>
                                <tr>
                                    <td >
                                        End Date:
                                    </td>
                                    <td>
                                        <Datepicker v-model="coupon.date_end" class="form-input" style="width: 200px" />
                                    </td>
                                </tr>
                                <tr>
                                    <td >
                                        Uses Per Coupon:
                                        <span class="info">
                                           The maximum number of times the coupon can be used by any customer. Leave blank for unlimited
                                        </span>
                                    </td>
                                    <td>
                                        <input v-model="coupon.uses_total" class="form-input" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td >
                                        Uses Per Customer:
                                        <span class="info">
                                            The maximum number of times the coupon can be used by a single customer. Leave blank for unlimited
                                        </span>
                                    </td>
                                    <td>
                                        <input v-model="coupon.uses_customer" class="form-input" type="text">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td >
                                        Status:
                                    </td>
                                    <td>
                                        <select v-model="coupon.status" class="form-input" >
                                            <option value="1" selected > Enabled </option>
                                            <option value="0"> Disabled </option>
                                        </select>
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
import 'vue3-date-time-picker/dist/main.css'

export default {
  components: {
    Head,
    Link,
    AdminLayout,
    Datepicker
  },

  props: {
      coupon: Object,
  },
  data() {
      return {
         
      }
    },
    created() {
        if(this.coupon.on_off == 1){
            this.coupon.on_off = true
        }
        else{
             this.coupon.on_off = false
        }
    },
    methods:{
        submitForm(coupon){
            let con = confirm("Save Changes?");

            if (con){
                if(coupon.on_off == true){
                coupon.on_off = 1
                }
                else{
                    coupon.on_off = 0
                }
                

                this.$inertia.post(this.route('admin.offers.coupon.update',{coupon},{
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