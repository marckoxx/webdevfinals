<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { ref, defineProps } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';


const { props } = usePage();

const authUser = ref(props.auth.user !== null);
const isAdmin = props.auth.user && props.auth.user.is_admin === 1;

</script>
<template>
    <template v-if="isAdmin">
        <AdminLayout />
    </template>
    <template v-else-if="authUser">
        <AuthenticatedLayout />
    </template>
    <template v-else>
        <GuestLayout />
    </template>

    <slot />
</template>
