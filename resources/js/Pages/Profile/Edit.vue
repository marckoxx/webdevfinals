<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    status: {
        type: String,
    },
});
</script>

<template>
    <Head title="Profile" />

    <AuthenticatedLayout>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="font-weight-bold text-xl">Profile</h2>
                </div>
            </div>

            <div class="py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-8">
                            <div class="p-4 p-md-8  shadow-sm rounded">
                                <UpdateProfileInformationForm :status="status"
                                    class="max-w-xl" />
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-8">
                            <div class="p-4 p-md-8  shadow-sm rounded">
                                <UpdatePasswordForm class="max-w-xl" />
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-8">
                            <div class="p-4 p-md-8  shadow-sm rounded">
                                <DeleteUserForm class="max-w-xl" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
