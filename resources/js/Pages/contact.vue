<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Footer from '@/Layouts/Footer.vue';
import { ref, defineProps } from 'vue';

const props = defineProps({
    auth: {
        type: Object,
        required: true,
    },
});

const authUser = ref(props.auth.user !== null);
</script>
<template>
    <template v-if="authUser">
        <AuthenticatedLayout />
    </template>
    <template v-else>
        <GuestLayout />
    </template>
    <main class="container" style="margin-top: 40px;">
        <div class="py-5 text-center">
            <h1><i class="fa-solid fa-address-book"></i></h1>
            <h2>CONTACT US</h2>
        </div>

        <div class="row g-5 d-flex  justify-content-center">
            <div class="col-lg-7 text-center text-lg-start">
                <div class="motorcycle use">
                    <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Contact Details</h1>
                    <p class="col-lg-10 fs-4">If you got any questions, please do not hesitate to send us a message. We
                        reply within 24 hours!</p>
                </div>
                <div class="requirements">
                    <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Phone</h1>
                    <p class="col-lg-10 fs-4">Enjoy the independence of driving on your own. Need it on a daily, weekly
                        or monthly basis? Even long term if you say so!</p>
                    <ul>
                        <li> Two (2) valid IDs.</li>
                        <li> PHP 5,000 Security Deposit. You will provide this when you get the car. This will be given
                            back to you in full upon returning the car and there are no damages.</li>
                        <li> Full cash payment upon signing the Contract</li>
                    </ul>
                </div>
                <div class="fee">
                    <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Email</h1>
                    <p class="col-lg-10 fs-4">This is to reserve you the car prior to your arrival. This will be
                        deducted from your total rental fee.
                        We will send you the details once you submit your reservation. Reservation fee is
                        non-refundable.
                    </p>
                </div>
                <div class="fee">
                    <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Address</h1>
                    <p class="col-lg-10 fs-4">This is to reserve you the car prior to your arrival. This will be
                        deducted from your total rental fee.
                        We will send you the details once you submit your reservation. Reservation fee is
                        non-refundable.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-5">
                <h4 class="mb-3">Message us</h4>
                <form class="needs-validation" novalidate="">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="enter name" required="">
                        </div>
                        <div class="col-12">
                            <label for="contactno" class="form-label">Contact Number</label>
                            <input type="number" class="form-control" id="contactno" placeholder="enter name" required="">
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Email <span
                                    class="text-body-secondary">(Optional)</span></label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        </div>

                        <div class="col-12">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" placeholder="subject" required="">
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Your Message"></textarea>
                    </div>
                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit">Submit Form</button>
                </form>
            </div>
        </div>
    </main>
    <Footer />
</template>

