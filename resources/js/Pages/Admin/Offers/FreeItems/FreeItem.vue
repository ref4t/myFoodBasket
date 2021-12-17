<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Free Items</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-row-reverse bd-highlight">
                        <Link :href="route('admin.offers.free.item.create')" as="button" class="btn btn-info rounded-pill m-2" > <i class="fas fa-plus-circle"></i> ADD</Link>
                        <Link @click="delete_multiple" as="button" class="btn btn-danger rounded-pill m-2" > DELETE</Link>

                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-hover" >
                        <thead>
                            <th style="width:5%">
                                <input  @click="select_all()" class="form-input" type="checkbox" style="margin-left: 12px" >
                            </th>
                            <th>Voucher item Name</th>
                            <th style="width:10%" >Action</th>
                        </thead>
                        <tbody>
                            <template v-if="items" >
                                <tr v-for="item in items.data" :key="item.id_free_item" >
                                    <th>
                                        <input v-if="deleteData.includes(item.id_free_item)" checked type="checkbox" @click="add_to_delete(item.id_free_item)" class="form-check">
                                        <input v-else type="checkbox"  @click="add_to_delete(item.id_free_item)" class="form-check" >
                                    </th>

                                    <td> {{item.name_item}} </td>

                                    <td>
                                        <Link :href="route('admin.offers.free.item.edit', { id: item.id_free_item })" as="button" class="btn btn-warning rounded-pill text-uppercase ml-1 float-right" style="letter-spacing: 0.1em;" >Edit</Link>
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
                        <Pagination :links="items.links" ></Pagination>
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
      items: Object,
  },
  data() {
      return {
         deleteData:[]
      }
    },

    methods:{
        add_to_delete(id){
            this.deleteData.includes(id)
            ?
            this.deleteData = this.deleteData.filter(item=>item!=id)
            :
            this.deleteData.push(id);
            console.log(this.deleteData)
        },
        select_all(){
            this.items.data.map(item=>{
            this.deleteData.includes(item.id_free_item)
            ?
            this.deleteData = this.deleteData.filter(item2=>item2!=item.id_free_item)
            :
            this.deleteData.push(item.id_free_item)
            return 0;
            })

            console.log(this.deleteData)
        },
        delete_multiple(){
            let con = confirm("Sure want to delete?");

            if (con){
            this.$inertia.post( route('admin.offers.free.item.delete') , this.deleteData,{
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
