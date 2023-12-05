<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Layout from '@/Layouts/Layout.vue';
import Footer from '@/Layouts/Footer.vue';
import sidepanel from '@/Layouts/sidepanel.vue'
import { ref, watch, defineProps } from 'vue';
const props = defineProps({
    motorcycle: Object,
    brands: Array,
    types: Array,
});

const form = useForm(props.motorcycle);
</script>

<template>
        <Head title="Edit - Motorcycles" />
        <div class="container-fluid ">
            <div class="row">
                <sidepanel />
                <div class="p-0 col-lg-10 " style="height: 100vh;">
                <Layout />
                    <div class="col-sm-2 col-lg-6 order-sm-1 mt-5 ms-4">
                        <Link class="btn" :href="route('management')">
                            <i class="back-btn fa-solid fa-circle-arrow-left " style="font-size: 20px; color: blueviolet;"> Go Back  </i>
                        </Link>
                    </div>
                    <div class="ms-auto mt-n1 col-auto pe-3 mt-3 my-5">
                        <form class="container mx-5" style="width: 70%; " action="" @submit.prevent="form.put(route('motorcycles.update', form.id))">
                            <div>
                                <label for="brand_id">Brand</label>
                                <select class="form-control" name="brand_id" id="brand_id" v-model="form.brand_id">
                                    <option v-for="brand in brands" :key="brand.id" :value="brand.id">{{ brand.name }}</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="model">Model</label>
                                    <input class="form-control" type="text" name="model" id="model" v-model="form.model"
                                        placeholder="Click 125">

                                </div>

                                <div class="col-6">
                                    <label for="year">Year</label>
                                    <input class="form-control" type="number" name="year" id="year" v-model="form.year"
                                        placeholder="2002">
                                </div>
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
                            <button class="btnupdt " type="submit" :disabled="form.processing">
                                Update
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</template>
<style scoped>
.form-control{
    height: auto;
    margin: 15px 0 10px 0;
}
label{
    font-weight: bold;
}

.btnupdt {
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


.btnupdt:hover {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
    transition: 1s ease;
    transition: 1s ease;
}
</style>
