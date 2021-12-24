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
                        <Link :href="route('admin.catalog.category.index')" as="button" class="btn btn-warning rounded-pill m-2" > CANCEL</Link>
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
                                    Category Name:
                                </td>
                                <td>
                                    <input v-model="category.get_category_description_with_products.name" class="form-control" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Select the days available:
                                </td>
                                <td class="font-weight-bold" >
                                    
                                    <input v-if="category.availibleday.includes('2')" @click="removeDay(category.availibleday, '2')" class="form-input" type="checkbox" checked > 
                                    <input v-else  @click="addDay(category.availibleday, '2')" class="form-input" type="checkbox" > MON
                                    
                                    <input v-if="category.availibleday.includes('3')" @click="removeDay(category.availibleday, '3')" class="form-input" type="checkbox" checked > 
                                    <input v-else  @click="addDay(category.availibleday, '3')" class="form-input" type="checkbox" > TUE
                                    
                                    <input v-if="category.availibleday.includes('4')" @click="removeDay(category.availibleday, '4')" class="form-input" type="checkbox" checked > 
                                    <input v-else  @click="addDay(category.availibleday, '4')" class="form-input" type="checkbox" > WED
                                    
                                    <input v-if="category.availibleday.includes('5')" @click="removeDay(category.availibleday, '5')" class="form-input" type="checkbox" checked > 
                                    <input v-else  @click="addDay(category.availibleday, '5')" class="form-input" type="checkbox" > THU
                                    
                                    <input v-if="category.availibleday.includes('6')" @click="removeDay(category.availibleday, '6')" class="form-input" type="checkbox" checked > 
                                    <input v-else  @click="addDay(category.availibleday, '6')" class="form-input" type="checkbox" > FRI
                                    
                                    <input v-if="category.availibleday.includes('7')" @click="removeDay(category.availibleday, '7')" class="form-input" type="checkbox" checked > 
                                    <input v-else  @click="addDay(category.availibleday, '7')" class="form-input" type="checkbox" > SAT
                                    
                                    <input v-if="category.availibleday.includes('8')" @click="removeDay(category.availibleday, '8')" class="form-input" type="checkbox" checked > 
                                    <input v-else  @click="addDay(category.availibleday, '8')" class="form-input" type="checkbox" > SUN
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Description:
                                </td>
                                <td>
                                    <quill-editor
                                            v-model:value="category.get_category_description_with_products.description"
                                            :options="state.editorOption"
                                            :disabled="state.disabled"
                                            @blur="onEditorBlur($event)"
                                            @focus="onEditorFocus($event)"
                                            @ready="onEditorReady($event)"
                                            @change="onEditorChange($event)"
                                        />
                                </td>
                            </tr>
                        
                            
                        </tbody>
                    </table>

                    <table class="table" >
                        <thead>
                            <th colspan="2" class="bg-info" >OPTION</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    size:
                                </td>
                                <td>
                                    <div class="form-check form-check-inline  ">
                                        <input  v-model="options.enable_size"  :value="1" class="form-check-input" type="radio" >
                                        <label class="form-check-label" for="inlineRadio2">Enable</label>
                                    </div>
                                    <div class="form-check form-check-inline  ">
                                        <input   v-model="options.enable_size"  :value="0" class="form-check-input" type="radio" >
                                        <label class="form-check-label" for="inlineRadio2">Disaable</label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>


                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Size</th>
                                <th>Sort Order</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="size in options.get_options" :key="size" >
                                <td v-if="this.editSizeData == size.id_size" style="width: 40%" >
                                     <input v-model="size.size" class="form-control" type="text">
                                </td>
                                <td v-else style="width: 40%" > {{ decodeHtml(size.size) }} </td>
                                
                                <td v-if="this.editSizeData == size.id_size" >
                                     <input v-model=" size.short_order" class="form-control" type="text">
                                </td>
                                <td v-else > {{ size.short_order }} </td>
                                
                                <td style="width: 40%"> 
                                    <button v-if="this.editSizeData == size.id_size" @click="saveSize(size)" class="btn btn-success rounded-pill">SAVE</button>
                                    <button v-else @click="editsize(size.id_size)" class="btn btn-warning rounded-pill">EDIT</button>
                                    <button v-if="this.editSizeData == size.id_size" @click="editSizeData = ''" class="btn btn-info rounded-pill">CANCEL</button>
                                    <button v-else class="btn btn-danger rounded-pill">DELETE</button>
                                </td>
                            </tr>
                            <tr v-if="this.addSize == 1">
                                <td>
                                     <input v-model=" this.newSize.size" class="form-control" type="text">
                                </td>
                                <td>
                                     <input v-model=" this.newSize.sort" class="form-control" type="text">
                                </td>
                                <td>
                                     <button @click="saveSize(this.newSize)" class="btn btn-success rounded-pill">SAVE</button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3"> <button @click="this.addSize = 1" class="btn btn-info rounded-pill float-right">ADD</button> </td>
                            </tr>
                        </tbody>
                    </table>


                    <div class="card-footer clearfix">

                    </div>

                    <table class="table">
                        <tbody>
                            <tr>
                                <td style="width:25%">
                                    Options:
                                </td>
                                <td>
                                    <div class="form-check form-check-inline  ">
                                        <input  v-model="options.enable_option"  :value="1" class="form-check-input" type="radio" >
                                        <label class="form-check-label" for="inlineRadio2">Enable</label>
                                    </div>
                                    <div class="form-check form-check-inline  ">
                                        <input   v-model="options.enable_option"  :value="0" class="form-check-input" type="radio" >
                                        <label class="form-check-label" for="inlineRadio2">Disable</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Comment Box:
                                </td>
                                <td>
                                    <div class="form-check form-check-inline  ">
                                        <input  v-model="options.enable_boxcomment"  :value="1" class="form-check-input" type="radio" >
                                        <label class="form-check-label" for="inlineRadio2">Enable</label>
                                    </div>
                                    <div class="form-check form-check-inline  ">
                                        <input   v-model="options.enable_boxcomment"  :value="0" class="form-check-input" type="radio" >
                                        <label class="form-check-label" for="inlineRadio2">Disable</label>
                                    </div>
                                    <br/>
                                    <br/>
                                    <div v-if="options.enable_boxcomment == 1" class="form-group m2">
                                        <label class="form-check-label">Maximum characters allowed</label>
                                        <input   v-model="options.character"  class="form-control" type="text" >
                                        
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Image:
                                </td>
                                <td>
                                    <input type="file" @input="category.image = $event.target.files[0]" />
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Banner:
                                </td>
                                <td>
                                    <input type="file" @input="category.img_banner = $event.target.files[0]" />
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Sort Order:
                                </td>
                                <td>
                                    <input v-model="category.sort_order" class="form-control" type="text"/>
                                    
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
    quillEditor
  },

  props: {
      category: Object,
      options: Object,
      toppings: Object,
  },
  data() {
      return {
          editSizeData:'',
          addSize: 0,
          newSize:{
              size:'',
              sort:''
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
        editsize(id){
            this.editSizeData = id
        },
        saveSize(size){
            console.log(size)
        }

    },
    watch: {
    },
};
</script>

<style>

</style>
