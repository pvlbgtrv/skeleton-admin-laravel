@props(['action' => '', 'method' => 'get'])

<form {{ $attributes->merge([
  'action' => $action,
  'method' => $method,
  'autocomplete' => 'off',
  'novalidate' => '',
]) }}>
  @csrf
  {{ $slot }}
</form>