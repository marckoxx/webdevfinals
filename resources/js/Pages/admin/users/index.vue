<script setup>
import { Head, Link, useForm, router } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Layout from '@/Layouts/Layout.vue';
import Footer from '@/Layouts/Footer.vue';

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
    <Layout />
        <div class="container my-4">

            <Head title="Index of Users" />
            <div>
                <Link :href="route('users.create')" class="btn btn-primary rounded-pill m-1">Add a User</Link>
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
    <Footer />
</template>


