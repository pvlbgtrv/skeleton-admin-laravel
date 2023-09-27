<button {{ $attributes->class([
  'navbar-toggler',
])->merge([
  'type' => 'button',
  'data-bs-toggle' => 'collapse',
  'data-bs-target' => '#navbar-menu',
  'aria-controls' => 'navbar-menu',
  'aria-expanded' => 'false',
  'aria-label' => 'Toggle navigation',
]) }} >
  <span class="navbar-toggler-icon"></span>
</button>