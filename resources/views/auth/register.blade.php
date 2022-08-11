<x-guest-layout>
    <x-slot name="title">
        Register
    </x-slot>

    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                <span class="text-xl">
                    Huzaifa Dental Clinic
                </span>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="Name" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password"
                                placeholder="Password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required
                                placeholder="Confirm Password" />
            </div>

            <!-- Select Role -->
            <div class="mt-4">
                <x-label for="user_role" :value="__('Role')" />

                <select class="block mt-1 w-full rounded border-gray-300" name="user_role" id="user_role">
                    <option>Dentist</option>
                    <option>Patient</option>
                </select>
            </div>

            <!-- Select gender -->
            <div class="mt-4">
                <x-label for="user_gender" :value="__('Gender')" />

                <select class="block mt-1 w-full rounded border-gray-300" name="user_gender" id="user_gender">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
