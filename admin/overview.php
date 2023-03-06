<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex">
		<!--begin::Page title-->
		<div class="page-title d-flex align-items-center flex-wrap me-3 my-5">
			<!--begin::Title-->
			<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">MY PROFILE</h1>
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
				<li class="breadcrumb-item text-muted">My Profile</li>
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
						<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="?page=overview">Overview</a>
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item mt-2">
						<a class="nav-link text-active-primary ms-0 me-10 py-5" href="?page=settings">Settings</a>
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
				<!--begin::Action-->
				<a href="?page=settings" class="btn btn-success align-self-center">Edit Profile</a>
				<!--end::Action-->
			</div>
			<!--begin::Card header-->
			<!--begin::Card body-->
			<div class="card-body p-9">
				<!--begin::Row-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">Full Name</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8">
						<span class="fw-bold fs-6 text-gray-800">Max Smith</span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">User Type</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<span class="fw-bold fs-6 text-gray-800">Administrator</span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">Email</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<span class="fw-bold fs-6 text-gray-800">ms@gmail.com</span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">Contact Phone
					<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 d-flex align-items-center">
						<span class="fw-bold fs-6 text-gray-800">09432764549</span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">Staff ID</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8">
						<a href="#" class="fw-bold fs-6 text-gray-800">ID-1234567</a>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">Date Created</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8">
						<span class="fw-bold fs-6 text-gray-800">02/25/2023</span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
			</div>
			<!--end::Card body-->
		</div>
		<!--end::details View-->
	</div>
	<!--end::Container-->
</div>
<!--end::Post-->