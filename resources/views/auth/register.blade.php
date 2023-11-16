<?php
/*<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
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
                        <h4>Register in to Sky stream</h4>
                    </div>
                    <!-- /.rt-modal-headr -->
                    <div class="rt-modal-headr rt-mb-20 two">
                        <img src="assets/images/logo/Logo-icon.png" alt="modal logo" draggable="false">
                        <h4>Create your Account</h4>
                        <p>Log in to get in the moment updates on the things that interest you.</p>
                    </div>
                    <!-- /.rt-modal-headr -->
                    <div class="rt-modal-input one">
                        <form class="rt-form"  method="POST" action="{{ route('register') }}">
                        @csrf
                            <input type="text"  name="name" class="form-control pill rt-mb-15" placeholder="Name">
                            <input type="email"  name="email" class="form-control pill rt-mb-15" placeholder="Email">
                            <input type="password" name="password" class="form-control pill rt-mb-15" placeholder="Password">
                            <input type="Confirm password" name="password_confirmation" class="form-control pill rt-mb-15" placeholder="Confirm Password">
                            <div class="form-group forgot-pass">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheckss">
                                    <label class="form-check-label" for="gridCheckss">
                                     Remember Password
                                </label>
                                </div>
                                <!-- ./orm-group -->
                            </div>
                            <input type="submit" class="rt-btn rt-gradient pill d-block text-uppercase " value="Register">
                        </form>
                        <div class="ac-register">
                            <span>Already have an account? <a href="/login" class="open-creatac">Login <i class="icofont-double-right"></i></a></span>
                        </div>
                        <!-- /.ac-register -->
                    </div>
                    
                    </div>

