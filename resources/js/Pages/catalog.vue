<script setup>
import { Head, Link, router } from '@inertiajs/vue3';
import { ref, watch, defineProps } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Footer from '@/Layouts/Footer.vue';

const props = defineProps(
    {
        auth: {
            type: Object,
            required: true,
        },
        motorcycles: Object,
    }
)

const authUser = ref(props.auth.user !== null);


let search = ref('');

watch(search, value => {
    router.get('/catalog', { search: value }, { preserveState: true, preserveScroll: true });
});

const resetSearch = () => {
    search.value = '';
};

const getImagePath = (motor) => {
    // Replace 'image_path' with the actual field name storing the image path
    return motor.image_path ? `${window.location.origin}/${motor.image_path}` : ''; // Generate the full image URL
};
</script>

<template>
    <template v-if="authUser">
        <AuthenticatedLayout />
    </template>
    <template v-else>
        <GuestLayout />
    </template>
    <div class="container my-4">


        <Head title="Index of Motorcycles" />


        <section class=" text-center container">
            <div class="row my-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-bold" style=" color: blueviolet;">Catalog</h1>
                    <p class="lead ">Pick motorcycles from 5 reputable brands</p>
                </div>
            </div>
        </section>

        <div class="row mx-5 " style=" display: flex; justify-content: center;">
            <div class="col-sm-8 col-lg-5 col-xl-3 offset-xl-1 order-sm-2 mb-3 mb-sm-0">
                <div class="position-relative mb-lg-2 d-flex align-items-center">
                    <i class="ai-search fs-lg me-2"></i>
                    <input class="form-control rounded-pill flex-grow-1" type="search" placeholder="Enter keywords.."
                        v-model="search">
                </div>

            </div>

            <div class="col-sm-4 col-lg-8 order-sm-1">

                <!-- Visible on screens > 991px -->
                <div class="d-none d-lg-flex flex-wrap align-items-center">
                    <h3 class="h4 mb-2 me-4">Brands</h3>
                    <a class="btn btn-outline-secondary px-4 rounded-pill mb-2 me-3" href="#">Honda</a>
                    <a class="btn btn-outline-secondary px-4 rounded-pill mb-2 me-3" href="#">Kawasaki</a>
                    <a class="btn btn-outline-secondary px-4 rounded-pill mb-2 me-3" href="#">Suzuki</a>
                    <a class="btn btn-outline-secondary px-4 rounded-pill mb-2 me-3" href="#">Vespa</a>
                    <a class="btn btn-outline-secondary px-4 rounded-pill mb-2 me-3" href="#">Yamaha</a>
                </div>

                <!-- Visible on screens < 992px -->
                <div class="dropdown d-lg-none">
                    <button class="btn btn-outline-secondary dropdown-toggle rounded-pill w-100" type="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Topics</button>
                    <div class="dropdown-menu my-1">
                        <a class="dropdown-item" href="#">Honda</a>
                        <a class="dropdown-item" href="#">Kawasaki</a>
                        <a class="dropdown-item" href="#">Suzuki</a>
                        <a class="dropdown-item" href="#">Vespa</a>
                        <a class="dropdown-item" href="#">Yamaha</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <template v-for="motor in motorcycles.data" :key="motor.id">
                <div class="col-lg-6">
                    <div class="card card-flush card-stretched-vertical">
                        <!-- Container for each row -->
                        <div class="container1">
                            <div class="row">
                                <!-- First Column -->
                                <div class="col-lg-6 py-lg-4 ps-lg-5">
                                    <img :src="getImagePath(motor)" :alt="motor.model"
                                        class="img img-fluid fixed-height-image">
                                </div>
                                <!-- Second Column -->
                                <div class="col-lg-6 py-lg-4 ps-lg-5">
                                    <div class="row">
                                        <h6 class="card-subtitle mb-2 text-muted">{{ motor.someProperty }}</h6>
                                        <h5 class="card-title">{{ motor.brand.name + ' ' + motor.model }}</h5>
                                        <p class="card-text" :class="{ 'text-danger': motor.availability === 0 }">{{
                                            motor.availability === 1 ? 'Available' : 'Not available' }}</p>
                                        <small class="text-body-secondary">PHP {{ motor.daily_rate }}/day</small>
                                        <div class="btn-group mt-5" role="group">
                                            <Link :href="route('motorcycle.show', motor.id)"
                                                class="btn-2 h4 w-50 d-flex align-items-center justify-content-center"
                                                style="text-decoration: none; padding: 5px;"
                                                :disabled="motor.availability === 0"
                                                :class="{ 'disabled': motor.availability === 0 }">
                                            Avail
                                            </Link>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
            <nav aria-label="Pagination">
                <ul class="pagination">
                    <li v-for="link in motorcycles.links" :key="link.url" :class="['page-item', { 'active': link.active }]">
                        <Link :href="link.url" class="page-link" v-html="link.label" />
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <Footer />
</template>
<style scoped>
.img {
    height: auto;
    transition: 1s ease;
    box-shadow: 0 4px 8px 0 rgba(208, 156, 250, 0.5), 0 6px 20px 0 rgba(208, 156, 250, 0.5);
    border-radius: 20px 0 20px 0;
}

.fixed-height-image {
    height: 200px;
    /* Adjust the height as needed */
    object-fit: cover;
    /* or object-fit: contain; depending on your preference */
}

.img:hover {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
    transition: 1s ease;
    transition: 1s ease;
}

.btn {
    font-weight: 700;
    transition: transform 250ms;
}

.btn:hover {
    color: #FFFFD0;
    font-size: 1em;
    border-radius: 10px 0 10px 0;
    background-color: #A555EC;
    transform: translateY(-10px);
}

.btn-2 {
    color: #A555EC;
    --c: no-repeat linear-gradient(#55ec94 0 0);
    background:
        var(--c) calc(-101% + var(--p, 0%)) 100%,
        var(--c) calc(201% - var(--p, 0%)) 0;
    background-size: 50.1% var(--p, .08em);
    transition: .3s var(--t, 0s), background-position .3s calc(.3s - var(--t, 0s));
}

.btn-2:hover {
    --p: 101%;
    --t: 0.3s;
    color: black;
    font-weight: 600;
    border-radius: 10px;
}

.container1 {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    padding: 20px;
}
</style>

