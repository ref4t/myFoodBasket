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
                                        POPULAR ITEM SECTION
                                    </th>
                                </tr>
                            </thead>
                        </table>

                        <div class="row">
                            <div v-for=" item in layout.get_popular" :key="item" class="responsive">
                                <div class="gallery">
                                    <a>
                                        <button @click="deleteItem(item.id)" type="buttom" class="close" style="margin-bottom: -22px; margin-right: 5px" ><span aria-hidden="true" >&times;</span></button>
                                        <img :src="'/image/' + item.path" :alt="item.name" width="500" height="350" :title='item.name'>
                                    </a>
                                </div>
                            </div>
                            

                            <div class="custom-file float-bottom">
                            
                            </div>

                        <div class="card col-12">
                            <form @submit.prevent="addItem(this.form)" class="form-inline m-4">
                                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">ITEM</label>
                                <select class="custom-select col-5" v-model="form.item"  name="item" id="">
                                    <option v-for="item in items" :key="item" :value="item"> {{ item.get_description.name }} </option>
                                </select>

                                

                                <button type="submit" class="btn btn-info rounded-pill col-1 ml-2">ADD</button>
                            </form>
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
        items: Object
    },
    created(){
        
    },
    data(){
        return{
            form:useForm({
                // image:'',
                // description:'',
                // name:''
                item: '',
            })
        }
        
    },
    watch: {
        
    },
    methods: {
        // setGellery(e){
        //     this.form.image = e.target.files[0];
        // },
        
        

        addItem(form){
            let con = confirm("Add Item to Home-page?");

            if (con){

                this.$inertia.post(route('admin.layout.item.insert'),form)
            }
        },
        
        
        deleteItem(id){

            let con = confirm("Delete item?");

            if (con){

                this.$inertia.post(route('admin.layout.item.delete',{id}),{
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