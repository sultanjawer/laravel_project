<!-- BEGIN Left Aside -->
<aside class="page-sidebar">
    <div class="page-logo">
        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
            <img src="/img/logo.png" alt="Project WebApp" aria-roledescription="logo">
            <span class="page-logo-text mr-1">Project WebApp</span>
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
            <img src="/img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle" alt="Administrator">
            <div class="info-card-text">
                <a href="#" class="d-flex align-items-center text-white">
                    <span class="text-truncate text-truncate-sm d-inline-block">
                        Administrator
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
            <li class="{{ request()->is('beranda') ? 'active' : '' }}">
                <a href="/beranda" title="Beranda" data-filter-tags="beranda home">
                    <i class="fal fa-home"></i>
                    <span class="nav-link-text" data-i18n="nav.home">Beranda</span>
                </a>
            </li>
            <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard" title="Dashboard" data-filter-tags="dashboard analytic monitoring">
                    <i class="fal fa-analytics"></i>
                    <span class="nav-link-text" data-i18n="nav.dashboard">Dashboard</span>
                </a>
            </li>
            <li class="nav-title">Sub Applications</li>
            <li class="{{ request()->is('asset*') ? 'active' : '' }}">
                <a href="javascript:void(0);" title="Assets Management" data-filter-tags="asset management">
                    <i class="fal fa-inventory"></i>
                    <span class="nav-link-text" data-i18n="nav.asset_management">Assets Management</span>
                </a>
                <ul>
                    <li class="{{ request()->is('asset') ? 'active' : '' }}">
                        <a href="/asset" title="Asset List" data-filter-tags="assets list">
                            <span class="nav-link-text" data-i18n="nav.assets_list">Assets List</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('asset/add') ? 'active' : '' }}">
                        <a href="/asset/add" title="New Asset" data-filter-tags="create new assets">
                            <span class="nav-link-text" data-i18n="nav.create_assets">Add New Asset</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-title">Settings</li>
            <li class="{{ request()->is('admin*') ? 'active' : '' }}">
                <a href="javascript:void(0);" title="Users Management" data-filter-tags="users management">
                    <i class="fal fa-users"></i>
                    <span class="nav-link-text" data-i18n="nav.users_management">Users Management</span>
                </a>
                <ul>
                    <li class="{{ request()->is('admin/permissions') ? 'active' : '' }}">
                        <a href=" admin/permissions" title="Permissions" data-filter-tags="user permissions">
                            <span class="nav-link-text" data-i18n="nav.user_permissions">Permissions</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/roles') ? 'active' : '' }}">
                        <a href="admin/roles" title="Roles" data-filter-tags="user roles">
                            <span class="nav-link-text" data-i18n="nav.user_roles">Roles</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/users') ? 'active' : '' }}">
                        <a href="admin/users" title="Users" data-filter-tags="user list">
                            <span class="nav-link-text" data-i18n="nav.user">Users List</span>
                        </a>
                    </li>
                </ul>
            </li>
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
                    <li>
                        <a href="/profile/password" title="Change Password" data-filter-tags="change password">
                            <span class="nav-link-text" data-i18n="nav.change_password">Change Password</span>
                        </a>
                    </li>
                </ul>
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