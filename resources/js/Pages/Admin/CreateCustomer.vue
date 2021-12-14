<template>
  <admin-layout>
    <template v-slot:header>
            <h1 class="m-0">CUSTOMER</h1>
        </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <form >
                <div class="card-header">
                    <div class="text-right"  >
                        <button @click.prevent="createCustomer(this.customer,this.form)"  class="btn btn-success rounded-pill" style="margin-right:1%" type="button">Save</button>
                        <Link :href="route('admin.customer')" as="button" class="btn btn-secondary rounded-pill" type="button">Cancel</Link>
                    </div>
                </div>
                <div class="card-body">
                    <div >
                    <br />
                    <!-- Nav tabs -->
                    <ul class="nav  nav-tabs font-weight-bold">
                        <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#general"
                            >General</a
                        >
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#ip"
                            >IP Address</a
                        >
                        </li>
                        
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="general" class=" tab-pane active custom" >
                        <br />
                        <div class="card">
                          <div class="row">
                            <div class="col-2">
                              <div class="nav flex-column nav-tabs font-weight-bold" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="min-height:100%" >


                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">General</a>
                                <!-- addresses -->
                               
                                <!-- add new address -->
                                <a class="nav-link" id="v-pills-add-address-tab" data-toggle="pill" href="#v-pills-add-address" role="tab" aria-controls="v-pills-add-address" aria-selected="false">Add Address</a>
                              </div>
                            </div>
                            <div class="col-10">
                              <div class="tab-content" id="v-pills-tabContent" >

                              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                
                                <table class="table table-borderless table-hover">
                                  <tbody>
                                    <tr >
                                      <td style="width:15%">First Name:</td>
                                      <td>
                                        <input class="form-control" type="text" name="firstname" v-model="this.customer.firstname" aria-label="firstname">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Last Name:</td>
                                      <td>
                                        <input class="form-control" type="text" name="lastname" v-model="this.customer.lastname" aria-label="lastname">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Email:</td>
                                      <td>
                                        <input class="form-control" type="email" name="email" v-model="this.customer.email" aria-label="email">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Telephone:</td>
                                      <td>
                                        <input class="form-control" type="text" name="telephone" v-model="this.customer.telephone" aria-label="telephone">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Fax:</td>
                                      <td>
                                        <input class="form-control" type="text" name="fax" v-model="this.customer.fax" aria-label="fax">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Password:</td>
                                      <td>
                                        <input class="form-control" type="password" name="password" v-model="this.customer.password" aria-label="password">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Confirm:</td>
                                      <td>
                                        <input class="form-control" type="password" name="confirm" v-model="this.customer.confirmPassword"  aria-label="confirm">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Newsletter:</td>
                                      <td>
                                        <select v-model="this.customer.newsletter" class="form-control" name="newsletter" id="">
                                          <option value="0" >Disable</option>
                                          <option value="1" >Enable</option>
                                        </select>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Customer Group:</td>
                                      <td>
                                        <select v-model="this.customer.customer_group_id" class="form-control" name="customer_group_id" id="">
                                          <option value="1" >Default</option>
                                        </select>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Status:</td>
                                      <td>
                                        <select v-model="this.customer.status" class="form-control" name="status" id="">
                                          <option value="0" >Disable</option>
                                          <option value="1" >Enable</option>
                                        </select>
                                      </td>
                                    </tr>

                                  </tbody>
                                </table>
                              </div>

                              <div class="tab-pane fade" id="v-pills-add-address" role="tabpanel" aria-labelledby="v-pills-add-address-tab">
                                
                                  <table class="table table-borderless table-hover" >
                                    <tbody>
                                      <tr>
                                        <td style="width:15%">First Name:</td>
                                        <td>
                                          <input class="form-control" type="text" name="firstname" v-model="this.form.firstname" aria-label="firstname">
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="width:15%">Last Name:</td>
                                        <td>
                                          <input class="form-control" type="text" name="lastname" v-model="this.form.lastname" aria-label="lastname">
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="width:15%">Company:</td>
                                        <td>
                                          <input class="form-control" type="text" name="company" v-model="this.form.company" aria-label="company">
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="width:15%">Company ID:</td>
                                        <td>
                                          <input class="form-control" type="text" name="company_id" v-model="this.form.company_id" aria-label="company_id">
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="width:15%">Tax ID:</td>
                                        <td>
                                          <input class="form-control" type="text" name="tax_id" v-model="this.form.tax_id" aria-label="tax_id">
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="width:15%">Address 1:</td>
                                        <td>
                                          <input class="form-control" type="text" name="address_1" v-model="this.form.address_1" aria-label="address_1">
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="width:15%">Address 2:</td>
                                        <td>
                                          <input class="form-control" type="text" name="address_2" v-model="this.form.address_2" aria-label="address_2">
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="width:15%">City:</td>
                                        <td>
                                          <input class="form-control" type="text" name="city" v-model="this.form.city" aria-label="city">
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="width:15%">Postcode:</td>
                                        <td>
                                          <input class="form-control" type="text" name="postcode" v-model="this.form.postcode" aria-label="postcode">
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="width:15%">Country:</td>
                                        <td>
                                          <select v-model="this.form.country_id" class="form-control" name="country" id="country">
                                            <option v-for="country in country" :key="country.country_id" :value="country.country_id"> {{country.name}} </option>
                                          </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="width:15%">Region/State:</td>
                                        <td>
                                          <select v-model="this.form.zone_id" class="form-control" name="zone" id="">
                                            <template v-for="zone in zone" :key="zone.zone_id" >
                                              <option v-if="zone.country_id == this.form.country_id" :value="zone.zone_id"> {{zone.name}} </option>
                                            </template>
                                          </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="width:15%">Default Address:</td>
                                        <td>
                                          <input  type="radio" name="default" v-model="this.form.default" :value="1" aria-label="default">
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <div class="float-right m-2">
                                   
                                  </div>
                              </div>
                            </div>
                            </div>
                          </div>
                        </div>
                        
                        
                        </div>
                        
                       
                        <div id="ip" class=" tab-pane fade">
                        <br />
                          <table class="table table-bordered">
                            <thead >
                              <tr class="table-primary">
                                <th scope="col" >ip</th>
                                <th scope="col">Total Accounts</th>
                                <th scope="col">Date Added</th>
                                <th scope="col" style="width:10%">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td colspan="4" class="text-center" >No Results!</td>
                                </tr>
                            </tbody>
                          </table>
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
import AdminLayout from "@/Layouts/AdminLayout";
import { Head, Link } from "@inertiajs/inertia-vue3";

export default {
  components: {
    Head,
    Link,
    AdminLayout,
  },
  

  props:{
      zone: Object,
      country: Object,

  },

  data(){
      return{

          customer:{
            firstname:'',
            lastname:'',
            email:'',
            telephone:'',
            fax:'',
            password:'',
            confirmPassword:'',
            newsletter:'',
            customer_group_id:'',
            status:'',
          },
          form:{
            firstname:'',
            lastname:'',
            company:'',
            company_id:'',
            tax_id:'',
            address_1:'',
            address_2:'',
            city:'',
            postcode:'',
            country_id:'',
            zone_id:'',
            default:''

          },
          
      }
  },
  mounted(){

    },

  methods: {
      createCustomer(customer,address){
          this.$inertia.post(this.route('admin.customer.create',{customer,address},{replace: true, preserveState: true}))
      }
  }
};
</script>