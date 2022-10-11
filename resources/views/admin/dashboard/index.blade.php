@extends ('layouts.admin')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
<div class="row">
    <div class="col-lg-9">
        <h5 class="fw-500"><i class="subheader-icon fal fa-globe-asia mr-1"></i>Laporan Umum</h5>
        <div class="row" data-title="Laporan Umum" data-intro="Panel ini menampilkan ringkasan data umum. Berisi data W sebagai informasi tentang ringkasan W; X sebagai informasi ringkasan X, dst." data-step="2">
            <div class="col-sm-3 col-xl-3">
                <div class="p-4 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="h1 d-block l-h-n m-0 fw-500">
                            21.5k
                            <small class="m-0 l-h-n">users signed up</small>
                        </h3>
                    </div>
                    <i class="fal fa-user position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                </div>
            </div>
            <div class="col-sm-3 col-xl-3">
                <div class="p-4 bg-warning-400 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="h1 d-block l-h-n m-0 fw-500">
                            $10,203
                            <small class="m-0 l-h-n">Visual Index Figure</small>
                        </h3>
                    </div>
                    <i class="fal fa-gem position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>
                </div>
            </div>
            <div class="col-sm-3 col-xl-3">
                <div class="p-4 bg-success-200 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="h1 d-block l-h-n m-0 fw-500">
                            - 103.72
                            <small class="m-0 l-h-n">Offset Balance Ratio</small>
                        </h3>
                    </div>
                    <i class="fal fa-lightbulb position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6" style="font-size: 8rem;"></i>
                </div>
            </div>
            <div class="col-sm-3 col-xl-3">
                <div class="p-4 bg-info-200 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="h1 d-block l-h-n m-0 fw-500">
                            +40%
                            <small class="m-0 l-h-n">Product level increase</small>
                        </h3>
                    </div>
                    <i class="fal fa-globe position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div id="panel-2" class="panel" data-title="Judul panel" data-intro="Panel ini menampilkan ringkasan Judul Laporan. Berisi data Judul Laporan sebagai informasi tentang Judul Laporan" data-step="3">
                    <div class="panel-hdr">
                        <h2>
                            Rp 123.456.789,-
                        </h2>
                        <div class="panel-toolbar">
                            <select type="text" id="periode" class="form-control form-control-sm" data-toggle="tooltip" title="" data-original-title="pilih tahun awal laporan" placeholder="Task..." aria-label="periode">
                                <option hidden="">- pilih tahun laporan</option>
                                <option disabled=""></option>
                                <option>2022</option>
                                <option>2023</option>
                                <option disabled=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="panel-container show border-bottom">
                        <div class="panel-content position-relative">
                            <div class="p-1 position-absolute pos-right pos-top mt-3 mr-3 z-index-cloud d-flex align-items-center justify-content-center">
                                <div class="border-faded border-top-0 border-left-0 border-bottom-0 py-2 pr-4 mr-3 hidden-sm-down">
                                    <div class="text-right fw-500 l-h-n d-flex flex-column">
                                        <div class="h3 m-0 d-flex align-items-center justify-content-end">
                                            <div class='icon-stack mr-2'>
                                                <i class="base base-7 icon-stack-3x opacity-100 color-success-600"></i>
                                                <i class="base base-7 icon-stack-2x opacity-100 color-success-500"></i>
                                                <i class="fal fa-arrow-up icon-stack-1x opacity-100 color-white"></i>
                                            </div>
                                            $44.34 / GE
                                        </div>
                                        <span class="m-0 fs-xs text-muted">Increased Profit as per redux margins and estimates</span>
                                    </div>
                                </div>
                                <div class="js-easy-pie-chart color-info-400 position-relative d-inline-flex align-items-center justify-content-center" data-percent="35" data-piesize="95" data-linewidth="10" data-scalelength="5">
                                    <div class="js-easy-pie-chart color-success-400 position-relative position-absolute pos-left pos-right pos-top pos-bottom d-flex align-items-center justify-content-center" data-percent="65" data-piesize="60" data-linewidth="5" data-scalelength="1" data-scalecolor="#fff">
                                        <div class="position-absolute pos-top pos-left pos-right pos-bottom d-flex align-items-center justify-content-center fw-500 fs-xl text-dark">78%</div>
                                    </div>
                                </div>
                            </div>
                            <div id="flot-sales" class="w-100" style="height: 350px; padding: 0px; position: relative;"><canvas class="flot-base" width="990" height="350" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 990px; height: 350px;"></canvas>
                                <div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                    <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"></div>
                                    <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"></div>
                                </div><canvas class="flot-overlay" width="990" height="350" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 990px; height: 350px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div id="panel-2" class="panel" data-title="Judul panel" data-intro="Panel ini menampilkan ringkasan Judul Laporan. Berisi data Judul Laporan sebagai informasi tentang Judul Laporan" data-step="5">
                    <div class="panel-hdr">
                        <h2>
                            panel title
                        </h2>
                        <div class="panel-toolbar">
                            toolbar
                        </div>
                    </div>
                    <div class="panel-container show border-bottom">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-12 align-self-center text-center">
                                    <div class="c-chart-wrapper">
                                        <div class="js-easy-pie-chart color-primary-300 position-relative d-inline-flex align-items-center justify-content-center" data-percent="91.75" data-piesize="100" data-linewidth="5" data-scalelength="3">
                                            <div class="fs-xl position-absolute pos-top pos-left pos-right pos-bottom d-flex align-items-center justify-content-center fw-700 text-dark">91.75%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-content p-0">
                            <div class="col-12">
                                <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link shadow-1 p-1 btn-block btn-success bg-success-300 rounded overflow-hidden position-relative text-white mb-2 waves-effect waves-themed" id="v-pills-home-tab" data-toggle="pill" href="#realisasiTanam" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                        <div class="">
                                            <span class="small">Realisasi</span>
                                            <h5 class="d-block l-h-n m-0 fw-500">
                                                123.456.789 ha
                                            </h5>
                                        </div>
                                        <i class="fal fa-hand-holding-seedling position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:3rem"></i>
                                    </a>
                                    <a class="nav-link  shadow-1 p-1 btn-block btn-primary bg-primary-300 rounded overflow-hidden position-relative text-white mb-2 waves-effect waves-themed" id="v-pills-profile-tab" data-toggle="pill" href="#verifikasiTanam" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                        <div class="">
                                            <span class="small">Verifikasi</span>
                                            <h5 class="d-block l-h-n m-0 fw-500">
                                                123.456.789 ha
                                            </h5>
                                        </div>
                                        <i class="fal fa-hand-holding-seedling position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:3rem"></i>
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div id="panel-2" class="panel" data-title="Judul panel" data-intro="Panel ini menampilkan ringkasan Judul Laporan. Berisi data Judul Laporan sebagai informasi tentang Judul Laporan" data-step="5">
                    <div class="panel-hdr">
                        <h2>
                            panel title
                        </h2>
                        <div class="panel-toolbar">
                            toolbar
                        </div>
                    </div>
                    <div class="panel-container show border-bottom">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-12 align-self-center text-center">
                                    <div class="c-chart-wrapper">
                                        <div class="js-easy-pie-chart color-warning-500 position-relative d-inline-flex align-items-center justify-content-center" data-percent="91.75" data-piesize="100" data-linewidth="5" data-scalelength="3">
                                            <div class="fs-xl position-absolute pos-top pos-left pos-right pos-bottom d-flex align-items-center justify-content-center fw-700 text-dark">91.75%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-content p-0">
                            <div class="col-12">
                                <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link shadow-1 p-1 btn-block btn-success bg-success-300 rounded overflow-hidden position-relative text-white mb-2 waves-effect waves-themed" id="v-pills-home-tab" data-toggle="pill" href="#realisasiTanam" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                        <div class="">
                                            <span class="small">Realisasi</span>
                                            <h5 class="d-block l-h-n m-0 fw-500">
                                                123.456.789 ha
                                            </h5>
                                        </div>
                                        <i class="fal fa-hand-holding-seedling position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:3rem"></i>
                                    </a>
                                    <a class="nav-link  shadow-1 p-1 btn-block btn-primary bg-primary-300 rounded overflow-hidden position-relative text-white mb-2 waves-effect waves-themed" id="v-pills-profile-tab" data-toggle="pill" href="#verifikasiTanam" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                        <div class="">
                                            <span class="small">Verifikasi</span>
                                            <h5 class="d-block l-h-n m-0 fw-500">
                                                123.456.789 ha
                                            </h5>
                                        </div>
                                        <i class="fal fa-hand-holding-seedling position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:3rem"></i>
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 border-left">
        <h5 class="fw-500"><i class="subheader-icon fal fa-envelope mr-1"></i>New Messages</h5>
        <div id="panel-2" class="panel" data-title="Judul panel" data-intro="Panel ini menampilkan ringkasan Judul Laporan. Berisi data Judul Laporan sebagai informasi tentang Judul Laporan" data-step="6">
            <!--
				Yang ingin dicapi pada panel ini adalah:
				
				Menampilkan daftar percakapan/perpesanan/messages baru dan atau terakhir antara Administrator dengan Pengguna. Bersifat Private per user.
			-->
            <div class="panel-container show border-bottom">
                <div class="panel-content p-0">
                    <ul class="notification">
                        <li class="unread">
                            <a href="#" class="d-flex align-items-center">
                                <span class="status mr-2">
                                    <img src="/img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle" alt="">
                                </span>
                                <span class="d-flex flex-column flex-1 ml-1">
                                    <span class="name">Administrator <span class="badge badge-danger fw-n position-absolute pos-top pos-right mt-1">NEW</span></span>
                                    <span class="msg-a fs-sm">Re: New security codes</span>
                                    <span class="msg-b fs-xs">Hello again and thanks for being part...</span>
                                    <span class="fs-nano text-muted mt-1">56 seconds ago</span>
                                </span>
                            </a>
                        </li>
                        <li class="unread">
                            <a href="#" class="d-flex align-items-center">
                                <span class="status mr-2">
                                    <img src="/img/demo/avatars/avatar-j.png" class="profile-image rounded-circle" alt="">
                                </span>
                                <span class="d-flex flex-column flex-1 ml-1">
                                    <span class="name">Adison Lee (Verificator)</span>
                                    <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                    <span class="fs-nano text-muted mt-1">2 minutes ago</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-flex align-items-center">
                                <span class="status status-success mr-2">
                                    <img src="/img/demo/avatars/avatar-a.png" class="profile-image rounded-circle" alt="">
                                </span>
                                <span class="d-flex flex-column flex-1 ml-1">
                                    <span class="name">Sarah McBrook</span>
                                    <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                    <span class="fs-nano text-muted mt-1">3 days ago</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <button class="btn btn-block btn-primary btn-sm">button</button>
                </div>
            </div>
        </div>
        <h5 class="fw-500"><i class="subheader-icon fal fa-rss mr-1"></i>New Feeds</h5>
        <div id="panel-1" class="panel" data-title="Judul panel" data-intro="Panel ini menampilkan ringkasan Judul Laporan. Berisi data Judul Laporan sebagai informasi tentang Judul Laporan" data-step="7">
            <!--
				Yang ingin dicapi pada panel ini adalah:
				
				Berita/Feed adalah informasi yang disampaikan oleh Administrator kepada seluruh pengguna sesuai role. bersifat Umum Terbatas.
				Feed ditampilkan sesuai dengan role pengguna.
				Fitur Pembuatan Berita/Feed pada halaman lainnya.
			-->
            <div class="panel-container show">
                <div class="panel-content p-0">
                    <div class="row no-gutters row-grid">
                        <!-- thread -->
                        <div class="col-12">
                            <ul class="notification">
                                <li class="unread">
                                    <div class="p-3">
                                        <div class="d-flex flex-column">
                                            <div class="d-block">
                                                <span class="name d-flex align-items-center">Administrator</span>
                                            </div>
                                            <a href="/feeds/read" class="fs-lg fw-500 d-flex align-items-start">
                                                Nam viverra diam magna, eget lobortis orci tincidunt sed<span class="badge badge-danger ml-auto"> <span class="hidden-md-down">New</span></span>
                                            </a>
                                            <div class="d-block text-muted fs-sm">
                                                <span class="text-muted js-get-date"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="p-3">
                                        <div class="d-flex flex-column">
                                            <div class="d-block">
                                                <span class="name d-flex align-items-center">Administrator</span>
                                            </div>
                                            <a href="/feeds/read" class="fs-lg fw-500 d-flex align-items-start">
                                                Nam viverra diam magna, eget lobortis orci tincidunt sed<span class="badge badge-danger ml-auto"> <span class="hidden-md-down">New</span></span>
                                            </a>
                                            <div class="d-block text-muted fs-sm">
                                                <span class="text-muted js-get-date"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="p-3">
                                        <div class="d-flex flex-column">
                                            <div class="d-block">
                                                <span class="name d-flex align-items-center">Administrator</span>
                                            </div>
                                            <a href="/feeds/read" class="fs-lg fw-500 d-flex align-items-start">
                                                Nam viverra diam magna, eget lobortis orci tincidunt sed<span class="badge badge-danger ml-auto"> <span class="hidden-md-down">New</span></span>
                                            </a>
                                            <div class="d-block text-muted fs-sm">
                                                <span class="text-muted js-get-date"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <button class="btn btn-block btn-primary btn-sm">button</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- @parent -->
@section('scripts')
<!-- start script for this page -->
<script>
    $(document).ready(function() {
        var barTW = c3.generate({
            bindto: "#tw1234",
            data: {
                columns: [
                    ['TW1', 100],
                    ['TW2', 105],
                    ['TW3', 97],
                    ['TW4', 108]
                ],

                type: 'bar'
            },
            legend: {
                show: true
            },
            color: {
                pattern: ['#886ab5', '#2196F3', '#1dc9b7', '#ffc241']
            },
            axis: {
                x: {
                    type: 'category',
                    categories: ['1771', '1772', '1773', '1774']
                },
                y: {
                    show: true
                }
            },
            bar: {
                width: {
                    ratio: 0.8 // this makes bar width 50% of length between ticks
                },
                space: 0.25
                // or
                //width: 100 // this makes bar width 100px
            }
        });


        $('a[data-toggle=tab]').on('shown.bs.tab', function() {
            barTW.flush();
        });
    })
</script>

<script>
    var flotArea = $.plot($('#flot-area'), [{
            data: dataSet1,
            label: 'New Customer',
            color: color.success._200
        },
        {
            data: dataSet2,
            label: 'Returning Customer',
            color: color.info._200
        }
    ], {
        series: {
            lines: {
                show: true,
                lineWidth: 2,
                fill: true,
                fillColor: {
                    colors: [{
                            opacity: 0
                        },
                        {
                            opacity: 0.5
                        }
                    ]
                }
            },
            shadowSize: 0
        },
        points: {
            show: true,
        },
        legend: {
            noColumns: 1,
            position: 'nw'
        },
        grid: {
            hoverable: true,
            clickable: true,
            borderColor: '#ddd',
            tickColor: 'rgba(0,0,0,0.05)',
            aboveData: true,
            borderWidth: 0,
            labelMargin: 5,
            backgroundColor: 'transparent'
        },
        yaxis: {
            tickLength: 1,
            min: 0,
            max: 15,
            color: '#eee',
            tickColor: 'rgba(0,0,0,0.05)',
            font: {
                size: 0,
                color: '#999'
            }
        },
        xaxis: {
            tickLength: 1,
            color: '#eee',
            tickColor: 'rgba(0,0,0,0.05)',
            font: {
                size: 10,
                color: '#999'
            }
        }

    });
    /* flot area -- end */
</script>
@endsection