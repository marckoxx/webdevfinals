<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    phone_number: '',
    address: '',
    sex: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>
        <div class="container">

            <Head title="Register" />

            <form @submit.prevent="submit">
                <div class="mb-3">
                    <InputLabel for="name" value="Name" />
                    <TextInput id="name" type="text" class="form-control mt-1" v-model="form.name" required autofocus
                        autocomplete="name" />
                    <InputError class="mt-2" :message="form.errors.name" />
                </div>

                <div class="mb-3">
                    <InputLabel for="email" value="Email" />
                    <TextInput id="email" type="email" class="form-control mt-1" v-model="form.email" required
                        autocomplete="username" />
                    <InputError class="mt-2" :message="form.errors.email" />
                </div>

                <div class="mb-3">
                    <InputLabel for="phone_number" value="Phone Number" />
                    <TextInput id="phone_number" type="tel" class="form-control mt-1" v-model="form.phone_number" required
                        autocomplete="tel" />
                    <InputError class="mt-2" :message="form.errors.phone_number" />
                </div>

                <div class="mb-3">
                    <InputLabel for="address" value="Address" />
                    <TextInput id="address" type="text" class="form-control mt-1" v-model="form.address" required
                        autocomplete="address" />
                    <InputError class="mt-2" :message="form.errors.address" />
                </div>

                <div class="mb-3">
                    <InputLabel for="sex">Sex</InputLabel>
                    <div class="form-check">
                        <input id="male" type="radio" class="form-check-input" value="male" v-model="form.sex">
                        <label for="male" class="form-check-label">Male</label>
                    </div>
                    <div class="form-check">
                        <input id="female" type="radio" class="form-check-input" value="female" v-model="form.sex">
                        <label for="female" class="form-check-label">Female</label>
                    </div>
                    <div class="form-check">
                        <input id="other" type="radio" class="form-check-input" value="other" v-model="form.sex">
                        <label for="other" class="form-check-label">Other</label>
                    </div>
                    <p v-if="form.errors.sex" class="mt-2 text-danger"></p>
                </div>

                <div class="mb-3">
                    <InputLabel for="password" value="Password" />

                    <TextInput id="password" type="password" class="form-control mt-1" v-model="form.password" required
                        autocomplete="new-password" />

                    <InputError class="mt-2" :message="form.errors.password" />
                </div>

                <div class="mb-3">
                    <InputLabel for="password_confirmation" value="Confirm Password" />

                    <TextInput id="password_confirmation" type="password" class="form-control mt-1"
                        v-model="form.password_confirmation" required autocomplete="new-password" />

                    <InputError class="mt-2" :message="form.errors.password_confirmation" />
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <Link :href="route('login')" class="text-muted text-sm">
                    Already registered?
                    </Link>

                    <PrimaryButton class="ms-4" :class="{ 'disabled': form.processing }" :disabled="form.processing">
                        Register
                    </PrimaryButton>
                </div>
            </form>
        </div>
    </GuestLayout>
</template>
