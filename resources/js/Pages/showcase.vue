<script setup>
import { Head, Link, useForm, router } from '@inertiajs/vue3';
import { ref, defineProps } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Footer from '@/Layouts/Footer.vue';

const props = defineProps({
    auth: {
        type: Object,
        required: true,
    },
    motorcycle: Object,
});

const authUser = ref(props.auth.user !== null);

const getImagePath = (motor) => {
    // Replace 'image_path' with the actual field name storing the image path
    return motor.image_path ? `${window.location.origin}/${motor.image_path}` : ''; // Generate the full image URL
};

</script>

<template>

    <GuestLayout>
        <div class="container my-4">
            <Link class="btn btn-dark" :href="route('catalog.index')">
                Go Back
            </Link>
            <div class="row">
                <div class="col-lg-6 py-lg-4 ps-lg-5">
                    <img :src="getImagePath(motorcycle)" :alt="motorcycle.model" class="card-img-top w-100"
                    style="object-fit: cover; max-height: 500px;">
                </div>
                        <div class="col-lg-6 py-lg-4 ps-lg-5">
                            <p class="card-text">Brand: {{ motorcycle.brand.name }}</p>
                            <p class="card-text">Model: {{ motorcycle.model }}</p>
                            <p class="card-text">Type: {{ motorcycle.type.name }}</p>
                            <p class="card-text">Year released: {{ motorcycle.year }}</p>
                            <p class="card-text">
                                {{ motorcycle.availability === 1 ? 'Available' : 'Not available' }}
                            </p>
                            <p class="card-text">
                                PHP {{ motorcycle.daily_rate }}/day
                            </p>
                            <!-- Add more details as needed -->
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <button class="btn btn-primary rounded-pill" @click="reserveMotorcycle">
                                Reserve Now
                            </button>
                        </div>
                </div>
            </div>
    </GuestLayout>

</template>
