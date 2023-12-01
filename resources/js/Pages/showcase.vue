<script setup>
import { Head, Link, useForm, router } from '@inertiajs/vue3';
import { defineProps } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';

const props = defineProps({
    motorcycle: Object,
});

const getImagePath = (motor) => {
    // Replace 'image_path' with the actual field name storing the image path
    return motor.image_path ? `${window.location.origin}/${motor.image_path}` : ''; // Generate the full image URL
};

function reserveMotorcycle() {
    // Implement the logic for reserving the motorcycle
    // You can use Inertia.js or make an API call here
    // For example: router.post('/reserve', { motorcycleId: motorcycle.id })
}
</script>

<template>
    <GuestLayout>
        <div class="container my-4">
            <Link class="btn btn-dark" :href="route('catalog.index')">
                Go Back
            </Link>
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <img :src="getImagePath(motorcycle)" :alt="motorcycle.model" class="card-img-top w-100"
                            style="object-fit: cover; max-height: 500px;">
                        <div class="card-body">
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
            </div>
        </div>
    </GuestLayout>
</template>
