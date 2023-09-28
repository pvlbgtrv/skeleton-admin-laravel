@guest
    @php
        $body_style = 'page d-flex flex-column';
    @endphp
@endguest
@auth
    @php
        $body_style = 'page';
    @endphp
@endauth

<body {{ $attributes->class([
  "{$body_style}",
])}} >
  {{ $slot }}
</body>