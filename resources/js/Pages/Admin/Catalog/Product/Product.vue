<template>
  <admin-layout>
    <template v-slot:header>
        <div class="form-check form-check-inline m-4">
           <h1 class="m-0 text-capitalize">Categories</h1>
        </div>
        <div class="form-check form-check-inline  m-4">
            <select v-model="selected_catagory"  class="form-control" >
                <template v-for="category in categories" :key="category">
                    <option  :value="category.category_id" > {{ category.get_category_description_with_products.name }} </option>
                </template>
                
            </select>
        </div>
        
        
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-row bd-highlight">
                        

                    </div>

                    <div class="d-flex flex-row-reverse bd-highlight">
                        <Link :href="route('admin.catalog.product.create')" as="button" class="btn btn-info rounded-pill m-2" > INSERT</Link>
                        <Link @click="delete_multiple" as="button" class="btn btn-danger rounded-pill m-2" > DELETE</Link>

                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-hover text-center" >
                        <thead>
                            <tr>
                                <th style="width:20px" >
                                    <!-- <input  @click="select_all()" class="form-input" type="checkbox"> -->
                                </th>
                                <th>
                                    Product Names
                                </th>
                                <th>
                                    Main
                                </th>
                                <template v-for="category in categories" :key="category" >
                                    <template v-for=" (product,index) in category.get_category_description_with_products.get_category_product" :key="index" >
                                        <template v-if="index < 1" >
                                            <template v-if="product.category_id == this.selected_catagory.toString()"> 
                                                <template v-for="size in product.get_product_description.size_info" :key="size" >
                                                    <template v-if="size.id_product == product.product_id" >
                                                        <th>
                                                            {{ decodeHtml(size.size) }}
                                                        </th>
                                                    </template>
                                                </template>
                                            </template>
                                        </template>
                                    </template>
                                </template>
                                <th>Sort Order</th>
                            </tr>
                        </thead>
                        <tbody >
                            <template v-if="categories" >
                                <template v-for="category in categories" :key="category" >
                                    <template v-for=" product in category.get_category_description_with_products.get_category_product" :key="product" >
                                        <tr class="myDIV" v-if="product.category_id == this.selected_catagory.toString()"  >
                                            <th>
                                                <input v-if="deleteData.includes(product.product_id)" checked type="checkbox" @click="add_to_delete(product.product_id)" class="form-check">
                                                <input v-else type="checkbox"  @click="add_to_delete(product.product_id)" class="form-check" >
                                            </th>
                                            <td  @click="forwardEdit(product.product_id)" class="text-left" style="cursor:pointer"> {{ decodeHtml(product.get_product_description.name) }} </td>
                                            <td> {{ product.get_product_description.price }} </td>
                                            <template v-for="size in product.get_product_description.size_info" :key="size" >
                                                <td>
                                                    {{ size.price }}
                                                </td>
                                            </template>
                                            <td>
                                                {{product.get_product_description.sort_order}}
                                                <span class="hide" >Edit</span>
                                            </td>
                                        </tr>
                                    </template>

                                </template>
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
                        <!-- <Pagination :links="categories.links" ></Pagination> -->
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
      categories: Object,
  },
  data() {
      return {
         deleteData:[],
         selected_catagory:'',
         
      }
    },

    methods:{
        add_to_delete(id){
            this.deleteData.includes(id)
            ?
            this.deleteData = this.deleteData.filter(item=>item!=id)
            :
            this.deleteData.push(id);

            console.log(this.deleteData);
            
        },
        select_all(){
            this.categories.map(item=>{
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
            this.$inertia.post( route('admin.catalog.product.delete') , this.deleteData,{
            replace: true, 
            preserveState: true})
            this.deleteData = [];
            }
            

        },
        forwardEdit(id){
            console.log(id);
            this.$inertia.get( route('admin.catalog.product.edit', [ id ]) , this.deleteData,{
            replace: true, 
            preserveState: true})
        },
        sort(field) {
            this.params.field = field;
            this.params.direction = this.params.direction === "asc" ? "desc" : "asc";
        },
        decodeHtml(html) {
            var txt = document.createElement("textarea");
            txt.innerHTML = html;
            return txt.value;
        }

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

<style>
.hide {
  display: none;
}

.myDIV:hover + .hide {
  display: block;
  color: red;
}
</style>
