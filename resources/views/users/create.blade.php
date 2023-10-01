@extends('layouts.main')
@section('content')
  <x-page.page-header>
    <x-page.pretitle>
      {{ __('Пользователи') }}
    </x-page.pretitle>
    <x-page.title>
      {{ __('Создание пользователя') }}
    </x-page.title>
  </x-page.page-header>
  <x-page.page-body>
    <div class="col-md-6">
      <x-card.card-form action="{{ route('users.store') }}" method="post">
        <x-card.status />
        <x-card.body>
          <x-card.title>
            {{ __('Форма создания пользователя') }}
          </x-card.title>
          {{-- Start form items --}}
          <x-form.item>
            <x-form.label>{{ __('Имя пользователя') }}</x-form.label>
            <x-form.input name="username" val="{{ old('username') }}" placeholder="Username" autofocus />
          </x-form.item>
          <x-form.item>
            <x-form.label>{{ __('Пароль') }}</x-form.label>
            <x-form.input name="password" val="{{ old('password') }}" placeholder="Password" />
          </x-form.item>
          <x-form.item>
            <x-form.label>{{ __('Подтверждение пароля') }}</x-form.label>
            <x-form.input name="password_confirmation" placeholder="Password confirmation" />
          </x-form.item>
          <x-form.item>
            <x-form.label>{{ __('Роль') }}</x-form.label>
            <x-form.select name="role">
              @foreach($roles as $role)
              <x-form.option val="{{ $role->name }}" name="{{ $role->view_name }}" />
              @endforeach
            </x-form.select>
          </x-form.item>
          {{-- End form items --}}
        </x-card.body>
        <x-card.footer>
          <x-form.button type="submit">{{ __('Создать') }}</x-form.button>
        </x-card.footer>
      </x-card.card-form>
    </div>
  </x-page.page-body>
@endsection