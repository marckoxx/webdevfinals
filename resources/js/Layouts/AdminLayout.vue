<script setup>
import { ref, onMounted, defineProps } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';

const navItems = [
    { label: 'Dashboard', route: 'dashboard.index' },
    { label: 'Management', route: 'management' },
];
const { url, component } = usePage();

const refreshPage = () => {
    if (component === 'index') {
        // Refresh the current page only if the URL is '/'
        window.location.reload();
    }
};
const { props } = usePage();
</script>

<template>
    <header>
        <nav class="navbar navbar-expand-md bg-body-tertiary sticky-top">
            <div class="container-fluid">
                <Link class="navbar-brand d-flex align-items-center" :href="route('dashboard.index')">
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
                                <i class="fa-duotone fa-user" style="font-size: 10px;"></i> {{ $page.props.auth.user.name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <Link :href="route('profile.edit')" class="dropdown-item">Edit Profile</Link>
                                </li>
                                <li>
                                    <Link :href="route('logout')" class="dropdown-item text-danger" method="post"
                                        as="button" @click="refreshPage">Logout</Link>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<slot /></template>
<style scoped>
*{
font-family: var(--si-body-font-family);
}
.navbar{

    background-image: linear-gradient(to bottom right, #FFFFD0, #A555EC) ;
}
.nav-item:hover{
font-size: 1em;
border-radius: 10px 0 10px 0 ;
background-image: linear-gradient(to bottom right, #D09CFA, #FFFFD0) ;
transform: translateY(-10px);
}
.nav-item{
font-weight: 700;
transition: transform 250ms;
}
.footer{
padding: 40px;
background-image: linear-gradient(to bottom right, #A555EC , #FFFFD0) ;
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
