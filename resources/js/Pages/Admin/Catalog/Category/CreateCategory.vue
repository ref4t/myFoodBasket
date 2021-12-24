<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Categories / Create</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form @submit.prevent="submit(this.form)">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <button class="btn btn-info rounded-pill m-2" type="submit" > SAVE</button>
                            <Link :href="route('admin.catalog.category.index')" as="button" class="btn btn-danger rounded-pill m-2" > CANCEL</Link>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table" >
                            <tbody>
                                <tr>
                                    <td style="width:25%">
                                        Category Name:
                                    </td>
                                    <td>
                                        <input v-model="this.form.name" class="form-control" type="text" >
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                        Select the days availible
                                    </td>
                                    <td class="font-weight-bold" >
                                        <input v-if="this.form.availibleday.includes('2')" @click="removeDay(this.form.availibleday, '2')" class="form-input" type="checkbox" checked > 
                                        <input v-else  @click="addDay(this.form.availibleday, '2')" class="form-input" type="checkbox" > MON
                                        
                                        <input v-if="this.form.availibleday.includes('3')" @click="removeDay(this.form.availibleday, '3')" class="form-input" type="checkbox" checked > 
                                        <input v-else  @click="addDay(this.form.availibleday, '3')" class="form-input" type="checkbox" > TUE
                                        
                                        <input v-if="this.form.availibleday.includes('4')" @click="removeDay(this.form.availibleday, '4')" class="form-input" type="checkbox" checked > 
                                        <input v-else  @click="addDay(this.form.availibleday, '4')" class="form-input" type="checkbox" > WED
                                        
                                        <input v-if="this.form.availibleday.includes('5')" @click="removeDay(this.form.availibleday, '5')" class="form-input" type="checkbox" checked > 
                                        <input v-else  @click="addDay(this.form.availibleday, '5')" class="form-input" type="checkbox" > THU
                                        
                                        <input v-if="this.form.availibleday.includes('6')" @click="removeDay(this.form.availibleday, '6')" class="form-input" type="checkbox" checked > 
                                        <input v-else  @click="addDay(this.form.availibleday, '6')" class="form-input" type="checkbox" > FRI
                                        
                                        <input v-if="this.form.availibleday.includes('7')" @click="removeDay(this.form.availibleday, '7')" class="form-input" type="checkbox" checked > 
                                        <input v-else  @click="addDay(this.form.availibleday, '7')" class="form-input" type="checkbox" > SAT
                                        
                                        <input v-if="this.form.availibleday.includes('8')" @click="removeDay(this.form.availibleday, '8')" class="form-input" type="checkbox" checked > 
                                        <input v-else  @click="addDay(this.form.availibleday, '8')" class="form-input" type="checkbox" > SUN
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                        Description:
                                    </td>
                                    <td>
                                        <quill-editor
                                            v-model:value="this.content"
                                            :options="state.editorOption"
                                            :disabled="state.disabled"
                                            @change="onEditorChange($event)"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                        Image:
                                    </td>
                                    <td>
                                        <input type="file" @input="this.form.image = $event.target.files[0]" />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                       Banner:
                                    </td>
                                    <td>
                                        <input type="file" @input="this.form.banner = $event.target.files[0]" />
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td style="width:25%">
                                      Sort Order:
                                    </td>
                                    <td>
                                        <input v-model="this.form.sort" class="form-control" type="text">
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
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
import useValidate from '@vuelidate/core'
import { required, text, maxLength, numeric } from '@vuelidate/validators'
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
    groups: Object,
    stores: Object,
  },
  data() {
      return {
          v$: useValidate(),
           content:'',
          form:useForm({
              name:'',
              availibleday:[],
              desc:'',
              image:'',
              banner:'',
              sort:'',
              
          })
      }
    },
    validations(){
        return {
        form: {
            name: {required,maxLength: maxLength(20)},
            desc: {required, maxLength: maxLength(255)},
            sort: {required, numeric},
        },
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

        
        const onEditorChange = ({ quill, html, text }) => {
        state._content = html
        }

        setTimeout(() => {
        state.disabled = false
        }, 2000)

        return { state, onEditorChange }
    },

    methods:{
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
        submit(form){
            this.v$.$validate()

            form.desc = this.content;
            console.log(form)
            

            if(!this.v$.$error){
                let con = confirm("Save User?");

                if (con){
                this.$inertia.post( route('admin.catalog.category.store') , form,{
                replace: true, 
                preserveState: true})
                }
            }else{
                console.log("failed")
            }

            


        },
    },
  watch: {
      
  }
};
</script>
<style>
.ql-container{
    min-height: 20vh;
}
</style>
