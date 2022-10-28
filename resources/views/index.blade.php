<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        {{env('APP_NAME')}} | Login
    </title>
    <meta name="description" content="Login">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
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
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('css/skins/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon.png') }}">
    <link rel="mask-icon" href="{{ asset('img/favicon/safari-pinned-tab.svg') }}">

    <!-- Font Awsome -->
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/fa-brands.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/fa-regular.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/fa-solid.css') }}">

    <!-- Intro.js -->
    <link rel="stylesheet" media="screen, print" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/introjs.css">
    <link rel="stylesheet" media="screen, print" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/introjs.min.css">
    <link rel="stylesheet" media="screen, print" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/introjs.min.css.map">







</head>
<!-- Apa yang ingin dicapai pada halaman ini
		
	-->

<body>
    <div class="page-wrapper">
        <div class="page-inner bg-brand-gradient">
            <div class="page-content-wrapper bg-transparent m-0">
                <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient">
                    <div class="d-flex align-items-center container p-0">
                        <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9 border-0">
                            <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                                <img src="/img/favicon/favicon.png" alt="simethris" aria-roledescription="logo">
                                <span class="page-logo-text mr-1 hidden-sm-down">
                                    <img src="/img/logo-icon.png" alt="simethris" aria-roledescription="logo" style="width:150px; height:auto;">
                                </span>
                                <span class="page-logo-text mr-1 d-sm-block d-md-none">Simethris MobileApp</span>
                            </a>
                        </div>
                        <div class="ml-auto">
                            <ol class="nav ">
                                <li class="nav-item mr-3">
                                    <a href="javascript:void(0);" class="btn-link text-white" role="button" onclick="introJs().start();">
                                        Start Tour
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown c-header-nav">
                                        <a class="c-header-nav-item dropdown d-md-down-none">
                                            <a class="text-white c-header-nav-link dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="true" data-title="Pilih Bahasa!" data-intro="Pilih Bahasa pengantar dalam aplikasi" data-step="1">
                                                Bahasa (ID)
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="">English (EN)</a>
                                            </div>
                                        </a>
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="flex-1 my-bg" style="background: url(img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
                    <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
                        <div class="row">
                            <div class="col col-md-6 col-lg-7 hidden-sm-down">
                                <h2 class="fs-xxl fw-500 mt-4 text-white">
                                    Simethris V.3.0
                                    <small class="h3 fw-300 mt-3 mb-5 text-white opacity-100">
                                        Bagi Pemegang RIPH yang akan mengakses aplikasi ini, Anda harus memiliki akun pada Aplikasi RIPH Online terlebih dahulu.
                                        <br>
                                        Halaman ini bukan yang Anda maksudkan? silahkan kembali ke <a href="/" class="fw-700 text-white">menu awal </a>untuk memilih halaman tujuan Anda.
                                        <p>Belum memiliki akun? silahkan melakukan pendaftaran <a href="http://riph.pertanian.go.id/" class="fw-700 text-white">di sini.</a></p>
                                    </small>
                                </h2>
                                <a href="#" class="fs-lg fw-500 text-white opacity-70">Learn more &gt;&gt;</a>
                                <div class="d-sm-flex flex-column align-items-center justify-content-center d-md-block">
                                    <div class="px-0 py-1 mt-5 text-white fs-nano opacity-50">
                                        Associate
                                    </div>
                                    <div class="d-flex flex-row opacity-70 align-items-center">
                                        <a href="http://riph.pertanian.go.id/" class="text-white mr-2">
                                            <img src="/img/riphonline.svg" alt="simethris" aria-roledescription="logo" style="width:25px; height:auto;">
                                        </a>
                                        <a href="#" class="mr-2 fs-xxl text-white" hidden>
                                            <i class="fab fa-twitter-square"></i>
                                        </a>
                                        <a href="#" class="mr-2 fs-xxl text-white" hidden>
                                            <i class="fab fa-google-plus-square"></i>
                                        </a>
                                        <a href="#" class="mr-2 fs-xxl text-white" hidden>
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ml-auto shadow-lg">
                                <h1 class="text-white fw-300 mb-3 d-sm-block d-md-none">
                                    Secure login
                                </h1>
                                <div class="card p-4 rounded-plus bg-faded">
                                    <div class="d-sm-block d-md-none text-center mt-0 mb-1">
                                        <img src="{{ asset('img/logo-icon.png') }}" alt="simethris" aria-roledescription="logo" style="width:150px; height:auto;">
                                    </div>
                                    <form id="js-login" novalidate="" action="/beranda">
                                        <div class="form-group">
                                            <label class="form-label" for="roleaccess">User Role</label>
                                            <div class="input-group" data-toggle="tooltip" title data-original-title="Role Anda di Aplikasi ini" data-title="Pilih Role Pengguna!" data-intro="Pilih Role Pengguna Anda" data-step="2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="fal fa-user-lock"></span>
                                                    </div>
                                                </div>
                                                <select id="roleaccess" name="roleaccess" type="text" class="form-control form-control-md" required autocomplete="roleaccess" autofocus placeholder="select role" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                                    <option hidden>- select Your Role Access</option>
                                                    <option value="">- Demo Admin</option>
                                                    <option value="">- Demo User</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    No, you missed this one.
                                                </div>
                                            </div>
                                            <div class="help-block text-muted">select user role access</div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="username">Username</label>
                                            <div class="input-group" data-toggle="tooltip" title data-original-title="Your Username" data-title="Nama Pengguna (username)" data-intro="Type your username here" data-step="3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="fal fa-user"></span>
                                                    </div>
                                                </div>
                                                <input id="username" name="username" type="text" class="form-control form-control-md" required autocomplete="username" autofocus placeholder="username@example.com" value="" />
                                                <div class="invalid-feedback">
                                                    No, you missed this one.
                                                </div>
                                            </div>
                                            <div class="help-block text-muted">your username</div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="password">Password</label>
                                            <div class="input-group bg-white shadow-inset-2" data-toggle="tooltip" title data-original-title="Your password" data-title="Password" data-intro="Type your password" data-step="4">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="fal fa-key"></span>
                                                    </div>
                                                </div>
                                                <input id="password" name="password" type="text" class="form-control form-control-md border-right-0 bg-transparent pr-0" required autocomplete="password" autofocus placeholder="password" />
                                                <div class="invalid-feedback">
                                                    No, you missed this one.
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-transparent border-left-0">
                                                        <i class="far fa-eye text-muted" id="togglePassword"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="help-block text-muted">your password</div>
                                        </div>
                                        <div class="form-group text-left" data-title="Ingat Saya" data-intro="Centang jika Anda ingin langsung masuk jika login berhasil" data-step="5">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="rememberme">
                                                <label class="custom-control-label" for="rememberme"> Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-lg-6 pl-lg-1 my-2" data-title="Tombol masuk" data-intro="Klik tombol ini untuk mengakses aplikasi jika seluruh kolom telah terisi" data-step="6">
                                                <button type="submit" class="btn btn-danger btn-block btn-sm">Sign in</button>
                                            </div>
                                            <div class="col-lg-6 pl-lg-1 my-2">
                                                <button id="js-login-btn" type="submit" class="btn btn-info btn-block btn-sm">Secure login</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                            2022 © Direktorat Sayuran dan Tanaman Obat - Direktorat Jenderal Hortikultura by&nbsp;<a href='#' class='text-white opacity-40 fw-500' title='web application developer' target='_blank'>rebrandz</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.pagesettings')
    <script src="{{ asset('js/vendors.bundle.js') }}"></script>
    <script src="{{ asset('js/app.bundle.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/intro.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/intro.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/intro.min.js.map"></script>


    <script>
        $(document).ready(function() {
            $(function() {
                $(".select2-role").select2({
                    maximumSelectionLength: 1,
                    placeholder: "Select Role"
                });
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
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
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
</body>

</html>