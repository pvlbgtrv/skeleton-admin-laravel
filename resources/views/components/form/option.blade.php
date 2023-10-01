@props(['val' => '', 'name' => ''])

<option {{ $attributes->merge([
  'value' => "{$val}"
]) }}>
  {{ $name }}
</option>