<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Users</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-row-reverse bd-highlight">
                        <Link :href="route('admin.settings.user.create')" as="button" class="btn btn-info rounded-pill m-2" > INSERT</Link>
                        <Link @click="delete_multiple" as="button" class="btn btn-danger rounded-pill m-2" > DELETE</Link>

                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th style="width:20px" >
                                    <input  @click="select_all()" class="form-input" type="checkbox">
                                </th>
                                <th @click="sort('username')">
                                    <Link >
                                        Users
                                        <i
                                            v-if="
                                            params.field == 'username' &&
                                            params.direction == 'asc'
                                            "
                                            class="fas fa-chevron-down float-right"
                                        ></i>
                                        <i
                                            v-if="
                                            params.field == 'username' &&
                                            params.direction == 'desc'
                                            "
                                            class="fas fa-chevron-up float-right"
                                        ></i>
                                    </Link>
                                </th>
                                <th @click="sort('status')">
                                    <Link >
                                        Status
                                        <i
                                            v-if="
                                            params.field == 'status' &&
                                            params.direction == 'asc'
                                            "
                                            class="fas fa-chevron-down float-right"
                                        ></i>
                                        <i
                                            v-if="
                                            params.field == 'status' &&
                                            params.direction == 'desc'
                                            "
                                            class="fas fa-chevron-up float-right"
                                        ></i>
                                    </Link>
                                </th>
                                <th @click="sort('date_added')">
                                    <Link >
                                        Date Added
                                        <i
                                            v-if="
                                            params.field == 'date_added' &&
                                            params.direction == 'asc'
                                            "
                                            class="fas fa-chevron-down float-right"
                                        ></i>
                                        <i
                                            v-if="
                                            params.field == 'date_added' &&
                                            params.direction == 'desc'
                                            "
                                            class="fas fa-chevron-up float-right"
                                        ></i>
                                    </Link>
                                </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-if="users" >
                                <tr v-for="user in users.data" :key="user" >
                                    <th>
                                        <input v-if="deleteData.includes(user.user_id)" checked type="checkbox" @click="add_to_delete(user.user_id)" class="form-check">
                                        <input v-else type="checkbox"  @click="add_to_delete(user.user_id)" class="form-check" >
                                    </th>
                                    <td>{{user.username}}</td>
                                    <td>
                                        <span v-if="user.status == 1" >Enable</span>
                                        <span v-else>Disable</span>
                                    </td>
                                    <td> {{user.date_added}} </td>
                                    <td>
                                        <Link :href="route('admin.settings.user.edit', { id: user.user_id })" as="button" class="btn btn-warning rounded-pill text-uppercase ml-1 float-right" style="letter-spacing: 0.1em;" >Edit</Link>
                                    </td>

                                </tr>
                            </template>
                            <template v-else>
                                <tr  >
                                    <td colspan="9" class="text-center" >
                                        No results!!
                                    </td>
                                </tr>
                            </template>

                        </tbody>
                    </table>
                    <div class="card-footer clearfix">
                        <Pagination :links="users.links" ></Pagination>
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
      users: Object,
      groups: Object,
      filters: Object
  },
  data() {
      return {
         deleteData:[],
         params: {
            field: this.filters.field,
            direction: this.filters.direction,
        },
      }
    },

    methods:{
        add_to_delete(id){
            this.deleteData.includes(id)
            ?
            this.deleteData = this.deleteData.filter(item=>item!=id)
            :
            this.deleteData.push(id);
            
        },
        select_all(){
            this.users.data.map(item=>{
            this.deleteData.includes(item.user_id)
            ?
            this.deleteData = this.deleteData.filter(item2=>item2!=item.user_id)
            :
            this.deleteData.push(item.user_id)
            return 0;
            })

        },
        delete_multiple(){
            let con = confirm("Sure want to delete?");

            if (con){
            this.$inertia.post( route('admin.settings.user.delete') , this.deleteData,{
            replace: true, 
            preserveState: true})
            this.deleteData = [];
            }
            

        },
        sort(field) {
            this.params.field = field;
            this.params.direction = this.params.direction === "asc" ? "desc" : "asc";
        },

    },
    watch: {
        params: {
        handler() {
            let params = this.params;
            Object.keys(params).forEach((key) => {
            if (params[key] == "") {
                delete params[key];
            }
            });


            this.$inertia.get(this.route("admin.settings.user.index"), params, {
            replace: true,
            preserveState: true,
            });
        },
        deep: true,
        },
    },
};
</script>
