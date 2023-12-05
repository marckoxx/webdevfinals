<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head, useForm, usePage,Link } from '@inertiajs/vue3';
import Footer from '@/Layouts/Footer.vue';
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
    <Head title="Profile" />

    <AuthenticatedLayout>
        <div class="container  mb-8">
            <div class="col-sm-2 col-lg-6 order-sm-1 mt-5 ms-4">
                    <Link class="btn" :href="route('index')">
                        <i class="back-btn fa-solid fa-circle-arrow-left " style="font-size: 20px; color: blueviolet;"> Go Back  </i>
                    </Link>
                </div>

            <div class="py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-8">
                            <div class="p-4 p-md-8  shadow-sm rounded">
                                <section class="max-w-xl">
                                    <header>
                                        <h2 class="text-lg font-medium ">Profile Information</h2>
                                        <p class="mt-1 text-sm text-secondary">
                                            Update your account's profile information.
                                        </p>
                                    </header>

                                    <form @submit.prevent="form.patch(route('profile.update'))" class="mt-6 space-y-6">
                                        <div class="form-group">
                                            <label for="name" class="form-label">Name</label>
                                            <input id="name" type="text" class="form-control mt-1" v-model="form.name"
                                                required autofocus autocomplete="name" />
                                            <InputError class="mt-2" :message="form.errors.name" />
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class="form-label">Email</label>
                                            <input id="email" type="email" class="form-control mt-1" v-model="form.email"
                                                required autocomplete="username" />
                                            <InputError class="mt-2" :message="form.errors.email" />
                                        </div>

                                        <div class="form-group">
                                            <label for="phone_number" class="form-label">Phone Number</label>
                                            <input id="phone_number" type="numeric" class="form-control mt-1"
                                                v-model="form.phone_number" required autocomplete="phone_number" />
                                            <InputError class="mt-2" :message="form.errors.phone_number" />
                                        </div>

                                        <div class="form-group">
                                            <label for="barangay_id" class="form-label">Barangay</label>
                                            <select id="barangay_id" name="barangay_id" class="form-control mt-1"
                                                v-model="form.barangay_id" required>
                                                <option value="">Select Barangay</option>
                                                <option v-for="barangay in barangays" :key="barangay.id"
                                                    :value="barangay.id">{{ barangay.name }}
                                                </option>
                                            </select>
                                            <InputError class="mt-2" :message="form.errors.barangay_id" />
                                        </div>

                                        <div class="form-group">
                                            <label for="street" class="form-label">Street</label>
                                            <input id="street" type="text" class="form-control mt-1"
                                                v-model="form.street" required autocomplete="street" />
                                            <InputError class="mt-2" :message="form.errors.street" />
                                        </div>

                                        <div class="form-group">
                                            <label for="sex">Sex</label>
                                            <select id="sex" name="sex" class="form-control mt-1" v-model="form.sex"
                                                required>
                                                <option value="">Select Sex</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <InputError class="mt-2" :message="form.errors.sex" />
                                        </div>

                                        <div class="d-flex align-items-center gap-4">
                                            <button class="button " :disabled="form.processing">Update</button>

                                            <transition enter-active-class="transition ease-in-out"
                                                enter-from-class="opacity-0" leave-active-class="transition ease-in-out"
                                                leave-to-class="opacity-0">
                                                <p v-if="form.recentlySuccessful" class="text-sm text-secondary">Saved.</p>
                                            </transition>
                                        </div>
                                    </form>
                                </section>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-8">
                            <div class="p-4 p-md-8  shadow-sm rounded">
                                <UpdatePasswordForm class="max-w-xl" />
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-8">
                            <div class="p-4 p-md-8  shadow-sm rounded">
                                <DeleteUserForm class="max-w-xl" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Footer />
</AuthenticatedLayout></template>
<style scoped>
.button{
    padding: 6px;
    border: 0px;
    margin-top: 15px;
    width: 30%;
    border-radius: 50px ;
    text-decoration: none;
    color: black;
    height: auto;
    transition: 1s ease;
    background-color: rgb(47, 255, 85);
}


.button:hover {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
    transition: 1s ease;
    transition: 1s ease;
}
</style>
