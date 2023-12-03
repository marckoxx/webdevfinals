<template>
    <Head title="Management" />
    <Layout />
    <main class="container">

        <h1 class="mt-4">Management</h1>

        <ul class="list-group">
            <li class="list-group-item"><Link :href="route('motorcycles.index')" class="btn ">Manage Motorcycles</Link></li>
            <li class="list-group-item"><Link :href="route('brands.index')" class="btn ">Manage Motorcycle Brands</Link></li>
            <li class="list-group-item"><Link :href="route('types.index')" class="btn ">Manage Motorcycle Types</Link></li>
            <li class="list-group-item"><Link :href="route('users.index')" class="btn ">Manage Users</Link></li>
        </ul>
    </main>
    <Footer />
</template>


<script setup>
import Layout from '@/Layouts/Layout.vue';
import Footer from '@/Layouts/Footer.vue';
import { ref, defineProps, onMounted } from 'vue';
import { router, Link, usePage } from '@inertiajs/vue3';

</script>
