@extends ('layoutsv2.global')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partialsv2.sysalert')</div>

<div class="row">
    <form id="js-login" novalidate="" action="">
        <div class="col-12">
            <div class="text-center">
                <i class="fal fa-badge-check fa-3x subheader-icon"></i>
                <h2>Pemeriksaan Data</h2>
                <div class="row justify-content-center">
                    <!--
					Yang ingin dicapi pada fitur ini adalah:
					menampilkan animasi sistem sedang memeriksa data (check & load query).
				-->
                    <p class="lead">Mohon menunggu hingga sistem selesai memeriksa kelengkapan data dan berkas untuk verifikasi. <i class="ml-1 fal fa-hourglass-half text-success"></i></p>
                    <div class="col-md-8 order-md-2">
                        <h3>HASIL PEMERIKSAAN AWAL</h3>
                    </div>
                </div>
            </div>
            <div id="panel-1" class="panel">
                <!-- yang ingin dicapai dari panel ini adalah:
				Melakukan pemeriksaan terhadap Nomor RIPH dan syarat minimum Tanam-Produksi dengan ketentuan:
				1.	Nomor RIPH, always OK (Nomor yang akan dilakukan verifikasi secara teknis)
				2.	STATUS OK jika MIN. REALISASI TANAM : Tidak ada minimum, namun setidaknya harus terisi data luas (numeric)
				3.	STATUS OK jika MIN. REALISASI PRODUKSI : 90.00-95.00% total realisasi produksi terhadap Beban Kewajiban
				-->
                <div class="panel-hdr">
                    <h2>UMUM</h2>
                    <div class="panel-toolbar">

                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="help-block">
                            Bagian ini akan melakukan pemeriksaan data RIPH serta kinerja pemenuhan/realisasi komitmen
                        </div>
                    </div>
                    <div class="card-header p-0">
                        <div class="row no-gutters row-grid align-items-stretch">
                            <div class="col-12 col-md">
                                <div class="text-uppercase text-muted py-2 px-3">Pemeriksaan</div>
                            </div>
                            <div class="col-sm-6 col-md-3 hidden-md-down">
                                <div class="text-uppercase text-muted py-2 px-3">Data</div>
                            </div>
                            <div class="col-sm-6 col-md-2 col-xl-1 hidden-md-down">
                                <div class="text-uppercase text-muted py-2 px-3">Status</div>
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
                                                    <i class="base base-5 icon-stack-3x opacity-100 color-primary-400"></i>
                                                    <i class="base base-5 icon-stack-2x opacity-100 color-primary-800"></i>
                                                    <i class="fal fa-file-invoice icon-stack-1x opacity-100 color-white"></i>
                                                </div>
                                                <div class="d-inline-flex flex-column">
                                                    <a class="fs-lg fw-500 d-block">
                                                        Nomor RIPH
                                                    </a>
                                                    <div class="d-block text-muted fs-sm">
                                                        Nomor Penerbitan Rekomendasi Impor Produk Hortikultura
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8 col-md-3 hidden-md-down">
                                        <div class="p-3 p-md-3">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-1 min-width-0">
                                                    <a href="javascript:void(0)" class="d-block text-truncate">
                                                        0155/PP.240/D/03/2022
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
                            <!-- thread Total wajib tanam minimum 95.00% terpenuhi sehingga status menjadi OK.-->
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
                                                        Wajib Tanam (ha)
                                                    </a>
                                                    <div class="d-block text-muted fs-sm">
                                                        Komitmen wajib tanam yang telah dipenuhi hingga saat ini
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8 col-md-3 hidden-md-down">
                                        <div class="p-3 p-md-3">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-1 min-width-0">
                                                    <a href="javascript:void(0)" class="d-block text-truncate">
                                                        Kewajiban
                                                    </a>
                                                </div>
                                                <div class="flex-1 min-width-0">
                                                    <a href="javascript:void(0)" class="d-block text-truncate fw-700">
                                                        14.500 ha
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-1 min-width-0">
                                                    <a href="javascript:void(0)" class="d-block text-truncate">
                                                        Realisasi
                                                    </a>
                                                </div>
                                                <div class="flex-1 min-width-0">
                                                    <a href="javascript:void(0)" class="d-block text-truncate fw-700">
                                                        14.500 ha
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
                            <!-- thread // Total wajib produksi minimum 95.00% terpenuhi sehingga status menjadi OK.-->
                            <div class="col-12">
                                <div class="row no-gutters row-grid align-items-stretch">
                                    <div class="col-md">
                                        <div class="p-3">
                                            <div class="d-flex align-items-center">
                                                <div class='icon-stack display-4 mr-3 flex-shrink-0'>
                                                    <i class="base base-5 icon-stack-3x opacity-100 color-warning-400"></i>
                                                    <i class="base base-5 icon-stack-2x opacity-100 color-warning-800"></i>
                                                    <i class="fal fa-dolly icon-stack-1x opacity-100 color-white"></i>
                                                </div>
                                                <div class="d-inline-flex flex-column">
                                                    <a class="fs-lg fw-500 d-block">
                                                        Wajib Produksi (ton)
                                                    </a>
                                                    <div class="d-block text-muted fs-sm">
                                                        Komitmen wajib produksi yang telah dipenuhi hingga saat ini
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8 col-md-3 hidden-md-down">
                                        <div class="p-3 p-md-3">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-1 min-width-0">
                                                    <a href="javascript:void(0)" class="d-block text-truncate">
                                                        Kewajiban
                                                    </a>
                                                </div>
                                                <div class="flex-1 min-width-0">
                                                    <a href="javascript:void(0)" class="d-block text-truncate fw-700">
                                                        14.500 ton
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-1 min-width-0">
                                                    <a href="javascript:void(0)" class="d-block text-truncate">
                                                        Realisasi
                                                    </a>
                                                </div>
                                                <div class="flex-1 min-width-0">
                                                    <a href="javascript:void(0)" class="d-block text-truncate fw-700">
                                                        14.500 ton
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
                <!-- yang ingin dicapai dari panel ini adalah:
				Melakukan pemeriksaan kelengkapan berkas-berkas yang wajib diungga sebelumnya oleh pelaku usaha.
				1. Terdapat tautan untuk melihat berkas yang diunggah, dapat menggunakan nama berkas sebagai tautan. Jika berkas tidak ditemukan, maka;
				2. Status Tidak ADA (MERAH) atau null, menjadi tautan menuju halaman dimana terdapat kolom unggahan berkas terkait.
				
				Syarat Kelengkapan berkas: SELURUH BERKAS HARUS DIUNGGAH yang digambarkan pada status ADA
			    -->
                <div class="panel-hdr">
                    <h2>Berkas-berkas lampiran</h2>
                    <div class="panel-toolbar">

                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="help-block">
                            Bagian ini akan melakukan pemeriksaan kelengkapan berkas-berkas lampiran yang diperlukan.
                        </div>
                    </div>
                    <div class="panel-content">
                        <table class="table table-striped table-bordered" id="dt-fileAttach">
                            <thead>
                                <tr>
                                    <th scope="row">Form</th>
                                    <th scope="row">Nama Berkas</th>
                                    <th scope="row">Tanggal Unggah</th>
                                    <th scope="row">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Penerbitan RIPH</td>
                                    <td>
                                        <a href="scan_riph_015PP240DMMMMYYYY.pdf">scan_riph_015PP240DMMMMYYYY.pdf</a>
                                    </td>
                                    <td>31-12-2022</td>
                                    <td>
                                        <a class="text-success"><i class="fas fa-check mr-1"></i> Ada</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Form SPTJM</td>
                                    <td>
                                        <a href="scan_sptjm_015PP240DMMMMYYYY.pdf">scan_sptjm_015PP240DMMMMYYYY.pdf</a>
                                    </td>
                                    <td>31-12-2022</td>
                                    <td>
                                        <a class="text-success"><i class="fas fa-check mr-1"></i> Ada</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Logbook</td>
                                    <td>
                                        <a href="scan_logbook_015PP240DMMMMYYYY.pdf">scan_logbook_015PP240DMMMMYYYY.pdf</a>
                                    </td>
                                    <td>31-12-2022</td>
                                    <td>
                                        <a class="text-success"><i class="fas fa-check mr-1"></i> Ada</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Form RT</td>
                                    <td>
                                        <a href="scan_formrt_015PP240DMMMMYYYY.pdf">scan_formrt_015PP240DMMMMYYYY.pdf</a>
                                    </td>
                                    <td>31-12-2022</td>
                                    <td>
                                        <a class="text-success"><i class="fas fa-check mr-1"></i> Ada</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Form RTA</td>
                                    <td>
                                        <a href="scan_formrta_015PP240DMMMMYYYY.pdf">scan_formrta_015PP240DMMMMYYYY.pdf</a>
                                    </td>
                                    <td>31-12-2022</td>
                                    <td>
                                        <a class="text-success"><i class="fas fa-check mr-1"></i> Ada</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Form RPO</td>
                                    <td>
                                        <a href="scan_formrpo_015PP240DMMMMYYYY.pdf">scan_formrpo_015PP240DMMMMYYYY.pdf</a>
                                    </td>
                                    <td>31-12-2022</td>
                                    <td>
                                        <a class="text-success"><i class="fas fa-check mr-1"></i> Ada</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Form LA</td>
                                    <td>
                                        <a class="text-danger" title="Berkas tidak ditemukan">Berkas tidak ada!</a>
                                    </td>
                                    <td>31-12-2022</td>
                                    <td>
                                        <a class="text-danger" href="/riphlist/detail"><i class="fas fa-times mr-1"></i>Tidak Ada!</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-content">
                        <div class="card-footer">
                            <div class="help-block">
                                Keterangan<br>
                                <span><i class="fas fa-check text-success mr-1"></i> Status berkas dilampirkan.</span><br>
                                <span><i class="fas fa-times text-danger mr-1"></i> Status berkas tidak dilampirkan</span><br>
                                <span>klik tanda <i class="fas fa-times text-danger mr-1"></i>untuk melengkapi berkas yang diperlukan.</span><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="panel-3" class="panel">
                <!-- yang ingin dicapai dari panel ini adalah:
				1.Mem-populate lokasi tanam yang akan diajukan untuk dilakukan verifikasi (khususnya lapangan). Data dikelompokkan (grouping) berdasarkan Kelompoktani untuk memudahkan pencarian dan seleksi.
				
				2. Melakukan pemeriksaan kelengkapan berkas-berkas (di level data kelompoktani) yang terkait dengan Perjanjian, Kelompok Tani, dan Lokasi Tanam, yang wajib diungga sebelumnya oleh pelaku usaha.
				3. Memeriksa Luas Tanam-Produksi tidak bernilai null atau 0
				4. field-field yang diperiksa adalah:
					a. Lokasi Tanam/Nomor Lokasi/Register Lahan = not null
					b. Luas Tanam = not null / 0
					c. produksi = not null / 0
					d. file PKS = not null
					e. file Form-5 = not null
					f. Geolocation = not null, cannot parse value (lat-long-polygon),
					g. Foto/file dokumentasi tanam = not null (minimum 1 foto),
					g. Foto/file dokumentasi produksi = not null (minimum 1 foto).
				
				Kolom Status Cek/Periksa akan menampilkan:
				1. Cek OK (hijau) jika tidak ada satupun field yang diperiksa bernilai null atau 0
				2. X Merah, jika ditemukan 1 atau lebih field bernilai null atau 0, menjadi tautan menuju halaman daftar kelompok tani.
				
				#Lokasi yang dipilih untuk diajukan pemeriksaan adalah lokasi dengan status cek/periksa bernilai OK
				#Jumlah minimum sample lokasi lahan yang diajukan menggunakan rumus/formula ...
			    -->
                <div class="panel-hdr">
                    <h2>
                        <i class="subheader-icon fal fa-map-marked-alt mr-1"></i>Pengajuan Lokasi
                    </h2>
                    <div class="panel-toolbar">

                    </div>
                </div>
                <div class="alert alert-danger border-0 mb-0">
                    <div class="d-flex align-item-center">
                        <div class="alert-icon width-2">
                            <div class="icon-stack icon-stack-sm mr-3 flex-shrink-0" style="font-size: 22px;">
                                <i class="base base-7 icon-stack-3x opacity-100 color-danger-400"></i>
                                <i class="base base-7 icon-stack-2x opacity-100 color-danger-800"></i>
                                <i class="fa fa-info icon-stack-1x opacity-100 color-white"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <span>Pilih lokasi lahan wajib tanam-produksi untuk diajukan verifikasi lapangan dengan cara klik baris data atau checkbox yang disediakan.</span>
                        </div>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <!--
						OPSI METODE memilih baris yang diajukan verifikasi:
							A. dengan metode datatable select, atau;
							B. dengan metode checkbox button.
							
						silahkan ditentukan metode yang mudah dan paling memungkinkan ditinjau dari sisi development
					-->
                        <table id="dt-ajulokasi" class="table table-sm table-bordered table-striped w-100">
                            <thead>
                                <tr>
                                    <th hidden>Kelompoktani</th>
                                    <th>(ID) Nama Lokasi</th>
                                    <th>Luas Tanam (ha)</th>
                                    <th>Produksi (ton)</th>
                                    <th>Status Cek</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td hidden>Kelompoktani A (Grouping)</td>
                                    <td>(1) Lokasi Tanam 1</td>
                                    <td>0.80</td>
                                    <td>5.00</td>
                                    <td><a href="/farm/activity" class="text-success"><i class="fas fa-check mr-1"></i> Ok</a></td>
                                    <td class="text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check1">
                                            <label class="custom-control-label" for="check1"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td hidden>Kelompoktani A (Grouping)</td>
                                    <td>(2) Lokasi Tanam 2</td>
                                    <td>1.80</td>
                                    <td>11.00</td>
                                    <td><a href="/pks/edit" class="text-danger"><i class="fas fa-times mr-1"></i> Tidak ada lampiran PKS</a></td>
                                    <td class="text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check2">
                                            <label class="custom-control-label" for="check2"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td hidden>Kelompoktani A (Grouping)</td>
                                    <td>(3) Lokasi Tanam 3</td>
                                    <td>1.80</td>
                                    <td>11.00</td>
                                    <td><a href="/farm/edit" class="text-danger"><i class="fas fa-times mr-1"></i> Tidak ada data lokasi</a></td>
                                    <td class="text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check3">
                                            <label class="custom-control-label" for="check3"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td hidden>Kelompoktani A (Grouping)</td>
                                    <td>(4) Lokasi Tanam 4</td>
                                    <td>1.80</td>
                                    <td>11.00</td>
                                    <td><a href="/farm/activity" class="text-danger"><i class="fas fa-times mr-1"></i> Tidak ada Dokumentasi kegiatan tanam</a></td>
                                    <td class="text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check4">
                                            <label class="custom-control-label" for="check4"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td hidden>Kelompoktani A (Grouping)</td>
                                    <td>(5) Lokasi Tanam 5</td>
                                    <td>1.80</td>
                                    <td>11.00</td>
                                    <td><a href="/farm/harvest" class="text-danger"><i class="fas fa-times mr-1"></i> Tidak ada Dokumentasi kegiatan produksi</a></td>
                                    <td class="text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check5">
                                            <label class="custom-control-label" for="check5"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td hidden>Kelompoktani B (Grouping)</td>
                                    <td>(6) Lokasi Tanam 6</td>
                                    <td>0.80</td>
                                    <td>5.00</td>
                                    <td><a href="/farm/activity" class="text-success"><i class="fas fa-check mr-1"></i> Ok</a></td>
                                    <td class="text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check6">
                                            <label class="custom-control-label" for="check6"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td hidden>Kelompoktani B (Grouping)</td>
                                    <td>(7) Lokasi Tanam 7</td>
                                    <td>1.80</td>
                                    <td>11.00</td>
                                    <td><a href="/pks/edit" class="text-danger"><i class="fas fa-times mr-1"></i> Tidak ada lampiran Form-5</a></td>
                                    <td class="text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check7">
                                            <label class="custom-control-label" for="check7"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td hidden>Kelompoktani B (Grouping)</td>
                                    <td>(8) Lokasi Tanam 8</td>
                                    <td>1.80</td>
                                    <td>11.00</td>
                                    <td><a href="/farm/edit" class="text-danger"><i class="fas fa-times mr-1"></i> Tidak ada data lokasi</a></td>
                                    <td class="text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check8">
                                            <label class="custom-control-label" for="check8"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td hidden>Kelompoktani B (Grouping)</td>
                                    <td>(9) Lokasi Tanam 9</td>
                                    <td>1.80</td>
                                    <td>11.00</td>
                                    <td><a href="/farm/activity" class="text-danger"><i class="fas fa-times mr-1"></i> Tidak ada Dokumentasi kegiatan tanam</a></td>
                                    <td class="text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check9">
                                            <label class="custom-control-label" for="check9"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td hidden>Kelompoktani B (Grouping)</td>
                                    <td>(10) Lokasi Tanam 10</td>
                                    <td>1.80</td>
                                    <td>11.00</td>
                                    <td><a href="/farm/harvest" class="text-danger"><i class="fas fa-times mr-1"></i> Tidak ada Dokumentasi kegiatan produksi</a></td>
                                    <td class="text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check10">
                                            <label class="custom-control-label" for="check10"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td hidden>Kelompoktani C (Grouping)</td>
                                    <td>(11) Lokasi Tanam 11</td>
                                    <td>1.80</td>
                                    <td>11.00</td>
                                    <td><a href="/farm/harvest" class="text-danger"><i class="fas fa-times mr-1"></i> Tidak ada Dokumentasi kegiatan produksi</a></td>
                                    <td class="text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check11">
                                            <label class="custom-control-label" for="check11"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td hidden>Kelompoktani C (Grouping)</td>
                                    <td>(12) Lokasi Tanam 12</td>
                                    <td>1.80</td>
                                    <td>11.00</td>
                                    <td><a href="/farm/harvest" class="text-danger"><i class="fas fa-times mr-1"></i> Tidak ada Dokumentasi kegiatan produksi</a></td>
                                    <td class="text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check12">
                                            <label class="custom-control-label" for="check12"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td hidden>Kelompoktani C (Grouping)</td>
                                    <td>(13) Lokasi Tanam 13</td>
                                    <td>1.80</td>
                                    <td>11.00</td>
                                    <td><a href="/farm/harvest" class="text-danger"><i class="fas fa-times mr-1"></i> Tidak ada Dokumentasi kegiatan produksi</a></td>
                                    <td class="text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check13">
                                            <label class="custom-control-label" for="check13"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td hidden>Kelompoktani C (Grouping)</td>
                                    <td>(14) Lokasi Tanam 14</td>
                                    <td>1.80</td>
                                    <td>11.00</td>
                                    <td><a href="/farm/harvest" class="text-danger"><i class="fas fa-times mr-1"></i> Tidak ada Dokumentasi kegiatan produksi</a></td>
                                    <td class="text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check14">
                                            <label class="custom-control-label" for="check14"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td hidden>Kelompoktani C (Grouping)</td>
                                    <td>(15) Lokasi Tanam 15</td>
                                    <td>1.80</td>
                                    <td>11.00</td>
                                    <td><a href="/farm/harvest" class="text-danger"><i class="fas fa-times mr-1"></i> Tidak ada Dokumentasi kegiatan produksi</a></td>
                                    <td class="text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check15">
                                            <label class="custom-control-label" for="check15"></label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="panel-4" class="panel">
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="row">
                            <div class="form-group col-6">
                                <label class="form-label h6">Surat Pengajuan Verifikasi (jika dipersyaratkan)</label>
                                <div class="custom-file input-group">
                                    <input type="file" class="custom-file-input" id="formUpload" required>
                                    <label class="custom-file-label" for="formUpload">pilih berkas...</label>
                                </div>
                                <span class="help-block">Surat Pengajuan verifikasi Data dan Lapangan. Berkas dengan ekstensi jpg/jpeg/pdf dengan ukuran tidak lebih dari 2 megabyte.</span>
                            </div>
                            <div class="form-group col-6">
                                <label class="form-label h6">Konfirmasi</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="ketik username Anda di sini">
                                    <div class="input-group-append">
                                        <a class="btn btn-danger" href="/v2/pengajuan" role="button"><i class="fal fa-times text-align-center mr-1"></i> Batalkan</a>
                                    </div>
                                    <!--
									Yang ingin dicapi dari tombol Ajukan ini adalah:
									1. melakukan validasi pada panel 2 (kelengkapan berkas), jika ALL ADA selanjutnya;
									2. melakukan validasi pada panel 3 kolom status cek/periksa, jika ALL SELECTED ROWS bernilai OK, lalu;
									3. validasi field surat pengajuan verifikasi (jika dipersyaratkan)
									4. validasi field konfirmasi dengan username (menghindari ketidak-sengajaan)
									5. menampilkan modal dialog konfirmasi YES-CANCEL, jika YES selanjutnya
									6. merubah nilai pada field status verifikasi menjadi bernilai "SUBMITTED" baik lapangan, tanam, produksi maupun online.
									7. Saat sukses, halaman redirect ke halaman SUCCESS PAGE VERIFIKASI.
								    -->
                                    <div class="input-group-append">
                                        <a href="/v2/pengajuan/vsuccess" class="btn btn-primary" role="button" type="submit">
                                            <i class="fas fa-upload text-align-center mr-1"></i> Ajukan
                                        </a>
                                    </div>
                                </div>
                                <span class="help-block">Dengan ini kami mengajukakan verifikasi untuk lokasi-lokasi tersebut di atas.</span>
                            </div>
                        </div>
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