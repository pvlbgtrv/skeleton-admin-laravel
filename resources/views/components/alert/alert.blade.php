@if(session('message'))
  <div class="alert alert-important rounded-0 alert-{{ session('type') }} alert-dismissible" role="alert">
    <div class="d-flex container-xl">
      <div>
        @if(session('type') === 'success')
          @svg('i-check', 'alert-icon')
        @elseif(session('type') === 'danger')
          @svg('i-info-circle', 'alert-icon')
        @endif
      </div>
      <div>{!! session('message') !!}</div>
    </div>
    <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
  </div>
@endif

@if($errors->any())
<div class="alert alert-important rounded-0 alert-danger alert-dismissible" role="alert">
  <div class="d-flex container-xl">
    <div>@svg('i-info-circle', 'alert-icon')</div>
    <div class="d-flex flex-column">
      @foreach ($errors->all() as $error)
          <div>{{ $error }}</div>
      @endforeach
    </div>
  </div>
  <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
</div>
@endif