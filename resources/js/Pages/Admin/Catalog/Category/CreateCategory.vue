<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Categories / Create</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form @submit.prevent="submit(this.form)">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <button class="btn btn-info rounded-pill m-2" type="submit" > SAVE</button>
                            <Link :href="route('admin.catalog.category.index')" as="button" class="btn btn-danger rounded-pill m-2" > CANCEL</Link>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table" >
                            <tbody>
                                <tr>
                                    <td style="width:25%">
                                        Category Name:
                                    </td>
                                    <td>
                                        <input v-model="this.form.name" class="form-control" type="text" >
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                        Select the days availible
                                    </td>
                                    <td class="font-weight-bold" >
                                        <input class="form-input" type="checkbox"> MON
                                        <input class="form-input" type="checkbox"> TUE
                                        <input class="form-input" type="checkbox"> WED
                                        <input class="form-input" type="checkbox"> THU
                                        <input class="form-input" type="checkbox"> FRI
                                        <input class="form-input" type="checkbox"> SAT
                                        <input class="form-input" type="checkbox"> SUN
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                        Description:
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                        Image:
                                    </td>
                                    <td>
                                        <input  type="file" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                       Banner:
                                    </td>
                                    <td>
                                        <input  type="file" name="" id="">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td style="width:25%">
                                      Sort Order:
                                    </td>
                                    <td>
                                        <input v-model="this.form.sort" class="form-control" type="text">
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
import useValidate from '@vuelidate/core'
import { required, email, minLength, sameAs, numeric } from '@vuelidate/validators'


export default {
  components: {
    Head,
    Link,
    AdminLayout,
  },

  props: {
    groups: Object,
    stores: Object,
  },
  data() {
      return {
          v$: useValidate(),
          form:{
              name:'',
              desc:'',
              sort:'',
              
          }
      }
    },
    validations(){
        return {
        form: {
            name: {required},
            desc: {required},
            sort: {required},
            

        },
        }
  },

    methods:{
        submit(form){
            this.v$.$validate()
            console.log('here')
            
            if(!this.v$.$error){
                let con = confirm("Save User?");

                if (con){
                this.$inertia.post( route('admin.settings.user.store') , form,{
                replace: true, 
                preserveState: true})
                }
            }else{
                console.log("failed")
            }

            


        },
    },
  watch: {
      
  }
};
</script>
