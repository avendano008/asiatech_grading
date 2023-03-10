<?php
	$student = array (
			  array("student_name"=>"Rodney Stanford", 
			  	"student_number"=>"SID-15263728", 
			  	"strand"=>"ABM", 
			  	"grade_level"=>"Grade 11", 
			  	"section"=>"Section 1", 
			  	"gender"=>"Male", 
			  	"birth_date"=>"12/17/2002", 
			  	"age"=>"20", 
			  	"address"=>"Brgy. Caingin, City of Santa Rosa, Laguna", 
			  	"contact_email"=>"rodstan@gmail.com", 
			  	"contact_number"=>"09123456789"),
			  array("student_name"=>"Zia Lee", 
			  	"student_number"=>"SID-15264442", 
			  	"strand"=>"STEM", 
			  	"grade_level"=>"Grade 12", 
			  	"section"=>"Section 2", 
			  	"gender"=>"Female", 
			  	"birth_date"=>"06/10/2002", 
			  	"age"=>"20", 
			  	"address"=>"Brgy. Malia, GMA, Cavite", 
			  	"contact_email"=>"zl0610@gmail.com", 
			  	"contact_number"=>"09321556789")
			);
?>
<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex">
		<!--begin::Page title-->
		<div class="page-title d-flex align-items-center flex-wrap me-3 my-5">
			<!--begin::Title-->
			<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">STUDENT LIST</h1>
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
		<!--begin::Students-->
		<div class="card card-flush">
			<!--begin::Card header-->
			<div class="card-header align-items-center py-5 gap-2 gap-md-5">
				<!--begin::Card title-->
				<div class="card-title">
					<!--begin::Search-->
					<div class="d-flex align-items-center position-relative my-1">
						<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
						<span class="svg-icon svg-icon-1 position-absolute ms-4">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
								<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						<input type="text" data-kt-student-list-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Student" />
					</div>
					<!--end::Search-->
					<!--begin::Export buttons-->
					<div id="kt_report_student_list_export" class="d-none"></div>
					<!--end::Export buttons-->
				</div>
				<!--end::Card title-->
				<!--begin::Card toolbar-->
				<div class="card-toolbar d-flex justify-content-end gap-5" data-kt-student-list-toolbar="base"/>
					<!--begin::Filter-->
					<div>
						<button type="button" class="btn btn-light-primary w-200px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
						<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							Filter
						</button>
						<!--begin::Menu 1-->
						<div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
							<!--begin::Header-->
							<div class="px-7 py-5">
								<div class="fs-5 text-dark fw-bolder">Filter Options</div>
							</div>
							<!--end::Header-->
							<!--begin::Separator-->
							<div class="separator border-gray-200"></div>
							<!--end::Separator-->
							<!--begin::Content-->
							<div class="px-7 py-5" data-kt-student-list-filter="form">
								<!--begin::Input group-->
								<div class="mb-10">
									<label class="form-label fs-6 fw-bold">Strand:</label>
									<select class="form-select form-select-solid fw-bolder" data-kt-select2="true" data-placeholder="Select Option" data-allow-clear="true" data-kt-student-list-filter="strand" data-hide-search="true">
										<option></option>
										<option value="ABM">ABM (Accountancy and Business Management)</option>
										<option value="STEM">STEM (Science, Technology, Engineering and Mathematics)</option>
										<option value="HUMSS">HUMSS (Humanities and Social Sciences)</option>
										<option value="GAS">GAS (General Academic Strand)</option>
										<option value="ICT">ICT (Information and Communications Technology)</option>
										<option value="HE">HE (Home Economics)</option>
									</select>
								</div>
								<!--end::Input group-->
								<div class="mb-10">
									<label class="form-label fs-6 fw-bold">Grade Level:</label>
									<select class="form-select form-select-solid fw-bolder" data-kt-select2="true" data-placeholder="Select Option" data-allow-clear="true" data-kt-student-list-filter="grade-level" data-hide-search="true">
										<option></option>
										<option value="Grade 11">Grade 11</option>
										<option value="Grade 12">Grade 12</option>
									</select>
								</div>
								<!--end::Input group-->
								<!--begin::Actions-->
								<div class="d-flex justify-content-end">
									<button type="reset" class="btn btn-light btn-active-light-primary fw-bold me-2 px-6" data-kt-menu-dismiss="true" data-kt-student-list-filter="reset">Reset</button>
									<button type="submit" class="btn btn-primary fw-bold px-6" data-kt-menu-dismiss="true" data-kt-student-list-filter="filter">Apply</button>
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Menu 1-->
					</div>
					<!--end::Filter-->
					<!--begin::Export dropdown-->
					<div>
						<button type="button" class="btn btn-light-primary w-200px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="currentColor" />
									<path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="currentColor" />
									<path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							Export
						</button>
						<!--begin::Menu-->
						<div id="kt_report_student_list_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-student-export="copy">Copy to clipboard</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-student-export="excel">Export as Excel</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-student-export="csv">Export as CSV</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-student-export="pdf">Export as PDF</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</div>
					<!--end::Export dropdown-->
					<!--begin::Add student-->
					<button type="button" class="btn btn-primary w-200px" data-bs-toggle="modal" data-bs-target="#kt_modal_add_student">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
						<span class="svg-icon svg-icon-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
								<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						Add Student
					</button>
					<!--end::Add student-->
				</div>
				<!--end::Card toolbar-->
				<!--begin::Group actions-->
				<div class="d-flex justify-content-end gap-5 align-items-center d-none" data-kt-student-list-toolbar="selected">
					<div class="fw-bolder me-5">
						<span class="me-2" data-kt-student-list-select="selected_count"></span>
						Selected
					</div>
					<button type="button" class="btn btn-danger w-200px" data-kt-student-list-select="delete_selected">Delete Selected</button>
				</div>
				<!--end::Group actions-->
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body pt-0">
				<!--begin::Table-->
				<table class="table align-middle table-row-dashed fs-6 gy-5 table-striped" id="kt_report_student_list_table">
					<!--begin::Table head-->
					<thead>
						<!--begin::Table row-->
						<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
							<th></th>
							<th></th>
							<th colspan="2"><center>Written work</center></th>
						</tr>
						<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
							<th class="w-10px pe-2">
								<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
									<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_report_student_list_table .form-check-input" value="1" />
								</div>
							</th>
							<th class="min-w-100px">Student Name</th>
							<th class="min-w-100px">Student Number</th>
							<th class="min-w-75px">Strand</th>
							<th class="min-w-75px">Grade Level</th>
							<th class="min-w-75px">Section</th>
							<th class="min-w-75px d-none">Gender</th>
							<th class="min-w-75px d-none">Birth Date</th>
							<th class="min-w-75px d-none">Age</th>
							<th class="min-w-200px d-none">Address</th>
							<th class="min-w-100px d-none">Contact Email</th>
							<th class="min-w-100px d-none">Contact Number</th>
							<th class="text-end min-w-70px"></th>
						</tr>
						<!--end::Table row-->
					</thead>
					<!--end::Table head-->
					<!--begin::Table body-->
					<tbody class="fw-bold text-gray-600">
						<?php for($i = 0; $i < count($student); $i++): ?>
							<!--begin::Table row-->
							<tr>
								<!--begin::Checkbox-->
								<td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" />
									</div>
								</td>
								<!--end::Checkbox-->
								<!--begin::Student name=-->
								<td>
									<a href="?page=student-info" class="text-dark text-hover-primary"><?=$student[$i]['student_name']?></a>
								</td>
								<!--end::Student name=-->
								<!--begin::Student number=-->
								<td><?=$student[$i]['student_number']?></td>
								<!--end::Student number=-->
								<!--begin::Strand=-->
								<td><?=$student[$i]['strand']?></td>
								<!--begin::Strand=-->
								<!--begin::Grade level=-->
								<td><?=$student[$i]['grade_level']?></td>
								<!--end::Grade level=-->
								<!--begin::Section=-->
								<td><?=$student[$i]['section']?></td>
								<!--end::Section=-->
								<!--begin::Gender=-->
								<td class="d-none"><?=$student[$i]['gender']?></td>
								<!--end::Gender=-->
								<!--begin::Birth date=-->
								<td class="d-none"><?=$student[$i]['birth_date']?></td>
								<!--end::Birth date=-->
								<!--begin::Age=-->
								<td class="d-none"><?=$student[$i]['age']?></td>
								<!--end::Age=-->
								<!--begin::Address=-->
								<td class="d-none"><?=$student[$i]['address']?></td>
								<!--end::Address=-->
								<!--begin::Contact email=-->
								<td class="d-none"><?=$student[$i]['contact_email']?></td>
								<!--end::Contact email=-->
								<!--begin::Contact number=-->
								<td class="d-none"><?=$student[$i]['contact_number']?></td>
								<!--end::Contact number=-->
								<!--begin::Actions=-->
								<td class="text-end">
									<a href="#" class="px-3 text-hover-primary" data-toggle="tooltip" data-placement="top" title="Edit">
										<i class="fa fa-edit" aria-hidden="true"></i>
									</a>
									<a href="#" class="px-3 text-hover-danger" data-toggle="tooltip" data-placement="top" title="Delete" data-kt-student-list-filter="delete_row">
										<i class="fa fa-trash" aria-hidden="true"></i>
									</a>
								</td>
								<!--end::Actions=-->
							</tr>
							<!--end::Table row-->
    					<?php endfor; ?>
					</tbody>
					<!--end::Table body-->
				</table>
				<!--end::Table-->
			</div>
			<!--end::Card body-->
		</div>
		<!--end::Students-->
	</div>
	<!--end::Container-->
</div>
<!--end::Post-->
<!--begin::Modal - Add Student-->
<div class="modal fade" id="kt_modal_add_student" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-900px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header">
				<!--begin::Modal title-->
				<h2>Add Student</h2>
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
				<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_add_student_stepper">
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
									<h3 class="stepper-title">Registration Type</h3>
									<div class="stepper-desc fw-bold">Setup Registration Type</div>
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
									<h3 class="stepper-title">Student Info</h3>
									<div class="stepper-desc fw-bold">Setup Student Information</div>
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
									<h3 class="stepper-title">Account Info</h3>
									<div class="stepper-desc fw-bold">Setup Account Information</div>
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
									<h3 class="stepper-title">Residential Info</h3>
									<div class="stepper-desc fw-bold">Setup Residential Information</div>
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
									<h3 class="stepper-title">Complete</h3>
									<div class="stepper-desc fw-bold">Student Has Been Added</div>
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
						<form class="form" novalidate="novalidate" id="kt_modal_add_student_form">
							<!--begin::Step 1-->
							<div class="current" data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="pb-10 pb-lg-15">
										<!--begin::Title-->
										<h2 class="fw-bolder text-dark">Setup Registration Type</h2>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="fv-row">
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-6">
												<!--begin::Option-->
												<input type="radio" class="btn-check align-items-center" name="registration_type" value="new" checked id="kt_create_account_form_registration_type_new" />
												<label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 align-items-center mb-10" for="kt_create_account_form_registration_type_new">
													<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
													<span class="svg-icon svg-icon-3x">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor" />
															<path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--begin::Info-->
													<span class="d-block fw-bold my-2">
														<span class="text-dark fw-bolder d-block fs-4 mb-2">New Student</span>
														<span class="text-muted fw-bold fs-6">Are you a new student? Please click the continue button below to complete your registration.</span>
													</span>
													<!--end::Info-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-6">
												<!--begin::Option-->
												<input type="radio" class="btn-check align-items-center" name="registration_type" value="old" id="kt_create_account_form_registration_type_old" />
												<label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 align-items-center mb-10" for="kt_create_account_form_registration_type_old">
													<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
													<span class="svg-icon svg-icon-3x">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
															<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--begin::Info-->
													<span class="d-block fw-bold my-2">
														<span class="text-dark fw-bolder d-block fs-4 mb-2">Old Student</span>
														<span class="text-muted fw-bold fs-6">Are you an old student? Please click the continue button below to complete your registration.</span>
													</span>
													<!--end::Info-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
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
										<h2 class="fw-bolder text-dark">Setup Student Information</h2>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="mb-10 fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center form-label mb-3">Grade Level
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Please select your current grade level"></i></label>
										<!--end::Label-->
										<!--begin::Row-->
										<div class="row mb-2" data-kt-buttons="true">
											<!--begin::Col-->
											<div class="col">
												<!--begin::Option-->
												<label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4 active">
													<input type="radio" class="btn-check" name="grade_level" value="Grade 11" checked />
													<span class="fw-bolder fs-3">Grade 11</span>
												</label>
												<!--end::Option-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col">
												<!--begin::Option-->
												<label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
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
									<div class="mb-0 fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center form-label mb-5">Strand
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Please select your current strand"></i></label>
										<!--end::Label-->
										<!--begin::Options-->
										<div class="mb-0">
											<!--begin:Option-->
											<label class="d-flex flex-stack mb-5 cursor-pointer">
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
													<input class="form-check-input" type="radio" name="strand" value="ABM" checked="checked"/>
												</span>
												<!--end:Input-->
											</label>
											<!--end::Option-->
											<!--begin:Option-->
											<label class="d-flex flex-stack mb-5 cursor-pointer">
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
											<label class="d-flex flex-stack mb-5 cursor-pointer">
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
											<label class="d-flex flex-stack mb-5 cursor-pointer">
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
											<label class="d-flex flex-stack mb-5 cursor-pointer">
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
											<label class="d-flex flex-stack mb-0 cursor-pointer">
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
										<h2 class="fw-bolder text-dark">Setup Account Information</h2>
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
										<input type="text" class="form-control form-control-solid" name="birth_date" id="birth_date" placeholder="Select Birth Date" data-kt-calendar-input="birth_date"/>
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-10 fv-row">
										<!--begin::Label-->
										<label class="form-label">Email</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-solid" placeholder="e.g. email@address.com" name="email"/>
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-10 fv-row">
										<!--begin::Label-->
										<label class="form-label">Contact Number</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-solid" placeholder="e.g. 09XXXXXXXXX" name="contact_number" maxlength="11" />
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
										<h2 class="fw-bolder text-dark">Setup Residential Information</h2>
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
										<select id="region" name="region" class="form-select form-select-solid" data-control="select2" data-placeholder="Select Region" data-allow-clear="true" data-hide-search="true" data-kt-address-select="region">
											<option></option>
										</select>
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="form-label required">Province</label>
										<!--end::Label-->
										<!--begin::Input-->
										<select id="province" name="province" class="form-select form-select-solid" data-control="select2" data-placeholder="Select Province" data-allow-clear="true" data-hide-search="true"data-kt-address-select="province">
											<option></option>
										</select>
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="form-label required">City</label>
										<!--end::Label-->
										<!--begin::Input-->
										<select id="city" name="city" class="form-select form-select-solid" data-control="select2" data-placeholder="Select City" data-allow-clear="true" data-hide-search="true" data-kt-address-select="city">
											<option></option>
										</select>
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-15">
										<!--begin::Label-->
										<label class="form-label required">Barangay</label>
										<!--end::Label-->
										<!--begin::Input-->
										<select id="barangay" name="barangay" class="form-select form-select-solid" data-control="select2" data-placeholder="Select Barangay" data-allow-clear="true" data-hide-search="true"data-kt-address-select="barangay">
											<option></option>
										</select>
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<label class="form-check form-check-custom form-check-solid form-check-inline">
											<input class="form-check-input" type="checkbox" name="toc" value="1" />
											<span class="form-check-label fw-bold text-gray-700 fs-6">I agree to the 
											<a href="#" class="ms-1 link-primary">Terms & Conditions</a>.</span>
										</label>
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
										<h2 class="fw-bolder text-dark">Student Has Been Added!</h2>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div class="mb-0">
										<!--begin::Text-->
										<div class="fs-6 text-gray-600 mb-5">Student has been successfully added to our online grading system.</div>
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
<!--end::Modal - Add Student-->