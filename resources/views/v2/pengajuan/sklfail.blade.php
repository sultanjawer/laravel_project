@extends ('layoutsv2.global')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partialsv2.sysalert')</div>

<div class="row">
    <div class="col-12">
        <div class="text-center">
            <i class="fa fa-times-circle fa-4x text-danger"></i>
            <h2>PENGAJUAN GAGAL!</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 order-md-2 mb-4">
                <p class="lead fs-md">Mohon Maaf! Pengajuan Keterangan Lunas untuk Data RIPH #: 0155/PP.240/D/03/2022 Gagal Dilakukan.</p>
                Hal ini dapat disebankan oleh:
                <ul>
                    <li>Masih terdapat syarat-syarat yang belum Anda penuhi untuk mengajukan Keterangan (periksa teks berwarna merah pada halaman pemeriksaan sementara).</li>
                    <li>Jaringan yang diakses oleh perangkat Anda kurang bagus.</li>
                </ul>
                <p>Silahkan hubungi Administrator Aplikasi untuk keterngan lebih lanjut.</p>
                <p class="lead fs-md"><a href="/v2/pengajuan/sklcheck" class="btn btn-sm btn-primary">Kembali ke halaman pemeriksaan</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')
<script src="{{ asset('/js/datagrid/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('/js/datagrid/datatables/datatables.export.js') }}"></script>

<script>
    $(document).ready(function() {
        //tabel pemeriksaan umum
        $('#dt-summary').dataTable({
            responsive: true,
            order: [
                [0, 'asc']
            ],
        });

        //tabel pemeriksaan berkas lampiran yang disyaratkan
        $('#dt-fileAttach').dataTable({
            responsive: true,
            order: [
                [3, 'desc']
            ],
        });

        //tabel daftar lokasi tanam
        $('#dt-ajulokasi').dataTable({
            responsive: true,
            select: true,
            pageLength: 10,
            dom:
                /*	--- Layout Structure 
                	--- Options
                	l	-	length changing input control
                	f	-	filtering input
                	t	-	The table!
                	i	-	Table information summary
                	p	-	pagination control
                	r	-	processing display element
                	B	-	buttons
                	R	-	ColReorder
                	S	-	Select

                	--- Markup
                	< and >				- div element
                	<"class" and >		- div with a class
                	<"#id" and >		- div with an ID
                	<"#id.class" and >	- div with an ID and a class

                	--- Further reading
                	https://datatables.net/reference/option/dom
                	--------------------------------------
                 */
                "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'B>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [{
                    extend: 'selectAll',
                    text: 'All',
                    className: 'btn-outline-secondary btn-sm'
                },
                {
                    extend: 'selectNone',
                    text: 'Deselect',
                    className: 'btn-outline-secondary btn-sm'
                }

            ],
            order: [
                [0, 'asc']
            ],
            rowGroup: {
                dataSrc: 0
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(function() {
            $('.select2').select2({
                minimumSelectionLength: 3,
                placeholder: "Select an option",
                allowClear: true
            });
            $(".js-max-length").select2({
                minimumSelectionLength: 3,
                placeholder: "Select minimum 3 items"
            });
        });
    });
</script>
@endsection