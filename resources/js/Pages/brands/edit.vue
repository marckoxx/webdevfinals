<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue'

const props = defineProps(
    {
        brand: Object
    }
)

const form = useForm(props.brand);
</script>

<template>
    <GuestLayout>
        <Head title="Edit a Brand" />
        <form action="" @submit.prevent="form.put(route('brands.update', form.id))">
            <div>
                <label for="brand_name">Brand Name</label>
                <input class="form-control" type="text" name="brand_name" id="brand_name" v-model="form.name"
                    placeholder="Honda">
            </div>
            <button type="submit" :disabled="form.processing">
                Update
            </button>
            <Link :href="route('brands.index')">Go Back</Link>
        </form>
    </GuestLayout>
</template>
