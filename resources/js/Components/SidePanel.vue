<template>
    <div class="col-lg-3 sidepanel d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="height: 100vh;">
        <h5>OVERVIEW</h5>
        <ul class="nav  flex-column mb-auto">
            <li class="nav-item">
                <a href="/dashboard" class="nav-link" :class="{ active: isActive('/dashboard') }">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#home"></use>
                    </svg>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="/rentalrecords" class="nav-link link-body-emphasis" :class="{ active: isActive('/rentalrecords') }">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#speedometer2"></use>
                    </svg>
                    Rental Records
                </a>
            </li>
            <li>
                <a href="/bookingrecords" class="nav-link link-body-emphasis" :class="{ active: isActive('/bookingrecords') }">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#speedometer2"></use>
                    </svg>
                    Booking Records
                </a>
            </li>
            <li>
                <a href="/notification" class="nav-link link-body-emphasis" :class="{ active: isActive('/notification') }">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#table"></use>
                    </svg>
                    Notification
                </a>
            </li>
        </ul>
    </div>
</template>

<script setup>
import { useRoute } from '@inertiajs/inertia-vue3';

const route = useRoute();

const isActive = (path) => {
    return route.current(path);
};
</script>

<style scoped>
/* Your custom styles for the sidepanel */
.sidepanel {
    /* Your styles */
}
/* Add styles for the active link if necessary */
.nav-link.active {
    /* Your styles for the active link */
}
</style>
