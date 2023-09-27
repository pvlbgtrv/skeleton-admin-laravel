@props(['id' => 'navbar-menu'])

<div {{ $attributes->class([
  'collapse',
  'navbar-collapse',
])->merge([
  'id' => "{$id}"
]) }} >
  {{ $slot }}
</div>