<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Card Rules</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-row-reverse bd-highlight">
                        <Link :href="route('admin.offers.free.rule.create')" as="button" class="btn btn-info rounded-pill m-2" > <i class="fas fa-plus-circle"></i> ADD</Link>
                        <Link @click="delete_multiple" as="button" class="btn btn-danger rounded-pill m-2" > DELETE</Link>

                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-hover" >
                        <thead>
                            <th style="width:5%">
                                <input  @click="select_all()" class="form-input" type="checkbox" style="margin-left: 12px" >
                            </th>
                            <th>Cart rule</th>
                            <th>Total Above</th>
                            <th style="width:10%" >Action</th>
                        </thead>
                        <tbody>
                            <template v-if="rules" >
                                <tr v-for="rule in rules.data" :key="rule.id_rule" >
                                    <td>
                                        <input v-if="deleteData.includes(rule.id_rule)" checked type="checkbox" @click="add_to_delete(rule.id_rule)" class="form-check">
                                        <input v-else type="checkbox"  @click="add_to_delete(rule.id_rule)" class="form-check" >
                                    </td>

                                    <td> {{rule.name_rule}} </td>
                                    <td> {{rule.min_total}} </td>

                                    <td>
                                        <Link :href="route('admin.offers.free.rule.edit', { id: rule.id_rule })" as="button" class="btn btn-warning rounded-pill text-uppercase ml-1 float-right" style="letter-spacing: 0.1em;" >Edit</Link>
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
                        <Pagination :links="rules.links" ></Pagination>
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
      rules: Object,
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
            console.log(this.deleteData)
        },
        select_all(){
            this.rules.data.map(rule=>{
            this.deleteData.includes(rule.id_rule)
            ?
            this.deleteData = this.deleteData.filter(rule2=>rule2!=rule.id_rule)
            :
            this.deleteData.push(rule.id_rule)
            return 0;
            })

            console.log(this.deleteData)
        },
        delete_multiple(){
            let con = confirm("Sure want to delete?");

            if (con){
            this.$inertia.post( route('admin.offers.free.rule.delete') , this.deleteData,{
            replace: true, 
            preserveState: true})
            this.deleteData = [];
            }
            console.log(this.deleteData)

        },

    },
  watch: {
      
  }
};
</script>
