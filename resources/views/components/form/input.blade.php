@props(['type' => 'text', 'name' => '', 'val' => '', 'placeholder' => ''])

<input {{ $attributes->class([
  'form-control',
])->merge([
  'type' => "{$type}",
  'name' => "{$name}",
  'placeholder' => "{$placeholder}",
  'value' => "{$val}",
]) }} />