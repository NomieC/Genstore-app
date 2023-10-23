<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 text-black" :status="session('status')" />
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Credential (Email or Username) -->
        <div>
            <x-input-label class="block mt-1 w-full text-black" for="credential" :value="__('Email or Username')" />
            <x-text-input id="credential" class="bg-black block mt-1 w-full text-white" type="text" name="credential" :value="old('credential')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('credential')" class="mt-2 text-black" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label class="block mt-1 w-full text-black" for="password" :value="__('Password')" />

            <x-text-input id="password" class="bg-black block mt-1 w-full text-white"
                type="password"
                name="password"
                required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2 text-black" />
        </div>

        <br>
        <div class="flex justify-between items-center mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 flex items-center text-black" href="{{ route('home') }}">
                {{ __('Back to home') }}
            </a>

            <div class="flex space-x-4"> <!-- Create a flex container to hold the "Dont have the account?" link and the "Log in" button -->
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 flex items-center text-black" href="{{ route('register') }}">
                    {{ __('Register?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </div>
    </form>
</x-guest-layout>
