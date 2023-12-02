<script setup>
import { Link } from '@inertiajs/vue3';

const navItems = [
    { label: 'Home', route: 'index' },
    { label: 'Catalog', route: 'catalog.index' },
    { label: 'Contact', route: 'contact' },
    { label: 'About', route: 'about' },
    { label: 'Login', route: 'login' },
    { label: 'Sign Up', route: 'register' },
];
</script>

<template>
    <header>
        <nav class="navbar navbar-expand-md d-flex justify-content-around" style="font-weight: 700;">
            <div class="container-fluid">
                <Link class="navbar-brand d-flex align-items-center" :href="route('index')">
                <img class="rounded mr-1" :src="'/images/logo/logo3.png'" alt="Company Logo"
                    style="width: 37px; height: 37px;">
                MotoRent
                </Link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li v-for="(item, index) in navItems" :key="index" class="nav-item">
                            <Link :href="route(item.route)"
                                :class="item.label === 'Sign Up' ? 'nav-link active  px-3 rounded fw-bold' : 'nav-link'">
                            {{ item.label }}

                            </Link>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <slot />
</template>

<style scoped>
* {
    font-family: var(--si-body-font-family);
}

.navbar {
    background-image: linear-gradient(to bottom right, #FFFFD0, #A555EC);
}

.nav-item:hover {
    font-size: 1em;
    border-radius: 10px 0 10px 0;
    background-image: linear-gradient(to bottom right, #D09CFA, #FFFFD0);
    transform: translateY(-10px);
}

.nav-item {
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


