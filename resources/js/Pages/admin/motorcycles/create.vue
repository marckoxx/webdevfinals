<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Layout from '@/Layouts/Layout.vue';

import sidepanel from '@/Layouts/sidepanel.vue'
import { ref, watch, defineProps } from 'vue';
const props = defineProps(
    {
        motorcycles: Object,
        brands: Array,
        types: Array,
    }
)

const form = useForm({
    brand_id: '',
    model: '',
    type_id: '',
    year: '',
    daily_rate: '',
    availability: '',
    image: null,
});

const onFileChange = (event) => {
    form.image = event.target.files[0];
};

const submitForm = () => {
    form.post(route('motorcycles.store'), {
        onSuccess: () => {
            // Handle success if needed
        },
        onError: (errors) => {
            // Handle errors if needed
        },
    });
};

</script>

<template>
    <Head title="Add a Motorcycle" />
    <div class="container-fluid ">
            <div class="row">
                <sidepanel />
                <div class="p-0 col-lg-10 " style=" height: 100vh;">
                <Layout />
                    <div class="col-sm-2 col-lg-6 order-sm-1 mt-5 ms-4">
                        <Link class="btn" :href="route('management')">
                            <i class="back-btn fa-solid fa-circle-arrow-left " style="font-size: 20px; color: blueviolet;"> Go Back  </i>
                        </Link>
                    </div>
                    <div class="ms-auto mt-n1 col-auto pe-3 mt-3 my-5">
                        <form class="container ms-5" style="width: 70%" action="" @submit.prevent="submitForm" enctype="multipart/form-data">
                            <div>
                                <label for="brand_id">Brand</label>
                                <select class="form-control" name="brand_id" id="brand_id" v-model="form.brand_id">
                                    <option v-for="brand in brands" :key="brand.id" :value="brand.id">{{ brand.name }}</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="model">Model</label>
                                    <input class="form-control" type="text" name="model" id="model" v-model="form.model" placeholder="Click 125">
                                </div>
                                <div class="col-md-6">
                                    <label for="type_id">Type</label>
                                    <select class="form-control" name="type_id" id="type_id" v-model="form.type_id">
                                        <option v-for="mototype in types" :key="mototype.id" :value="mototype.id">{{ mototype.name }}</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label for="year">Year</label>
                                <input class="form-control" type="number" name="year" id="year" v-model="form.year" placeholder="2002">
                            </div>
                            <div>
                                <label for="daily_rate">Daily Rate</label>
                                <input class="form-control" type="number" name="daily_rate" id="daily_rate" v-model="form.daily_rate"
                                    placeholder="499.00">
                            </div>
                            <div>
                                <label for="availability">Availability</label>
                                <select class="form-control" name="availability" id="availability" v-model="form.availability">
                                    <option value="1">Available</option>
                                    <option value="0">Not Available</option>
                                </select>
                            </div>
                            <div >
                                <label for="image">Image</label>
                                <input class="form-control" type="file" name="image" id="image" @change="onFileChange">
                            </div>
                            <button type="submit" :disabled="form.processing">
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
