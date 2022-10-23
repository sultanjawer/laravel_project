@extends ('layoutsv2.global')
@section ('style')
<!-- select2 -->
<link rel="stylesheet" media="screen, print" href="{{ asset('css/formplugins/select2/select2.bundle.css') }}">
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
<form id="js-login" novalidate="" action="/v2/anggota_keltan">
    <div class="row">
        <div class="col">
            <div id="panel-1" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
                <div class="panel-hdr">
                    <h2>
                        Data Anggota <span class="fw-300"></span>
                    </h2>
                    <div class="panel-toolbar">
                        <a href="javascript:void(0)" onclick="history.back(0)" class="btn btn-sm btn-primary wave-theme">Back</a>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="form-group row">
                            <div class="col-7 pr-1">
                                <label class="form-label" for="name">Full Name <span class="text-danger">*</span></label>
                                <input type="text" id="name" class="form-control" placeholder="Full Name" required>
                                <div class="invalid-feedback">No, you missed this one.</div>
                            </div>
                            <div class="col-5 pl-1">
                                <label class="form-label" for="ktpnik">Nomor KTP/NIK <span class="text-danger">*</span></label>
                                <input type="text" id="ktpnik" class="form-control" placeholder="Nomor KTP atau NIK" required>
                                <div class="invalid-feedback">No, you missed this one.</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xl-12">
                                <label class="form-label" for="alamat">Alamat Lengkap <span class="text-danger">*</span></label>
                                <textarea type="text" id="alamat" class="form-control" placeholder="alamat lengkap" rows="2" required></textarea>
                                <div class="invalid-feedback">No, you missed this one.</div>
                            </div>
                        </div>
                        <!-- untuk select di bawah ini, saya tidak bisa mengatur agar default nilai seleksi adalah -please select -->
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="form-label" for="province">Province <span class="text-danger">*</span></label>
                                <select class="select2-prov form-control w-100" id="province" required>
                                    <optgroup label="Province">
                                        <option>Prov. Aceh</option>
                                        <option>Prov. DKI Jakarta</option>
                                        <option>Prov. Jawa Barat</option>
                                        <option>Prov. Jawa Tengah</option>
                                        <option>Prov. DI Yogyakarta</option>
                                        <option>Prov. Jawa Timur</option>
                                    </optgroup>
                                </select>
                                <div class="invalid-feedback">No, you missed this one.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="kabupaten">Kabupaten <span class="text-danger">*</span></label>
                                <select class="select2-kab form-control w-100" id="kabupaten" required>
                                    <option>Kab. Bandung</option>
                                    <option>Kab. Garut</option>
                                    <option>Kab. Wonosobo</option>
                                    <option>Kab. Temanggung</option>
                                </select>
                                <div class="invalid-feedback">No, you missed this one.</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="form-label" for="kecamatan">Kecamatan <span class="text-danger">*</span></label>
                                <select class="select2-kec form-control w-100" id="kecamatan" required>
                                    <option>kec. Bandung</option>
                                    <option>kec. Garut</option>
                                    <option>kec. Wonosobo</option>
                                    <option>kec. Temanggung</option>
                                </select>
                                <div class="invalid-feedback">No, you missed this one.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="desa">Desa <span class="text-danger">*</span></label>
                                <select class="select2-des form-control w-100" id="desa" required>
                                    <option>Desa Bandung</option>
                                    <option>Desa Garut</option>
                                    <option>Desa Wonosobo</option>
                                    <option>Desa Temanggung</option>
                                </select>
                                <div class="invalid-feedback">No, you missed this one.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-md-4 ml-auto text-right">
                        <button onclick="history.back()" class="btn btn-warning btn-sm wave-theme mt-3">Cancel</button>
                        <button id="js-login-btn" type="submit" class="btn btn-danger btn-sm mt-3">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')
<script src="{{ asset('js/datagrid/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('js/datagrid/datatables/datatables.export.js') }}"></script>
<script src="/js/formplugins/select2/select2.bundle.js"></script>

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
@endsection