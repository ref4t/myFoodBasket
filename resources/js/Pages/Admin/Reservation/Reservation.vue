<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Reservations</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-row-reverse bd-highlight">
                        <Link @click="delete_multiple" as="button" class="btn btn-danger rounded-pill m-2" > DELETE </Link>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-hover text-center" >
                        <thead>
                            <th >
                                <input  @click="select_all()" class="form-input" type="checkbox">
                            </th>
                            						
                            <th>Date & Time</th>
                            <th>Customer Name</th>
                            <th>Customer Email</th>
                            <th>No. of People</th>
                            <th>Reservation Requested For</th>
                            <th>Customer Comment</th>
                            <th >Reservation Status</th>
                            <th style="width:10%" >Action</th>
                        </thead>
                        <tbody>
                            <template v-if="reservations" >
                                <tr v-for="reservation in reservations.data" :key="reservation.id" >
                                    <th>
                                        <input v-if="deleteData.includes(reservation.id)" checked type="checkbox" @click="add_to_delete(reservation.id)" class="form-check">
                                        <input v-else type="checkbox"  @click="add_to_delete(reservation.id)" class="form-check" >
                                    </th>       

                                    <td>{{reservation.booking_time}} {{reservation.booking_date}} </td>
                                    <td>{{ reservation.name }}</td>
                                    <td>{{reservation.email}}</td>
                                    <td>{{reservation.no_of_people}}</td>
                                    <td>{{reservation.name}}</td>
                                    <td>{{reservation.comment}}</td>
                                    <td>
                                        <span class="form-control text-info" v-if="reservation.booking_status == 0" > Pending </span>
                                        <span class="form-control text-success" v-else-if="reservation.booking_status == 1" > Accepted </span>
                                        <span class="form-control text-danger" v-else > Rejected </span>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-row-reverse bd-highlight">
                                            <Link @click="accept(reservation.id)" as="button" class="btn btn-success rounded-pill text-uppercase ml-1 float-right" style="letter-spacing: 0.1em;" >Accept</Link>
                                            <Link @click="reject(reservation.id)" as="button" class="btn btn-warning rounded-pill text-uppercase ml-1 float-right" style="letter-spacing: 0.1em;" >Reject</Link>
                                        </div>
                                        
                                    </td>

                                </tr>
                            </template>
                            <template v-else>
                                <tr>
                                    <td colspan="10" class="text-center" >
                                        No results!!
                                    </td>
                                </tr>
                            </template>

                        </tbody>
                    </table>
                    <div class="card-footer clearfix">
                        <Pagination :links="reservations.links" ></Pagination>
                    </div>
                </div>
            </div>
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
      reservations: Object,
  },
  data() {
      return {
         deleteData:[]
      }
    },

    methods:{
        add_to_delete(id){
            this.deleteData.includes(id)
            ?
            this.deleteData = this.deleteData.filter(rule=>rule!=id)
            :
            this.deleteData.push(id);
        },
        select_all(){
            this.reservations.data.map(reservation=>{
            this.deleteData.includes(reservation.id)
            ?
            this.deleteData = this.deleteData.filter(rule2=>rule2!=reservation.id)
            :
            this.deleteData.push(reservation.id)
            return 0;
            })

        },
        delete_multiple(){
            let con = confirm("Sure want to delete?");

            if (con){
            this.$inertia.post( route('admin.reservation.delete') , this.deleteData,{
            replace: true, 
            preserveState: true})
            this.deleteData = [];
            }

        },
        accept(id){
            let con = confirm("Accept Reservation?");

            if(con){
            this.$inertia.post( route('admin.reservation.accept', {id: id}) ,{
            replace: true, 
            preserveState: true})
            this.deleteData = [];
            }
        },

        reject(id){
            let con = confirm("Reject Reservation?");

            if(con){
            this.$inertia.post( route('admin.reservation.reject',{id: id}) ,{
            replace: true, 
            preserveState: true})
            this.deleteData = [];
            }
        }

    },
  watch: {
      
  }
};
</script>
