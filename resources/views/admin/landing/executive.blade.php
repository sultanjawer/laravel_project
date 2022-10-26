@extends ('layouts.admin')
@section ('style')
@endsection
@section('content')
<div class="row mb-5">
    <div class="col text-center">
        <h1 class="display-4 hidden-md-down">Selamat Datang di Simethris, <span class="fw-700">User!</span></h1>
        <h1 class="display-4 hidden-sm-up">Hallo, <span class="fw-700">User!</span></h1>
        <h4 class="hidden-md-down">If the world is to big for you to hold, then make it smaller to fits in your hands!</h4>
        <span class="text-muted js-get-date"></span>
    </div>
</div>
<!--
		Yang ingin dicapai pada halaman ini adalah:
		Halaman ini merupakan halaman yang tampil pertama kali saat Direktur berhasil masuk ke dalam aplikasi.
		Halaman ini ditujukan sebagai halaman informasi bagi Direktur yang berisi Berita/Feed, dan Daftar Pesan Baru/terakhir serta daftar tugas/tasks list (jika fitur diminta) persetujuan penerbitan keterangan lunas.
		Berita/Feed ditampilkan hanya Role Direktur
		Perpesanan yang tampil adalah antara Administrator - Direktur dan Direktur - Sesdit
	-->
<div class="row">
    <div class="col-12">
        <div class="panel" id="panel-1">
            <div class="panel-hdr">
                <h2>
                    <span class="badge badge-danger fw-n mr-1">5</span> Pengajuan Baru </span>
                </h2>
                <div class="panel-toolbar">
                    @include('partials.globaltoolbar')
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <table id="dt-ajulunas" class="table table-sm table-hover table-striped w-100">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Perusahaan</th>
                                <th>RIPH</th>
                                <th>Target</th>
                                <th>Completed</th>
                                <th>Submitted</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="mr-2">
                                        <img src="/img/logo-big.png" class="profile-image rounded-circle" alt="company logo">
                                    </span>
                                </td>
                                <td><span class="badge badge-danger fw-n mr-1">NEW</span><a href="">Company Name</a></td>
                                <td>xxxx/PP.240/D/MM/YYY</td>
                                <td>
                                    <div class="">Prod.: 1.000 ton</div>
                                    <div class="">Area: 100 ha</div>
                                </td>
                                <td>
                                    <div class="">Prod.: 950 ton</div>
                                    <div class="">Area: 95 ha</div>
                                </td>
                                <td>
                                    <div class="">Date: 30-04-2022</div>
                                    <div class="">by: Verificator Name</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <span class="mr-2">
                                        <img src="/img/logo-big.png" class="profile-image rounded-circle" alt="company logo">
                                    </span>
                                </td>
                                <td><span class="badge badge-danger fw-n mr-1">NEW</span><a href="">Company Name</a></td>
                                <td>xxxx/PP.240/D/MM/YYY</td>
                                <td>
                                    <div class="">Prod.: 1.000 ton</div>
                                    <div class="">Area: 100 ha</div>
                                </td>
                                <td>
                                    <div class="">Prod.: 950 ton</div>
                                    <div class="">Area: 95 ha</div>
                                </td>
                                <td>
                                    <div class="">Date: 30-04-2022</div>
                                    <div class="">by: Verificator Name</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')
<script src="{{ asset('/js/datagrid/datatables/datatables.bundle.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#dt-ajulunas').dataTable({
            responsive: true,
            pageLength: 15,
            order: [
                [0, 'desc']
            ]
        });
    });
</script>
@endsection