<template>
  <admin-layout>
    <template v-slot:header>
        <div class="form-check form-check-inline m-4">
           <h1 class="m-0 text-capitalize">Dashboard</h1>
        </div>
        <div class="form-check form-check-inline  m-4">
            
        </div>
        
        
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="card col-6 ">
            <div class="card-body ">
              <table class="table ">
                <thead>
                  <tr>
                    <th class="text-info" >
                      STORE SALES REPORTS
                    </th>
                    <th>
                      <select class="form-control" name="" id="">
                        <option value="">TODAY</option>
                        <option value="">YESTERDAY</option>
                        <option value="">THIS WEEK</option>
                        <option value="">THIS MONTH</option>
                        <option value="">THIS YEAR</option>
                        <option value="">LAST WEEK</option>
                        <option value="">LAST MONTH</option>
                        <option value="">LAST YEAR</option>
                      </select>
                    
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="2">
                      <table class="table table-borderless">
                        <tbody>
                          <tr>
                            <td style="width:60%" >
                                Total Sales:
                            </td>
                            <td class="text-left" >
                              	£0.00
                            </td>
                          </tr>
                          <tr>
                            <td style="width:60%" >
                                Total Sales:
                            </td>
                            <td class="text-left">
                              	£0.00
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card col-6 ">
            <div class="card-body ">
              <table class="table">
                <thead>
                  <tr>
                    <th class="text-info">
                      GENERAL TOTAL
                    </th>
                    <th>
                      <select class="form-control" name="" id="">
                        <option value="">TODAY</option>
                        <option value="">YESTERDAY</option>
                        <option value="">THIS WEEK</option>
                        <option value="">THIS MONTH</option>
                        <option value="">THIS YEAR</option>
                        <option value="">LAST WEEK</option>
                        <option value="">LAST MONTH</option>
                        <option value="">LAST YEAR</option>
                      </select>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="2" >
                      <table class="table table-bordered table-hover">
                        <tbody>
                          <tr>
                            <td>Cash Total</td>
                            <td>0	</td>
                            <td>£0.00</td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card col-12">
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <td>
                      TOP 10 CUSTOMERS
                    </td>
                    <td class="text-right">
                      <select class="form-control float-right" style="width: 200px" name="" id="">
                        <option value="">TODAY</option>
                        <option value="">YESTERDAY</option>
                        <option value="">THIS WEEK</option>
                        <option value="">THIS MONTH</option>
                        <option value="">THIS YEAR</option>
                        <option value="">LAST WEEK</option>
                        <option value="">LAST MONTH</option>
                        <option value="">LAST YEAR</option>
                      </select>
                    </td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="2" >
                      <table class="table table-bordered">
                        <thead class="table-active" >
                          <tr>
                            <td>
                              Customer
                            </td>
                            <td>
                              Total Sales
                            </td>
                            <td>
                              Total Cash Order Amount
                            </td>
                            <td>
                              Total Card Order Amount
                            </td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="4" class="text-center" >
                              No results!
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
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
import { Head,Link } from '@inertiajs/inertia-vue3';
import Pagination from "@/Components/Pagination";

export default {
  components: {
    Head,
    Link,
    AdminLayout,
    Pagination
  },

  props: {

  },
  data() {
      return {

         
      }
    },

    methods:{
        decodeHtml(html) {
            var txt = document.createElement("textarea");
            txt.innerHTML = html;
            return txt.value;
        }

    },
    watch: {
        
    },
};
</script>

<style>
.hide {
  display: none;
}

.myDIV:hover + .hide {
  display: block;
  color: red;
}
</style>
