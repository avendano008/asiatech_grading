<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex">
		<!--begin::Page title-->
		<div class="page-title d-flex align-items-center flex-wrap me-3 my-5">
			<!--begin::Title-->
			<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">STUDENT PROFILE</h1>
			<!--end::Title-->
			<!--begin::Separator-->
			<span class="h-20px border-gray-300 border-start mx-4"></span>
			<!--end::Separator-->
			<!--begin::Breadcrumb-->
			<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
				<!--begin::Item-->
				<li class="breadcrumb-item text-muted">
					<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item">
					<span class="bullet bg-gray-300 w-5px h-2px"></span>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item text-muted">Student List</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item">
					<span class="bullet bg-gray-300 w-5px h-2px"></span>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item text-muted">Student Profile</li>
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
						<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="#">Overview</a>
					</li>
					<!--end::Nav item-->
				</ul>
				<!--begin::Navs-->
			</div>
		</div>
		<!--end::Navbar-->
		<!--begin::details View-->
		<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
			<!--begin::Card header-->
			<div class="card-header cursor-pointer">
				<!--begin::Card title-->
				<div class="card-title m-0">
					<h3 class="fw-bolder m-0">Profile Details</h3>
				</div>
				<!--end::Card title-->
				<div class="card-toolbar d-flex justify-content-end gap-5">
					<!--begin::Action-->
					<a href="#" class="btn btn-light-primary align-self-center"  data-bs-toggle="modal" data-bs-target="#kt_modal_create_student">
						<i class="fa fa-edit" aria-hidden="true"></i> Edit
					</a>
					<!--end::Action-->
					<!--begin::Action-->
					<a href="?page=student" class="btn btn-primary justify-content-end align-self-center">
						<i class="fa fa-arrow-left" aria-hidden="true"></i> Back
					</a>
					<!--end::Action-->
				</div>
			</div>
			<!--begin::Card header-->
			<!--begin::Card body-->
			<div class="card-body p-9">
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">Student Name</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8">
						<span class="fw-bold fs-6 text-gray-800"></span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">Student Number</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8">
						<a href="#" class="fw-bold fs-6 text-gray-800"></a>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">Strand</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8">
						<span class="fw-bold fs-6 text-gray-800"></span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">Grade Level</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8">
						<span class="fw-bold fs-6 text-gray-800"></span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">Section</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8">
						<span class="fw-bold fs-6 text-gray-800"></span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">Gender</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<span class="fw-bold fs-6 text-gray-800"></span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">Birth Date</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<span class="fw-bold fs-6 text-gray-800"></span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">Age</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<span class="fw-bold fs-6 text-gray-800"></span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">Address</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<span class="fw-bold fs-6 text-gray-800"></span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">Contact Email</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<span class="fw-bold fs-6 text-gray-800"></span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">Contact Number
					<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Contact number must be active"></i></label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<span class="fw-bold fs-6 text-gray-800"></span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
			</div>
			<!--end::Card body-->
			<!--begin::Modal - Create Student-->
			<div class="modal fade" id="kt_modal_create_student" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-900px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2></h2>
							<!--end::Modal title-->
							<!--begin::Close-->
							<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
								<span class="svg-icon svg-icon-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
										<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Close-->
						</div>
						<!--end::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body py-lg-10 px-lg-10">
							<!--begin::Stepper-->
							<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_student_stepper">
								<!--begin::Aside-->
								<div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
									<!--begin::Nav-->
									<div class="stepper-nav">
										<!--begin::Step 1-->
										<div class="stepper-item current" data-kt-stepper-element="nav">
											<!--begin::Line-->
											<div class="stepper-line w-40px"></div>
											<!--end::Line-->
											<!--begin::Icon-->
											<div class="stepper-icon w-40px h-40px">
												<i class="stepper-check fas fa-check"></i>
												<span class="stepper-number">1</span>
											</div>
											<!--end::Icon-->
											<!--begin::Label-->
											<div class="stepper-label">
												<h3 class="stepper-title">General</h3>
												<div class="stepper-desc fw-bold">Setup Your General Information</div>
											</div>
											<!--end::Label-->
										</div>
										<!--end::Step 1-->
										<!--begin::Step 2-->
										<div class="stepper-item" data-kt-stepper-element="nav">
											<!--begin::Line-->
											<div class="stepper-line w-40px"></div>
											<!--end::Line-->
											<!--begin::Icon-->
											<div class="stepper-icon w-40px h-40px">
												<i class="stepper-check fas fa-check"></i>
												<span class="stepper-number">2</span>
											</div>
											<!--end::Icon-->
											<!--begin::Label-->
											<div class="stepper-label">
												<h3 class="stepper-title">Residence</h3>
												<div class="stepper-desc fw-bold">Setup Your Residence Information</div>
											</div>
											<!--end::Label-->
										</div>
										<!--end::Step 2-->
										<!--begin::Step 3-->
										<div class="stepper-item" data-kt-stepper-element="nav">
											<!--begin::Line-->
											<div class="stepper-line w-40px"></div>
											<!--end::Line-->
											<!--begin::Icon-->
											<div class="stepper-icon w-40px h-40px">
												<i class="stepper-check fas fa-check"></i>
												<span class="stepper-number">3</span>
											</div>
											<!--end::Icon-->
											<!--begin::Label-->
											<div class="stepper-label">
												<h3 class="stepper-title">Contact</h3>
												<div class="stepper-desc fw-bold">Setup Your Contact Information</div>
											</div>
											<!--end::Label-->
										</div>
										<!--end::Step 3-->
										<!--begin::Step 4-->
										<div class="stepper-item" data-kt-stepper-element="nav">
											<!--begin::Line-->
											<div class="stepper-line w-40px"></div>
											<!--end::Line-->
											<!--begin::Icon-->
											<div class="stepper-icon w-40px h-40px">
												<i class="stepper-check fas fa-check"></i>
												<span class="stepper-number">4</span>
											</div>
											<!--end::Icon-->
											<!--begin::Label-->
											<div class="stepper-label">
												<h3 class="stepper-title">Student</h3>
												<div class="stepper-desc fw-bold">Setup Your Student Information</div>
											</div>
											<!--end::Label-->
										</div>
										<!--end::Step 4-->
										<!--begin::Step 5-->
										<div class="stepper-item" data-kt-stepper-element="nav">
											<!--begin::Line-->
											<div class="stepper-line w-40px"></div>
											<!--end::Line-->
											<!--begin::Icon-->
											<div class="stepper-icon w-40px h-40px">
												<i class="stepper-check fas fa-check"></i>
												<span class="stepper-number">5</span>
											</div>
											<!--end::Icon-->
											<!--begin::Label-->
											<div class="stepper-label">
												<h3 class="stepper-title">Completed</h3>
												<div class="stepper-desc fw-bold">Your Registration Has Been Completed</div>
											</div>
											<!--end::Label-->
										</div>
										<!--end::Step 5-->
									</div>
									<!--end::Nav-->
								</div>
								<!--begin::Aside-->
								<!--begin::Content-->
								<div class="flex-row-fluid py-lg-5 px-lg-15">
									<!--begin::Form-->
									<form class="form" novalidate="novalidate" id="kt_modal_create_student_form">
										<!--begin::Step 1-->
										<div class="current" data-kt-stepper-element="content">
											<!--begin::Wrapper-->
											<div class="w-100">
												<!--begin::Heading-->
												<div class="pb-10 pb-lg-15">
													<!--begin::Title-->
													<h2 class="fw-bolder text-dark">Setup Your General Information</h2>
													<!--end::Title-->
												</div>
												<!--end::Heading-->
												<!--begin::Input group-->
												<div class="fv-row mb-10">
													<!--begin::Label-->
													<label class="form-label required">Full Name</label>
													<!--end::Label-->
													<div class="row fv-row">
														<!--begin::Col-->
														<div class="col-lg-4">
															<input type="text" class="form-control form-control-solid" placeholder="First Name" name="first_name"/>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<input type="text" class="form-control form-control-solid" placeholder="Middle Name" name="middle_name"/>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<input type="text" class="form-control form-control-solid" placeholder="Last Name" name="last_name"/>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-10">
													<!--begin::Label-->
													<label class="form-label required">Gender</label>
													<!--end::Label-->
													<!--begin::Input-->
													<select name="gender" class="form-select form-select-solid" data-control="select2" data-placeholder="Select Gender" data-allow-clear="true" data-hide-search="true">
														<option></option>
														<option>Male</option>
														<option>Female</option>
													</select>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-10">
													<!--begin::Label-->
													<label class="form-label required">Birth Date</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" name="birth_date" id="birth_date" placeholder="Select Birth Date" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-10">
													<!--begin::Label-->
													<label class="form-label required">Age</label>
													<!--begin::Input-->
													<input type="number" class="form-control form-control-solid" min="1" max="99" name="age" placeholder="Age" />
													<!--end::Input-->									
												</div>
												<!--end::Input group-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Step 1-->
										<!--begin::Step 2-->
										<div class="" data-kt-stepper-element="content">
											<!--begin::Wrapper-->
											<div class="w-100">
												<!--begin::Heading-->
												<div class="pb-10 pb-lg-15">
													<!--begin::Title-->
													<h2 class="fw-bolder text-dark">Setup Your Residence Information</h2>
													<!--end::Title-->
												</div>
												<!--end::Heading-->
												<!--begin::Input group-->
												<div class="mb-10 fv-row">
													<!--begin::Label-->
													<label class="form-label">Street Address</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" placeholder="Street Address" name="street_address"/>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-10">
													<!--begin::Label-->
													<label class="form-label required">Region</label>
													<!--end::Label-->
													<!--begin::Input-->
													<select id="region" name="region" class="form-select form-select-solid" data-control="select2" data-placeholder="Select Region" data-allow-clear="true" data-hide-search="true"></select>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-10">
													<!--begin::Label-->
													<label class="form-label required">Province</label>
													<!--end::Label-->
													<!--begin::Input-->
													<select id="province" name="province" class="form-select form-select-solid" data-control="select2" data-placeholder="Select Province" data-allow-clear="true" data-hide-search="true"></select>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-10">
													<!--begin::Label-->
													<label class="form-label required">City</label>
													<!--end::Label-->
													<!--begin::Input-->
													<select id="city" name="city" class="form-select form-select-solid" data-control="select2" data-placeholder="Select City" data-allow-clear="true" data-hide-search="true"></select>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-10">
													<!--begin::Label-->
													<label class="form-label required">Barangay</label>
													<!--end::Label-->
													<!--begin::Input-->
													<select id="barangay" name="barangay" class="form-select form-select-solid" data-control="select2" data-placeholder="Select Barangay" data-allow-clear="true" data-hide-search="true"></select>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Step 2-->
										<!--begin::Step 3-->
										<div class="" data-kt-stepper-element="content">
											<!--begin::Wrapper-->
											<div class="w-100">
												<!--begin::Heading-->
												<div class="pb-10 pb-lg-15">
													<!--begin::Title-->
													<h2 class="fw-bolder text-dark">Setup Your Contact Information</h2>
													<!--end::Title-->
												</div>
												<!--end::Heading-->
												<!--begin::Input group-->
												<div class="fv-row mb-10">
													<!--begin::Label-->
													<label class="form-label required">Contact Email</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="email" class="form-control form-control-solid" placeholder="@gmail.com" name="contact_email"/>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-10 fv-row">
													<!--begin::Label-->
													<label class="form-label required">Contact Number</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" maxlength="11" placeholder="09" name="contact_number"/>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Step 3-->
										<!--begin::Step 4-->
										<div class="" data-kt-stepper-element="content">
											<!--begin::Wrapper-->
											<div class="w-100">
												<!--begin::Heading-->
												<div class="pb-10 pb-lg-15">
													<!--begin::Title-->
													<h2 class="fw-bolder text-dark">Setup Your Student Information</h2>
													<!--end::Title-->
												</div>
												<!--end::Heading-->
												<!--begin::Input group-->
												<div class="mb-10 fv-row">
													<!--begin::Label-->
													<label class="form-label required">Student Number</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" placeholder="Student Number" name="student_number"/>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-10">
													<!--begin::Label-->
													<label class="form-label required">Grade</label>
													<!--end::Label-->
													<!--begin::Input-->
													<select name="grade" class="form-select form-select-solid" data-control="select2" data-placeholder="Select Grade" data-allow-clear="true" data-hide-search="true">
														<option></option>
														<option>Grade 11</option>
														<option>Grade 12</option>
													</select>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-10">
													<!--begin::Label-->
													<label class="form-label required">Section</label>
													<!--end::Label-->
													<!--begin::Input-->
													<select name="section" class="form-select form-select-solid" data-control="select2" data-placeholder="Select Section" data-allow-clear="true" data-hide-search="true">
														<option></option>
														<option>Section 1</option>
														<option>section 2</option>
													</select>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-10">
													<!--begin::Label-->
													<label class="form-label required">Strand</label>
													<!--end::Label-->
													<!--begin::Input-->
													<select name="strand" class="form-select form-select-solid" data-control="select2" data-placeholder="Select Strand" data-allow-clear="true" data-hide-search="true">
														<option></option>
														<option>ABM (Accountancy and Business Management)</option>
														<option>STEM (Science, Technology, Engineering and Mathematics)</option>
														<option>HUMSS (Humanities and Social Sciences)</option>
														<option>GAS (General Academic Strand)</option>
														<option>ICT (Information and Communications Technology)</option>
														<option>HE (Home Economics)</option>
													</select>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Step 4-->
										<!--begin::Step 5-->
										<div class="" data-kt-stepper-element="content">
											<!--begin::Wrapper-->
											<div class="w-100">
												<!--begin::Heading-->
												<div class="pb-8 pb-lg-10">
													<!--begin::Title-->
													<h2 class="fw-bolder text-dark">Your Registration Has Been Completed!</h2>
													<!--end::Title-->
													<!--begin::Notice-->
													<div class="text-muted fw-bold fs-6">If you need more info, please
													<a href="index.php" class="link-primary fw-bolder">Sign In</a>.</div>
													<!--end::Notice-->
												</div>
												<!--end::Heading-->
												<!--begin::Body-->
												<div class="mb-0">
													<!--begin::Text-->
													<div class="fs-6 text-gray-600 mb-5">Congratulations! Your registration for our online grading system has been completed. We look forward to continuing our great relationships with Asia Technological School of Science and Arts and all of our community partners who support us. Thanks again for taking the time to register!</div>
													<!--end::Text-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Step 5-->
										<!--begin::Actions-->
										<div class="d-flex flex-stack pt-10">
											<!--begin::Wrapper-->
											<div class="me-2">
												<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
												<span class="svg-icon svg-icon-3 me-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
														<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->Back</button>
											</div>
											<!--end::Wrapper-->
											<!--begin::Wrapper-->
											<div>
												<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
													<span class="indicator-label">Submit
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
													<span class="svg-icon svg-icon-3 ms-2 me-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
															<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon--></span>
													<span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
												<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
												<span class="svg-icon svg-icon-3 ms-1 me-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
														<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon--></button>
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Actions-->
									</form>
									<!--end::Form-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Stepper-->
						</div>
						<!--end::Modal body-->
					</div>
					<!--end::Modal content-->
				</div>
				<!--end::Modal dialog-->
			</div>
			<!--end::Modal - Create Student-->
		</div>
		<!--end::details View-->
	</div>
	<!--end::Container-->
</div>
<!--end::Post-->