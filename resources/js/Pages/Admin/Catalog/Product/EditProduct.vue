<template>
  <admin-layout>
    <template v-slot:header>
        <div class="form-check form-check-inline m-4">
           <h1 class="m-0 text-capitalize">Product</h1>
        </div>
        <div class="form-check form-check-inline  m-4">
            
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
                        <Link :href="route('admin.catalog.product.index')" as="button" class="btn btn-warning rounded-pill m-2" > CANCEL</Link>
                        <button  class="btn btn-success rounded-pill m-2" > SAVE</button>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table" >
                        <thead>
                            <th colspan="2" class="bg-info" >GENERALS</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width:25%">
                                    Category
                                </td>
                                <td>
                                    <select v-model="product.category_id"  class="form-control" >
                                        <option v-for="category in categories" :key="category" :value="category.category_id" selected > {{ category.get_category_description_with_products.name }} </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Product Name:
                                </td>
                                <td>
                                    <input v-model="product.get_product_description.name" class="form-control" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Product Icon:
                                </td>
                                <td>
                                    <select v-model="product.get_product_description.product_icons" class="form-control">
                                        <option v-for="icon in icons" :key="icon" :value="icon.id"> {{ icon.icon_name }} </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Select the days available:
                                </td>
                                <td class="font-weight-bold" >
                                    
                                    <input v-if="product.get_product_description.availibleday.includes('2')" @click="removeDay(product.get_product_description.availibleday, '2')" class="form-input" type="checkbox" checked > 
                                    <input v-else  @click="addDay(product.get_product_description.availibleday, '2')" class="form-input" type="checkbox" > MON
                                    
                                    <input v-if="product.get_product_description.availibleday.includes('3')" @click="removeDay(product.get_product_description.availibleday, '3')" class="form-input" type="checkbox" checked > 
                                    <input v-else  @click="addDay(product.get_product_description.availibleday, '3')" class="form-input" type="checkbox" > TUE
                                    
                                    <input v-if="product.get_product_description.availibleday.includes('4')" @click="removeDay(product.get_product_description.availibleday, '4')" class="form-input" type="checkbox" checked > 
                                    <input v-else  @click="addDay(product.get_product_description.availibleday, '4')" class="form-input" type="checkbox" > WED
                                    
                                    <input v-if="product.get_product_description.availibleday.includes('5')" @click="removeDay(product.get_product_description.availibleday, '5')" class="form-input" type="checkbox" checked > 
                                    <input v-else  @click="addDay(product.get_product_description.availibleday, '5')" class="form-input" type="checkbox" > THU
                                    
                                    <input v-if="product.get_product_description.availibleday.includes('6')" @click="removeDay(product.get_product_description.availibleday, '6')" class="form-input" type="checkbox" checked > 
                                    <input v-else  @click="addDay(product.get_product_description.availibleday, '6')" class="form-input" type="checkbox" > FRI
                                    
                                    <input v-if="product.get_product_description.availibleday.includes('7')" @click="removeDay(product.get_product_description.availibleday, '7')" class="form-input" type="checkbox" checked > 
                                    <input v-else  @click="addDay(product.get_product_description.availibleday, '7')" class="form-input" type="checkbox" > SAT
                                    
                                    <input v-if="product.get_product_description.availibleday.includes('8')" @click="removeDay(product.get_product_description.availibleday, '8')" class="form-input" type="checkbox" checked > 
                                    <input v-else  @click="addDay(product.get_product_description.availibleday, '8')" class="form-input" type="checkbox" > SUN
                                    
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Order type:
                                </td>
                                <td>
                                    <div class="form-check form-check-inline m-2 ">
                                        <input  v-model="product.get_product_description.order_type"  :value="'delivery'" class="form-check-input" type="radio" >
                                        <label class="form-check-label" for="inlineRadio2">Delivery</label>
                                    </div>
                                    <div class="form-check form-check-inline  ">
                                        <input   v-model="product.get_product_description.order_type"  :value="'collection'" class="form-check-input" type="radio" >
                                        <label class="form-check-label" for="inlineRadio2">Collection</label>
                                    </div>
                                    <div class="form-check form-check-inline  ">
                                        <input   v-model="product.get_product_description.order_type"  :value="'both'" class="form-check-input" type="radio" >
                                        <label class="form-check-label" for="inlineRadio2">Both</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Description:
                                </td>
                                <td>
                                    <QuillEditor v-model="product.get_product_description.description" theme="snow" style="min-hight: 200px" ></QuillEditor >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Price:
                                </td>
                                <td>
                                    <div class=" ">
                                        <span class="text-red" > Main Price: </span> 
                                        <input  v-model="product.get_product_description.price"   class="form-control" type="text" >
                                    </div>
                                    <br/>
                                    <div class="  ">
                                        <span class="text-red" > Delivery Price: </span> 
                                        <input   v-model="product.get_product_description.delivery_price"   class="form-control" type="text" >
                                    </div>
                                    <br/>
                                    <div class="  ">
                                        <span class="text-red" > Collection Price: </span> 
                                        <input   v-model="product.get_product_description.collection_price"   class="form-control" type="text" >
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Image:
                                </td>
                                <td>
                                    <input  type="file" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            
                        </tbody>
                    </table>

                    <table class="table" >
                        <thead>
                            <th colspan="2" class="bg-info" >OPTION</th>
                        </thead>

                        
                            <tbody v-for="topping in toppingData" :key="topping" >
                                <template v-if="topping" >
                                    <tr>
                                        <th colspan="2" class="table-active"> {{ topping.name_topping }} </th>
                                    </tr>
                                    <template v-for=" group in group_topping" :key="group" >
                                        <template v-if="group.id_group_topping == topping.id_topping">
                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-inline  ">
                                                        <input   v-model="group.typetopping"  :value="'select'" class="form-check-input" type="radio" >
                                                        <label class="form-check-label" for="inlineRadio2">Dropdown</label>
                                                    </div>
                                                    <div class="form-check form-check-inline  ">
                                                        <input   v-model="group.typetopping"  :value="'checkbox'" class="form-check-input" type="radio" >
                                                        <label class="form-check-label" for="inlineRadio2">Checkbox</label>
                                                    </div>
                                                    <br/>
                                                    <br/>
                                                    <br/>
                                                    <div class="form-check form-check-inline  ">
                                                        <input   v-model="group.enable"  :value="1" class="form-check-input" type="radio" >
                                                        <label class="form-check-label" for="inlineRadio2">Enable</label>
                                                    </div>
                                                    <div class="form-check form-check-inline  ">
                                                        <input   v-model="group.enable"  :value="0" class="form-check-input" type="radio" >
                                                        <label class="form-check-label" for="inlineRadio2">Disaable</label>
                                                    </div>
                                                    <br/>
                                                    <br/>
                                                    <br/>
                                                    <br/>
                                                    <br/>
                                                    <br/>
                                                    <div class="form-group m2 ">
                                                        <label class="form-check-label" for="inlineRadio2">Rename Group</label>
                                                        <input  v-model="group.renamegroup"   class="form-control float-right" type="text" >
                                                    </div>
                                                    <br/>
                                                    <div class="form-group m2 ">
                                                        <label class="form-check-label" for="inlineRadio2">Sort Order</label>
                                                        <input   v-model="group.topping_sort_order"   class="form-control float-right" type="text" >
                                                    </div>
                                                </td>
                                                <td>
                                                    <div v-if="group.typetopping == 'checkbox'" >
                                                        <span class="text-red" >Minimum: </span> 
                                                        <input  v-model="group.min_check"   class="form-control" type="text" >
                                                    </div>
                                                    <br/>
                                                    <div v-if="group.typetopping == 'checkbox'" >
                                                        <span class="text-red" > Maximum: </span> 
                                                        <input   v-model="group.max_check"   class="form-control" type="text" >
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </template>
                                    </template>
                                </template>
                                <template v-else class="text-center" >
                                    <tr>
                                        <td colspan="2" class="text-center">No topping</td>
                                    </tr>
                                </template>
                                <tr>
                                    <td>
                                        Status:
                                    </td>
                                    <td>
                                        <select v-model="product.get_product_description.status" class="form-control">
                                            <option :value="1"> Enable </option>
                                            <option :value="0"> Disable </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Status:
                                    </td>
                                    <td>
                                        <input v-model="product.get_product_description.sort_order" class="form-control" type="text">
                                    </td>
                                </tr>
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
import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css';

export default {
  components: {
    Head,
    Link,
    AdminLayout,
    Pagination,
    QuillEditor
  },

  props: {
      categories: Object,
      product: Object,
      icons: Object,
      toppings: Object,
      toppingData: Object,
      group_topping: Object,
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
        removeDay(arr, day){
            let index = arr.indexOf(day);
            if (index !== -1) {
            arr.splice(index, 1);
            }
        },
        addDay(arr, day){
            arr.push(day)
            arr.sort()
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
