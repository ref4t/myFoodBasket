<template>
  <aside
    class="main-sidebar sidebar-dark-primary elevation-4"
    style="z-index: 2000"
  >
    <!-- Brand Logo -->
    <Link :href="route('admin.dashboard')" class="brand-link">
      <span class="brand-text font-weight-light">Admin FoodBasket</span>
    </Link>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">{{auth.firstname}} {{auth.lastname}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul
          class="nav nav-pills nav-sidebar flex-column"
          data-widget="treeview"
          role="menu"
          data-accordion="false"
        >
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <Link :href="route('admin.dashboard')" class="nav-link" :class="route().current('admin.dashboard') ? 'active' : ' ' "  >
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </Link>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link" :class="route().current('admin.dashboard.*') ? 'active' : ' ' "  >
              <i class="nav-icon fab fa-opencart"></i>
              <p>
                Orders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" :style="route().current('admin.dashboard.orders.*') ? 'display: block' : '' ">
              <li class="nav-item">
                <Link :href="route('admin.dashboard.orders.index')" class="nav-link" :class="route().current('admin.dashboard.*') ? 'active' : ' ' " >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Total Orders</p>
                </Link>
              </li>
              <!-- <li class="nav-item">
                <Link
                  
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transactions</p>
                </Link>
              </li> -->
              <li class="nav-item">
                <Link
                  :href="route('admin.dashboard.newOrders')"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Orders</p>
                </Link>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link" :class="route().current('admin.reservation.*') ? 'active' : ' ' "  >
             <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Reservation
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" :style="route().current('admin.reservation.*') ? 'display: block' : '' ">
              <li class="nav-item">
                <Link :href="route('admin.reservation.index')" class="nav-link" :class="route().current('admin.reservation.index') ? 'active' : ' ' " >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reservations</p>
                </Link>
              </li>
              <li class="nav-item">
                <Link
                  :href="route('admin.reservation.setting.index')"
                  class="nav-link"
                  :class="route().current('admin.reservation.setting.*') ? 'active' : ' ' "
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reservation settings</p>
                </Link>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link" :class="route().current('admin.catalog.*') ? 'active' : ' ' " >
              <i class="nav-icon far fa-folder"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" :style="route().current('admin.catalog.*') ? 'display: block' : '' ">
              <li class="nav-item">
                <Link :href="route('admin.catalog.category.index')" class="nav-link" :class="route().current('admin.catalog.category.*') ? 'active' : ' ' ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories</p>
                </Link>
              </li>
              <li class="nav-item">
                <Link
                  :href="route('admin.catalog.product.index')"
                  class="nav-link"
                  :class="route().current('admin.catalog.product.*') ? 'active' : ' ' "
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Products</p>
                </Link>
              </li>
              <!-- <li class="nav-item">
                <Link
                  
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bulk Categories</p>
                </Link>
              </li>
              <li class="nav-item">
                <Link
                  
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu Options</p>
                </Link>
              </li>
              <li class="nav-item">
                <Link
                  
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Import Products and Categories</p>
                </Link>
              </li> -->
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link" :class="route().current('admin.offers.*') ? 'active' : ' ' "  >
              <i class="nav-icon fas fa-bolt"></i>
              <p>
                Offers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" :style="route().current('admin.offers.*') ? 'display: block' : '' ">
              <li class="nav-item">
                <Link :href="route('admin.offers.loyalty.index')" class="nav-link" :class="route().current('admin.offers.loyalty.*') ? 'active' : ' ' "  >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Loyalty</p>
                </Link>
              </li>
              <li class="nav-item">
                <Link
                  :href="route('admin.offers.coupon.index')"
                  class="nav-link"
                  :class="route().current('admin.offers.coupon.*') ? 'active' : ' ' "
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Coupons</p>
                </Link>
              </li>
              <li class="nav-item">
            <a href="#" class="nav-link" :class="route().current('admin.offers.voucher.*') ? 'active' : ' ' " >
              <i class="nav-icon fas fa-money-bill-alt"></i>
              <p>
               Gift Voucher
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <Link :href="route('admin.offers.voucher.index')" class="nav-link" :class="route().current('admin.offers.voucher.*') ? 'active' : ' ' ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gift Voucher</p>
                </Link>
              </li>
              <li class="nav-item">
                <Link
                  :href="route('admin.offers.voucher.theme.index')"
                  :class="route().current('admin.offers.voucher.theme.*')"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Voucher Theme</p>
                </Link>
              </li>

            </ul>
          </li>
              <li class="nav-item">
            <a href="#" class="nav-link" :class="route().current('admin.offers.free.*') ? 'active' : ' ' " >
              <i class="nav-icon fas fa-gift"></i>
              <p>
                Free Item
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <Link :href="route('admin.offers.free.item.index')" class="nav-link" :class="route().current('admin.offers.free.item.*') ? 'active' : ' ' " >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Item</p>
                </Link>
              </li>
              <li class="nav-item">
                <Link
                  :href="route('admin.offers.free.rule.index')" class="nav-link" :class="route().current('admin.offers.free.rule.*') ? 'active' : ' ' "
                  
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cart Rule</p>
                </Link>
              </li>

            </ul>
          </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <Link :href="route('admin.gallery.index')" class="nav-link" :class="route().current('admin.gallery.*') ? 'active' : ' ' ">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Gallery
              </p>
            </Link>
          </li>

          <li v-if="auth.user_group_id == 1" class="nav-item">
            <Link :href="route('admin.customer.index')" class="nav-link" :class="route().current('admin.customer.*') ? 'active' : ' ' ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Customer
              </p>
            </Link>
          </li>

          

          <li class="nav-item">
            <a href="#" class="nav-link" :class="route().current('admin.layout.*') ? 'active' : ' ' " >
              <i class="nav-icon fa fa-object-group"></i>
              <p>
                Layout Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" :style="route().current('admin.layout.*') ? 'display: block' : '' ">
              <li class="nav-item">
                <Link :href="route('admin.layout.layout.index')" class="nav-link" :class="route().current('admin.layout.layout.*') ? 'active' : ' ' ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Layout</p>
                </Link>
              </li>
              <li class="nav-item">
                <Link :href="route('admin.layout.slider.index')" class="nav-link" :class="route().current('admin.layout.slider.*') ? 'active' : ' ' ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider</p>
                </Link>
              </li>
              <li class="nav-item">
                <Link :href="route('admin.layout.category.index')" class="nav-link" :class="route().current('admin.layout.category.*') ? 'active' : ' ' ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </Link>
              </li>
              <li class="nav-item">
                <Link :href="route('admin.layout.item.index')" class="nav-link" :class="route().current('admin.layout.item.*') ? 'active' : ' ' ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Items</p>
                </Link>
              </li>
            </ul>
          </li>

          


          <li class="nav-item">
            <a href="#" class="nav-link" :class="route().current('admin.settings.*') ? 'active' : ' ' " >
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" :style="route().current('admin.settings.*') ? 'display: block' : '' ">
              <li class="nav-item">
                <Link :href="route('admin.settings.cat.index')" class="nav-link" :class="route().current('admin.settings.cat.*') ? 'active' : ' ' ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Map And Category </p>
                </Link>
              </li>
              <li class="nav-item">
                 <Link :href="route('admin.settings.shop.index')" class="nav-link" :class="route().current('admin.settings.shop.*') ? 'active' : ' ' ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Shop Settings </p>
                </Link>
              </li>
              <!-- <li class="nav-item">
                <Link
                  
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>App Settings </p>
                </Link>
              </li> -->
              <li class="nav-item">
                 <Link :href="route('admin.settings.openclose.index')" class="nav-link" :class="route().current('admin.settings.openclose.*') ? 'active' : ' ' ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Open-Close Time </p>
                </Link>
              </li>
              <li class="nav-item">
                 <Link :href="route('admin.settings.delivery.index')" class="nav-link" :class="route().current('admin.settings.delivery.*') ? 'active' : ' ' ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Delivery/Collection Option</p>
                </Link>
              </li>
              <li class="nav-item">
                <Link
                  
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment Setting </p>
                </Link>
              </li>
              <li class="nav-item">
                <Link
                  :href="route('admin.settings.social.index')"
                  class="nav-link"
                  :class="route().current('admin.settings.social.*') ? 'active' : ' ' "
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Social Media Link </p>
                </Link>
              </li>
              <li class="nav-item">
                <Link
                  :href="route('admin.settings.product_icon.index')"
                  class="nav-link"
                  :class="route().current('admin.settings.product_icon.*') ? 'active' : ' ' "
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Icon </p>
                </Link>
              </li>
              <li class="nav-item">
                <Link
                  :href="route('admin.settings.user.index')"
                  class="nav-link"
                  :class="route().current('admin.settings.user.*') ? 'active' : ' ' "
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users </p>
                </Link>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</template>
<script>
import { Head, Link } from "@inertiajs/inertia-vue3";
import { Method } from "@inertiajs/inertia";
 import { usePage } from '@inertiajs/inertia-vue3'
import { computed } from 'vue'
export default {
  components: {
    Head,
    Link,
  },
  setup() {
          const auth = computed(() => usePage().props.value.auth)
          return { auth }
        },
  methods: {
    logout() {
      // this.$inertia.post(route('logout'));
    },
  },
};
</script>