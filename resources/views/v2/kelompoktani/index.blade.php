@extends ('layoutsv2.global')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partialsv2.sysalert')</div>
<div class="row">
    <div class="col-md-12">
        <div id="panel-1" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
            <div class="panel-hdr">
                <h2>
                    Daftar Komitmen <span class="fw-300"><i>Wajib Tanam</i></span>
                </h2>
                <div class="panel-toolbar">
                    <a class="btn btn-xs btn-primary mr-1 ml-1" href="/v2/kelompoktani/add"><i class="fal fa-plus mr-1"></i>Add Kelompoktani</a>
                    @include('partialsv2.globaltoolbar')
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <table id="kelompoktani" class="table table-sm table-bordered table-hover table-striped w-100">
                        <thead class="thead-dark">
                            <tr>
                                <th>Kelompoktani</th>
                                <th>Provinsi</th>
                                <th>Kabupaten</th>
                                <th>Jumlah Anggota</th>
                                <th>Luas Lahan (ha)</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>API Data</td>
                                <td>API Data</td>
                                <td>API Data</td>
                                <td>Count Anggota</td>
                                <td>Sum Luas Anggota</td>
                                <td>
                                    edit anggota delete
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
<script src="{{ asset('/js/datagrid/datatables/datatables.export.js') }}"></script>
<script>
    $(document).ready(function() {
        // initialize datatable
        $('#kelompoktani').dataTable({
            pagingType: 'full_numbers',
            responsive: true,
            lengthChange: false,
            pageLength: 10,
            order: [
                [0, 'asc']
            ]
        });

    });
</script>
@endsection