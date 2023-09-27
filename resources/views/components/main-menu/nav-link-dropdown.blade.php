<a {{ $attributes->class([
  'nav-link',
  'dropdown-toggle',
])->merge([
  'href' => '#navbar-base',
  'data-bs-toggle' => 'dropdown',
  'data-bs-auto-close' => 'outside',
  'role' => 'button',
  'aria-expanded' => 'false',
]) }} >
  {{ $slot }}
</a>