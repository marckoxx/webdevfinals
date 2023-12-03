<script setup>
import { Head, Link, useForm, router } from '@inertiajs/vue3';
import { ref, defineProps } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Footer from '@/Layouts/Footer.vue';
import Layout from '@/Layouts/Layout.vue';

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

    <Layout />
        <div class="container my-4">
            <Link class="btn btn-dark" :href="route('catalog.index')">
                Go Back
            </Link>
            <h4 class="my-3 fw-bold">Reservation</h4>
            <div class="row mt-4">
                <div class="col-lg-6 py-lg-4 ps-lg-5">
                    <img :src="getImagePath(motorcycle)" :alt="motorcycle.model" class="img img-fluid fixed-height-image"
                    style="object-fit: cover; max-height: 500px;">
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

                </div>
                <div class="col-md-8 col-lg-6 container-fluid">
                <form class="needs-validation" novalidate="">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="firstName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="contact" class="form-label">Address</label>
                        <input type="text" class="form-control" id="contact" placeholder="1234 Main St" required="">
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="contact" class="form-label">Phone No.</label>
                            <input type="text" class="form-control" id="contact" placeholder="1234 Main St" required="">
                        </div>
                        <div class="col-6">
                            <label for="contact" class="form-label">Phone No.</label>
                            <input type="text" class="form-control" id="contact" placeholder="1234 Main St" required="">
                        </div>
                    </div>
                    <div class="col-12">
                            <label for="license" class="form-label">License No.</label>
                            <input type="text" class="form-control" id="license" placeholder="1234 Main St" required="">
                        </div>
                    <hr class="my-4">
                    <h5>Rental information</h5>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">Shipping address is the same as my billing
                            address</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="save-info">
                        <label class="form-check-label" for="save-info">Save this information for next time</label>
                    </div>

                    <hr class="my-4">

                    <div class="col-md-6">
                        <label for="password" class="form-label">Current Password</label>
                        <input type="password" class="form-control" id="password" placeholder="" required="">
                    </div>
                    <div class="row gy-3">
                        <div class="col-md-6">
                            <label for="password" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="password" placeholder="" required="">
                        </div>

                        <div class="col-md-6">
                            <label for="password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password" placeholder="" required="">
                        </div>

                    </div>

                            <button class="btn w-100 mt-5   " @click="reserveMotorcycle">
                                Reserve Now
                            </button>

                </form>
            </div>
                </div>
                </div>


    <Footer />

</template>
<style scoped>
button{
    font-weight: bold;
    color: black;
  --c: no-repeat linear-gradient(#A555EC 0 0);
  background:
    var(--c)  calc(-101% + var(--p,0%)) 100%,
    var(--c)  calc( 201% - var(--p,0%)) 0;
  background-size: 50.1% var(--p,.08em);
  transition: .3s var(--t,0s), background-position .3s calc(.3s - var(--t,0s));
}
button:hover{
  --p: 101%;
  --t: 0.3s;
    color: #FFFFD0;
    font-weight: bold;
    border-radius: 15px;
}
.img {
    height: auto;
    transition: 1s ease;
    box-shadow: 0 4px 8px 0 rgba(208, 156, 250, 0.5), 0 6px 20px 0 rgba(208, 156, 250, 0.5);
    border-radius: 20px 0 20px 0;
}

.fixed-height-image {
    width: 550px;
    height: 330px; /* Adjust the height as needed */
    object-fit: cover; /* or object-fit: contain; depending on your preference */
}
.img:hover{
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
    transition: 1s ease;
    transition: 1s ease;
}
</style>
