<template>
  <admin-layout>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <form @submit.prevent="submit" method="post">
                <div class="card-header">
                    <h2> Order </h2>
                    <div class="text-right"  >
                        <button class="btn btn-secondary rounded-pill" style="margin-right:1%" type="submit">Save</button>
                        <Link :href="route('admin.dashboard.orders')" as="button" class="btn btn-secondary rounded-pill" type="button">Cancel</Link>
                    </div>
                </div>
                <div class="card-body">
                    <div class="container">
                    <br />
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#menu"
                            >Customer Details</a
                        >
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu1"
                            >Payment Details</a
                        >
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu2"
                            >Shipping Details</a
                        >
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu3"
                            >Products</a
                        >
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu4"
                            >Vouchers</a
                        >
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu5"
                            >Totals</a
                        >
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="menu" class="container tab-pane active">
                        <br />
                        
                        
                        <table class="table table-borderless table-striped table-hover">
                            
                                <tbody> 
                                <tr>
                                    <td style="width: 15%">Store:</td>
                                    <td>
                                        <select class="form-control" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>First Name:</td>
                                    <td>
                                        <input class="form-control"  type="text" name="firstname" id="firstname" v-model="orders.firstname" aria-label="default input example">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Last Name:</td>
                                    <td>
                                        <input class="form-control"  type="text" name="lastname" id="lastname" v-model="orders.lastname" aria-label="default input example">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Customer Group</td>
                                    <td><input class="form-control"  type="text" name="group" id="group" v-model="orders.customer_group_id" aria-label="default input example" readonly></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input class="form-control" type="text" name="email" id="email" v-model="orders.email" aria-label="default input example"></td>
                                </tr>
                                <tr>
                                    <td>Telephone</td>
                                    <td><input class="form-control" type="text" name="telephone" id="telephone" v-model="orders.telephone" aria-label="default input example"></td>
                                </tr>
                                <tr>
                                    <td>Fax:</td>
                                    <td><input class="form-control" type="text" name="fax" id="fax" v-model="orders.fax" aria-label="default input example"></td>
                                </tr>
                            </tbody>
                        
                            
                        </table>
                        
                        
                        </div>
                        <div id="menu1" class="container tab-pane fade">
                        <br />

                        <table class="table table-borderless table-striped table-hover">
                            
                                <tbody> 
                                <tr>
                                    <td style="width: 15%">Choose Address:</td>
                                    <td>
                                        <select class="form-control" aria-label="Default select example">
                                            <option selected> -- None -- </option>
                                            <option value="1">{{ orders.payment_address_1 }}</option>
                                            <option value="2">{{ orders.payment_address_2 }}</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>First Name:</td>
                                    <td>
                                        <input class="form-control"  type="text" name="payment_firstname" id="payment_firstname" v-model="orders.payment_firstname" aria-label="default input example">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Last Name:</td>
                                    <td>
                                        <input class="form-control"  type="text" name="payment_lastname" id="payment_lastname" v-model="orders.payment_lastname" aria-label="default input example">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Company Name:</td>
                                    <td><input class="form-control"  type="text" name="payment_company" id="payment_company" v-model="orders.payment_company" aria-label="default input example" readonly></td>
                                </tr>
                                <tr>
                                    <td>Company ID:</td>
                                    <td><input class="form-control" type="text" name="payment_company_id" id="conpany_id" v-model="orders.payment_company_id" aria-label="default input example"></td>
                                </tr>
                                <tr>
                                    <td>Address 1:</td>
                                    <td><input class="form-control" type="text" name="telephone" id="telephone" v-model="orders.payment_address_1" aria-label="default input example"></td>
                                </tr>
                                <tr>
                                    <td>Address 2:</td>
                                    <td><input class="form-control" type="text" name="payment_address_2" id="payment_address_2" v-model="orders.payment_address_2" aria-label="default input example"></td>
                                </tr>
                                <tr>
                                    <td>City:</td>
                                    <td><input class="form-control" type="text" name="payment_address_1" id="payment_address_1" v-model="orders.payment_address_1" aria-label="default input example"></td>
                                </tr>
                                <tr>
                                    <td>Postcode:</td>
                                    <td><input class="form-control" type="text" name="payment_postcode" id="payment_postcode" v-model="orders.payment_postcode" aria-label="default input example"></td>
                                </tr>
                                <tr>
                                    <td>Country:</td>
                                    <td>
                                        <select class="form-control" aria-label="Default select example">
                                            <option selected> -- None -- </option>
                                            <option value="1">{{ orders.payment_address_1 }}</option>
                                            <option value="2">{{ orders.payment_address_2 }}</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Region/State:</td>
                                    <td>
                                        <select class="form-control" aria-label="Default select example">
                                            <option selected> -- None -- </option>
                                            <option value="1">{{ orders.payment_address_1 }}</option>
                                            <option value="2">{{ orders.payment_address_2 }}</option>
                                        </select>
                                    </td>
                                </tr>
                                
                            </tbody>
                        
                            
                        </table>


                        </div>
                        <div id="menu2" class="container tab-pane fade">
                        <br />
                        <table class="table table-borderless table-striped table-hover">
                            
                            <tbody> 
                                <tr>
                                    <td style="width: 15%">Choose Address:</td>
                                    <td>
                                        <select class="form-control" aria-label="Default select example">
                                            <option selected> -- None -- </option>
                                            <option value="1">{{ orders.shipping_address_1 }}</option>
                                            <option value="2">{{ orders.shipping_address_2 }}</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>First Name:</td>
                                    <td>
                                        <input class="form-control"  type="text" name="firstname" id="shipping_firstname" v-model="orders.shipping_firstname" aria-label="default input example">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Last Name:</td>
                                    <td>
                                        <input class="form-control"  type="text" name="shipping_lastname" id="shipping_lastname" v-model="orders.shipping_lastname" aria-label="default input example">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Company Name:</td>
                                    <td><input class="form-control"  type="text" name="shipping_company" id="shipping_company" v-model="orders.shipping_company" aria-label="default input example" readonly></td>
                                </tr>
                                <tr>
                                    <td>Company ID:</td>
                                    <td><input class="form-control" type="text" name="shipping_company_id" id="shipping_company_id" v-model="orders.shipping_company_id" aria-label="default input example"></td>
                                </tr>
                                <tr>
                                    <td>Address 1:</td>
                                    <td><input class="form-control" type="text" name="shipping_address_1" id="shipping_address_1" v-model="orders.shipping_address_1" aria-label="default input example"></td>
                                </tr>
                                <tr>
                                    <td>Address 2:</td>
                                    <td><input class="form-control" type="text" name="shipping_address_2" id="shipping_address_2" v-model="orders.shipping_address_2" aria-label="default input example"></td>
                                </tr>
                                <tr>
                                    <td>City:</td>
                                    <td><input class="form-control" type="text" name="shipping_address_1" id="shipping_address_1" v-model="orders.shipping_address_1" aria-label="default input example"></td>
                                </tr>
                                <tr>
                                    <td>Postcode:</td>
                                    <td><input class="form-control" type="text" name="shipping_postcode" id="shipping_postcode" v-model="orders.shipping_postcode" aria-label="default input example"></td>
                                </tr>
                                <tr>
                                    <td>Country:</td>
                                    <td>
                                        <select class="form-control" aria-label="Default select example">
                                            <option selected> -- None -- </option>
                                            <option value="1">{{ orders.shipping_address_1 }}</option>
                                            <option value="2">{{ orders.shipping_address_2 }}</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Region/State:</td>
                                    <td>
                                        <select class="form-control" aria-label="Default select example">
                                            <option selected> -- None -- </option>
                                            <option value="1">{{ orders.shipping_address_1 }}</option>
                                            <option value="2">{{ orders.shipping_address_2 }}</option>
                                        </select>
                                    </td>
                                </tr>
                                
                            </tbody>
                        
                            
                        </table>
                        </div>
                        <div id="menu3" class="container tab-pane fade">
                        <br />
                        <h3>Menu 2</h3>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem accusantium doloremque laudantium, totam rem
                            aperiam.
                        </p>
                        </div>
                        <div id="menu4" class="container tab-pane fade">
                        <br />
                        <h3>Menu 2</h3>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem accusantium doloremque laudantium, totam rem
                            aperiam.
                        </p>
                        </div>
                        <div id="menu5" class="container tab-pane fade">
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
              </form>
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

  props: ['orders'],

  data(){
      return{
          form:{
              firstname: null,
          }
      }
  },
  methods: {
      
  }
};
</script>