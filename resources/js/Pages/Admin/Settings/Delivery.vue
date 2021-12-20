<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Settings / Delivery</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form @submit.prevent="update(data,days,open,close)">
              <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <button type="submit" class="btn btn-success rounded-pill m-2" > SAVE </button>
                            <Link :href="route('admin.dashboard')" as="button" type="submit" class="btn btn-danger rounded-pill m-2" > CANCEL </Link>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        
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
import Multiselect from '@vueform/multiselect'
import Datepicker from 'vue3-date-time-picker';
import 'vue3-date-time-picker/dist/main.css';
import useValidate from '@vuelidate/core'
import { required, email, minLength,maxLength, sameAs, numeric } from '@vuelidate/validators'

export default {
  components: {
    Head,
    Link,
    AdminLayout,
    Multiselect,
    Datepicker,
  },

  props: {
      data: Object,
      days: Array,
      open: String,
      close: String
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
        
        updateSettings(data,days,open,close){

            
            // this.v$.settings.$touch()
            // if(!this.v$.settings.$error){
                
                let con = confirm("Save Changes?");

                if(con){
                    this.$inertia.post(this.route('admin.settings.openclose.update',{data,days,open,close},{
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
<style src="@vueform/multiselect/themes/default.css"></style>
<style>
.info {
    color: #666;
    font-size: 11px;
    font-weight: 400;
    font-family: Verdana,Geneva,sans-serif;
    display: block;
}
</style>
