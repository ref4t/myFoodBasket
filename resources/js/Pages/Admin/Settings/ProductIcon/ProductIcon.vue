<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Product Icons</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-row-reverse bd-highlight">
                        <Link :href="route('admin.settings.product_icon.create')" as="button" class="btn btn-info rounded-pill m-2" > INSERT</Link>
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
                                <th>Icon</th>
                                <th>Name</th>
                                <th>Alt Description</th>
                                <th>Icon URL</th>
                                <th>Sort Order</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-if="data" >
                                <tr v-for="icon in data.data" :key="icon" >
                                    <th>
                                        <input v-if="deleteData.includes(icon.id)" checked type="checkbox" @click="add_to_delete(icon.id)" class="form-check">
                                        <input v-else type="checkbox"  @click="add_to_delete(icon.id)" class="form-check" >
                                    </th>
                                    <!-- image/food-icons -->
                                   
                                    <td> <img :alt="icon.icon_desc" :src="'/'+ icon.icon_url"> </td>
                                    <td> {{icon.icon_name}} </td>
                                    <td> {{icon.icon_desc}} </td>
                                    <td> {{icon.icon_url}} </td>
                                    <td> {{icon.icon_sort}} </td>
                                    <td>
                                        <Link :href="route('admin.settings.product_icon.edit', { id: icon.id })" as="button" class="btn btn-warning rounded-pill text-uppercase ml-1 float-right" style="letter-spacing: 0.1em;" >Edit</Link>
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
                        <Pagination :links="data.links" ></Pagination>
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
      data: Object,
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
            console.log('add')
        },
        select_all(){
            this.data.data.map(item=>{
            this.deleteData.includes(item.id)
            ?
            this.deleteData = this.deleteData.filter(item2=>item2!=item.id)
            :
            this.deleteData.push(item.id)
            return 0;
            })

            console.log(this.deleteData)
            console.log('all')
        },
        delete_multiple(){
            let con = confirm("Sure want to delete?");

            if (con){
            this.$inertia.post( route('admin.settings.product_icon.delete') , this.deleteData,{
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
