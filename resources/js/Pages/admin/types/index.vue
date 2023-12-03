<script setup>
import { Head, Link, useForm, router } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Layout from '@/Layouts/Layout.vue';
import Footer from '@/Layouts/Footer.vue';

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
    <Layout />
        <div class="container my-4">

            <Head title="Index of Types" />
            <div>
                <Link :href="route('types.create')" class="btn btn-primary rounded-pill m-1">Add a Motorcycle Type</Link>
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
    <Footer />
</template>


