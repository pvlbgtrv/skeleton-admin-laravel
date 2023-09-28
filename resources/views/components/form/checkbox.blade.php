@props(['name' => ''])

<input {{ $attributes->class([
  'form-check-input',
])->merge([
  'type' => 'checkbox',
  'name' => "{$name}",
  'value' => 1,
]) }} />