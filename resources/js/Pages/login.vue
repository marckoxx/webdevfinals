<template>
    <GuestLayout>

        <main >
            <div class="col align-items-center g-lg-5 py-5" id="cont">
                <div class="logo text-center text-lg-start">
                    <img src="images/logo/logo3.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="d-flex justify-content-center">
                        <ul class="nav nav-pills mb-3" id="loginSignupTabs" role="tablist">
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
                        <!-- Login Tab Content -->
                        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                            <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                                <!-- Login form content here -->
                                <!-- Example inputs -->
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="loginEmail" placeholder="name@example.com">
                                    <label for="loginEmail">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                                    <label for="loginPassword">Password</label>
                                </div>
                                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                                <div class="checkbox mb-3 d-flex justify-content-end">
                                    <label>
                                        <input type="checkbox" value="remember-me"> Remember me
                                    </label>
                                </div>
                            </form>
                        </div>
                        <!-- Sign Up Tab Content -->
                        <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                            <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="firstName" placeholder="First Name">
                                            <label for="firstName">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                                            <label for="lastName">Last Name</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Email -->
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="signupEmail"
                                        placeholder="name@example.com">
                                    <label for="signupEmail">Email address</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="signupPassword"
                                                placeholder="Password">
                                            <label for="signupPassword">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="confirmPassword"
                                                placeholder="Confirm Password">
                                            <label for="confirmPassword">Confirm Password</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sign Up Button -->
                                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
                                <!-- Already have an account? Link -->
                                <p class="mt-3 text-center">Already have an account? <a href="#">Log In</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </GuestLayout>
</template>
<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
</script>
