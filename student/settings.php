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
				<!--begin::Navs-->
				<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
					<!--begin::Nav item-->
					<li class="nav-item mt-2">
						<a class="nav-link text-active-primary ms-0 me-10 py-5" href="?page=overview">Overview</a>
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item mt-2">
						<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="?page=settings">Settings</a>
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
							<label class="col-lg-4 col-form-label required fw-bold fs-6">Full Name</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<!--begin::Row-->
								<div class="row">
									<!--begin::Col-->
									<div class="col-lg-4 fv-row">
										<input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First Name" value="Max" />
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-lg-4 fv-row">
										<input type="text" name="mname" class="form-control form-control-lg form-control-solid" placeholder="Middle Name" value="" />
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-lg-4 fv-row">
										<input type="text" name="lname" class="form-control form-control-lg form-control-solid" placeholder="Last Name" value="Smith" />
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
							<label class="col-lg-4 col-form-label required fw-bold fs-6">User Type</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<input type="text" name="user" class="form-control form-control-lg form-control-solid" placeholder="User Type" value="Administrator" />
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
								<input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone Number" value="09432764549" />
							</div>
							<!--end::Col-->
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
		<!--begin::Sign-in Method-->
		<div class="card mb-5 mb-xl-10">
			<!--begin::Card header-->
			<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
				<div class="card-title m-0">
					<h3 class="fw-bolder m-0">Sign-in Method</h3>
				</div>
			</div>
			<!--end::Card header-->
			<!--begin::Content-->
			<div id="kt_account_settings_signin_method" class="collapse show">
				<!--begin::Card body-->
				<div class="card-body border-top p-9">
					<!--begin::Email Address-->
					<div class="d-flex flex-wrap align-items-center">
						<!--begin::Label-->
						<div id="kt_signin_email">
							<div class="fs-6 fw-bolder mb-1">Email Address</div>
							<div class="fw-bold text-gray-600">ms@gmail.com</div>
						</div>
						<!--end::Label-->
						<!--begin::Edit-->
						<div id="kt_signin_email_edit" class="flex-row-fluid d-none">
							<!--begin::Form-->
							<form id="kt_signin_change_email" class="form" novalidate="novalidate">
								<div class="row mb-6">
									<div class="col-lg-6 mb-4 mb-lg-0">
										<div class="fv-row mb-0">
											<label for="emailaddress" class="form-label fs-6 fw-bolder mb-3">Enter New Email Address</label>
											<input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="emailaddress" value="support@keenthemes.com" />
										</div>
									</div>
									<div class="col-lg-6">
										<div class="fv-row mb-0">
											<label for="confirmemailpassword" class="form-label fs-6 fw-bolder mb-3">Confirm Password</label>
											<input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword" />
										</div>
									</div>
								</div>
								<div class="d-flex">
									<button id="kt_signin_submit" type="button" class="btn btn-primary me-2 px-6">Update Email</button>
									<button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
								</div>
							</form>
							<!--end::Form-->
						</div>
						<!--end::Edit-->
						<!--begin::Action-->
						<div id="kt_signin_email_button" class="ms-auto">
							<button class="btn btn-light btn-active-light-primary">Change Email</button>
						</div>
						<!--end::Action-->
					</div>
					<!--end::Email Address-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Password-->
					<div class="d-flex flex-wrap align-items-center mb-10">
						<!--begin::Label-->
						<div id="kt_signin_password">
							<div class="fs-6 fw-bolder mb-1">Password</div>
							<div class="fw-bold text-gray-600">************</div>
						</div>
						<!--end::Label-->
						<!--begin::Edit-->
						<div id="kt_signin_password_edit" class="flex-row-fluid d-none">
							<!--begin::Form-->
							<form id="kt_signin_change_password" class="form" novalidate="novalidate">
								<div class="row mb-1">
									<div class="col-lg-4">
										<div class="fv-row mb-0">
											<label for="currentpassword" class="form-label fs-6 fw-bolder mb-3">Current Password</label>
											<input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword" />
										</div>
									</div>
									<div class="col-lg-4">
										<div class="fv-row mb-0">
											<label for="newpassword" class="form-label fs-6 fw-bolder mb-3">New Password</label>
											<input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword" />
										</div>
									</div>
									<div class="col-lg-4">
										<div class="fv-row mb-0">
											<label for="confirmpassword" class="form-label fs-6 fw-bolder mb-3">Confirm New Password</label>
											<input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword" />
										</div>
									</div>
								</div>
								<div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
								<div class="d-flex">
									<button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Update Password</button>
									<button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
								</div>
							</form>
							<!--end::Form-->
						</div>
						<!--end::Edit-->
						<!--begin::Action-->
						<div id="kt_signin_password_button" class="ms-auto">
							<button class="btn btn-light btn-active-light-primary">Reset Password</button>
						</div>
						<!--end::Action-->
					</div>
					<!--end::Password-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Sign-in Method-->
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