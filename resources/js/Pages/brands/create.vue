<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue'

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
    <GuestLayout>
        <Head title="Add a Brand" />
        <form action="" @submit.prevent="form.post(route('brands.store'))">
            <div>
                <label for="brand_name">Barangay Name</label>
                <input class="form-control" type="text" name="brand_name" id="brand_name" v-model="form.name"
                    placeholder="Honda">
            </div>
            <button type="submit" :disabled="form.processing">
                Create
            </button>
            <Link :href="route('brands.index')">Go Back</Link>
        </form>
    </GuestLayout>
</template>


