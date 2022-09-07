@if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible show fade">
        {{ Session::get('error') }}
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible show fade">
        {{ Session::get('success') }}
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
