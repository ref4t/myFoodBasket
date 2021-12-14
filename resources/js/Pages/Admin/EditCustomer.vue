<template>
  <admin-layout>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <form >
                <div class="card-header">
                    <h2> Order </h2>
                    <div class="text-right"  >
                        <Link @click="submit(orders)" as="button" class="btn btn-secondary rounded-pill" style="margin-right:1%" type="submit">Save</Link>
                        <Link :href="route('admin.customer')" as="button" class="btn btn-secondary rounded-pill" type="button">Cancel</Link>
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
                        
                        
                        <div class="card">
                            
                        </div>
                        
                        
                        </div>
                        <div id="menu1" class="container tab-pane fade">
                        <br />

                        <div class="card">
                            <h3>Menu 2</h3>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem accusantium doloremque laudantium, totam rem
                            aperiam.
                        </p>
                        </div>


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
                        <div id="menu3" class="container tab-pane fade">
                        <h3>Menu 3</h3>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem accusantium doloremque laudantium, totam rem
                            aperiam.
                        </p>

                        </div>
                        <div id="menu4" class="container tab-pane fade">
                        <br />
                        <h3>Menu 4</h3>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem accusantium doloremque laudantium, totam rem
                            aperiam.
                        </p>
                        </div>
                        <div id="menu5" class="container tab-pane fade">
                           <h3>Menu 5</h3>
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
  },

  data(){
      return{
          
      }
  },
  methods: {
    

  }
};
</script>