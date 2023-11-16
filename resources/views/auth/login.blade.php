<?php
/*
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
*/
?>
<body>
    @vite(['resources/css/welcome/bootstrap.min.css'])
    @vite(['resources/css/welcome/app.css'])
   
<div class="modal fade" id="rtmodal-1" tabindex="-1" role="dialog" aria-labelledby="rtmodal-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered rt-lgoinmodal " role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="rt-modal-headr rt-mb-20 one">
                        <img src="/skystreamlogo.png" class="image-size" alt="modal logo" draggable="false">
                        <h4>Login in to Sky stream</h4>
                        <p>Log in to get in the moment updates on the things that interest you.</p>
                    </div>
                    <!-- /.rt-modal-headr -->
                    <div class="rt-modal-headr rt-mb-20 two">
                        <img src="assets/images/logo/Logo-icon.png" alt="modal logo" draggable="false">
                        <h4>Create your Account</h4>
                        <p>Log in to get in the moment updates on the things that interest you.</p>
                    </div>
                    <!-- /.rt-modal-headr -->
                    <div class="rt-modal-input one">
                        <form class="rt-form"  method="POST" action="{{ route('login') }}">
                        @csrf
                            <input type="email"  name="email" class="form-control pill rt-mb-15" placeholder="Email">
                            <input type="password" name="password" class="form-control pill rt-mb-15" placeholder="Password">
                            <div class="form-group forgot-pass">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheckss">
                                    <label class="form-check-label" for="gridCheckss">
                                     Remember Password
                                </label>
                                </div>
                                <!-- ./orm-group -->
                            </div>
                            <input type="submit" class="rt-btn rt-gradient pill d-block text-uppercase " value="Log In">
                        </form>
                        <div class="ac-register">
                            <span>Don’t have an account? <a href="/register" class="open-creatac">Sign Up Now <i class="icofont-double-right"></i></a></span>
                        </div>
                        <!-- /.ac-register -->
                    </div>
                    <!-- /.rt-modal-input -->
                    <div class="rt-modal-input two">
                        <form action="#" class="rt-form">
                            <input type="text" class="form-control pill rt-mb-15" placeholder="User name">
                            <input type="password" class="form-control pill rt-mb-15" placeholder="Enter your mail address">
                            <input type="password" class="form-control pill rt-mb-15" placeholder="Password">
                            <div class="form-group forgot-pass">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck333">
                                    <label class="form-check-label" for="gridCheck333">
                                    I'd like to hear about promos, new products,and much more!
                                </label>
                                </div>
                                <!-- ./orm-group -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck222">
                                    <label class="form-check-label" for="gridCheck222">
                                    By clicking "Sign up" you agree to our Terms of Service and Privacy Policy
                                </label>
                                </div>
                                <!-- ./orm-group -->
                            </div>
                            <input type="submit" class="rt-btn rt-gradient pill d-block text-uppercase " value="Log In">
                        </form>
                        <div class="ac-register">
                            <span>Already have an account?<a href="#">LOGIN <i class="icofont-double-right"></i></a></span>

                        </div>
                        <!-- /.ac-register -->
                    </div>
