@guest
    @php
        $page_style = 'page page-center';
    @endphp
@endguest
@auth
    @php
        $page_style = 'page';
    @endphp
@endauth

<div {{ $attributes->class([
    "{$page_style}",
]) }}>
    {{ $slot }}
</div>