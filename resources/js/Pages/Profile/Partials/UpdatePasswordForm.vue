<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const passwordInput = ref(null);
const currentPasswordInput = ref(null);

const form = useForm({
    current_password: '',
    password: '',
    password_confirmation: '',
});

const updatePassword = () => {
    form.put(route('password.update'), {
        preserveScroll: true,
        onSuccess: () => form.reset(),
        onError: () => {
            if (form.errors.password) {
                form.reset('password', 'password_confirmation');
                passwordInput.value.focus();
            }
            if (form.errors.current_password) {
                form.reset('current_password');
                currentPasswordInput.value.focus();
            }
        },
    });
};
</script>

<template>
    <section>
        <header>
            <h2 class="text-lg font-medium ">Update Password</h2>

            <p class="mt-1 text-sm text-secondary">
                Ensure your account is using a long, random password to stay secure.
            </p>
        </header>

        <form @submit.prevent="updatePassword" class="mt-6 space-y-6">
            <div class="form-group">
                <label for="current_password" class="form-label">Current Password</label>

                <input id="current_password" ref="currentPasswordInput" v-model="form.current_password" type="password"
                    class="form-control mt-1" autocomplete="current-password" />

                <InputError :message="form.errors.current_password" class="mt-2" />
            </div>

            <div class="form-group">
                <label for="password" class="form-label">New Password</label>

                <input id="password" ref="passwordInput" v-model="form.password" type="password" class="form-control mt-1"
                    autocomplete="new-password" />

                <InputError :message="form.errors.password" class="mt-2" />
            </div>

            <div class="form-group">
                <label for="password_confirmation" class="form-label">Confirm Password</label>

                <input id="password_confirmation" v-model="form.password_confirmation" type="password"
                    class="form-control mt-1" autocomplete="new-password" />

                <InputError :message="form.errors.password_confirmation" class="mt-2" />
            </div>

            <div class="d-flex align-items-center gap-4">
                <Button :disabled="form.processing">Save</Button>

                <transition enter-active-class="transition ease-in-out" enter-from-class="opacity-0"
                    leave-active-class="transition ease-in-out" leave-to-class="opacity-0">
                    <p v-if="form.recentlySuccessful" class="text-sm text-secondary">Saved.</p>
                </transition>
            </div>
        </form>
    </section>
</template>
<style scope>
button{
    padding: 6px;
    border: 0px;
    margin-top: 15px;
    width: 30%;
    border-radius: 50px ;
    text-decoration: none;
    color: black;
    height: auto;
    transition: 1s ease;
    background-color: rgb(47, 255, 85);
}


button:hover {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
    transition: 1s ease;
    transition: 1s ease;
}
</style>
