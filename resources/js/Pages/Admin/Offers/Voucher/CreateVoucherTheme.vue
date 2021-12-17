<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Voucher Themes / Create</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form @submit.prevent="submit(this.theme)" action="" method="post">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <Link :href="route('admin.offers.voucher.theme.index')" as="button" class="btn btn-warning rounded-pill m-2" type="submit" > CANCEL</Link>

                            <button class="btn btn-success rounded-pill m-2" type="submit" > SAVE</button>
                            
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table" >
                            <tbody>
                                <tr >
                                    <td  style="width:25%">Voucher Theme Name:</td>
                                    <td>
                                        <input v-model="this.theme.name" class="form-input" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Theme Image: </td>
                                    <td>
                                        <div class="form-group">
                                            <input ref="upload"
                                                type="file"
                                                name="file-upload"
                                                multiple=""
                                                accept="image/jpeg, image/png"
                                                @change="onUploadFiles">
                                        </div>
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
      
  },
  data() {
      return {
          theme:{
              name:''
          },
          files: '',
      }
    },

    methods:{
        submit(theme){
            console.log(theme);
        },
        previewFiles() {
            this.files = this.$refs.myFiles.files
        }

    },
  watch: {
      
  }
};
</script>
