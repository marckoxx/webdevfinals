<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>
        <div class="container">

            <Head title="Log in" />

            <div v-if="status" class="mb-4 font-medium text-sm text-success">
                <!-- Bootstrap does not have a direct equivalent to Tailwind's text-green-600. You may adjust the color using Bootstrap classes or inline styles. -->
                {{ status }}
            </div>
            <div class="form col-md-6 col-lg-5">
                <div class="d-flex justify-content-center">
                    <ul class="nav mb-3" id="loginSignupTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="login-tab" data-bs-toggle="pill" href="#login" role="tab"
                                aria-controls="login" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="signup-tab" data-bs-toggle="pill" href="#signup" role="tab"
                                aria-controls="signup" aria-selected="false">Sign Up</a>
                        </li>
                    </ul>
                </div>

                <form @submit.prevent="submit">
                    <div class="mb-3">
                        <InputLabel for="email" value="Email" />

                        <TextInput id="email" type="email" class="form-control mt-1" v-model="form.email" required autofocus
                            autocomplete="username" />

                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>

                    <div class="mb-3">
                        <InputLabel for="password" value="Password" />

                        <TextInput id="password" type="password" class="form-control mt-1" v-model="form.password" required
                            autocomplete="current-password" />

                        <InputError class="mt-2" :message="form.errors.password" />
                    </div>

                    <div class="mb-3 form-check">
                        <label class="form-check-label">
                            <Checkbox name="remember" v-model:checked="form.remember" class="form-check-input" />
                            <span class="ms-2 text-sm text-muted">Remember me</span>
                        </label>
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <Link v-if="canResetPassword" :href="route('password.request')" class="text-muted text-sm">
                        Forgot your password?
                        </Link>

                        <PrimaryButton class="ms-4" :class="{ 'disabled': form.processing }" :disabled="form.processing">
                            Log in
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </GuestLayout>
</template>
<style scoped>
.btn {
    border-radius: 10px 0 10px 0;
    border: 0;
    color: #A555EC;
    --c: no-repeat linear-gradient(#A555EC 0 0);
    background:
        var(--c) calc(-101% + var(--p, 0%)) 100%,
        var(--c) calc(201% - var(--p, 0%)) 0;
    background-size: 50.1% var(--p, .08em);
    transition: .3s var(--t, 0s), background-position .3s calc(.3s - var(--t, 0s))
}

.btn:hover {
    --p: 101%;
    --t: 0.3s;
    color: #FFFFD0;
    font-weight: 300;
}

.form {
    height: 40em;
    border: 1px solid #A555EC;
    background-color: rgba(208, 156, 250, 0.5);
    /* Using rgba to set opacity only for the background */
    border-radius: 15px;
    padding: 40px;
}

#loginSignupTabs .nav-link {
    color: black;
    /* Change to the desired text color */
    border-color: gray;
    /* Change to the desired border color */
    transition: background-color 0.3s ease;
    /* Add a smooth transition effect */
}


#loginSignupTabs .nav-link.active {
    border-bottom: 3px solid;
    color: #A555EC;
    /* Change to the desired text color for active tab */
}</style>

