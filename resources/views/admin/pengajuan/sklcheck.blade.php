@extends ('layouts.global')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>

<div class="row">
    <form id="js-login" novalidate="" action="">
        <div class="text-center">
            <i class="fal fa-badge-check fa-3x subheader-icon"></i>
            <h2>Pemeriksaan Data</h2>
            <div class="row justify-content-center">
                <p class="lead">Mohon menunggu hingga sistem selesai memeriksa kelengkapan data dan berkas untuk verifikasi. <i class="ml-1 fal fa-sync-alt text-success"></i></p>
                <div class="col-md-8 order-md-2">
                    <h3>HASIL PEMERIKSAAN AWAL</h3>
                </div>
                <!--
				Bagian ini bukan sebagai syarat pengajuan, namun sebagai acuan data saja.
				-->
            </div>
        </div>
        <div id="panel-1" class="panel">
            <div class="panel-container show">
                <div class="card-header p-0">
                    <div class="row no-gutters row-grid align-items-stretch">
                        <div class="col-12 col-md">
                            <div class="text-uppercase text-muted py-2 px-3">Verifikasi</div>
                        </div>
                        <div class="col-sm-6 col-md-2 hidden-md-down">
                            <div class="text-uppercase text-muted py-2 px-3">Beban</div>
                        </div>
                        <div class="col-sm-6 col-md-2 col-xl-1 hidden-md-down">
                            <div class="text-uppercase text-muted py-2 px-3">Realisasi Dilaporkan</div>
                        </div>
                        <div class="col-sm-6 col-md-2 col-xl-1 hidden-md-down">
                            <div class="text-uppercase text-muted py-2 px-3">Realisasi Diverifikasi</div>
                        </div>
                        <div class="col-sm-6 col-md-2 col-xl-1 hidden-md-down">
                            <div class="text-uppercase text-muted py-2 px-3">Status Akhir</div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="row no-gutters row-grid">
                        <!-- thread -->
                        <div class="col-12">
                            <div class="row no-gutters row-grid align-items-stretch">
                                <div class="col-md">
                                    <div class="p-3">
                                        <div class="d-flex align-items-center">
                                            <div class='icon-stack display-4 mr-3 flex-shrink-0'>
                                                <i class="base base-5 icon-stack-3x opacity-100 color-warning-400"></i>
                                                <i class="base base-5 icon-stack-2x opacity-100 color-warning-800"></i>
                                                <i class="fal fa-map-marked-alt icon-stack-1x opacity-100 color-white"></i>
                                            </div>
                                            <div class="d-inline-flex flex-column">
                                                <a class="fs-lg fw-500 d-block">
                                                    Lapangan
                                                </a>
                                                <div class="d-block text-muted fs-sm">
                                                    Verifikasi data sesuai lapangan.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-md-2 hidden-md-down">
                                    <div class="p-3 p-md-3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-1 min-width-0">
                                                <a href="javascript:void(0)" class="d-block text-truncate">
                                                    -
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-md-2 hidden-md-down">
                                    <div class="p-3 p-md-3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-1 min-width-0">
                                                <a href="javascript:void(0)" class="d-block text-truncate">
                                                    -
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-md-2 hidden-md-down">
                                    <div class="p-3 p-md-3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-1 min-width-0">
                                                <a href="javascript:void(0)" class="d-block text-truncate">
                                                    -
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-2 col-xl-1 hidden-md-down">
                                    <div class="p-3 p-md-3">
                                        <span class="d-block text-muted"><i class="fas fa-check text-success"></i> <i>OK</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- thread -end -->
                        <!-- thread -->
                        <div class="col-12">
                            <div class="row no-gutters row-grid align-items-stretch">
                                <div class="col-md">
                                    <div class="p-3">
                                        <div class="d-flex align-items-center">
                                            <div class='icon-stack display-4 mr-3 flex-shrink-0'>
                                                <i class="base base-5 icon-stack-3x opacity-100 color-success-400"></i>
                                                <i class="base base-5 icon-stack-2x opacity-100 color-success-800"></i>
                                                <i class="fal fa-seedling icon-stack-1x opacity-100 color-white"></i>
                                            </div>
                                            <div class="d-inline-flex flex-column">
                                                <a class="fs-lg fw-500 d-block">
                                                    Tanam
                                                </a>
                                                <div class="d-block text-muted fs-sm">
                                                    Tahap Verifikasi Data Tanam.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-md-2 hidden-md-down">
                                    <div class="p-3 p-md-3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-1 min-width-0">
                                                <a href="javascript:void(0)" class="d-block text-truncate">
                                                    15.00 ha
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-md-2 hidden-md-down">
                                    <div class="p-3 p-md-3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-1 min-width-0">
                                                <a href="javascript:void(0)" class="d-block text-truncate">
                                                    13.50 ha
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-md-2 hidden-md-down">
                                    <div class="p-3 p-md-3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-1 min-width-0">
                                                <a href="javascript:void(0)" class="d-block text-truncate">
                                                    14.20 ha
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-2 col-xl-1 hidden-md-down">
                                    <div class="p-3 p-md-3">
                                        <span class="d-block text-muted"><i class="fas fa-check text-success"></i> <i>OK</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- thread -end -->
                        <!-- thread -->
                        <div class="col-12">
                            <div class="row no-gutters row-grid align-items-stretch">
                                <div class="col-md">
                                    <div class="p-3">
                                        <div class="d-flex align-items-center">
                                            <div class='icon-stack display-4 mr-3 flex-shrink-0'>
                                                <i class="base base-5 icon-stack-3x opacity-100 color-danger-400"></i>
                                                <i class="base base-5 icon-stack-2x opacity-100 color-danger-800"></i>
                                                <i class="fal fa-dolly icon-stack-1x opacity-100 color-white"></i>
                                            </div>
                                            <div class="d-inline-flex flex-column">
                                                <a class="fs-lg fw-500 d-block">
                                                    Produksi
                                                </a>
                                                <div class="d-block text-muted fs-sm">
                                                    Tahap Verifikasi Data Produksi.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-md-2 hidden-md-down">
                                    <div class="p-3 p-md-3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-1 min-width-0">
                                                <a href="javascript:void(0)" class="d-block text-truncate">
                                                    150.00 ha
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-md-2 hidden-md-down">
                                    <div class="p-3 p-md-3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-1 min-width-0">
                                                <a href="javascript:void(0)" class="d-block text-truncate">
                                                    135.00 ha
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-md-2 hidden-md-down">
                                    <div class="p-3 p-md-3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-1 min-width-0">
                                                <a href="javascript:void(0)" class="d-block text-truncate">
                                                    142.00 ha
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-2 col-xl-1 hidden-md-down">
                                    <div class="p-3 p-md-3">
                                        <span class="d-block text-muted"><i class="fas fa-check text-success"></i> <i>OK</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- thread -end -->
                    </div>
                </div>
                <div class="card-footer">
                    <div class="help-block">
                        Legend<br>
                        <span><i class="fas fa-check text-success mr-1"></i> Status data tersedia atau memenuhi syarat</span><br>
                        <span><i class="fas fa-times text-danger mr-1"></i> Status data tidak tersedia atau tidak memenuhi syarat</span>
                    </div>
                </div>
            </div>
        </div>
        <div id="panel-2" class="panel">
            <!--
				Yang ingin dicapi pada panel ini adalah:
				Pemeriksaan status yang dikeluarkan oleh verifikator (setelah selesai pemeriksaan).
				Syarat-syarat:
				1. Status Verifikasi Tanam (lapangan) tidak dipersyaratkan
				2. Status Verifikasi Produksi (Lapangan) harus VERIFIED OK
				3. Status Verifikasi Online harus Verified OK
			-->
            <div class="panel-container show">
                <div class="card-header p-0">
                    <div class="row no-gutters row-grid align-items-stretch">
                        <div class="col-12 col-md">
                            <div class="text-uppercase text-muted py-2 px-3">PEMERIKSAAN STATUS</div>
                        </div>
                        <div class="col-sm-6 col-md-2 hidden-md-down">
                            <div class="text-uppercase text-muted py-2 px-3">Status Pemeriksaan</div>
                        </div>
                        <div class="col-sm-6 col-md-2 col-xl-1 hidden-md-down">
                            <div class="text-uppercase text-muted py-2 px-3">Status Hasil</div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="row no-gutters row-grid">
                        <!-- thread -->
                        <div class="col-12">
                            <div class="row no-gutters row-grid align-items-stretch">
                                <div class="col-md">
                                    <div class="p-3">
                                        <div class="d-flex align-items-center">
                                            <div class='icon-stack display-4 mr-3 flex-shrink-0'>
                                                <i class="base base-5 icon-stack-3x opacity-100 color-warning-400"></i>
                                                <i class="base base-5 icon-stack-2x opacity-100 color-warning-800"></i>
                                                <i class="fal fa-map-marked-alt icon-stack-1x opacity-100 color-white"></i>
                                            </div>
                                            <div class="d-inline-flex flex-column">
                                                <a class="fs-lg fw-500 d-block">
                                                    Lapangan
                                                </a>
                                                <div class="d-block text-muted fs-sm">
                                                    Verifikasi data dengan kondisi sesungguhnya di lapangan.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-md-2 hidden-md-down">
                                    <div class="p-3 p-md-3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-1 min-width-0">
                                                <a href="javascript:void(0)" class="d-block text-truncate">
                                                    <span class="d-block text-muted"><i class="fas fa-check text-success"></i> <i>OK</i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-md-2 hidden-md-down">
                                    <div class="p-3 p-md-3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-1 min-width-0">
                                                <a href="javascript:void(0)" class="d-block text-truncate">
                                                    <span class="d-block text-muted"><i class="fas fa-check text-success"></i> <i>OK</i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- thread -end -->
                        <!-- thread -->
                        <div class="col-12">
                            <div class="row no-gutters row-grid align-items-stretch">
                                <div class="col-md">
                                    <div class="p-3">
                                        <div class="d-flex align-items-center">
                                            <div class='icon-stack display-4 mr-3 flex-shrink-0'>
                                                <i class="base base-5 icon-stack-3x opacity-100 color-info-100"></i>
                                                <i class="base base-5 icon-stack-2x opacity-100 color-info-400"></i>
                                                <i class="fal fa-cloud icon-stack-1x opacity-100 color-white"></i>
                                            </div>
                                            <div class="d-inline-flex flex-column">
                                                <a class="fs-lg fw-500 d-block">
                                                    ONLINE
                                                </a>
                                                <div class="d-block text-muted fs-sm">
                                                    Verifikasi Data isian dan Kelengkapan Berkas.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-md-2 hidden-md-down">
                                    <div class="p-3 p-md-3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-1 min-width-0">
                                                <a href="javascript:void(0)" class="d-block text-truncate">
                                                    <span class="d-block text-muted"><i class="fas fa-check text-success"></i> <i>OK</i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-2 col-xl-1 hidden-md-down">
                                    <div class="p-3 p-md-3">
                                        <span class="d-block text-muted"><i class="fas fa-check text-success"></i> <i>OK</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- thread -end -->
                    </div>
                </div>
                <div class="card-footer">
                    <div class="help-block">
                        Legend<br>
                        <span><i class="fas fa-check text-success mr-1"></i> Status data tersedia atau memenuhi syarat</span><br>
                        <span><i class="fas fa-times text-danger mr-1"></i> Status data tidak tersedia atau tidak memenuhi syarat</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <span class="text-bold text-secondary">Konfirmasi</span>
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm" placeholder="type your username here">
                    <div class="input-group-append">
                        <a class="btn btn-sm btn-danger" href="/pengajuan" role="button"><i class="fal fa-times text-align-center mr-1"></i> Batalkan</a>
                    </div>
                    <!--
						Yang ingin dicapi dari tombol Ajukan ini adalah:
						1. melakukan validasi 3 status pada panel 2, jika sukses selanjutnya;
						2. melakukan validasi field konfirmasi username, jika suskes lalu;
						3. merubah nilai pada field status skl keterangan menjadi "SUBMITTED"
						4. saat sukses, halaman redirect ke halaman SUCCESS PAGE SKL atau modal yang menyatakan pengajuan telah sukses di submit
					-->
                    <div class="input-group-append">
                        <a href="/pengajuan/sklsuccess" class="btn btn-sm btn-primary" role="button" type="submit">
                            <i class="fas fa-upload text-align-center mr-1"></i> Ajukan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
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