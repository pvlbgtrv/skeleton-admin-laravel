@props(['url' => '', 'rel' => '', 'target' => ''])
<li class="list-inline-item">
    <a {{ $attributes->class([
        'link-secondary',
    ])->merge([
        'href' => "{$url}",
        'rel' => "{$rel}",
        'target' => "{$target}",
    ]) }}>
        {{ $slot }}
    </a>
</li>