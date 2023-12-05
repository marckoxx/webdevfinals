<script setup>
import { Head, Link, useForm, router } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Layout from '@/Layouts/Layout.vue';


import sidepanel from '@/Layouts/sidepanel.vue'
const props = defineProps(
    {
        brands: Object
    }
)

const form = useForm(props.brands);

const destroy = (id) => {
    if (confirm('Are you sure?')) {
        form.delete(route('brands.destroy', id))
    }
}

let search = ref('');

watch(search, value => {
    router.get('/brands', { search: value }, { preserveState: true });
});

const resetSearch = () => {
    search.value = '';
};
</script>

<template>
    <Head title="Index - Brands" />
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
                            <div class="col-sm-3 col-lg-3 w-30 ms-5 my-3"> <!-- Adjusted width to 75% -->
                                <div class="position-relative mb-lg-2 d-flex align-items-center">
                                    <i class="ai-search fs-lg me-2"></i>
                                    <input class="form-control rounded-pill flex-grow-1" style="border: 1px solid;" type="search" placeholder="Enter keywords.." v-model="search">
                                </div>
                            </div>
                            <table class="table mx-5 ">
                                <thead >
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template v-for="brand in brands" :key="brand.id">
                                        <tr>
                                            <td>{{ brand.id }}</td>
                                            <td>{{ brand.name }}</td>
                                            <td>
                                                <Link :href="route('brands.edit', brand.id)" class="btn btn-primary rounded-pill">Edit</Link>
                                            </td>
                                            <td><button class="btn btn-danger rounded-pill" @click="destroy(brand.id)">Delete</button></td>
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    <Footer />
</template>


