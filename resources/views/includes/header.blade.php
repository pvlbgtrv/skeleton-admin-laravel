<x-header class="navbar d-print-none">
  <x-container>
    <x-navbar.navbar-toggler />
    <x-navbar.logo />
    <x-navbar.nav>
      <x-navbar.theme-toggler>
        <x-navbar.nav-link url="?theme=dark" class="hide-theme-dark" title="{{ __('Темная тема') }}" icon="i-moon" />
        <x-navbar.nav-link url="?theme=light" class="hide-theme-light" title="{{ __('Светлая тема') }}" icon="i-sun" />
        @include('includes.notifications')
      </x-navbar.theme-toggler>
      @include('includes.user-menu')
    </x-navbar.nav>
  </x-container>
</x-header>