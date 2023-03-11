<?php
	include'../connect/connect.php';
	session_start();

	if(!isset($_SESSION['email'])){
	    header('Location:../');
	}

	$staff_id = $_SESSION['admin']['m_name'];
	$f_name = $_SESSION['admin']['f_name'];
	$m_name = $_SESSION['admin']['m_name'];
	$l_name = $_SESSION['admin']['l_name'];
	$phone_number = $_SESSION['admin']['contact_number'];
	$email = $_SESSION['admin']['email'];
	$status = $_SESSION['admin']['status'];
	$fullName = $f_name . (!empty($m_name) ? ' ' . $m_name . ' ' : ' ') . $l_name;
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
						<a href="../">
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
									<a href="?page=dashboard">
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
														<rect opacity="0.5" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
														<rect opacity="0.5" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
														<rect opacity="0.5" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Dashboard</span>
											<!-- <span class="menu-arrow"></span> -->
										</span>
									</a>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<a href="?page=semester">
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.5" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor"/>
													<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor"/>
												</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Semester</span>
											<!-- <span class="menu-arrow"></span> -->
										</span>
									</a>
								</div>
								<div class="menu-item">
									<div class="menu-content">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">DEPARTMENT & FACULTY</span>
									</div>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<a href="?page=department">
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor"/>
														<path opacity="0.5" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor"/>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Department</span>
											<!-- <span class="menu-arrow"></span> -->
										</span>
									</a>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<a href="?page=faculty">
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M6 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H6C6.6 2 7 2.4 7 3V6C7 6.6 6.6 7 6 7Z" fill="currentColor"/>
														<path opacity="0.5" d="M13 7H10C9.4 7 9 6.6 9 6V3C9 2.4 9.4 2 10 2H13C13.6 2 14 2.4 14 3V6C14 6.6 13.6 7 13 7ZM21 6V3C21 2.4 20.6 2 20 2H17C16.4 2 16 2.4 16 3V6C16 6.6 16.4 7 17 7H20C20.6 7 21 6.6 21 6ZM7 13V10C7 9.4 6.6 9 6 9H3C2.4 9 2 9.4 2 10V13C2 13.6 2.4 14 3 14H6C6.6 14 7 13.6 7 13ZM14 13V10C14 9.4 13.6 9 13 9H10C9.4 9 9 9.4 9 10V13C9 13.6 9.4 14 10 14H13C13.6 14 14 13.6 14 13ZM21 13V10C21 9.4 20.6 9 20 9H17C16.4 9 16 9.4 16 10V13C16 13.6 16.4 14 17 14H20C20.6 14 21 13.6 21 13ZM7 20V17C7 16.4 6.6 16 6 16H3C2.4 16 2 16.4 2 17V20C2 20.6 2.4 21 3 21H6C6.6 21 7 20.6 7 20ZM14 20V17C14 16.4 13.6 16 13 16H10C9.4 16 9 16.4 9 17V20C9 20.6 9.4 21 10 21H13C13.6 21 14 20.6 14 20ZM21 20V17C21 16.4 20.6 16 20 16H17C16.4 16 16 16.4 16 17V20C16 20.6 16.4 21 17 21H20C20.6 21 21 20.6 21 20Z" fill="currentColor"/>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Faculty</span>
											<!-- <span class="menu-arrow"></span> -->
										</span>
									</a>
								</div>
								<div class="menu-item">
									<div class="menu-content">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">STUDENT SECTION</span>
									</div>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<a href="?page=student">
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor"/>
														<path opacity="0.5" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor"/>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Student</span>
											<!-- <span class="menu-arrow"></span> -->
										</span>
									</a>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<a href="?page=subject">
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="currentColor" />
												        <rect fill="currentColor" opacity="0.5" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"/>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Subject</span>
											<!-- <span class="menu-arrow"></span> -->
										</span>
									</a>
								</div>
								<div class="menu-item">
									<div class="menu-content">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">GRADING & RESULT</span>
									</div>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<a href="?page=grading">
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon-->
												<span class="svg-icon svg-icon-1">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.5" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13.5L12.5 13V10C12.5 9.4 12.6 9.5 12 9.5C11.4 9.5 11.5 9.4 11.5 10L11 13L8 13.5C7.4 13.5 7 13.4 7 14C7 14.6 7.4 14.5 8 14.5H11V18C11 18.6 11.4 19 12 19C12.6 19 12.5 18.6 12.5 18V14.5L16 14C16.6 14 17 14.6 17 14C17 13.4 16.6 13.5 16 13.5Z" fill="currentColor"/>
														<rect x="11" y="19" width="10" height="2" rx="1" transform="rotate(-90 11 19)" fill="currentColor"/>
														<rect x="7" y="13" width="10" height="2" rx="1" fill="currentColor"/>
														<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor"/>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Grading</span>
											<!-- <span class="menu-arrow"></span> -->
										</span>
									</a>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<a href="?page=result">
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon-->
												<span class="svg-icon svg-icon-1">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.5" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM11.7 17.7L16 14C16.4 13.6 16.4 12.9 16 12.5C15.6 12.1 15.4 12.6 15 13L11 16L9 15C8.6 14.6 8.4 14.1 8 14.5C7.6 14.9 8.1 15.6 8.5 16L10.3 17.7C10.5 17.9 10.8 18 11 18C11.2 18 11.5 17.9 11.7 17.7Z" fill="currentColor"/>
														<path d="M10.4343 15.4343L9.25 14.25C8.83579 13.8358 8.16421 13.8358 7.75 14.25C7.33579 14.6642 7.33579 15.3358 7.75 15.75L10.2929 18.2929C10.6834 18.6834 11.3166 18.6834 11.7071 18.2929L16.25 13.75C16.6642 13.3358 16.6642 12.6642 16.25 12.25C15.8358 11.8358 15.1642 11.8358 14.75 12.25L11.5657 15.4343C11.2533 15.7467 10.7467 15.7467 10.4343 15.4343Z" fill="currentColor"/>
														<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor"/>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Result</span>
											<!-- <span class="menu-arrow"></span> -->
										</span>
									</a>
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
								<a href="?page=dashboard" class="d-lg-none">
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
											<img src="../image/user-icon-circle.png" alt="user" />
										</div>
										<!--begin::User account menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content d-flex align-items-center px-3">
													<!--begin::Username-->
													<div class="d-flex flex-column">
														<div class="fw-bolder d-flex align-items-center fs-5"><?=$fullName?></div>
														<a href="#" class="fw-bold text-muted fs-7"><?=$email?></a>
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
												<a href="?page=overview" class="menu-link px-5">My Profile</a>
											</div>
											<!-- end::Menu item-- -->
											<!-- begin::Menu item -->
											<div class="menu-item px-5 my-1">
												<a href="?page=settings" class="menu-link px-5">Account Settings</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="sign-out.php" class="menu-link px-5">Sign Out</a>
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
						<!--begin::Container-->
						<div id="kt_content_container" class="container-xxl">
							<?php
								if(isset($_GET['page'])){
									$page=$_GET['page'];
									include $page.'.php';
								}else{
									include'dashboard.php';
								}
							?>
						</div>
						<!--end::Container-->
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
		<script src="../assets/js/edited/account/settings/profile-details.js"></script>
		<script src="../assets/js/edited/account/settings/signin-methods.js"></script>
		<script src="../assets/js/edited/account/settings/deactivate-account.js"></script>
		<script src="../assets/js/edited/department/table.js"></script>
		<script src="../assets/js/edited/department/add.js"></script>
		<script src="../assets/js/edited/department/edit.js"></script>
		<script src="../assets/js/edited/faculty/table.js"></script>
		<script src="../assets/js/edited/faculty/add.js"></script>
		<script src="../assets/js/edited/student/table.js"></script>
		<script src="../assets/js/edited/student/add.js"></script>
		<script src="../assets/js/edited/component/calendar.js"></script>
		<script src="../assets/js/edited/component/address.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>