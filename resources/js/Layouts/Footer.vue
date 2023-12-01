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

    <div class="b-example-divider mt-3"></div>
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li v-for="(item, index) in navItems" :key="index" class="nav-item">
                    <Link :href="route(item.route)" class="nav-link px-2 text-body-secondary">{{ item.label }}</Link>
                </li>
            </ul>
            <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
        </footer>
    </div>
</template>
