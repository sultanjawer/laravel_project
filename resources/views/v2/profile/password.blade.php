@extends ('layoutsv2.global')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partialsv2.sysalert')</div>

<form action="save">
    <div class="row">
        <div class="col-md-12">
            <div id="panel-1" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
                <div class="panel-hdr">
                    <h2>
                        Change Password <span class="fw-300"></span>
                    </h2>
                    <div class="panel-toolbar">
                        @include('partialsv2.globaltoolbar')
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="alert alert-warning">
                            Your new password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji
                        </div>
                        <div class="row d-flex">
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label" for="userpassword">Current Password<span class="text-danger"> *</span></label>
                                    <input type="password" id="userpassword" class="form-control" placeholder="password minimum 8 characters" required>
                                    <div class="invalid-feedback">No, you missed this one.</div>
                                    <div class="help-block">
                                        Type your current password.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label" for="userpassword">New Password<span class="text-danger"> *</span></label>
                                    <input type="password" id="userpassword" class="form-control" placeholder="password minimum 8 characters" required>
                                    <div class="invalid-feedback">No, you missed this one.</div>
                                    <div class="help-block">
                                        Type Your new password.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label" for="userpassword">Confirm Password<span class="text-danger"> *</span></label>
                                    <input type="password" id="passwordconfirm" class="form-control" placeholder="confirm your password" required>
                                    <div class="invalid-feedback">Sorry, you missed this one.</div>
                                    <div class="help-block">Confirm your new password.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row no-gutters">
                        <div class="col-md-3 ml-auto text-right">
                            <button id="js-login-btn" type="submit" class="btn btn-block btn-danger btn-sm mt-3">Submit</button>
                        </div>
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
@endsection