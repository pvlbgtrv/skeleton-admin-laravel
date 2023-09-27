<x-header>
  <x-main-menu.navbar-collapse>
    <x-main-menu.navbar>
      <x-container>
        <x-main-menu.list>
          <x-main-menu.nav-item>
            <x-main-menu.nav-link url="/">
              <x-main-menu.nav-link-icon icon="i-home" classes="icon" />
              <x-main-menu.nav-link-title>{{ __('Главная') }}</x-main-menu.nav-link-title>
            </x-main-menu.nav-link>
          </x-main-menu.nav-item>

          <x-main-menu.nav-item-dropdown>
            <x-main-menu.nav-link-dropdown>
              <x-main-menu.nav-link-icon icon="i-package" classes="icon" />
              <x-main-menu.nav-link-title>{{ __('Подразделения') }}</x-main-menu.nav-link-title>
            </x-main-menu.nav-link-dropdown>
            <x-main-menu.dropdown-menu>
              <x-main-menu.dropdown-item url="/">{{ __('Alerts') }}</x-main-menu.dropdown-item>
            </x-main-menu.dropdown-menu>
          </x-main-menu.nav-item-dropdown>
        </x-main-menu.list>
      </x-container>
    </x-main-menu.navbar>
  </x-main-menu.navbar-collapse>
</x-header>