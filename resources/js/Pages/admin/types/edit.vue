<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Layout from '@/Layouts/Layout.vue';
import Footer from '@/Layouts/Footer.vue';

const props = defineProps(
    {
        type: Object
    }
)

const form = useForm(props.type);
</script>

<template>
    <Layout />
        <Head title="Edit a Brand" />
        <form action="" @submit.prevent="form.put(route('types.update', form.id))">
            <div>
                <label for="mototype">Type</label>
                <input class="form-control" type="text" name="mototype" id="mototype" v-model="form.name">
            </div>
            <button type="submit" :disabled="form.processing">
                Update
            </button>
            <Link :href="route('brands.index')">Go Back</Link>
        </form>
    <Footer />
</template>
