<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Vouchers</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-row-reverse bd-highlight">
                        <Link :href="route('admin.offers.voucher.create')" as="button" class="btn btn-info rounded-pill m-2" > INSERT</Link>
                        <Link @click="delete_multiple" as="button" class="btn btn-danger rounded-pill m-2" > DELETE</Link>

                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-hover" >
                        <thead>
                            <th>
                                <input  @click="select_all()" class="form-input" type="checkbox" style="margin-left: 12px" >
                            </th>
                            <th>Code</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Amount</th>
                            <th>Apply for</th>
                            <th>Theme</th>
                            <th>Status</th>
                            <th>Date Added</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <template v-if="vouchers" >
                                <tr v-for="voucher in vouchers.data" :key="voucher.voucher_id" >
                                    <th>
                                        <input v-if="deleteData.includes(voucher.voucher_id)" checked type="checkbox" @click="add_to_delete(voucher.voucher_id)" class="form-check">
                                        <input v-else type="checkbox"  @click="add_to_delete(voucher.voucher_id)" class="form-check" >
                                    </th>
                                    
                                    <td> {{ voucher.code }} </td>
                                    <td> {{ voucher.from_name }} </td>
                                    <td> {{ voucher.to_name }} </td>
                                    <td> {{ voucher.amount }} </td>
                                    <td> {{ voucher.apply_shipping }} </td>
                                    <td> {{ voucher.voucher_theme_id }} </td>
                                    <td> {{ voucher.status }} </td>
                                    <td> {{ trimDate(voucher.date_added) }} </td>

                                    <td>
                                        <Link :href="route('admin.offers.voucher.edit', { id: voucher.voucher_id })" as="button" class="btn btn-warning rounded-pill text-uppercase ml-1 float-right" style="letter-spacing: 0.1em;" >Edit</Link>
                                    </td>

                                </tr>
                            </template>
                            <template v-else>
                                <tr>
                                    <td colspan="10" class="text-center" >
                                        No results!!
                                    </td>
                                </tr>
                            </template>

                        </tbody>
                    </table>
                    <div class="card-footer clearfix">
                        <Pagination :links="vouchers.links" ></Pagination>
                    </div>
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
import Pagination from "@/Components/Pagination";

export default {
  components: {
    Head,
    Link,
    AdminLayout,
    Pagination
  },

  props: {
      vouchers: Object,
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
        trimDate(value){
            return value = value.split(' ')[0];
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
            this.vouchers.data.map(item=>{
            this.deleteData.includes(item.voucher_id)
            ?
            this.deleteData = this.deleteData.filter(item2=>item2!=item.voucher_id)
            :
            this.deleteData.push(item.voucher_id)
            return 0;
            })

            console.log(this.deleteData)
        },
        delete_multiple(){
            let con = confirm("Sure want to delete?");

            if (con){
            this.$inertia.post( route('admin.offers.voucher.delete') , this.deleteData,{
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
