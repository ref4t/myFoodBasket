<template>
    <admin-layout>
        <template v-slot:header>
            <h1 class="m-0">LAYOUT</h1>
        </template>
        
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        
                        <div class="card ">
                            
                            <table class="table table-borderless">
                                <tbody>
                                    <tr class="bg-info">
                                        <th colspan="2">
                                            ABOUT US SECTION
                                        </th>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            
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
                                            BOOKING SECTION
                                        </th>
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
                                            casd SECTION
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                            
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

export default {
    components: {
        AdminLayout,
        Pagination,
        Head,
        Link

    },
    props:{

    },
    created(){
        
    },
    data(){
        
    },
    watch: {
        
    },
    methods: {
        

            
        
    }
    
}
</script>