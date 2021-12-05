<template>
  <admin-layout>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                Total Orders

                <div class="float-right" >
                    <div class="form-inline">
                    <div class="input-group rounded">
                        <input
                            type="search"
                            v-model="params.search"
                            class="form-control rounded"
                            placeholder="First Name"
                            aria-label="Search"
                            aria-describedby="search-addon"
                        />
                        <span class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                </div>
                </div>
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
                    <tr v-for="order in orders.data" :key="order.id">
                      <td>{{ order.order_id }}</td>
                      <td>{{ order.flag_post_code }}</td>
                      <td>{{ order.store_name }}</td>
                      <td>{{ order.firstname  }} {{ order.lastname }}</td>
                      <td>{{ order.order_status_id }}</td>
                      <td>{{ order.total }}</td>
                      <td>{{ order.date_added }}</td>
                      <td>{{ order.payment_method }}</td>
                      <td class="text-right">
                          <Link :href="route('admin.dashboard.orders.show', { id: order.order_id })" as="button" class="btn btn-success text-uppercase" style="letter-spacing: 0.1em;" >View</Link>
                          <Link :href="route('admin.dashboard.orders.edit', { id: order.order_id })" as="button" class="btn btn-success text-uppercase ml-1" style="letter-spacing: 0.1em;" >Edit</Link>
                      </td>
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

    <div class="modal fade" id="model-lg">

    </div>

  </admin-layout>
</template>

<script>
import Pagination from "@/Components/Pagination";
import AdminLayout from "@/Layouts/AdminLayout";
import { Head,Link } from '@inertiajs/inertia-vue3';

export default {
  components: {
    Head,
    Link,
    AdminLayout,
    Pagination,
  },

  props: {
    orders: Object,
  },
  data() {
      return {
        params:{
            search:null
        }   
      };
  },
  watch: {
      params:{
          handler(){
              this.$inertia.get(this.route('admin.dashboard.orders'),this.params, {replace: true, preserveState: true})
              console.log('here')
          },
          deep: true,
      }
  }
};
</script>