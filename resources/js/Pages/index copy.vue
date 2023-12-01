<script setup>
import { Head, Link, useForm, router } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue'

const props = defineProps(
    {
        motorcycles: Object
    }
)

const form = useForm(props.motorcycles);

const destroy = (id) => {
    if (confirm('Are you sure?')) {
        form.delete(route('motorcycles.destroy', id))
    }
}

let search = ref('');

watch(search, value => {
    router.get('/motorcycles', { search: value }, { preserveState: true });
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
            <div>
                <Link :href="route('motorcycles.create')" class="btn btn-primary rounded-pill m-1">Add a Motorcycle</Link>
            </div>
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search..." v-model="search">
                <button class="btn btn-secondary" @click="resetSearch">Reset</button>
            </div>
            <div class="row mt-4">
                <template v-for="motor in motorcycles" :key="motor.id">
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <img :src="getImagePath(motor)" :alt="motor.model" class="card-img-top w-100 h-100img-fluid"
                                    style="object-fit: contain; max-height: 250px;">
                                <h6 class="card-subtitle mb-2 text-muted">{{  }}</h6>
                                <h5 class="card-title">{{ motor.brand.name + ' '+ motor.model }}</h5>
                                <p class="card-text">{{ motor.availability === 1 ? 'Available' : 'Not available' }}</p>
                                <small class="text-body-secondary">PHP {{ motor.daily_rate }}/day</small>
                            </div>
                            <div class="card-footer">
                                <div class="btn-group" role="group">
                                    <Link :href="route('motorcycles.edit', motor.id)" class="btn btn-primary rounded-pill">
                                    Edit</Link>
                                    <button class="btn btn-danger rounded-pill" @click="destroy(motor.id)">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </GuestLayout>
</template>


