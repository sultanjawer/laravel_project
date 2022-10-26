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
                <i class="fa fa-times fa-3x text-danger"></i>
                <h2>SYNCHED FAIL!</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 order-md-2 mb-4">
                    <p class="lead fs-md">We are apologize for this inconviniences. But We cannot find anything we need based on the information You have provided previously</p>
                    <p class="lead fs-md">Click <a href="/pullsync" class="badge btn-sm btn-primary">here</a> to go back and to try our luck. Please make sure the data provided is correct and are available in the SIAP RIPH application databases.</p>
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