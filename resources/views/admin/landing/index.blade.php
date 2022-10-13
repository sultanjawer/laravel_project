@extends ('layouts.admin')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
<!-- welcome message -->
<div class="row mb-5">
    <div class="col text-center">
        <h1 class="display-4 hidden-md-down">Selamat Datang di App, <span class="fw-700">User!</span></h1>
        <h1 class="display-4 hidden-sm-up">Hallo, <span class="fw-700">User!</span></h1>
        <h4 class="hidden-md-down">If the world is to big for you to hold, then make it smaller to fits in your hands!</h4>
        <span class="text-muted js-get-date"></span>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-8 order-md-2 mb-4">
        <div class="row justify-content-center text-center">
            <div class="col-lg-3 col-sm-6">
                <a href="/asset">
                    <div class="card border m-auto m-lg-0">
                        <img src="img/card-backgrounds/cover-3-lg.png" class="card-img-top" alt="...">
                        <div class="card-body p-0 mt-2">
                            <h5 class="fw-500 card-title text-center">Sub App</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="/asset">
                    <div class="card border m-auto m-lg-0">
                        <img src="img/card-backgrounds/cover-3-lg.png" class="card-img-top" alt="...">
                        <div class="card-body p-0 mt-2">
                            <h5 class="fw-500 card-title text-center">Sub App</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')
@endsection