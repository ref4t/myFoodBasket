<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Coupon</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-row-reverse bd-highlight">
                        <Link :href="route('admin.offers.coupon.create')" as="button" class="btn btn-info rounded-pill m-2" > INSERT</Link>
                        <Link @click="delete_multiple" as="button" class="btn btn-danger rounded-pill m-2" > DELETE</Link>

                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th>
                                    <input  @click="select_all()" class="form-input" type="checkbox">
                                </th>
                                <th>Coupon Name</th>
                                <th>Code</th>
                                <th>Discount</th>
                                <th>Apply for</th>
                                <th>Date Start</th>
                                <th>Date End</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="coupon in coupons.data" :key="coupon.coupon_id" >
                                <th>
                                    <input v-if="deleteData.includes(coupon.coupon_id)" checked type="checkbox" @click="add_to_delete(coupon.coupon_id)" class="form-check">
                                    <input v-else type="checkbox"  @click="add_to_delete(coupon.coupon_id)" class="form-check" >
                                </th>
                                <td> {{ coupon.name }} </td>
                                <td> {{ coupon.code }} </td>
                                <td> {{ coupon.discount }} </td>
                                <td> 
                                    <span v-if="coupon.apply_shipping == 1" >Delivery</span>
                                    <span v-if="coupon.apply_shipping == 2" >Collection</span>
                                    <span v-if="coupon.apply_shipping == 3" >Both</span>
                                </td>
                                <td> {{ coupon.date_start }} </td>
                                <td> {{ coupon.date_end }} </td>
                                <td>
                                    <span v-if="coupon.status == 0" >OFF</span>
                                    <span v-if="coupon.status == 1" >ON</span>
                                </td>

                                <td>
                                    <Link :href="route('admin.offers.coupon.edit', { id: coupon.coupon_id })" as="button" class="btn btn-warning rounded-pill text-uppercase ml-1 float-right" style="letter-spacing: 0.1em;" >Edit</Link>
                                </td>

                            </tr>
                        </tbody>
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

export default {
  components: {
    Head,
    Link,
    AdminLayout
  },

  props: {
      coupons: Object,
  },
  data() {
      return {
         deleteData:[]
      }
    },

    methods:{
        format(value) {
            let val = (value / 1).toFixed(2);
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        },
        add_to_delete(id){
            this.deleteData.includes(id)
            ?
            this.deleteData = this.deleteData.filter(item=>item!=id)
            :
            this.deleteData.push(id);
            console.log(this.deleteData)
        },
        select_all(){
            this.coupons.data.map(item=>{
            this.deleteData.includes(item.coupon_id)
            ?
            this.deleteData = this.deleteData.filter(item2=>item2!=item.coupon_id)
            :
            this.deleteData.push(item.coupon_id)
            return 0;
            })

            console.log(this.deleteData)
        },
        delete_multiple(){
            let con = confirm("Sure want to delete?");

            if (con){
            this.$inertia.post( route('admin.offers.coupon.delete') , this.deleteData,{
            replace: true, 
            preserveState: true})
            this.deleteData = [];
            }
            console.log(this.deleteData)

        },

    },
  watch: {
      
  }
};
</script>
