<script setup>
import { Link } from '@inertiajs/vue3';

const navItems = [
    { label: 'Home', route: 'index' },
    { label: 'Catalog', route: 'catalog.index' },
    { label: 'Contact', route: 'contact' },
    { label: 'About', route: 'about' },
];
</script>

<template>
    <slot />

    <section class="footer pt-15 ">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <div>
                        <h1 class="px-14 mb-4 fw-bold" style="color: #FFFFD0;">Ride. Explore. Repeat.</h1>
                        <!-- text -->
                        <p class="px-lg-6">
                            "Discover the freedom of the open road with our motorcycle rental services.
                            Unleash your adventurous spirit and explore the world on two wheels.
                            Ride with us and make every journey an unforgettable experience."
                        </p>

                        <div class="footerbtn  mt-4">
                            <link rel="stylesheet" href="login.vue">Explore Now !!!
                        </div>
                    </div>
                    <!-- col -->
                    <div class="mb-4 mt-14">
                        <p class="mb-0 fs-6">
                            Copyright 2023 © MotoRent Motorcycle Rental Company.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<style scoped>
* {
    font-family: var(--si-body-font-family);
}

.navbar {
    background-image: linear-gradient(to bottom right, #FFFFD0, #A555EC);
}

.navmenu-item:hover {
    font-size: 1em;
    border-radius: 10px 0 10px 0;
    background-image: linear-gradient(to bottom right, #D09CFA, #FFFFD0);
    transform: translateY(-10px);
}

.navmenu-item {
    font-weight: 700;
    transition: transform 250ms;
}

.footer {

    padding: 40px;
    background-image: linear-gradient(to bottom right, #A555EC, #FFFFD0);
}

.footerbtn {
    border-radius: 5px;
    height: 30px;
    background: linear-gradient(#A555EC 0 0) var(--p, 0) / var(--p, 0) no-repeat;
    transition: 0.4s, background-position 0s;
}

.footerbtn:hover {
    --p: 100%;
    color: #fff;
}
</style>
