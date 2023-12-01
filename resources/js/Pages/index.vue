<template>
    <Head title="Home" />
    <Layout />
        <main>
            <section class="container1">
                <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img :src="'images/logo/carouasel2.jpg'" alt="First Image" style="max-height: calc(100vh-63px);"
                                class="img-fluid w-100">
                            <div class="container">
                                <div class="carousel-caption  d-flex flex-column align-items-center">
                                    <h1>Ride, Explore, Repeat.</h1>
                                    <p class="opacity-75">Where Every Mile is a Memory.</p>
                                    <p>
                                        <Link class="btn btn-lg" :href="route('catalog.index')">Rent Now</Link>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img :src="'images/logo/carousel3.jpg'" alt="Second Image" style="max-height: calc(100vh-63px);"
                                class="img-fluid w-100">
                            <div class="container">
                                <div class="carousel-caption  d-flex flex-column align-items-center">
                                    <h1>Ride, Explore, Repeat.</h1>
                                    <p class="opacity-75">Where Every Mile is a Memory.</p>
                                    <p>
                                        <Link class="btn btn-lg" :href="route('catalog.index')">Rent Now</Link>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img :src="'images/logo/carousel1.jpg'" alt="Third Image" style="max-height: calc(100vh-63px);"
                                class="img-fluid w-100">
                            <div class="container">
                                <div class="carousel-caption  d-flex flex-column align-items-center">
                                    <h1>Ride, Explore, Repeat.</h1>
                                    <p class="opacity-75">Where Every Mile is a Memory.</p>
                                    <p>
                                        <Link class="btn btn-lg" :href="route('catalog.index')">Rent Now</Link>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
            <section class="container2 d-flex flex-column justify-content-center align-items-center">
                <section class="py-5 text-center container">
                    <div class="row py-lg-5">
                        <div class="col-lg-8 col-md-10 col-sm-12 mx-auto"> <!-- Adjusted column classes -->
                            <h1 class="fw-light">Featured Motorcycles</h1>
                            <p class="lead text-body-secondary">24/7 efficient online quotation for your convenience. Choose
                                your Bike and get a motorcycle rental quote now.</p>
                        </div>
                    </div>
                </section>
                <div class="album py-5 bg-body-tertiary">
                    <div class="container d-flex flex-column align-items-center">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img :src="'images/vespa/vespa3.webp'" alt="Third Image" class="img-fluid w-100 h-100">
                                    <div class="card-body d-flex justify-content-center">
                                        <p class="card-text">Vespa X-400</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img :src="'images/suzuki/suzuki5.webp'" alt="Third Image"
                                        class="img-fluid w-100 h-100">
                                    <div class="card-body d-flex justify-content-center">
                                        <p class="card-text">Suzuki Hayabusa</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img :src="'images/honda/honda5.png'" alt="Third Image" class="img-fluid w-100 h-100">
                                    <div class="card-body d-flex justify-content-center">
                                        <p class="card-text ">Honda CBR-400</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <Link :href="route('catalog.index')" type="button" class="btn btn-primary btn-sm " id="btn-show">
                        Show more
                        </Link>
                    </div>
                </div>
            </section>
            <section class="container d-flex flex-column align-items-center">
                <hr class="featurette-divider">
                <div class="brand">
                    <h1>Brand</h1>
                </div>
                <div class="row featurette m-8">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">Honda</h2>
                        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting
                            prose here.</p>
                    </div>
                    <div class="col-md-5">
                        <img :src="'images/logo/hondologo.jpg'" alt="Third Image" class="img-fluid w-100 h-100">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette m-8">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading fw-normal lh-1">Kawasaki</h2>
                        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of
                            how this layout would work with some actual real-world content in place.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img :src="'images/logo/kawasakilogo.webp'" alt="Third Image" class="img-fluid w-100 h-100">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette m-8">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">Suzuki</h2>
                        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not
                            really intended to be actually read, simply here to give you a better view of what this would
                            look like with some actual content. Your content.</p>
                    </div>
                    <div class="col-md-5">
                        <img :src="'images/logo/suzukilogo.jpg'" alt="Third Image" class="img-fluid w-100 h-100">
                    </div>
                </div>
                <hr class="featurette-divider">
                <div class="row featurette m-8">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading fw-normal lh-1">Vespa</h2>
                        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of
                            how this layout would work with some actual real-world content in place.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img :src="'images/logo/vespalogo.jpg'" alt="Third Image" class="img-fluid w-100 h-100">
                    </div>
                </div>
                <hr class="featurette-divider">
                <div class="row featurette m-8">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">Yamaha</h2>
                        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not
                            really intended to be actually read, simply here to give you a better view of what this would
                            look like with some actual content. Your content.</p>
                    </div>
                    <div class="col-md-5">
                        <img :src="'images/logo/yamahalogo.jpg'" alt="Third Image" class="img-fluid w-100 h-100">
                    </div>
                </div>
            </section>
        </main>
    <Footer />
</template>
<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Layout from '@/Layouts/Layout.vue';
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
