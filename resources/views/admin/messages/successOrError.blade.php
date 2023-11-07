@if(Session::has('error'))
    <div class="alert col-12  alert-danger alert-shade alert-dismissible fade show" role="alert">
        <strong class="fnt-code c-white">{{ Session::get('error') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif


@if(Session::has('success'))
    <div class="alert col-12  alert-success alert-shade alert-dismissible fade show" role="alert">
        <strong class="fnt-code c-dark">{{ Session::get('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
