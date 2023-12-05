<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Layout from '@/Layouts/Layout.vue';
import sidepanel from '@/Layouts/sidepanel.vue'
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
<<<<<<< Updated upstream
    <Head title="Create - Users" />

    <Layout />

=======
>>>>>>> Stashed changes
    <Head title="Add a User" />
    <div class="container-fluid ">
            <div class="row">
                <sidepanel />
                <div class="p-0 col-lg-10 " style=" height: 100vh;">
                <Layout />
                    <div class="col-sm-2 col-lg-6 order-sm-1 mt-4 ms-4">
                        <Link class="btn" :href="route('users.index')">
                            <i class="back-btn fa-solid fa-circle-arrow-left " style="font-size: 20px; color: blueviolet;"> Go Back  </i>
                        </Link>
                    </div>
                    <div class="ms-auto mt-n1 col-auto pe-3 mt-3 my-5">
                        <form class="container ms-5" style="width: 70%" action="" @submit.prevent="submitForm" enctype="multipart/form-data">
                            <div>
                                <label for="name">Name</label>
                                <input class="form-control" type="text" name="name" id="name" v-model="form.name">
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <label for="email">Email</label>
                                    <input class="form-control" type="email" name="email" id="email" v-model="form.email" />
                                 </div>
                                <div class="col-md-5">
                                    <label for="phone_number">Phone Number</label>
                                <input class="form-control" type="numeric" name="phone_number" id="phone_number"
                                    v-model="form.phone_number" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="barangay_id">Barangay</label>
                                    <select class="form-control" name="barangay_id" id="barangay_id" v-model="form.barangay_id">
                                        <option value="">Select Barangay</option>
                                        <option v-for="barangay in barangays" :key="barangay.id" :value="barangay.id">{{ barangay.name }}
                                        </option>
                                    </select>
                                 </div>
                                <div class="col-md-6">
                                    <label for="street">Street</label>
                                    <input class="form-control" type="text" name="street" id="street" v-model="form.street"
                                        placeholder="499.00">
                                </div>
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
                            <button class="btn " type="submit" :disabled="form.processing">
                                Create
                            </button>
                        </form>
                        </div>
                </div>
            </div>
    </div>
    <Footer />
</template>
<style scoped>
.form-control{
    height: auto;
    margin: 15px 0 10px 0;
}
label{
    font-weight: bold;
}

button{
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


button:hover {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
    transition: 1s ease;
    transition: 1s ease;
}
</style>


