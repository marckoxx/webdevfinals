<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Link, useForm, usePage } from '@inertiajs/vue3';

defineProps({
    status: {
        type: String,
    },
});

const user = usePage().props.auth.user;

const form = useForm({
    name: user.name,
    email: user.email,
    phone_number: user.phone_number,
    address: user.address,
    sex: user.sex,
});
</script>

<template>
    <section>
        <header>
            <h2 class="text-lg font-medium ">Profile Information</h2>
            <p class="mt-1 text-sm text-secondary">
                Update your account's profile information.
            </p>
        </header>

        <form @submit.prevent="form.patch(route('profile.update'))" class="mt-6 space-y-6">
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input id="name" type="text" class="form-control mt-1" v-model="form.name" required autofocus
                    autocomplete="name" />
                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" class="form-control mt-1" v-model="form.email" required
                    autocomplete="username" />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="form-group">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input id="phone_number" type="numeric" class="form-control mt-1" v-model="form.phone_number" required
                    autocomplete="phone_number" />
                <InputError class="mt-2" :message="form.errors.phone_number" />
            </div>

            <div class="form-group">
                <label for="address" class="form-label">Address</label>
                <input id="address" type="text" class="form-control mt-1" v-model="form.address" required
                    autocomplete="address" />
                <InputError class="mt-2" :message="form.errors.address" />
            </div>

            <div class="form-group">
                <InputLabel for="sex" class="form-label">Sex</InputLabel>
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
                <InputError class="mt-2" :message="form.errors.sex" />
            </div>

            <div class="d-flex align-items-center gap-4">
                <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

                <transition enter-active-class="transition ease-in-out" enter-from-class="opacity-0"
                    leave-active-class="transition ease-in-out" leave-to-class="opacity-0">
                    <p v-if="form.recentlySuccessful" class="text-sm text-secondary">Saved.</p>
                </transition>
            </div>
        </form>
    </section>
</template>
