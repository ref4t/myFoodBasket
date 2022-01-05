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
                                        CATEGORY SECTION
                                    </th>
                                </tr>
                            </thead>
                        </table>

                        <div class="row">
                            <div v-for=" category in layout.get_category" :key="category" class="responsive">
                                <div class="gallery">
                                    <a>
                                        <button @click="deleteCategory(category.id)" type="buttom" class="close" style="margin-bottom: -22px; margin-right: 5px" ><span aria-hidden="true" >&times;</span></button>
                                        <img :src=" '/'+ category.path" alt="Cinque Terre" width="500" height="350">
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
                                            Item Name:
                                        </td>
                                        <td colspan="2">
                                            <input type="text" v-model="this.form.name" class="form-control" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Description:
                                        </td>
                                        <td>
                                            <textarea class="form-control" v-model="form.description" name="" id=""></textarea>
                                        </td>
                                        <td>
                                            <button @click="insertCategory(this.form)" class="btn btn-success rounded-pill" type="button" >ADD IMAGE</button>
                                        </td>
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

export default {
    components: {
        AdminLayout,
        Pagination,
        Head,
        Link

    },
    props:{
        layout: Object,
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
    watch: {
        
    },
    methods: {
        setGellery(e){
            this.form.image = e.target.files[0];
        },
        
        

        insertCategory(form){
            let con = confirm("Add New Image?");

            if (con){

                this.$inertia.post(route('admin.layout.category.insert'),form)
            }
        },
        
        deleteCategory(id){

            let con = confirm("Delete Image?");

            if (con){

                this.$inertia.post(route('admin.layout.category.delete',{id}),{
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
</style>