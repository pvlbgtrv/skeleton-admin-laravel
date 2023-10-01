@props(['name' => ''])

<select {{ $attributes->class([
  'form-select',
  ])->merge([
    'name' => "{$name}",
  ])
 }}>
  {{ $slot }}
</select>