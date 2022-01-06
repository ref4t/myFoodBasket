<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">User / Edit</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form @submit.prevent="submit(user)">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <button class="btn btn-info rounded-pill m-2" type="submit" > SAVE</button>
                            <Link :href="route('admin.settings.user.index')" as="button" class="btn btn-danger rounded-pill m-2" > CANCEL</Link>
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
                                        <input v-model="user.username" class="form-control" type="text" >
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                        First Name:
                                    </td>
                                    <td>
                                        <input v-model="user.firstname" class="form-control" type="text" >
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                        Last Name:
                                    </td>
                                    <td>
                                        <input v-model="user.lastname" class="form-control" type="text" >
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                        E-Mail:
                                    </td>
                                    <td>
                                        <input v-model="user.email" class="form-control" type="text" >
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                       User Group:
                                    </td>
                                    <td>
                                        <select class="form-control" v-model="user.user_group_id" >
                                            <option v-for="group in groups" :key="group" :value="group.user_group_id"> {{ group.name }} </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                       Store:
                                    </td>
                                    <td>
                                       <select class="form-control" v-model="user.user_shop" >
                                            <option v-for="shop in stores" :key="shop" :value="shop.store_id"> {{ shop.name }} </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                      Password:
                                    </td>
                                    <td>
                                        <input v-model="form.password" class="form-control " type="password" name="userPassword" 
                                        :class="v$.form.password.$error ? 'is-invalid' : ' ' ">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                      Confirm:
                                    </td>
                                    <td>
                                        <input v-model="form.confirmPassword" class="form-control " type="password"
                                        :class="v$.form.confirmPassword.$error ? 'is-invalid' : ' ' "> 
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:25%">
                                       Status:
                                    </td>
                                    <td>
                                        <select class="form-control" v-model="user.status">
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
    'user' : Object,
    'groups': Object,
    'stores': Object,
  },
  data() {
      return {
          v$: useValidate(),
          form:{
              password:'',
              confirmPassword:''
          }
      }
    },
    validations(){
        return {
            form:{
                password: {required, minLength: minLength(6)},
                confirmPassword: {required, sameAs: sameAs(this.form.password) },
          }
        }
  },

    methods:{
        submit(user){
            if(this.form.password){
                
                this.v$.$validate()
                console.log(this.v$.form.password.$error)
                if(!this.v$.$error){
                    let con = confirm("Save User?");
                    let password = this.form.password
                    if (con){
                    this.$inertia.post( route('admin.settings.user.update') , {user,password},{
                    replace: true, 
                    preserveState: true})
                    }
                }
            }else{

                let con = confirm("Save User?");

                    if (con){
                    this.$inertia.post( route('admin.settings.user.update') , user,{
                    replace: true, 
                    preserveState: true})
                    }

            }
            
            // console.log('here')
            
            
            // }else{
            //     console.log("failed")
            // }

            


        },
    },
  watch: {
      
  }
};
</script>
