<template>
  <admin-layout>
    <template v-slot:header>
        <div class="form-check form-check-inline m-4">
           <h1 class="m-0 text-capitalize">Add Product</h1>
        </div>
        <div class="form-check form-check-inline  m-4">
            
        </div>
        
        
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form @submit.prevent="updateProduct(this.product,this.product_description)">
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
                                        <select v-model="this.product.category_id"  class="form-control" >
                                            <option v-for="category in categories" :key="category" :value="category.category_id" selected > {{ category.get_category_description_with_products.name }} </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Product Name:
                                    </td>
                                    <td>
                                        <input v-model="this.product_description.name" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Product Icon:
                                    </td>
                                    <td>
                                        <select v-model="this.product_description.product_icons" class="form-control">
                                            <option v-for="icon in icons" :key="icon" :value="icon.id"> {{ icon.icon_name }} </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Select the days available:
                                    </td>
                                    <td class="font-weight-bold" >
                                        
                                        <input v-if="this.product_description.availibleday.includes('2')" @click="removeDay(this.product_description.availibleday, '2')" class="form-input" type="checkbox" checked > 
                                        <input v-else  @click="addDay(this.product_description.availibleday, '2')" class="form-input" type="checkbox" > MON
                                        
                                        <input v-if="this.product_description.availibleday.includes('3')" @click="removeDay(this.product_description.availibleday, '3')" class="form-input" type="checkbox" checked > 
                                        <input v-else  @click="addDay(this.product_description.availibleday, '3')" class="form-input" type="checkbox" > TUE
                                        
                                        <input v-if="this.product_description.availibleday.includes('4')" @click="removeDay(this.product_description.availibleday, '4')" class="form-input" type="checkbox" checked > 
                                        <input v-else  @click="addDay(this.product_description.availibleday, '4')" class="form-input" type="checkbox" > WED
                                        
                                        <input v-if="this.product_description.availibleday.includes('5')" @click="removeDay(this.product_description.availibleday, '5')" class="form-input" type="checkbox" checked > 
                                        <input v-else  @click="addDay(this.product_description.availibleday, '5')" class="form-input" type="checkbox" > THU
                                        
                                        <input v-if="this.product_description.availibleday.includes('6')" @click="removeDay(this.product_description.availibleday, '6')" class="form-input" type="checkbox" checked > 
                                        <input v-else  @click="addDay(this.product_description.availibleday, '6')" class="form-input" type="checkbox" > FRI
                                        
                                        <input v-if="this.product_description.availibleday.includes('7')" @click="removeDay(this.product_description.availibleday, '7')" class="form-input" type="checkbox" checked > 
                                        <input v-else  @click="addDay(this.product_description.availibleday, '7')" class="form-input" type="checkbox" > SAT
                                        
                                        <input v-if="this.product_description.availibleday.includes('8')" @click="removeDay(this.product_description.availibleday, '8')" class="form-input" type="checkbox" checked > 
                                        <input v-else  @click="addDay(this.product_description.availibleday, '8')" class="form-input" type="checkbox" > SUN
                                        
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Order type:
                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline m-2 ">
                                            <input  v-model="this.product_description.order_type"  :value="'delivery'" class="form-check-input" type="radio" >
                                            <label class="form-check-label" for="inlineRadio2">Delivery</label>
                                        </div>
                                        <div class="form-check form-check-inline  ">
                                            <input   v-model="this.product_description.order_type"  :value="'collection'" class="form-check-input" type="radio" >
                                            <label class="form-check-label" for="inlineRadio2">Collection</label>
                                        </div>
                                        <div class="form-check form-check-inline  ">
                                            <input   v-model="this.product_description.order_type"  :value="'both'" class="form-check-input" type="radio" >
                                            <label class="form-check-label" for="inlineRadio2">Both</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Description:
                                    </td>
                                    <td>
                                      <quill-editor
                                            v-model:value="this.content"
                                            :options="state.editorOption"
                                            :disabled="state.disabled"
                                            @blur="onEditorBlur($event)"
                                            @focus="onEditorFocus($event)"
                                            @ready="onEditorReady($event)"
                                            @change="onEditorChange($event)"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Price:
                                    </td>
                                    <td>
                                        <div class=" ">
                                            <span class="text-red" > Main Price: </span> 
                                            <input  v-model="this.product_description.price"   class="form-control" type="text" >
                                        </div>
                                        <br/>
                                        <div class="  ">
                                            <span class="text-red" > Delivery Price: </span> 
                                            <input   v-model="this.product_description.delivery_price"   class="form-control" type="text" >
                                        </div>
                                        <br/>
                                        <div class="  ">
                                            <span class="text-red" > Collection Price: </span> 
                                            <input   v-model="this.product_description.collection_price"   class="form-control" type="text" >
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Image:
                                    </td>
                                    <td>
                                        <input type="file" @input="product_description.image = $event.target.files[0]" />
                                        <progress v-if="product_description.progress" :value="product_description.progress.percentage" max="100">
                                        {{ product_description.progress.percentage }}%
                                        </progress>
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
                            
                                <tbody>
                                    <template v-for=" category in categories" :key="category" >
                                        <template v-if="category.category_id == this.product.category_id" >
                                            <template v-for="group in category.group " :key="group" >
                                                <!-- has group ids -->
                                                
                                                <template v-for="topping in cat_group_topping" :key="topping" >
                                                    <template v-if="topping.id_topping == group.id_group_option" >
                                                        <tr>
                                                            <th colspan="2">
                                                                
                                                                {{ decodeHtml(topping.name_topping) }}
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check form-check-inline  ">
                                                                    <input   v-model="this.toppingData.typetopping"  :value="'select'" class="form-check-input" type="radio" >
                                                                    <label class="form-check-label" for="inlineRadio2">Dropdown</label>
                                                                </div>
                                                                <div class="form-check form-check-inline  ">
                                                                    <input   v-model="this.toppingData.typetopping"  :value="'checkbox'" class="form-check-input" type="radio" >
                                                                    <label class="form-check-label" for="inlineRadio2">Checkbox</label>
                                                                </div>
                                                                <br/>
                                                                <br/>
                                                                <div class="form-check form-check-inline  ">
                                                                    <input   v-model="this.toppingData.enable"  :value="1" class="form-check-input" type="radio" >
                                                                    <label class="form-check-label" for="inlineRadio2">Enable</label>
                                                                </div>
                                                                <div class="form-check form-check-inline  ">
                                                                    <input   v-model="this.toppingData.enable"  :value="0" class="form-check-input" type="radio" >
                                                                    <label class="form-check-label" for="inlineRadio2">Disaable</label>
                                                                </div>
                                                                <br/>
                                                                <br/>
                                                                <br/>
                                                                <div class="form-group m2 ">
                                                                    <label class="form-check-label" for="inlineRadio2">Rename Group</label>
                                                                    <input  v-model="this.toppingData.renamegroup"   class="form-control " type="text" style="width:200px" >
                                                                </div>
                                                                <div class="form-group m2 ">
                                                                    <label class="form-check-label" for="inlineRadio2">Sort Order</label>
                                                                    <input   v-model="this.toppingData.topping_sort_order"   class="form-control " type="text" style="width:200px">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <select v-if="this.toppingData.typetopping == 'select'"  class="form-control">
                                                                    <template v-for="option in topping.get_options" :key="option" >
                                                                            <option  :value="option.id_group_topping"> {{ decodeHtml(option.name) }} </option>                                                                     
                                                                    </template>
                                                                </select>

                                                                <template v-if="this.toppingData.typetopping == 'checkbox'" >
                                                                    <template  v-for="option in topping.get_options" :key="option">
                                                                        <div class="row form-check form-check-inline  ">
                                                                            <input class="form-check-input" type="checkbox" >
                                                                            <label class="form-check-label" for="inlineRadio2">{{ decodeHtml(option.name) }}</label>
                                                                        </div>
                                                                        <br/>
                                                                    </template>
                                                                </template>
                                                            </td>
                                                        </tr>
                                                    </template>
                                                </template>
                                            </template>
                                            
                                        </template>
                                    </template>

                                    
                                    <tr>
                                        <td>
                                            Status:
                                        </td>
                                        <td>
                                            <select v-model="this.product_description.status" class="form-control">
                                                <option :value="1"> Enable </option>
                                                <option :value="0"> Disable </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Sort Order:
                                        </td>
                                        <td>
                                            <input v-model="this.product_description.sort_order" class="form-control" type="text">
                                        </td>
                                    </tr>
                                </tbody>
                            
                        </table>
                        <div class="card-footer clearfix">
                            <!-- <Pagination :links="categories.links" ></Pagination> -->
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
import { quillEditor, Quill } from 'vue3-quill'
// import customQuillModule from 'customQuillModule'
// Quill.register('modules/customQuillModule', customQuillModule)
import { useForm } from '@inertiajs/inertia-vue3'

import { reactive } from 'vue'


export default {
  components: {
    Head,
    Link,
    AdminLayout,
    Pagination,
    quillEditor
  },

  props: {
      categories:Object,
      icons: Object,
      options : Object,
    cat_group_topping: Object,
     
    },
    
  data() {
      return {
          content:'',
         deleteData:[],
         selected_catagory:'',
         product: {
             category_id:'',
         },
         product_description:useForm({
             name:'',
             product_icons:'',
             availibleday:[],
             order_type:'',
             description:null,
             image:'',
             price:'',
             delivery_price:'',
             collection_price:'',
             status:'',
             sort_order:''
            
         }),

         toppingData:{
             typetopping: 'select',
             enable: '0'
         }

         
      }
    },
    setup() {
        const state = reactive({
            content: '<p>2333</p>',
            _content: '',
            editorOption: {
                placeholder: 'Write Description',
                modules: {
                // toolbars: [
                    // custom toolbars options
                    // will override the default configuration
                // ],
                // other moudle options here
                // otherMoudle: {}
                },
                // more options
            },
            disabled: false
        })

        const onEditorBlur = (quill) => {
        console.log('editor blur!', quill)
        }
        const onEditorFocus = (quill) => {
        console.log('editor focus!', quill)
        }
        const onEditorReady = (quill) => {
        console.log('editor ready!', quill)
        }
        const onEditorChange = ({ quill, html, text }) => {
        console.log('editor change!', quill, html, text)
        state._content = html
        }

        setTimeout(() => {
        state.disabled = false
        }, 2000)

        return { state, onEditorBlur, onEditorFocus, onEditorReady, onEditorChange }
    },
 

    methods:{
        decodeHtml(html) {
            var txt = document.createElement("textarea");
            txt.innerHTML = html;
            return txt.value;
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
        },
        updateProduct(product,product_description){
            let con = confirm("Save new Product?");

            if (con){
                product_description.description = this.content;
                this.$inertia.post( route('admin.catalog.product.store') , {product,product_description},{
                replace: true, 
                preserveState: true})
            }
        }

    },
    
};
</script>

<style>
.ql-container{
    min-height: 20vh;
}
</style>
