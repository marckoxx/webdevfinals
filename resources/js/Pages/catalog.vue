<script setup>
import { Head, Link, router } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue'

const props = defineProps(
    {
        motorcycles: Object
    }
)

let search = ref('');

watch(search, value => {
    router.get('/catalog', { search: value }, { preserveState: true, preserveScroll: true });
});

const resetSearch = () => {
    search.value = '';
};

const getImagePath = (motor) => {
    // Replace 'image_path' with the actual field name storing the image path
    return motor.image_path ? `${window.location.origin}/${motor.image_path}` : ''; // Generate the full image URL
};
</script>

<template>
    <GuestLayout>
        <div class="container my-4">

            <Head title="Index of Motorcycles" />

            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-light">Catalog</h1>
                        <p class="lead text-body-secondary">Pick motorcycles from 5 reputable brands</p>
                    </div>
                </div>
            </section>

            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search..." v-model="search">
                <button class="btn btn-secondary" @click="resetSearch">Reset</button>
            </div>
            <div class="row mt-4">
                <template v-for="motor in motorcycles.data" :key="motor.id">
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <img :src="getImagePath(motor)" :alt="motor.model" class="card-img-top w-100 h-100img-fluid"
                                    style="object-fit: contain; max-height: 250px;">
                                <h6 class="card-subtitle mb-2 text-muted">{{ }}</h6>
                                <h5 class="card-title">{{ motor.brand.name + ' ' + motor.model }}</h5>
                                <p class="card-text" :class="{ 'text-danger': motor.availability === 0 }">{{
                                    motor.availability === 1 ? 'Available' : 'Not available' }}</p>
                                <small class="text-body-secondary">PHP {{ motor.daily_rate }}/day</small>
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                <div class="btn-group" role="group">
                                    <Link :href="route('motorcycle.show', motor.id)" class="btn btn-primary rounded-pill"
                                        :disabled="motor.availability === 0"
                                        :class="{ 'disabled': motor.availability === 0 }">
                                    Avail
                                    </Link>

                                </div>
                            </div>
                        </div>
                    </div>
                </template>
                <div v-if="motorcycles.links">
                    <Link class="btn" v-for="link in motorcycles.links" :key="link.url" :href="link.url">
                    {{ link.label }}
                    </Link>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>


