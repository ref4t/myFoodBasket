<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Card Rules / Add</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form @submit.prevent="submit(rule, items)" action="" method="post">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <Link :href="route('admin.offers.free.rule.index')" as="button" class="btn btn-warning rounded-pill m-2" type="submit" > CANCEL</Link>

                            <button class="btn btn-success rounded-pill m-2" type="submit" > <i class="fas fa-plus-circle"></i> ADD</button>
                            
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table" >
                            <tbody>
                                <tr >
                                    <td  style="width:25%">Item Name:</td>
                                    <td>
                                        <input v-model="this.rule.name_rule" class="form-input" type="text">
                                    </td>
                                </tr>
                                <tr >
                                    <td  style="width:25%">Free Item:</td>
                                    <td>
                                        <div v-for="(item,index) in free_items" :key="index" class="form-check form-check-inline ">
                                            <input v-if="items.includes(item.id_free_item)" class="form-check-input" type="checkbox" @click="add_item(item.id_free_item)" checked >
                                            <input v-else class="form-check-input  " type="checkbox" @click="add_item(item.id_free_item)" >
                                            <label class="form-check-label" for="inlinecheckbox1">{{item.name_item}}</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr >
                                    <td  style="width:25%">Total Above:</td>
                                    <td>
                                        <input v-model="this.rule.min_total" class="form-input" type="text">
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

export default {
  components: {
    Head,
    Link,
    AdminLayout,
    Pagination
  },

  props: {
      rule: Object,
      free_items: Object
  },
  data() {
      return {
          
          items:[]
      }
    },

    created(){

        let s = this.rule.id_item;
        this.items = s.split(":");

        this. items = this.items.map(Number);
        console.log(this.items)
    },

    methods:{
        add_item(id){
            this.items.includes(id)
            ?
            this.items = this.items.filter(rule=>rule!=id)
            :
            this.items.push(id);
            console.log(this.items)
        },
        submit(rule,items){
            this.$inertia.post(this.route('admin.offers.free.rule.update',{rule,items},{
                    replace: true, 
                    preserveState: true
                    }))
        }

    },
  watch: {
      
  }
};
</script>
