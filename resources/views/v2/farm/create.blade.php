@extends ('layoutsv2.global')
@section ('style')
<!-- select2 -->
<link rel="stylesheet" media="screen, print" href="{{ asset('css/formplugins/select2/select2.bundle.css') }}">
<link rel="stylesheet" media="screen, print" href="{{ asset('css/miscellaneous/lightgallery/lightgallery.bundle.css') }}">
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
<div class="row">
    <div class="col-12">
        <form id="js-login" novalidate="" action="">
            <div class="panel" id="panel-1">
                <div class="panel-hdr">
                    <h2>
                        Data Geolokasi
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-xs btn-info mr-1" type="button" data-toggle="modal" data-target=".upload-modal-right">
                            <a data-toggle="tooltip" data-offset="0,1" title data-original-title="Unggah data tunggal untuk lokasi tanam ini."><i class="fas fa-upload"></i> Unggah Berkas</a>
                        </button>

                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="row">
                            <!--
							Yang ingin dicapi pada bagian ini adalah:
							Pengguna dapat menentukan titik lokasi (center of curve) dan membuat/menggambar kurva bentuk lahan yang ditanami dengan 2 cara, yakni dengan cara menentukan titik dan menggambar langsung serta melalui cara unggah data.
							
							Data titik dan curva yang diberikan akan langsung mengisi field-field input yang sesuai.
							Untuk menghindari kesalahan input, field-field berikut diberlakukan READONLY: LATITUDE, LONGITUDE, LUAS, POLYGON.
							FIELD LUAS diperoleh melalui perhitungan sistem (system autocalculate) pada curva yang dibuat.
							FIELD ALTITUDE, diisi secara manual
							FIELD NAMA LOKASI, diisi manual, atau system autogenerate sebagai nomor register lahan/petak dengan memberikan penomoran otomatis, menggunakan data polygon (google generated), atau metode penomoran lain yang akan bermanfaat kemudian.
							
							Peta ini hanyalah sebagai contoh untuk menggambarkan apa yang ingin dicapai, metode dapat menggunakan metode lain yang lebih tepat.
						-->
                            <div class="form-group col-md-12">
                                <label class="form-label" for="gmap">Buat Peta Polygon bidang lahan dari lokasi yang dipilih<sup class="text-danger"> *</sup></label>
                                <iframe id="gmap" src="https://www.google.com/maps/d/embed?mid=1sTXQ7FGmyNhF9ROGa2ZRtQxwu0Jp48o&ehbc=2E312F" width="100%" height="300px"></iframe>
                                <span class="help-block">Keterangan cara menentukan titik lokasi dan membuat polygon</span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="panel-content">
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label>Latitude <sup class="text-info"> *</sup></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fal fa-map-marker"></i></span>
                                    </div>
                                    <input type="text" class="disabled font-weight-bold form-control form-control-sm bg-white" value="-6.7687586" />
                                </div>
                                <span class="help-block">Koordinat Lintang lokasi</span>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Longitude <sup class="text-info"> *</sup></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fal fa-map-marker-alt"></i></span>
                                    </div>
                                    <input type="text" class="disabled font-weight-bold form-control form-control-sm bg-white" value="107.8918275" readonly />
                                </div>
                                <span class="help-block">Koordinat Bujur lokasi</span>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Luas Perkiraan (ha)<sup class="text-info"> *</sup></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fal fa-ruler"></i></span>
                                    </div>
                                    <input type="text" class="disabled font-weight-bold form-control form-control-sm bg-white" value="0.80" readonly />
                                </div>
                                <span class="help-block">Luas bidang diukur oleh sistem.</span>
                            </div>
                            <div class="form-group col-3">
                                <label>Altitude (mdpl) <sup class="text-danger"> **</sup></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fal fa-ruler-vertical"></i></span>
                                    </div>
                                    <input type="text" class="font-weight-bold form-control form-control-sm bg-white" value="900" />
                                </div>
                                <span class="help-block">Ketinggian lokasi lahan (rerata meter)</span>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label>Polygon<sup class="text-info"> *</sup></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fal fa-draw-polygon"></i></span>
                                        </div>
                                        <input type="text" class="disabled font-weight-bold form-control form-control-sm bg-white" value="1sTXQ7FGmyNhF9ROGa2ZRtQxwu0Jp48o&ehbc=2E312F" readonly />
                                    </div>
                                    <span class="help-block">Kurva bidang lahan yang ditanami.</span>
                                </div>
                            </div>
                            <div class="form-group col-md-5">
                                <label>Nama Lokasi <sup class="text-danger"> **</sup></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fal fa-map-signs"></i></span>
                                    </div>
                                    <input type="text" class="font-weight-bold form-control form-control-sm bg-white" value="Lokasi Pak Hadi, Petak 1" />
                                </div>
                                <span class="help-block">berikan Nama/ID untuk lokasi ini.</span>
                            </div>
                        </div>
                        <div class="mt-5">
                            <span class="small mr-3"><span class="text-info mr-1"> *</span>: Autogenerate by System</span>
                            <span class="small"><span class="text-danger mr-1"> **</span>: Wajib diisi</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="justify-content-end">
                            <a href="" class="btn btn-sm btn-info" role="button" type="submit"><i class="fa fa-save"></i> Simpan</a>
                            <a href="index" class="btn btn-sm btn-warning" role="button" type="submit"><i class="fa fa-undo"></i> Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        <form id="js-login" novalidate="" action="">
            <div class="panel" id="panel-2">
                <div class="panel-hdr">
                    <h2>Realisasi Wajib Tanam</h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-xs btn-info mr-1" type="button" data-toggle="modal" data-target=".modal-foto-tanam">
                            <a data-toggle="tooltip" data-offset="0,1" title data-original-title="Unggah data tunggal untuk lokasi tanam ini."><i class="fas fa-upload"></i> Dokumentasi</a>
                        </button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="row mb-3">
                            <!-- user action will draw and create geolocation data into the database -->
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="tgl_tanam">Tanggal Tanam</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fal fa-calendar-day"></i></span>
                                            </div>
                                            <input type="text" class="form-control form-control-sm" aria-label="Tanggal mulai pelaksanaan pemeriksaan" id="tgl_tanam" placeholder="dd/mm/yyyy">
                                        </div>
                                        <span class="help-block">Tanggal awal penanaman.</span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Luas Bidang (ha)<sup class="text-danger"> *</sup></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fal fa-ruler"></i></span>
                                            </div>
                                            <input type="number" class="font-weight-bold form-control form-control-sm bg-white" value="0.80" />
                                        </div>
                                        <span class="help-block">Luas area lahan diukur mandiri.</span>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Varietas yang ditanam <sup class="text-danger"> *</sup></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fal fa-seedling"></i></span>
                                            </div>
                                            <input type="text" class="font-weight-bold form-control form-control-sm bg-white" value="Lumbu Hijau" readonly />
                                        </div>
                                        <span class="help-block">Varietas yang ditanam.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="form-label" for="tgl_prod">Dokumentasi Tanam</label>
                            <div id="js-galleryTanam">
                                <a class="" href="/img/demo/gallery/16.jpg" data-sub-html="Keterangan foto">
                                    <img class="img-responsive" src="/img/demo/gallery/thumb/16.jpg" alt="Judul foto">
                                </a>
                                <a class="" href="/img/demo/gallery/28.jpg" data-sub-html="Keterangan foto">
                                    <img class="img-responsive" src="/img/demo/gallery/thumb/28.jpg" alt="Judul foto">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="justify-content-end">
                            <a href="" class="btn btn-sm btn-info" role="button" type="submit"><i class="fa fa-save"></i> Simpan</a>
                            <a href="index" class="btn btn-sm btn-warning" role="button" type="submit"><i class="fa fa-undo"></i> Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        <form id="js-login" novalidate="" action="">
            <div class="panel" id="panel-3">
                <div class="panel-hdr">
                    <h2>Realisasi Wajib Produksi</h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-xs btn-info mr-1" type="button" data-toggle="modal" data-target=".modal-foto-tanam">
                            <a data-toggle="tooltip" data-offset="0,1" title data-original-title="Unggah data tunggal untuk lokasi tanam ini."><i class="fas fa-upload"></i> Dokumentasi</a>
                        </button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="row mb-3">
                            <!-- user action will draw and create geolocation data into the database -->
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="form-label" for="tgl_prod">Tanggal Panen/Produksi</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fal fa-calendar-day"></i></span>
                                            </div>
                                            <input type="text" class="form-control form-control-sm" aria-label="Tanggal mulai pelaksanaan pemeriksaan" id="tgl_prod" placeholder="dd/mm/yyyy">
                                        </div>
                                        <span class="help-block">Tanggal awal produksi.</span>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Volume produksi (ton)<sup class="text-danger"> *</sup></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fal fa-balance-scale-left"></i></span>
                                            </div>
                                            <input type="number" class="font-weight-bold form-control form-control-sm bg-white" value="0.80" />
                                        </div>
                                        <span class="help-block">Jumlah produksi di lokasi ini dalam satuan ton.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="form-label" for="tgl_prod">Dokumentasi Panen/Produksi</label>
                            <div id="js-galleryProduksi">
                                <a class="" href="/img/demo/gallery/34.jpg" data-sub-html="Keterangan foto">
                                    <img class="img-responsive" src="/img/demo/gallery/thumb/34.jpg" alt="Judul foto">
                                </a>
                                <a class="" href="/img/demo/gallery/52.jpg" data-sub-html="Keterangan foto">
                                    <img class="img-responsive" src="/img/demo/gallery/thumb/52.jpg" alt="Judul foto">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="justify-content-end">
                            <a href="" class="btn btn-sm btn-info" role="button" type="submit"><i class="fa fa-save"></i> Simpan</a>
                            <a href="index" class="btn btn-sm btn-warning" role="button" type="submit"><i class="fa fa-undo"></i> Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Modal upload Right -->
    <div class="modal fade upload-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4"><i class="subheader-icon fas fa-upload text-info"></i> Import Single Location Data</h5>
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
                            <span>Pada bagian ini Anda mengunggah data lokasi wajib tanam dan produksi yang telah Anda buat pada aplikasi lain. Berkas yang dapat diterima adalah berkas berekstensi *.xlsx; *.csv yang berisi data lokasi tunggal (1 baris)</span>
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
                            <li>JANGAN MERUBAH FORMAT DATA YANG DIBERIKAN</li>
                            <li>PASTIKAN FORMAT DATA ANDA ADALAH <span class="fw-bold fw-900">TEXT</span></li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-upload"></i> Send</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal upload -->
    <!-- Modal foto tanam -->
    <div class="modal fade modal-foto-tanam" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4"><i class="subheader-icon fas fa-upload text-info"></i> Unggah Foto Dokumentasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="alert alert-info border-0 mb-0">
                    <div class="d-flex align-item-center">
                        <div class="alert-icon">
                            <div class="icon-stack icon-stack-sm mr-3 flex-shrink-0" style="font-size: 20px;">
                                <i class="base base-7 icon-stack-3x opacity-100 color-primary-400"></i>
                                <i class="base base-7 icon-stack-2x opacity-100 color-primary-800"></i>
                                <i class="fa fa-info icon-stack-1x opacity-100 color-white"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <span>Informasi ringkas data pengajuan verifikasi lapangan</span>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Dokumentasi</label>
                        <div class="custom-file input-group">
                            <input type="file" class="custom-file-input" id="customControlValidation7">
                            <label class="custom-file-label" for="customControlValidation7">Choose file...</label>
                        </div>
                        <span class="help-block">Foto Dokumentasi. ekstensi jpg ukuran maks 2mb.</span>
                    </div>
                    <div class="form-group">
                        <label>Judul Foto </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-image-polaroid"></i></span>
                            </div>
                            <input type="text" class="form-control form-control-sm" placeholder="Judul foto" />
                        </div>
                        <span class="help-block">Beri judul foto yang diunggah.</span>
                    </div>
                    <div class="form-group">
                        <label>Keterangan Foto </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-align-left"></i></span>
                            </div>
                            <input type="text" class="form-control form-control-sm" placeholder="Judul foto" />
                        </div>
                        <span class="help-block">Beri keterangan foto yang diunggah.</span>
                    </div>

                    <hr>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-info waves-effect waves-themed" type="submit"><i class="fal fa-save mr-1"></i>Unggah</button>
                    <button class="btn btn-sm btn-warning waves-effect waves-themed"><i class="fal fa-undo mr-1"></i>Batal</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal foto tanam -->
</div>
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')
<script src="{{ asset('js/datagrid/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('js/datagrid/datatables/datatables.export.js') }}"></script>
<script src="{{ asset('js/formplugins/select2/select2.bundle.js') }}"></script>
<script src="{{ asset('js/formplugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/miscellaneous/lightgallery/lightgallery.bundle.js') }}"></script>

<script>
    $(document).ready(function() {
        $(function() {
            $(".select2-prov").select2({
                placeholder: "Select Province"
            });
            $(".select2-kab").select2({
                placeholder: "Select Kabupaten"
            });
            $(".select2-kec").select2({
                placeholder: "Select Kecamatan"
            });
            $(".select2-des").select2({
                placeholder: "Select Desa"
            });
        });
    });
</script>
<script>
    $("#js-login-btn").click(function(event) {

        // Fetch form to apply custom Bootstrap validation
        var form = $("#js-login")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }

        form.addClass('was-validated');
        // Perform ajax submit here...
    });
</script>
<!-- datepicker -->
<script>
    // Class definition

    var controls = {
        leftArrow: '<i class="fal fa-angle-left" style="font-size: 1.25rem"></i>',
        rightArrow: '<i class="fal fa-angle-right" style="font-size: 1.25rem"></i>'
    }

    var runDatePicker = function() {
        // range picker
        $('#datepickerstart').datepicker({
            todayHighlight: true,
            templates: controls
        });
        // range picker
        $('#datepickerend').datepicker({
            todayHighlight: true,
            templates: controls
        });
    }

    $(document).ready(function() {
        runDatePicker();
    });
</script>

<!-- gallery Tanam -->
<script>
    $(document).ready(function() {
        var $initScope = $('#js-galleryTanam');
        if ($initScope.length) {
            $initScope.justifiedGallery({
                border: -1,
                rowHeight: 75,
                margins: 8,
                waitThumbnailsLoad: true,
                randomize: false,
            }).on('jg.complete', function() {
                $initScope.lightGallery({
                    thumbnail: true,
                    animateThumb: true,
                    showThumbByDefault: true,
                });
            });
        };
        $initScope.on('onAfterOpen.lg', function(event) {
            $('body').addClass("overflow-hidden");
        });
        $initScope.on('onCloseAfter.lg', function(event) {
            $('body').removeClass("overflow-hidden");
        });
    });
</script>
<!-- gallery Tanam -->
<!-- gallery Produksi -->
<script>
    $(document).ready(function() {
        var $initScope = $('#js-galleryProduksi');
        if ($initScope.length) {
            $initScope.justifiedGallery({
                border: -1,
                rowHeight: 75,
                margins: 8,
                waitThumbnailsLoad: true,
                randomize: false,
            }).on('jg.complete', function() {
                $initScope.lightGallery({
                    thumbnail: true,
                    animateThumb: true,
                    showThumbByDefault: true,
                });
            });
        };
        $initScope.on('onAfterOpen.lg', function(event) {
            $('body').addClass("overflow-hidden");
        });
        $initScope.on('onCloseAfter.lg', function(event) {
            $('body').removeClass("overflow-hidden");
        });
    });
</script>
<!-- gallery Produksi -->
@endsection