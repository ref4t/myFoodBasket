<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Settings / Delivery</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form @submit.prevent="updateDelivery(settings)">
              <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <button type="submit" class="btn btn-success rounded-pill m-2" > SAVE </button>
                            <Link :href="route('admin.dashboard')" as="button" type="submit" class="btn btn-danger rounded-pill m-2" > CANCEL </Link>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table " >
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
                                <tbody  class="table-active" v-for="group in delivery" :key="group" >
                                   <tr>
                                        <td colspan="2">
                                            <button @click="deleteGroup(group)" class="btn btn-danger rounded-pill float-left" type="button" >
                                                <i class="fas fa-times"></i> DELETE
                                            </button>
                                        </td>
                                    </tr>
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
                                    <tr>
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
                                        <td class="bg-white" colspan="2">
                                            
                                        </td>
                                    </tr>
                                </tbody>

                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <button v-if="this.postGroup == 0" @click="this.postGroup = 1" class="btn btn-info rounded-pill float-right" type="button">
                                                ADD GROUP
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>

                                <tbody class="table-active" v-if="postGroup == 1">
                                    <tr>
                                        <td colspan="2">
                                             <button @click="addPostGroup(this.newPostGroup)" v-if="this.postGroup == 1" class="btn btn-success rounded-pill float-left" type="button">
                                                SAVE
                                            </button>
                                            <button v-if="this.postGroup == 1" @click="this.postGroup = 0" class="btn btn-warning rounded-pill float-right" type="button">
                                                CANCEL
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        Group Name: 
                                        </td>
                                        <td>
                                            <input v-model="this.newPostGroup.name" class="form-control" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        Minimum Spend: 
                                        </td>
                                        <td>
                                            <input v-model="this.newPostGroup.min_spend" class="form-control" type="text">
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
                                    <tr>
                                        <td>
                                        Post Codes: 
                                        </td>
                                        <td  >
                                            <div class="scrollit">
                                                <div v-for="(code,index) in this.newPostGroup.post_codes" :key="index" class="form-check form-check-inline "  >
                                                    <span class="bg-info p-2 m-2"> {{code}} <i @click="deletePost(this.newPostGroup.post_codes,index)" class="fas fa-times" style="cursor:pointer" ></i> </span>
                                                </div>
                                            </div>
                                            <div class="input-group mt-3" style="width:300px" >
                                            <input v-model="this.newPostGroup.addpost_code" type="text" class="form-control" placeholder="Post Code" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button @click="add(this.newPostGroup.post_codes,this.newPostGroup.addpost_code)" class="btn btn-outline-secondary" type="button">Add</button>
                                            </div>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-white" colspan="2">
                                            
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
                                            <input  v-model="settings.is_distance_option"  :value="'1'" class="form-check-input" type="radio" >
                                            <label class="form-check-label" for="inlineRadio2">Local PostCode Distance</label>
                                        </div>
                                        <div class="form-check form-check-inline  ">
                                            <input  v-model="settings.is_distance_option"  :value="'2'" class="form-check-input" type="radio" >
                                            <label class="form-check-label" for="inlineRadio2">Google API Distance</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr v-if="settings.is_distance_option == '1' " >
                                    <td>
                                        Percentage value for road mileage
                                        (22% is Recommended)
                                    </td>
                                    <td>
                                        <input v-model="settings.road_mileage_percentage" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr v-if="settings.is_distance_option == '2'" >
                                    <td>
                                        Google Distance Api Key
                                    </td>
                                    <td>
                                        <input  v-model="settings.google_distance_api_key" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tbody class="table-active" v-for="group in delivery" :key="group" >
                                    <tr>
                                        <td colspan="2">
                                            <button @click="deleteGroup(group)" class="btn btn-danger rounded-pill float-left" type="button" >
                                                <i class="fas fa-times"></i> DELETE
                                            </button>
                                        </td>
                                    </tr>
                                    
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
                                    <tr >
                                        <td>
                                        Distance (Miles): 
                                        </td>
                                        <td>
                                            <input v-model="group.distance" class="form-control" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-white" colspan="2">
                                            
                                        </td>
                                    </tr>
                                    
                                </tbody>
                                <tr v-if="this.disGroup == 0">
                                    <td colspan="2">
                                        <button @click="this.disGroup = 1" class="btn btn-info rounded-pill float-right" type="button">
                                            ADD GROUP
                                        </button>
                                    </td>
                                </tr>

                                <tbody class="table-active" v-if="this.disGroup == 1">
                                    <tr>
                                        <td colspan="2">
                                            <button @click="this.disGroup = 0" class="btn btn-danger rounded-pill float-left">
                                               CENCEL
                                            </button>
                                            <button @click="addDistGroup(this.newDistGroup)" class="btn btn-success rounded-pill float-right">
                                               SAVE
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        Group Name: 
                                        </td>
                                        <td>
                                            <input v-model="newDistGroup.name" class="form-control" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        Minimum Spend: 
                                        </td>
                                        <td>
                                            <input v-model="newDistGroup.min_spend" class="form-control" type="text">
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
                                    <tr >
                                        <td>
                                        Distance (Miles): 
                                        </td>
                                        <td>
                                            <input v-model="newDistGroup.distance" class="form-control" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-white" colspan="2">
                                            
                                        </td>
                                    </tr>
                                </tbody>

                            </template>




                            <template v-if="settings.delivery_option == 'area'" >
                                <tbody class="table-active" v-for="group in delivery" :key="group">
                                    <tr>
                                        <td colspan="2">
                                            <button @click="deleteGroup(group)" class="btn btn-danger rounded-pill float-left" type="button" >
                                                <i class="fas fa-times"></i> DELETE
                                            </button>
                                        </td>
                                    </tr>
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
                                    <tr >
                                        <td>
                                        Areas: 
                                        </td>
                                        <td  >
                                            <div class="scrollit">
                                                <div v-for="(code,index) in group.area" :key="index" class="form-check form-check-inline "  >
                                                    <span class="bg-info p-2 m-2"> {{code}} <i @click="deletePost(group.area,index)" class="fas fa-times" style="cursor:pointer" ></i> </span>
                                                </div>
                                            </div>
                                            <div class="input-group mt-3" style="width:300px" >
                                            <input v-model="this.area" type="text" class="form-control" placeholder="Post Code" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button @click="add(group.area,this.area)" class="btn btn-outline-secondary" type="button">Add</button>
                                            </div>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-white" colspan="2">
                                            
                                        </td>
                                    </tr>
                                </tbody>
                                
                                <tr v-if="this.areaGroup == 0">
                                    <td colspan="2">
                                        <button @click="this.areaGroup = 1" class="btn btn-info rounded-pill float-right" type="button">
                                            ADD GROUP
                                        </button>
                                    </td>
                                </tr>
                                <tbody class="table-active" v-if="areaGroup == 1">
                                    <tr>
                                        <td colspan="2">
                                             <button @click="addAreaGroup(this.newAreaGroup)" class="btn btn-success rounded-pill float-right" type="button">
                                                SAVE
                                            </button>
                                            <button  @click="this.areaGroup = 0" class="btn btn-warning rounded-pill float-left" type="button">
                                                CANCEL
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        Group Name: 
                                        </td>
                                        <td>
                                            <input v-model="this.newAreaGroup.name" class="form-control" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        Minimum Spend: 
                                        </td>
                                        <td>
                                            <input v-model="this.newAreaGroup.min_spend" class="form-control" type="text">
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
                                    <tr>
                                        <td>
                                        Area: 
                                        </td>
                                        <td  >
                                            <div class="scrollit">
                                                <div v-for="(code,index) in this.newAreaGroup.areas" :key="index" class="form-check form-check-inline "  >
                                                    <span class="bg-info p-2 m-2"> {{code}} <i @click="deletePost(this.newAreaGroup.areas,index)" class="fas fa-times" style="cursor:pointer" ></i> </span>
                                                </div>
                                            </div>
                                            <div class="input-group mt-3" style="width:300px" >
                                            <input v-model="this.newAreaGroup.area" type="text" class="form-control" placeholder="Post Code" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button @click="add(this.newAreaGroup.areas,this.newAreaGroup.area)" class="btn btn-outline-secondary" type="button">Add</button>
                                            </div>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-white" colspan="2">
                                            
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
          post_code:'',
          area:'',
          postGroup: 0,
          disGroup:0,
          areaGroup:0,

          newPostGroup:{
              name:'',
              min_spend:'',
              post_codes:[],
              post_code:''

          },

          newDistGroup:{
              name:'',
              min_spend:'',
              distance:0

          },

          newAreaGroup:{
              name:'',
              min_spend:'',
              areas:[],
              area:''

          },


        }
    },

    validations() {
        return {
            post_code: '',
            area:'',
          
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
           post_code = ''
        },

        deleteGroup(data){


            let con = confirm("Delete Group?");

                if(con){
                    this.$inertia.post(this.route('admin.settings.delivery.delete',{data},{
                            replace: true, 
                            preserveState: true
                            }))

                }

        },
        addPostGroup(data){

            this.postGroup = 0;

            console.log(data)

            let con = confirm("Add New Post Group?");

                if(con){
                    this.$inertia.post(this.route('admin.settings.delivery.addPostGroup',{data},{
                            replace: true, 
                            preserveState: true
                            }))

                }

        },
        
        
        addDistGroup(data){

            this.disGroup = 0;

            console.log(data)

            let con = confirm("Add New Distance Group?");

                if(con){
                    this.$inertia.post(this.route('admin.settings.delivery.addDistGroup',{data},{
                            replace: true, 
                            preserveState: true
                            }))

                }

        },
        
        
        addAreaGroup(data){

            this.disGroup = 0;

            console.log(data)

            let con = confirm("Add New Area Group?");

                if(con){
                    this.$inertia.post(this.route('admin.settings.delivery.addAreaGroup',{data},{
                            replace: true, 
                            preserveState: true
                            }))

                }

        },
        
        
        updateDelivery(settings){

            
            // this.v$.settings.$touch()
            // if(!this.v$.settings.$error){
                
                let con = confirm("Save Changes?");

                if(con){
                    this.$inertia.post(this.route('admin.settings.delivery.update',{settings},{
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
