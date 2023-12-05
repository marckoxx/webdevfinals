<template>
    <Head title="Home" />
    <Layout />
        <main>
            <section style="margin-top: 63px;">
                <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner ">
                        <div class="carousel-item active" data-interval="500">
                            <img :src="'images/logo/carousel2.jpg'" alt="First Image" style="max-height: calc(100vh-63px);"
                                class="img-fluid w-100">
                                <div class="container">
                                    <div class="carousel-caption" style="width: 90%;">
                                        <div class="row">
                                            <div class="col-xl-5 col-md-6 pt-lg-5 text-center text-md-start mb-4 mb-md-0">
                                                <h1 class="display-3 pb-2 pb-sm-3" style="font-weight: 700;">
                                                    <span id="text">Ride.</span> <span>Explore</span>. Repeat.
                                                </h1>
                                                <p class="carousel-text fs-lg d-md-none d-xl-block pb-2 pb-md-0 mb-4 mb-md-5" style="font-weight: 700;">
                                                    "Discover the freedom of the open road with our motorcycle rental services.
                                                    Unleash your adventurous spirit and explore the world on two wheels.
                                                    Ride with us and make every journey an unforgettable experience."
                                                </p>
                                                <div class="btnrent d-flex justify-content-center justify-content-md-start pb-2 pt-lg-2 pt-xl-0">
                                                    <Link :href="route('catalog.index')" type="button" class="btn me-3 me-sm-4" id="btn-show" style="font-weight: 600; font-size: 30px;">Rent Now</Link>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="carousel-item active" data-interval="500">
                            <img :src="'images/logo/carousel1.jpg'" alt="First Image" style="max-height: calc(100vh-63px);"
                                class="img-fluid w-100">
                                <div class="container">
                                    <div class="carousel-caption" style="width: 90%;">
                                        <div class="row">
                                            <div class="col-xl-5 col-md-6 pt-lg-5 text-center text-md-start mb-4 mb-md-0">
                                                <h1 class="display-3 pb-2 pb-sm-3" style="font-weight: 700;">
                                                    <span id="text">Ride.</span> <span>Explore</span>. Repeat.
                                                </h1>
                                                <p class="carousel-text fs-lg d-md-none d-xl-block pb-2 pb-md-0 mb-4 mb-md-5" style="font-weight: 700;">
                                                    "Discover the freedom of the open road with our motorcycle rental services.
                                                    Unleash your adventurous spirit and explore the world on two wheels.
                                                    Ride with us and make every journey an unforgettable experience."
                                                </p>
                                                <div class="btnrent d-flex justify-content-center justify-content-md-start pb-2 pt-lg-2 pt-xl-0">
                                                    <Link :href="route('catalog.index')" type="button" class="btn me-3 me-sm-4" id="btn-show" style="font-weight: 600; font-size: 30px;">Rent Now</Link>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="carousel-item active" data-interval="500">
                            <img :src="'images/logo/carousel3.jpg'" alt="First Image" style="max-height: calc(100vh-63px);"
                                class="img-fluid w-100">
                                <div class="container">
                                    <div class="carousel-caption" style="width: 90%;">
                                        <div class="row">
                                            <div class="col-xl-5 col-md-6 pt-lg-5 text-center text-md-start mb-4 mb-md-0">
                                                <h1 class="display-3 pb-2 pb-sm-3" style="font-weight: 700;">
                                                    <span id="text">Ride.</span> <span>Explore</span>. Repeat.
                                                </h1>
                                                <p class="carousel-text fs-lg d-md-none d-xl-block pb-2 pb-md-0 mb-4 mb-md-5" style="font-weight: 700;">
                                                    "Discover the freedom of the open road with our motorcycle rental services.
                                                    Unleash your adventurous spirit and explore the world on two wheels.
                                                    Ride with us and make every journey an unforgettable experience."
                                                </p>
                                                <div class="btnrent d-flex justify-content-center justify-content-md-start pb-2 pt-lg-2 pt-xl-0">
                                                    <Link :href="route('catalog.index')" type="button" class="btn me-3 me-sm-4" id="btn-show" style="font-weight: 600; font-size: 30px;">Rent Now</Link>
                                                </div>
                                            </div>
                                        </div>
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
                        <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
                        <h1 class="fw-700" style="font-size: 50px; color: blueviolet;">Featured Motorcycles</h1>
                        <p class="lead text-body-secondary">24/7 efficient online quotation for your convenience. Choose your Bike and get a motorcycle rental quote now.</p>
                </div>

                    </div>
                </section>
                <div class="album py-2 bg-body-tertiary">
                    <div class="container d-flex flex-column align-items-center">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <div class="col1">
                                <div class="card shadow-sm d-flex flex-column h-100">
                                    <img :src="'images/vespa/vespa3.webp'" alt="Third Image" class="img-fluid w-100 h-100">
                                    <div class="card-body d-flex justify-content-center">
                                        <p class="card-text">Vespa X-400</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-sm d-flex flex-column h-100">
                                    <img :src="'images/suzuki/suzuki5.webp'" alt="Third Image" class="img-fluid w-100 h-100">
                                    <div class="card-body d-flex justify-content-center">
                                        <p class="card-text">Suzuki Hayabusa</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-sm d-flex flex-column h-100">
                                    <img :src="'images/suzuki/suzuki3.webp'" alt="Third Image" class="img-fluid w-100 h-100">
                                    <div class="card-body d-flex justify-content-center">
                                        <p class="card-text">Honda Smash 125</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <Link :href="route('catalog.index')" type="button" class="btn btn-sm mt-5" id="btn-show" style="font-size: 20px; font-weight: 700;" >Show more

                        </Link>
                    </div>
                </div>
            </section>

            <section class="container d-flex flex-column align-items-center mt-5">
                <hr class="featurette-divider">
                <h1 class="brand" style=";font-weight: 700;">Brands</h1>
                <div class="row featurette mx-98">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1 ">Honda</h2>
                        <p class="lead">Explore the cityscape on a reliable Honda rental motorcycle.
                             Known for their efficiency and smooth rides,
                             Honda bikes are the perfect choice for urban adventures and beyond.</p>
                    </div>
                    <div class="col-md-5">
                        <img :src="'images/logo/hondologo.jpg'" alt="Third Image" class="img-fluid w-100 h-100">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette m-8">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading fw-normal lh-1">Kawasaki</h2>
                        <p class="lead">Unleash the power of the road with our Kawasaki rental motorcycles.
                            Renowned for their high-performance engines and cutting-edge design,
                            Kawasaki bikes are your ticket to an adrenaline-fueled experience.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img :src="'images/logo/kawasakilogo.webp'" alt="Third Image" class="img-fluid w-100 h-100">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette m-8">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">Suzuki</h2>
                        <p class="lead">Embark on a thrilling journey with our Suzuki rental motorcycles.
                            Suzuki's combination of style and performance ensures an exhilarating ride,
                            whether you're cruising through scenic routes or navigating city streets..</p>
                    </div>
                    <div class="col-md-5">
                        <img :src="'images/logo/suzukilogo.jpg'" alt="Third Image" class="img-fluid w-100 h-100">
                    </div>
                </div>
                <hr class="featurette-divider">
                <div class="row featurette m-8">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading fw-normal lh-1">Vespa</h2>
                        <p class="lead">Experience the charm of the city with our Vespa rental scooters.
                            Stylish, iconic, and perfect for urban exploration,
                            Vespa scooters provide a unique and fashionable way to navigate your surroundings.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img :src="'images/logo/vespalogo.jpg'" alt="Third Image" class="img-fluid w-100 h-100">
                    </div>
                </div>
                <hr class="featurette-divider">
                <div class="row featurette m-8">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">Yamaha</h2>
                        <p class="lead">Ride in style and comfort with our Yamaha rental motorcycles.
                            From sleek sportbikes to versatile cruisers,
                            Yamaha offers a diverse range of bikes for every rider's preference,
                            ensuring an enjoyable and memorable journey.</p>
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
<style scoped>
    *{
    font-family: var(--si-body-font-family);
    line-height: var(--si-body-line-height);
}
.btn {
    color: #FFFFD0;
  --c: no-repeat linear-gradient(#FFFFD0 0 0);
  background:
    var(--c)  calc(-101% + var(--p,0%)) 100%,
    var(--c)  calc( 201% - var(--p,0%)) 0;
  background-size: 50.1% var(--p,.08em);
  transition: .3s var(--t,0s), background-position .3s calc(.3s - var(--t,0s));
}
.btn:hover {
  --p: 101%;
  --t: 0.3s;
  color: #A555EC;
 font-weight: 300;
}
.card-text{
    font-weight: 600;
    color: #A555EC;
}
#btn-show{

    color: #A555EC;
  --c: no-repeat linear-gradient(#FFA1F5 0 0);
  background:
    var(--c)  calc(-101% + var(--p,0%)) 100%,
    var(--c)  calc( 201% - var(--p,0%)) 0;
  background-size: 50.1% var(--p,.08em);
  transition: .3s var(--t,0s), background-position .3s calc(.3s - var(--t,0s));

  border-radius: 7 0 7 0;
}
#btn-show:hover{
    --p: 101%;
  --t: 0.3s;
  color: #FFFFD0;
 font-weight: 300;
}
#text{
    color: #FFFFD0;
}
span{
    color: #A555EC;
}
.carousel-text{
    color: #FFFFD0;
}
h2{
    color: #A555EC
    ;
}
p{
    color: #000000;
    font-size: 20px;
}
.card{
    -webkit-filter: brightness(50%);
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius:  20px 0 20px 0;
}
.card:hover{
    -webkit-filter: brightness(100%);
}

</style>
