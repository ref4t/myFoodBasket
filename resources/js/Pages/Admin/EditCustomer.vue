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
                        <button @click.prevent="update(customer,this.password.password,this.defaultAddress)"  class="btn btn-success rounded-pill" style="margin-right:1%" type="button">Save</button>
                        <Link :href="route('admin.customer.index')" as="button" class="btn btn-secondary rounded-pill" type="button">Cancel</Link>
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
                        <a class="nav-link" data-toggle="tab" href="#history"
                            >History</a
                        >
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#transaction"
                            >Transactions</a
                        >
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#reward"
                            >Reward Points</a
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
                                <a v-for=" (address,index) in customer.get_address" :key="index" class="nav-link"  :id="'v-pills-address-tab'+ index" data-toggle="pill" :href="'#v-pills-address'+ index" role="tab" :aria-controls="'v-pills-address-'+ index" aria-selected="false">Address {{index + 1}}</a>
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
                                        <input class="form-control" type="text" name="firstname" v-model="customer.firstname" aria-label="firstname">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Last Name:</td>
                                      <td>
                                        <input class="form-control" type="text" name="lastname" v-model="customer.lastname" aria-label="lastname">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Email:</td>
                                      <td>
                                        <input class="form-control" type="email" name="email" v-model="customer.email" aria-label="email">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Telephone:</td>
                                      <td>
                                        <input class="form-control" type="text" name="telephone" v-model="customer.telephone" aria-label="telephone">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Fax:</td>
                                      <td>
                                        <input class="form-control" type="text" name="fax" v-model="customer.fax" aria-label="fax">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Password:</td>
                                      <td>
                                        <input class="form-control" type="password" name="password" v-model="password.password" aria-label="password">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Confirm:</td>
                                      <td>
                                        <input class="form-control" type="password" name="confirm" v-model="password.confirmPassword"  aria-label="confirm">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Newsletter:</td>
                                      <td>
                                        <select v-model="customer.newsletter" class="form-control" name="newsletter" id="">
                                          <option value="0" >Disable</option>
                                          <option value="1" >Enable</option>
                                        </select>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Customer Group:</td>
                                      <td>
                                        <select v-model="customer.customer_group_id" class="form-control" name="customer_group_id" id="">
                                          <option value="1" >Default</option>
                                        </select>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Status:</td>
                                      <td>
                                        <select v-model="customer.status" class="form-control" name="status" id="">
                                          <option value="0" >Disable</option>
                                          <option value="1" >Enable</option>
                                        </select>
                                      </td>
                                    </tr>

                                  </tbody>
                                </table>
                              </div>

                              <div v-for=" (address,index) in customer.get_address" :key="index" class="tab-pane fade" :id="'v-pills-address'+ index" role="tabpanel" :aria-labelledby="'v-pills-address-tab'+ index">
                               <div class="float-right">
                                  <button @click.prevent="deleteAddress(address.address_id)"  class="btn btn-danger rounded m-2" style="margin-right:1%" type="button">DELETE</button>
                                  
                                </div>
                                <table class="table table-borderless table-hover" >
                                  <tbody>
                                    <tr>
                                      <td style="width:15%">First Name:</td>
                                      <td>
                                        <input class="form-control" type="text" name="firstname" v-model="address.firstname" aria-label="firstname">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Last Name:</td>
                                      <td>
                                        <input class="form-control" type="text" name="lastname" v-model="address.lastname" aria-label="lastname">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Company:</td>
                                      <td>
                                        <input class="form-control" type="text" name="company" v-model="address.company" aria-label="company">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Company ID:</td>
                                      <td>
                                        <input class="form-control" type="text" name="company_id" v-model="address.company_id" aria-label="company_id">
                                      </td>
                                    </tr>
                                    
                                    <tr>
                                      <td style="width:15%">Address 1:</td>
                                      <td>
                                        <input class="form-control" type="text" name="address_1" v-model="address.address_1" aria-label="address_1">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Address 2:</td>
                                      <td>
                                        <input class="form-control" type="text" name="address_2" v-model="address.address_2" aria-label="address_2">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">City:</td>
                                      <td>
                                        <input class="form-control" type="text" name="city" v-model="address.city" aria-label="city">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Postcode:</td>
                                      <td>
                                        <input class="form-control" type="text" name="postcode" v-model="address.postcode" aria-label="postcode">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Country:</td>
                                      <td>
                                        <select v-model="address.country_id" class="form-control" name="country" id="country">
                                          <option v-for="country in country" :key="country.country_id" :value="country.country_id"> {{country.name}} </option>
                                        </select>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Region/State:</td>
                                      <td>
                                        <select v-model="address.zone_id" class="form-control" name="" id="">
                                          <template v-for="zone in zone" :key="zone.zone_id" >
                                            <option v-if="zone.country_id == address.country_id" :value="zone.zone_id"> {{zone.name}} </option>
                                          </template>
                                        </select>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="width:15%">Default Address:</td>
                                      <td>
                                        <input  type="radio" name="default" v-model="defaultAddress" :value="address.address_id" aria-label="default">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                              <div class="tab-pane fade" id="v-pills-add-address" role="tabpanel" aria-labelledby="v-pills-add-address-tab">
                                <form @submit.prevent="addAddress(this.form,customer.customer_id)" method="post">
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
                                    <button class="btn btn-success rounded font-weight-bold" type="submit" >Add Address</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                            </div>
                          </div>
                        </div>
                        
                        
                        </div>
                        <div id="history" class=" tab-pane fade">
                        <br />

                        
                            <table class="table table-bordered">
                              <thead >
                                <tr class="table-primary">
                                  <th scope="col" style="width:25%" >Date Added</th>
                                  <th scope="col">Comment</th>
                                  <th scope="col" style="width:10%" >Action</th>
                                </tr>
                              </thead>
                              
                              <tbody>
                                
                                  <tr v-for="history in history" :key="history.customer_history_id" >
                                    <td>{{history.date_added}}</td>
                                    <td>{{history.comment}}</td>
                                    <td>
                                      <button @click="deleteHistory(history.customer_history_id)" class="btn btn-danger rounded-pill" type="button">DELETE</button>
                                    </td>
                                  </tr>
                                
                                  <tr v-if="!history.length" >
                                    <td colspan="3" class="text-center" >No Results!</td>
                                  </tr>
                              </tbody>
                            </table>

                            <form @submit.prevent="addHistory(this.historyData, customer.customer_id)" method="post">
                              <table class="table table-borderless" >
                                <tbody>
                                  <tr>
                                    <td style="width:25%" >Comment:</td>
                                    <td>
                                      <textarea v-model="this.historyData.comment" type="textarea" class="form-control" placeholder="Write a comment" />
                                    </td>
                                  </tr>
                                  <tr>
                                    <td colspan="2" class="text-right">
                                      <button class="btn btn-success rounded-pill" type="submit" >ADD HISTORY</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </form>
                        


                        </div>
                        <div id="transaction" class=" tab-pane fade">
                        <br />
                          <table class="table table-bordered">
                            <thead >
                              <tr class="table-primary">
                                <th scope="col" style="width:25%" >Date Added</th>
                                <th scope="col">Description</th>
                                <th scope="col">Amount</th>
                                <th scope="col" style="width:10%">Action</th>
                              </tr>
                            </thead>
                            
                            <tbody>
                              
                                <tr v-for="transaction in transactions" :key="transaction.customer_transaction_id" >
                                  <td>{{transaction.date_added}}</td>
                                  <td>{{transaction.description}}</td>
                                  <td>{{format(transaction.amount)}}</td>
                                   <td>
                                     <button @click="deleteTransaction(transaction.customer_transaction_id)" class="btn btn-danger rounded-pill" type="button">DELETE</button>
                                   </td>
                                </tr>
                              
                                <tr v-if="!transactions.length" >
                                  <td colspan="4" class="text-center" >No Results!</td>
                                </tr>
                            </tbody>
                          </table>

                          <form @submit.prevent="addTransaction(this.transactionData, customer.customer_id)" method="post">
                            <table class="table table-borderless" >
                              <tbody>
                                <tr>
                                  <td style="width:25%" >Description:</td>
                                  <td>
                                    <input v-model="this.transactionData.description" type="text" class="form-control" >
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:25%" >Amount:</td>
                                  <td>
                                    <input v-model="this.transactionData.amount" type="text" class="form-control" >
                                  </td>
                                </tr>
                                <tr>
                                  <td colspan="2" class="text-right">
                                    <button class="btn btn-success rounded-pill" type="submit" >ADD TRANSACTION</button>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </form>

                        </div>
                        <div id="reward" class=" tab-pane fade">
                        <br />
                          <table class="table table-bordered">
                            <thead >
                              <tr class="table-primary">
                                <th scope="col" style="width:25%" >Date Added</th>
                                <th scope="col">Description</th>
                                <th scope="col">Points</th>
                                <th scope="col" style="width:10%">Action</th>
                              </tr>
                            </thead>
                            
                            <tbody>
                                <tr v-for="reward in rewards" :key="reward.customer_reward_id" >
                                  <td>{{reward.date_added}}</td>
                                  <td>{{reward.description}}</td>
                                  <td>{{format(reward.points)}}</td>
                                   <td>
                                     <button @click="deleteReward(reward.customer_reward_id)" class="btn btn-danger rounded-pill" type="button">DELETE</button>
                                   </td>
                                </tr>
                              
                                <tr v-if="!rewards.length" >
                                  <td colspan="4" class="text-center" >No Results!</td>
                                </tr>
                            </tbody>
                          </table>

                          <form @submit.prevent="addReward(this.rewardData, customer.customer_id)" method="post">
                            <table class="table table-borderless" >
                              <tbody>
                                <tr>
                                  <td style="width:25%" >Description:</td>
                                  <td>
                                    <input v-model="this.rewardData.description" type="text" class="form-control" >
                                  </td>
                                </tr>
                                <tr>
                                  <td style="width:25%" >
                                    Points: <br/>
                                    Use minus to remove points
                                  </td>
                                  <td>
                                    <input v-model="this.rewardData.points" type="text" class="form-control" >
                                  </td>
                                </tr>
                                <tr>
                                  <td colspan="2" class="text-right">
                                    <button class="btn btn-success rounded-pill" type="submit" >ADD REWARD</button>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </form>

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
                                <tr v-for="(ip,index) in ips" :key="index" >
                                  <td > <a :href="'http://www.geoiptool.com/en/?IP='+ ip.ip" target="_blank" >{{ip.ip}}</a> </td>
                                  <td>{{accounts[index]}}</td>
                                  <td>{{ip.date_added}}</td>
                                   <td>
                                     <button @click="banIp(ip.ip)" class="btn btn-danger rounded-pill" type="button">BAN IP</button>
                                   </td>
                                </tr>
                              
                                <tr v-if="!ips.length" >
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
import Pagination from "@/Components/Pagination";
import AdminLayout from "@/Layouts/AdminLayout";
import { Head, Link } from "@inertiajs/inertia-vue3";
import Button from '@/Components/Button.vue';

export default {
  components: {
    Head,
    Link,
    AdminLayout,
    Pagination,
  },
  

  props:{
      customer: Object,
      country: Object,
      zone: Object,
      history: Object,
      transactions: Object,
      rewards: Object,
      ips: Object,
      accounts: Array
  },

  data(){
      return{
          defaultAddress:'',
          password:{
            password:'',
            confirmPassword:'',
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
          historyData:{
            comment:''
          },
          transactionData:{
            description:'',
            ammount:''
          },
          rewardData:{
            description:'',
            points:'',
          }
      }
  },
  mounted(){
    this.defaultAddress = this.customer.address_id
    },

  methods: {
    format(value) {
      let val = (value / 1).toFixed(2);
      return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    },
    update(customerData, password,defaultAddress){
      this.$inertia.post(this.route('admin.customer.update',{customerData, password,defaultAddress},{replace: true, preserveState: true}))
    },
    addAddress(formData,id){
      this.$inertia.post(this.route('admin.customer.addAddress',{formData, id},{replace: true, preserveState: true}))
    },
    deleteAddress(id){
      let con = confirm("Sure want to delete?");
      if (con){
        this.$inertia.post(this.route('admin.customer.deleteAddress',{id}))
      }
    },
    addHistory(form,id){
      this.$inertia.post(this.route('admin.customer.addHistory',{form,id},{replace: true, preserveState: true}))
    },
    deleteHistory(id){
      let con = confirm("Sure want to delete?");
      if (con){
        this.$inertia.post(this.route('admin.customer.deleteHistory',{id},{replace: true, preserveState: true}))
      }
    },
    addTransaction(form,id){
      this.$inertia.post(this.route('admin.customer.addTransaction',{form,id},{replace: true, preserveState: true}))
    },
    deleteTransaction(id){
      let con = confirm("Sure want to delete?");
      if (con){
        this.$inertia.post(this.route('admin.customer.deleteTransaction',{id},{replace: true, preserveState: true}))
      }
    },
    addReward(form,id){
      this.$inertia.post(this.route('admin.customer.addReward',{form,id},{replace: true, preserveState: true}))
    },
    deleteReward(id){
      let con = confirm("Sure want to delete?");
      if (con){
        this.$inertia.post(this.route('admin.customer.deleteReward',{id},{replace: true, preserveState: true}))
      }
    },
    banIp(ip){
      let con = confirm("Sure want to Ban this Ip?");
      if(con){
        this.$inertia.post(this.route('admin.customer.banIp',{ip},{replace: true, preserveState: true}))
      }
      
    },
    

  }
};
</script>