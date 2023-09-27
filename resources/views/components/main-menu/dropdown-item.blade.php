@props(['url' => '/'])

<a {{ $attributes->class([
  'dropdown-item',
])->merge([
  'href' => "{$url}"
]) }} >
  {{ $slot }}
</a>