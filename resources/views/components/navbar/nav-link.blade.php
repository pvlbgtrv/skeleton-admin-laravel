@props(['url' => '', 'title' => '', 'icon' => ''])

<a {{ $attributes->class([
  'nav-link',
  'px-0',
])->merge([
  'href' => "{$url}",
  'title' => "{$title}",
  'data-bs-toggle' => 'tooltip',
  'data-bs-placement' => 'bottom',
]) }} >
  @svg($icon, 'icon')
</a>