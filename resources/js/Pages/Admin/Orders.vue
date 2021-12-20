<template>
  <admin-layout>
    <template v-slot:header>
            <h1 class="m-0 text-capitalize">Total Orders</h1>
        </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered table-hover text-nowrap">
                  <thead class="thead-primary">
                    <tr>
                        <th class="text-capitalize">
                            <Link @click="sort('order_id')" >
                            Order ID
                            <i v-if="params.field == 'order_id' && params.direction == 'asc'" class="fas fa-chevron-down"></i> 
                            <i v-if="params.field == 'order_id' && params.direction == 'desc'" class="fas fa-chevron-up"></i>
                            </Link></th>
                        <th class="text-capitalize">
                            <Link >
                            Order Type
                            </Link></th>
                        <th class="text-capitalize">
                            <Link >
                            Shop
                            </Link>
                        </th>
                        <th class="text-capitalize">
                            <Link @click="sort('firstname')" > 
                            Customer 
                            <i v-if="params.field == 'firstname' && params.direction == 'asc'" class="fas fa-chevron-down"></i> 
                            <i v-if="params.field == 'firstname' && params.direction == 'desc'" class="fas fa-chevron-up"></i>
                            </Link> 
                        </th>
                        <th class="text-capitalize"><Link @click="sort('order_status_id')" >
                            Status
                            <i v-if="params.field == 'order_status_id' && params.direction == 'asc'" class="fas fa-chevron-down"></i> 
                            <i v-if="params.field == 'order_status_id' && params.direction == 'desc'" class="fas fa-chevron-up"></i>
                            </Link>
                        </th>
                        <th class="text-capitalize"><Link @click="sort('total')" >
                            Total
                            <i v-if="params.field == 'total' && params.direction == 'asc'" class="fas fa-chevron-down"></i> 
                            <i v-if="params.field == 'total' && params.direction == 'desc'" class="fas fa-chevron-up"></i>
                            </Link>
                        </th>
                        <th class="text-capitalize"><Link @click="sort('order_id')" >
                            Date Added
                            <i v-if="params.field == 'order_id' && params.direction == 'asc'" class="fas fa-chevron-down"></i> 
                            <i v-if="params.field == 'order_id' && params.direction == 'desc'" class="fas fa-chevron-up"></i>
                            </Link>
                        </th>
                        <th class="text-capitalize"><Link @click="sort('payment_method')" >
                            Payment Type
                            <i v-if="params.field == 'payment_method' && params.direction == 'asc'" class="fas fa-chevron-down"></i> 
                            <i v-if="params.field == 'payment_method' && params.direction == 'desc'" class="fas fa-chevron-up"></i>
                            </Link>
                        </th>
                        <th class="text-capitalize">Action</th>
                    </tr>
                </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                          <input
                              type="search"
                              v-model="params.search"
                              class="form-control rounded"
                              placeholder="First Name"
                              aria-label="Search"
                              aria-describedby="search-addon"
                          />
                      </td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
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
                          <Link :href="route('admin.dashboard.orders.show', { id: order.order_id })" as="button" class="btn btn-info rounded-pill text-uppercase" style="letter-spacing: 0.1em;" >View</Link>
                          <Link :href="route('admin.dashboard.orders.edit', { id: order.order_id })" as="button" class="btn btn-warning rounded-pill text-uppercase ml-1" style="letter-spacing: 0.1em;" >Edit</Link>
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
    filters:Object
  },
  data() {
      return {
        params:{
            search:this.filters.search,
            field: this.filters.field,
            direction: this.filters.direction
        }   
      };
    },

    methods:{
        sort(field){
            this.params.field = field;
            this.params.direction = this.params.direction === 'asc' ? 'desc' : 'asc';
        }
    },
  watch: {
      params:{
          handler(){
              let params = this.params;

              Object.keys(params).forEach(key=>{
                if(params[key] == ''){
                  delete params[key];
                }
              });
              this.$inertia.get(this.route('admin.dashboard.orders.index'),params, {replace: true, preserveState: true})
          },
          deep: true,
      }
  }
};
</script>