@props(['icon' => 'i-home'])

<span {{ $attributes->class([
  'nav-link-icon',
  'd-md-none',
  'd-lg-inline-block',
]) }}>
  @svg($icon)
</span>