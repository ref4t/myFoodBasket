<template>
  <admin-layout>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2>Order</h2>
                <div class="text-right"  >
                    <Link as="button" class="btn btn-secondary rounded-pill" style="margin-right:1%" type="button">PRINT INVOICE <i class="fas fa-print"></i></Link>
                    <Link @click="$router.go(-1)" as="button" class="btn btn-secondary rounded-pill" type="button">CANCEL <i class="far fa-times-circle"></i></Link>
                </div>
              </div>
              <div class="card-body">
                
                  <br />
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#menu"
                        >Order Details</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#menu1"
                        >Payment Details</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#menu2"
                        >Products</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#menu3"
                        >History</a
                      >
                    </li>
                  </ul>

                  <!-- Tab panes -->
                  <div
                    
                    class="tab-content"
                  >
                    <div id="menu" class=" tab-pane active">
                      <br />

                      <div class="card">
                        <table class="table table-borderless table-hover">
                          <tbody>
                            <tr>
                              <td style="width: 15%">Order ID:</td>
                              <td>{{ orders.order_id }}</td>
                            </tr>
                            <tr>
                              <td>Invoice No:</td>
                              <td>[Generate]</td>
                            </tr>
                            <tr>
                              <td>Store Name:</td>
                              <td>{{ orders.store_name }}</td>
                            </tr>
                            <tr>
                              <td>Store Url:</td>
                              <td>{{ orders.store_url }}</td>
                            </tr>
                            <tr>
                              <td>Customer:</td>
                              <td>
                                {{ orders.firstname }} {{ orders.lastname }}
                              </td>
                            </tr>
                            <tr>
                              <td>Customer Group:</td>
                              <td>{{ orders.customer_group_id }}</td>
                            </tr>
                            <tr>
                              <td>E-Mail:</td>
                              <td>{{ orders.email }}</td>
                            </tr>
                            <tr>
                              <td>Telephone:</td>
                              <td>{{ orders.telephone }}</td>
                            </tr>
                            <tr>
                              <td>Total:</td>
                              <td>{{ orders.total }}</td>
                            </tr>
                            <tr>
                              <td>Order Status:</td>
                              <td>{{ orders.order_status_id }}</td>
                            </tr>
                            <tr>
                              <td>IP Address:</td>
                              <td>{{ orders.ip }}</td>
                            </tr>
                            <tr>
                              <td>User Agent:</td>
                              <td>{{ orders.user_agent }}</td>
                            </tr>
                            <tr>
                              <td>Accept Language:</td>
                              <td>{{ orders.language_id }}</td>
                            </tr>
                            <tr>
                              <td>Date Added:</td>
                              <td>{{ orders.date_added }}</td>
                            </tr>
                            <tr>
                              <td>Date Modified:</td>
                              <td>{{ orders.date_modified }}</td>
                            </tr>
                            <tr>
                              <td>Shipping Method:</td>
                              <td>{{ orders.flag_post_code }}</td>
                            </tr>
                            <tr>
                              <td>Free item:</td>
                              <td>{{ orders.free_item }}</td>
                            </tr>
                            <tr>
                              <td>Time delivery:</td>
                              <td>{{ orders.timedelivery }}</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div id="menu1" class=" tab-pane fade">
                      <br />
                      <div class="card">
                        <table
                          
                          class="table table-borderless table-hover"
                        >
                          <tbody>
                            <tr>
                              <td style="width: 15%">First Name:</td>
                              <td>{{ orders.firstname }}</td>
                            </tr>
                            <tr>
                              <td>Last Name:</td>
                              <td>{{ orders.lastname }}</td>
                            </tr>
                            <tr>
                              <td>Address 1:</td>
                              <td>{{ orders.payment_address_1 }}</td>
                            </tr>
                            <tr>
                              <td>City:</td>
                              <td>{{ orders.payment_city }}</td>
                            </tr>
                            <tr>
                              <td>Postcode:</td>
                              <td>{{ orders.payment_postcode }}</td>
                            </tr>
                            <tr>
                              <td>Region / State:</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>Country:</td>
                              <td>{{ orders.country }}</td>
                            </tr>
                            <tr>
                              <td>Payment Method:</td>
                              <td>{{ orders.flag_post_code }}</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <div id="menu2" class=" tab-pane fade">
                      <br />

                      <div class="card">
                        <table class="table table-borderless table-hover">
                          <thead>
                            
                            <th>Product</th>
                            <th>Model</th>
                            <th>Quantity</th>
                            <th style="text-align: right">Unit Price</th>
                            <th style="text-align: right">Total Price</th>
                          </thead>
                          <tbody>
                            <tr v-for="item in cart" :key="item.order_id">
                              
                              <td>{{ item.name }}</td>
                              <td>{{ item.model }}</td>
                              <td>{{ item.quantity }}</td>
                              <td style="text-align: right">
                                {{ orders.symbol_left }}{{ format(item.price) }}
                              </td>
                              <td style="text-align: right">
                                {{ orders.symbol_left }}{{ format(item.total) }}
                              </td>
                            </tr>
                            <tr
                              v-for="total in total"
                              :key="total.order_total_id"
                            >
                              <td>{{ total.title }}</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td style="text-align: right">
                                {{ orders.symbol_left }}{{ format(total.value) }}
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <div id="menu3" class=" tab-pane fade">
                      <br />

                      <div class="card">
                        <table class="table table-bordered ">
                          <thead>
                            <th>Date Added</th>
                            <th>Comment</th>
                            <th>Status</th>
                            <th> Customer Notified</th>
                          </thead>
                          <tbody>
                            <tr v-for="his in history" :key="his.order_history_id">
                              <td>{{ his.date_added }}</td>
                              <td>{{ his.comment }}</td>
                              <td>{{ his.name }}</td>
                              <td v-if="his.notify == 1" > Yes  </td>
                            </tr>
                          </tbody>
                        </table>

                        <br/>
                        <br/>

                        <form @submit.prevent="history_update" method="post">
                          
                          <table class="table table-borderless" >
                            <tbody>
                              <tr>
                                <td style="width:15%" > Order Status:</td>
                                <td>
                                  <select v-model="form.order_status_id" name="status" class="form-select" style="width:30%; text-aligh:left" >
                                    <option v-for="stat in status" :key="stat.status_id" @click="$status = stat.status_id" :value="stat.order_status_id"  > {{ stat.name }} </option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <td >Notify </td>
                                <td><input type="checkbox" v-model="form.notify" name="notify" :value="1" id="flexCheckIndeterminate"></td>
                              </tr>
                              <tr>
                                <td>Comment:</td>
                                <td>
                                  <div class="form-floating">
                                    <textarea class="form-control" v-model="form.comment" name="comment" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          
                          <div class="text-right ">
                            <button class="btn btn-secondary rounded-pill" style="margin-right:1%" type="submit">ADD HISTORY</button>
                          </div>
                          <br/>
                          <br/>
                        </form>

                      </div>
                    </div>


                  </div>
                
              </div>
            </div>
            <div class="card-footer clearfix"></div>
          </div>
        </div>
      </div>
    </section>
  </admin-layout>
</template>

<script>
import Pagination from "@/Components/Pagination";
import AdminLayout from "@/Layouts/AdminLayout";
import { Head, Link } from "@inertiajs/inertia-vue3";
import { Inertia } from '@inertiajs/inertia';

export default {
  components: {
    Head,
    Link,
    AdminLayout,
    Pagination,
  },

  props: {
    orders: Object,
    cart: Object,
    total: Object,
    history: Object,
    status: Object,
    id: String,
  },
  data() {
    return{
      form:{
        order_status_id: "",
        notify: "",
        comment:"",
        order_id:""

      }
    }
  },
  

  methods: {
    format(value) {
      let val = (value / 1).toFixed(2);
      return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    },
    history_update(){

        if(this.form.notify){
          this.form.notify = 1
        }else{
          this.form.notify = 0
        }

        this.form.order_id = this.id
        this.$inertia.post( route('admin.orders.show.comment') , this.form,{replace: true, preserveState: true})
    }
  },
};
</script>