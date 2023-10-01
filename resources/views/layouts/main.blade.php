<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Admin panel - Laravel</title>
    @vite('resources/css/app.css')
  </head>
  <x-alert.alert />
  <x-page.body>
    <x-page.page>
      @auth
        @include('includes.header')
        @include('includes.admin.main-menu')
        <x-page.wrapper>
          @yield('content')
          @include('includes.footer')
        </x-page.wrapper>
      @endauth
      @guest
        @yield('guest_content')
      @endguest
    </x-page.page>
    @vite('resources/js/app.js')
  </x-page.body>
</html>