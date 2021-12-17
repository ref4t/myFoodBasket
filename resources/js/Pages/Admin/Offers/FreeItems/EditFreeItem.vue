<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Free Item / Add</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form @submit.prevent="submit(item)" action="" method="post">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <Link :href="route('admin.offers.free.item.index')" as="button" class="btn btn-warning rounded-pill m-2" type="submit" > CANCEL</Link>

                            <button class="btn btn-success rounded-pill m-2" type="submit" > SAVE</button>
                            
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table" >
                            <tbody>
                                <tr >
                                    <td  style="width:25%">Item Name:</td>
                                    <td>
                                        <input v-model="item.name_item" class="form-input" type="text">
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
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
      item: Object,
  },
  data() {
      return {
          
      }
    },

    methods:{
        submit(item){
            this.$inertia.post(this.route('admin.offers.free.item.store',{item},{
                    replace: true, 
                    preserveState: true
                    }))
        }

    },
  watch: {
      
  }
};
</script>
