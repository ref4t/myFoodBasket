<template>
    <admin-layout>
        <template v-slot:header>
            <h1 class="m-0">LAYOUT</h1>
        </template>
        
        <section class="content">
            <div class="container-fluid">
                <form @submit.prevent="updateLayout(layout)" >
                    <div class="d-flex flex-row-reverse bd-highlight">

                        <button class="btn btn-success rounded-pill m-2" type="submit" >SAVE</button>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            
                            <div class="card ">

                                <div class="card-header">
                                    <div class="form-group row">
                                        <label  class="col-sm-2 col-form-label">Select Theme</label>
                                        <div class="col-sm-5">
                                        <select v-model="layout.theme" class="form-control" name="" id="">
                                            <!-- <option value="1"> THEME 1 </option> -->
                                            <option value="2"> THEME 2</option>
                                            <option value="3"> THEME 3</option>
                                            <option value="4"> THEME 4</option>
                                            <option value="5"> THEME 5</option>
                                            <option value="6"> THEME 6</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            
                            <div class="card">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr class="bg-info">
                                            <th >
                                                SLIDEER IMAGES
                                            </th>
                                        </tr>
                                        <tr>
                                            <td >
                                                <img v-if="layout.theme == 6" class="img-thumbnail rounded float-right" :alt="about_us" :src="'/image/layout/slider.png'" w >
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div>
                        
                        </div>



                        <div class="col-12">
                            
                            <div class="card">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr class="bg-info">
                                            <th colspan="2">
                                                ABOUT US SECTION
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group row">
                                                    <label  class="col-sm-5 col-form-label">Background Color</label>
                                                    <div class="col-sm-5">
                                                    <input v-model="layout.about_bg" type="text" placeholder="#F0F0F0" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label  class="col-sm-5 col-form-label">Content Color</label>
                                                    <div class="col-sm-5">
                                                    <input v-model="layout.about_content" type="text" placeholder="#F0F0F0" class="form-control">
                                                    </div>
                                                </div>

                                            </td>
                                            <td>
                                                <img v-if="layout.theme == 6" class="img-thumbnail rounded float-right" :alt="about_us" :src="'/image/layout/about-us.png'" width="600" height="750" >
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>


                        <div  class="col-12">
                            <div class="card ">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr class="bg-info">
                                            <th colspan="2">
                                                BOOKING SECTION
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group row">
                                                    <label  class="col-sm-5 col-form-label">SECTION</label>
                                                    <div class="col-sm-5">
                                                    <span as="button" @click="layout.booking = 1" v-if="layout.booking == 1" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span as="button" v-else @click="layout.booking = 1" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                                    <span as="button" @click="layout.booking = 0" v-if="layout.booking == 0" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span as="button" v-else @click="layout.booking = 0" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label  class="col-sm-5 col-form-label">Background Color</label>
                                                    <div class="col-sm-5">
                                                    <input v-model="layout.booking_bg" type="text" placeholder="#F0F0F0" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label  class="col-sm-5 col-form-label">Content Color</label>
                                                    <div class="col-sm-5">
                                                    <input v-model="layout.booking_content" type="text" placeholder="#F0F0F0" class="form-control">
                                                    </div>
                                                </div>
                                                
                                            </td>
                                            <td>
                                                <img v-if="layout.theme == 6" class="img-thumbnail rounded float-right" :alt="booking" :src="'/image/layout/booking.png'" width="600" height="750" >
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card ">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr class="bg-info">
                                            <th colspan="2">
                                                GALERRY SECTION
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group row">
                                                    <label  class="col-sm-5 col-form-label">SECTION</label>
                                                    <div class="col-sm-5">
                                                    <span as="button" @click="layout.gallery = 1" v-if="layout.gallery == 1" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span as="button" v-else @click="layout.gallery = 1" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                                    <span as="button" @click="layout.gallery = 0" v-if="layout.gallery == 0" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span as="button" v-else @click="layout.gallery = 0" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label  class="col-sm-5 col-form-label">Background Color</label>
                                                    <div class="col-sm-5">
                                                    <input v-model="layout.gallery_bg" type="text" placeholder="#F0F0F0" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label  class="col-sm-5 col-form-label">Content Color</label>
                                                    <div class="col-sm-5">
                                                    <input v-model="layout.gallery_content" type="text" placeholder="#F0F0F0" class="form-control">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <img v-if="layout.theme == 6" class="img-thumbnail rounded float-right" :alt="about_us" :src="'/image/layout/gallery.png'" width="600" height="750" >
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card ">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr class="bg-info">
                                            <th colspan="2">
                                                POPULAR SECTION
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group row">
                                                    <label  class="col-sm-5 col-form-label">SECTION</label>
                                                    <div class="col-sm-5">
                                                    <span as="button" @click="layout.popular = 1" v-if="layout.popular == 1" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span as="button" v-else @click="layout.popular = 1" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                                    <span as="button" @click="layout.popular = 0" v-if="layout.popular == 0" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span as="button" v-else @click="layout.popular = 0" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label  class="col-sm-5 col-form-label">Background Color</label>
                                                    <div class="col-sm-5">
                                                    <input v-model="layout.popular_bg" type="text" placeholder="#F0F0F0" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label  class="col-sm-5 col-form-label">Content Color</label>
                                                    <div class="col-sm-5">
                                                    <input v-model="layout.popular_content" type="text" placeholder="#F0F0F0" class="form-control">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <img v-if="layout.theme == 6" class="img-thumbnail rounded float-right" :alt="about_us" :src="'/image/layout/popular.png'" width="600" height="750" >
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card ">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr class="bg-info">
                                            <th colspan="2">
                                                CATEGORY SECTION
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group row">
                                                    <label  class="col-sm-5 col-form-label">SECTION</label>
                                                    <div class="col-sm-5">
                                                    <span as="button" @click="layout.category = 1" v-if="layout.category == 1" class="bg-success p-2" style="cursor: pointer" >ENABLE</span> <span as="button" v-else @click="layout.category = 1" class="bg-secondary p-2" style="cursor: pointer" >ENABLE</span>
                                                    <span as="button" @click="layout.category = 0" v-if="layout.category == 0" class="bg-danger p-2" style="cursor: pointer" >DISABLE</span> <span as="button" v-else @click="layout.category = 0" class="bg-secondary p-2" style="cursor: pointer" >DISABLE</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label  class="col-sm-5 col-form-label">Background Color</label>
                                                    <div class="col-sm-5">
                                                    <input v-model="layout.category_bg" type="text" placeholder="#F0F0F0" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label  class="col-sm-5 col-form-label">Content Color</label>
                                                    <div class="col-sm-5">
                                                    <input v-model="layout.category_content" type="text" placeholder="#F0F0F0" class="form-control">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <img v-if="layout.theme == 6" class="img-thumbnail rounded float-right" :alt="about_us" :src="'/image/layout/category.png'" width="600" height="750" >
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card ">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr class="bg-info">
                                            <th colspan="2">
                                                RATING SECTION
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group row">
                                                    <label  class="col-sm-5 col-form-label">Background Color</label>
                                                    <div class="col-sm-5">
                                                    <input v-model="layout.rating_bg" type="text" placeholder="#F0F0F0" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label  class="col-sm-5 col-form-label">Content Color</label>
                                                    <div class="col-sm-5">
                                                    <input v-model="layout.rating_content" type="text" placeholder="#F0F0F0" class="form-control">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <img v-if="layout.theme == 6" class="img-thumbnail rounded float-right" :alt="rating" :src="'/image/layout/rating.png'" width="600" height="750" >
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card ">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr class="bg-info">
                                            <th colspan="2">
                                                OPENING HOUR SECTION
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group row">
                                                    <label  class="col-sm-5 col-form-label">Background Color</label>
                                                    <div class="col-sm-5">
                                                    <input v-model="layout.opening_bg" type="text" placeholder="#F0F0F0" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label  class="col-sm-5 col-form-label">Content Color</label>
                                                    <div class="col-sm-5">
                                                    <input v-model="layout.opening_content" type="text" placeholder="#F0F0F0" class="form-control">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <img v-if="layout.theme == 6" class="img-thumbnail rounded float-right" :alt="opening" :src="'/image/layout/opening.png'" width="600" height="750" >
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div>

                        </div>
                    </div>
                </form>
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
                slider:''
            })
        }
        
    },
    watch: {
        
    },
    methods: {
        setSlide(e){
            this.form.slider = e.target.files[0];
        },
        insertSlider(form){
            console.log("?")
            let con = confirm("Add New Slider Image?");

            if (con){

                this.$inertia.post(route('admin.layout.layout.slider'),form)
            }
        },
        deleteSlider(id){

            let con = confirm("Delete Slider Image?");

            if (con){

                this.$inertia.post(route('admin.layout.layout.slider.delete',{id}),{
                    replace: true, 
                    preserveState: true
                })
            }

        },
        
        updateLayout(form){

            let con = confirm("Save Layout?");

            if (con){

                this.$inertia.post( route('admin.layout.layout.update') , form,{
                replace: true, 
                preserveState: true
                })
            }
        }
            
        
    }
    
}
</script>