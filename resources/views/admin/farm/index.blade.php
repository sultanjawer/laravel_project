@extends ('layouts.global')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>

<div class="row">
    <div class="col-md-3">
        <div class="panel" id="panel-1">
            <div class="panel-hdr">
                <h2>
                    DATA <span class="fw-300"><i>Anggota</i></span>
                </h2>
                <div class="panel-toolbar">

                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between">
                            <div>
                                <span class="text-muted">Nama Anggota</span>
                                <h6 class="fw-500 my-0">API Nama Anggota</h6>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div>
                                <span class="text-muted">NIK Anggota</span>
                                <h6 class="fw-500 my-0">API NIK Anggota</h6>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div>
                                <span class="text-muted">Lokasi</span>
                                <h6 class="fw-500 my-0">API Desa-Kec-Kab</h6>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div>
                                <span class="text-muted">Luas Lahan</span>
                                <h6 class="fw-500 my-0">API Luas</h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="panel" id="panel-2">
            <div class="panel-hdr">
                <h2>
                    DAFTAR LOKASI <span class="fw-300"><i class="hidden-sm-down"> Lahan/Tanam</i></span>
                </h2>
                <div class="panel-toolbar">
                    <a href="/farm/create" role="button" class="btn btn-xs btn-info mr-1" data-toggle="tooltip" data-offset="0,1" title data-original-title="Tambah lokasi tanam (input)"><i class="fal fa-draw-polygon"></i> </a>
                    <button class="btn btn-xs btn-warning mr-1" role="button" data-toggle="modal" data-target=".upload-modal-right"><a data-toggle="tooltip" data-offset="0,1" title data-original-title="Import Data Geolokasi (unggah data tunggal/jamak)"><i class="fas fa-upload"></i> </a></button>

                </div>
            </div>
            <div class="alert alert-info border-0 mb-0">
                <div class="d-flex align-item-center">
                    <div class="alert-icon">
                        <div class="icon-stack icon-stack-sm mr-3 flex-shrink-0">
                            <i class="base base-7 icon-stack-3x opacity-100 color-primary-400"></i>
                            <i class="base base-7 icon-stack-2x opacity-100 color-primary-800"></i>
                            <i class="fa fa-info icon-stack-1x opacity-100 color-white"></i>
                        </div>
                    </div>
                    <div class="flex-1 mr-3">
                        <span>Pada bagian ini Anda melaporkan data lokasi wajib tanam dan produksi yang dikelola oleh anggota kelompoktani yang namanya tertera di bagian Data Anggota pada panel sebelah kiri. Anda dapat melengkapi data dengan cara mengisi (<a class="badge btn-info text-white"><i class="fal fa-draw-polygon"></i></a>) atau mengunggah (<a class="badge btn-warning text-dark"><i class="fas fa-upload"></i></a>) data lokasi wajib tanam.</span>
                    </div>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <!-- datatable start -->
                    <table id="dt-locus" class="table table-sm table-bordered table-hover table-striped w-100">
                        <thead>
                            <tr>
                                <th>Nama Lokasi</th>
                                <th>Geolocation</th>
                                <th>Polygon Data</th>
                                <th>Tanggal Tanam</th>
                                <th>Luas Lahan</th>
                                <th>Tanggal Panen</th>
                                <th>Jumlah Panen</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>API</td>
                                <td>
                                    <div>
                                        <span>Lat: API</span>
                                    </div>
                                    <div>
                                        <span>Long: API</span>
                                    </div>
                                </td>
                                <td>API</td>
                                <td>API</td>
                                <td>API</td>
                                <td>API</td>
                                <td>API</td>
                                <td class="text-center">
                                    <div class="justify-content-between">
                                        <a href="/farm/show" class="mr-1">
                                            <i class="fal fa-edit text-info" data-toggle="tooltip" data-offset="0,10" title data-original-title="Edit this data"></i>
                                        </a>
                                        <a href="/farm/notes" class="mr-1">
                                            <i class="fal fa-farm text-warning" data-toggle="tooltip" data-offset="0,10" title data-original-title="Farm Activities"></i>
                                        </a>
                                        <a href="delete" class="mr-1">
                                            <i class="fal fa-trash-alt text-danger" data-toggle="tooltip" data-offset="0,10" title data-original-title="Delete this data"></i>
                                        </a>
                                        <a href="/farm/assists" class="mr-1" hidden>
                                            <i class="fal fa-hands-helping text-primary" data-toggle="tooltip" data-offset="0,10" title data-original-title="Assists"></i>
                                        </a>
                                        <a href="/farm/constraint" class="mr-1" hidden>
                                            <i class="fal fa-bug text-info" data-toggle="tooltip" data-offset="0,10" title data-original-title="Constraint"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="panel-content">
                    <div class="card-footer">
                        <div class="help-block">
                            Keterangan:<br>
                            <span><i class="fal fa-farm text-warning mr-1"></i> Laporan Data Kegiatan Onfarm dan Mingguan</span><br>
                            <span><i class="fal fa-edit text-info mr-1"></i> Perbarui/Ubah data Lokasi Tanam.</span><br>
                            <span><i class="fal fa-trash-alt text-danger mr-1"></i> Hapus Data Lokasi Tanam.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Right -->
    <div class="modal fade upload-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4"><i class="subheader-icon fas fa-upload text-info"></i> Import Locations Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="alert alert-info border-0 mb-0">
                    <div class="d-flex align-item-center">
                        <div class="alert-icon">
                            <div class="icon-stack icon-stack-sm mr-3 flex-shrink-0">
                                <i class="base base-7 icon-stack-3x opacity-100 color-primary-400"></i>
                                <i class="base base-7 icon-stack-2x opacity-100 color-primary-800"></i>
                                <i class="fa fa-info icon-stack-1x opacity-100 color-white"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <span>Pada bagian ini Anda mengunggah data lokasi wajib tanam dan produksi yang telah Anda buat pada aplikasi lain. Berkas yang dapat diterima adalah berkas berekstensi *.xlsx; *.csv yang berisi data jamak (banyak baris)</span>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Pilih berkas untuk diimport</label>
                        <div class="custom-file input-group">
                            <input type="file" class="custom-file-input" id="docFile">
                            <label class="custom-file-label" for="docFile">Pilih berkas...</label>
                        </div>
                        <span class="help-block">Silahkan pilih berkas berisi data geolokasi untuk diunggah.</span>
                    </div>
                    <div class="help-block" hidden>
                        <ul>
                            <li>Jika Anda belum memiliki berkas template standar data, silahkan unduh berkas template ini <a href="" class="badge btn-xs btn-primary"><i class="fas fa-file-excel"></i></a></li>
                            <li>isi data kolom sesuai judul masing-masing kolom</li>
                            <li>Jika lokasi yang Anda miliki banyak, isikan data berurutan pada setiap baris data</li>
                            <li>JANGAN MERUBAH FORMAT DATA YANG DIBERIKAN</li>
                            <li>PASTIKAN FORMAT DATA ANDA ADALAH <span class="fw-bold fw-900">TEXT</span></li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-download"></i> Send</button>
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
<script src="{{ asset('/js/datagrid/datatables/datatables.export.js') }}"></script>

<script>
    $(document).ready(function() {
        // initialize datatable
        $('#daftaranggota').dataTable({
            pagingType: 'full_numbers',
            responsive: true,
            lengthChange: true,
            pageLength: 10,
            order: [
                [0, 'asc']
            ],
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
                "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                /*{
                	extend:    'colvis',
                	text:      'Column Visibility',
                	titleAttr: 'Col visibility',
                	className: 'mr-sm-3'
                },*/
                {
                    extend: 'pdfHtml5',
                    text: 'PDF',
                    titleAttr: 'Generate PDF',
                    className: 'btn-outline-danger btn-sm mr-1'
                },
                {
                    extend: 'excelHtml5',
                    text: 'Excel',
                    titleAttr: 'Generate Excel',
                    className: 'btn-outline-success btn-sm mr-1'
                },
                {
                    extend: 'csvHtml5',
                    text: 'CSV',
                    titleAttr: 'Generate CSV',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'copyHtml5',
                    text: 'Copy',
                    titleAttr: 'Copy to clipboard',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'print',
                    text: 'Print',
                    titleAttr: 'Print Table',
                    className: 'btn-outline-primary btn-sm'
                }
            ]
        });

    });
</script>
@endsection