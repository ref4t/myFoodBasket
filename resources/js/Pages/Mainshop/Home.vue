<template>
    <Head title="Home">
        <link rel="stylesheet" href="/css/mainshop/bootstrap.css">
        <link rel="stylesheet" href="/css/mainshop/theme.css">
        <link rel="stylesheet" href="/css/mainshop/style_new.css">
    </Head>
    <MainshopHeader/>
    <MainshopBody/>
    <MainshopFooter/>
</template> 

<script>
import MainshopHeader from '@/Pages/Mainshop/Header.vue';
import MainshopBody from '@/Pages/Mainshop/Body.vue';
import MainshopFooter from '@/Pages/Mainshop/Footer.vue';
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Head,
        MainshopHeader,
        MainshopBody,
        MainshopFooter,
    },
};
</script>
