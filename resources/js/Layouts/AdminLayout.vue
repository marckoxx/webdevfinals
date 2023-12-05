<script setup>
import { ref, onMounted, defineProps } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';

const { url, componen } = usePage();
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
        <nav class="navbar navbar-expand-md " style="height: 60px;">
            <div class="container-fluid me-5" style="justify-content: flex-end; ">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
<<<<<<< Updated upstream
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-decoration: none;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $page.props.auth.user.name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <Link :href="route('profile.edit')" class="dropdown-item">Edit Profile</Link>
                            </li>
                            <li>
                                <Link :href="route('logout')" class="dropdown-item text-danger" method="post" as="button"
                                    @click="refreshPage">Logout</Link>
                            </li>
                        </ul>
                    </li>
=======
                <i class="fa-regular fa-circle-user"></i>
                <div class="collapse navbar-collapse fw-bold " id="navbarSupportedContent" style="text-decoration: none;">
                            <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                 {{ $page.props.auth.user.name }}
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
>>>>>>> Stashed changes
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
    background-color: #D09CFA;
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

li {
    text-decoration: none;
}</style>
