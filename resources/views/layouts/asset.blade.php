<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        {{env('APP_NAME')}} | {{ $pagedata['modules'] }}
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
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/logo.png') }}">
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

<body class="mod-bg-1 mod-nav-link footer-function-fixed nav-function-fixed">
    <!-- BEGIN Page Wrapper -->
    <div class="page-wrapper">
        <div class="page-inner">
            <!-- BEGIN Left Aside sidebar -->
            @include('partials.sidebar')
            <!-- END Left Aside sidebar -->
            <div class="page-content-wrapper">
                <!-- BEGIN Page Header -->
                @include('partials.header')
                <!-- END Page Header -->
                <!-- BEGIN Page Content -->
                <!-- the #js-page-content id is needed for some plugins to initialize -->
                <main id="js-page-content" role="main" class="page-content">
                    <!-- BEGIN breadcrumb -->
                    @include('partials.breadcrumb')
                    <!-- END Page Content -->
                    <!-- BEGIN subheader -->
                    @include('partials.subheader')
                    <!-- END subheader -->
                    <!-- BEGIN system alert. can be use for flash message or pushed app notification sent by Administrator -->
                    <!-- END system alert  -->
                    <!-- Your main content goes below here: -->
                    @yield('content')
                </main>
                <!-- this overlay is activated only when mobile menu is triggered -->
                <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
                <!-- BEGIN Page Footer -->
                @include('partials.footer')
                <!-- END Page Footer -->
                <!-- BEGIN Shortcuts -->
                @include('partials.shortcut')
                <!-- END Shortcuts -->
                <!-- BEGIN Color profile -->
                <!-- this area is hidden and will not be seen on screens or screen readers -->
                <!-- we use this only for CSS color refernce for JS stuff -->
                @include('partials.colorprofile')
                <!-- END Color profile -->
            </div>
        </div>
    </div>
    <!-- END Page Wrapper -->
    <!-- BEGIN Quick Menu -->
    <!-- to add more items, please make sure to change the variable '$menu-items: number;' in your _page-components-shortcut.scss -->
    @include('partials.quickmenu')
    <!-- END Quick Menu -->
    <!-- BEGIN Messenger -->
    @include('partials.messenger')
    <!-- END Messenger -->
    <!-- BEGIN Page Settings -->
    @include('partials.pagesettings')
    <!-- end page settings -->
    <!-- end page wrapper -->

    <!-- base vendor bundle:
			 DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations 
				+ pace.js (recommended)
				+ jquery.js (core)
				+ jquery-ui-cust.js (core)
				+ popper.js (core)
				+ bootstrap.js (core)
				+ slimscroll.js (extension)
				+ app.navigation.js (core)
				+ ba-throttle-debounce.js (core)
				+ waves.js (extension)
				+ smartpanels.js (extension)
				+ src/../jquery-snippets.js (core)
				{ { asset('js/vendors.bundle.js') }}
				{ { asset('js/app.bundle.js') }}
				{ { asset('js/datagrid/datatables/datatables.bundle.js') }}
		-->
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