@props(['action' => '', 'method' => 'get'])

<form {{ $attributes->class([
  'card',
])->merge([
  'action' => "{$action}",
  'method' => "{$method}",
]) }}>
  @csrf
  {{ $slot }}
</form>