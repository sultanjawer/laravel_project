@extends ('layoutsv2.global')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partialsv2.sysalert')</div>

<div class="row">
    <div class="col-md-12">
        <div class="card mb-g border shadow-0">
            <div class="card-header p-0">
                <div class="p-3 d-flex flex-row">
                    <div class="d-block flex-shrink-0">
                        <img src="/img/avatars/farmer.png" class="img-fluid img-thumbnail" alt="" style="height:50px; width:100%;">
                    </div>
                    <div class="d-block ml-2">
                        <span class="h6 font-weight-bold text-uppercase d-block m-0"><a href="javascript:void(0);">Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                        <a href="javascript:void(0);" class="fs-sm text-info h6 fw-500 mb-0 d-block">Administrator</a>
                        <div class="d-flex mt-1 align-items-center text-muted fs-xs font-italic">

                        </div>
                    </div>
                    <a href="javascript:void(0);" class="d-inline-flex align-items-center ml-auto align-self-start  text-muted fs-xs font-italic">
                        January 21, 2019 @12:30PM
                    </a>
                </div>
            </div>
            <div class="card-body ">
                <p>
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus quis sem diam. Sed commodo metus in ultrices consequat. Vestibulum eu orci ante. Mauris vel tincidunt mauris. Cras finibus, purus eu pharetra molestie, orci felis lacinia orci, ac congue quam turpis a nibh
                </p>
                <p>
                    Nam viverra diam magna, eget lobortis orci tincidunt sed. Donec et lobortis est. Morbi eget massa est. In iaculis odio lectus, sed efficitur nunc viverra non. Nullam molestie eros magna, eu posuere mauris posuere sit amet. Pellentesque hendrerit condimentum ipsum, euismod ornare lectus pharetra eget. Praesent semper est erat, commodo mollis arcu efficitur vitae. Maecenas gravida sit amet nisi vel interdum.
                </p>
                <p>
                    Vestibulum molestie, ipsum vitae feugiat lacinia, nisi magna accumsan velit, ac semper nisi felis vitae augue. Vivamus mattis quis erat eu gravida. Integer venenatis risus vitae ullamcorper cursus. Proin sodales odio sed aliquet pulvinar. Duis ipsum erat, ultricies a dolor non, tempor dictum ante. Morbi vel metus lectus
                </p>
            </div>
            <div class="card-footer">
                <div class="d-flex align-items-center">
                    <!-- this switch visible to everyone/reader -->
                    <div class="custom-control custom-switch flex-shrink-0 ml-auto">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">Tandai sudah dibaca</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')
@endsection