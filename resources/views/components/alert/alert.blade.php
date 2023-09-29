@if(session('message'))
  <div class="alert alert-important rounded-0 alert-{{ session('type') }} alert-dismissible" role="alert">
    <div class="d-flex container-xl">
      <div>
        @if(session('type') === 'success')
          @svg('i-check', 'icon alert-icon')
        @elseif(session('type') === 'danger')
          @svg('i-info-circle', 'icon alert-icon')
        @endif
      </div>
      <div>{{ session('message') }}</div>
    </div>
    <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
  </div>
@endif