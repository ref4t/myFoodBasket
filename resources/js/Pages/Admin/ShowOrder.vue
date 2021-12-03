<template>
  <admin-layout>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                  <h2> Order </h2>
              </div>
              <div class="card-body">
                <div class="container">
                  <br />
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#order"
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
                      <a class="nav-link" data-toggle="tab" href="#menu2"
                        >History</a
                      >
                    </li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div id="order" class="container tab-pane active">
                      <br />
                      
                      <table v-for="order in orders" :key="order.id" class="table table-borderless table-striped table-hover">
                        <tbody> 
                              <tr>
                                  <td style="width: 15%">Order ID:</td>
                                  <td>{{ order.id }}</td>
                              </tr>
                              <tr>
                                  <td>Invoice No:</td>
                                  <td>[Generate]</td>
                              </tr>
                               <tr>
                                  <td>Store Name:</td>
                                  <td>{{ order.store_name }}</td>
                              </tr>
                              <tr>
                                  <td>Store Url:</td>
                                  <td>{{ order.store_url }}</td>
                              </tr>
                               <tr>
                                  <td>Customer:</td>
                                  <td>{{ order.firstname }} {{ order.lastname }}</td>
                              </tr>
                              <tr>
                                  <td>Customer Group:</td>
                                  <td>{{ order.customer_group_id }}</td>
                              </tr>
                               <tr>
                                  <td>E-Mail:</td>
                                  <td>{{ order.email }}</td>
                              </tr>
                              <tr>
                                  <td>Telephone:</td>
                                  <td>{{ order.telephone }}</td>
                              </tr>
                               <tr>
                                  <td>Total:</td>
                                  <td>{{ order.total }}</td>
                              </tr>
                              <tr>
                                  <td>Order Status:</td>
                                  <td>{{ order.order_status_id }}</td>
                              </tr>
                              <tr>
                                  <td>IP Address:</td>
                                  <td>{{ order.ip }}</td>
                              </tr>
                               <tr>
                                  <td>User Agent:</td>
                                  <td>{{ order.user_agent }}</td>
                              </tr>
                              <tr>
                                  <td>Accept Language:</td>
                                  <td>{{ order.language_id }}</td>
                              </tr>
                               <tr>
                                  <td>Date Added:</td>
                                  <td>{{ order.date_added }}</td>
                              </tr>
                              <tr>
                                  <td>Date Modified:</td>
                                  <td>{{ order.date_modified }}</td>
                              </tr>
                               <tr>
                                  <td>Shipping Method:</td>
                                  <td>{{ order.flag_post_code }}</td>
                              </tr>
                              <tr>
                                  <td>Free item:</td>
                                  <td>{{ order.free_item }}</td>
                              </tr>
                              <tr>
                                  <td>Time delivery:</td>
                                  <td>{{ order.timedelivery }}</td>
                              </tr>
                        </tbody>
                          
                      </table>
                      

                    </div>
                    <div id="menu1" class="container tab-pane fade">
                      <br />
                      <table v-for="order in orders" :key="order.id" class="table table-striped table-borderless table-hover">
                        <tbody> 
                              <tr>
                                  <td style="width: 15%" >First Name:</td>
                                  <td>{{ order.firstname }}</td>
                              </tr>
                              <tr>
                                  <td>Last Name:</td>
                                  <td>{{ order.lastname }}</td>
                              </tr>
                               <tr>
                                  <td>Address 1:</td>
                                  <td>{{ order.payment_address_1 }}</td>
                              </tr>
                              <tr>
                                  <td>City:</td>
                                  <td>{{ order.payment_city }}</td>
                              </tr>
                               <tr>
                                  <td>Postcode:</td>
                                  <td>{{ order.payment_postcode }}</td>
                              </tr>
                              <tr>
                                  <td>Region / State:</td>
                                  <td></td>
                              </tr>
                               <tr>
                                  <td>Country:</td>
                                  <td>{{ order.country }}</td>
                              </tr>
                              <tr>
                                  <td>Payment Method:</td>
                                  <td>{{ order.flag_post_code }}</td>
                              </tr>
                               
                             
                        </tbody>
                          
                      </table>
                    </div>
                    <div id="menu2" class="container tab-pane fade">
                      <br />
                      <h3>Menu 2</h3>
                      <p>
                        Sed ut perspiciatis unde omnis iste natus error sit
                        voluptatem accusantium doloremque laudantium, totam rem
                        aperiam.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer clearfix"></div>
            </div>
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
};
</script>