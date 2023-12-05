<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import Footer from '@/Layouts/Footer.vue'
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
    <Head title="Login" />
    <GuestLayout>
        <main>
      <div class="mx-5 row   g-lg-5 py-5" style="display: flex; align-items:center; justify-content:center; justify-content: space-around;">
            <div class="img-cont col-md-6 col-lg-5">
            <img src="images/logo/logo3.png" alt="" class="img-fluid">
            </div>
            <div class="forms col-md-6 col-lg-5">
                <h1 class="d-flex align-items-center justify-content-center fw-bold " >Log In</h1>
            <div class="tab-content " id="loginSignupTabContent">
                <!-- Login Tab Content -->
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <form  class="p-4 p-md-5 border rounded-3" @submit.prevent="submit" >
                    <div class="form-floating mb-5">
                                <div class="mb-3">
                                    <InputLabel for="email" value="Email" />
                                </div>
                                <TextInput
                                    id="email"
                                    type="email"
                                    class="form-control p-0 px-4"
                                    v-model="form.email"
                                    required
                                    autofocus
                                    autocomplete="username"/>

                                <div class="mt-2">
                                <InputError class="mt-2" :message="form.errors.email" />
                                </div>
                            </div>
                            <div class="form-floating mb-5">
                                <div class="mb-3">
                                    <InputLabel for="password" value="Password" />
                                </div>
                                <TextInput
                                    id="password"
                                    type="password"
                                    class="form-control  p-0 px-4"
                                    v-model="form.password"
                                    required
                                    autocomplete="current-password"
                                />
                                <div class="mt-2">
                                    <InputError class="mt-2" :message="form.errors.password" />
                                </div>
                            </div>
                            <div class="block mt-4">
                                <label class="flex items-center mb-3">
                                    <Checkbox name="remember" v-model:checked="form.remember" />
                                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">Remember me</span>
                                </label>
                            </div>
                            <div class="flex items-center justify-end mb-3">
                                <Button class="btn w-100" style="font-weight: bold;" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                    Log in
                                </Button>
                            </div>
                            <Link
                                v-if="canResetPassword"
                                :href="route('password.request')"
                                class="text">
                                Forgot your password?
                            </Link>
                  </form>
                </div>

              </div>
            </div>
          </div>
          <Footer />
    </main>
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
.forms {
    height: 40em;
    border: 1px solid #A555EC;
    background-color: rgba(208, 156, 250, 0.5);
    /* Using rgba to set opacity only for the background */
    border-radius: 30px;
    padding: 30px;
}
.form-control{
    border-radius: 40px;
}
</style>
