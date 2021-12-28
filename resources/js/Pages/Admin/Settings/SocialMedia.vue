<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Settings</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form @submit.prevent="submit(data)">
              <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <button type="submit" class="btn btn-success rounded-pill m-2" > SAVE </button>
                            <Link :href="route('admin.dashboard')" as="button" type="submit" class="btn btn-danger rounded-pill m-2" > CANCEL </Link>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table" >
                            <tbody>
                                <tr >
                                    <td style="width:25%" >
                                        Facebook Profile:
                                    </td>
                                    <td>
                                        <input v-model="data.polianna_facebook_id" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Twitter Profile:
                                    </td>
                                    <td>
                                        <input v-model="data.polianna_twitter_username" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Google+ ID:	
                                    </td>
                                    <td>
                                        <input  v-model="data.polianna_gplus_id" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Linkedin Profile:	
                                    </td>
                                    <td>
                                        <input v-model="data.polianna_linkedin_id" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Youtube:	
                                    </td>
                                    <td>
                                        <input v-model="data.polianna_youtube_id" class="form-control" type="text">
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
import Datepicker from 'vue3-date-time-picker';
import 'vue3-date-time-picker/dist/main.css';
import useValidate from '@vuelidate/core'
import { required, email, minLength,maxLength, sameAs, numeric } from '@vuelidate/validators'

export default {
  components: {
    Head,
    Link,
    AdminLayout,
    Datepicker,
  },

  props: {
      data: Object
  },
  data() {
      return {
          v$: useValidate(),
          
        }
    },

    validations() {
        return {
          
        }
    },

    created(){
        
        
    },

    methods:{
        submit(data){
            // this.v$.data.$touch()
        // if(!this.v$.settings.$error){
            
            let con = confirm("Save Changes?");

            if(con){
                this.$inertia.post(this.route('admin.settings.social.update',{data},{
                        replace: true, 
                        preserveState: true
                        }))

            }
        }
            
        
    },
  watch: {
    
  }
};
</script>
