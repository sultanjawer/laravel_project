@extends ('layouts.global')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
<!-- Page Content -->
<!--
	Yang ingin dicapai pada bagian ini adalah:
	Halaman ini berfungsi melakukan pemeriksaan awal sebelum admin, verifikator, direktur, atau pejabat lainnya menerbitkan status dan surat keterangan lunas.
-->
<div class="row">
    <div class="col-12">
        <div class="text-center">
            <i class="fal fa-badge-check fa-3x subheader-icon"></i>
            <h2>Pemeriksaan Data</h2>
            <div class="row justify-content-center">
                <p class="lead">Mohon menunggu hingga sistem selesai memeriksa kelengkapan data dan berkas untuk verifikasi. <i class="ml-1 fal fa-sync-alt text-success"></i></p>
                <div class="col-md-8 order-md-2">
                    <h3>HASIL PEMERIKSAAN AWAL</h3>
                </div>
                <!--
				=== SYARAT PENGAJUAN SURAT KETERANGAN LUNAS ==
				1.	Hasil Verifikasi Tanam: Luas Verifikasi: tidak dipersyaratkan .
				2.	Hasil Verrifikasi Seluruh Berkas Kelengkapan (pada panel 2-4) Wajib dilampirkan. Status harus OK semua
				3.	Seluruh format data (panel-4) wajib memenuhi syarat/sesuai format yang ditentukan
				-->
            </div>
        </div>

        <div id="panel-1" class="panel">
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="table">
                        <table id="dataTable-sklList" class="table table-sm table-bordered table-hover table-striped w-100">
                            <thead class="bg-warning-50">
                                <tr>
                                    <th id="">Nama Perusahaan</th>
                                    <th id="">No. Pengajuan</th>
                                    <th id="">No. RIPH</th>
                                    <th id="">Tanggal diajukan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>API Nama Perusahaan</td>
                                    <td>API No. Pengajuan</td>
                                    <td>API No. RIPH</td>
                                    <td>API Time stamp pengajuan</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="panel-2" class="panel">
            <!--
				Yang ingin dicapai pada panel ini adalah:
				Bagian ini memeriksa nilai dan status hasil verifikasi.
				Syarat-syarat terbit status lunas:
				Nilai Realisasi Diverifikasi (Tanam) = not null menghasilkan nilai OK
				Nilai Realisasi Diverifikasi (Produksi) = 95% dari Beban menghasilkan nilai
			-->
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
        <div id="panel-3" class="panel">
            <!--
				Yang ingin dicapai pada panel ini adalah:
				Bagian ini memeriksa status hasil verifikasi.
				Lapangan = Nilai OK jika tidak ditemukan data status Verified Perbaikan pda verifikasi sebelumnya (produksi)
				Online = Nilai OK jika tidak ditemukan data status Verified Perbaikan pda verifikasi sebelumnya (berkas).
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
        <div id="panel-4" class="panel">
            <!--
				Yang ingin dicapai pada panel ini adalah:
				Verifikator menetakan status LUNAS atau Perbaikan. Tombol submit adalah untuk men-submit/menyimpan data ke dalam database. TOmbol SKL digunakan untuk mengenerate surat keterangan lunas.
				ketentuan status LUNAS dan penerbitan SKL mengikuti syarat-syarat yang ditetapkan.
			-->
            <div class="panel-hdr">
                <h2>
                    <i class="subheader-icon fal fa-file-certificate mr-1"></i>HASIL PEMERIKSAAN
                </h2>
                <div class="panel-toolbar">
                    @include('partials.globaltoolbar')
                </div>
            </div>
            <div class="panel-container show">
                <!--
						Status: Lunas-ditolak
						Tanggal Status/Terbit: Date/Time stamp
						Nomor Penerbitan SKL: Nomor surat
						Nama Penandatangan Surat: Pejabat Penandatangan Surat
						Metode Tanda tangan : metode unggah tanda tangan
						QRCode Generator: Nomor SKL, Status SKL, Tgl SKL, Nama Perusahaan, Nomor Pengajuan, Nomor RIPH, Alamat link SKL.
						Status LUNAS ini akan dikirimkan kembali ke Aplikasi RIPH sebagai data respon.
                        data-toggle="collapse" href="#collapseExample"
					-->
                <div class="panel-content">
                    <p>Berdasarkan hasil pemeriksaan yang dilakukan oleh Tim Pemeriksa terhadap pengajuan keterangan lunas nomor <span class="fw-500 text-primary"> id_Pengajuan </span> beserta data laporan dan kelengkapan syarat-syarat wajib lainnya yang disampaikan oleh Pelaku Usaha, maka Nomor RIPH: <span class="fw-500">0000/PP.240/D/2015</span>;</p>
                    <div class="form-group">
                        <label class="form-label form-label-sm" for="verifStatus">DINYATAKAN:</label>
                        <div class="input-group input-group-sm">
                            <select type="text" name="verifStatus" id="verifStatus" class="form-control form-control-sm fw-500" placeholder="status..." aria-label="verifStatus" aria-describedby="verifStatus" onchange="showDiv(this)">
                                <option value="0" hidden>- pilih status</option>
                                <option value="1">LUNAS</option>
                                <option value="2">PERBAIKAN</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="panel-content" id="sklGenerate" style="display:none; background-color:#fbffff">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="form-label" for="tgl_terbit">Tanggal Status/Terbit</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-calendar-alt"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" aria-label="Tanggal akhir pelaksanaan pemeriksaan" id="tgl_terbit" placeholder="tanggal status/terbit">
                            </div>
                            <span class="help-block">Tanggal ditetapkan atau tanggal terbit Surat Keterangan Lunas (SKL).</span>
                        </div>
                        <div class="form-group col-md-8">
                            <label class="form-label" for="no_skl">Nomor Penerbitan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-map-marked"></i></span>
                                </div>
                                <input id="no_skl" type="text" class="font-weight-bold form-control form-control-sm" placeholder="Nomor Surat" />
                            </div>
                            <span class="help-block">Nomor Surat Keterangan Lunas.</span>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label" for="signed_by">Pejabat Penandatangan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                </div>
                                <select type="text" id="signed_by" class="form-control form-control-sm" placeholder="status..." aria-label="signed_by" aria-describedby="signed_by">
                                    <option hidden>- pilih</option>
                                    <option disabled></option>
                                    <option>Nama - NIP</option> <!-- default adalah direktur yang sedang menjabat -->
                                    <option>Nama - NIP</option>
                                    <option disabled></option>
                                </select>
                            </div>
                            <span class="help-block">Pejabat yang berwenang menandatangani.</span>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label" for="sign_method">Metode Tandatangan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-signature"></i></span>
                                </div>
                                <select type="text" id="sign_method" class="form-control form-control-sm" placeholder="status..." aria-label="sign_method" aria-describedby="sign_method">
                                    <option hidden>- pilih</option>
                                    <option disabled></option>
                                    <option>Digital Sign</option> <!-- default adalah direktur yang sedang menjabat -->
                                    <option>Manual</option>
                                    <option disabled></option>
                                </select>
                            </div>
                            <span class="help-block">Pejabat yang berwenang menandatangani.</span>
                        </div>
                        <div class="col-md-4 d-flex p-1 mt-1">
                            <div class="form-group mr-1">
                                <label class="form-label" for="qrcode"> </label>
                                <div id="qrcode" class="input-group" data-toggle="tooltip" data-offset="0" data-original-title="Generate QR Code">
                                    <button class="btn btn-sm btn-info btn waves-effect waves-themed" role="button"><i class="fal fa-file-certificate mr-1"></i>Generate QR Code</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <!--
									Yang ingin dicapai pada tombol Cetak Draft ini adalah:
									men-generate Draft SKL untuk Diperiksa dan ditandangani secara Manual/Offline jika tandatangan dilakukan secara manual. Tombol ini tidak merubah status menjadi TERBIT
								-->
                                <label class="form-label" for="print_draft"> </label>
                                <div id="print_draft" class="input-group" data-toggle="tooltip" data-offset="0" data-original-title="Cetak Draft untuk ditandatangani">
                                    <a href="/skl/lunas" class="btn btn-sm btn-warning btn waves-effect waves-themed" role="button"><i class="fal fa-print mr-1"></i>Cetak Draft</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="file_verif">Unggah SKL</label>
                            <div class="custom-file input-group input-group-sm">
                                <input type="file" class="custom-file-input form-control" id="file_verif">
                                <label class="custom-file-label" for="file_verif">Pilih berkas...</label>
                            </div>
                            <span class="help-block">Unggah berkas SKL yang telah dicetak dan ditandatangani oleh Pejabat terkait.</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="confirm">Konfirmasi</label>
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control " placeholder="type your username here">
                                <div class="input-group-append">
                                    <a class="btn btn-sm btn-danger" href="/verifikasi" role="button"><i class="fal fa-times text-align-center mr-1"></i> Batalkan</a>
                                </div>
                                <!--
									Yang ingin dicapai pada tombol TERBITKAN ini adalah:
									status RIPH menjadi TERBIT, men-generate SKL untuk dicetak sebagai Cetakan Asli
								-->
                                <div class="input-group-append">
                                    <a href="/verification/skl/success" class="btn btn-sm btn-primary" role="button" type="submit">
                                        <i class="fas fa-file-certificate text-align-center mr-1"></i> Terbitkan
                                    </a>
                                </div>
                            </div>
                            <span class="help-block">Pastikan Anda menekan tombol bukan karena ketidak-sengajaan.</span>
                        </div>
                    </div>
                </div>
                <div class="panel-content" id="sklPostponed" style="display:none; background-color:#fff7f7">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="form-label" for="confirm">Konfirmasi</label>
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control " placeholder="type your username here">
                                <div class="input-group-append">
                                    <a class="btn btn-sm btn-danger" href="/verifikasi" role="button"><i class="fal fa-times text-align-center mr-1"></i> Batalkan</a>
                                </div>
                                <!--
									Yang ingin dicapai pada tombol TERBITKAN ini adalah:
									status RIPH menjadi TERBIT, men-generate SKL untuk dicetak sebagai Cetakan Asli
								-->
                                <div class="input-group-append">
                                    <a href="/verification/skl/postponed" class="btn btn-sm btn-primary" role="button" type="submit">
                                        <i class="fas fa-file-certificate text-align-center mr-1"></i> Terbitkan
                                    </a>
                                </div>
                            </div>
                            <span class="help-block">Pastikan Anda menekan tombol bukan karena ketidak-sengajaan.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div id="panel-4" class="panel">
            <!--
				ini hanya model metode yang mungkin terjadi dalam prosedur penerbitan SKL (birokratif)
			-->
            <div class="panel-container show">
                <div class="panel-content">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#model_a" role="tab">
                                MODEL<span href="javascript:void(0);" class="ml-1 btn btn-primary btn-xs btn-icon rounded-circle waves-effect waves-themed fw-700">
                                    A
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#model_b" role="tab">
                                MODEL<span href="javascript:void(0);" class="ml-1 btn btn-info btn-xs btn-icon rounded-circle waves-effect waves-themed fw-700">
                                    B
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#model_c" role="tab">
                                MODEL<span href="javascript:void(0);" class="ml-1 btn btn-danger btn-xs btn-icon rounded-circle waves-effect waves-themed fw-700">
                                    C
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content border border-top-0 p-3">
                        <div class="tab-pane fade show active" id="model_a" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-primary border-0 mb-0">
                                        <div class="d-flex align-item-center">
                                            <div class="alert-icon">
                                                <div class="icon-stack icon-stack-sm mr-3 flex-shrink-0" style="font-size: 22px;">
                                                    <i class="base base-7 icon-stack-3x opacity-100 color-primary-400"></i>
                                                    <i class="base base-7 icon-stack-2x opacity-100 color-primary-800"></i>
                                                    <i class="fa fa-question icon-stack-1x opacity-100 color-white"></i>
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <ol>Pada model ini:
                                                    <li><a class="text-info fw-500">(ONLINE)</a> System melakukan pemeriksaan data pokok;</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Hasil pemeriksaan ditampilkan dalam bentuk ringkasan</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Administrator mengisi data-data yang diperlukan dalam penerbitan SKL</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Administrator dapat mencetak draft SKL atau Cetak Asli SKL untuk ditandatangani oleh pejabat terkait.</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Administrator men-generate QR-Code, menetapkan tanggal terbit dan status lunas.</li>
                                                    <li><a class="text-danger fw-500">(OFFLINE)</a> Pejabat terkait menandatangani SKL.</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Administrator mengunggah salinan hasil pemindaian SKL Cetak.</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Status lunas dan tautan cetakan dikirmkan kepada pengguna.</li>
                                                </ol>
                                                <ol>Good and Bad
                                                    <li><a class="text-success fw-500">(Good)</a> Proses lebih ringkas.</li>
                                                    <li><a class="text-danger fw-500">(Bad)</a> Semi manual.</li>
                                                    <li><a class="text-danger fw-500">(Bad)</a> Adanya celah kewenangan penerbitan.</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="file_verif">Unggah SKL</label>
                                            <div class="custom-file input-group input-group-sm">
                                                <input type="file" class="custom-file-input form-control" id="file_verif">
                                                <label class="custom-file-label" for="file_verif">Pilih berkas...</label>
                                            </div>
                                            <span class="help-block">Unggah berkas SKL yang telah dicetak dan ditandatangani oleh Pejabat terkait.</span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="confirm">Konfirmasi</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control " placeholder="type your username here">
                                                <div class="input-group-append">
                                                    <a class="btn btn-sm btn-danger" href="/verifikasi" role="button"><i class="fal fa-times text-align-center mr-1"></i> Batalkan</a>
                                                </div>
                                                <div class="input-group-append">
                                                    <a href="/skl/skl_redirect" class="btn btn-sm btn-primary" role="button" type="submit">
                                                        <i class="fas fa-file-certificate text-align-center mr-1"></i> Terbitkan
                                                    </a>
                                                </div>
                                            </div>
                                            <span class="help-block">Pastikan Anda menekan tombol bukan karena ketidak-sengajaan.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="model_b" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-info border-0 mb-0">
                                        <div class="d-flex align-item-center">
                                            <div class="alert-icon">
                                                <div class="icon-stack icon-stack-sm mr-3 flex-shrink-0" style="font-size: 22px;">
                                                    <i class="base base-7 icon-stack-3x opacity-100 color-info-400"></i>
                                                    <i class="base base-7 icon-stack-2x opacity-100 color-info-800"></i>
                                                    <i class="fa fa-question icon-stack-1x opacity-100 color-white"></i>
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <span>Pada model ini, setelah dilakukan pemeriksaan data secara online (system), Administrator meneruskan data permohonan SKL pelaku usaha kepada pejabat terkait (akun direktur). </span>
                                                <ol>Alur model ini:
                                                    <li><a class="text-info fw-500">(ONLINE)</a> System melakukan pemeriksaan data pokok;</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Hasil pemeriksaan ditampilkan dalam bentuk ringkasan</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Jika hasil pemeriksaan dirasa layak untuk mendapat SKL, Administrator mengirimkan rekomendasi (tombol submit) kepada pejabat terkait.</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Pejabat terkait dapat melakukan pemeriksaan, memberikan catatan, dan menyetujui penerbitan SKL</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Data dikembalikan (tombol submit) kepada Administrator untuk diterbitkan/ditolak</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Administrator mengisi data-data yang diperlukan dalam penerbitan SKL (jika ada)</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Administrator men-generate QR-Code, menetapkan tanggal terbit dan status lunas.</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Administrator dapat mencetak draft atau Cetak Asli SKL untuk ditandatangani oleh pejabat terkait.</li>
                                                    <li><a class="text-danger fw-500">(OFFLINE)</a> Pejabat terkait menandatangani SKL.</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Administrator mengunggah salinan hasil pemindaian SKL Cetak yang telah ditandatangani oleh pejabat terkait.</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Status lunas dan tautan cetakan dikirmkan kepada pengguna.</li>
                                                </ol>
                                                <ol>Good and Bad
                                                    <li><a class="text-success fw-500">(Good)</a> Celah kewenangan penerbitan dipersempit/kecil.</li>
                                                    <li><a class="text-danger fw-500">(Bad)</a> Proses lebih panjang.</li>
                                                    <li><a class="text-danger fw-500">(Bad)</a> Semi manual.</li>
                                                    <li><a class="text-danger fw-500">(Bad)</a> Adanya celah kewenangan penerbitan.</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/skl/skl_redirect" class="btn btn-sm btn-info" role="button" type="submit">
                                        <i class="fas fa-cloud-upload text-align-center mr-1"></i> Submit Rekomendasi
                                    </a>
                                    <a class="btn btn-sm btn-warning" href="/verifikasi" role="button"><i class="fal fa-times text-align-center mr-1"></i> Batalkan</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="model_c" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-danger border-0 mb-0">
                                        <div class="d-flex align-item-center">
                                            <div class="alert-icon">
                                                <div class="icon-stack icon-stack-sm mr-3 flex-shrink-0" style="font-size: 22px;">
                                                    <i class="base base-7 icon-stack-3x opacity-100 color-danger-400"></i>
                                                    <i class="base base-7 icon-stack-2x opacity-100 color-danger-800"></i>
                                                    <i class="fa fa-question icon-stack-1x opacity-100 color-white"></i>
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <span>Model ini, setelah dilakukan pemeriksaan data secara online (system), Administrator meneruskan data permohonan SKL pelaku usaha kepada pejabat terkait (akun direktur). lalu pejabat penandatangan merekomendasikan kepada sekretatiat untuk diperiksa ulang dan data dinyatakan clean 'n clear. setelah status clean 'n clear diperoleh, selanjutnya pejabat penandatangan memberikan persetujuan kepada administrator untuk menetapkan status lunas dan menerbitkan SKL. seluruh rangkaian dilakukan secara online, kecuali tandatangan</span>
                                                <ol>Alur model ini:
                                                    <li><a class="text-info fw-500">(ONLINE)</a> System melakukan pemeriksaan data pokok;</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Hasil pemeriksaan ditampilkan dalam bentuk ringkasan</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Jika hasil pemeriksaan dirasa layak untuk mendapat SKL, Administrator mengirimkan rekomendasi (tombol rekomendasi) kepada pejabat terkait.</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Pejabat terkait dapat melakukan pemeriksaan, memberikan catatan, dan menyetujui penerbitan SKL</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Setelah memeriksa kelayakan, pejabat selanjutnya merekomendasikan kepada sekretariat (tombol submit)</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Sekretariat memeriksa dan menetapkan status Clean 'n Clear</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Sekretariat mengembalikan hasil rekomendasi kepada pejabat penandatangan</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Pejabat penandatangan menekan tombol persetujuan/tolak status lunas dan penerbitan SKL</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Administrator menerima status persetujuan</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Administrator mengisi data-data yang diperlukan dalam penerbitan SKL (jika ada)</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Administrator men-generate QR-Code, menetapkan tanggal terbit dan status lunas.</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Administrator dapat mencetak draft atau Cetak Asli SKL untuk ditandatangani oleh pejabat terkait.</li>
                                                    <li><a class="text-danger fw-500">(OFFLINE)</a> Pejabat terkait menandatangani SKL.</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Administrator mengunggah salinan hasil pemindaian SKL Cetak yang telah ditandatangani oleh pejabat terkait.</li>
                                                    <li><a class="text-info fw-500">(ONLINE)</a> Status lunas dan tautan cetakan dikirmkan kepada pengguna.</li>
                                                </ol>
                                                <ol>Good and Bad
                                                    <li><a class="text-success fw-500">(Good)</a> Celah kebocoran kewenangan penerbitan sangat kecil.</li>
                                                    <li><a class="text-success fw-500">(Good)</a> Proses mengikuti alur sesungguhnya.</li>
                                                    <li><a class="text-danger fw-500">(Bad)</a> Proses sangat panjang.</li>
                                                    <li><a class="text-danger fw-500">(Bad)</a> (harus) Menyediakan akun diluar lingkup subdit.</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/skl/skl_redirect" class="btn btn-sm btn-info" role="button" type="submit">
                                        <i class="fas fa-cloud-upload text-align-center mr-1"></i> Submit Rekomendasi
                                    </a>
                                    <a class="btn btn-sm btn-warning" href="/verifikasi" role="button"><i class="fal fa-times text-align-center mr-1"></i> Batalkan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')
<script type="text/javascript">
    function showDiv(select) {
        if (select.value == 1) {
            document.getElementById('sklGenerate').style.display = "block";
            document.getElementById('sklPostponed').style.display = "none";
        } else if (select.value == 2) {
            document.getElementById('sklGenerate').style.display = "none";
            document.getElementById('sklPostponed').style.display = "block";
        } else {
            document.getElementById('sklGenerate').style.display = "none";
            document.getElementById('sklPostponed').style.display = "none";
        }
    }
</script>
@endsection