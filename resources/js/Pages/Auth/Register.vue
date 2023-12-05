<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import Footer from '@/Layouts/Footer.vue'
const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    phone_number: '',
    barangay_id: '', // Added barangay_id field for the dropdown menu
    street: '', // Added street text field
    sex: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};

const props = defineProps({
    barangays: Object
});
</script>

<template>
    <Head title="Sign Up" />
    <GuestLayout>
        <Head title="Register" />
        <div class="mx-5 row   g-lg-5 py-5" style="display: flex; align-items:center; justify-content:center; justify-content: space-around;">
            <div class="img-cont col-md-6 col-lg-5">
            <img src="images/logo/logo3.png" alt="" class="img-fluid">
            </div>
            <div class="forms col-md-6 col-lg-5 py-5">
                <h1 class="d-flex align-items-center justify-content-center fw-bold " >Sign Up</h1>
            <form @submit.prevent="submit">
                <div class="mb-3">
                    <InputLabel for="name" value="Name" />
                    <TextInput id="name" type="text" class="form-control mt-1" v-model="form.name" required autofocus
                        autocomplete="name" />
                    <InputError class="mt-2" :message="form.errors.name" />
                </div>
                <div class="mb-3">
                    <InputError class="mt-2" :message="form.errors.sex" />
                        <InputLabel for="email" value="Email" />
                        <TextInput id="email" type="email" class="form-control mt-1" v-model="form.email" required
                            autocomplete="username" />
                        <InputError class="mt-2" :message="form.errors.email" />
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="sex">Sex</label>
                        <select id="sex" name="sex" class="form-control mt-1" v-model="form.sex" required>
                            <option value="">Select Sex</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <InputLabel for="phone_number" value="Phone Number" />
                        <TextInput id="phone_number" type="tel" class="form-control mt-1" v-model="form.phone_number" required
                            autocomplete="tel" />
                        <InputError class="mt-2" :message="form.errors.phone_number" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7 mb-3">
                        <label for="barangay_id" value="Barangay">Barangay</label>
                        <select id="barangay_id" name="barangay_id" class="form-control mt-1" v-model="form.barangay_id" required>
                            <option value="">Select Barangay</option>
                            <option v-for="barangay in barangays" :key="barangay.id" :value="barangay.id">{{ barangay.name }}</option>
                        </select>
                        <InputError class="mt-2" :message="form.errors.barangay_id" />
                    </div>

                    <div class="col-md-5 mb-3">
                        <InputLabel for="street" value="Street" />
                        <TextInput id="street" type="text" class="form-control mt-1" v-model="form.street" required
                            autocomplete="street" />
                        <InputError class="mt-2" :message="form.errors.street" />
                    </div>
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
                    <Button class="btn ms-4 w-100 mb-3" :class="{ 'disabled': form.processing }" :disabled="form.processing">
                        Register
                    </Button>
                </div>
                <Link :href="route('login')" class="text-muted text-sm">
                    Already registered?
                    </Link>
            </form>
        </div>
    </div>
    <Footer/>
    </GuestLayout>
</template>
<style>
.forms {
    height: auto;
    border: 1px solid #A555EC;
    background-color: rgba(208, 156, 250, 0.5);
    /* Using rgba to set opacity only for the background */
    border-radius: 30px;
    padding: 30px;
}
.btn {
    border-radius: 10px 0 10px 0;
    border: 0;
    color: #A555EC;
    --c: no-repeat linear-gradient(#A555EC 0 0);
    background:
        var(--c) calc(-101% + var(--p, 0%)) 100%,
        var(--c) calc(201% - var(--p, 0%)) 0;
    background-size: 50.1% var(--p, .08em);
    transition: .3s var(--t, 0s), background-position .3s calc(.3s - var(--t, 0s))
}

.btn:hover {
    --p: 101%;
    --t: 0.3s;
    color: #FFFFD0;
    font-weight: 300;
}
</style>
