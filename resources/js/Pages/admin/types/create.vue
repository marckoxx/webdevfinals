<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Layout from '@/Layouts/Layout.vue';
import Footer from '@/Layouts/Footer.vue';

const props = defineProps(
    {
        brands: Object
    }
)

const form = useForm({
    name: '',
});
</script>

<template>
    <Head title="Create - Types" />
    <Layout />
        <Head title="Add a Type" />
        <form action="" @submit.prevent="form.post(route('types.store'))">
            <div>
                <label for="name">Type</label>
                <input class="form-control" type="text" name="name" id="name" v-model="form.name"
                    placeholder="Scooter">
            </div>
            <button type="submit" :disabled="form.processing">
                Create
            </button>
            <Link :href="route('types.index')">Go Back</Link>
        </form>
    <Footer />
</template>


