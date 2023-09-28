@guest
  @php
      $logo_style = 'navbar-brand navbar-brand-autodark';
  @endphp
@endguest
@auth
  @php
      $logo_style = 'navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3';
  @endphp
@endauth
<h1 {{ $attributes->class([
  "{$logo_style}",
]) }}>
  <a href="/">
    <img src="{{ Vite::image('logo-small.svg') }}" alt="SAPL" class="navbar-brand-image">
  </a>
</h1>