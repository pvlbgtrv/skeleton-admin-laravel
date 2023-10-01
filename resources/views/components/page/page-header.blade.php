<div {{ $attributes->class([
  'page-header',
  'd-print-none',
]) }}>
  <x-container>
    <div class="row align-items-center">
      <div class="col">
        {{ $slot }}
      </div>
    </div>
  </x-container>
</div>