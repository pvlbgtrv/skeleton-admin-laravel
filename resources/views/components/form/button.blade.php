@props(['type' => 'submit', 'color' => 'blue'])

<button {{ $attributes->class([
  'btn',
  "btn-{$color}",
])->merge([
  'type' => "{$type}",
]) }}>
  {{ $slot }}
</button>