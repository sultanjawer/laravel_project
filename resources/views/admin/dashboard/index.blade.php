@extends ('layouts.admin')
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
<div class="row">
    <!--
		Yang ingin dicapai pada halaman ini adalah
		Administrator dengan role tertinggi dapat melihat seluruh data dalam aplikasi secara ringkas dan cepat.
		Data yang ditampilkan:
		Progress Realisasi pelaku usaha, progress verifikasi, dan progress lunas.
	-->
    <div class="col-md-3">
        <div id="new_request" class="p-3 bg-danger-300 rounded overflow-hidden position-relative text-white mb-g">
            <div class="">
                <h3 class="display-5 d-block l-h-n m-0 fw-500" data-toggle="tooltip" title data-original-title="Jumlah Perusahaan yang telah masuk dalam sistem SIMETHRIS">
                    <!-- nilai ini diperoleh dari jumlah seluruh pengajuan yang belum diverifikasi. where status = 1 (user) -->
                    117
                    <small class="m-0 l-h-n">Perusahaan</small>
                </h3>
            </div>
            <i class="fal fa-landmark position-absolute pos-right pos-bottom opacity-25 mb-n1 mr-n1" style="font-size:4rem"></i>
        </div>
    </div>
    <div class="col-md-3">
        <div id="onprogress" class="p-3 bg-warning-300 rounded overflow-hidden position-relative text-white mb-g">
            <div class="">
                <h3 class="display-5 d-block l-h-n m-0 fw-500" data-toggle="tooltip" title data-original-title="Total volume RIPH yang telah masuk ke dalam sistem SIMETHRIS">
                    <!-- nilai ini diperoleh dari jumlah seluruh pengajuan yang SEDANG diverifikasi. where status = 2 (mulai/on progress) -->
                    868.324
                    <small class="m-0 l-h-n">Volume Import (ton)</small>
                </h3>
            </div>
            <i class="fal fa-balance-scale position-absolute pos-right pos-bottom opacity-40 mb-n1 mr-n1" style="font-size:4rem"></i>
        </div>
    </div>
    <div class="col-md-3">
        <div id="verified" class="p-3 bg-info-300 rounded overflow-hidden position-relative text-white mb-g">
            <a class="position-absolute pos-right pos-top mt-2 mr-2">
                <i class="fal fa-info-circle"></i>
            </a>
            <div class="">
                <h3 class="display-5 d-block l-h-n m-0 fw-500" data-toggle="tooltip" title data-original-title="Jumlah luas tanam dalam satuan hektar yang harus dipenuhi oleh pelaku usaha yang telah masuk ke dalam sistem SIMETHRIS.">
                    <!-- nilai ini diperoleh dari jumlah seluruh pengajuan yang TELAH diverifikasi. where status = 3 & 4 (Verified OK & Verified Perbaikan) -->
                    7.236
                    <small class="m-0 l-h-n">Kewajiban Tanam (ha)</small>
                </h3>
            </div>
            <i class="fal fa-seedling position-absolute pos-right pos-bottom opacity-40 mb-n1 mr-n1" style="font-size:4rem"></i>
        </div>
    </div>
    <div class="col-md-3">
        <div id="accomplished" class="p-3 bg-success-300 rounded overflow-hidden position-relative text-white mb-g">
            <div class="">
                <h4 class="display-5 d-block l-h-n m-0 fw-500" data-toggle="tooltip" title data-original-title="Jumlah volume tanam dalam satuan ton yang harus dipenuhi oleh pelaku usaha yang telah masuk ke dalam sistem SIMETHRIS.">
                    <!-- nilai ini diperoleh dari jumlah seluruh pengajuan yang TELAH LUNAS. where status = 5 (LUNAS) -->
                    43.416
                    <small class="m-0 l-h-n">Kewajiban Produksi (ton)</small>
                </h4>
            </div>
            <i class="fal fa-dolly position-absolute pos-right pos-bottom opacity-40 mb-n1 mr-n1" style="font-size:4rem"></i>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="panel" id="panel-2">
            <div class="panel-hdr">
                <h2>
                    <i class="subheader-icon fal fa-seedling mr-1"></i>Wajib Tanam
                </h2>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <!-- Row -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-lg-5 col-sm-6 align-self-center text-center">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="realisasiTanam" role="tabpanel" aria-labelledby="realisasi">
                                    <div class="c-chart-wrapper">
                                        <div id="naschart" class="js-easy-pie-chart color-success-500 position-relative d-inline-flex align-items-center justify-content-center" data-percent="75.74" data-piesize="145" data-linewidth="10" data-linecap="butt" data-scalelength="7" data-toggle="tooltip" title data-original-title="74,24% dari Kewajiban" data-placement="bottom">
                                            <div class="d-flex flex-column align-items-center justify-content-center position-absolute pos-left pos-right pos-top pos-bottom fw-300 fs-xl">
                                                <span class="fs-xxl fw-500 text-dark">74.24<sup>%</sup></span>
                                                <!--<span class="display-3 fw-500 js-percent d-block text-dark">97.68</span>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="verifikasiTanam" role="tabpanel" aria-labelledby="verifikasiTanam">
                                    <div class="c-chart-wrapper">
                                        <div id="naschart" class="js-easy-pie-chart color-primary-500 position-relative d-inline-flex align-items-center justify-content-center" data-percent="75.74" data-piesize="145" data-linewidth="10" data-linecap="butt" data-scalelength="7" data-toggle="tooltip" title data-original-title="74,24% dari Kewajiban" data-placement="bottom">
                                            <div class="d-flex flex-column align-items-center justify-content-center position-absolute pos-left pos-right pos-top pos-bottom fw-300 fs-xl">
                                                <span class="fs-xxl fw-500 text-dark">74.24<sup>%</sup></span>
                                                <!--<span class="display-3 fw-500 js-percent d-block text-dark">97.68</span>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-sm-6">
                            <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link shadow-1 p-1 btn-block btn-success bg-success-300 rounded overflow-hidden position-relative text-white mb-2 waves-effect waves-themed" id="v-pills-home-tab" data-toggle="pill" href="#realisasiTanam" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                    <div class="">
                                        <span class="small">Realisasi</span>
                                        <h5 class="d-block l-h-n m-0 fw-500">
                                            123.456.789 ha
                                        </h5>
                                    </div>
                                    <i class="fal fa-hand-holding-seedling position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:3rem"></i>
                                </a>
                                <a class="nav-link  shadow-1 p-1 btn-block btn-primary bg-primary-300 rounded overflow-hidden position-relative text-white mb-2 waves-effect waves-themed" id="v-pills-profile-tab" data-toggle="pill" href="#verifikasiTanam" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                    <div class="">
                                        <span class="small">Verifikasi</span>
                                        <h5 class="d-block l-h-n m-0 fw-500">
                                            123.456.789 ha
                                        </h5>
                                    </div>
                                    <i class="fal fa-hand-holding-seedling position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:3rem"></i>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel" id="panel-2">
            <div class="panel-hdr">
                <h2>
                    <i class="subheader-icon fal fa-seedling mr-1"></i>Wajib Produksi
                </h2>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <!-- Row -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-lg-5 col-sm-6 align-self-center text-center">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="realisasiProduksi" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="c-chart-wrapper">
                                        <div id="naschart" class="js-easy-pie-chart color-warning-500 position-relative d-inline-flex align-items-center justify-content-center" data-percent="75.74" data-piesize="145" data-linewidth="10" data-linecap="butt" data-scalelength="7" data-toggle="tooltip" title data-original-title="74,24% dari Kewajiban" data-placement="bottom">
                                            <div class="d-flex flex-column align-items-center justify-content-center position-absolute pos-left pos-right pos-top pos-bottom fw-300 fs-xl">
                                                <span class="fs-xxl fw-500 text-dark">74.24<sup>%</sup></span>
                                                <!--<span class="display-3 fw-500 js-percent d-block text-dark">97.68</span>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="verifikasiProduksi" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <div class="c-chart-wrapper">
                                        <div id="naschart" class="js-easy-pie-chart color-primary-500 position-relative d-inline-flex align-items-center justify-content-center" data-percent="75.74" data-piesize="145" data-linewidth="10" data-linecap="butt" data-scalelength="7" data-toggle="tooltip" title data-original-title="74,24% dari Kewajiban" data-placement="bottom">
                                            <div class="d-flex flex-column align-items-center justify-content-center position-absolute pos-left pos-right pos-top pos-bottom fw-300 fs-xl">
                                                <span class="fs-xxl fw-500 text-dark">74.24<sup>%</sup></span>
                                                <!--<span class="display-3 fw-500 js-percent d-block text-dark">97.68</span>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-sm-6">
                            <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link shadow-1 p-1 btn-block btn-warning bg-warning-300 rounded overflow-hidden position-relative text-white mb-2 waves-effect waves-themed" id="v-pills-home-tab" data-toggle="pill" href="#realisasiProduksi" role="tab" aria-controls="realisasiProduksi" aria-selected="true">
                                    <div class="">
                                        <span class="small">Realisasi</span>
                                        <h5 class="d-block l-h-n m-0 fw-500">
                                            123.456.789 ton
                                        </h5>
                                    </div>
                                    <i class="fal fa-hand-holding-seedling position-absolute pos-right pos-bottom opacity-35 mb-n1 mr-n1" style="font-size:3rem"></i>
                                </a>
                                <a class="nav-link  shadow-1 p-1 btn-block btn-primary bg-primary-300 rounded overflow-hidden position-relative text-white mb-2 waves-effect waves-themed" id="v-pills-profile-tab" data-toggle="pill" href="#verifikasiProduksi" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                    <div class="">
                                        <span class="small">Verifikasi</span>
                                        <h5 class="d-block l-h-n m-0 fw-500">
                                            123.456.789 ton
                                        </h5>
                                    </div>
                                    <i class="fal fa-hand-holding-seedling position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:3rem"></i>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- Tabel Verifikasi
		Nilai Tabel chart ini diperoleh dari kueri data verifikasi dengan status mulai dari 0 s. d 5. Temporary tabel sesuai dengan tampilan pada layar html.
		Setiap status merupakan pintasan cepat ke halaman terkait.
	-->
    <div class="col-md-12">
        <div class="panel" id="panel-2">
            <div class="panel-hdr">
                <h2>
                    <i class="subheader-icon fal fa-ballot-check mr-1"></i>Verification <span class="fw-300"><i>Tasks</i></span>
                </h2>
                <div class="panel-toolbar">
                    @include('partials.globaltoolbar')
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="shadow-1 p-2 bg-primary-100 rounded overflow-hidden position-relative text-white mb-2">
                                <div class="">
                                    <h5 class="d-block l-h-n m-0 fw-500">
                                        123.456.789 ha
                                    </h5>
                                    <span class="small">Pengajuan</span>
                                </div>
                                <i class="fal fa-download position-absolute pos-right pos-bottom opacity-30 mb-n1 mr-n1" style="font-size:3rem"></i>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="shadow-1 p-2 bg-primary-200 rounded overflow-hidden position-relative text-white mb-2">
                                <div class="">
                                    <h5 class="d-block l-h-n m-0 fw-500">
                                        123.456.789 ha
                                    </h5>
                                    <span class="small">Diverifikasi</span>
                                </div>
                                <i class="fal fa-hourglass position-absolute pos-right pos-bottom opacity-30 mb-n1 mr-n1" style="font-size:3rem"></i>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="shadow-1 p-2 bg-primary-300 rounded overflow-hidden position-relative text-white mb-2">
                                <div class="">
                                    <h5 class="d-block l-h-n m-0 fw-500">
                                        123.456.789 ha
                                    </h5>
                                    <span class="small">Terverifikasi</span>
                                </div>
                                <i class="fal fa-check-circle position-absolute pos-right pos-bottom opacity-30 mb-n1 mr-n1" style="font-size:3rem"></i>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="shadow-1 p-2 bg-primary-400 rounded overflow-hidden position-relative text-white mb-2">
                                <div class="">
                                    <h5 class="d-block l-h-n m-0 fw-500">
                                        123.456.789 ha
                                    </h5>
                                    <span class="small">Lunas</span>
                                </div>
                                <i class="fal fa-award position-absolute pos-right pos-bottom opacity-30 mb-n1 mr-n1" style="font-size:3rem"></i>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <table id="sum_verif" class="table table-bordered table-hover table-sm w-100 dataTable">
                        <thead class="bg-gradient text-white text-center fw-500">
                            <tr>
                                <th rowspan="2">Perusahaan</th>
                                <th rowspan="2">Nomor RIPH</th>
                                <th colspan="2">Tahap 1 <sup>(Lapangan)</sup></th>
                                <th rowspan="2">Tahap 2 <sup>(Online)</sup></th>
                                <th rowspan="2">Tahap 3 <sup>SKL</sup></th>
                                <th rowspan="2">Status</th>
                            </tr>
                            <tr>
                                <th>Tanam</th>
                                <th>Produksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td class="text-left">PT. Bawang Nusantara</td>
                                <td>xxxx/PP.240/D/MM/YYY</td>
                                <td><a class="badge btn-sm btn-info" href="/verifikasi/onfarm">Submitted</a></td>
                                <td><a class="badge btn-sm btn-info" href="/verifikasi/onfarm">Submitted</a></td>
                                <td><a class="badge btn-sm btn-info" href="/verifikasi/online">Submitted</a></td>
                                <td><a class="badge btn-sm btn-default">No Status</a></td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="text-left">PT. Bawang Nusantara</td>
                                <td>xxxx/PP.240/D/MM/YYY</td>
                                <td><a class="badge btn-sm btn-warning" href="/verifikasi/onfarm">On progress</a></td>
                                <td><a class="badge btn-sm btn-info" href="/verifikasi/onfarm">Submitted</a></td>
                                <td><a class="badge btn-sm btn-info" href="/verifikasi/online">Submitted</a></td>
                                <td><a class="badge btn-sm btn-default">No Status</a></td>
                                <td>Verifying</td>
                            </tr>
                            <tr>
                                <td class="text-left">PT. Bawang Nusantara</td>
                                <td>xxxx/PP.240/D/MM/YYY</td>
                                <td><a class="badge btn-sm btn-success" href="/verifikasi/onfarm">Verified</a></td>
                                <td><a class="badge btn-sm btn-warning" href="/verifikasi/onfarm">On progress</a></td>
                                <td><a class="badge btn-sm btn-info" href="/verifikasi/online">Submitted</a></td>
                                <td><a class="badge btn-sm btn-default">No Status</a></td>
                                <td>Verifying</td>
                            </tr>
                            <tr>
                                <td class="text-left">PT. Bawang Nusantara</td>
                                <td>xxxx/PP.240/D/MM/YYY</td>
                                <td><a class="badge btn-sm btn-success" href="/verifikasi/onfarm">Verified</a></td>
                                <td><a class="badge btn-sm btn-danger" href="/verifikasi/onfarm">Verified</a></td>
                                <td><a class="badge btn-sm btn-warning" href="/verifikasi/online">On progress</a></td>
                                <td><a class="badge btn-sm btn-default">No Status</a></td>
                                <td>Verifying</td>
                            </tr>
                            <tr>
                                <td class="text-left">PT. Bawang Nusantara</td>
                                <td>xxxx/PP.240/D/MM/YYY</td>
                                <td><a class="badge btn-sm btn-success" href="/verifikasi/onfarm">Verified</a></td>
                                <td><a class="badge btn-sm btn-success" href="/verifikasi/onfarm">Verified</a></td>
                                <td><a class="badge btn-sm btn-success" href="/verifikasi/online">Verified</a></td>
                                <td><a class="badge btn-sm btn-info" href="/verifikasi/lunas_check">Submitted</a></td>
                                <td>Verifying</td>
                            </tr>
                            <tr>
                                <td class="text-left">PT. Bawang Nusantara</td>
                                <td>xxxx/PP.240/D/MM/YYY</td>
                                <td><a class="badge btn-sm btn-danger" href="/verifikasi/onfarm">Verified</a></td>
                                <td><a class="badge btn-sm btn-success" href="/verifikasi/onfarm">Verified</a></td>
                                <td><a class="badge btn-sm btn-success" href="/verifikasi/online">Verified</a></td>
                                <td><a class="badge btn-sm btn-danger" href="/verifikasi/lunas_check">Rejected</a></td>
                                <td>Verifying</td>
                            </tr>
                            <tr>
                                <td class="text-left">PT. Bawang Nusantara</td>
                                <td>xxxx/PP.240/D/MM/YYY</td>
                                <td><a class="badge btn-sm btn-success" href="/verifikasi/onfarm">Verified</a></td>
                                <td><a class="badge btn-sm btn-success" href="/verifikasi/onfarm">Verified</a></td>
                                <td><a class="badge btn-sm btn-success" href="/verifikasi/online">Verified</a></td>
                                <td><a class="badge btn-sm btn-success" href="/skl/skl">Accomplished</a></td>
                                <td>-</td>
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
@section('scripts')
<!-- start script for this page -->
<script src="{{ asset('/js/statistics/easypiechart/easypiechart.bundle.js') }}"></script>
<script src="{{ asset('/js/datagrid/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('/js/datagrid/datatables/datatables.export.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#a').dataTable({
            responsive: true,
            pageLength: 10,
            order: [
                [0, 'asc']
            ]
        });
    });
</script>

<script>
    $(document).ready(function() {

        // initialize datatable
        $('#sum_verif').dataTable({
            processing: true,
            serverside: true,
            pagingType: 'full_numbers',
            responsive: true,
            lengthChange: false,
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
                "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [{
                    extend: 'colvis',
                    text: 'Visibility',
                    titleAttr: 'Col visibility',
                    className: 'btn-outline-info btn-xs mr-sm-3 ml-5'
                },
                {
                    extend: 'pdfHtml5',
                    text: 'PDF',
                    titleAttr: 'Generate PDF',
                    className: 'btn-outline-danger btn-xs mr-1'
                },
                {
                    extend: 'excelHtml5',
                    text: 'Excel',
                    titleAttr: 'Generate Excel',
                    className: 'btn-outline-success btn-xs mr-1'
                },
                /*{
                	extend: 'csvHtml5',
                	text: 'CSV',
                	titleAttr: 'Generate CSV',
                	className: 'btn-outline-primary btn-xs mr-1'
                },*/
                /*{
                	extend: 'copyHtml5',
                	text: 'Copy',
                	titleAttr: 'Copy to clipboard',
                	className: 'btn-outline-primary btn-xs mr-1'
                },*/
                {
                    extend: 'print',
                    text: 'Print',
                    titleAttr: 'Print Table',
                    className: 'btn-outline-primary btn-xs'
                }
            ]
        });

    });
</script>
@endsection