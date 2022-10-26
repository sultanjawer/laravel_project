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
                            <img src="{{$profile->user_img}}" class="img-thumbnail rounded-circle shadow-2" alt="">
                            <h5 class="mb-0 fw-700 text-center mt-3">
                                {{$profile->first_name}} {{$profile->last_name}}
                                <small class="text-muted mb-0">Toronto, Canada</small>
                            </h5>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="assetImage" aria-describedby="assetImage" value="">
                                        <label class="custom-file-label" for="assetImage">{{$profile->user_img}}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 text-center demo">
                                <a href="javascript:void(0);" class="fs-xl" style="color:#3b5998">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="javascript:void(0);" class="fs-xl" style="color:#38A1F3">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="javascript:void(0);" class="fs-xl" style="color:#db3236">
                                    <i class="fab fa-google-plus"></i>
                                </a>
                                <a href="javascript:void(0);" class="fs-xl" style="color:#0077B5">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="javascript:void(0);" class="fs-xl" style="color:#000000">
                                    <i class="fab fa-reddit-alien"></i>
                                </a>
                                <a href="javascript:void(0);" class="fs-xl" style="color:#00AFF0">
                                    <i class="fab fa-skype"></i>
                                </a>
                                <a href="javascript:void(0);" class="fs-xl" style="color:#0063DC">
                                    <i class="fab fa-flickr"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-content">
                        <div class="form-group">
                            <label class="form-label" for="userrole">Role</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-user-lock"></i></span>
                                </div>
                                <input type="text" id="userrole" class="form-control form-control-sm" placeholder="user role" aria-label="userrole" aria-describedby="userrole">
                            </div>
                            <span class="help-block">Some help content goes here</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="facebook">Facebook</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background-color:#3b5998"><i class="text-white fab fa-facebook"></i></span>
                                </div>
                                <input type="text" id="facebook" class="form-control form-control-sm" placeholder="facebook/yourname" aria-label="facebook" aria-describedby="facebook">
                            </div>
                            <span class="help-block">Some help content goes here</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="twitter">Twitter</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background-color:#38A1F3"><i class="text-white fab fa-twitter"></i></span>
                                </div>
                                <input type="text" id="twitter" class="form-control form-control-sm" placeholder="twitter/yourname" aria-label="twitter" aria-describedby="twitter">
                            </div>
                            <span class="help-block">Some help content goes here</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="twitter">Whatsapp</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background-color:#25D366"><i class="text-white fab fa-whatsapp"></i></span>
                                </div>
                                <input type="text" id="twitter" class="form-control form-control-sm" placeholder="twitter/yourname" aria-label="twitter" aria-describedby="twitter">
                            </div>
                            <span class="help-block">Some help content goes here</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div id="panel-1" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
                <div class="panel-hdr">
                    <h2>
                        Information <span class="fw-300"></span>
                    </h2>
                    <div class="panel-toolbar">
                        <a href="/beranda" class="btn btn-sm btn-primary wave-theme">Back</a>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="firstname">First Name <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" id="firstname" class="form-control form-control-sm" placeholder="First Name" aria-label="firstname" aria-describedby="firstname" value="{{$profile->first_name}}">
                                    </div>
                                    <span class="help-block">Some help content goes here</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="lastname">Last Name <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" id="lastname" class="form-control form-control-sm" placeholder="Last Name" aria-label="lastname" aria-describedby="lastname" value="{{$profile->last_name}}">
                                    </div>
                                    <span class="help-block">Some help content goes here</span>
                                </div>
                            </div>
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