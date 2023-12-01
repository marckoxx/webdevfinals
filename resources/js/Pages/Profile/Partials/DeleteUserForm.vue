<script setup>
import DangerButton from '@/Components/DangerButton.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import Modal from '@/Components/Modal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/vue3';
import { nextTick, ref } from 'vue';

const confirmingUserDeletion = ref(false);
const passwordInput = ref(null);

const form = useForm({
    password: '',
});

const confirmUserDeletion = () => {
    confirmingUserDeletion.value = true;

    nextTick(() => passwordInput.value.focus());
};

const deleteUser = () => {
    form.delete(route('profile.destroy'), {
        preserveScroll: true,
        onSuccess: () => closeModal(),
        onError: () => passwordInput.value.focus(),
        onFinish: () => form.reset(),
    });
};

const closeModal = () => {
    confirmingUserDeletion.value = false;

    form.reset();
};
</script>

<template>
    <section class="space-y-6">
        <header>
            <h2 class="text-lg font-medium ">Delete Account</h2>

            <p class="mt-1 text-sm text-secondary">
                Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting
                your account, please download any data or information that you wish to retain.
            </p>
        </header>

        <button class="btn btn-danger" @click="confirmUserDeletion">Delete Account</button>

        <div class="modal" :class="{ 'show': confirmingUserDeletion }">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title text-lg font-medium ">
                            Are you sure you want to delete your account?
                        </h2>
                        <button type="button" class="btn-close" aria-label="Close" @click="closeModal"></button>
                    </div>
                    <div class="modal-body">
                        <p class="mt-1 text-sm text-secondary">
                            Once your account is deleted, all of its resources and data will be permanently deleted. Please
                            enter your password to confirm you would like to permanently delete your account.
                        </p>
                        <div class="mt-3">
                            <label for="password" class="visually-hidden">Password</label>
                            <input id="password" ref="passwordInput" v-model="form.password" type="password"
                                class="form-control mt-1" placeholder="Password" @keyup.enter="deleteUser" />
                            <div class="invalid-feedback mt-2" v-if="form.errors.password">{{ form.errors.password }}</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" @click="closeModal">Cancel</button>
                        <button class="btn btn-danger ms-3" :class="{ 'disabled': form.processing }"
                            :disabled="form.processing" @click="deleteUser">
                            Delete Account
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
