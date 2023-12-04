<script setup>
import { Head, Link, useForm, router } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Layout from '@/Layouts/Layout.vue';
import Footer from '@/Layouts/Footer.vue';
import sidepanel from '@/Layouts/sidepanel.vue'
const props = defineProps(
    {
        users: Object,
        barangays: Array,
    }
)

const form = useForm(props.users);

const destroy = (id) => {
    if (confirm('Are you sure?')) {
        form.delete(route('users.destroy', id))
    }
}

let search = ref('');

watch(search, value => {
    router.get('/admin/users', { search: value }, { preserveState: true });
});

const resetSearch = () => {
    search.value = '';
};

</script>

<template>
    <Head title="Index of Users" />
    <div class="container-fluid">
        <div class="row">
            <sidepanel />
            <div class="p-0 col-lg-10 " style="height: 100vh;">
            <Layout />
                <div class="col-sm-2 col-lg-6 order-sm-1 mt-4 ms-4">
                    <h2 class="fw-bold">User Management</h2>
                </div>
                <div class="ms-auto mt-n1 col-auto pe-3 mt-3">
                        <div class="row my-4">
                            <div class="col-sm-6 col-lg-6">
                                <Link :href="route('users.create')" class="btn rounded-pill m-1 fw-bold mx-5" style="background-color: #FFFFD0; border: 1px solid;">Add a User</Link>
                            </div>
                            <div class="col-sm-3 col-lg-3 w-30 ms-5 my-3"> <!-- Adjusted width to 75% -->
                                <div class="position-relative mb-lg-2 d-flex align-items-center">
                                    <i class="ai-search fs-lg me-2"></i>
                                    <input class="form-control rounded-pill flex-grow-1" style="border: 1px solid;" type="search" placeholder="Enter keywords.." v-model="search">
                                </div>
                            </div>
                        </div>
                        <table class="table mx-5 w-75">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Barangay</th>
                                <th>Street</th>
                                <th>Sex</th>
                                <th>Usertype</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-for="user in users" :key="user.id">
                                <tr>
                                    <td>{{ user.id }}</td>
                                    <td>{{ user.name }}</td>
                                    <td>{{ user.email }}</td>
                                    <td>{{ user.phone_number }}</td>
                                    <td>{{ user.barangay.name }}</td>
                                    <td>{{ user.street }}</td>
                                    <td>{{ user.sex }}</td>
                                    <td>{{ user.is_admin === 1 ? 'Admin' : 'User' }}</td>
                                    <td>
                                        <Link :href="route('users.edit', user.id)" class="btn btn-primary rounded-pill">Edit
                                        </Link>
                                    </td>
                                    <td><button class="btn btn-danger rounded-pill" @click="destroy(user.id)">Delete</button></td>
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


