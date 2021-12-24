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
                        <table class="table table-borderless" >
                            <tr  >
                                <td style="width:25%" >
                                    Enable Delivery/Collection
                                </td>
                                <td>
                                    <div class="form-check form-check-inline m-2 ">
                                        <input  v-model="settings.enable_delivery"  :value="'delivery'" class="form-check-input" type="radio" >
                                        <label class="form-check-label" for="inlineRadio2">Delivery</label>
                                    </div>
                                    <div class="form-check form-check-inline  ">
                                        <input   v-model="settings.enable_delivery"  :value="'collection'" class="form-check-input" type="radio" >
                                        <label class="form-check-label" for="inlineRadio2">Collection</label>
                                    </div>
                                    <div class="form-check form-check-inline  ">
                                        <input   v-model="settings.enable_delivery"  :value="'both'" class="form-check-input" type="radio" >
                                        <label class="form-check-label" for="inlineRadio2">Both</label>
                                    </div>
                                </td>
                            </tr>
                            <tr >
                                <td style="width:25%" >
                                    Delivery By
                                </td>
                                <td>
                                    <div @click="settings.delivery_option = 'post_codes'" class="form-check form-check-inline m-2 bg-info p-2" style="cursor:pointer" >
                                        <input  v-model="settings.delivery_option"  :value="'post_codes'" class="form-check-input" type="radio" >
                                        <label class="form-check-label" style="cursor:pointer">POST CODE SECTORS</label>
                                    </div>
                                    <div @click="settings.delivery_option = 'distance'" class="form-check form-check-inline   bg-info p-2" style="cursor:pointer">
                                        <input  v-model="settings.delivery_option"  :value="'distance'" class="form-check-input" type="radio" >
                                        <label class="form-check-label" style="cursor:pointer">DISTANCE</label>
                                    </div>
                                    <div @click="settings.delivery_option = 'area'" class="form-check form-check-inline  bg-info p-2 " style="cursor:pointer">
                                        <input  v-model="settings.delivery_option"  :value="'area'" class="form-check-input" type="radio" >
                                        <label class="form-check-label" style="cursor:pointer">AREA NAMES</label>
                                    </div>
                                </td>
                            </tr>
                            <template v-if="settings.delivery_option == 'post_codes'" >
                                <tbody v-for="group in delivery" :key="group" >
                                    <tr>
                                        <td>
                                        Group Name: 
                                        </td>
                                        <td>
                                            <input v-model="group.name" class="form-control" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        Minimum Spend: 
                                        </td>
                                        <td>
                                            <input v-model="group.min_spend" class="form-control" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        Delivery Fees: 
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline " style="width:100px">
                                                <input  class="form-control" type="text" >
                                            </div>
                                            <div class="form-check form-check-inline">
                                                UP TO
                                                <input  class="form-control" type="text" style="width:100px" >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-active">
                                        <td>
                                        Post Codes: 
                                        </td>
                                        <td  >
                                            <div class="scrollit">
                                                <div v-for="(code,index) in group.post_codes" :key="index" class="form-check form-check-inline "  >
                                                    <span class="bg-info p-2 m-2"> {{code}} <i @click="deletePost(group.post_codes,index)" class="fas fa-times" style="cursor:pointer" ></i> </span>
                                                </div>
                                            </div>
                                            <div class="input-group mt-3" style="width:300px" >
                                            <input v-model="post_code" type="text" class="form-control" placeholder="Post Code" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button @click="add(group.post_codes,this.post_code)" class="btn btn-outline-secondary" type="button">Add</button>
                                            </div>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                        
                                    </td>
                                    </tr>
                                </tbody>
                            </template>

                            <template  v-if="settings.delivery_option == 'distance'">
                                <tr>
                                    <td>
                                        Distance Options
                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline  ">
                                            <input    :value="'distance'" class="form-check-input" type="radio" >
                                            <label class="form-check-label" for="inlineRadio2">Local PostCode Distance</label>
                                        </div>
                                        <div class="form-check form-check-inline  ">
                                            <input    :value="'area'" class="form-check-input" type="radio" >
                                            <label class="form-check-label" for="inlineRadio2">Google API Distance</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Percentage value for road mileage
                                        (22% is Recommended)
                                    </td>
                                    <td>
                                        <input class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Google Distance Api Key
                                    </td>
                                    <td>
                                        <input class="form-control" type="text">
                                    </td>
                                </tr>
                                <tbody v-for="group in delivery" :key="group" >
                                    <tr>
                                        <td>
                                        Group Name: 
                                        </td>
                                        <td>
                                            <input v-model="group.name" class="form-control" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        Minimum Spend: 
                                        </td>
                                        <td>
                                            <input v-model="group.min_spend" class="form-control" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        Delivery Fees: 
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline " style="width:100px">
                                                <input  class="form-control" type="text" >
                                            </div>
                                            <div class="form-check form-check-inline">
                                                UP TO
                                                <input  class="form-control" type="text" style="width:100px" >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-active">
                                        <td>
                                        Distance (Miles): 
                                        </td>
                                        <td>
                                            <input class="form-control" type="text">
                                        </td>
                                    </tr>
                                    
                                </tbody>

                            </template>

                            <template v-if="settings.delivery_option == 'area'" >
                                <tbody v-for="group in delivery" :key="group" >
                                    <tr>
                                        <td>
                                        Group Name: 
                                        </td>
                                        <td>
                                            <input v-model="group.name" class="form-control" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        Minimum Spend: 
                                        </td>
                                        <td>
                                            <input v-model="group.min_spend" class="form-control" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        Delivery Fees: 
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline " style="width:100px">
                                                <input  class="form-control" type="text" >
                                            </div>
                                            <div class="form-check form-check-inline">
                                                UP TO
                                                <input  class="form-control" type="text" style="width:100px" >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-active">
                                        <td>
                                        Areas: 
                                        </td>
                                        <td  >
                                            <div class="scrollit">
                                                <div v-for="(code,index) in group.post_codes" :key="index" class="form-check form-check-inline "  >
                                                    <span class="bg-info p-2 m-2"> {{code}} <i @click="deletePost(group.post_codes,index)" class="fas fa-times" style="cursor:pointer" ></i> </span>
                                                </div>
                                            </div>
                                            <div class="input-group mt-3" style="width:300px" >
                                            <input v-model="post_code" type="text" class="form-control" placeholder="Post Code" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button @click="add(group.post_codes,this.post_code)" class="btn btn-outline-secondary" type="button">Add</button>
                                            </div>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                        
                                    </td>
                                    </tr>
                                </tbody>
                            </template>

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
    Datepicker
  },

  props: {
      delivery: Object,
      settings: Object,
  },
  data() {
      return {
          v$: useValidate(),
          post_code:''
        }
    },

    validations() {
        return {
            post_code: ''
          
        }
    },

    created(){
        
        
    },

    methods:{

        deletePost(post_codes,index){

            post_codes.splice(index,  1);
        },
        add(post_codes,post_code){
           post_codes.push(post_code)
           this.post_code = ''
        },
        
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
.scrollit {
   height:150px;
    overflow-y: scroll;
}
</style>
