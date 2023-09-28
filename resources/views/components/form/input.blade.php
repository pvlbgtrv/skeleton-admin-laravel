@props(['type' => 'text', 'name' => '', 'placeholder' => ''])

<input {{ $attributes->class([
  'form-control',
])->merge([
  'type' => "{$type}",
  'name' => "{$name}",
  'placeholder' => "{$placeholder}",
]) }} />