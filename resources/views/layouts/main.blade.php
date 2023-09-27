<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>BGM - Laravel</title>
    @vite('resources/css/app.css')
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');
      :root {
      	--tblr-font-sans-serif: 'Ubuntu', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        --tblr-body-font-size: 1rem;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body >
    <div class="page">
      <!-- Navbar -->
      @include('includes.header')
      @include('includes.admin.main-menu')
      <div class="page-wrapper">
        @yield('content')
        @include('includes.footer')
      </div>
    </div>
    @vite('resources/js/app.js')
  </body>
</html>