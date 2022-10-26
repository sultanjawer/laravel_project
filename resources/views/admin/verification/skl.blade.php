@extends ('layouts.global')
@section ('style')
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div id="panel-1" class="panel">
            <!-- diakses melalui menu verificator tasks > SKL 
			yang ingin dicapai adalah:
			menampilkan daftar pengajuan verifikasi lapangan
		    -->
            <div class="panel-hdr">
                <h2>
                    <i class="subheader-icon fal fa-file-certificate mr-1"></i>DAFTAR PENGAJUAN SKL
                </h2>
                <div class="panel-toolbar">
                    <a class="text-muted" data-toggle="tooltip" data-offset="0,10" data-original-title="Ini adalah daftar Pengajuan Verifikasi Lapangan yang telah diajukan oleh pelaku usaha dan siap untuk ditindaklanjuti."><i class="fal fa-info-circle"></i></a>
                    @include('partials.globaltoolbar')
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="table">
                        <table id="dataTable-sklList" class="table table-sm table-bordered table-hover table-striped w-100">
                            <thead class="bg-warning-50">
                                <tr>
                                    <th id="" hidden>Nama Perusahaan</th>
                                    <th id="">No. Pengajuan</th>
                                    <th id="">No. RIPH</th>
                                    <th id="">Tanggal diajukan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td hidden>API Nama Perusahaan</td>
                                    <td>API No. Pengajuan</td>
                                    <td>API No. RIPH</td>
                                    <td>API Time stamp pengajuan</td>
                                </tr>
                                <tr>
                                    <td hidden>Nama Perusahaan</td>
                                    <td class="fw-900"><a href="/verification/skl/check">No. Pengajuan</a></td>
                                    <td>No. RIPH</td>
                                    <td>31-03-2022</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
        //datatable produksi online
        $('#dataTable-sklList').dataTable({
            processing: true,
            serverside: true,
            pagingType: 'full_numbers',
            responsive: true,
            pageLength: 15,
            order: [
                [1, 'asc']
            ],
            rowGroup: {
                dataSrc: 0
            }
        });
    });
</script>
@endsection