<script setup>
import { Link } from '@inertiajs/vue3';
const overview = [
    { icon:'fa-solid fa-table-columns ', label: 'Dashboard', route: 'dashboard.index' },
    { icon :'fa-solid fa-motorcycle' ,label: 'Rental Records', route: 'about' },
    { icon :'fa-solid fa-clipboard-list' ,label: 'Booking Records', route: 'about' },
    { icon :'fa-solid fa-square-envelope' ,label: 'Reserve Forms', route: 'about' },

];
const Management = [
{ icon: 'fa-solid fa-list-check', label: 'Rental Management', route: 'management' },
{ icon: 'fa-solid fa-user-gear', label: 'User Management', route: 'users.index' },
];

</script>

<template>
    <slot />
    <div class="container col-lg-2 sidepanel d-flex flex-column align-items-center p-0 " style="height: 100vh;">
        <Link class="navbar-brand d-flex align-items-center ps-2 my-4" :href="route('dashboard.index')">
                <img class="rounded mr-1" :src="'/images/logo/logo3.png'" alt="Company Logo"
                    style="width: 130px; height:130px;">

                </Link>
        <div class="row-12 row-md-4 my-3 ">
            <h5 class="my-4 fw-bold">OVERVIEW</h5>
            <ul class="nav  flex-column mb-auto pe-0">
                <li v-for="(item, index) in overview" :key="index" class="sidepanel">
                    <Link :href="route(item.route)" class="nav-link active" style="color: black;" aria-current="page">
                        <i :class="item.icon"></i> {{ item.label }}
                    </Link>
                </li>
            </ul>
        </div>
        <div class="row-6 row-md-4">
            <h5 class="my-4 fw-bold">MANAGEMENT</h5>
            <ul class="nav  flex-column mb-auto">
                <li v-for="(item, index) in Management" :key="index" class="sidepanel">
                    <Link :href="route(item.route)" class="nav-link active" style="color: black;" aria-current="page">
                        <i :class="item.icon"></i> {{ item.label }}
                    </Link>
                </li>
            </ul>
        </div>
</div>

    <slot />
</template>
<style scoped>
.container{
    border: 0;
    padding-right: 0;
    margin:0;
    background-image: linear-gradient(to bottom right, #D09CFA , #D09CFA, #FFFFD0) ;
    color: blueviolet;
}
.nav-link:hover{
    border-radius: 20px 0 0 20px;
    background-color: #FFFFD0;

}
a{
    padding-right: 10px;
}
</style>
