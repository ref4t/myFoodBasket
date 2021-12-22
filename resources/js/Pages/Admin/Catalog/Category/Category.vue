<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Categories</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-row-reverse bd-highlight">
                        <Link :href="route('admin.catalog.category.create')" as="button" class="btn btn-info rounded-pill m-2" > INSERT</Link>
                        <Link @click="delete_multiple" as="button" class="btn btn-danger rounded-pill m-2" > DELETE</Link>

                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th style="width:20px" >
                                    <input  @click="select_all()" class="form-input" type="checkbox">
                                </th>
                                <th>
                                    Category Names
                                </th>
                                <th style="width:20px" >Sort Order</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-if="categories" >
                                <tr v-for="category in categories.data" :key="category" >
                                    <th>
                                        <input v-if="deleteData.includes(category.category_id)" checked type="checkbox" @click="add_to_delete(category.category_id)" class="form-check">
                                        <input v-else type="checkbox"  @click="add_to_delete(category.category_id)" class="form-check" >
                                    </th>
                                    <td> {{ category.get_category_description_with_products.name }} </td>
                                    <td>
                                        {{category.sort_order}}
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
                        <Pagination :links="categories.links" ></Pagination>
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
      categories: Object
  },
  data() {
      return {
         deleteData:[],
         
      }
    },

    methods:{
        add_to_delete(id){
            this.deleteData.includes(id)
            ?
            this.deleteData = this.deleteData.filter(item=>item!=id)
            :
            this.deleteData.push(id);
            
        },
        select_all(){
            this.categories.data.map(item=>{
            this.deleteData.includes(item.category_id)
            ?
            this.deleteData = this.deleteData.filter(item2=>item2!=item.category_id)
            :
            this.deleteData.push(item.category_id)
            return 0;
            })

        },
        delete_multiple(){
            let con = confirm("Sure want to delete?");

            if (con){
            this.$inertia.post( route('admin.catalog.category.delete') , this.deleteData,{
            replace: true, 
            preserveState: true})
            this.deleteData = [];
            }
            

        },
        sort(field) {
            this.params.field = field;
            this.params.direction = this.params.direction === "asc" ? "desc" : "asc";
        },

    },
    watch: {
        params: {
        handler() {
            let params = this.params;
            Object.keys(params).forEach((key) => {
            if (params[key] == "") {
                delete params[key];
            }
            });


            this.$inertia.get(this.route("admin.settings.user.index"), params, {
            replace: true,
            preserveState: true,
            });
        },
        deep: true,
        },
    },
};
</script>
