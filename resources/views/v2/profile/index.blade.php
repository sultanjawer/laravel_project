@extends ('layoutsv2.global')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partialsv2.sysalert')</div>

<form action="save">
    <div class="row">
        <div class="col-md-4">
            <div id="panel-1" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex flex-column align-items-center justify-content-center">
                                <img src="/img/avatars/farmer.png" class="img-thumbnail rounded-circle shadow-2" alt="">
                                <h5 class="mb-0 fw-700 text-center mt-3 mb-3">
                                    Your Picture
                                </h5>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="firstname">Change Your Picture</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="assetImage" aria-describedby="assetImage" value="">
                                    <label class="custom-file-label" for="assetImage"></label>
                                </div>
                                <span class="help-block">Some help content goes here</span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="panel-content">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex flex-column align-items-center justify-content-center">
                                <img src="/img/logo-big.png" class="img-thumbnail rounded-circle shadow-2" alt="">
                                <h5 class="mb-0 fw-700 text-center mt-3 mb-3">
                                    Your Company Logo
                                </h5>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="firstname">Change Company Logo</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="assetImage" aria-describedby="assetImage" value="">
                                    <label class="custom-file-label" for="assetImage"></label>
                                </div>
                                <span class="help-block">Some help content goes here</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="panel-2" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
                <div class="panel-hdr">
                    <h2>
                        Files <span class="fw-300"></span>
                    </h2>
                    <div class="panel-toolbar">
                        @include('partialsv2.globaltoolbar')
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="form-group">
                            <label class="form-label" for="idcard_file">ID Card/KTP</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="idcard_file" aria-describedby="idcard_file" value="" required>
                                <label class="custom-file-label" for="idcard_file"></label>
                            </div>
                            <div class="invalid-feedback">No, you missed this one.</div>
                            <span class="help-block">Some help content goes here</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="assignment">Assignment/Surat Tugas</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="assignment" aria-describedby="assignment" value="" required>
                                <label class="custom-file-label" for="assignment"></label>
                            </div>
                            <div class="invalid-feedback">No, you missed this one.</div>
                            <span class="help-block">Some help content goes here</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div id="panel-3" class="panel" data-title="Panel Data" data-intro="Panel data perusahaan" data-step="2">
                <div class="panel-hdr">
                    <h2>
                        Your Company Information <span class="fw-300"></span>
                    </h2>
                    <div class="panel-toolbar">
                        @include('partialsv2.globaltoolbar')
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="form-group row">
                            <label class="col-xl-12 form-label" for="company_name">Company Name <span class="text-danger">*</span></label>
                            <div class="col-md-12 pr-1">
                                <input type="text" id="company_name" class="form-control" placeholder="Company Name" required>
                                <div class="invalid-feedback">No, you missed this one.</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-12 form-label" for="nama_direktur">Nama Direktur <span class="text-danger">*</span></label>
                            <div class="col-md-12 pr-1">
                                <input type="text" id="nama_direktur" class="form-control" placeholder="Nama Direktur/Penanggungjawab Perusahaan" required>
                                <div class="invalid-feedback">No, you missed this one.</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="form-label" for="npwp">Nomor Pokok Wajib Pajak (NPWP) <span class="text-danger">*</span></label>
                                <input type="text" id="fname" class="form-control" placeholder="Nomor Pokok Wajib Pajak (NPWP) Perusahaan" required>
                                <div class="invalid-feedback">No, you missed this one.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="nib">Nomor Induk Berusaha (NIB) <span class="text-danger">*</span></label>
                                <input type="text" id="nib" class="form-control" placeholder="Nomor Induk Berusaha" required>
                                <div class="invalid-feedback">No, you missed this one.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="panel-4" class="panel" data-title="Panel Data" data-intro="Panel Alamat perusahaan" data-step="2">
                <div class="panel-hdr">
                    <h2>
                        Company Address
                    </h2>
                    <div class="panel-toolbar">
                        @include('partialsv2.globaltoolbar')
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="form-group row">
                            <label class="col-xl-12 form-label" for="address">Address <span class="text-danger">*</span></label>
                            <div class="col-md-12 pr-1">
                                <textarea type="text" id="address" class="form-control" placeholder="Company Address" rows="3" required></textarea>
                                <div class="invalid-feedback">No, you missed this one.</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="form-label" for="province">Province <span class="text-danger">*</span></label>
                                <select class="select2-prov form-control w-100" multiple="multiple" id="province" required>
                                    <option>Prov. Aceh</option>
                                    <option>Prov. DKI Jakarta</option>
                                    <option>Prov. Jawa Barat</option>
                                    <option>Prov. Jawa Tengah</option>
                                    <option>Prov. DI Yogyakarta</option>
                                    <option>Prov. Jawa Timur</option>
                                </select>
                                <div class="invalid-feedback">No, you missed this one.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="kabupaten">Kabupaten <span class="text-danger">*</span></label>
                                <select class="select2-kab form-control w-100" id="kabupaten" multiple="multiple" required>
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
                                <select class="select2-kec form-control w-100" id="kecamatan" multiple="multiple" required>
                                    <option>kec. Bandung</option>
                                    <option>kec. Garut</option>
                                    <option>kec. Wonosobo</option>
                                    <option>kec. Temanggung</option>
                                </select>
                                <div class="invalid-feedback">No, you missed this one.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="desa">Desa <span class="text-danger">*</span></label>
                                <select class="select2-des form-control w-100" id="desa" multiple="multiple" required>
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
            </div>
            <div id="panel-5" class="panel" data-title="Panel Data" data-intro="Panel informasi kontak" data-step="2">
                <div class="panel-hdr">
                    <h2>
                        Contact Information
                    </h2>
                    <div class="panel-toolbar">
                        @include('partialsv2.globaltoolbar')
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="form-group row">
                            <label class="col-lg-12 form-label" for="fname">Email <span class="text-danger">*</span></label>
                            <div class="col-lg-12">
                                <input type="email" id="emailverify" class="form-control" placeholder="Email for verification" required>
                                <div class="invalid-feedback">Please type your correct email address.</div>
                                <div class="help-block">Use your COMPANY EMAIL ADDRESS</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-12 form-label" for="fname">Phone <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" id="mobile_phone" class="form-control" placeholder="Mobilie phone number" required>
                                <div class="invalid-feedback">No, you missed this one.</div>
                                <div class="help-block">Please do not use your own private number.</div>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" id="landline" class="form-control" placeholder="Land line number">
                                <div class="help-block">Company Phone Number</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div id="panel-6" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
                <div class="panel-hdr">
                    <h2>
                        User Information
                    </h2>
                    <div class="panel-toolbar">
                        @include('partialsv2.globaltoolbar')
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="form-group row">
                            <label class="col-xl-12 form-label" for="fname">Your first and last name <span class="text-danger">*</span></label>
                            <div class="col-6 pr-1">
                                <input type="text" id="fname" class="form-control" placeholder="First Name" required>
                                <div class="invalid-feedback">No, you missed this one.</div>
                            </div>
                            <div class="col-6 pl-1">
                                <input type="text" id="lname" class="form-control" placeholder="Last Name" required>
                                <div class="invalid-feedback">No, you missed this one.</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-12 form-label" for="username">Username<span class="text-danger">*</span></label>
                            <div class="col-md-12 pr-1">
                                <input type="text" id="username" class="form-control" placeholder="username" required>
                                <div class="invalid-feedback">No, you missed this one.</div>
                                <div class="help-block">Your username must not contain spaces, or emoji.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div id="panel-7">
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="terms" required>
                <label class="custom-control-label" for="terms"> Kami menyatakan bahwa data yang kami berikan adalah benar dan dapat dipertanggungjawabkan.</label>
                <div class="invalid-feedback">Anda belum memberikan pernyataan</div>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="newsletter" required>
                <label class="custom-control-label" for="newsletter">Kami setuju dengan syarat dan ketentuan yang diberlakukan</label>
                <div class="invalid-feedback">Anda belum memberikan persetujuan.</div>
            </div>
        </div>
    </div>
    <div class="row no-gutters">
        <div class="col-md-4 ml-auto text-right">
            <button id="js-login-btn" type="submit" class="btn btn-block btn-danger btn-sm mt-3">Submit</button>
        </div>
    </div>
</form>
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')
<script src="{{ asset('/js/formplugins/select2/select2.bundle.js') }}"></script>

<script>
    $(document).ready(function() {
        $(function() {
            $(".select2-prov").select2({
                maximumSelectionLength: 1,
                placeholder: "Select Province"
            });
            $(".select2-kab").select2({
                maximumSelectionLength: 1,
                placeholder: "Select Kabupaten"
            });
            $(".select2-kec").select2({
                maximumSelectionLength: 1,
                placeholder: "Select Kecamatan"
            });
            $(".select2-des").select2({
                maximumSelectionLength: 1,
                placeholder: "Select Desa"
            });
        });
    });
</script>
@endsection