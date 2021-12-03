<template>
    <admin-layout>        
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                Total Orders
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-capitalize">Order ID</th>
                                            <th class="text-capitalize">Order Type</th>
                                            <th class="text-capitalize">Shop</th>
                                            <th class="text-capitalize">Customer</th>
                                            <th class="text-capitalize">Status</th>
                                            <th class="text-capitalize">Total</th>
                                            <th class="text-capitalize">Date Added</th>
                                            <th class="text-capitalize">Payment Type</th>
                                            <th class="text-capitalize">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr v-for="order in orders.data" :key="order.order_id" >
                                            <td> {{ order.order_id }} </td>
                                            <td> {{ order.flag_post_code }} </td>
                                            <td> {{ order.store_name }} </td>
                                            <td> {{ order.firstname }} </td>
                                            <td> {{ order.order_status_id }} </td>
                                            <td> {{ order.total }} </td>
                                            <td> {{ order.date_added }} </td>
                                            <td> {{ order.payment_method }} </td>
                                            <td> EDIT DELETE </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer clearfix">
                                <Pagination :links="orders.links"></Pagination>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </admin-layout>
</template>

<script>

import Pagination from '@/Components/Pagination'
import AdminLayout from '@/Layouts/AdminLayout'

export default {
    

    components: {
        AdminLayout,
        Pagination
    },

    props:{
        orders: Object,
    }
}
</script>