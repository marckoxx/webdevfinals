<template>
    <Head title="Management" />

    <div class="container-fluid">
        <div class="row">
                <sidepanel />
                <div class="p-0 col-lg-10 " style="height: 100vh;">
    <Layout />
                    <div class="container1  p-0 col-lg-10" style="height: 100vh;">
                        <div class="contianer">
                            <div class="row mt-4 ms-3">
                                <div class="col-auto">
                                    <h2 class="fw-bold">Rental Management</h2>
                                </div>
                            </div>
                            <div class="row" >
                            <div class="col-sm-4 col-lg-12 order-sm-1 mt-3  ">
                                <!-- Visible on screens > 991px -->
                                <div class="row g-5 mx-2">
                                    <div class="col-md-3">
                                        <ul class="list-group">
                                            <li class="button rounded-pill mb-3"><Link :href="route('motorcycles.index')" class="btn">Manage Motorcycles</Link></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="list-group">
                                            <li class="button  rounded-pill mb-3"><Link :href="route('brands.index')" class="btn">Manage Motorcycle Brands</Link></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="list-group">
                                            <li class="button  rounded-pill mb-3"><Link :href="route('types.index')" class="btn">Manage Motorcycle Types</Link></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
                </div>
        </div>
    </div>
</template>
<style scope>
.button{
    background-image: linear-gradient(to bottom right, #D09CFA, #FFFFD0);
    text-decoration: none;
    display: flex;
    align-items: center;
    width: 230px;

}
.btn{
    color: black;
}
.button:hover {
    background-image: linear-gradient(to bottom right, #D09CFA, #FFFFD0);
    transform: translateY(-10px);
}
</style>
<script setup>
import sidepanel from '@/Layouts/sidepanel.vue';
import Layout from '@/Layouts/Layout.vue';
import Footer from '@/Layouts/Footer.vue';
import { ref, defineProps, onMounted } from 'vue';
import { router, Link, usePage } from '@inertiajs/vue3';
</script>
