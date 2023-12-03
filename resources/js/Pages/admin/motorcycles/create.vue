<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Layout from '@/Layouts/Layout.vue';
import Footer from '@/Layouts/Footer.vue';

const props = defineProps(
    {
        motorcycles: Object,
        brands: Array,
        types: Array,
    }
)

const form = useForm({
    brand_id: '',
    model: '',
    type_id: '',
    year: '',
    daily_rate: '',
    availability: '',
    image: null,
});

const onFileChange = (event) => {
    form.image = event.target.files[0];
};

const submitForm = () => {
    form.post(route('motorcycles.store'), {
        onSuccess: () => {
            // Handle success if needed
        },
        onError: (errors) => {
            // Handle errors if needed
        },
    });
};

</script>

<template>
    <Head title="Create - Motorcycles" />

    <Layout />

    <Head title="Add a Motorcycle" />
    <div class="container">
        <form action="" @submit.prevent="submitForm" enctype="multipart/form-data">
            <div>
                <label for="brand_id">Brand</label>
                <select class="form-control" name="brand_id" id="brand_id" v-model="form.brand_id">
                    <option v-for="brand in brands" :key="brand.id" :value="brand.id">{{ brand.name }}</option>
                </select>
            </div>
            <div>
                <label for="model">Model</label>
                <input class="form-control" type="text" name="model" id="model" v-model="form.model"
                    placeholder="Click 125">
            </div>
            <div>
                <label for="type_id">Type</label>
                <select class="form-control" name="type_id" id="type_id" v-model="form.type_id">
                    <option v-for="mototype in types" :key="mototype.id" :value="mototype.id">{{ mototype.name }}</option>
                </select>
            </div>
            <div>
                <label for="year">Year</label>
                <input class="form-control" type="number" name="year" id="year" v-model="form.year" placeholder="2002">
            </div>
            <div>
                <label for="daily_rate">Daily Rate</label>
                <input class="form-control" type="number" name="daily_rate" id="daily_rate" v-model="form.daily_rate"
                    placeholder="499.00">
            </div>
            <div>
                <label for="availability">Availability</label>
                <select class="form-control" name="availability" id="availability" v-model="form.availability">
                    <option value="1">Available</option>
                    <option value="0">Not Available</option>
                </select>
            </div>
            <div>
                <label for="image">Image</label>
                <input type="file" name="image" id="image" @change="onFileChange">
            </div>
            <button type="submit" :disabled="form.processing">
                Create
            </button>
            <Link :href="route('motorcycles.index')">Go Back</Link>
        </form>
    </div>
    <Footer />
</template>


