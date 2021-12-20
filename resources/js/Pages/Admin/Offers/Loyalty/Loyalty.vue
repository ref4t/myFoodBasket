<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Order Loyalty</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="form-check form-check-inline m-4">
                        <input class="form-check-input" type="radio" v-model="rewardType" name="inlineRadioOptions" id="inlineRadio1" :value="1" checked >
                        <label class="form-check-label" for="inlineRadio1">Point Reward</label>
                    </div>
                    <div class="form-check form-check-inline  m-4">
                        <input class="form-check-input" type="radio" v-model="rewardType" name="inlineRadioOptions" id="inlineRadio2" :value="2">
                        <label class="form-check-label" for="inlineRadio2">Money Reward</label>
                    </div>
                    <div class="form-check form-check-inline  m-4">
                        <input class="form-check-input" type="radio" v-model="rewardType" name="inlineRadioOptions" id="inlineRadio3" :value="3" disabled>
                        <label class="form-check-label" for="inlineRadio3">Offer Reward</label>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <template v-if="rewardType == 1">
                        <form @submit.prevent="pointSave" action="">
                            <table class="table table-borderless" >
                                <tbody>
                                    <tr>
                                        <td style="width:25%" >Minimum spend:</td>
                                        <td>
                                            <input class="form-input" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Rewards every £0.01:</td>
                                        <td>
                                            <input class="form-input" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Total points must be reached to spend rewards:</td>
                                        <td>
                                            <input class="form-input" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Award £ <input type="text">
                                        </td>
                                        <td>
                                            Every <input class="form-input" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan>
                                            <input class="form-input" type="checkbox"> Apply Point expiry
                                        </td>
                                        <td>
                                            <input class="form-input" type="text"> days
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            <b>Exclude:</b> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <Multiselect
                                                class="form-input"
                                                v-model="value"
                                                mode="tags"
                                                :closeOnSelect="false"
                                                :searchable="true"
                                                :createTag="true"
                                                :options="[
                                                    { value: 'batman', label: 'Batman' },
                                                    { value: 'robin', label: 'Robin' },
                                                    { value: 'joker', label: 'Joker' },
                                                ]"
                                                />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <Multiselect
                                                class="form-input float-left"
                                                v-model="value"
                                                mode="tags"
                                                :closeOnSelect="false"
                                                :searchable="true"
                                                :createTag="true"
                                                :options="[
                                                    { value: 'batman', label: 'Batman' },
                                                    { value: 'robin', label: 'Robin' },
                                                    { value: 'joker', label: 'Joker' },
                                                ]"
                                                />
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            Days available to spend :
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
                                        <td>
                                            <input class="form-input" type="checkbox">
                                            Exclude from minimum spend
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <input class="form-input" type="checkbox">
                                            Exclude from coupon
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <button class="btn btn-success rounded-pill float-right m-4" type="submit" >SAVE</button>    
                        </form>
                    </template>


                    <template v-if="rewardType == 2">
                        <form @submit.prevent="pointSave" action="">
                            <table class="table table-borderless" >
                                <tbody>
                                    <tr>
                                        <td style="width:25%" >Minimum spend:</td>
                                        <td>
                                            <input class="form-input" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Collection   Award %</td>
                                        <td>
                                            <input class="form-input" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Delivery   Award %</td>
                                        <td>
                                            <input class="form-input" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan>
                                            <input class="form-input" type="checkbox"> Apply Point expiry
                                        </td>
                                        <td>
                                            <input class="form-input" type="text"> days
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan>
                                            <input class="form-input" type="checkbox"> Apply maximum award
                                        </td>
                                        <td>
                                            <input class="form-input" type="text"> per order
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Exclude:</b> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <Multiselect
                                                class="form-input"
                                                v-model="value"
                                                mode="tags"
                                                :closeOnSelect="false"
                                                :searchable="true"
                                                :createTag="true"
                                                :options="[
                                                    { value: 'batman', label: 'Batman' },
                                                    { value: 'robin', label: 'Robin' },
                                                    { value: 'joker', label: 'Joker' },
                                                ]"
                                                />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <Multiselect
                                                class="form-input float-left"
                                                v-model="value"
                                                mode="tags"
                                                :closeOnSelect="false"
                                                :searchable="true"
                                                :createTag="true"
                                                :options="[
                                                    { value: 'batman', label: 'Batman' },
                                                    { value: 'robin', label: 'Robin' },
                                                    { value: 'joker', label: 'Joker' },
                                                ]"
                                                />
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            Days available to spend :
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
                                        <td>
                                            <input class="form-input" type="checkbox">
                                            Exclude from minimum spend
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <input class="form-input" type="checkbox">
                                            Exclude from coupon
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <button class="btn btn-success rounded-pill float-right m-4" type="submit" >SAVE</button>    
                        </form>
                    </template>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade" id="model-lg">

    </div>

  </admin-layout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout";
import { Head,Link } from '@inertiajs/inertia-vue3';
import Multiselect from '@vueform/multiselect'

export default {
  components: {
    Head,
    Link,
    AdminLayout,
    Multiselect
  },

  props: {
  },
  data() {
      return {
          rewardType:1,
          value: null,
            options: [
            'Batman',
            'Robin',
            'Joker',
            ]
      };
    },

    methods:{
        pointSave(){

        }
    },
  watch: {
      
  }
};
</script>

<style src="@vueform/multiselect/themes/default.css"></style>