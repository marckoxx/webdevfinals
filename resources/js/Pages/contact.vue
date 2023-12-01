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
    <GuestLayout />
        <main class="container mb-8">
            <div class="py-5 text-center mb-5">
                <h2 class=" fw-bold" style="color: #A555EC;">CONTACT US</h2>
                <h4><i class="fa-solid fa-clock mt-5"></i> Hours: Monday-Sunday 8:30AM to 8:00PM</h4>
                <h4><i class="fa-solid fa-address-book"></i> Phone Number: 09123456789 </h4>
            </div>
            <div class="row g-5 d-flex  justify-content-center mb-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <div class="motorcycle use">
                        <h1 class="mb-3">Contact Details</h1>
                        <p class="col-lg-10 ">If you got any questions, please do not hesitate to send us a message. We
                            reply within 24 hours!</p>
                    </div>
                    <div class="requirements">
                        <h1 class="mb-3">Phone</h1>
                        <p class="col-lg-10 ">Enjoy the independence of driving on your own. Need it on a daily, weekly
                            or monthly basis? Even long term if you say so!</p>
                        <ul>
                            <li> Two (2) valid IDs.</li>
                            <li> PHP 5,000 Security Deposit. You will provide this when you get the car. This will be given
                                back to you in full upon returning the car and there are no damages.</li>
                            <li> Full cash payment upon signing the Contract</li>
                        </ul>
                    </div>
                    <div class="fee">
                        <h1 class="mb-3">Email</h1>
                        <p class="col-lg-10 ">This is to reserve you the car prior to your arrival. This will be
                            deducted from your total rental fee.
                            We will send you the details once you submit your reservation. Reservation fee is
                            non-refundable.
                        </p>
                    </div>
                    <div class="fee">
                        <h1 class="mb-3">Address</h1>
                        <p class="col-lg-10 ">This is to reserve you the car prior to your arrival. This will be
                            deducted from your total rental fee.
                            We will send you the details once you submit your reservation. Reservation fee is
                            non-refundable.
                        </p>
                    </div>
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


            <div class="form col-md-6 col-lg-5">
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
                    <div class="col-12">
                        <label for="contactno" class="form-label">Contact Number</label>
                        <input type="number" class="form-control" id="contactno" placeholder="enter name" required="">
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Email <span
                                class="text-body-secondary">(Optional)</span></label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    </div>


                    <button class="w-100 p-3 fw-bold" type="submit">Submit Form</button>
                </form>
            </div>
        </main>


        <button class="w-100 btn btn-primary btn-lg" type="submit">Submit Form</button>
        <Footer />
</template>

<style scoped>
.container {
    background-position: center;
    background-repeat: no-repeat;
    background-size: 3in;
    background-image: url("images/logo/logo3.png");
}

h1 {
    color: #A555EC;
    font-size: 30px;
}

p {
    font-size: 18px;
}

.form {
    border: 1px solid #A555EC;
    background-color: rgba(208, 156, 250, 0.5);
    /* Using rgba to set opacity only for the background */
    border-radius: 15px;
    padding: 40px;
}

input {
    background-image: linear-gradient(to bottom right, #FFFFD0, #FFFFD0);
}

textarea {
    background-image: linear-gradient(to bottom right, #FFFFD0, #FFFFD0);
}

button {
    border-radius: 10px 0 10px 0;
    border: 0;
    color: #A555EC;
    --c: no-repeat linear-gradient(#FFA1F5 0 0);
    background:
        var(--c) calc(-101% + var(--p, 0%)) 100%,
        var(--c) calc(201% - var(--p, 0%)) 0;
    background-size: 50.1% var(--p, .08em);
    transition: .3s var(--t, 0s), background-position .3s calc(.3s - var(--t, 0s))
}

button:hover {
    --p: 101%;
    --t: 0.3s;
    color: #A555EC;
    font-weight: 300;
}
</style>
<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
</script>

