@extends('layouts.main')
@section('guest_content')
<x-alert.alert />
<x-auth.container>
  <div class="text-center mb-4">
    <x-navbar.logo />
  </div>
  <x-auth.card>
    <x-auth.card-body>
      <x-auth.form-title>{{ __('Login to your account') }}</x-auth.form-title>
      <x-auth.form action="{{ route('auth.login') }}" method="post">
        <x-auth.item>
          <x-form.label>{{ __('Username') }}</x-form.label>
          <x-form.input name="username" placeholder="Your username" autocomplete="off" autofocus />
        </x-auth.item>
        <x-auth.item>
          <x-form.label>{{ __('Password') }}</x-form.label>
          <x-form.input type="password" name="password" placeholder="Your password" autocomplete="off" />
        </x-auth.item>
        <x-auth.item>
          <x-form.label-check>
            <x-form.checkbox name="remember" />
            <x-form.check-label>{{ __('Remember me on this device') }}</x-form.check-label>
          </x-form.label-check>
        </x-auth.item>
        <x-form.footer>
          <x-form.button class="w-100">{{ __('Sign in') }}</x-form.button>
        </x-form.footer>
      </x-auth.form>
    </x-auth.card-body>
  </x-auth.card>
</x-auth.container>
@endsection