@extends('back.customer.auth.layout.app')

@section('content')


    <form method="POST" action="{{ route('customer.password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <label for="email" :value="__('Email')" />
            <text-input id="email" class="block mt-1 w-full" type="email" name="email"
                :value="old('email', $request - > email)" required autofocus autocomplete="username" />
            <input-error :messages="$errors - > get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" :value="__('Password')" />
            <text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
            <input-error :messages="$errors - > get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation" :value="__('Confirm Password')" />

            <text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <input-error :messages="$errors - > get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <primary-button>
                {{ __('Reset Password') }}
            </primary-button>
        </div>
    </form>
@endsection