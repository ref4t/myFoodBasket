<template>
    <nav class="main-header navbar navbar-expand navbar-dark" style="z-index:900">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"
              ><i class="fas fa-bars"></i
            ></a>
          </li>
          <!-- Navbar Search -->
          <li v-if="auth.user_group_id == 1" class="nav-item">
              <select v-model="this.select" class="form-control bg-dark flaot-left" style="width:30vw" @change="changeSelect(this.select)" >
                <option value="0">Store Front</option>
                <option v-for="store in stores" :key="store.store_id" :value="store.store_id"> {{ decodeHtml(store.name) }} </option>
              </select>
            
          </li>
          <li v-else class="nav-item">
                <input class="form-control bg-dark flaot-left" style="width:30vw" type="text" :value="decodeHtml(store_name)" readonly >
              
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          

          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="fas fa-user m-2" ></i>
              <i class="fas fa-sort-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header"
                > {{auth.firstname}} {{auth.lastname}} </span
              >
              <div class="dropdown-divider"></div>
              <Link :href="route('admin.logout')" class="dropdown-item">
                <i class="fas fa-sign-out-alt m-2"></i> Logout ( <b>{{ auth.username }}</b> )
                <!-- <span class="float-right"></span> -->
              </Link>
              <!-- <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer"
                >See All Notifications</a
              > -->
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
          
        </ul>
      </nav> 
</template>
<script>
    import { Head, Link } from "@inertiajs/inertia-vue3";
    import { Method } from "@inertiajs/inertia";
    import { computed } from 'vue'
    import { usePage } from '@inertiajs/inertia-vue3'
    export default {
        components: {
            Head,
            Link
        },
        props:{
          
        },
        data(){
          return{
            select: this.store_id
          }
        },
        setup() {
          const stores = computed(() => usePage().props.value.stores)
          const store_id = computed(() => usePage().props.value.store_id)
          const store_name = computed(() => usePage().props.value.store_name.name)
          const auth = computed(() => usePage().props.value.auth)
          return { stores,store_id,auth ,store_name}
        },
        methods:{
          decodeHtml(html) {
              var txt = document.createElement("textarea");
              txt.innerHTML = html;
              return txt.value;
          },
          changeSelect(id){

            this.$inertia.post( route('dashboard.store_select', [id]),{
            replace: true, 
            preserveState: true})

          }
        }
    }
</script>