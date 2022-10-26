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
	Detail hasil tarikan data dari riph
-->
<div class="row">
    <div class="col-12">
        <div>
            <div class="row justify-content-center">
                <div class="col-md-8 order-md-2 mb-4">
                    <p class="lead fs-md">reserved for datatables of synched data.</p>
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