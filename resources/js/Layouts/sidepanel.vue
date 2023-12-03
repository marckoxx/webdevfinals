<script setup>
import { Link } from '@inertiajs/vue3';
const overview = [
    { label: 'Dashboard', route: 'dashboard.index' },
    { label: 'Reserve Forms', route: 'about' },
];
const Management = [
    { label: 'Rental Management', route: 'management' },
];
</script>

<template>
    <slot />
                    <h5>OVERVIEW</h5>
                    <ul class="nav  flex-column mb-auto">
                        <li v-for="(item, index) in overview" :key="index" class="sidepanel">
                            <Link :href="route(item.route)" class="nav-link active" aria-current="page">
                            {{ item.label }}
                            </Link>
                        </li>
                    </ul>
                    <h5>MANAGEMENT</h5>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li v-for="(item, index) in Management" :key="index" class="sidepanel">
                            <Link :href="route(item.route)" class="nav-link active" aria-current="page">
                            {{ item.label }}
                            </Link>
                        </li>
                </ul>

                <slot />
</template>
<style scoped>

</style>
