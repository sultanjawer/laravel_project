@extends ('layoutsv2.global')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partialsv2.sysalert')</div>

<div class="row">
    <!-- panel onfarm.Visible saat jenis VERIFIKASI saja -->
    <div class="col-md-12">
        <div class="panel" id="panel-1">
            <div class="panel-hdr bg-warning-50">
                <h2>
                    ONFARM<span class="fw-300 ml-1"><i>Verification</i></span>
                </h2>
                <div class="panel-toolbar">

                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="table">
                        <table class="table table-sm table-bordered table-hover table-striped w-100">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="3">Tanggal</th>
                                    <th class="text-center" colspan="3">Status Verifikasi</th>
                                </tr>
                                <tr>
                                    <th class="text-center">Pengajuan</th>
                                    <th class="text-center">Verifikasi</th>
                                    <th class="text-center">Penetapan</th>
                                    <th class="text-center">Tanam</th>
                                    <th class="text-center">Produksi</th>
                                    <th class="text-center">Akhir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td class="text-center">dd/mm/yyy</td>
                                <td class="text-center">dd/mm/yyy</td>
                                <td class="text-center">dd/mm/yyy</td>
                                <td class="text-center"><span class="badge btn-sm btn-default">No status</span></td>
                                <td class="text-center"><span class="badge btn-sm btn-danger">Perbaikan</span></td>
                                <td class="text-center"><span class="badge btn-sm btn-success">Verified</span></td>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="form-label" for="tgl">Catatan - Kesimpulan</label>
                            <div class="input-group">
                                <textarea type="text" class="form-control form-control-sm" aria-label="Tanggal mulai pelaksanaan pemeriksaan" id="tgl_status" placeholder="no data found" rows="3" readonly>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus quis sem diam. Sed commodo metus in ultrices consequat. Vestibulum eu orci ante. Mauris vel tincidunt mauris. Cras finibus, purus eu pharetra molestie, orci felis lacinia orci, ac congue quam turpis a nibh.
								</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end panel onfarm -->
    <!-- panel online-->
    <div class="col-md-12">
        <div class="panel" id="panel-1">
            <div class="panel-hdr bg-primary-50">
                <h2>
                    ONLINE <span class="fw-300 ml-1"><i>Verification</i></span>
                </h2>
                <div class="panel-toolbar">

                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="table">
                        <table class="table table-sm table-bordered table-hover table-striped w-100">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="3">Tanggal</th>
                                    <th class="text-center" rowspan="2">Status Verifikasi</th>
                                </tr>
                                <tr>
                                    <th class="text-center">Pengajuan</th>
                                    <th class="text-center">Verifikasi</th>
                                    <th class="text-center">Penetapan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td class="text-center">dd/mm/yyy</td>
                                <td class="text-center">dd/mm/yyy</td>
                                <td class="text-center">dd/mm/yyy</td>
                                <td class="text-center"><span class="badge btn-sm btn-warning">On Progress</span></td>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="form-label" for="tgl">Catatan - Kesimpulan</label>
                            <div class="input-group">
                                <textarea type="text" class="form-control form-control-sm" aria-label="Tanggal mulai pelaksanaan pemeriksaan" id="tgl_status" placeholder="dd/mm/yyyy" rows="3" readonly>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus quis sem diam. Sed commodo metus in ultrices consequat. Vestibulum eu orci ante. Mauris vel tincidunt mauris. Cras finibus, purus eu pharetra molestie, orci felis lacinia orci, ac congue quam turpis a nibh.</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end panel online-->
    <!-- panel SKL. Visible saat jenis Ket. LUNAS -->
    <div class="col-md-12">
        <div class="panel" id="panel-1">
            <div class="panel-hdr bg-success-50">
                <h2>
                    Keterangan Lunas</span>
                </h2>
                <div class="panel-toolbar">

                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="table">
                        <table class="table table-sm table-bordered table-hover table-striped w-100">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="3">Tanggal</th>
                                    <th class="text-center" rowspan="2">Status Pengajuan</th>
                                </tr>
                                <tr>
                                    <th class="text-center">Pengajuan</th>
                                    <th class="text-center">Verifikasi</th>
                                    <th class="text-center">Penetapan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td class="text-center">dd/mm/yyy</td>
                                <td class="text-center">dd/mm/yyy</td>
                                <td class="text-center">dd/mm/yyy</td>
                                <td class="text-center"><span class="badge btn-sm btn-success">Terbit</span></td>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="form-label" for="tgl">Catatan - Kesimpulan</label>
                            <div class="input-group">
                                <textarea type="text" class="form-control form-control-sm" aria-label="Tanggal mulai pelaksanaan pemeriksaan" id="tgl_status" placeholder="dd/mm/yyyy" rows="3" readonly>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus quis sem diam. Sed commodo metus in ultrices consequat. Vestibulum eu orci ante. Mauris vel tincidunt mauris. Cras finibus, purus eu pharetra molestie, orci felis lacinia orci, ac congue quam turpis a nibh.</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end panel online-->
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
        $('#verifList').dataTable({
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