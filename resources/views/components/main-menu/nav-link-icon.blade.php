@props(['icon' => 'i-home', 'classes' => 'icon'])

<span {{ $attributes->class([
  'nav-link-icon',
  'd-md-none',
  'd-lg-inline-block',
]) }}>
  @svg($icon, $classes)
</span>