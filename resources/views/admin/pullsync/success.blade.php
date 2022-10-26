@extends ('layouts.global')
@section ('style')
<style>
    .bg-gradient {
        background: linear-gradient(90deg, #beaed7, #886ab5);
    }

    .display-5 {
        font-size: 2rem;
    }

    .display-6 {
        font-size: 1.5rem;
    }
</style>
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
<!-- Page Content -->
<!--
	Yang ingin dicapai halaman ini adalah:
	sistem memberikan feedback saat data berhasil di sinkronisasi dan disimpan di dalam database.
-->
<div class="row">
    <div class="col-12">
        <div>
            <div class="text-center">
                <i class="fa fa-sync-alt fa-3x text-success"></i>
                <h2>Congratulation!</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 order-md-2 mb-4">
                    <p class="lead fs-md">Your data with RIPH #: 0155/PP.240/D/03/2022, has been pulled and stored succesfully in our databases for later use. You can see your RIPH list <a href="/commitment" class="badge btn-sm btn-primary">here</a>.</p>
                    <p class="lead fs-md">Or click <a href="/pullsync/detail" class="badge btn-sm btn-primary">here</a> if You would like to see what data that we have synched and pulled.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Content -->
@endsection
<!-- @parent -->
@section('scripts')
<!-- start script for this page -->
<script src="{{ asset('/js/formplugins/inputmask/inputmask.bundle.js') }}"></script>
$(document).ready(function()
{
$(":input").inputmask();
});

</script>
@endsection