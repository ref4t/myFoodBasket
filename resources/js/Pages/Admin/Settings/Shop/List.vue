<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Stores</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-row-reverse bd-highlight">
                        <Link :href="route('admin.settings.shop.create')" as="button" class="btn btn-info rounded-pill m-2" > INSERT</Link>
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
                                <th>Store Name</th>
                                <th>STORE URL</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-if="storesData" >
                                <tr v-for="store in storesData.data" :key="store.store_id" >
                                    <th>
                                        <input v-if="deleteData.includes(store.store_id)" checked type="checkbox" @click="add_to_delete(store.store_id)" class="form-check">
                                        <input v-else type="checkbox"  @click="add_to_delete(store.store_id)" class="form-check" >
                                    </th>
                                    <td> {{ store.name }} </td>
                                    <td> {{ store.url }} </td>

                                    <td>
                                        <Link :href="route('admin.settings.cat.index')" as="button" class="btn btn-warning rounded-pill text-uppercase ml-1 float-right" style="letter-spacing: 0.1em;" >Edit</Link>
                                    </td>

                                </tr>
                            </template>
                            <template v-else>
                                <tr  >
                                    <td colspan="9" class="text-center" >
                                        No results!!
                                    </td>
                                </tr>
                            </template>

                        </tbody>
                    </table>
                    <div class="card-footer clearfix">
                        <Pagination :links="storesData.links" ></Pagination>
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
      storesData: Object,
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
            this.deleteData.includes(item.store_id)
            ?
            this.deleteData = this.deleteData.filter(item2=>item2!=item.store_id)
            :
            this.deleteData.push(item.store_id)
            return 0;
            })

            console.log(this.deleteData)
        },
        delete_multiple(){
            let con = confirm("Sure want to delete?");

            if (con){
            this.$inertia.post( route('admin.settings.shop.delete') , this.deleteData,{
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
