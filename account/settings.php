<?php
include'../connect/connect.php';
session_start();

if(!isset($_SESSION['email'])){
    header('Location:../sign-in-admin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title></title>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="../image/asia-tech-logo-2.png" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="../assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside aside-light aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
					<!--begin::Brand-->
					<div class="aside-logo flex-column-auto" id="kt_aside_logo">
						<!--begin::Logo-->
						<a href="index.html">
							<img alt="Logo" src="../image/asia-tech-logo-3.png" class="h-35px logo" />
						</a>
						<!--end::Logo-->
						<!--begin::Aside toggler-->
						<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
							<span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
									<path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Aside toggler-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside menu-->
					<div class="aside-menu flex-column-fluid">
						<!--begin::Aside Menu-->
						<div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
							<!--begin::Menu-->
							<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
								<div class="menu-item">
									<div class="menu-content">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">ADMIN</span>
									</div>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<a href="../admin">
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
														<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
														<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
														<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Dashboard</span>
										</span>
									</a>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
											<span class="svg-icon svg-icon-2">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z" fill="currentColor"></path>
													<path opacity="0.3" d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z" fill="currentColor"></path>
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Session</span>
										<span class="menu-arrow"></span>
									</span>
								</div>
								<div class="menu-item">
									<div class="menu-content">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">FACULTY AND DEPARTMENT</span>
									</div>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
											<span class="svg-icon svg-icon-2">
												<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z" fill="currentColor"></path>
													<path d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z" fill="currentColor"></path>
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Faculty</span>
										<span class="menu-arrow"></span>
									</span>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
											<span class="svg-icon svg-icon-2">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor"></path>
													<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor"></path>
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Department</span>
										<span class="menu-arrow"></span>
									</span>
								</div>
								<div class="menu-item">
									<div class="menu-content">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">STUDENT SECTION</span>
									</div>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<a href="student/">
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor" />
														<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Student</span>
											<span class="menu-arrow"></span>
										</span>
									</a>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
											<span class="svg-icon svg-icon-2">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor"></path>
													<path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor"></path>
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Courses</span>
										<span class="menu-arrow"></span>
									</span>
								</div>
								<div class="menu-item">
									<div class="menu-content">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">RESULT AND GRADING</span>
									</div>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="currentColor"></path>
													<rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor"></rect>
													<rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor"></rect>
													<rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor"></rect>
													<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor"></path>
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Result</span>
										<span class="menu-arrow"></span>
									</span>
								</div>
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Aside Menu-->
					</div>
					<!--end::Aside menu-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" style="" class="header align-items-stretch">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<!--begin::Aside mobile toggle-->
							<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
								<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Aside mobile toggle-->
							<!--begin::Mobile logo-->
							<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
								<a href="index.html" class="d-lg-none">
									<img alt="Logo" src="../image/asia-tech-logo-1.png" class="h-40px" />
								</a>
							</div>
							<!--end::Mobile logo-->
							<!--begin::Wrapper-->
							<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
								<!--begin::Navbar-->
								<div class="d-flex align-items-stretch" id="kt_header_nav">
								</div>
								<!--end::Navbar-->
								<!--begin::Toolbar wrapper-->
								<div class="d-flex align-items-stretch flex-shrink-0">
									<!--begin::User menu-->
									<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
										<!--begin::Menu wrapper-->
										<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<img src="../assets/media/avatars/300-1.jpg" alt="user" />
										</div>
										<!--begin::User account menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content d-flex align-items-center px-3">
													<!--begin::Avatar-->
													<div class="symbol symbol-50px me-5">
														<img alt="Logo" src="../assets/media/avatars/300-1.jpg" />
													</div>
													<!--end::Avatar-->
													<!--begin::Username-->
													<div class="d-flex flex-column">
														<div class="fw-bolder d-flex align-items-center fs-5">Max Smith</div>
														<a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
													</div>
													<!--end::Username-->
												</div>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="../account/overview.php" class="menu-link px-5">My Profile</a>
											</div>
											<!-- end::Menu item-- -->
											<!-- begin::Menu item -->
											<div class="menu-item px-5 my-1">
												<a href="../account/settings.php" class="menu-link px-5">Account Settings</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="../account/sign-out.php" class="menu-link px-5">Sign Out</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::User account menu-->
										<!--end::Menu wrapper-->
									</div>
									<!--end::User menu-->
								</div>
								<!--end::Toolbar wrapper-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Account Settings</h1>
									<!--end::Title-->
								</div>
								<!--end::Page title-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Navbar-->
								<div class="card mb-5 mb-xl-10">
									<div class="card-body pt-9 pb-0">
										<!--begin::Details-->
										<div class="d-flex flex-wrap flex-sm-nowrap mb-3">
											<!--begin: Pic-->
											<div class="me-7 mb-4">
												<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
													<img src="../assets/media/avatars/300-1.jpg" alt="image" />
													<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
												</div>
											</div>
											<!--end::Pic-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<!--begin::Title-->
												<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
													<!--begin::User-->
													<div class="d-flex flex-column">
														<!--begin::Name-->
														<div class="d-flex align-items-center mb-2">
															<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">Max Smith</a>
														</div>
														<!--end::Name-->
														<!--begin::Info-->
														<div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
															<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
															<span class="svg-icon svg-icon-4 me-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="currentColor" />
																	<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->Administrator</a>
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
															<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
															<span class="svg-icon svg-icon-4 me-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
																	<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->SF, Bay Area</a>
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
															<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
															<span class="svg-icon svg-icon-4 me-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor" />
																	<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->max@kt.com</a>
														</div>
														<!--end::Info-->
													</div>
													<!--end::User-->
												</div>
												<!--end::Title-->
												<!--begin::Stats-->
												<div class="d-flex flex-wrap flex-stack">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column flex-grow-1 pe-8">
														<!--begin::Stats-->
														<div class="d-flex flex-wrap">
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-3 svg-icon-success me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$">0</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-bold fs-6 text-gray-400">Earnings</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																	<span class="svg-icon svg-icon-3 svg-icon-danger me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																			<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="75">0</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-bold fs-6 text-gray-400">Projects</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-3 svg-icon-success me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-bold fs-6 text-gray-400">Success Rate</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Progress-->
													<div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
														<div class="d-flex justify-content-between w-100 mt-auto mb-2">
															<span class="fw-bold fs-6 text-gray-400">Profile Compleation</span>
															<span class="fw-bolder fs-6">50%</span>
														</div>
														<div class="h-5px mx-3 w-100 bg-light mb-3">
															<div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<!--end::Progress-->
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Details-->
										<!--begin::Navs-->
										<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
											<!--begin::Nav item-->
											<li class="nav-item mt-2">
												<a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo1/dist/account/overview.html">Overview</a>
											</li>
											<!--end::Nav item-->
											<!--begin::Nav item-->
											<li class="nav-item mt-2">
												<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="../../demo1/dist/account/settings.html">Settings</a>
											</li>
											<!--end::Nav item-->
										</ul>
										<!--begin::Navs-->
									</div>
								</div>
								<!--end::Navbar-->
								<!--begin::Basic info-->
								<div class="card mb-5 mb-xl-10">
									<!--begin::Card header-->
									<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
										<!--begin::Card title-->
										<div class="card-title m-0">
											<h3 class="fw-bolder m-0">Profile Details</h3>
										</div>
										<!--end::Card title-->
									</div>
									<!--begin::Card header-->
									<!--begin::Content-->
									<div id="kt_account_settings_profile_details" class="collapse show">
										<!--begin::Form-->
										<form id="kt_account_profile_details_form" class="form">
											<!--begin::Card body-->
											<div class="card-body border-top p-9">
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8">
														<!--begin::Image input-->
														<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('../assets/media/svg/avatars/blank.svg')">
															<!--begin::Preview existing avatar-->
															<div class="image-input-wrapper w-125px h-125px" style="background-image: url(../assets/media/avatars/300-1.jpg)"></div>
															<!--end::Preview existing avatar-->
															<!--begin::Label-->
															<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
																<i class="bi bi-pencil-fill fs-7"></i>
																<!--begin::Inputs-->
																<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
																<input type="hidden" name="avatar_remove" />
																<!--end::Inputs-->
															</label>
															<!--end::Label-->
															<!--begin::Cancel-->
															<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
																<i class="bi bi-x fs-2"></i>
															</span>
															<!--end::Cancel-->
															<!--begin::Remove-->
															<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
																<i class="bi bi-x fs-2"></i>
															</span>
															<!--end::Remove-->
														</div>
														<!--end::Image input-->
														<!--begin::Hint-->
														<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
														<!--end::Hint-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">Full Name</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8">
														<!--begin::Row-->
														<div class="row">
															<!--begin::Col-->
															<div class="col-lg-6 fv-row">
																<input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="Max" />
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-lg-6 fv-row">
																<input type="text" name="lname" class="form-control form-control-lg form-control-solid" placeholder="Last name" value="Smith" />
															</div>
															<!--end::Col-->
														</div>
														<!--end::Row-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">Company</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row">
														<input type="text" name="company" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="Keenthemes" />
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-bold fs-6">
														<span class="required">Contact Phone</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
													</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row">
														<input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="044 3276 454 935" />
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-bold fs-6">Company Site</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row">
														<input type="text" name="website" class="form-control form-control-lg form-control-solid" placeholder="Company website" value="keenthemes.com" />
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-bold fs-6">
														<span class="required">Country</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
													</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row">
														<select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country..." class="form-select form-select-solid form-select-lg fw-bold">
															<option value="">Select a Country...</option>
															<option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan</option>
															<option data-kt-flag="flags/aland-islands.svg" value="AX">Aland Islands</option>
															<option data-kt-flag="flags/albania.svg" value="AL">Albania</option>
															<option data-kt-flag="flags/algeria.svg" value="DZ">Algeria</option>
															<option data-kt-flag="flags/american-samoa.svg" value="AS">American Samoa</option>
															<option data-kt-flag="flags/andorra.svg" value="AD">Andorra</option>
															<option data-kt-flag="flags/angola.svg" value="AO">Angola</option>
															<option data-kt-flag="flags/anguilla.svg" value="AI">Anguilla</option>
															<option data-kt-flag="flags/antigua-and-barbuda.svg" value="AG">Antigua and Barbuda</option>
															<option data-kt-flag="flags/argentina.svg" value="AR">Argentina</option>
															<option data-kt-flag="flags/armenia.svg" value="AM">Armenia</option>
															<option data-kt-flag="flags/aruba.svg" value="AW">Aruba</option>
															<option data-kt-flag="flags/australia.svg" value="AU">Australia</option>
															<option data-kt-flag="flags/austria.svg" value="AT">Austria</option>
															<option data-kt-flag="flags/azerbaijan.svg" value="AZ">Azerbaijan</option>
															<option data-kt-flag="flags/bahamas.svg" value="BS">Bahamas</option>
															<option data-kt-flag="flags/bahrain.svg" value="BH">Bahrain</option>
															<option data-kt-flag="flags/bangladesh.svg" value="BD">Bangladesh</option>
															<option data-kt-flag="flags/barbados.svg" value="BB">Barbados</option>
															<option data-kt-flag="flags/belarus.svg" value="BY">Belarus</option>
															<option data-kt-flag="flags/belgium.svg" value="BE">Belgium</option>
															<option data-kt-flag="flags/belize.svg" value="BZ">Belize</option>
															<option data-kt-flag="flags/benin.svg" value="BJ">Benin</option>
															<option data-kt-flag="flags/bermuda.svg" value="BM">Bermuda</option>
															<option data-kt-flag="flags/bhutan.svg" value="BT">Bhutan</option>
															<option data-kt-flag="flags/bolivia.svg" value="BO">Bolivia, Plurinational State of</option>
															<option data-kt-flag="flags/bonaire.svg" value="BQ">Bonaire, Sint Eustatius and Saba</option>
															<option data-kt-flag="flags/bosnia-and-herzegovina.svg" value="BA">Bosnia and Herzegovina</option>
															<option data-kt-flag="flags/botswana.svg" value="BW">Botswana</option>
															<option data-kt-flag="flags/brazil.svg" value="BR">Brazil</option>
															<option data-kt-flag="flags/british-indian-ocean-territory.svg" value="IO">British Indian Ocean Territory</option>
															<option data-kt-flag="flags/brunei.svg" value="BN">Brunei Darussalam</option>
															<option data-kt-flag="flags/bulgaria.svg" value="BG">Bulgaria</option>
															<option data-kt-flag="flags/burkina-faso.svg" value="BF">Burkina Faso</option>
															<option data-kt-flag="flags/burundi.svg" value="BI">Burundi</option>
															<option data-kt-flag="flags/cambodia.svg" value="KH">Cambodia</option>
															<option data-kt-flag="flags/cameroon.svg" value="CM">Cameroon</option>
															<option data-kt-flag="flags/canada.svg" value="CA">Canada</option>
															<option data-kt-flag="flags/cape-verde.svg" value="CV">Cape Verde</option>
															<option data-kt-flag="flags/cayman-islands.svg" value="KY">Cayman Islands</option>
															<option data-kt-flag="flags/central-african-republic.svg" value="CF">Central African Republic</option>
															<option data-kt-flag="flags/chad.svg" value="TD">Chad</option>
															<option data-kt-flag="flags/chile.svg" value="CL">Chile</option>
															<option data-kt-flag="flags/china.svg" value="CN">China</option>
															<option data-kt-flag="flags/christmas-island.svg" value="CX">Christmas Island</option>
															<option data-kt-flag="flags/cocos-island.svg" value="CC">Cocos (Keeling) Islands</option>
															<option data-kt-flag="flags/colombia.svg" value="CO">Colombia</option>
															<option data-kt-flag="flags/comoros.svg" value="KM">Comoros</option>
															<option data-kt-flag="flags/cook-islands.svg" value="CK">Cook Islands</option>
															<option data-kt-flag="flags/costa-rica.svg" value="CR">Costa Rica</option>
															<option data-kt-flag="flags/ivory-coast.svg" value="CI">Côte d'Ivoire</option>
															<option data-kt-flag="flags/croatia.svg" value="HR">Croatia</option>
															<option data-kt-flag="flags/cuba.svg" value="CU">Cuba</option>
															<option data-kt-flag="flags/curacao.svg" value="CW">Curaçao</option>
															<option data-kt-flag="flags/czech-republic.svg" value="CZ">Czech Republic</option>
															<option data-kt-flag="flags/denmark.svg" value="DK">Denmark</option>
															<option data-kt-flag="flags/djibouti.svg" value="DJ">Djibouti</option>
															<option data-kt-flag="flags/dominica.svg" value="DM">Dominica</option>
															<option data-kt-flag="flags/dominican-republic.svg" value="DO">Dominican Republic</option>
															<option data-kt-flag="flags/ecuador.svg" value="EC">Ecuador</option>
															<option data-kt-flag="flags/egypt.svg" value="EG">Egypt</option>
															<option data-kt-flag="flags/el-salvador.svg" value="SV">El Salvador</option>
															<option data-kt-flag="flags/equatorial-guinea.svg" value="GQ">Equatorial Guinea</option>
															<option data-kt-flag="flags/eritrea.svg" value="ER">Eritrea</option>
															<option data-kt-flag="flags/estonia.svg" value="EE">Estonia</option>
															<option data-kt-flag="flags/ethiopia.svg" value="ET">Ethiopia</option>
															<option data-kt-flag="flags/falkland-islands.svg" value="FK">Falkland Islands (Malvinas)</option>
															<option data-kt-flag="flags/fiji.svg" value="FJ">Fiji</option>
															<option data-kt-flag="flags/finland.svg" value="FI">Finland</option>
															<option data-kt-flag="flags/france.svg" value="FR">France</option>
															<option data-kt-flag="flags/french-polynesia.svg" value="PF">French Polynesia</option>
															<option data-kt-flag="flags/gabon.svg" value="GA">Gabon</option>
															<option data-kt-flag="flags/gambia.svg" value="GM">Gambia</option>
															<option data-kt-flag="flags/georgia.svg" value="GE">Georgia</option>
															<option data-kt-flag="flags/germany.svg" value="DE">Germany</option>
															<option data-kt-flag="flags/ghana.svg" value="GH">Ghana</option>
															<option data-kt-flag="flags/gibraltar.svg" value="GI">Gibraltar</option>
															<option data-kt-flag="flags/greece.svg" value="GR">Greece</option>
															<option data-kt-flag="flags/greenland.svg" value="GL">Greenland</option>
															<option data-kt-flag="flags/grenada.svg" value="GD">Grenada</option>
															<option data-kt-flag="flags/guam.svg" value="GU">Guam</option>
															<option data-kt-flag="flags/guatemala.svg" value="GT">Guatemala</option>
															<option data-kt-flag="flags/guernsey.svg" value="GG">Guernsey</option>
															<option data-kt-flag="flags/guinea.svg" value="GN">Guinea</option>
															<option data-kt-flag="flags/guinea-bissau.svg" value="GW">Guinea-Bissau</option>
															<option data-kt-flag="flags/haiti.svg" value="HT">Haiti</option>
															<option data-kt-flag="flags/vatican-city.svg" value="VA">Holy See (Vatican City State)</option>
															<option data-kt-flag="flags/honduras.svg" value="HN">Honduras</option>
															<option data-kt-flag="flags/hong-kong.svg" value="HK">Hong Kong</option>
															<option data-kt-flag="flags/hungary.svg" value="HU">Hungary</option>
															<option data-kt-flag="flags/iceland.svg" value="IS">Iceland</option>
															<option data-kt-flag="flags/india.svg" value="IN">India</option>
															<option data-kt-flag="flags/indonesia.svg" value="ID">Indonesia</option>
															<option data-kt-flag="flags/iran.svg" value="IR">Iran, Islamic Republic of</option>
															<option data-kt-flag="flags/iraq.svg" value="IQ">Iraq</option>
															<option data-kt-flag="flags/ireland.svg" value="IE">Ireland</option>
															<option data-kt-flag="flags/isle-of-man.svg" value="IM">Isle of Man</option>
															<option data-kt-flag="flags/israel.svg" value="IL">Israel</option>
															<option data-kt-flag="flags/italy.svg" value="IT">Italy</option>
															<option data-kt-flag="flags/jamaica.svg" value="JM">Jamaica</option>
															<option data-kt-flag="flags/japan.svg" value="JP">Japan</option>
															<option data-kt-flag="flags/jersey.svg" value="JE">Jersey</option>
															<option data-kt-flag="flags/jordan.svg" value="JO">Jordan</option>
															<option data-kt-flag="flags/kazakhstan.svg" value="KZ">Kazakhstan</option>
															<option data-kt-flag="flags/kenya.svg" value="KE">Kenya</option>
															<option data-kt-flag="flags/kiribati.svg" value="KI">Kiribati</option>
															<option data-kt-flag="flags/north-korea.svg" value="KP">Korea, Democratic People's Republic of</option>
															<option data-kt-flag="flags/kuwait.svg" value="KW">Kuwait</option>
															<option data-kt-flag="flags/kyrgyzstan.svg" value="KG">Kyrgyzstan</option>
															<option data-kt-flag="flags/laos.svg" value="LA">Lao People's Democratic Republic</option>
															<option data-kt-flag="flags/latvia.svg" value="LV">Latvia</option>
															<option data-kt-flag="flags/lebanon.svg" value="LB">Lebanon</option>
															<option data-kt-flag="flags/lesotho.svg" value="LS">Lesotho</option>
															<option data-kt-flag="flags/liberia.svg" value="LR">Liberia</option>
															<option data-kt-flag="flags/libya.svg" value="LY">Libya</option>
															<option data-kt-flag="flags/liechtenstein.svg" value="LI">Liechtenstein</option>
															<option data-kt-flag="flags/lithuania.svg" value="LT">Lithuania</option>
															<option data-kt-flag="flags/luxembourg.svg" value="LU">Luxembourg</option>
															<option data-kt-flag="flags/macao.svg" value="MO">Macao</option>
															<option data-kt-flag="flags/madagascar.svg" value="MG">Madagascar</option>
															<option data-kt-flag="flags/malawi.svg" value="MW">Malawi</option>
															<option data-kt-flag="flags/malaysia.svg" value="MY">Malaysia</option>
															<option data-kt-flag="flags/maldives.svg" value="MV">Maldives</option>
															<option data-kt-flag="flags/mali.svg" value="ML">Mali</option>
															<option data-kt-flag="flags/malta.svg" value="MT">Malta</option>
															<option data-kt-flag="flags/marshall-island.svg" value="MH">Marshall Islands</option>
															<option data-kt-flag="flags/martinique.svg" value="MQ">Martinique</option>
															<option data-kt-flag="flags/mauritania.svg" value="MR">Mauritania</option>
															<option data-kt-flag="flags/mauritius.svg" value="MU">Mauritius</option>
															<option data-kt-flag="flags/mexico.svg" value="MX">Mexico</option>
															<option data-kt-flag="flags/micronesia.svg" value="FM">Micronesia, Federated States of</option>
															<option data-kt-flag="flags/moldova.svg" value="MD">Moldova, Republic of</option>
															<option data-kt-flag="flags/monaco.svg" value="MC">Monaco</option>
															<option data-kt-flag="flags/mongolia.svg" value="MN">Mongolia</option>
															<option data-kt-flag="flags/montenegro.svg" value="ME">Montenegro</option>
															<option data-kt-flag="flags/montserrat.svg" value="MS">Montserrat</option>
															<option data-kt-flag="flags/morocco.svg" value="MA">Morocco</option>
															<option data-kt-flag="flags/mozambique.svg" value="MZ">Mozambique</option>
															<option data-kt-flag="flags/myanmar.svg" value="MM">Myanmar</option>
															<option data-kt-flag="flags/namibia.svg" value="NA">Namibia</option>
															<option data-kt-flag="flags/nauru.svg" value="NR">Nauru</option>
															<option data-kt-flag="flags/nepal.svg" value="NP">Nepal</option>
															<option data-kt-flag="flags/netherlands.svg" value="NL">Netherlands</option>
															<option data-kt-flag="flags/new-zealand.svg" value="NZ">New Zealand</option>
															<option data-kt-flag="flags/nicaragua.svg" value="NI">Nicaragua</option>
															<option data-kt-flag="flags/niger.svg" value="NE">Niger</option>
															<option data-kt-flag="flags/nigeria.svg" value="NG">Nigeria</option>
															<option data-kt-flag="flags/niue.svg" value="NU">Niue</option>
															<option data-kt-flag="flags/norfolk-island.svg" value="NF">Norfolk Island</option>
															<option data-kt-flag="flags/northern-mariana-islands.svg" value="MP">Northern Mariana Islands</option>
															<option data-kt-flag="flags/norway.svg" value="NO">Norway</option>
															<option data-kt-flag="flags/oman.svg" value="OM">Oman</option>
															<option data-kt-flag="flags/pakistan.svg" value="PK">Pakistan</option>
															<option data-kt-flag="flags/palau.svg" value="PW">Palau</option>
															<option data-kt-flag="flags/palestine.svg" value="PS">Palestinian Territory, Occupied</option>
															<option data-kt-flag="flags/panama.svg" value="PA">Panama</option>
															<option data-kt-flag="flags/papua-new-guinea.svg" value="PG">Papua New Guinea</option>
															<option data-kt-flag="flags/paraguay.svg" value="PY">Paraguay</option>
															<option data-kt-flag="flags/peru.svg" value="PE">Peru</option>
															<option data-kt-flag="flags/philippines.svg" value="PH">Philippines</option>
															<option data-kt-flag="flags/poland.svg" value="PL">Poland</option>
															<option data-kt-flag="flags/portugal.svg" value="PT">Portugal</option>
															<option data-kt-flag="flags/puerto-rico.svg" value="PR">Puerto Rico</option>
															<option data-kt-flag="flags/qatar.svg" value="QA">Qatar</option>
															<option data-kt-flag="flags/romania.svg" value="RO">Romania</option>
															<option data-kt-flag="flags/russia.svg" value="RU">Russian Federation</option>
															<option data-kt-flag="flags/rwanda.svg" value="RW">Rwanda</option>
															<option data-kt-flag="flags/st-barts.svg" value="BL">Saint Barthélemy</option>
															<option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="KN">Saint Kitts and Nevis</option>
															<option data-kt-flag="flags/st-lucia.svg" value="LC">Saint Lucia</option>
															<option data-kt-flag="flags/sint-maarten.svg" value="MF">Saint Martin (French part)</option>
															<option data-kt-flag="flags/st-vincent-and-the-grenadines.svg" value="VC">Saint Vincent and the Grenadines</option>
															<option data-kt-flag="flags/samoa.svg" value="WS">Samoa</option>
															<option data-kt-flag="flags/san-marino.svg" value="SM">San Marino</option>
															<option data-kt-flag="flags/sao-tome-and-prince.svg" value="ST">Sao Tome and Principe</option>
															<option data-kt-flag="flags/saudi-arabia.svg" value="SA">Saudi Arabia</option>
															<option data-kt-flag="flags/senegal.svg" value="SN">Senegal</option>
															<option data-kt-flag="flags/serbia.svg" value="RS">Serbia</option>
															<option data-kt-flag="flags/seychelles.svg" value="SC">Seychelles</option>
															<option data-kt-flag="flags/sierra-leone.svg" value="SL">Sierra Leone</option>
															<option data-kt-flag="flags/singapore.svg" value="SG">Singapore</option>
															<option data-kt-flag="flags/sint-maarten.svg" value="SX">Sint Maarten (Dutch part)</option>
															<option data-kt-flag="flags/slovakia.svg" value="SK">Slovakia</option>
															<option data-kt-flag="flags/slovenia.svg" value="SI">Slovenia</option>
															<option data-kt-flag="flags/solomon-islands.svg" value="SB">Solomon Islands</option>
															<option data-kt-flag="flags/somalia.svg" value="SO">Somalia</option>
															<option data-kt-flag="flags/south-africa.svg" value="ZA">South Africa</option>
															<option data-kt-flag="flags/south-korea.svg" value="KR">South Korea</option>
															<option data-kt-flag="flags/south-sudan.svg" value="SS">South Sudan</option>
															<option data-kt-flag="flags/spain.svg" value="ES">Spain</option>
															<option data-kt-flag="flags/sri-lanka.svg" value="LK">Sri Lanka</option>
															<option data-kt-flag="flags/sudan.svg" value="SD">Sudan</option>
															<option data-kt-flag="flags/suriname.svg" value="SR">Suriname</option>
															<option data-kt-flag="flags/swaziland.svg" value="SZ">Swaziland</option>
															<option data-kt-flag="flags/sweden.svg" value="SE">Sweden</option>
															<option data-kt-flag="flags/switzerland.svg" value="CH">Switzerland</option>
															<option data-kt-flag="flags/syria.svg" value="SY">Syrian Arab Republic</option>
															<option data-kt-flag="flags/taiwan.svg" value="TW">Taiwan, Province of China</option>
															<option data-kt-flag="flags/tajikistan.svg" value="TJ">Tajikistan</option>
															<option data-kt-flag="flags/tanzania.svg" value="TZ">Tanzania, United Republic of</option>
															<option data-kt-flag="flags/thailand.svg" value="TH">Thailand</option>
															<option data-kt-flag="flags/togo.svg" value="TG">Togo</option>
															<option data-kt-flag="flags/tokelau.svg" value="TK">Tokelau</option>
															<option data-kt-flag="flags/tonga.svg" value="TO">Tonga</option>
															<option data-kt-flag="flags/trinidad-and-tobago.svg" value="TT">Trinidad and Tobago</option>
															<option data-kt-flag="flags/tunisia.svg" value="TN">Tunisia</option>
															<option data-kt-flag="flags/turkey.svg" value="TR">Turkey</option>
															<option data-kt-flag="flags/turkmenistan.svg" value="TM">Turkmenistan</option>
															<option data-kt-flag="flags/turks-and-caicos.svg" value="TC">Turks and Caicos Islands</option>
															<option data-kt-flag="flags/tuvalu.svg" value="TV">Tuvalu</option>
															<option data-kt-flag="flags/uganda.svg" value="UG">Uganda</option>
															<option data-kt-flag="flags/ukraine.svg" value="UA">Ukraine</option>
															<option data-kt-flag="flags/united-arab-emirates.svg" value="AE">United Arab Emirates</option>
															<option data-kt-flag="flags/united-kingdom.svg" value="GB">United Kingdom</option>
															<option data-kt-flag="flags/united-states.svg" value="US">United States</option>
															<option data-kt-flag="flags/uruguay.svg" value="UY">Uruguay</option>
															<option data-kt-flag="flags/uzbekistan.svg" value="UZ">Uzbekistan</option>
															<option data-kt-flag="flags/vanuatu.svg" value="VU">Vanuatu</option>
															<option data-kt-flag="flags/venezuela.svg" value="VE">Venezuela, Bolivarian Republic of</option>
															<option data-kt-flag="flags/vietnam.svg" value="VN">Vietnam</option>
															<option data-kt-flag="flags/virgin-islands.svg" value="VI">Virgin Islands</option>
															<option data-kt-flag="flags/yemen.svg" value="YE">Yemen</option>
															<option data-kt-flag="flags/zambia.svg" value="ZM">Zambia</option>
															<option data-kt-flag="flags/zimbabwe.svg" value="ZW">Zimbabwe</option>
														</select>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">Language</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row">
														<!--begin::Input-->
														<select name="language" aria-label="Select a Language" data-control="select2" data-placeholder="Select a language..." class="form-select form-select-solid form-select-lg">
															<option value="">Select a Language...</option>
															<option data-kt-flag="flags/indonesia.svg" value="id">Bahasa Indonesia - Indonesian</option>
															<option data-kt-flag="flags/malaysia.svg" value="msa">Bahasa Melayu - Malay</option>
															<option data-kt-flag="flags/canada.svg" value="ca">Català - Catalan</option>
															<option data-kt-flag="flags/czech-republic.svg" value="cs">Čeština - Czech</option>
															<option data-kt-flag="flags/netherlands.svg" value="da">Dansk - Danish</option>
															<option data-kt-flag="flags/germany.svg" value="de">Deutsch - German</option>
															<option data-kt-flag="flags/united-kingdom.svg" value="en">English</option>
															<option data-kt-flag="flags/united-kingdom.svg" value="en-gb">English UK - British English</option>
															<option data-kt-flag="flags/spain.svg" value="es">Español - Spanish</option>
															<option data-kt-flag="flags/philippines.svg" value="fil">Filipino</option>
															<option data-kt-flag="flags/france.svg" value="fr">Français - French</option>
															<option data-kt-flag="flags/gabon.svg" value="ga">Gaeilge - Irish (beta)</option>
															<option data-kt-flag="flags/greenland.svg" value="gl">Galego - Galician (beta)</option>
															<option data-kt-flag="flags/croatia.svg" value="hr">Hrvatski - Croatian</option>
															<option data-kt-flag="flags/italy.svg" value="it">Italiano - Italian</option>
															<option data-kt-flag="flags/hungary.svg" value="hu">Magyar - Hungarian</option>
															<option data-kt-flag="flags/netherlands.svg" value="nl">Nederlands - Dutch</option>
															<option data-kt-flag="flags/norway.svg" value="no">Norsk - Norwegian</option>
															<option data-kt-flag="flags/poland.svg" value="pl">Polski - Polish</option>
															<option data-kt-flag="flags/portugal.svg" value="pt">Português - Portuguese</option>
															<option data-kt-flag="flags/romania.svg" value="ro">Română - Romanian</option>
															<option data-kt-flag="flags/slovakia.svg" value="sk">Slovenčina - Slovak</option>
															<option data-kt-flag="flags/finland.svg" value="fi">Suomi - Finnish</option>
															<option data-kt-flag="flags/el-salvador.svg" value="sv">Svenska - Swedish</option>
															<option data-kt-flag="flags/virgin-islands.svg" value="vi">Tiếng Việt - Vietnamese</option>
															<option data-kt-flag="flags/turkey.svg" value="tr">Türkçe - Turkish</option>
															<option data-kt-flag="flags/greece.svg" value="el">Ελληνικά - Greek</option>
															<option data-kt-flag="flags/bulgaria.svg" value="bg">Български език - Bulgarian</option>
															<option data-kt-flag="flags/russia.svg" value="ru">Русский - Russian</option>
															<option data-kt-flag="flags/suriname.svg" value="sr">Српски - Serbian</option>
															<option data-kt-flag="flags/ukraine.svg" value="uk">Українська мова - Ukrainian</option>
															<option data-kt-flag="flags/israel.svg" value="he">עִבְרִית - Hebrew</option>
															<option data-kt-flag="flags/pakistan.svg" value="ur">اردو - Urdu (beta)</option>
															<option data-kt-flag="flags/argentina.svg" value="ar">العربية - Arabic</option>
															<option data-kt-flag="flags/argentina.svg" value="fa">فارسی - Persian</option>
															<option data-kt-flag="flags/mauritania.svg" value="mr">मराठी - Marathi</option>
															<option data-kt-flag="flags/india.svg" value="hi">हिन्दी - Hindi</option>
															<option data-kt-flag="flags/bangladesh.svg" value="bn">বাংলা - Bangla</option>
															<option data-kt-flag="flags/guam.svg" value="gu">ગુજરાતી - Gujarati</option>
															<option data-kt-flag="flags/india.svg" value="ta">தமிழ் - Tamil</option>
															<option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="kn">ಕನ್ನಡ - Kannada</option>
															<option data-kt-flag="flags/thailand.svg" value="th">ภาษาไทย - Thai</option>
															<option data-kt-flag="flags/south-korea.svg" value="ko">한국어 - Korean</option>
															<option data-kt-flag="flags/japan.svg" value="ja">日本語 - Japanese</option>
															<option data-kt-flag="flags/china.svg" value="zh-cn">简体中文 - Simplified Chinese</option>
															<option data-kt-flag="flags/taiwan.svg" value="zh-tw">繁體中文 - Traditional Chinese</option>
														</select>
														<!--end::Input-->
														<!--begin::Hint-->
														<div class="form-text">Please select a preferred language, including date, time, and number formatting.</div>
														<!--end::Hint-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">Time Zone</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row">
														<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="Select a timezone.." class="form-select form-select-solid form-select-lg">
															<option value="">Select a Timezone..</option>
															<option data-bs-offset="-39600" value="International Date Line West">(GMT-11:00) International Date Line West</option>
															<option data-bs-offset="-39600" value="Midway Island">(GMT-11:00) Midway Island</option>
															<option data-bs-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
															<option data-bs-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii</option>
															<option data-bs-offset="-28800" value="Alaska">(GMT-08:00) Alaska</option>
															<option data-bs-offset="-25200" value="Pacific Time (US &amp; Canada)">(GMT-07:00) Pacific Time (US &amp; Canada)</option>
															<option data-bs-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana</option>
															<option data-bs-offset="-25200" value="Arizona">(GMT-07:00) Arizona</option>
															<option data-bs-offset="-21600" value="Mountain Time (US &amp; Canada)">(GMT-06:00) Mountain Time (US &amp; Canada)</option>
															<option data-bs-offset="-21600" value="Chihuahua">(GMT-06:00) Chihuahua</option>
															<option data-bs-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan</option>
															<option data-bs-offset="-21600" value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
															<option data-bs-offset="-21600" value="Central America">(GMT-06:00) Central America</option>
															<option data-bs-offset="-18000" value="Central Time (US &amp; Canada)">(GMT-05:00) Central Time (US &amp; Canada)</option>
															<option data-bs-offset="-18000" value="Guadalajara">(GMT-05:00) Guadalajara</option>
															<option data-bs-offset="-18000" value="Mexico City">(GMT-05:00) Mexico City</option>
															<option data-bs-offset="-18000" value="Monterrey">(GMT-05:00) Monterrey</option>
															<option data-bs-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
															<option data-bs-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
															<option data-bs-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
															<option data-bs-offset="-14400" value="Eastern Time (US &amp; Canada)">(GMT-04:00) Eastern Time (US &amp; Canada)</option>
															<option data-bs-offset="-14400" value="Indiana (East)">(GMT-04:00) Indiana (East)</option>
															<option data-bs-offset="-14400" value="Caracas">(GMT-04:00) Caracas</option>
															<option data-bs-offset="-14400" value="La Paz">(GMT-04:00) La Paz</option>
															<option data-bs-offset="-14400" value="Georgetown">(GMT-04:00) Georgetown</option>
															<option data-bs-offset="-10800" value="Atlantic Time (Canada)">(GMT-03:00) Atlantic Time (Canada)</option>
															<option data-bs-offset="-10800" value="Santiago">(GMT-03:00) Santiago</option>
															<option data-bs-offset="-10800" value="Brasilia">(GMT-03:00) Brasilia</option>
															<option data-bs-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
															<option data-bs-offset="-9000" value="Newfoundland">(GMT-02:30) Newfoundland</option>
															<option data-bs-offset="-7200" value="Greenland">(GMT-02:00) Greenland</option>
															<option data-bs-offset="-7200" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
															<option data-bs-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
															<option data-bs-offset="0" value="Azores">(GMT) Azores</option>
															<option data-bs-offset="0" value="Monrovia">(GMT) Monrovia</option>
															<option data-bs-offset="0" value="UTC">(GMT) UTC</option>
															<option data-bs-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
															<option data-bs-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh</option>
															<option data-bs-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
															<option data-bs-offset="3600" value="London">(GMT+01:00) London</option>
															<option data-bs-offset="3600" value="Casablanca">(GMT+01:00) Casablanca</option>
															<option data-bs-offset="3600" value="West Central Africa">(GMT+01:00) West Central Africa</option>
															<option data-bs-offset="7200" value="Belgrade">(GMT+02:00) Belgrade</option>
															<option data-bs-offset="7200" value="Bratislava">(GMT+02:00) Bratislava</option>
															<option data-bs-offset="7200" value="Budapest">(GMT+02:00) Budapest</option>
															<option data-bs-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana</option>
															<option data-bs-offset="7200" value="Prague">(GMT+02:00) Prague</option>
															<option data-bs-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo</option>
															<option data-bs-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
															<option data-bs-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
															<option data-bs-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
															<option data-bs-offset="7200" value="Brussels">(GMT+02:00) Brussels</option>
															<option data-bs-offset="7200" value="Copenhagen">(GMT+02:00) Copenhagen</option>
															<option data-bs-offset="7200" value="Madrid">(GMT+02:00) Madrid</option>
															<option data-bs-offset="7200" value="Paris">(GMT+02:00) Paris</option>
															<option data-bs-offset="7200" value="Amsterdam">(GMT+02:00) Amsterdam</option>
															<option data-bs-offset="7200" value="Berlin">(GMT+02:00) Berlin</option>
															<option data-bs-offset="7200" value="Bern">(GMT+02:00) Bern</option>
															<option data-bs-offset="7200" value="Rome">(GMT+02:00) Rome</option>
															<option data-bs-offset="7200" value="Stockholm">(GMT+02:00) Stockholm</option>
															<option data-bs-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
															<option data-bs-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
															<option data-bs-offset="7200" value="Harare">(GMT+02:00) Harare</option>
															<option data-bs-offset="7200" value="Pretoria">(GMT+02:00) Pretoria</option>
															<option data-bs-offset="10800" value="Bucharest">(GMT+03:00) Bucharest</option>
															<option data-bs-offset="10800" value="Helsinki">(GMT+03:00) Helsinki</option>
															<option data-bs-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
															<option data-bs-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
															<option data-bs-offset="10800" value="Riga">(GMT+03:00) Riga</option>
															<option data-bs-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
															<option data-bs-offset="10800" value="Tallinn">(GMT+03:00) Tallinn</option>
															<option data-bs-offset="10800" value="Vilnius">(GMT+03:00) Vilnius</option>
															<option data-bs-offset="10800" value="Athens">(GMT+03:00) Athens</option>
															<option data-bs-offset="10800" value="Istanbul">(GMT+03:00) Istanbul</option>
															<option data-bs-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
															<option data-bs-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem</option>
															<option data-bs-offset="10800" value="Moscow">(GMT+03:00) Moscow</option>
															<option data-bs-offset="10800" value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
															<option data-bs-offset="10800" value="Volgograd">(GMT+03:00) Volgograd</option>
															<option data-bs-offset="10800" value="Kuwait">(GMT+03:00) Kuwait</option>
															<option data-bs-offset="10800" value="Riyadh">(GMT+03:00) Riyadh</option>
															<option data-bs-offset="10800" value="Nairobi">(GMT+03:00) Nairobi</option>
															<option data-bs-offset="10800" value="Baghdad">(GMT+03:00) Baghdad</option>
															<option data-bs-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
															<option data-bs-offset="14400" value="Muscat">(GMT+04:00) Muscat</option>
															<option data-bs-offset="14400" value="Baku">(GMT+04:00) Baku</option>
															<option data-bs-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi</option>
															<option data-bs-offset="14400" value="Yerevan">(GMT+04:00) Yerevan</option>
															<option data-bs-offset="16200" value="Tehran">(GMT+04:30) Tehran</option>
															<option data-bs-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
															<option data-bs-offset="18000" value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
															<option data-bs-offset="18000" value="Islamabad">(GMT+05:00) Islamabad</option>
															<option data-bs-offset="18000" value="Karachi">(GMT+05:00) Karachi</option>
															<option data-bs-offset="18000" value="Tashkent">(GMT+05:00) Tashkent</option>
															<option data-bs-offset="19800" value="Chennai">(GMT+05:30) Chennai</option>
															<option data-bs-offset="19800" value="Kolkata">(GMT+05:30) Kolkata</option>
															<option data-bs-offset="19800" value="Mumbai">(GMT+05:30) Mumbai</option>
															<option data-bs-offset="19800" value="New Delhi">(GMT+05:30) New Delhi</option>
															<option data-bs-offset="19800" value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
															<option data-bs-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu</option>
															<option data-bs-offset="21600" value="Astana">(GMT+06:00) Astana</option>
															<option data-bs-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
															<option data-bs-offset="21600" value="Almaty">(GMT+06:00) Almaty</option>
															<option data-bs-offset="21600" value="Urumqi">(GMT+06:00) Urumqi</option>
															<option data-bs-offset="23400" value="Rangoon">(GMT+06:30) Rangoon</option>
															<option data-bs-offset="25200" value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
															<option data-bs-offset="25200" value="Bangkok">(GMT+07:00) Bangkok</option>
															<option data-bs-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
															<option data-bs-offset="25200" value="Jakarta">(GMT+07:00) Jakarta</option>
															<option data-bs-offset="25200" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
															<option data-bs-offset="28800" value="Beijing">(GMT+08:00) Beijing</option>
															<option data-bs-offset="28800" value="Chongqing">(GMT+08:00) Chongqing</option>
															<option data-bs-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong</option>
															<option data-bs-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
															<option data-bs-offset="28800" value="Singapore">(GMT+08:00) Singapore</option>
															<option data-bs-offset="28800" value="Taipei">(GMT+08:00) Taipei</option>
															<option data-bs-offset="28800" value="Perth">(GMT+08:00) Perth</option>
															<option data-bs-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk</option>
															<option data-bs-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
															<option data-bs-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
															<option data-bs-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
															<option data-bs-offset="32400" value="Sapporo">(GMT+09:00) Sapporo</option>
															<option data-bs-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
															<option data-bs-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk</option>
															<option data-bs-offset="34200" value="Darwin">(GMT+09:30) Darwin</option>
															<option data-bs-offset="34200" value="Adelaide">(GMT+09:30) Adelaide</option>
															<option data-bs-offset="36000" value="Canberra">(GMT+10:00) Canberra</option>
															<option data-bs-offset="36000" value="Melbourne">(GMT+10:00) Melbourne</option>
															<option data-bs-offset="36000" value="Sydney">(GMT+10:00) Sydney</option>
															<option data-bs-offset="36000" value="Brisbane">(GMT+10:00) Brisbane</option>
															<option data-bs-offset="36000" value="Hobart">(GMT+10:00) Hobart</option>
															<option data-bs-offset="36000" value="Vladivostok">(GMT+10:00) Vladivostok</option>
															<option data-bs-offset="36000" value="Guam">(GMT+10:00) Guam</option>
															<option data-bs-offset="36000" value="Port Moresby">(GMT+10:00) Port Moresby</option>
															<option data-bs-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon Is.</option>
															<option data-bs-offset="39600" value="Magadan">(GMT+11:00) Magadan</option>
															<option data-bs-offset="39600" value="New Caledonia">(GMT+11:00) New Caledonia</option>
															<option data-bs-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
															<option data-bs-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka</option>
															<option data-bs-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
															<option data-bs-offset="43200" value="Auckland">(GMT+12:00) Auckland</option>
															<option data-bs-offset="43200" value="Wellington">(GMT+12:00) Wellington</option>
															<option data-bs-offset="46800" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
														</select>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-bold fs-6">Currency</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row">
														<select name="currnecy" aria-label="Select a Currency" data-control="select2" data-placeholder="Select a currency.." class="form-select form-select-solid form-select-lg">
															<option value="">Select a currency..</option>
															<option data-kt-flag="flags/united-states.svg" value="USD">
															<b>USD</b>&#160;-&#160;USA dollar</option>
															<option data-kt-flag="flags/united-kingdom.svg" value="GBP">
															<b>GBP</b>&#160;-&#160;British pound</option>
															<option data-kt-flag="flags/australia.svg" value="AUD">
															<b>AUD</b>&#160;-&#160;Australian dollar</option>
															<option data-kt-flag="flags/japan.svg" value="JPY">
															<b>JPY</b>&#160;-&#160;Japanese yen</option>
															<option data-kt-flag="flags/sweden.svg" value="SEK">
															<b>SEK</b>&#160;-&#160;Swedish krona</option>
															<option data-kt-flag="flags/canada.svg" value="CAD">
															<b>CAD</b>&#160;-&#160;Canadian dollar</option>
															<option data-kt-flag="flags/switzerland.svg" value="CHF">
															<b>CHF</b>&#160;-&#160;Swiss franc</option>
														</select>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">Communication</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row">
														<!--begin::Options-->
														<div class="d-flex align-items-center mt-3">
															<!--begin::Option-->
															<label class="form-check form-check-inline form-check-solid me-5">
																<input class="form-check-input" name="communication[]" type="checkbox" value="1" />
																<span class="fw-bold ps-2 fs-6">Email</span>
															</label>
															<!--end::Option-->
															<!--begin::Option-->
															<label class="form-check form-check-inline form-check-solid">
																<input class="form-check-input" name="communication[]" type="checkbox" value="2" />
																<span class="fw-bold ps-2 fs-6">Phone</span>
															</label>
															<!--end::Option-->
														</div>
														<!--end::Options-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-0">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-bold fs-6">Allow Marketing</label>
													<!--begin::Label-->
													<!--begin::Label-->
													<div class="col-lg-8 d-flex align-items-center">
														<div class="form-check form-check-solid form-switch fv-row">
															<input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" checked="checked" />
															<label class="form-check-label" for="allowmarketing"></label>
														</div>
													</div>
													<!--begin::Label-->
												</div>
												<!--end::Input group-->
											</div>
											<!--end::Card body-->
											<!--begin::Actions-->
											<div class="card-footer d-flex justify-content-end py-6 px-9">
												<button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
												<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
											</div>
											<!--end::Actions-->
										</form>
										<!--end::Form-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Basic info-->
								<!--begin::Deactivate Account-->
								<div class="card">
									<!--begin::Card header-->
									<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
										<div class="card-title m-0">
											<h3 class="fw-bolder m-0">Deactivate Account</h3>
										</div>
									</div>
									<!--end::Card header-->
									<!--begin::Content-->
									<div id="kt_account_settings_deactivate" class="collapse show">
										<!--begin::Form-->
										<form id="kt_account_deactivate_form" class="form">
											<!--begin::Card body-->
											<div class="card-body border-top p-9">
												<!--begin::Notice-->
												<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
													<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
															<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Wrapper-->
													<div class="d-flex flex-stack flex-grow-1">
														<!--begin::Content-->
														<div class="fw-bold">
															<h4 class="text-gray-900 fw-bolder">You Are Deactivating Your Account</h4>
															<div class="fs-6 text-gray-700">For extra security, this requires you to confirm your email or phone number when you reset yousignr password.
															<br />
															<a class="fw-bolder" href="#">Learn more</a></div>
														</div>
														<!--end::Content-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Notice-->
												<!--begin::Form input row-->
												<div class="form-check form-check-solid fv-row">
													<input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" />
													<label class="form-check-label fw-bold ps-2 fs-6" for="deactivate">I confirm my account deactivation</label>
												</div>
												<!--end::Form input row-->
											</div>
											<!--end::Card body-->
											<!--begin::Card footer-->
											<div class="card-footer d-flex justify-content-end py-6 px-9">
												<button id="kt_account_deactivate_account_submit" type="submit" class="btn btn-danger fw-bold">Deactivate Account</button>
											</div>
											<!--end::Card footer-->
										</form>
										<!--end::Form-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Deactivate Account-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-bold me-1">©</span>
								<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">2022 Student Grading System</a>
							</div>
							<!--end::Copyright-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "../assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="../assets/plugins/global/plugins.bundle.js"></script>
		<script src="../assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="../assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="../assets/js/custom/account/settings/signin-methods.js"></script>
		<script src="../assets/js/custom/account/settings/profile-details.js"></script>
		<script src="../assets/js/custom/account/settings/deactivate-account.js"></script>
		<script src="../assets/js/widgets.bundle.js"></script>
		<script src="../assets/js/custom/widgets.js"></script>
		<script src="../assets/js/custom/apps/chat/chat.js"></script>
		<script src="../assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="../assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="../assets/js/custom/utilities/modals/offer-a-deal/type.js"></script>
		<script src="../assets/js/custom/utilities/modals/offer-a-deal/details.js"></script>
		<script src="../assets/js/custom/utilities/modals/offer-a-deal/finance.js"></script>
		<script src="../assets/js/custom/utilities/modals/offer-a-deal/complete.js"></script>
		<script src="../assets/js/custom/utilities/modals/offer-a-deal/main.js"></script>
		<script src="../assets/js/custom/utilities/modals/two-factor-authentication.js"></script>
		<script src="../assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>