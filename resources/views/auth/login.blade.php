<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <link href="css/home.css" rel="stylesheet">


    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->

        <div class=login-form>
            <x-input-label for="email" :value="__('Email')" class="login-title" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />


        <!-- Password -->
        <div><br>
            <x-input-label for="password" :value="__('Password')"  class="login-title"/>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>


        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember" >
                <span class="login-title mx-auto p-2" style="width: 200px" >{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="forget" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="btn">
                {{ __('Log in') }}
            </div>
            </x-primary-button>
        </div>
    </div>
    </form>
</x-guest-layout>
