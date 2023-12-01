<template>
    <template v-if="authUser">
        <AuthenticatedLayout />
    </template>
    <template v-else>
        <GuestLayout />
    </template>
    <template v-if="authUser && isAdmin">
        <main class="container-fluid">
            <div class="row">
                <div class="col-lg-3 sidepanel d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary"
                    style="height: 100vh;">
                    <h5>OVERVIEW</h5>
                    <ul class="nav  flex-column mb-auto">
                        <li class="nav-item">
                            <a href="dashboard.html" class="nav-link active" aria-current="page">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#home"></use>
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="rentalrecords.html" class="nav-link link-body-emphasis">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"></use>
                                </svg>
                                Rental Records
                            </a>
                        </li>
                        <li>
                            <a href="bookingrecords.html" class="nav-link link-body-emphasis">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"></use>
                                </svg>
                                Booking Records
                            </a>
                        </li>
                        <li>
                            <a href="notification.html" class="nav-link link-body-emphasis">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#table"></use>
                                </svg>
                                Notification
                            </a>
                        </li>
                    </ul>
                </div>

                <div class=" mt-4 col-lg-9 mb-2 mb-xl-3">
                    <div class="row">
                        <div class="col-auto">
                            <h3>Dashboard</h3>
                        </div>
                        <div class="ms-auto text-end mt-n1 col-auto">
                            <div class="d-inline me-2 dropdown">
                                <button type="button" id="react-aria2144819985-6" aria-expanded="false"
                                    class="bg-white shadow-sm dropdown-toggle btn btn-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather align-middle mt-n1">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6"></line>
                                        <line x1="8" y1="2" x2="8" y2="6"></line>
                                        <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg>
                                    Today
                                </button>
                            </div>
                            <button type="button" class="shadow-sm me-1 btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather">
                                    <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                </svg>
                            </button>
                            <button type="button" class="shadow-sm btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather">
                                    <polyline points="23 4 23 10 17 10"></polyline>
                                    <polyline points="1 20 1 14 7 14"></polyline>
                                    <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                                </svg>
                            </button>
                        </div>
                        <div class=" mt-4 container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="flex-fill card mb-3">
                                        <div class="py-4 card-body">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    <h3 class="mb-2">43</h3>
                                                    <p class="mb-2">Rentals</p>
                                                    <div class="mb-0">
                                                        <span class="text-muted">This Month</span>
                                                    </div>
                                                </div>
                                                <div class="d-inline-block ms-3">
                                                    <div class="stat">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="align-middle text-success">
                                                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z">
                                                            </path>
                                                            <line x1="3" y1="6" x2="21" y2="6"></line>
                                                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="flex-fill card mb-3">
                                        <div class="py-4 card-body">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    <h3 class="mb-2">43</h3>
                                                    <p class="mb-2">Bookings</p>
                                                    <div class="mb-0">
                                                        <span class="text-muted">This Month</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="flex-fill card mb-3">
                                        <div class="py-4 card-body">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    <h3 class="mb-2">43</h3>
                                                    <p class="mb-2">Available Motorcycle</p>
                                                    <div class="mb-0">
                                                        <span class="badge-soft-danger me-2 badge">-4.25%</span>
                                                        <span class="text-muted">This Month</span>
                                                    </div>
                                                </div>
                                                <div class="d-inline-block ms-3">
                                                    <div class="stat">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="align-middle text-success">
                                                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z">
                                                            </path>
                                                            <line x1="3" y1="6" x2="21" y2="6"></line>
                                                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive m-5">
                                <table class="table mb-5 table-striped table-sm">
                                    <thead>
                                        <h5>Current Rentals</h5>
                                        <tr>
                                            <th scope="col">Category</th>
                                            <th scope="col">Motor</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                </table>
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <h5>Bookings</h5>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Motor type</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </template>
    <template v-else>
        <div class="container col-6">
            <p>You are not authorized to access this page.</p>
            <Link :href="route('index')" class="btn">Go Back</Link>
        </div>
    </template>

    <Footer />
</template>

<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Footer from '@/Layouts/Footer.vue';
import { ref, defineProps } from 'vue';
import { router, Link } from '@inertiajs/vue3';

const props = defineProps({
    auth: {
        type: Object,
        required: true,
    },
});

const authUser = ref(props.auth.user !== null);
const isAdmin = props.auth.user && props.auth.user.is_admin === 1;

function goBack() {
    // Navigate back to the previous page in the browser's history
    window.history.back();
}

const features = [
    {
        title: 'Vision',
        content: 'To be the premier choice for motorcycle enthusiasts seeking exceptional rental experiences, offering a diverse range of impeccably maintained motorcycles and fostering a community passionate about safe and unforgettable adventures.',
        image: 'path_to_your_image',
        alt: 'Vision Image'
    },
    {
        title: 'Mission',
        content: 'At MotoRent, our mission is to provide riders of all levels and group sizes with access to a diverse fleet of well-maintained motorcycles. We prioritize safety by regularly servicing and meticulously cleaning our motorcycles, ensuring peace of mind for our customers as they embark on their journeys. We aim to create memorable experiences and cultivate a community of passionate riders.',
        image: 'path_to_your_image',
        alt: 'Mission Image'
    },
    {
        title: 'Goals',
        content: 'Provide an extensive and diverse fleet of motorcycles to cater to the needs and preferences of riders at different skill levels and group sizes. Maintain a stringent maintenance schedule to ensure the highest standards of safety and reliability for all our motorcycles. Continuously improve customer experience by offering exceptional service, streamlined booking processes, and personalized assistance. Foster a community of riders by organizing events, sharing resources, and creating opportunities for networking and shared experiences. Expand our reach and establish MotoRent as the go-to destination for motorcycle enthusiasts across diverse regions, fostering a global community of passionate riders.',
        image: 'path_to_your_image',
        alt: 'Goal Image'
    }
];
</script>

<style scoped>
/* Add your custom styles here */
.about-section {
    /* Your styles */
}

.about-content {
    /* Your styles */
}

.featurette-divider {
    /* Your styles */
}

.featurette-image {
    /* Your styles */
}
</style>
