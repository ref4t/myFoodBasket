<template>
  <aside
    class="main-sidebar sidebar-dark-primary elevation-4"
    style="z-index: 100"
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
          <a href="#" class="d-block">Alexander Pierce</a>
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
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <Link :href="route('admin.dashboard.orders.index')" class="nav-link" :class="route().current('admin.dashboard.*') ? 'active' : ' ' " >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Total Orders</p>
                </Link>
              </li>
              <li class="nav-item">
                <Link
                  :href="route('admin.dashboard.transactions')"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transactions</p>
                </Link>
              </li>
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
            <ul class="nav nav-treeview">
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
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-folder"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <Link :href="route('admin.dashboard.orders.index')" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories</p>
                </Link>
              </li>
              <li class="nav-item">
                <Link
                  :href="route('admin.dashboard.transactions')"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Products</p>
                </Link>
              </li>
              <li class="nav-item">
                <Link
                  :href="route('admin.dashboard.transactions')"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bulk Categories</p>
                </Link>
              </li>
              <li class="nav-item">
                <Link
                  :href="route('admin.dashboard.transactions')"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu Options</p>
                </Link>
              </li>
              <li class="nav-item">
                <Link
                  :href="route('admin.dashboard.transactions')"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Import Products and Categories</p>
                </Link>
              </li>
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
            <ul class="nav nav-treeview">
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
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Gallery
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <Link :href="route('admin.dashboard.orders.index')" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gallery Settings</p>
                </Link>
              </li>
              <li class="nav-item">
                <Link
                  :href="route('admin.dashboard.transactions')"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload Gallery</p>
                </Link>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <Link :href="route('admin.customer.index')" class="nav-link" :class="route().current('admin.customer.*') ? 'active' : ' ' ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Customer
              </p>
            </Link>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-object-group"></i>
              <p>
                Layout
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <Link :href="route('admin.dashboard.orders.index')" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gallery Settings</p>
                </Link>
              </li>
              <li class="nav-item">
                <Link
                  :href="route('admin.dashboard.transactions')"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload Gallery</p>
                </Link>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <Link :href="route('admin.dashboard.orders.index')" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Map And Category </p>
                </Link>
              </li>
              <li class="nav-item">
                <a
                  :href="route('admin.dashboard.transactions')"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Shop ettings </p>
                </a>
              </li>
              <li class="nav-item">
                <Link
                  :href="route('admin.dashboard.transactions')"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>App Settings </p>
                </Link>
              </li>
              <li class="nav-item">
                <Link
                  :href="route('admin.dashboard.transactions')"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Open-Close Time </p>
                </Link>
              </li>
              <li class="nav-item">
                <Link
                  :href="route('admin.dashboard.transactions')"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>DElivery/Collection Option</p>
                </Link>
              </li>
              <li class="nav-item">
                <Link
                  :href="route('admin.dashboard.transactions')"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>payment Setting </p>
                </Link>
              </li>
              <li class="nav-item">
                <Link
                  :href="route('admin.dashboard.transactions')"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Social Media Link </p>
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
export default {
  components: {
    Head,
    Link,
  },
  methods: {
    logout() {
      // this.$inertia.post(route('logout'));
    },
  },
};
</script>