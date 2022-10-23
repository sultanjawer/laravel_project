<!-- BEGIN Left Aside -->
<aside class="page-sidebar">
    <div class="page-logo">
        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
            <img src="/img/favicon.png" alt="Project WebApp" aria-roledescription="logo">
            <img src="/img/logo-icon.png" class="page-logo-text mr-1" alt="Simethris" aria-roledescription="logo" style="width:50px; height:auto;">
            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
        </a>
    </div>
    <!-- BEGIN PRIMARY NAVIGATION -->
    <nav id="js-primary-nav" class="primary-nav" role="navigation">
        <div class="nav-filter">
            <div class="position-relative">
                <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
                <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                    <i class="fal fa-chevron-up"></i>
                </a>
            </div>
        </div>
        <div class="info-card">
            <img src="/img/avatars/farmer.png" class="profile-image rounded-circle" alt="Administrator">
            <div class="info-card-text">
                <a href="#" class="d-flex align-items-center text-white">
                    <span class="text-truncate text-truncate-sm d-inline-block">
                        Liason Officer
                    </span>
                </a>
                <span class="d-inline-block text-truncate text-truncate-sm">Bogor, Indonesia</span>
            </div>
            <img src="/img/card-backgrounds/cover-2-lg.png" class="cover" alt="cover">
            <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                <i class="fal fa-angle-down"></i>
            </a>
        </div>
        <!-- 
						TIP: The menu items are not auto translated. You must have a residing lang file associated with the menu saved inside dist/media/data with reference to each 'data-i18n' attribute.
						-->
        <ul id="js-nav-menu" class="nav-menu">
            <li class="{{ request()->is('v2/beranda') ? 'active' : '' }}">
                <a href="/v2/beranda" title="Beranda" data-filter-tags="beranda home">
                    <i class="fal fa-home"></i>
                    <span class="nav-link-text" data-i18n="nav.home">Beranda</span>
                </a>
            </li>
            <li class="{{ request()->is('v2/dashboard') | request()->is('v2/pemetaan') ? 'active' : '' }}">
                <a href="javascript:void(0);" title="Dashboard" data-filter-tags="dashboard">
                    <i class="fal fa-analytics"></i>
                    <span class="nav-link-text" data-i18n="nav.dashboard">Dashboard</span>
                </a>
                <ul>
                    <li class="{{ request()->is('v2/dashboard') ? 'active' : '' }}">
                        <a href="dashboard" title="Dashboard" data-filter-tags="dashboard">
                            <span class="nav-link-text" data-i18n="nav.dashboard">Monitoring Realisasi</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('v2/pemetaan') ? 'active' : '' }}">
                        <a href="pemetaan" title="Pemetaan" data-filter-tags="dashboard pemetaan">
                            <span class="nav-link-text" data-i18n="nav.dashboard_pemetaan">Pemetaan</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-title">User Tasks</li>
            <li class="{{ request()->is('v2/riphlist*') ? 'active' : '' }}">
                <a href="/v2/riphlist" title="Data RIPH" data-filter-tags="riph">
                    <i class="fal fa-ballot"></i>
                    <span class="nav-link-text" data-i18n="nav.riph_list">Pelaporan Komitmen</span>
                </a>
            </li>
            <li class="{{ request()->is('v2/kelompoktani*') ? 'active' : '' }}">
                <a href="/v2/kelompoktani" title="Kelompoktani" data-filter-tags="kelompoktani">
                    <i class="fal fa-users"></i>
                    <span class="nav-link-text" data-i18n="nav.riph_list">Kelompoktani</span>
                </a>
            </li>
            <li class="{{ request()->is('v2/pengajuan') | request()->is('v2/skl') ? 'active' : '' }}">
                <a href="javascript:void(0);" title="Daftar Pengajuan" data-filter-tags="Pengajuan Verifikasi SKL">
                    <i class="fal fa-ballot-check"></i>
                    <span class="nav-link-text" data-i18n="nav.pengajuan">Daftar Verifikasi</span>
                </a>
                <ul>
                    <li class="{{ request()->is('v2/pengajuan') ? 'active' : '' }}">
                        <a href="/v2/pengajuan" title="Daftar Pengajuan" data-filter-tags="daftar pengajuan verifikasi">
                            <span class="nav-link-text" data-i18n="nav.list_pengajuan">Daftar Pengajuan</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('v2/skl') ? 'active' : '' }}">
                        <a href="/v2/skl" title="Daftar SKL" data-filter-tags="daftar skl lunas">
                            <span class="nav-link-text" data-i18n="nav.list_skl">Daftar SKL</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ request()->is('v2/files*') ? 'active' : '' }}">
                <a href="javascript:void(0);" title="Pengelolaan Berkas files management" data-filter-tags="Daftar Berkas Dokumen Galeri Foto">
                    <i class="fal fa-folder"></i>
                    <span class="nav-link-text" data-i18n="nav.files">Pengelolaan Berkas</span>
                </a>
                <ul>
                    <li class="{{ request()->is('v2/files/myfiles') ? 'active' : '' }}">
                        <a href="/v2/files/myfiles" title="My Files" data-filter-tags="daftar berkas dokumen">
                            <span class="nav-link-text" data-i18n="nav.my_files">Berkas Saya</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('v2/files/mygalleries') ? 'active' : '' }}">
                        <a href="/v2/files/mygalleries" title="Galeri" data-filter-tags="foto unggah">
                            <span class="nav-link-text" data-i18n="nav.list_skl">Galeri Saya</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('v2/files/templates') ? 'active' : '' }}">
                        <a href="/v2/files/templates" title="Master Templates" data-filter-tags="master templat contoh dokumen berkas">
                            <span class="nav-link-text" data-i18n="nav.list_skl">Templat Master</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-title">Feeds & Messages</li>
            <li class="{{ request()->is('v2/feeds*') ? 'active' : '' }}">
                <a href="/v2/feeds" title="Feeds" data-filter-tags="feeds news information">
                    <i class="fal fa-rss"></i>
                    <span class="nav-link-text" data-i18n="nav.feeds">Feeds</span>
                </a>
            </li>
            <li class="{{ request()->is('v2/messenger*') ? 'active' : '' }}">
                <a href="/v2/messenger" title="Messenger" data-filter-tags="messages pesan mail messenger">
                    <i class="fal fa-mailbox"></i>
                    <span class="nav-link-text" data-i18n="nav.messenger">Messenger</span>
                </a>
            </li>
            <li class="nav-title">Documentations</li>
            <li class="{{ request()->is('v2/howto*') ? 'active' : '' }}">
                <a href="/v2/howto" title="How To" data-filter-tags="how to manual tutorial">
                    <i class="fal fa-books"></i>
                    <span class="nav-link-text" data-i18n="nav.feeds">How To's</span>
                </a>
            </li>
            <li class="{{ request()->is('v2/build*') ? 'active' : '' }}">
                <a href="/v2/build" title="Build Note" data-filter-tags="build note version control">
                    <i class="fal fa-code"></i>
                    <span class="nav-link-text" data-i18n="nav.build">Build Notes</span>
                </a>
            </li>
            <li class="nav-title">Settings</li>
            <li class="{{ request()->is('profile*') ? 'active' : '' }}">
                <a href="javascript:void(0);" title="Profiles" data-filter-tags="Profiles">
                    <i class="fal fa-address-card"></i>
                    <span class="nav-link-text" data-i18n="nav.users_management">Profiles</span>
                </a>
                <ul>
                    <li class="{{ request()->is('profile/edit*') ? 'active' : '' }}">
                        <a href="/profile/edit/1" title="My Profile" data-filter-tags="my profile">
                            <span class="nav-link-text" data-i18n="nav.category">My Profile</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('profile/company') ? 'active' : '' }}">
                        <a href="#" title="Company Profile" data-filter-tags="company profile">
                            <span class="nav-link-text" data-i18n="nav.company_profile">Company Profile</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="{{ request()->is('profile/password') ? 'active' : '' }}" href="/profile/password" title="Change Password" data-filter-tags="change password">
                    <i class="fal fa-key"></i>
                    <span class="nav-link-text" data-i18n="nav.users_management">Change Password</span>
                </a>
            </li>
            <li class="nav-title">Navigation Title</li>
            <li>
                <a href="#" title="Category" data-filter-tags="category">
                    <i class="fal fa-file"></i>
                    <span class="nav-link-text" data-i18n="nav.category">Category</span>
                </a>
                <ul>
                    <li>
                        <a href="javascript:void(0);" title="Menu child" data-filter-tags="utilities menu child">
                            <span class="nav-link-text" data-i18n="nav.utilities_menu_child">Sub-category</span>
                        </a>
                        <ul>
                            <li>
                                <a href="javascript:void(0);" title="Sublevel Item" data-filter-tags="utilities menu child sublevel item">
                                    <span class="nav-link-text" data-i18n="nav.utilities_menu_child_sublevel_item">Sublevel Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" title="Another Item" data-filter-tags="utilities menu child another item">
                                    <span class="nav-link-text" data-i18n="nav.utilities_menu_child_another_item">Another Item</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="disabled">
                        <a href="javascript:void(0);" title="Disabled item" data-filter-tags="utilities disabled item">
                            <span class="nav-link-text" data-i18n="nav.utilities_disabled_item">Disabled item</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="filter-message js-filter-message bg-success-600"></div>
    </nav>
    <!-- END PRIMARY NAVIGATION -->
    <!-- NAV FOOTER -->
    <div class="nav-footer shadow-top">
        <a href="#" onclick="return false;" data-action="toggle" data-class="nav-function-minify" class="hidden-md-down">
            <i class="ni ni-chevron-right"></i>
            <i class="ni ni-chevron-right"></i>
        </a>
        <ul class="list-table m-auto nav-footer-buttons">
            <li>
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Chat logs">
                    <i class="fal fa-comments"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Support Chat">
                    <i class="fal fa-life-ring"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Make a call">
                    <i class="fal fa-phone"></i>
                </a>
            </li>
        </ul>
    </div> <!-- END NAV FOOTER -->
</aside>
<!-- END Left Aside -->