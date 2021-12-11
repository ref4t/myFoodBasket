<template>
  <admin-layout>
    <section class="content">
      <div class="card">
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-outline-success">
            <input
              @click="params.record = 1"
              type="radio"
              name="options"
              id="option_b1"
              :checked="params.record == 1"
            />
            Daily
          </label>
          <label class="btn btn-outline-success">
            <input
              @click="params.record = 2"
              type="radio"
              name="options"
              id="option_b2"
              :checked="params.record == 2"
            />
            Weekly
          </label>
          <label class="btn btn-outline-success active">
            <input
              @click="params.record = 3"
              type="radio"
              name="options"
              id="option_b3"
              :checked="params.record == 3"
            />
            Monthly
          </label>
          <label class="btn btn-outline-success">
            <input
              @click="params.record = 4"
              type="radio"
              name="options"
              id="option_b3"
              :checked="params.record == 4"
            />
            Yearly
          </label>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-sm-6 col-md-3 min-vh-20">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-info elevation-1">
              <i class="fas fa-chart-area"></i>
            </span>

            <div class="info-box-content" style="height: 200px; width: ">
              <small style="min-height: 160px">
                <p class="h2 text-info">£{{ format(total[0].total) }}</p>
                <span class="info-box-text"
                  ><span style="font-weight: bold">Delivery:</span>
                  {{ format(delivery[0].total) }}
                  <span class="float-right"
                    ><span style="font-weight: bold">Card:</span> £{{
                      format(card[0].total)
                    }}</span
                  >
                </span>
                <span class="info-box-text"
                  ><span style="font-weight: bold">Collection:</span>
                  {{ format(collection[0].total) }}
                  <span class="float-right"
                    ><span style="font-weight: bold">Collection:</span> £{{
                      format(cash[0].total)
                    }}</span
                  >
                </span>
              </small>

              <div class="divider py-1 bg-info sticky-bot"></div>
              <span style="text-size: 24px">Total Sales</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-danger elevation-1"
              ><i class="fa fa-shopping-basket"></i
            ></span>

            <div class="info-box-content" style="height: 200px; width: ">
              <small style="min-height: 160px">
                <p class="h2 text-danger">{{ total[0].count }}</p>
                <span class="info-box-text"
                  ><span style="font-weight: bold">Delivery:</span>
                  {{ delivery[0].count }}
                  <span class="float-right"
                    ><span style="font-weight: bold">Card:</span>
                    {{ card[0].count }}</span
                  >
                </span>
                <span class="info-box-text"
                  ><span style="font-weight: bold">Collection:</span>
                  {{ collection[0].count }}
                  <span class="float-right"
                    ><span style="font-weight: bold">Collection:</span>
                    {{ cash[0].count }}</span
                  >
                </span>
              </small>

              <div class="divider py-1 bg-danger sticky-bot"></div>
              <span style="text-size: 24px">Total Sales</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-warning elevation-1"
              ><i class="fa fa-tags"></i
            ></span>

            <div class="info-box-content" style="height: 200px; width: ">
              <small style="min-height: 160px">
                <p class="h2 text-warning">{{ total_products }}</p>
              </small>

              <div class="divider py-1 bg-warning sticky-bot"></div>
              <span style="text-size: 24px">Number of sold items</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1">
              <i class="fas fa-users"></i>
            </span>

            <div class="info-box-content" style="height: 200px; width: ">
              <small style="min-height: 160px">
                <span
                  v-for="customer in top_customer"
                  :key="customer.order_id"
                  class="info-box-text"
                >
                  <b
                    >{{ customer.firstname.charAt(0).toUpperCase() }}.
                    {{
                      customer.lastname.charAt(0).toUpperCase() +
                      customer.lastname.slice(1)
                    }}</b
                  >
                  <span class="float-right">
                    <b>Total:</b> £{{ format(customer.sumtotal) }}</span
                  >
                </span>
              </small>
              <div class="divider py-1 bg-green"></div>
              <span style="text-size: 24px">Top 5 Customer</span>
            </div>
            <!-- /.info-box-content -->
          </div>

          <!-- /.info-box -->
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2>New Orders</h2>
                <div class="float-right">
                  <div class="form-inline">
                    <div class="input-group rounded"></div>
                  </div>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table
                  class="
                    table table-bordered table-hover
                    text-nowrap text-center
                  "
                >
                  <thead class="thead-light">
                    <tr>
                      <th class="text-capitalize">
                        <Link @click="sort('flag_post_code')">
                          Type
                          <i
                            v-if="
                              params.field == 'flag_post_code' &&
                              params.direction == 'asc'
                            "
                            class="fas fa-chevron-down"
                          ></i>
                          <i
                            v-if="
                              params.field == 'flag_post_code' &&
                              params.direction == 'desc'
                            "
                            class="fas fa-chevron-up"
                          ></i>
                        </Link>
                      </th>
                      <th class="text-capitalize">
                        <Link @click="sort('order_id')">
                          Order No
                          <i
                            v-if="
                              params.field == 'order_id' &&
                              params.direction == 'asc'
                            "
                            class="fas fa-chevron-down"
                          ></i>
                          <i
                            v-if="
                              params.field == 'order_id' &&
                              params.direction == 'desc'
                            "
                            class="fas fa-chevron-up"
                          ></i>
                        </Link>
                      </th>

                      <th class="text-capitalize">
                        <Link @click="sort('store_name')">
                          Shop
                          <i
                            v-if="
                              params.field == 'store_name' &&
                              params.direction == 'asc'
                            "
                            class="fas fa-chevron-down"
                          ></i>
                          <i
                            v-if="
                              params.field == 'store_name' &&
                              params.direction == 'desc'
                            "
                            class="fas fa-chevron-up"
                          ></i>
                        </Link>
                      </th>
                      <th class="text-capitalize">
                        <Link @click="sort('firstname')">
                          Customer
                          <i
                            v-if="
                              params.field == 'firstname' &&
                              params.direction == 'asc'
                            "
                            class="fas fa-chevron-down"
                          ></i>
                          <i
                            v-if="
                              params.field == 'firstname' &&
                              params.direction == 'desc'
                            "
                            class="fas fa-chevron-up"
                          ></i>
                        </Link>
                      </th>

                      <th class="text-capitalize">
                        <Link @click="sort('total')">
                          Order Total
                          <i
                            v-if="
                              params.field == 'total' &&
                              params.direction == 'asc'
                            "
                            class="fas fa-chevron-down"
                          ></i>
                          <i
                            v-if="
                              params.field == 'total' &&
                              params.direction == 'desc'
                            "
                            class="fas fa-chevron-up"
                          ></i>
                        </Link>
                      </th>
                      <th class="text-capitalize">
                        <Link @click="sort('accepted_time')">
                          Order Time
                          <i
                            v-if="
                              params.field == 'accepted_time' &&
                              params.direction == 'asc'
                            "
                            class="fas fa-chevron-down"
                          ></i>
                          <i
                            v-if="
                              params.field == 'accepted_time' &&
                              params.direction == 'desc'
                            "
                            class="fas fa-chevron-up"
                          ></i>
                        </Link>
                      </th>
                      <th class="text-capitalize">
                        <Link @click="sort('order_status_id')">
                          Status
                          <i
                            v-if="
                              params.field == 'order_status_id' &&
                              params.direction == 'asc'
                            "
                            class="fas fa-chevron-down"
                          ></i>
                          <i
                            v-if="
                              params.field == 'order_status_id' &&
                              params.direction == 'desc'
                            "
                            class="fas fa-chevron-up"
                          ></i>
                        </Link>
                      </th>
                      <th class="text-capitalize"><Link> Print </Link></th>
                      <th class="text-capitalize"><Link> SMS </Link></th>
                      <th class="text-capitalize"><Link> Reply </Link></th>
                    </tr>
                    <tr>
                      <th>
                        <select
                          v-model="params.order_type"
                          class="form-control rounded"
                          aria-label="Default select example"
                        >
                          <option selected></option>
                          <option v-bind:value="'delivery'">Delivery</option>
                          <option v-bind:value="'collection'">
                            Collection
                          </option>
                        </select>
                      </th>
                      <th>
                        <input
                          type="search"
                          v-model="params.order_no"
                          class="form-control rounded"
                          placeholder="Order No."
                          aria-label="Search"
                          aria-describedby="search-addon"
                        />
                      </th>
                      <th></th>
                      <th>
                        <input
                          type="search"
                          v-model="params.search"
                          class="form-control rounded"
                          placeholder="First Name"
                          aria-label="Search"
                          aria-describedby="search-addon"
                        />
                      </th>
                      <th></th>
                      <th></th>
                      <th>
                        <select
                          v-model="params.status"
                          class="form-control rounded"
                          aria-label="Default select example"
                        >
                          <option selected></option>
                          <option
                            v-for="status in status"
                            :key="status.order_status_id"
                            v-bind:value="status.order_status_id"
                          >
                            {{ status.name }}
                          </option>
                        </select>
                      </th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="order in orders.data" :key="order.id">
                      <td>
                        <i
                          v-if="order.flag_post_code == 'delivery'"
                          class="fas fa-motorcycle"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="Delivery"
                        ></i>
                        <i
                          v-if="order.flag_post_code == 'collection'"
                          class="fas fa-shopping-bag"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="Collection"
                        ></i>
                      </td>
                      <td>{{ order.order_id }}</td>
                      <td>{{ order.store_name }}</td>
                      <td>{{ order.firstname }} {{ order.lastname }}</td>

                      <td>
                        £{{ format(order.total) }}
                        <img
                          v-if="order.payment_method == 'Card'"
                          :src="'/image/payment_logos/card-logo.png'"
                          style="width: 30px"
                        />
                        <img
                          v-if="order.payment_method == 'Cash on Delivery'"
                          :src="'/image/payment_logos/cash_logo.png'"
                          style="width: 30px"
                        />
                      </td>

                      <td>
                        {{ order.date_added }} <br />
                        <div
                          style="
                            background: #0071c6;
                            padding: 1px 8px;
                            font-size: 14px;
                            text-transform: uppercase;
                            color: #fff;
                            font-weight: 600;
                            display: inline-block;
                            margin: 2px 0 0;
                          "
                        >
                          {{ order.timedelivery }}
                        </div>
                      </td>
                      <td>
                        <i
                          v-if="order.order_status_id == 15"
                          class="fas fa-check-circle"
                          style="color: #a8c19d"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="Accepted"
                        ></i>
                        <i
                          v-if="order.order_status_id == 11"
                          class="fas fa-check-circle"
                          style="color: #49afcd"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="Refunded"
                        ></i>
                        <i
                          v-if="order.order_status_id == 7"
                          class="fas fa-times-circle"
                          style="color: #bd362f"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="Rejected"
                        ></i>
                        <i
                          v-if="order.order_status_id == 2"
                          class="fas fa-hourglass-half"
                          style="color: #005580"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="Processing"
                        ></i>
                        <i
                          v-if="order.order_status_id == 5"
                          class="fas fa-hourglass-half"
                          style="color: green"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="complete"
                        ></i>
                      </td>
                      <!-- <td>
                                                {{ order.payment_code }}
                                                <img v-if="order.payment_code == 'worldpayhp'" :src="'/image/payment_logos/worldpay_logo.png'" style="width: 30px;">
                                                <img v-if="order.payment_code == 'cod'" :src="'/image/payment_logos/worldpay_logo.png'" style="width: 30px;">
                                            </td> -->
                      <td>
                        <i @click="openModal" class="fas fa-print"></i>
                      </td>
                      <td>
                        <Link><i class="fas fa-mobile"></i></Link>
                      </td>
                      <td>
                        <Link
                          :href="
                            route('admin.dashboard.orders.show', {
                              id: order.order_id,
                            })
                          "
                          ><i class="fas fa-reply"></i
                        ></Link>
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

    <div class="modal fade" id="modal-lg">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="text-center" style="justify-content: center">
            <button @click="closeModal" type="buttom" class="close" ><span aria-hidden="true" >&times;</span></button>
            <h3 class="modal-title text-uppercase">{{ shop_name }}</h3>
            <span class="modal-title">
              Owner Name <br />
              POST CODE <br />
              Mobile Number
            </span>
          </div>

          <div class="modal-body overflow-hidden">
            <span class="text-center">
              <h5>COLLECTION</h5>
            </span>
            <span class="float-left">
                Date Added
            </span>
            <span class="float-right" >
                OrderId
            </span>
            <table class="table table-section">
                
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class="text-left" >data</td>
                        <td class="text-right">price</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td class="text-left" >Garlic Bread Pizza</td>
                        <td class="text-right">£3.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td class="text-left" >data</td>
                        <td class="text-right">price</td>
                    </tr>

                    <tr >
                        <td colspan="3">
                            <span class="wt_bx">
                                <i>Service Charge</i>

                                <b class="float-right" >£3.00</b>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>

            <p><span class="float-left" ><h5>TOTAL:</h5></span>
            <span class="float-right" ><h5>£3.00</h5></span></p>

            <h5>
                TOTAL:
                <span class="float-right" ></span>
            </h5>

            <div class="footer text-center">
                <p class="text-uppercase h4">Card/Cash</p>
                <p>Mr. Pentester Testing</p>
                <p>Mobile No</p>
                <p>Email</p>

                <p class="h4">ORDER HISTORY</p>
                <p><select
                    v-model="params.order_type"
                    class="rounded"
                    aria-label="Default select example"
                    style="width:30%"
                >
                    <option selected></option>
                    <option v-bind:value="'delivery'">Delivery</option>
                    <option v-bind:value="'collection'">
                    Collection
                    </option>
                </select></p>

                 <Link  as="button" class="btn btn-success text-uppercase float-right" style="letter-spacing: 0.1em;" >Print</Link>

            </div>


          </div>
        </div>
      </div>
    </div>
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
    Link,
    Head,
  },

  props: {
    orders: Object,
    filters: Object,
    top_customer: Object,
    total: Array,
    delivery: Array,
    collection: Array,
    card: Array,
    cash: Array,
    total_products: Number,
    status: Object,
    shop_name: String,
  },
  data() {
    return {
      params: {
        search: this.filters.search,
        order_type: this.filters.order_type,
        order_no: this.filters.order_no,
        status: this.filters.status,
        field: this.filters.field,
        direction: this.filters.direction,
        record: this.filters.record,
      },
    };
  },

  methods: {
    format(value) {
      let val = (value / 1).toFixed(2);
      return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    },
    sort(field) {
      this.params.field = field;
      this.params.direction = this.params.direction === "asc" ? "desc" : "asc";
    },
    openModal() {
      $("#modal-lg").modal("show");
    },
    closeModal(){
        $("#modal-lg").modal("hide");
    },
  },
  watch: {
    params: {
      handler() {
        let params = this.params;
        Object.keys(params).forEach((key) => {
          if (params[key] == "") {
            delete params[key];
          }
        });

        console.log(params);

        this.$inertia.get(this.route("admin.dashboard.newOrders"), params, {
          replace: true,
          preserveState: true,
        });
      },
      deep: true,
    },
  },
};
</script>

<style>
.wt_bx {
    display: block !important;
    border-bottom: dotted 2px #b1b1b1;
}
.wt_bx {
    display: inline-block;
    height: 16px;
    background: white;
    margin-bottom: -2px;
}
.wt_bx i {
    font-style: normal;
    background: #fff;
}
.wt_bx b {
    float: right;
    background: #fff;
}
.table-section tr td {
    color: #333333;
    border-bottom: 1px dotted #ccc;
    font-size: 14px !important;
    padding: 12px 0 12px 0;
}
</style>