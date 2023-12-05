<script setup>
import { Head, Link, useForm, router } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Layout from '@/Layouts/Layout.vue';
import sidepanel from '@/Layouts/sidepanel.vue'
const props = defineProps(
    {
        types: Object
    }
)

const form = useForm(props.types);

const destroy = (id) => {
    if (confirm('Are you sure?')) {
        form.delete(route('types.destroy', id))
    }
}

let search = ref('');

watch(search, value => {
    router.get('/types', { search: value }, { preserveState: true });
});

const resetSearch = () => {
    search.value = '';
};
</script>

<template>
            <Head title="Index - Types" />
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
                                <Link :href="route('types.create')" class="btn rounded-pill m-1 fw-bold mx-5" style="background-color: #FFFFD0; border: 1px solid;">Add a Motorcycle Type</Link>
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
                                <th>Name</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-for="mototype in types" :key="mototype.id">
                                <tr>
                                    <td>{{ mototype.id }}</td>
                                    <td>{{ mototype.name }}</td>
                                    <td>
                                        <Link :href="route('types.edit', mototype.id)" class="btn btn-primary rounded-pill">Edit</Link>
                                    </td>
                                    <td><button class="btn btn-danger rounded-pill" @click="destroy(mototype.id)">Delete</button></td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                        </div>
                </div>
            </div>
        </div>
</template>


