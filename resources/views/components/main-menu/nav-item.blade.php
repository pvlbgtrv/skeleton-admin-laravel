@props(['route' => 'dashboard'])

<li {{ $attributes->class([
    'nav-item',
    active_link("{$route}"),
]) }}>
    {{ $slot }}
</li>