<script setup>
import { Head, Link, useForm, router } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue'

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
    <GuestLayout>
        <div class="container my-4">

            <Head title="Index of Brands" />
            <div>
                <Link :href="route('index')">Home</Link>
            </div>
            <div>
                <Link :href="route('brands.create')" class="btn btn-primary rounded-pill m-1">Add a brand</Link>
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
    </GuestLayout>
</template>


