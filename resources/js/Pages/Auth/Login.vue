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

            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                {{ status }}
            </div>
            <div class=" row mx-5 g-lg-5 py-5">
                <div class="img-cont col-lg-7 text-center text-lg-start">
                    <img src="images/logo/logo3.png" alt="" class="img-fluid">
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

                    <div class="tab-content" id="loginSignupTabContent">
                        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                            <form class="p-4 p-md-5 border rounded-3" @submit.prevent="submit">
                                <!--email-->
                                <div class="form-floating mb-3">
                                    <TextInput id="email" type="email" class="form-control" v-model="form.email" required
                                        autofocus autocomplete="username" />
                                    <InputLabel for="email" value="Email" />
                                    <div class="mt-2">
                                        <InputError class="mt-2" :message="form.errors.email" />
                                    </div>
                                </div>
                                <!--password-->
                                <div class="form-floating mb-3">
                                    <TextInput id="password" type="password" class="form-control" v-model="form.password"
                                        required autocomplete="current-password" />
                                    <InputLabel for="password" value="Password" />
                                    <div class="mt-2">
                                        <InputError class="mt-2" :message="form.errors.password" />
                                    </div>
                                </div>
                                <div class="block mt-4">
                                    <label class="flex items-center">
                                        <Checkbox name="remember" v-model:checked="form.remember" />
                                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">Remember me</span>
                                    </label>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <Button class="btn w-100" style="font-weight: bold;"
                                        :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                        Log in
                                    </Button>
                                    <Link v-if="canResetPassword" :href="route('password.request')"
                                        class="underline text-sm text-black dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    Forgot your password?
                                    </Link>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade show active" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                            <form class="p-4 p-md-5  " @submit.prevent="submit">
                                <div class="form-floating mb-3">
                                    <TextInput id="name" type="text" class="form-control" v-model="form.name" required
                                        autofocus autocomplete="name" />
                                    <InputLabel for="name" value="Name" />
                                    <div class="mt-2">
                                        <InputError class="mt-2" :message="form.errors.name" />
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <TextInput id="email" type="email" class="form-control" v-model="form.email" required
                                        autocomplete="username" />
                                    <InputLabel for="email" value="Email" />
                                    <div class="mt-2">
                                        <InputError class="mt-2" :message="form.errors.email" />
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <TextInput id="password" type="password" class="form-control" v-model="form.password"
                                        required autocomplete="new-password" />
                                    <InputLabel for="password" value="Password" />
                                    <div class="mt-2">
                                        <InputError class="mt-2" :message="form.errors.password" />
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <TextInput id="password_confirmation" type="password" class="form-control"
                                        v-model="form.password_confirmation" required autocomplete="new-password" />
                                    <InputLabel for="password_confirmation" value="Confirm Password" />

                                    <div class="mt-2">
                                        <InputError class="mt-2" :message="form.errors.password_confirmation" />
                                    </div>
                                </div>

                                <div class="block mt-4">
                                    <Button class="btn w-100" style="font-weight: bold;"
                                        :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                        Register
                                    </Button>
                                    <Link :href="route('login')"
                                        class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    Already registered?
                                    </Link>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
}
</style>
