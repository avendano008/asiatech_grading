<?php
	$list = array (
		array("department"=>"ABM","description"=>"Accountancy and Business Management"),
		array("department"=>"STEM","description"=>"Science, Technology, Engineering and Mathematics"),
		array("department"=>"HUMSS","description"=>"Humanities and Social Sciences"),
		array("department"=>"GAS","description"=>"General Academic Strand"),
		array("department"=>"ICT","description"=>"Information and Communications Technology"),
		array("department"=>"HE","description"=>"Home Economics")
	);
?>
<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex">
		<!--begin::Page title-->
		<div class="page-title d-flex align-items-center flex-wrap me-3 my-5">
			<!--begin::Title-->
			<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">DEPARTMENT LIST</h1>
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
				<li class="breadcrumb-item text-muted">Department List</li>
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
		<!--begin::departments-->
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
						<input type="text" data-kt-department-list-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Department" />
					</div>
					<!--end::Search-->
					<!--begin::Export buttons-->
					<div id="kt_report_department_list_export" class="d-none"></div>
					<!--end::Export buttons-->
				</div>
				<!--end::Card title-->
				<!--begin::Card toolbar-->
				<div class="card-toolbar d-flex justify-content-end gap-5" data-kt-department-list-toolbar="base"/>
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
						<div id="kt_report_department_list_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-department-export="copy">Copy to clipboard</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-department-export="excel">Export as Excel</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-department-export="csv">Export as CSV</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-department-export="pdf">Export as PDF</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</div>
					<!--end::Export dropdown-->
					<!--begin::Add department-->
					<button type="button" class="btn btn-primary w-200px" data-bs-toggle="modal" data-bs-target="#kt_modal_add_department">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
						<span class="svg-icon svg-icon-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
								<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						Add Department
					</button>
					<!--end::Add department-->
				</div>
				<!--end::Card toolbar-->
				<!--begin::Group actions-->
				<div class="d-flex justify-content-end gap-5 align-items-center d-none" data-kt-department-list-toolbar="selected">
					<div class="fw-bolder me-5">
						<span class="me-2" data-kt-department-list-select="selected_count"></span>
						Selected
					</div>
					<button type="button" class="btn btn-danger w-200px" data-kt-department-list-select="delete_selected">Delete Selected</button>
				</div>
				<!--end::Group actions-->
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body pt-0">
				<!--begin::Table-->
				<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_report_department_list_table">
					<!--begin::Table head-->
					<thead>
						<!--begin::Table row-->
						<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
							<th class="w-10px pe-2">
								<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
									<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_report_department_list_table .form-check-input" value="1" />
								</div>
							</th>
							<th class="min-w-100px">Department</th>
							<th class="min-w-250px">Description</th>
							<th class="text-end min-w-70px"></th>
						</tr>
						<!--end::Table row-->
					</thead>
					<!--end::Table head-->
					<!--begin::Table body-->
					<tbody class="fw-bold text-gray-600">
						<?php for($i = 0; $i < count($list); $i++): ?>
							<!--begin::Table row-->
							<tr>
								<!--begin::Checkbox-->
								<td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" />
									</div>
								</td>
								<!--end::Checkbox-->
								<!--begin::Department=-->
								<td><?=$list[$i]['department']?></td>
								<!--end::Department=-->
								<!--begin::Description=-->
								<td><?=$list[$i]['description']?></td>
								<!--end::Description=-->
								<!--begin::Actions=-->
								<td class="text-end">
									<a href="#" class="px-3 text-hover-primary" data-toggle="tooltip" data-placement="top" title="Edit" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_department">
										<i class="fa fa-edit" aria-hidden="true"></i>
									</a>
									<a href="#" class="px-3 text-hover-danger" data-toggle="tooltip" data-placement="top" title="Delete" data-kt-department-list-filter="delete_row">
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
		<!--end::departments-->
	</div>
	<!--end::Container-->
</div>
<!--end::Post-->
<!--begin::Modal - Department - Add-->
<div class="modal fade" id="kt_modal_add_department" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Form-->
			<form class="form" action="#" id="kt_modal_add_department_form" data-kt-redirect="?page=department">
				<!--begin::Modal header-->
				<div class="modal-header" id="kt_modal_add_department_header">
					<!--begin::Modal title-->
					<h2 class="fw-bolder">Add Department</h2>
					<!--end::Modal title-->
					<!--begin::Close-->
					<div id="kt_modal_add_department_close" class="btn btn-icon btn-sm btn-active-icon-primary">
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
				<div class="modal-body py-10 px-lg-17">
					<!--begin::Scroll-->
					<div class="scroll-y me-n7 pe-7" id="kt_modal_add_department_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_department_header" data-kt-scroll-wrappers="#kt_modal_add_department_scroll" data-kt-scroll-offset="300px">
						<!--begin::Input group-->
						<div class="fv-row mb-7">
							<!--begin::Label-->
							<label class="required fs-6 fw-bold mb-2">Department</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder="Department" name="department" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-15">
							<!--begin::Label-->
							<label class="required fs-6 fw-bold mb-2">Description</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder="Description" name="description" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
					</div>
					<!--end::Scroll-->
				</div>
				<!--end::Modal body-->
				<!--begin::Modal footer-->
				<div class="modal-footer flex-center">
					<!--begin::Button-->
					<button type="reset" id="kt_modal_add_department_cancel" class="btn btn-light me-3">Discard</button>
					<!--end::Button-->
					<!--begin::Button-->
					<button type="submit" id="kt_modal_add_department_submit" class="btn btn-primary">
						<span class="indicator-label">Submit</span>
						<span class="indicator-progress">Please wait...
						<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
					</button>
					<!--end::Button-->
				</div>
				<!--end::Modal footer-->
			</form>
			<!--end::Form-->
		</div>
	</div>
</div>
<!--end::Modal - Department - Add-->
<!--begin::Modal - Department - Edit-->
<div class="modal fade" id="kt_modal_edit_department" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Form-->
			<form class="form" action="#" id="kt_modal_edit_department_form" data-kt-redirect="?page=department">
				<!--begin::Modal header-->
				<div class="modal-header" id="kt_modal_edit_department_header">
					<!--begin::Modal title-->
					<h2 class="fw-bolder">Edit Department</h2>
					<!--end::Modal title-->
					<!--begin::Close-->
					<div id="kt_modal_edit_department_close" class="btn btn-icon btn-sm btn-active-icon-primary">
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
				<div class="modal-body py-10 px-lg-17">
					<!--begin::Scroll-->
					<div class="scroll-y me-n7 pe-7" id="kt_modal_edit_department_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_edit_department_header" data-kt-scroll-wrappers="#kt_modal_edit_department_scroll" data-kt-scroll-offset="300px">
						<!--begin::Input group-->
						<div class="fv-row mb-7">
							<!--begin::Label-->
							<label class="required fs-6 fw-bold mb-2">Department</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder="Department" name="department" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-15">
							<!--begin::Label-->
							<label class="required fs-6 fw-bold mb-2">Description</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder="Description" name="description" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
					</div>
					<!--end::Scroll-->
				</div>
				<!--end::Modal body-->
				<!--begin::Modal footer-->
				<div class="modal-footer flex-center">
					<!--begin::Button-->
					<button type="reset" id="kt_modal_edit_department_cancel" class="btn btn-light me-3">Discard</button>
					<!--end::Button-->
					<!--begin::Button-->
					<button type="submit" id="kt_modal_edit_department_submit" class="btn btn-primary">
						<span class="indicator-label">Submit</span>
						<span class="indicator-progress">Please wait...
						<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
					</button>
					<!--end::Button-->
				</div>
				<!--end::Modal footer-->
			</form>
			<!--end::Form-->
		</div>
	</div>
</div>
<!--end::Modal - Department - Edit-->