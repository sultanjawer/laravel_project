@extends ('layoutsv2.global')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partialsv2.sysalert')</div>

<div class="row">
    <div class="col-md-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    <i class="subheader-icon fal fa-ballot-check mr-1"></i>Threads
                </h2>
                <div class="panel-toolbar">

                </div>
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
                        <span>Anda dapat melihat berita dan informasi terbaru yang dikirimkan oleh Administrator di sini.</span>
                    </div>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped w-100" id="dt_feeds">
                            <thead class="card-header text-uppercase text-muted">
                                <th>TITLE</th>
                                <th>Created</th>
                                <th>Recipient</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="col-md">
                                            <div class="p-3">
                                                <div class="d-flex flex-column">
                                                    <a href="/v2/feeds/read" class="fs-lg fw-500 d-flex align-items-start">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                                    </a>
                                                    <div class="d-block text-muted fs-sm">
                                                        This is truncated line of the first paragraph of the feeds.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>January 21, 2019 @12:30PM</td>
                                    <td>Public</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-md">
                                            <div class="p-3">
                                                <div class="d-flex flex-column">
                                                    <a href="/v2/feeds/read" class="fs-lg fw-500 d-flex align-items-start">
                                                        Vestibulum molestie, ipsum vitae feugiat lacinia
                                                    </a>
                                                    <div class="d-block text-muted fs-sm">
                                                        This is truncated line of the first paragraph of the feeds.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>January 21, 2019 @12:30PM</td>
                                    <td>username</td>
                                </tr>
                            </tbody>
                        </table>
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