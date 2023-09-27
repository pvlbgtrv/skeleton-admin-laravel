@props(['url' => '/'])
<a {{ $attributes->class([
  'nav-link',
])->merge([
  'href' => "{$url}",
]) }}>
  {{ $slot }}
</a>