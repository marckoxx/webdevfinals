<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Link, useForm, usePage } from '@inertiajs/vue3';

const props = defineProps({
    barangays: Array,
    status: {
        type: String,
    },
});

const user = usePage().props.auth.user;

const form = useForm({
    name: user.name,
    email: user.email,
    phone_number: user.phone_number,
    barangay_id: user.barangay_id,
    street: user.street,
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

            <div class="mb-3">
                <label for="barangay_id" class="form-label">Barangay</label>
                <select id="barangay_id" name="barangay_id" class="form-control mt-1" v-model="form.barangay_id" required>
                    <option value="">Select Barangay</option>
                    <option v-for="barangay in barangays" :key="barangay.id" :value="barangay.id">{{ barangay.name }}
                    </option>
                </select>
                <InputError class="mt-2" :message="form.errors.barangay_id" />
            </div>


            <div class="mb-3">
                <InputLabel for="street" value="Street" />
                <TextInput id="street" type="text" class="form-control mt-1" v-model="form.street" required
                    autocomplete="street" />
                <InputError class="mt-2" :message="form.errors.street" />
            </div>

            <div class="mb-3">
                <label for="sex">Sex</label>
                <select id="sex" name="sex" class="form-control mt-1" v-model="form.sex" required>
                    <option value="">Select Sex</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
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
