<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Create Product Icons</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form @submit.prevent="submit(data)" >
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <button class="btn btn-info rounded-pill m-2" type="submit" > SAVE</button>
                            <Link :href="route('admin.settings.product_icon.index')" as="button" class="btn btn-danger rounded-pill m-2" > CANCEL</Link>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table" >
                            <tbody>
                                <tr>
                                    <td style="width:25%">
                                        Icon Name
                                    </td>
                                    <td>
                                        <input v-model="data.icon_name" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                        Icon URL
                                    </td>
                                    <td>
                                        <input v-model="data.icon_url" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                        Alt Description
                                    </td>
                                    <td>
                                        <textarea v-model="data.icon_desc" class="form-control" type="text"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                        Sort Order
                                    </td>
                                    <td>
                                        <input v-model="data.icon_sort" class="form-control" type="text">
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
  },

  props: {
      data: Object
  },
  data() {
      return {
          
      }
    },

    methods:{
        submit(data){
            let con = confirm("Save Changes?");

            if (con){
            this.$inertia.post( route('admin.settings.product_icon.update') , data,{
            replace: true, 
            preserveState: true})
            }

        },
    },
  watch: {
      
  }
};
</script>
