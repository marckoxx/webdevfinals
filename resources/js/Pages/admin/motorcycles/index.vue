<script setup>
import { Head, Link, useForm, router } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Layout from '@/Layouts/Layout.vue';
import sidepanel from '@/Layouts/sidepanel.vue'

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
    router.get('/admin/motorcycles', { search: value }, { preserveState: true });
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
    <Head title="Index - Motorcycles" />
    <div class="container-fluid">
        <div class="row">
            <sidepanel />
            <div class="p-0 col-lg-10 " style="height: 100vh;">
            <Layout />
                <div class="col-sm-2 col-lg-6 order-sm-1 mt-5 ms-4">
                    <Link class="btn" :href="route('management')">
                        <i class="back-btn fa-solid fa-circle-arrow-left " style="font-size: 20px; color: blueviolet;">  Manage Motorcycle </i>
                    </Link>

                </div>
            <div class="ms-auto  mt-n1 col-auto pe-3 mt-3 ">
                <div class="row my-4">
                    <div class="col-sm-6 col-lg-6">
                        <Link :href="route('motorcycles.create')" class="btn rounded-pill m-1 fw-bold mx-5" style="background-color: #FFFFD0; border: 1px solid;">Add a Motorcycle</Link>
                    </div>
                    <div class="col-sm-3 col-lg-3 w-30 ms-5 my-3"> <!-- Adjusted width to 75% -->
                                <div class="position-relative mb-lg-2 d-flex align-items-center">
                                    <i class="ai-search fs-lg me-2"></i>
                                    <input class="form-control rounded-pill flex-grow-1" style="border: 1px solid;" type="search" placeholder="Enter keywords.." v-model="search">
                                </div>
                            </div>
                </div>
                <table class="table w-75 ms-5">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Type</th>
                            <th>Year</th>
                            <th>Daily Rate</th>
                            <th>Availability</th>
                            <th>Image</th>
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
                                    <img :src="getImagePath(motor)" :alt="motor.model" style="max-width: 100px; max-height: 100px;">
                                </td>
                                <td>
                                    <Link :href="route('motorcycles.edit', motor.id)" class="btn btn-primary rounded-pill">Edit</Link>
                                </td>
                                <td><button class="btn btn-danger rounded-pill" @click="destroy(motor.id)">Delete</button></td>
                            </tr>
                        </template>
                    </tbody>
                </table>

            </div>
        </div>
        </div>
    </div>

</template>
<style scope>

.btn {
    height: auto;
    transition: 1s ease;
}


.btn:hover {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
    transition: 1s ease;
    transition: 1s ease;
}

</style>

