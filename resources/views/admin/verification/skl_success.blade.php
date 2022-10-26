@extends ('layouts.global')
@section ('style')
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="text-center">
            <i class="fa fa-award fa-4x text-danger"></i>
            <h2 class="fw-900">Selamat!</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 order-md-2 mb-4">
                <p class="lead fs-md">Surat Keterangan Lunas untuk Data RIPH #: 0155/PP.240/D/03/2022 Telah Terbit dengan nomor <a href="/userskl/formskl">..........</a></p>
                <p class="lead fs-md">Anda dapat melihat Salinan SKL <a href="/userskl/formskl" class="fw-700">di sini.</a> Atau Scan QRCode dibawah dengan perangkat telepon genggam Anda.</p>
            </div>
        </div>
        <!--
			Yang ingin dicapai fitur ini adalah:
			sistem menampilkan QRCode yang telah di-generate sebelumnya di halaman penerbitan SKLs
		-->
        <div class="text-center">
            <img src="/img/qrcode/qrcode_sample.svg" alt="Simethris" aria-roledescription="logo" width="100%" height="150px">
        </div>
    </div>
</div>
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')

@endsection