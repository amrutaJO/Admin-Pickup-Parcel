<?php
require_once __DIR__ . '/includes/lang.php';

if (!function_exists('translate')) {
	function translate($word)
	{
		global $_dictionary;
		global $lang;
		$match = @$_dictionary[$word];
		if (is_array($match)) {
			return $match[$lang];
		}
		return $word;
	}
}
if (isset($_GET['logout'])) {
	header('Location: login.php');
	exit();
}
if (isset($_POST['change_lang'])) {
	$lang = $_POST['language'];
} else {
	$lang = 'en';
}
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
	<!-- Required Meta Tags Always Come First -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title -->
	<title>
		<?= translate('dashboard') ?> |
		<?= translate('title') ?>
	</title> <!-- Favicons -->
	<link rel="shortcut icon" href="assets/img/logos/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/logos/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/logos/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/img/logos/favicon-16x16.png">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">
	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/css/vendor.min.css">
	<!-- CSS Front Template -->
	<!-- <link rel="stylesheet" href="assets/css/theme.minc619.css?v=1.0"> -->
	<link rel="preload" href="assets/css/theme.min.css" data-hs-appearance="default" as="style">
	<link rel="preload" href="assets/css/theme-dark.min.css" data-hs-appearance="dark" as="style">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.1/af-2.5.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/b-print-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/fh-3.3.1/kt-2.8.0/r-2.4.0/rg-1.3.0/rr-1.3.1/sc-2.0.7/sb-1.4.0/sp-2.1.0/sl-1.5.0/sr-1.2.0/datatables.min.css" />
	<link href="assets/css/main.css" rel="stylesheet">
	<style data-hs-appearance-onload-styles>
		* {
			transition: unset !important;
		}
	</style>
	<script>
		window.hs_config = {
			"autopath": "@@autopath",
			"deleteLine": "hs-builder:delete",
			"deleteLine:build": "hs-builder:build-delete",
			"deleteLine:dist": "hs-builder:dist-delete",
			"previewMode": false,
			"startPath": "/./",
			"vars": {
				"themeFont": "https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap",
				"version": "?v=1.0"
			},
			"layoutBuilder": {
				"extend": {
					"switcherSupport": true
				},
				"header": {
					"layoutMode": "default",
					"containerMode": "container-fluid"
				},
				"sidebarLayout": "default"
			},
			"themeAppearance": {
				"layoutSkin": "default",
				"sidebarSkin": "default",
				"styles": {
					"colors": {
						"primary": "#377dff",
						"transparent": "transparent",
						"white": "#fff",
						"dark": "132144",
						"gray": {
							"100": "#f9fafc",
							"900": "#1e2022"
						}
					},
					"font": "Inter"
				}
			},
			"languageDirection": {
				"lang": "en"
			},
			"skipFilesFromBundle": {
				"dist": ["assets/js/hs.theme-appearance.js", "assets/js/hs.theme-appearance-charts.js", "assets/js/demo.js"],
				"build": ["assets/css/theme.css", "assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js", "assets/js/demo.js", "assets/css/theme-dark.html", "assets/css/docs.css", "assets/vendor/icon-set/style.html", "assets/js/hs.theme-appearance.js", "assets/js/hs.theme-appearance-charts.js", "node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.html", "assets/js/demo.js"]
			},
			"minifyCSSFiles": ["assets/css/theme.css", "assets/css/theme-dark.css"],
			"copyDependencies": {
				"dist": {
					"*assets/js/theme-custom.js": ""
				},
				"build": {
					"*assets/js/theme-custom.js": "",
					"node_modules/bootstrap-icons/font/*fonts/**": "assets/css"
				}
			},
			"buildFolder": "",
			"replacePathsToCDN": {},
			"directoryNames": {
				"src": "./src",
				"dist": "./dist",
				"build": "./build"
			},
			"fileNames": {
				"dist": {
					"js": "theme.min.js",
					"css": "theme.min.css"
				},
				"build": {
					"css": "theme.min.css",
					"js": "theme.min.js",
					"vendorCSS": "vendor.min.css",
					"vendorJS": "vendor.min.js"
				}
			},
			"fileTypes": "jpg|png|svg|mp4|webm|ogv|json"
		}
		window.hs_config.gulpRGBA = (p1) => {
			const options = p1.split(',')
			const hex = options[0].toString()
			const transparent = options[1].toString()

			var c;
			if (/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)) {
				c = hex.substring(1).split('');
				if (c.length == 3) {
					c = [c[0], c[0], c[1], c[1], c[2], c[2]];
				}
				c = '0x' + c.join('');
				return 'rgba(' + [(c >> 16) & 255, (c >> 8) & 255, c & 255].join(',') + ',' + transparent + ')';
			}
			throw new Error('Bad Hex');
		}
		window.hs_config.gulpDarken = (p1) => {
			const options = p1.split(',')

			let col = options[0].toString()
			let amt = -parseInt(options[1])
			var usePound = false

			if (col[0] == "#") {
				col = col.slice(1)
				usePound = true
			}
			var num = parseInt(col, 16)
			var r = (num >> 16) + amt
			if (r > 255) {
				r = 255
			} else if (r < 0) {
				r = 0
			}
			var b = ((num >> 8) & 0x00FF) + amt
			if (b > 255) {
				b = 255
			} else if (b < 0) {
				b = 0
			}
			var g = (num & 0x0000FF) + amt
			if (g > 255) {
				g = 255
			} else if (g < 0) {
				g = 0
			}
			return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
		}
		window.hs_config.gulpLighten = (p1) => {
			const options = p1.split(',')

			let col = options[0].toString()
			let amt = parseInt(options[1])
			var usePound = false

			if (col[0] == "#") {
				col = col.slice(1)
				usePound = true
			}
			var num = parseInt(col, 16)
			var r = (num >> 16) + amt
			if (r > 255) {
				r = 255
			} else if (r < 0) {
				r = 0
			}
			var b = ((num >> 8) & 0x00FF) + amt
			if (b > 255) {
				b = 255
			} else if (b < 0) {
				b = 0
			}
			var g = (num & 0x0000FF) + amt
			if (g > 255) {
				g = 255
			} else if (g < 0) {
				g = 0
			}
			return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
		}
	</script>
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl footer-offset" lang="en">
	<script src="assets/js/hs.theme-appearance.js"></script>
	<script src="assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js"></script>
	<!-- ========== HEADER ========== -->
	<header id="header" class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-container navbar-bordered bg-light">
		<div class="navbar-nav-wrap">
			<!-- Logo -->
			<a class="navbar-brand" href="./">
				<img class="navbar-brand-logo" src="assets/svg/logos/logo.svg" alt="Logo" data-hs-theme-appearance="default">
				<img class="navbar-brand-logo" src="assets/svg/logos/logo.svg" alt="Logo" data-hs-theme-appearance="dark">
			</a>
			<!-- End Logo -->
			<div class="navbar-nav-wrap-content-start">
				<!-- Navbar Vertical Toggle -->
				<button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
					<i class="bi-caret-left-fill navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
					<i class="bi-caret-right-fill navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
				</button>
				<!-- End Navbar Vertical Toggle -->
				<!-- Search Form -->
				<div class="dropdown ms-2">
					<!-- Input Group -->
					<div class="d-none d-lg-block">
						<div class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
							<div class="input-group-prepend input-group-text">
								<i class="bi-search"></i>
							</div>
							<input type="search" class="js-form-search form-control" placeholder="Search here" aria-label="Search here" data-hs-form-search-options='{
											 "clearIcon": "#clearSearchResultsIcon",
											 "dropMenuElement": "#searchDropdownMenu",
											 "dropMenuOffset": 20,
											 "toggleIconOnFocus": true,
											 "activeClass": "focus"
										 }'>
							<a class="input-group-append input-group-text" href="javascript:;">
								<i id="clearSearchResultsIcon" class="bi-x-lg" style="display: none;"></i>
							</a>
						</div>
					</div>
					<button class="js-form-search js-form-search-mobile-toggle btn btn-ghost-secondary btn-icon rounded-circle d-lg-none" type="button" data-hs-form-search-options='{
											 "clearIcon": "#clearSearchResultsIcon",
											 "dropMenuElement": "#searchDropdownMenu",
											 "dropMenuOffset": 20,
											 "toggleIconOnFocus": true,
											 "activeClass": "focus"
										 }'>
						<i class="bi-search"></i>
					</button>
					<!-- End Input Group -->
					<!-- Card Search Content -->
					<div id="searchDropdownMenu" class="hs-form-search-menu-content dropdown-menu dropdown-menu-form-search navbar-dropdown-menu-borderless">
						<div class="card">
							<!-- Body -->
							<div class="card-body-height">
								<div class="d-lg-none">
									<div class="input-group input-group-merge navbar-input-group mb-5">
										<div class="input-group-prepend input-group-text">
											<i class="bi-search"></i>
										</div>
										<input type="search" class="form-control" placeholder="Search here" aria-label="Search here">
										<a class="input-group-append input-group-text" href="javascript:;">
											<i class="bi-x-lg"></i>
										</a>
									</div>
								</div>
								<span class="dropdown-header">Recent searches</span>
								<div class="dropdown-item bg-transparent text-wrap">
									<a class="btn btn-soft-dark btn-xs rounded-pill" href="./">
										Gulp <i class="bi-search ms-1"></i>
									</a>
									<a class="btn btn-soft-dark btn-xs rounded-pill" href="./">
										Notification panel <i class="bi-search ms-1"></i>
									</a>
								</div>
								<div class="dropdown-divider"></div>
								<span class="dropdown-header">Tutorials</span>
								<a class="dropdown-item" href="./">
									<div class="d-flex align-items-center">
										<div class="flex-shrink-0">
											<span class="icon icon-soft-dark icon-xs icon-circle">
												<i class="bi-sliders"></i>
											</span>
										</div>
										<div class="flex-grow-1 text-truncate ms-2">
											<span>How to set up Gulp?</span>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="./">
									<div class="d-flex align-items-center">
										<div class="flex-shrink-0">
											<span class="icon icon-soft-dark icon-xs icon-circle">
												<i class="bi-paint-bucket"></i>
											</span>
										</div>
										<div class="flex-grow-1 text-truncate ms-2">
											<span>How to change theme color?</span>
										</div>
									</div>
								</a>
							</div>
							<!-- End Body -->
							<!-- Footer -->
							<a class="card-footer text-center" href="./">
								See all results <i class="bi-chevron-right small"></i>
							</a>
							<!-- End Footer -->
						</div>
					</div>
					<!-- End Card Search Content -->
				</div>
				<!-- End Search Form -->
			</div>
			<div class="navbar-nav-wrap-content-end">
				<!-- Navbar -->
				<ul class="navbar-nav">
					<li class="nav-item d-none d-sm-inline-block">
						<!-- Notification -->
						<div class="dropdown">
							<button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="navbarNotificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
								<i class="bi-bell"></i>
								<span class="btn-status btn-sm-status btn-status-danger"></span>
							</button>
							<div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdown" style="width: 25rem;">
								<div class="card">
									<!-- Header -->
									<div class="card-header card-header-content-between">
										<h4 class="card-title mb-0">Notification</h4>
										<!-- Unfold -->
										<div class="dropdown">
											<button type="button" class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" id="navbarNotificationsDropdownSettings" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="bi-three-dots-vertical"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdownSettings">
												<span class="dropdown-header">Settings</span>
												<a class="dropdown-item" href="#">
													<i class="bi-archive dropdown-item-icon"></i> Archive all
												</a>
												<a class="dropdown-item" href="#">
													<i class="bi-check2-all dropdown-item-icon"></i> Mark all as read
												</a>
												<a class="dropdown-item" href="#">
													<i class="bi-toggle-off dropdown-item-icon"></i> Disable
													notifications
												</a>
												<a class="dropdown-item" href="#">
													<i class="bi-gift dropdown-item-icon"></i> What's new?
												</a>
												<div class="dropdown-divider"></div>
												<span class="dropdown-header">Feedback</span>
												<a class="dropdown-item" href="#">
													<i class="bi-chat-left-dots dropdown-item-icon"></i> Report
												</a>
											</div>
										</div>
										<!-- End Unfold -->
									</div>
									<!-- End Header -->
									<!-- Nav -->
									<ul class="nav nav-tabs nav-justified" id="notificationTab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" href="#notificationNavOne" id="notificationNavOne-tab" data-bs-toggle="tab" data-bs-target="#notificationNavOne" role="tab" aria-controls="notificationNavOne" aria-selected="true">Messages (3)</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#notificationNavTwo" id="notificationNavTwo-tab" data-bs-toggle="tab" data-bs-target="#notificationNavTwo" role="tab" aria-controls="notificationNavTwo" aria-selected="false">Archived</a>
										</li>
									</ul>
									<!-- End Nav -->
									<!-- Body -->
									<div class="card-body-height">
										<!-- Tab Content -->
										<div class="tab-content" id="notificationTabContent">
											<div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel" aria-labelledby="notificationNavOne-tab">
												<!-- List Group -->
												<ul class="list-group list-group-flush navbar-card-list-group">
													<li class="list-group-item form-check-select">
														<div class="row">
															<div class="col-auto">
																<div class="d-flex align-items-center">
																	<div class="form-check">
																		<input class="form-check-input" type="checkbox" value="" id="notificationCheck2" checked>
																		<label class="form-check-label" for="notificationCheck2"></label>
																		<span class="form-check-stretched-bg"></span>
																	</div>
																	<div class="avatar avatar-sm avatar-soft-dark avatar-circle">
																		<span class="avatar-initials">K</span>
																	</div>
																</div>
															</div>
															<!-- End Col -->
															<div class="col ms-n2">
																<h5 class="mb-1">Klara Hampton</h5>
																<p class="text-body fs-5">mentioned you in a comment</p>
															</div>
															<!-- End Col -->
															<small class="col-auto text-muted text-cap">10hr</small>
															<!-- End Col -->
														</div>
														<!-- End Row -->
														<a class="stretched-link" href="#"></a>
													</li>
												</ul>
												<!-- End List Group -->
											</div>
											<div class="tab-pane fade" id="notificationNavTwo" role="tabpanel" aria-labelledby="notificationNavTwo-tab">
												<!-- List Group -->
												<ul class="list-group list-group-flush navbar-card-list-group">
													<li class="list-group-item form-check-select">
														<div class="row">
															<div class="col-auto">
																<div class="d-flex align-items-center">
																	<div class="form-check">
																		<input class="form-check-input" type="checkbox" value="" id="notificationCheck6">
																		<label class="form-check-label" for="notificationCheck6"></label>
																		<span class="form-check-stretched-bg"></span>
																	</div>
																	<div class="avatar avatar-sm avatar-soft-dark avatar-circle">
																		<span class="avatar-initials">A</span>
																	</div>
																</div>
															</div>
															<!-- End Col -->
															<div class="col ms-n2">
																<h5 class="mb-1">Anne Richard</h5>
																<p class="text-body fs-5">accepted your invitation to
																	join Notion</p>
															</div>
															<!-- End Col -->
															<small class="col-auto text-muted text-cap">1dy</small>
															<!-- End Col -->
														</div>
														<!-- End Row -->
														<a class="stretched-link" href="#"></a>
													</li>
												</ul>
												<!-- End List Group -->
											</div>
										</div>
										<!-- End Tab Content -->
									</div>
									<!-- End Body -->
									<!-- Card Footer -->
									<a class="card-footer text-center" href="#">
										View all notifications <i class="bi-chevron-right"></i>
									</a>
									<!-- End Card Footer -->
								</div>
							</div>
						</div>
						<!-- End Notification -->
					</li>
					<li class="nav-item d-none d-sm-inline-block">
						<!-- Activity -->
						<button class="btn btn-ghost-secondary btn-icon rounded-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasActivityStream" aria-controls="offcanvasActivityStream">
							<i class="bi-x-diamond"></i>
						</button>
						<!-- Activity -->
					</li>
					<li class="nav-item">
						<!-- Account -->
						<div class="dropdown">
							<a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
								<div class="avatar avatar-sm avatar-circle">
									<img class="avatar-img" src="assets/svg/avatar.svg">
									<span class="avatar-status avatar-sm-status avatar-status-success"></span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account" aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
								<div class="dropdown-item-text">
									<div class="d-flex align-items-center">
										<div class="avatar avatar-sm avatar-circle">
											<img class="avatar-img" src="assets/svg/avatar.svg">
										</div>
										<div class="flex-grow-1 ms-3">
											<h5 class="mb-0">नर्सरी सोल्यूशन</h5>
											<p class="card-text text-body mb-0">Demo Admin</p>
										</div>
									</div>
								</div>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item text-danger" href="?clear_demo_biz_data=true">
									<i class="bi-trash3-fill me-1 align-middle"></i>
									Clear demo nursery data </a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="profile.php">
									<i class="bi-person-fill me-1 align-middle"></i>
									Profile </a>
								<a class="dropdown-item" href="settings.php">
									<i class="bi bi-gear-fill me-1 align-middle"></i>
									Settings </a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item text-danger" href="?logout">
									<i class="bi bi-box-arrow-right me-1 align-middle"></i>
									Logout </a>
							</div>
						</div>
						<!-- End Account -->
					</li>
				</ul>
				<!-- End Navbar -->
			</div>
		</div>
	</header>
	<!-- ========== END HEADER ========== --> <!-- Navbar Vertical -->
	<aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered navbar-light bg-light">
		<div class="navbar-vertical-container">
			<div class="navbar-vertical-footer-offset">
				<!-- Logo -->
				<a class="navbar-brand" href="./">
					<img class="navbar-brand-logo" src="assets/svg/logos/logo.svg" alt="Logo" data-hs-theme-appearance="default">
					<img class="navbar-brand-logo" src="assets/svg/logos/logo.svg" alt="Logo" data-hs-theme-appearance="dark">
				</a>
				<!-- End Logo -->
				<!-- Navbar Vertical Toggle -->
				<button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
					<i class="bi-caret-left-fill navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
					<i class="bi-caret-right-fill navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
				</button>
				<!-- End Navbar Vertical Toggle -->
				<!-- Content -->
				<div class="navbar-vertical-content">
					<div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
						<div class="nav-item">
							<a class="nav-link" href="./">
								<i class="bi-house-door nav-icon"></i>
								<span class="nav-link-title">Dashboard</span>
							</a>
						</div>
						<div id="navbarVerticalMenuPagesMenu">
							<div class="nav-item">
								<a class="nav-link" href="customers.php">
									<i class="bi-people nav-icon"></i>
									<span class="nav-link-title">User Management</span>
								</a>
							</div>
							<!-- <div class="nav-item">
								<a class="nav-link" href="customers.php">
									<i class="bi-people nav-icon"></i>
									<span class="nav-link-title">Sub Admin</span>
								</a>
							</div> -->
							<div class="nav-item">
								<a class="nav-link dropdown-toggle " href="#subadmin" role="button" data-bs-toggle="collapse" data-bs-target="#subadmin" aria-expanded="false" aria-controls="subadmin">
									<i class="bi-people nav-icon"></i>
									<span class="nav-link-title">Sub Admin</span>
								</a>
								<div id="subadmin" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
									<a class="nav-link " href="createsubadmin.php">Create Sub Admin</a>
									<a class="nav-link " href="sowing">Create Staff</a>
									<a class="nav-link " href="">Department</a>
									<a class="nav-link " href="">Permissions</a>
									<a class="nav-link " href="">Branches</a>
								</div>
							</div>
							<div class="nav-item">
								<a class="nav-link dropdown-toggle " href="#inventory" role="button" data-bs-toggle="collapse" data-bs-target="#inventory" aria-expanded="false" aria-controls="inventory">
									<i class="bi-suit-club nav-icon"></i>
									<span class="nav-link-title">Inventory</span>
								</a>
								<div id="inventory" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
									<a class="nav-link " href="products.php">Add Product</a>
									<a class="nav-link " href="">Purchase</a>
									<a class="nav-link " href="">Supplier</a>
									<a class="nav-link " href="">Stocktakes</a>
								</div>
							</div>
							<div class="nav-item">
								<a class="nav-link" href="index.php">
									<i class="bi-tags nav-icon"></i>
									<span class="nav-link-title">Booking Dashboard</span>
								</a>
							</div>
							<div class="nav-item">
								<a class="nav-link" href="bookings.php">
									<i class="bi-tags nav-icon"></i>
									<span class="nav-link-title">Bookings</span>
								</a>
							</div>
							<div class="nav-item">
								<a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="collapse" data-bs-target="#sales" aria-expanded="false" aria-controls="sales">
									<i class="bi-suit-club nav-icon"></i>
									<span class="nav-link-title">Sales Department</span>
								</a>
								<div id="sales" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
									<a class="nav-link " href="projection.php">Projection Management
									</a>
									<a class="nav-link " href="batchassign.php">Batch Assign / Batch Merge
									</a>
								</div>
							</div>
							<div class="nav-item">
								<a class="nav-link" href="sowing.php">
									<i class="bi-flower2 nav-icon"></i>
									<span class="nav-link-title">Sowing Department</span>
								</a>
							</div>
							<div class="nav-item">
								<a class="nav-link" href="sowing.php">
									<i class="bi-flower2 nav-icon"></i>
									<span class="nav-link-title">Production Department</span>
								</a>
							</div>
							<div class="nav-item">
								<a class="nav-link" href="dispatch.php">
									<i class="bi-truck nav-icon"></i>
									<span class="nav-link-title">Dispatch Department</span>
								</a>
							</div>
							<div class="nav-item">
								<a class="nav-link" href="sowing.php">
									<i class="bi-flower2 nav-icon"></i>
									<span class="nav-link-title">Transport Department</span>
								</a>
							</div>
							<div class="nav-item">
								<a class="nav-link" href="sowing.php">
									<i class="bi-flower2 nav-icon"></i>
									<span class="nav-link-title">HR Management</span>
								</a>
							</div>
							<div class="nav-item">
								<a class="nav-link" href="sowing.php">
									<i class="bi-flower2 nav-icon"></i>
									<span class="nav-link-title">Accounts Department</span>
								</a>
							</div>
							<div class="nav-item">
								<a class="nav-link dropdown-toggle " href="#Ledger_manage" role="button" data-bs-toggle="collapse" data-bs-target="#Ledger_manage" aria-expanded="false" aria-controls="Ledger_manage">
									<i class="bi-suit-club nav-icon"></i>
									<span class="nav-link-title">Ledger Management</span>
								</a>
								<div id="Ledger_manage" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
									<a class="nav-link " href="sowing.php">Crop</a>
									<a class="nav-link " href="">Variety</a>
									<a class="nav-link " href="">Tray Size</a>
								</div>
							</div>
							<div class="nav-item">
								<a class="nav-link" href="custumpush.php">
									<i class="bi-stickies nav-icon"></i>
									<span class="nav-link-title">Custum Push</span>
								</a>
							</div>
							<div class="nav-item">
								<a class="nav-link" href="purchase.php">
									<i class="bi-cart-plus nav-icon"></i>
									<span class="nav-link-title">Purchase</span>
								</a>
							</div>
							<div class="nav-item">
								<a class="nav-link" href="billing.php">
									<i class="bi-cash-coin nav-icon"></i>
									<span class="nav-link-title">Billing</span>
								</a>
							</div>
							<div class="nav-item">
								<a class="nav-link" href="suppliers.php">
									<i class="bi-truck nav-icon"></i>
									<span class="nav-link-title">Suppliers</span>
								</a>
							</div>
							<div class="nav-item">
								<a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesEmployeesMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEmployeesMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEmployeesMenu">
									<i class="bi-people nav-icon"></i>
									<span class="nav-link-title">Employee</span>
								</a>
								<div id="navbarVerticalMenuPagesEmployeesMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
									<a class="nav-link " href="employees.php">View All</a>
									<div>
										<div class="nav-item">
											<a class="nav-link" href="attendance.php">Attendance</a>
										</div>
										<div class="nav-item">
											<a class="nav-link" href="advance.php">Advance / Borrowing</a>
										</div>
										<div class="nav-item">
											<a class="nav-link" href="salary.php">Salary</a>
										</div>
									</div>
								</div>
							</div>
							<div class="nav-item">
								<a class="nav-link" href="expenses.php">
									<i class="bi-currency-exchange nav-icon"></i>
									<span class="nav-link-title">Expenses</span>
								</a>
							</div>
							<div class="nav-item">
								<a class="nav-link" href="reports.php">
									<i class="bi-stickies nav-icon"></i>
									<span class="nav-link-title">Reports</span>
								</a>
							</div>
							<div class="nav-item">
								<a class="nav-link" href="users.php">
									<i class="bi-person-bounding-box nav-icon"></i>
									<span class="nav-link-title">Users</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- End Content -->
				<!-- Footer -->
				<div class="navbar-vertical-footer">
					<ul class="navbar-vertical-footer-list">
						<li class="navbar-vertical-footer-list-item">
							<!-- Style Switcher -->
							<div class="dropdown dropup">
								<button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
								</button>
								<div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectThemeDropdown">
									<a class="dropdown-item" href="#" data-icon="bi-moon-stars" data-value="auto">
										<i class="bi-moon-stars me-2"></i>
										<span class="text-truncate" title="auto (system default)">auto (System
											default)</span>
									</a>
									<a class="dropdown-item" href="#" data-icon="bi-brightness-high" data-value="default">
										<i class="bi-brightness-high me-2"></i>
										<span class="text-truncate" title="Default (light mode)">Default (light
											mode)</span>
									</a>
									<a class="dropdown-item active" href="#" data-icon="bi-moon" data-value="dark">
										<i class="bi-moon me-2"></i>
										<span class="text-truncate" title="dark mode">dark mode</span>
									</a>
								</div>
							</div>
							<!-- End Style Switcher -->
						</li>
						<li class="navbar-vertical-footer-list-item">
							<!-- Other Links -->
							<div class="dropdown dropup">
								<button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="otherLinksDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
									<i class="bi-info-circle"></i>
								</button>
								<div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="otherLinksDropdown">
									<span class="dropdown-header">Help</span>
									<a class="dropdown-item" href="#">
										<i class="bi-journals dropdown-item-icon"></i>
										<span class="text-truncate" title="Resources &amp; tutorials">Resources &
											tutorials</span>
									</a>
									<a class="dropdown-item" href="#">
										<i class="bi-gift dropdown-item-icon"></i>
										<span class="text-truncate" title="What's new?">What's new?</span>
									</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">
										<i class="bi-chat-left-dots dropdown-item-icon align-middle"></i>
										<span class="text-truncate" title="Contact us">Contact us</span>
									</a>
								</div>
							</div>
							<!-- End Other Links -->
						</li>
						<li class="navbar-vertical-footer-list-item">
							<!-- Language -->
							<div class="dropdown dropup">
								<button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectLanguageDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
									<i class="bi bi-translate"></i>
								</button>
								<div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectLanguageDropdown">
									<span class="dropdown-header">Select language</span>
									<a class="dropdown-item" href="javascript:void(0)" onclick="changeLanguage('en')">
										<span class="text-truncate" title="English">English</span>
									</a>
									<a class="dropdown-item" href="javascript:void(0)" onclick="changeLanguage('mr')">
										<span class="text-truncate" title="Marathi (मराठी)">Marathi (मराठी)</span>
									</a>
								</div>
							</div>
							<!-- End Language -->
						</li>
					</ul>
				</div>
				<!-- End Footer -->
			</div>
		</div>
	</aside>
	<!-- End Navbar Vertical --> <!-- ========== MAIN CONTENT ========== -->
	<main id="content" role="main" class="main">