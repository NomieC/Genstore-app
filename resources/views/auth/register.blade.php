<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- First Name -->
        <div>
            <x-input-label class="block mt-1 w-full text-black" for="first_name" :value="__('First Name')" />
            <x-text-input id="first_name" class="bg-black block mt-1 w-full text-white" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2 text-black" />
        </div>

        <!-- Last Name -->
        <div class="mt-4">
            <x-input-label class="block mt-1 w-full text-black" for="last_name" :value="__('Last Name')" />
            <x-text-input id="last_name" class="bg-black block mt-1 w-full text-white" type="text" name="last_name" :value="old('last_name')" required autocomplete="last_name" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2 text-black" />
        </div>

        <!-- Username -->
        <div class="mt-4">
            <x-input-label class="block mt-1 w-full text-black" for="username" :value="__('Username')" />
            <x-text-input id="username" class="bg-black block mt-1 w-full text-white" type="text" name="username" :value="old('username')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2 text-black" />
        </div>

        <!-- Birthdate -->
        <div class="mt-4">
            <x-input-label class="block mt-1 w-full text-black" for="birthdate" :value="__('Birthdate')" />
            <x-text-input id="birthdate" class="bg-black block mt-1 w-full text-white" type="date" name="birthdate" :value="old('birthdate')" required autocomplete="birthdate" />
            <x-input-error :messages="$errors->get('birthdate')" class="mt-2 text-black" />
        </div>

        <!-- Gender -->
        <div class="mt-4">
            <x-input-label class="block mt-1 w-full text-black" for="gender" :value="__('Gender')" />
            <x-text-input id="gender" class="bg-black block mt-1 w-full text-white" type="text" name="gender" :value="old('gender')" required autocomplete="gender" />
            <x-input-error :messages="$errors->get('gender')" class="mt-2 text-black" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label class="block mt-1 w-full text-black" for="email" :value="__('Email')" />
            <x-text-input id="email" class="bg-black block mt-1 w-full text-white" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-black" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label class="block mt-1 w-full text-black" for="password" :value="__('Password')" />
            <x-text-input id="password" class="bg-black block mt-1 w-full text-white" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-black" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label class="block mt-1 w-full text-black" for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="bg-black block mt-1 w-full text-white" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-black" />
        </div>

        <br>
        <div class="flex justify-between items-center mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 flex items-center text-black" href="{{ route('home') }}">
                {{ __('Back to home') }}
            </a>
            
            <div class="flex space-x-4"> <!-- Create a flex container to hold the "Already registered?" link and the "Register" button -->
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 flex items-center text-black" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                
                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </div>
    </form>
</x-guest-layout>
