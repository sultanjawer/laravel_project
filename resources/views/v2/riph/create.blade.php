@extends ('layoutsv2.global')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partialsv2.sysalert')</div>

<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-sm-row" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                    <i class="fal fa-file-invoice mr-1"></i>
                    Data RIPH
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="benih-tab" data-toggle="tab" href="#benih" role="tab" aria-controls="benih" aria-selected="true">
                    <i class="fal fa-seedling mr-1"></i>
                    Data Perbenihan (berlabel)
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab3" aria-selected="true">
                    <i class="fal fa-shield-alt mr-1"></i>
                    Data Pengendalian
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab4" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab4" aria-selected="true">
                    <i class="fal fa-users mr-1"></i>
                    kelompoktani
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab5" data-toggle="tab" href="#tab-5" role="tab" aria-controls="tab5" aria-selected="true">
                    <i class="fal fa-check mr-1"></i>
                    Data Lainnya
                </a>
            </li>
        </ul>
        <hr>
        <form id="js-login" novalidate="" action="/v2/riphlist">
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- tab home -->
                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div id="panel-1" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="form-group row">
                                    <label class="col-xl-12 form-label" for="nomor_riph">Nomor RIPH <span class="text-danger">*</span></label>
                                    <div class="col-md-12 pr-1">
                                        <input type="text" id="nomor_riph" class="form-control" placeholder="Nomor RIPH" required>
                                        <div class="invalid-feedback">No, you missed this one.</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label class="form-label" for="periode">Periode <span class="text-danger">*</span></label>
                                        <input type="text" id="periode" class="form-control" placeholder="Tahun" required>
                                        <div class="invalid-feedback">No, you missed this one.</div>
                                        <div class="help-block">Tahun diterbitkannya RIPH ini. Format "YYYY"</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="tgl_terbit">Tanggal Terbit <span class="text-danger">*</span></label>
                                        <input type="date" id="tgl_terbit" class="form-control" required>
                                        <div class="invalid-feedback">No, you missed this one.</div>
                                        <div class="help-block">Tanggal Bulan Tahun diterbitkannya RIPH ini.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="tgl_akhir">Tanggal Berakhir <span class="text-danger">*</span></label>
                                        <input type="date" id="tgl_akhir" class="form-control" placeholder="Tanggal berakhirnya masa berlaku riph" required>
                                        <div class="invalid-feedback">No, you missed this one.</div>
                                        <div class="help-block">Tanggal Bulan Tahun berakhirnya masa berlaku RIPH ini.</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label class="form-label" for="komoditas">Komoditas <span class="text-danger">*</span></label>
                                        <input type="text" id="komoditas" class="form-control" placeholder="07032090 - - Bawang putih, segar atau dingin" required>
                                        <div class="invalid-feedback">No, you missed this one.</div>
                                        <div class="help-block">Komoditas yang di Import. Lengkapi dengan HS Code</div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-label" for="vol_import">Volume Import (ton) <span class="text-danger">*</span></label>
                                                <input type="number" id="vol_import" class="form-control" required>
                                                <div class="invalid-feedback">No, you missed this one.</div>
                                                <div class="help-block">Jumlah volume import yang tercantum di dalam RIPH.</div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- formula wajib tanam= Volume Import x 5% / 6 -->
                                                <label class="form-label" for="wajib_tanam">Wajib Tanam (ha)<span class="text-danger">*</span></label>
                                                <input type="number" id="tgl_akhir" class="form-control" placeholder="autocalculate" required readonly>
                                                <div class="invalid-feedback">No, you missed this one.</div>
                                                <div class="help-block">Luas tanam yang harus dipenuhi.</div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- formula wajib produksi= Volume Import x 5% -->
                                                <label class="form-label" for="tgl_akhir">Wajib Produksi (ton) <span class="text-danger">*</span></label>
                                                <input type="number" id="wajib_produksi" class="form-control" placeholder="autocalculate" required readonly>
                                                <div class="invalid-feedback">No, you missed this one.</div>
                                                <div class="help-block">Volume produksi yang harus dipenuhi.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tab benih -->
                <div class="tab-pane" id="benih" role="tabpanel" aria-labelledby="home-tab">
                    <div id="panel-2" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <!-- formula kebutuhan benih = 0.8 ton x luas wajib tanam -->
                                        <label class="form-label" for="kebutuhan">Kebutuhan <span class="text-danger">*</span></label>
                                        <input type="number" id="kebutuhan" class="form-control" placeholder="autocalculate" required readonly>
                                        <div class="help-block">Jumlah total kebutuhan benih.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="in_stock">Stok Mandiri <span class="text-danger">*</span></label>
                                        <input type="number" id="in_stock" class="form-control" placeholder="stok mandiri" required>
                                        <div class="invalid-feedback">No, you missed this one.</div>
                                        <div class="help-block">Jumlah stok benih yang dimiliki perusahaan.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <!-- formula = kebutuhan - in_stock -->
                                        <label class="form-label" for="benih_penangkar">dari Penangkar <span class="text-danger">*</span></label>
                                        <input type="number" id="benih_penangkar" class="form-control" placeholder="autocalculate" required readonly>
                                        <div class="help-block">Jumlah benih yang diperoleh/beli dari penangkar.</div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="panel-content">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row no-gutters mb-3">
                                            <div class="col-md-4 ml-auto text-right">
                                                <a href="#addpenangkar" class="btn btn-primary btn-xs mt-3">Add Penangkar</a>
                                            </div>
                                        </div>
                                        <table class="table table-sm table-hover table-bordered w-100" id="penangkar">
                                            <thead>
                                                <tr>
                                                    <th>Penangkar</th>
                                                    <th>Varietas</th>
                                                    <th>Alamat</th>
                                                    <th>Pimpinan</th>
                                                    <th>No. Kontak</th>
                                                    <th>Ketersediaan</th>
                                                    <th>Tindakan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-info" href="#editpenangkar">Ubah</a>
                                                        <button class="btn btn-xs btn-danger">Hapus</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tab pengendalian -->
                <div class="tab-pane" id="tab-3" role="tabpanel" aria-labelledby="home-tab">
                    <div id="panel-3" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <label class="form-label" for="organik">Pupuk Organik (kg)<span class="text-danger">*</span></label>
                                        <input type="number" id="organik" class="form-control" placeholder="0" required>
                                        <div class="invalid-feedback">No, you missed this one.</div>
                                        <div class="help-block">Jumlah pupuk organik yang diperlukan</div>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label" for="npk">Nitrogen Phosfor Kalium (Kg) <span class="text-danger">*</span></label>
                                        <input type="number" id="npk" class="form-control" placeholder="0" required>
                                        <div class="invalid-feedback">No, you missed this one.</div>
                                        <div class="help-block">Jumlah pupuk NPK yang diperlukan.</div>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label" for="dolomit">Dolomit (Kg) <span class="text-danger">*</span></label>
                                        <input type="number" id="dolomit" class="form-control" placeholder="0" required>
                                        <div class="invalid-feedback">No, you missed this one.</div>
                                        <div class="help-block">Jumlah kapur dolomit yang diperlukan.</div>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label" for="zamonium">Zwavelzure Amonium (Kg) <span class="text-danger">*</span></label>
                                        <input type="number" id="zamonium" class="form-control" placeholder="0" required>
                                        <div class="invalid-feedback">No, you missed this one.</div>
                                        <div class="help-block">Jumlah pupuk ZA yang diperlukan</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-4" role="tabpanel" aria-labelledby="home-tab">
                    <div id="panel-4" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="help-block mb-3">Tekan dan tahan tombol CTRL (Windows) atau Command (Mac) untuk memilih lebih dari satu.</div>
                                        <!-- pilih kelompoktani dapat menggunakan metode lain yang lebih relevan, sesuai dan mudah dari sisi devs-->
                                        <table class="table table-sm table-hover table-bordered w-100" id="kelompoktani">
                                            <thead>
                                                <tr>
                                                    <th>Kelompoktani</th>
                                                    <th>Anggota</th>
                                                    <th>Luas</th>
                                                    <th>Pilih</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="check0">
                                                            <label class="custom-control-label" for="check0"> </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="check1">
                                                            <label class="custom-control-label" for="check1"> </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="check2">
                                                            <label class="custom-control-label" for="check2"> </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="check3">
                                                            <label class="custom-control-label" for="check3"> </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-5" role="tabpanel" aria-labelledby="home-tab">
                    <div id="panel-3" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="form-group row">
                                    <label class="col-lg-12 form-label" for="saprodi">Saprodi Lainnya (kg)<span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="text" id="saprodi" class="form-control" placeholder="Nama barang, contoh: Mulsa" required>
                                        <div class="invalid-feedback">No, you missed this one.</div>
                                        <div class="help-block">Nama barang bantuan yang salurkan.</div>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" id="volume" class="form-control" placeholder="0">
                                        <div class="help-block">Volume Bantuan yang disalurkan dalam satuan kg, contoh: 50</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-12 form-label" for="shares_company">Bagi Hasil (%)<span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="number" id="shares_company" class="form-control" placeholder="0" required>
                                        <div class="invalid-feedback">No, you missed this one.</div>
                                        <div class="help-block">Prosentase Bagi hasil untuk perusahaan, contoh: 50.</div>
                                    </div>
                                    <!-- formula shares_poktan = 100 - shares_company -->
                                    <div class="col-lg-6">
                                        <input type="number" id="shares_poktan" class="form-control" placeholder="autocalculate" readonly>
                                        <div class="help-block">Prosentase Bagi hasil untuk kelompoktani.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-4 ml-auto text-right">
                            <a href="/v2/riphlist" class="btn btn-warning btn-sm mt-3">Cancel</a>
                            <button id="js-login-btn" type="submit" class="btn btn-primary btn-sm mt-3">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
        $('#penangkar').dataTable({
            pagingType: 'full_numbers',
            responsive: true,
            lengthChange: false,
            pageLength: 10,
            order: [
                [0, 'asc']
            ]
        });

        $('#kelompoktani').dataTable({
            pagingType: 'full_numbers',
            responsive: true,
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
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [{
                    extend: 'selectAll',
                    text: 'Semua',
                    className: 'btn-outline-primary btn-sm'
                },
                {
                    extend: 'selectNone',
                    text: 'Batal Terpilih',
                    className: 'btn-outline-primary btn-sm'
                }

            ],
            select: true
        });

    });
</script>
@endsection