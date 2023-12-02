<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Layout from '@/Layouts/Layout.vue';
import Footer from '@/Layouts/Footer.vue';

const props = defineProps(
    {
        barangays: Object,
    }
)

const form = useForm({
    name: '',
    password: '',
    password_confirmation: '',
    email: '',
    phone_number: '',
    barangay_id: '',
    street: '',
    sex: '',
});

const submitForm = () => {
    form.post(route('users.store'), {
        onSuccess: () => {
            // Handle success if needed
        },
        onError: (errors) => {
            // Handle errors if needed
        },
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};

</script>

<template>
    <Layout />

    <Head title="Add a User" />
    <div class="container">
        <form action="" @submit.prevent="submitForm" enctype="multipart/form-data">
            <div>
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" v-model="form.name">
            </div>
            <div>
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email" v-model="form.email" />
            </div>
            <div>
                <label for="phone_number">Phone Number</label>
                <input class="form-control" type="numeric" name="phone_number" id="phone_number"
                    v-model="form.phone_number" />
            </div>
            <div>
                <label for="barangay_id">Barangay</label>
                <select class="form-control" name="barangay_id" id="barangay_id" v-model="form.barangay_id">
                    <option value="">Select Barangay</option>
                    <option v-for="barangay in barangays" :key="barangay.id" :value="barangay.id">{{ barangay.name }}
                    </option>
                </select>
            </div>
            <div>
                <label for="street">Street</label>
                <input class="form-control" type="text" name="street" id="street" v-model="form.street"
                    placeholder="499.00">
            </div>
            <div>
                <label for="sex">Sex</label>
                <select id="sex" name="sex" class="form-control" v-model="form.sex" required>
                    <option value="">Select Sex</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                <InputError class="mt-2" :message="form.errors.sex" />
            </div>
            <div>
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control" v-model="form.password" required
                    autocomplete="new-password" />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>
            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" type="password" class="form-control" v-model="form.password" required
                    autocomplete="new-password" />
                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>
            <button class="btn btn-primary" type="submit" :disabled="form.processing">
                Create
            </button>
            <Link :href="route('users.index')" class="btn">Go Back</Link>
        </form>
    </div>
    <Footer />
</template>


