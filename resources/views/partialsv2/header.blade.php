<!-- BEGIN Page Header -->
<header class="page-header" role="banner">
	<!-- we need this logo when user switches to nav-function-top -->
	<div class="page-logo">
		<a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
			<img src="/img/favicon.png" alt="Project WebApp" aria-roledescription="logo">
			<img src="/img/logo-icon.png" class="page-logo-text mr-1" alt="Simethris" aria-roledescription="logo" style="width:150px; height:auto;">
			<span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
			<i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
		</a>
	</div>
	<!-- DOC: nav menu layout change shortcut -->
	<div class="hidden-md-down dropdown-icon-menu position-relative">
		<a href="#" class="header-btn btn js-waves-off" data-action="toggle" data-class="nav-function-hidden" title="Hide Navigation">
			<i class="ni ni-menu"></i>
		</a>
		<ul>
			<li>
				<a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify" title="Minify Navigation">
					<i class="ni ni-minify-nav"></i>
				</a>
			</li>
			<li>
				<a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-fixed" title="Lock Navigation">
					<i class="ni ni-lock-nav"></i>
				</a>
			</li>
		</ul>
	</div>
	<!-- DOC: mobile button appears during mobile width -->
	<div class="hidden-lg-up">
		<a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
			<i class="ni ni-menu"></i>
		</a>
	</div>
	<div class="search">
		<form class="app-forms hidden-xs-down" role="search" action="page_search.html" autocomplete="off">
			<input type="text" id="search-field" placeholder="Search for anything" class="form-control" tabindex="2">
			<a href="#" onclick="return false;" class="btn-danger btn-search-close js-waves-off d-none" data-action="toggle" data-class="mobile-search-on">
				<i class="fal fa-times"></i>
			</a>
		</form>
	</div>
	<div class="ml-auto d-flex">
		<!-- activate app search icon (mobile) -->
		<div class="hidden-sm-up">
			<a href="#" class="header-icon" data-action="toggle" data-class="mobile-search-on" data-focus="search-field" title="Search">
				<i class="fal fa-search"></i>
			</a>
		</div>
		<!-- app settings -->
		<div class="hidden-md-down">
			<a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-settings">
				<i class="fal fa-cog"></i>
			</a>
		</div>
		<!-- app notification -->
		<div>
			<a href="#" class="header-icon" data-toggle="dropdown" title="You got 11 notifications">
				<i class="fal fa-bell"></i>
				<span class="badge badge-icon">11</span>
			</a>
			<div class="dropdown-menu dropdown-menu-animated dropdown-xl">
				<div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center rounded-top mb-2">
					<h4 class="m-0 text-center color-white">
						11 New
						<small class="mb-0 opacity-80">User Notifications</small>
					</h4>
				</div>
				<ul class="nav nav-tabs nav-tabs-clean" role="tablist">
					<li class="nav-item">
						<a class="nav-link px-4 fs-md js-waves-on fw-500" data-toggle="tab" href="#tab-messages" data-i18n="drpdwn.messages">Messages</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-4 fs-md js-waves-on fw-500" data-toggle="tab" href="#tab-feeds" data-i18n="drpdwn.feeds">Feeds</a>
					</li>
				</ul>
				<div class="tab-content tab-notification">
					<div class="tab-pane active p-3 text-center">
						<h5 class="mt-4 pt-4 fw-500">
							<span class="d-block fa-3x pb-4 text-muted">
								<i class="ni ni-arrow-up text-gradient opacity-70"></i>
							</span> Select a tab above to activate
							<small class="mt-3 fs-b fw-400 text-muted">
								This blank page message helps protect your privacy, or you can show the first message here automatically through
								<a href="#">settings page</a>
							</small>
						</h5>
					</div>
					<div class="tab-pane" id="tab-messages" role="tabpanel">
						<div class="custom-scroll h-100">
							<ul class="notification">
								<li class="unread">
									<a href="#" class="d-flex align-items-center">
										<span class="status mr-2">
											<span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-c.png')"></span>
										</span>
										<span class="d-flex flex-column flex-1 ml-1">
											<span class="name">Melissa Ayre <span class="badge badge-primary fw-n position-absolute pos-top pos-right mt-1">INBOX</span></span>
											<span class="msg-a fs-sm">Re: New security codes</span>
											<span class="msg-b fs-xs">Hello again and thanks for being part...</span>
											<span class="fs-nano text-muted mt-1">56 seconds ago</span>
										</span>
									</a>
								</li>
								<li class="unread">
									<a href="#" class="d-flex align-items-center">
										<span class="status mr-2">
											<span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-a.png')"></span>
										</span>
										<span class="d-flex flex-column flex-1 ml-1">
											<span class="name">Adison Lee</span>
											<span class="msg-a fs-sm">Msed quia non numquam eius</span>
											<span class="fs-nano text-muted mt-1">2 minutes ago</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex align-items-center">
										<span class="status status-success mr-2">
											<span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-b.png')"></span>
										</span>
										<span class="d-flex flex-column flex-1 ml-1">
											<span class="name">Oliver Kopyuv</span>
											<span class="msg-a fs-sm">Msed quia non numquam eius</span>
											<span class="fs-nano text-muted mt-1">3 days ago</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex align-items-center">
										<span class="status status-warning mr-2">
											<span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-e.png')"></span>
										</span>
										<span class="d-flex flex-column flex-1 ml-1">
											<span class="name">Dr. John Cook PhD</span>
											<span class="msg-a fs-sm">Msed quia non numquam eius</span>
											<span class="fs-nano text-muted mt-1">2 weeks ago</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex align-items-center">
										<span class="status status-success mr-2">
											<!-- <img src="/img/demo/avatars/avatar-m.png" data-src="/img/demo/avatars/avatar-h.png" class="profile-image rounded-circle" alt="Sarah McBrook" /> -->
											<span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-h.png')"></span>
										</span>
										<span class="d-flex flex-column flex-1 ml-1">
											<span class="name">Sarah McBrook</span>
											<span class="msg-a fs-sm">Msed quia non numquam eius</span>
											<span class="fs-nano text-muted mt-1">3 weeks ago</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex align-items-center">
										<span class="status status-success mr-2">
											<span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-m.png')"></span>
										</span>
										<span class="d-flex flex-column flex-1 ml-1">
											<span class="name">Anothony Bezyeth</span>
											<span class="msg-a fs-sm">Msed quia non numquam eius</span>
											<span class="fs-nano text-muted mt-1">one month ago</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex align-items-center">
										<span class="status status-danger mr-2">
											<span class="profile-image rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-j.png')"></span>
										</span>
										<span class="d-flex flex-column flex-1 ml-1">
											<span class="name">Lisa Hatchensen</span>
											<span class="msg-a fs-sm">Msed quia non numquam eius</span>
											<span class="fs-nano text-muted mt-1">one year ago</span>
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="tab-pane" id="tab-feeds" role="tabpanel">
						<div class="custom-scroll h-100">
							<ul class="notification">
								<li class="unread">
									<div class="d-flex align-items-center show-child-on-hover">
										<span class="d-flex flex-column flex-1">
											<span class="name d-flex align-items-center">Administrator <span class="badge badge-success fw-n ml-1">UPDATE</span></span>
											<span class="msg-a fs-sm">
												System updated to version <strong>4.5.1</strong> <a href="docs_buildnotes.html">(patch notes)</a>
											</span>
											<span class="fs-nano text-muted mt-1">5 mins ago</span>
										</span>
										<div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
											<a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
										</div>
									</div>
								</li>
								<li>
									<div class="d-flex align-items-center show-child-on-hover">
										<div class="d-flex flex-column flex-1">
											<span class="name">
												Adison Lee <span class="fw-300 d-inline">replied to your video <a href="#" class="fw-400"> Cancer Drug</a> </span>
											</span>
											<span class="msg-a fs-sm mt-2">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day...</span>
											<span class="fs-nano text-muted mt-1">10 minutes ago</span>
										</div>
										<div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
											<a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
										</div>
									</div>
								</li>
								<li>
									<div class="d-flex align-items-center show-child-on-hover">
										<!--<img src="/img/demo/avatars/avatar-m.png" data-src="/img/demo/avatars/avatar-k.png" class="profile-image rounded-circle" alt="k" />-->
										<div class="d-flex flex-column flex-1">
											<span class="name">Troy Norman'<span class="fw-300">s new connections</span>
											</span>
											<div class="fs-sm d-flex align-items-center mt-2">
												<span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-a.png'); background-size: cover;"></span>
												<span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-b.png'); background-size: cover;"></span>
												<span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-c.png'); background-size: cover;"></span>
												<span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-e.png'); background-size: cover;"></span>
												<div data-hasmore="+3" class="rounded-circle profile-image-md mr-1">
													<span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url('img/demo/avatars/avatar-h.png'); background-size: cover;"></span>
												</div>
											</div>
											<span class="fs-nano text-muted mt-1">55 minutes ago</span>
										</div>
										<div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
											<a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
										</div>
									</div>
								</li>
								<li>
									<div class="d-flex align-items-center show-child-on-hover">
										<!--<img src="/img/demo/avatars/avatar-m.png" data-src="/img/demo/avatars/avatar-e.png" class="profile-image-sm rounded-circle align-self-start mt-1" alt="k" />-->
										<div class="d-flex flex-column flex-1">
											<span class="name">Dr John Cook <span class="fw-300">sent a <span class="text-danger">new signal</span></span></span>
											<span class="msg-a fs-sm mt-2">Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</span>
											<span class="fs-nano text-muted mt-1">10 minutes ago</span>
										</div>
										<div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
											<a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
										</div>
									</div>
								</li>
								<li>
									<div class="d-flex align-items-center show-child-on-hover">
										<div class="d-flex flex-column flex-1">
											<span class="name">Lab Images <span class="fw-300">were updated!</span></span>
											<div class="fs-sm d-flex align-items-center mt-1">
												<a href="#" class="mr-1 mt-1" title="Cell A-0012">
													<span class="d-block img-share" style="background-image:url('img/thumbs/pic-7.png'); background-size: cover;"></span>
												</a>
												<a href="#" class="mr-1 mt-1" title="Patient A-473 saliva">
													<span class="d-block img-share" style="background-image:url('img/thumbs/pic-8.png'); background-size: cover;"></span>
												</a>
												<a href="#" class="mr-1 mt-1" title="Patient A-473 blood cells">
													<span class="d-block img-share" style="background-image:url('img/thumbs/pic-11.png'); background-size: cover;"></span>
												</a>
												<a href="#" class="mr-1 mt-1" title="Patient A-473 Membrane O.C">
													<span class="d-block img-share" style="background-image:url('img/thumbs/pic-12.png'); background-size: cover;"></span>
												</a>
											</div>
											<span class="fs-nano text-muted mt-1">55 minutes ago</span>
										</div>
										<div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
											<a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
										</div>
									</div>
								</li>
								<li>
									<div class="d-flex align-items-center show-child-on-hover">
										<!--<img src="/img/demo/avatars/avatar-m.png" data-src="/img/demo/avatars/avatar-h.png" class="profile-image rounded-circle align-self-start mt-1" alt="k" />-->
										<div class="d-flex flex-column flex-1">
											<div class="name mb-2">
												Lisa Lamar<span class="fw-300"> updated project</span>
											</div>
											<div class="row fs-b fw-300">
												<div class="col text-left">
													Progress
												</div>
												<div class="col text-right fw-500">
													45%
												</div>
											</div>
											<div class="progress progress-sm d-flex mt-1">
												<span class="progress-bar bg-primary-500 progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></span>
											</div>
											<span class="fs-nano text-muted mt-1">2 hrs ago</span>
											<div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
												<a href="#" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="py-2 px-3 bg-faded d-block rounded-bottom text-right border-faded border-bottom-0 border-right-0 border-left-0">
					<a href="#" class="fs-xs fw-500 ml-auto">view all notifications</a>
				</div>
			</div>
		</div>
		<!-- app user menu -->
		<div>
			<a href="#" data-toggle="dropdown" title="admin@example.com" class="header-icon d-flex align-items-center justify-content-center ml-2">
				<img src="/img/avatars/farmer.png" class="profile-image rounded-circle" alt="Administrator">
				<!-- you can also add username next to the avatar with the codes below:
									<span class="ml-1 mr-1 text-truncate text-truncate-header hidden-xs-down">Me</span>
									<i class="ni ni-chevron-down hidden-xs-down"></i> -->
			</a>
			<div class="dropdown-menu dropdown-menu-animated dropdown-lg">
				<div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
					<div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
						<span class="mr-2">
							<img src="/img/avatars/farmer.png" class="rounded-circle profile-image" alt="Administrator">
						</span>
						<div class="info-card-text">
							<div class="fs-lg text-truncate text-truncate-lg">Liason Officer</div>
							<span class="text-truncate text-truncate-md opacity-80">user@company.com</span>
						</div>
					</div>
				</div>
				<a href="/profile/my_profile" class="dropdown-item">
					<span data-i18n="drpdwn.change_profile">My Profile</span>
				</a>
				<a href="/profile/company_profile" class="dropdown-item">
					<span data-i18n="drpdwn.change_company">Company Profile</span>
				</a>
				<a href="#" class="dropdown-item">
					<span data-i18n="drpdwn.change_password">Change Password</span>
				</a>
				<div class="dropdown-divider m-0"></div>
				<a href="#" class="dropdown-item" data-action="app-reset">
					<span data-i18n="drpdwn.reset_layout">Reset Layout</span>
				</a>
				<a hidden href="#" class="dropdown-item" data-toggle="modal" data-target=".js-modal-settings">
					<span data-i18n="drpdwn.settings">Settings</span>
				</a>
				<div class="dropdown-divider m-0"></div>
				<a href="#" class="dropdown-item" data-action="app-fullscreen">
					<span data-i18n="drpdwn.fullscreen">Fullscreen</span>
					<i class="float-right text-muted fw-n">F11</i>
				</a>
				<a href="#" class="dropdown-item" data-action="app-print">
					<span data-i18n="drpdwn.print">Print</span>
					<i class="float-right text-muted fw-n">Ctrl + P</i>
				</a>
				<div hidden class="dropdown-multilevel dropdown-multilevel-left">
					<div class="dropdown-item">
						Language
					</div>
					<div class="dropdown-menu">
						<a href="#?lang=fr" class="dropdown-item" data-action="lang" data-lang="fr">Fran??ais</a>
						<a href="#?lang=en" class="dropdown-item active" data-action="lang" data-lang="en">English (US)</a>
						<a href="#?lang=es" class="dropdown-item" data-action="lang" data-lang="es">Espa??ol</a>
						<a href="#?lang=ru" class="dropdown-item" data-action="lang" data-lang="ru">?????????????? ????????</a>
						<a href="#?lang=jp" class="dropdown-item" data-action="lang" data-lang="jp">?????????</a>
						<a href="#?lang=ch" class="dropdown-item" data-action="lang" data-lang="ch">??????</a>
					</div>
				</div>
				<div class="dropdown-divider m-0"></div>
				<a class="dropdown-item fw-500 pt-3 pb-3" href="/logout">
					<span data-i18n="drpdwn.page-logout">Logout</span>
					<span class="float-right fw-n">&commat;admin</span>
				</a>
			</div>
		</div>
	</div>
</header>
<!-- END Page Header -->