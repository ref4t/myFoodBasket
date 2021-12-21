<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Create User</h1>
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
                            <Link :href="route('admin.settings.product_icon.index')" as="button" class="btn btn-danger rounded-pill m-2" > CANCEL</Link>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table" >
                            <tbody>
                                <tr>
                                    <td style="width:25%">
                                        Username:
                                    </td>
                                    <td>
                                        <input v-model="this.form.username" class="form-control" type="text" :class="v$.form.username.$error ? 'is-invalid' : ' ' " >
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                        First Name:
                                    </td>
                                    <td>
                                        <input v-model="this.form.firstname" class="form-control" type="text" :class="v$.form.firstname.$error ? 'is-invalid' : ' ' " >
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                        Last Name:
                                    </td>
                                    <td>
                                        <input v-model="this.form.lastname" class="form-control" type="text" :class="v$.form.lastname.$error ? 'is-invalid' : ' ' ">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                        E-Mail:
                                    </td>
                                    <td>
                                        <input v-model="this.form.email" class="form-control" type="text" :class="v$.form.email.$error ? 'is-invalid' : ' ' ">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                       User Group:
                                    </td>
                                    <td>
                                        <select class="form-control" v-model="this.form.user_group_id" :class="v$.form.user_group_id.$error ? 'is-invalid' : ' ' ">
                                            <option v-for="group in groups" :key="group" :value="group.user_group_id"> {{ group.name }} </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                       Store:
                                    </td>
                                    <td>
                                       <select class="form-control" v-model="this.form.user_shop" :class="v$.form.user_shop.$error ? 'is-invalid' : ' ' ">
                                            <option v-for="shop in stores" :key="shop" :value="shop.store_id"> {{ shop.name }} </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                      Password:
                                    </td>
                                    <td>
                                        <input v-model="this.form.password" class="form-control " type="password" 
                                        :class="v$.form.password.$error ? 'is-invalid' : ' ' ">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                      Confirm:
                                    </td>
                                    <td>
                                        <input v-model="this.form.confirmPassword" class="form-control " type="password" :class="v$.form.confirmPassword.$error ? 'is-invalid' : ' ' ">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                       Status:
                                    </td>
                                    <td>
                                        <select class="form-control" v-model="this.form.status">
                                            <option :value="'0'">Disable</option>
                                            <option :value="'1'">Enable</option>
                                        </select>
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
    'groups': Object,
    'stores': Object,
  },
  data() {
      return {
          v$: useValidate(),
          form:{
              username:'',
              firstname:'',
              lastname:'',
              email:'',
              user_group_id:'',
              user_shop:'',
              password:'',
              confirmPassword:'',
              status: 0,
          }
      }
    },
    validations(){
        return {
        form: {
            username: {required},
            firstname: {required},
            lastname: {required},
            email : {required, email},
            user_group_id: {required},
            user_shop: {required},
            password: {required, minLength: minLength(6)},
            confirmPassword: {required, sameAs: sameAs(this.form.password) },
            status: {required},

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
