<ol class="breadcrumb page-breadcrumb">
    @foreach($breadcrumb as $breadcrumbitem)
    <li class="breadcrumb-item">{{$breadcrumbitem}}</li>
    @endforeach
    <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date" data-toggle="tooltip" title data-original-title="Hari ini"></span></li>
</ol>