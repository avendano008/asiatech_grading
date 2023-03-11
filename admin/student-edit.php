<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex">
		<!--begin::Page title-->
		<div class="page-title d-flex align-items-center flex-wrap me-3 my-5">
			<!--begin::Title-->
			<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">EDIT STUDENT</h1>
			<!--end::Title-->
			<!--begin::Separator-->
			<span class="h-20px border-gray-300 border-start mx-4"></span>
			<!--end::Separator-->
			<!--begin::Breadcrumb-->
			<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
				<!--begin::Item-->
				<li class="breadcrumb-item text-muted">
					<a href="?page=dashboard" class="text-muted text-hover-primary">Home</a>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item">
					<span class="bullet bg-gray-300 w-5px h-2px"></span>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item text-muted">
					<a href="?page=student" class="text-muted text-hover-primary">Student List</a>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item">
					<span class="bullet bg-gray-300 w-5px h-2px"></span>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item text-muted">Edit Student</li>
				<!--end::Item-->
			</ul>
			<!--end::Breadcrumb-->
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
				<!--begin::Navs-->
				<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
					<!--begin::Nav item-->
					<li class="nav-item mt-2">
						<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="?page=student-edit">Overview</a>
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
			<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_student_profile_details" aria-expanded="true" aria-controls="kt_student_profile_details">
				<!--begin::Card title-->
				<div class="card-title m-0">
					<h3 class="fw-bolder m-0">Profile Details</h3>
				</div>
				<!--end::Card title-->
				<!--begin::Card toolbar-->
				<div class="card-toolbar d-flex justify-content-end gap-5">
					<!--begin::Action-->
					<a href="?page=student" class="btn btn-primary align-self-center">
						<i class="fa fa-arrow-left" aria-hidden="true"></i> Back
					</a>
					<!--end::Action-->
				</div>
				<!--end::Card toolbar-->
			</div>
			<!--begin::Card header-->
			<!--begin::Content-->
			<div id="kt_account_settings_profile_details" class="collapse show">
				<!--begin::Form-->
				<form id="kt_student_profile_details_form" class="form">
					<!--begin::Card body-->
					<div class="card-body border-top p-9">
						<!--begin::Input group-->
						<div class="row mb-10">
							<!--begin::Label-->
							<label class="col-lg-4 col-form-label fw-bold fs-6 required">Full Name</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<!--begin::Row-->
								<div class="row">
									<!--begin::Col-->
									<div class="col-lg-4 fv-row">
										<input type="text" name="first_name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First Name" value="" />
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-lg-4 fv-row">
										<input type="text" name="middle_name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Middle Name" value="" />
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-lg-4 fv-row">
										<input type="text" name="last_name" class="form-control form-control-lg form-control-solid" placeholder="Last Name" value="" />
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-10">
							<!--begin::Label-->
							<label class="col-lg-4 col-form-label fw-bold fs-6 required">Gender</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<!--begin::Input-->
								<select name="gender" data-control="select2" data-placeholder="Select Gender" class="form-select form-select-solid form-select-lg" data-allow-clear="true" data-hide-search="true">
									<option></option>
									<option>Male</option>
									<option>Female</option>
								</select>
								<!--end::Input-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-10">
							<!--begin::Label-->
							<label class="col-lg-4 col-form-label fw-bold fs-6 required">Birth Date</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<input type="text" name="birth_date" class="form-control form-control-lg form-control-solid" placeholder="Select Birth Date" data-kt-calendar-input="birth_date" value="" />
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-10">
							<!--begin::Label-->
							<label class="col-lg-4 col-form-label fw-bold fs-6 required">Phone Number</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<input type="text" name="phone_number" class="form-control form-control-lg form-control-solid" placeholder="e.g. 09XXXXXXXXX" maxlength="11" value="" />
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-10">
							<!--begin::Label-->
							<label class="col-lg-4 col-form-label fw-bold fs-6 required">Email</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<input type="email" name="email" class="form-control form-control-lg form-control-solid" placeholder="e.g. email@address.com" value="" />
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-10">
							<!--begin::Label-->
							<label class="col-lg-4 col-form-label fw-bold fs-6 required">Street Address</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<input type="text" name="street_address" class="form-control form-control-lg form-control-solid" placeholder="Street Address" value="" />
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-10">
							<!--begin::Label-->
							<label class="col-lg-4 col-form-label fw-bold fs-6 required">Region</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<!--begin::Input-->
								<select name="region" data-control="select2" data-placeholder="Select Region" class="form-select form-select-solid form-select-lg" data-allow-clear="true" data-hide-search="true" data-kt-address-select="region" >
									<option></option>
								</select>
								<!--end::Input-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-10">
							<!--begin::Label-->
							<label class="col-lg-4 col-form-label fw-bold fs-6 required">Province</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<!--begin::Input-->
								<select name="province" data-control="select2" data-placeholder="Select Province" class="form-select form-select-solid form-select-lg" data-allow-clear="true" data-hide-search="true" data-kt-address-select="province" >
									<option></option>
								</select>
								<!--end::Input-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-10">
							<!--begin::Label-->
							<label class="col-lg-4 col-form-label fw-bold fs-6 required">City</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<!--begin::Input-->
								<select name="city" data-control="select2" data-placeholder="Select City" class="form-select form-select-solid form-select-lg" data-allow-clear="true" data-hide-search="true" data-kt-address-select="city" >
									<option></option>
								</select>
								<!--end::Input-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-10">
							<!--begin::Label-->
							<label class="col-lg-4 col-form-label fw-bold fs-6 required">Barangay</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<!--begin::Input-->
								<select name="barangay" data-control="select2" data-placeholder="Select Barangay" class="form-select form-select-solid form-select-lg" data-allow-clear="true" data-hide-search="true" data-kt-address-select="barangay" >
									<option></option>
								</select>
								<!--end::Input-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-10">
							<!--begin::Label-->
							<label class="col-lg-4 col-form-label fw-bold fs-6 required">Grade Level</label>
							<!--end::Label-->
							<!--begin::Row-->
							<div class="col-lg-8 fv-row row" data-kt-buttons="true">
								<!--begin::Col-->
								<div class="col">
									<!--begin::Option-->
									<label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-2 active">
										<input type="radio" class="btn-check" name="grade_level" value="Grade 11" checked />
										<span class="fw-bolder fs-3">Grade 11</span>
									</label>
									<!--end::Option-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col">
									<!--begin::Option-->
									<label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-2">
										<input type="radio" class="btn-check" name="grade_level" value="Grade 12" />
										<span class="fw-bolder fs-3">Grade 12</span>
									</label>
									<!--end::Option-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-10">
							<!--begin::Label-->
							<label class="col-lg-4 col-form-label fw-bold fs-6 required">Strand</label>
							<!--end::Label-->
							<!--begin::Options-->
							<div class="col-lg-8 fv-row">
								<!--begin:Option-->
								<label class="d-flex flex-stack mb-3 cursor-pointer">
									<!--begin:Label-->
									<span class="d-flex align-items-center me-2">
										<!--begin::Icon-->
										<span class="symbol symbol-50px me-6">
											<span class="symbol-label">
												<!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-gray-600">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="currentColor" />
														<path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</span>
										<!--end::Icon-->
										<!--begin::Description-->
										<span class="d-flex flex-column">
											<span class="fw-bolder text-gray-800 text-hover-primary fs-5">ABM</span>
											<span class="fs-6 fw-bold text-muted">Accountancy and Business Management</span>
										</span>
										<!--end:Description-->
									</span>
									<!--end:Label-->
									<!--begin:Input-->
									<span class="form-check form-check-custom form-check-solid">
										<input class="form-check-input" type="radio" name="strand" value="ABM" checked />
									</span>
									<!--end:Input-->
								</label>
								<!--end::Option-->
								<!--begin:Option-->
								<label class="d-flex flex-stack mb-3 cursor-pointer">
									<!--begin:Label-->
									<span class="d-flex align-items-center me-2">
										<!--begin::Icon-->
										<span class="symbol symbol-50px me-6">
											<span class="symbol-label">
												<!--begin::Svg Icon-->
												<span class="svg-icon svg-icon-1 svg-icon-gray-600">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M2.10001 10C3.00001 5.6 6.69998 2.3 11.2 2L8.79999 4.39999L11.1 7C9.60001 7.3 8.30001 8.19999 7.60001 9.59999L4.5 12.4L2.10001 10ZM19.3 11.5L16.4 14C15.7 15.5 14.4 16.6 12.7 16.9L15 19.5L12.6 21.9C17.1 21.6 20.8 18.2 21.7 13.9L19.3 11.5Z" fill="currentColor"/>
														<path d="M13.8 2.09998C18.2 2.99998 21.5 6.69998 21.8 11.2L19.4 8.79997L16.8 11C16.5 9.39998 15.5 8.09998 14 7.39998L11.4 4.39998L13.8 2.09998ZM12.3 19.4L9.69998 16.4C8.29998 15.7 7.3 14.4 7 12.8L4.39999 15.1L2 12.7C2.3 17.2 5.7 20.9 10 21.8L12.3 19.4Z" fill="currentColor"/>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</span>
										<!--end::Icon-->
										<!--begin::Description-->
										<span class="d-flex flex-column">
											<span class="fw-bolder text-gray-800 text-hover-primary fs-5">STEM</span>
											<span class="fs-6 fw-bold text-muted">Science, Technology, Engineering and Mathematics</span>
										</span>
										<!--end:Description-->
									</span>
									<!--end:Label-->
									<!--begin:Input-->
									<span class="form-check form-check-custom form-check-solid">
										<input class="form-check-input" type="radio" name="strand" value="STEM" />
									</span>
									<!--end:Input-->
								</label>
								<!--end::Option-->
								<!--begin:Option-->
								<label class="d-flex flex-stack mb-3 cursor-pointer">
									<!--begin:Label-->
									<span class="d-flex align-items-center me-2">
										<!--begin::Icon-->
										<span class="symbol symbol-50px me-6">
											<span class="symbol-label">
												<!--begin::Svg Icon-->
												<span class="svg-icon svg-icon-1 svg-icon-gray-600">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="currentColor" opacity="0.3"/>
													<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="currentColor"/>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</span>
										<!--end::Icon-->
										<!--begin::Description-->
										<span class="d-flex flex-column">
											<span class="fw-bolder text-gray-800 text-hover-primary fs-5">HUMSS</span>
											<span class="fs-6 fw-bold text-muted">Humanities and Social Sciences</span>
										</span>
										<!--end:Description-->
									</span>
									<!--end:Label-->
									<!--begin:Input-->
									<span class="form-check form-check-custom form-check-solid">
										<input class="form-check-input" type="radio" name="strand" value="HUMSS" />
									</span>
									<!--end:Input-->
								</label>
								<!--end::Option-->
								<!--begin:Option-->
								<label class="d-flex flex-stack mb-3 cursor-pointer">
									<!--begin:Label-->
									<span class="d-flex align-items-center me-2">
										<!--begin::Icon-->
										<span class="symbol symbol-50px me-6">
											<span class="symbol-label">
												<!--begin::Svg Icon-->
												<span class="svg-icon svg-icon-1 svg-icon-gray-600">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="currentColor" />
										        <rect fill="currentColor" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"/>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</span>
										<!--end::Icon-->
										<!--begin::Description-->
										<span class="d-flex flex-column">
											<span class="fw-bolder text-gray-800 text-hover-primary fs-5">GAS</span>
											<span class="fs-6 fw-bold text-muted">General Academic Strand</span>
										</span>
										<!--end:Description-->
									</span>
									<!--end:Label-->
									<!--begin:Input-->
									<span class="form-check form-check-custom form-check-solid">
										<input class="form-check-input" type="radio" name="strand" value="GAS" />
									</span>
									<!--end:Input-->
								</label>
								<!--end::Option-->
								<!--begin:Option-->
								<label class="d-flex flex-stack mb-3 cursor-pointer">
									<!--begin:Label-->
									<span class="d-flex align-items-center me-2">
										<!--begin::Icon-->
										<span class="symbol symbol-50px me-6">
											<span class="symbol-label">
												<!--begin::Svg Icon-->
												<span class="svg-icon svg-icon-1 svg-icon-gray-600">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M16.95 18.9688C16.75 18.9688 16.55 18.8688 16.35 18.7688C15.85 18.4688 15.75 17.8688 16.05 17.3688L19.65 11.9688L16.05 6.56876C15.75 6.06876 15.85 5.46873 16.35 5.16873C16.85 4.86873 17.45 4.96878 17.75 5.46878L21.75 11.4688C21.95 11.7688 21.95 12.2688 21.75 12.5688L17.75 18.5688C17.55 18.7688 17.25 18.9688 16.95 18.9688ZM7.55001 18.7688C8.05001 18.4688 8.15 17.8688 7.85 17.3688L4.25001 11.9688L7.85 6.56876C8.15 6.06876 8.05001 5.46873 7.55001 5.16873C7.05001 4.86873 6.45 4.96878 6.15 5.46878L2.15 11.4688C1.95 11.7688 1.95 12.2688 2.15 12.5688L6.15 18.5688C6.35 18.8688 6.65 18.9688 6.95 18.9688C7.15 18.9688 7.35001 18.8688 7.55001 18.7688Z" fill="currentColor"/>
													<path opacity="0.3" d="M10.45 18.9687C10.35 18.9687 10.25 18.9687 10.25 18.9687C9.75 18.8687 9.35 18.2688 9.55 17.7688L12.55 5.76878C12.65 5.26878 13.25 4.8687 13.75 5.0687C14.25 5.1687 14.65 5.76878 14.45 6.26878L11.45 18.2688C11.35 18.6688 10.85 18.9687 10.45 18.9687Z" fill="currentColor"/>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</span>
										<!--end::Icon-->
										<!--begin::Description-->
										<span class="d-flex flex-column">
											<span class="fw-bolder text-gray-800 text-hover-primary fs-5">ICT</span>
											<span class="fs-6 fw-bold text-muted">Information and Communications Technology</span>
										</span>
										<!--end:Description-->
									</span>
									<!--end:Label-->
									<!--begin:Input-->
									<span class="form-check form-check-custom form-check-solid">
										<input class="form-check-input" type="radio" name="strand" value="ICT" />
									</span>
									<!--end:Input-->
								</label>
								<!--end::Option-->
								<!--begin:Option-->
								<label class="d-flex flex-stack mb-3 cursor-pointer">
									<!--begin:Label-->
									<span class="d-flex align-items-center me-2">
										<!--begin::Icon-->
										<span class="symbol symbol-50px me-6">
											<span class="symbol-label">
												<!--begin::Svg Icon-->
												<span class="svg-icon svg-icon-1 svg-icon-gray-600">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z" fill="currentColor"/>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</span>
										<!--end::Icon-->
										<!--begin::Description-->
										<span class="d-flex flex-column">
											<span class="fw-bolder text-gray-800 text-hover-primary fs-5">HE</span>
											<span class="fs-6 fw-bold text-muted">Home Economics</span>
										</span>
										<!--end:Description-->
									</span>
									<!--end:Label-->
									<!--begin:Input-->
									<span class="form-check form-check-custom form-check-solid">
										<input class="form-check-input" type="radio" name="strand" value="HE" />
									</span>
									<!--end:Input-->
								</label>
								<!--end::Option-->
							</div>
							<!--end::Options-->
						</div>
						<!--end::Input group-->
					</div>
					<!--end::Card body-->
					<!--begin::Actions-->
					<div class="card-footer d-flex justify-content-end py-6 px-9">
						<button type="submit" class="btn btn-primary" id="kt_student_profile_details_submit">Save Changes</button>
					</div>
					<!--end::Actions-->
				</form>
				<!--end::Form-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Basic info-->
	</div>
	<!--end::Container-->
</div>
<!--end::Post-->