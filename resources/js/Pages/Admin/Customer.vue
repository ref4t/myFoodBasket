<template>
    <admin-layout>
        <template v-slot:header>
            <h1 class="m-0">CUSTOMERS</h1>
        </template>
        
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        
                        <div class="card">
                            <div class="card-header">
                                  <button @click="select_all()" id="check_all" class="btn btn-success rounded-pill" > SELECT ALL </button>
                                <div class="float-right">
                                    <div class="form-inline">
                                        <div class="input-group ">
                                            <button  class="btn btn-info rounded-pill" style="margin-right:10px" > APPROVED </button>
                                            <Link :href="route('admin.customer.create')" as="button" class="btn btn-success rounded-pill" style="margin-right:10px"> INSERT </Link>
                                            <button v-if="deleteData.length" @click="delete_multiple" class="btn btn-danger rounded-pill" > DELETE ({{deleteData.length}})</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-bordered table-hover text-nowrap text-center" >
                                    <thead class="thead-primary" >
                                        <tr>
                                            <th>
                                               
                                            </th>
                                            <th class="text-capitalize">
                                                <Link @click="sort('firstname')" >
                                                Customer Name
                                                <i v-if="params.field == 'firstname' && params.direction == 'asc'" class="fas fa-chevron-down"></i> 
                                                <i v-if="params.field == 'firstname' && params.direction == 'desc'" class="fas fa-chevron-up"></i>
                                                </Link>
                                            </th>
                                            <th class="text-capitalize">
                                                Shop
                                            </th>
                                            <th class="text-capitalize">
                                                <Link @click="sort('email')" >
                                                Email
                                                <i v-if="params.field == 'email' && params.direction == 'asc'" class="fas fa-chevron-down"></i> 
                                                <i v-if="params.field == 'email' && params.direction == 'desc'" class="fas fa-chevron-up"></i>
                                                </Link>
                                            </th>
                                            <th class="text-capitalize">
                                                <Link @click="sort('customer_group_id')" >
                                                Customer Group
                                                <i v-if="params.field == 'customer_group_id' && params.direction == 'asc'" class="fas fa-chevron-down"></i> 
                                                <i v-if="params.field == 'customer_group_id' && params.direction == 'desc'" class="fas fa-chevron-up"></i>
                                                </Link>
                                            </th>
                                            <th class="text-capitalize">
                                                <Link @click="sort('status')" >
                                                Status
                                                <i v-if="params.field == 'status' && params.direction == 'asc'" class="fas fa-chevron-down"></i> 
                                                <i v-if="params.field == 'status' && params.direction == 'desc'" class="fas fa-chevron-up"></i>
                                                </Link>
                                            </th>
                                            <th class="text-capitalize">
                                                <Link @click="sort('approved')" >
                                                Approved
                                                <i v-if="params.field == 'approved' && params.direction == 'asc'" class="fas fa-chevron-down"></i> 
                                                <i v-if="params.field == 'approved' && params.direction == 'desc'" class="fas fa-chevron-up"></i>
                                                </Link>
                                            </th>
                                            <th class="text-capitalize">
                                                <Link @click="sort('ip')" >
                                                IP
                                                <i v-if="params.field == 'ip' && params.direction == 'asc'" class="fas fa-chevron-down"></i> 
                                                <i v-if="params.field == 'ip' && params.direction == 'desc'" class="fas fa-chevron-up"></i>
                                                </Link>
                                            </th>
                                            <th class="text-capitalize">
                                                <Link @click="sort('date_added')" >
                                                Date Added
                                                <i v-if="params.field == 'date_added' && params.direction == 'asc'" class="fas fa-chevron-down"></i> 
                                                <i v-if="params.field == 'date_added' && params.direction == 'desc'" class="fas fa-chevron-up"></i>
                                                </Link>
                                            </th>
                                            <th class="text-capitalize">
                                                Login into Store
                                            </th>
                                            <th class="text-capitalize">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <!-- search -->
                                            <td></td>
                                            <td>
                                                <input
                                                type="search"
                                                v-model="params.fname"
                                                class="form-control rounded"
                                                placeholder=" Name"
                                                aria-label="Search"
                                                aria-describedby="search-addon"
                                                />
                                            </td>
                                            <td></td>
                                            <td>
                                                <input
                                                type="search"
                                                v-model="params.email"
                                                class="form-control rounded"
                                                placeholder="Email"
                                                aria-label="Search"
                                                aria-describedby="search-addon"
                                                />
                                            </td>
                                            <td>
                                                <select class="form-control rounded" name="" id="">
                                                    <option value=""></option>
                                                    <option value="">default</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control rounded" name="" id="">
                                                    <option value=""></option>
                                                    <option value="">Enable</option>
                                                    <option value="">Disabled</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control rounded" name="" id="">
                                                    <option value=""></option>
                                                    <option value="">Yes</option>
                                                    <option value="">No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input
                                                type="search"
                                                v-model="params.ip"
                                                class="form-control rounded"
                                                placeholder="Ip Address"
                                                aria-label="Search"
                                                aria-describedby="search-addon"
                                                />
                                            </td>
                                            <td>
                                                <!-- date picker -->
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                        <tr v-for="customer in customers.data" :key="customer.customer_id" >
                                            <td>
                                                <input v-if="deleteData.includes(customer.customer_id)" checked @click="add_to_delete(customer.customer_id)" type="checkbox"  class="form-check">
                                                <input v-else type="checkbox"  @click="add_to_delete(customer.customer_id)" class="form-check" >
                                            </td>
                                            <td> {{customer.firstname}} {{ customer.lastname}} </td>
                                            <td v-if="customer.get_store" >{{customer.get_store.name}}</td>
                                            <td v-else >NULL</td>
                                            <td>{{ customer.email }}</td>
                                            <td>{{customer.get_group.name}}</td>
                                            <td v-if="customer.status">Enable</td>
                                            <td v-else>Disable</td>
                                            <td v-if="customer.approved" >Yes</td>
                                            <td v-else>No</td>
                                            <td> {{customer.ip}} </td>
                                            <td> {{customer.date_added}} </td>
                                            <td>
                                                <select class="form-control rounded">
                                                    <option value="">--Please Select--</option>
                                                    <option v-for="shop in shops" :key="shop.store_id" :value="shop.store_id" >{{shop.name}}</option>
                                                </select>
                                            </td>
                                            <td>
                                                
                                                 <Link :href="route('admin.customer.edit', { id: customer.customer_id })" as="button" class="btn btn-warning text-uppercase ml-1" style="letter-spacing: 0.1em;" >Edit</Link>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer clearfix">
                                <Pagination :links="customers.links"></Pagination>
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
import Pagination from "@/Components/Pagination";
import { Head, Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        AdminLayout,
        Pagination,
        Head,
        Link

    },
    props:{
        customers:Object,
        filters:Object,
        shops:Object,
    },
    created(){
        console.log(this.customers.data[0].get_store.name)
    },
    data(){
        return{
            deleteData:[],
            selected: "",
            params: {
                fname: this.filters.fname,
                email: this.filters.email,
                ip: this.filters.ip,
                field: this.filters.field,
                direction: this.filters.direction,
             },
        }
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


            this.$inertia.get(this.route("admin.customer"), params, {
            replace: true,
            preserveState: true,
            });
        },
        deep: true,
        },
    },
    methods: {
        sort(field){
            this.params.field = field;
            this.params.direction = this.params.direction === 'asc' ? 'desc' : 'asc';
        },
        add_to_delete(id){
            this.deleteData.includes(id)
            ?
            this.deleteData = this.deleteData.filter(item=>item!=id)
            :
            this.deleteData.push(id);

            console.log(this.deleteData)
        },
        select_all(){
            this.customers.data.map(item=>{
                this.deleteData.includes(item.customer_id)
                ?
                this.deleteData = this.deleteData.filter(item2=>item2!=item.customer_id)
                :
                this.deleteData.push(item.customer_id)
                return 0;
            })
            console.log(this.deleteData)
        },
        delete_multiple(){
            let con = confirm("Sure want to delete?");
            // this.flash('Hello World', 'success', {
            //   timeout: 3000,
            //   beforeDestroy() {
            //     alert('oh no, not again!');
            //   }
            // });

            

            if (con){
                this.$inertia.post( route('admin.customer.delete') , this.deleteData,{
                replace: true, 
                preserveState: true})
                this.deleteData = [];
            }

            
        },
    }
    
}
</script>