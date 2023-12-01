<script setup>
import { ref, onMounted, defineProps } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';

const navItems = [
    { label: 'Home', route: 'index' },
    { label: 'Catalog', route: 'catalog.index' },
    { label: 'Contact Us', route: 'contact' },
    { label: 'About', route: 'about' },
];
const { url, component } = usePage();

const refreshPage = () => {
    if (component === 'index') {
        // Refresh the current page only if the URL is '/'
        window.location.reload();
    }
};
const { props } = usePage();

console.log(props.auth.user.is_admin);
</script>

<template>
    <header>
        <nav class="navbar navbar-expand-md bg-body-tertiary">
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
                            <Link :href="route(item.route)" class="nav-link active" aria-current="page">
                                {{ item.label }}
                            </Link>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user"></i> {{ $page.props.auth.user.name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><Link :href="route('profile.edit')" class="dropdown-item">Edit Profile</Link></li>
                                <li><Link :href="route('logout')" class="dropdown-item text-danger" method="post" as="button"
                                        @click="refreshPage">Logout</Link></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <slot />
</template>
