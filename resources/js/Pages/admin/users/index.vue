<script setup>
import { Head, Link, useForm, router } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Layout from '@/Layouts/Layout.vue';
import Footer from '@/Layouts/Footer.vue';

const props = defineProps(
    {
        motorcycles: Object
    }
)

const form = useForm(props.motorcycles);

const destroy = (id) => {
    if (confirm('Are you sure?')) {
        form.delete(route('motorcycles.destroy', id))
    }
}

let search = ref('');

watch(search, value => {
    router.get('/motorcycles', { search: value }, { preserveState: true });
});

const resetSearch = () => {
    search.value = '';
};

const getImagePath = (motor) => {
    // Replace 'image_path' with the actual field name storing the image path
    return motor.image_path ? `${window.location.origin}/${motor.image_path}` : ''; // Generate the full image URL
};
</script>

<template>
    <Layout />
        <div class="container my-4">

            <Head title="Index of Motorcycles" />
            <div>
                <Link :href="route('motorcycles.create')" class="btn btn-primary rounded-pill m-1">Add a Motorcycle</Link>
            </div>
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search..." v-model="search">
                <button class="btn btn-secondary" @click="resetSearch">Reset</button>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Barangay</th>
                        <th>Street</th>
                        <th>Sex</th>
                        <th>Is Admin</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <template v-for="motor in motorcycles" :key="motor.id">
                        <tr>
                            <td>{{ motor.id }}</td>
                            <td>{{ motor.brand.name }}</td>
                            <td>{{ motor.model }}</td>
                            <td>{{ motor.type.name }}</td>
                            <td>{{ motor.year }}</td>
                            <td>{{ motor.daily_rate }}</td>
                            <td>{{ motor.availability === 1 ? 'Available' : 'Not available' }}</td>
                            <td>
                                <!-- Display the image if available -->
                                <img :src="getImagePath(motor)" :alt="motor.model"
                                    style="max-width: 100px; max-height: 100px;">
                            </td>
                            <td>
                                <Link :href="route('motorcycles.edit', motor.id)" class="btn btn-primary rounded-pill">Edit
                                </Link>
                            </td>
                            <td><button class="btn btn-danger rounded-pill" @click="destroy(motor.id)">Delete</button></td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>
    <Footer />
</template>


