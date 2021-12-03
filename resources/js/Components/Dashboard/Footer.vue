<template>
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-{{ currentDate.getFullYear() }} <Link href="#">Food Basket UK</Link>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0
        </div>
    </footer>
</template>

<script>
    import { Head, Link } from "@inertiajs/inertia-vue3";
    import { Method } from "@inertiajs/inertia";
    export default {
        components: {
            Head,
            Link
        },
        data() {
            return {
                currentDate: new Date,
            }
        }
    }
</script>