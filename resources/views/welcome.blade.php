<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        {{env('APP_NAME')}}
    </title>
    <meta name="description" content="Page Title">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- smartadmin base css -->
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="{{ asset('css/vendors.bundle.css') }}">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="{{ asset('css/app.bundle.css') }}">
    <link id="mytheme" rel="stylesheet" media="screen, print" href="#">
    <link id="myskin" rel="stylesheet" media="screen, print" href="{{ asset('css/skins/skin-master.css') }}">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon.png') }}">
    <link rel="mask-icon" href="{{ asset('img/logo.png') }}" color="#5bbad5">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/miscellaneous/reactions/reactions.css') }}">

    <!-- You can add your own stylesheet here to override any styles that comes before it
		<link rel="stylesheet" media="screen, print" href="css/your_styles.css">-->
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/datagrid/datatables/datatables.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/formplugins/bootstrap-datepicker/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/formplugins/dropzone/dropzone.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/formplugins/select2/select2.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/formplugins/summernote/summernote.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/miscellaneous/nestable/nestable.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/miscellaneous/reactions/reactions.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/skins/skin-master.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/statistics/c3/c3.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/statistics/chartist/chartist.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/statistics/chartjs/chartjs.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/fa-light.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/fa-regular.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/fa-solid.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/fa-brands.css') }}">
    <!-- intro.js node_modules\intro.js -->
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/intro.js/introjs.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/intro.js/minified/introjs.min.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/intro.js/minified/introjs.min.css.map') }}">
    @yield('style')
</head>
<!--
		ditambahkan class fixed footer "footer-function-fixed"
		pada body class sebagai default layout antisipasi
		saat tampil di android webview
	-->

<body class="mod-bg-1 mod-nav-link footer-function-fixed nav-function-minify nav-function-fixed">
    <!-- BEGIN Page Wrapper -->
    <div class="page-wrapper">
        <div class="page-inner">
            <!-- BEGIN Left Aside sidebar -->

            <!-- END Left Aside sidebar -->
            <div class="page-content-wrapper">
                <!-- BEGIN Page Header -->

                <!-- END Page Header -->
                <!-- BEGIN Page Content -->
                <!-- the #js-page-content id is needed for some plugins to initialize -->
                <main id="js-page-content" role="main" class="page-content">
                    <!-- BEGIN breadcrumb -->

                    <!-- END Page Content -->
                    <!-- BEGIN subheader -->

                    <!-- END subheader -->
                    <!-- BEGIN system alert. can be use for flash message or pushed app notification sent by Administrator -->
                    <!-- END system alert  -->
                    <!-- Your main content goes below here: -->
                    <div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1"></div>
                    <!-- welcome message -->
                    <div class="row mb-3">
                        <div class="col text-center">
                            <h1 class="hidden-md-down">Selamat Datang di </h1>
                            <h1 class="display-4 fw-700">{{env('APP_NAME')}}</h1>
                            <h1 class="display-4 hidden-sm-up">Selamat Datang di {{env('APP_NAME')}}</h1>
                            <h4 class="hidden-md-down">
                                <div class="d-flex flex-start w-100">
                                    <div class="d-flex flex-fill">
                                        <div class="flex-fill">
                                            <span class="text-muted js-get-date"></span>

                                        </div>
                                    </div>
                                </div>
                            </h4>
                            <span>Silahkan pilih menu di bawah ini untuk melanjutkan</span>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-12 order-md-2 mb-4">
                            <div class="row justify-content-center text-center">
                                <div class="card border m-auto m-lg-2" style="max-width: 18rem;">
                                    <img src="img/card-backgrounds/cover-1-lg.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title fw-500">Administrator & Verifikator</h5>
                                        <p class="card-text text-left">Klik tombol di bawah jika Role Anda adalah Administrator atau Verifikator.</p>
                                    </div>
                                    <div class="card-footer"><a href="/login" class="btn btn-sm btn-primary"><i class="fal fa-plane-departure mr-1"></i>Kunjungi</a></div>
                                </div>
                                <div class="card border m-auto m-lg-2" style="max-width: 18rem;">
                                    <img src="img/card-backgrounds/cover-2-lg.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title fw-500 text-danger">Simethris versi 2021</h5>
                                        <p class="card-text text-left">Jika Anda ingin melaporkan Realisasi Wajib Tanam-Produksi untuk RIPH periode sebelum Tahun 2022.</p>

                                    </div>
                                    <div class="card-footer"><a href="/v2" class="btn btn-sm btn-danger"><i class="fal fa-plane-departure mr-1"></i>Kunjungi</a></div>
                                </div>
                                <div class="card border m-auto m-lg-2" style="max-width: 18rem;">
                                    <img src="img/card-backgrounds/cover-3-lg.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title fw-500">Simethris versi 3.0</h5>
                                        <p class="card-text text-left">Jika Anda ingin melaporkan Realisasi Wajib Tanam-Produksi untuk RIPH periode Tahun 2022 dan setelahnya.</p>

                                    </div>
                                    <div class="card-footer"><a href="/login" class="btn btn-sm btn-warning"><i class="fal fa-plane-departure mr-1"></i>Kunjungi</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- this overlay is activated only when mobile menu is triggered -->
                <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
                <!-- BEGIN Page Footer -->

                <!-- END Page Footer -->
                <!-- BEGIN Shortcuts -->

                <!-- END Shortcuts -->
                <!-- BEGIN Color profile -->
                <!-- this area is hidden and will not be seen on screens or screen readers -->
                <!-- we use this only for CSS color refernce for JS stuff -->
                @include('partials.colorprofile')
                <!-- END Color profile -->
            </div>
        </div>
    </div>
    <!-- BEGIN Page Settings -->
    @include('partials.pagesettings')
    <!-- end page settings -->
    <!-- Smartadmin core -->
    <script src="{{ asset('js/vendors.bundle.js') }}"></script>
    <script src="{{ asset('js/app.bundle.js') }}"></script>
    <!-- Smartadmin plugin -->
    <script src="{{ asset('js/datagrid/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('js/moment/moment.min.js') }}"></script>
    <script src="{{ asset('js/formplugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/formplugins/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('js/formplugins/select2/select2.bundle.js') }}"></script>
    <script src="{{ asset('js/formplugins/summernote/summernote.js') }}"></script>
    <!-- Smartadmin misc -->
    <script src="{{ asset('js/miscellaneous/nestable/nestable.js') }}"></script>
    <!-- smartadmin statistics -->
    <script src="{{ asset('js/statistics/c3/c3.js') }}"></script>
    <script src="{{ asset('js/statistics/chartist/chartist.js') }}"></script>
    <script src="{{ asset('js/statistics/chartjs/chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/statistics/d3/d3.js') }}"></script>
    <script src="{{ asset('js/statistics/echart/echarts.min.js') }}"></script>
    <script src="{{ asset('js/statistics/easypiechart/easypiechart.bundle.js') }}"></script>
    <script src="{{ asset('js/statistics/sparkline/sparkline.bundle.js') }}"></script>
    <script src="{{ asset('js/statistics/flot/flot.bundle.js') }}"></script>

    <!-- intro.js -->
    <script src="{{ asset('js/intro.js/minified/intro.min.js') }}"></script>
    <script src="{{ asset('js/intro.js/intro.js') }}"></script>
    <script src="{{ asset('js/intro.js/minified/intro.min.js.map') }}"></script>

    <script type="text/javascript">
        document.getElementById('startTour').onclick = function() {
            introJs().setOptions({
                    showStepNumbers: true,
                    prevLabel: 'Kembali',
                    nextLabel: 'Lanjut',
                    doneLabel: 'Selesai',
                })
                // untuk menuju ke halaman lain, gunakan ini
                //.oncomplete(function() {
                //    window.location.href = '/';
                //})
                .onstart(function() {
                    alert('Mulai Tour! Tour ini akan memberikan panduan singkat penggunaan halaman ini. klik tombol Lanjut untuk melanjutkan');
                })
                .oncomplete(function() {
                    alert('Tour Selesai');
                })
                .start()
        };
    </script>

    {{-- <script type="text/javascript">
            /* Activate smart panels */
            $('#js-page-content').smartPanel();
			
        </script> --}}
    @yield('scripts')
</body>

</html>