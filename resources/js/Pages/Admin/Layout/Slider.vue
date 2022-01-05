<template>
    <admin-layout>
        <template v-slot:header>
            <h1 class="m-0"></h1>
        </template>
        
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-borderless">
                            <thead>
                               <tr class="bg-info">
                                    <th colspan="2">
                                        SLIDER SECTION
                                    </th>
                                </tr>
                            </thead>
                        </table>

                        <div class="row">
                            <div v-for=" slider in slider" :key="slider" class="responsive">
                                <div class="gallery">
                                    <a>
                                        <button @click="deleteslider(slider.id)" type="buttom" class="close" style="margin-bottom: -22px; margin-right: 5px" ><span aria-hidden="true" >&times;</span></button>
                                        <img :src=" '/'+ slider.path" alt="Cinque Terre" width="500" height="350">
                                    </a>
                                </div>
                            </div>

                            <div class="custom-file float-bottom">
                            
                            </div>

                            <div class="card col-12">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Select Image
                                            </td>
                                            <td colspan="2">
                                                <input type="file" class=""  @change="setGellery" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Title
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" v-model="form.title" name="" id=""/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Description
                                            </td>
                                            <td>
                                                <quill-editor
                                                v-model:value="this.form.description"
                                                :options="state.editorOption"
                                                :disabled="state.disabled"
                                                @blur="onEditorBlur($event)"
                                                @focus="onEditorFocus($event)"
                                                @ready="onEditorReady($event)"
                                                @change="onEditorChange($event)"
                                            />
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><button @click="insertSlider(this.form)" class="btn btn-success rounded-pill float-right" type="button" >ADD IMAGE</button></td>
                                        </tr>
                                    </tbody>
                                </table>
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
import Pagination from "@/Components/Pagination";
import { Head, Link } from "@inertiajs/inertia-vue3";
import { useForm } from '@inertiajs/inertia-vue3'
import { quillEditor, Quill } from 'vue3-quill'
import { reactive } from 'vue'
export default {
    components: {
        AdminLayout,
        Pagination,
        Head,
        Link,
        quillEditor

    },
    props:{
        slider: Object,
    },
    created(){
        
    },
    data(){
        return{
            form:useForm({
                image:'',
                description:'',
                name:''
            })
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
    methods: {
        setGellery(e){
            this.form.image = e.target.files[0];
        },
        insertSlider(form){
            let con = confirm("Add New Image?");

            if (con){

                this.$inertia.post(route('admin.layout.slider.insert'),form)
            }
        },
        
        deleteslider(id){

            let con = confirm("Delete Image?");

            if (con){

                this.$inertia.post(route('admin.layout.slider.delete',{id}),{
                    replace: true, 
                    preserveState: true
                })
            }

        },
        
    }
    
}
</script>

<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
  margin-bottom: 2%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
.ql-container{
    min-height: 20vh;
}
</style>