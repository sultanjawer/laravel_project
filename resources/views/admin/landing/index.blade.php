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
            <div class="col-3">
                <a href="/asset">
                    <div class="card border m-auto m-lg-0">
                        <img src="img/card-backgrounds/cover-3-lg.png" class="card-img-top" alt="...">
                        <div class="card-body mt-2">
                            <h5 class="fw-500 card-title text-center">Card title</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="/asset">
                    <div class="card border m-auto m-lg-0">
                        <img src="img/card-backgrounds/cover-3-lg.png" class="card-img-top" alt="...">
                        <div class="card-body p-0 mt-2">
                            <h5 class="fw-500 card-title text-center">Card title</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="/asset">
                    <div class="card border m-auto m-lg-0">
                        <img src="img/card-backgrounds/cover-3-lg.png" class="card-img-top" alt="...">
                        <div class="card-body mt-2">
                            <h5 class="fw-500 card-title text-center">Card title</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="/asset">
                    <div class="card border m-auto m-lg-0">
                        <img src="img/card-backgrounds/cover-3-lg.png" class="card-img-top" alt="...">
                        <div class="card-body mt-2">
                            <h5 class="fw-500 card-title text-center">Card title</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-6">
        <div id="panel-1" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
            <div class="panel-hdr">
                <h2>
                    Panel <span class="fw-300"><i>Title</i></span>
                </h2>
                <div class="panel-toolbar">
                    @include('partials.globaltoolbar')
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="panel-tag">
                        It stash and was even had of collection the latest story still every or times derive come way. Travelling business ill. Helplessly starting didn't should he her bad will so through audiences to the supported congress, if card with was way allows century quarter the control village for of payload.
                    </div>
                    <p>Offers it children. Been far good the or so eye. And first the her to white unionized that the absolutely supplies hall to named accuse times had or the to in the monitor a by carefully and than train excessive turned been a rationale to be the little. Agency still a the supported or people out doing place what does one studies of that value designer the you line their transformed extent, you to for not must reflection chequered with got rush than because he with thoughts until sisters term much and bed they of duty organization. And ago. As.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Panel <span class="fw-300"><i>Title</i></span>
                </h2>
                <div class="panel-toolbar" data-title="Toolbar" data-intro="Berfungsi untuk menampilkan, menyembunyikan/menggulung, dan panel layar penuh." data-step="3">
                    @include('partials.globaltoolbar')
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="panel-tag">
                        It stash and was even had of collection the latest story still every or times derive come way. Travelling business ill. Helplessly starting didn't should he her bad will so through audiences to the supported congress, if card with was way allows century quarter the control village for of payload.
                    </div>
                    <p>Offers it children. Been far good the or so eye. And first the her to white unionized that the absolutely supplies hall to named accuse times had or the to in the monitor a by carefully and than train excessive turned been a rationale to be the little. Agency still a the supported or people out doing place what does one studies of that value designer the you line their transformed extent, you to for not must reflection chequered with got rush than because he with thoughts until sisters term much and bed they of duty organization. And ago. As.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Panel <span class="fw-300"><i>Title</i></span>
                </h2>
                <div class="panel-toolbar">
                    @include('partials.globaltoolbar')
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="panel-tag">
                        It stash and was even had of collection the latest story still every or times derive come way. Travelling business ill. Helplessly starting didn't should he her bad will so through audiences to the supported congress, if card with was way allows century quarter the control village for of payload.
                    </div>
                    <p>Offers it children. Been far good the or so eye. And first the her to white unionized that the absolutely supplies hall to named accuse times had or the to in the monitor a by carefully and than train excessive turned been a rationale to be the little. Agency still a the supported or people out doing place what does one studies of that value designer the you line their transformed extent, you to for not must reflection chequered with got rush than because he with thoughts until sisters term much and bed they of duty organization. And ago. As.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')
@endsection