"use strict";

// Class definition
var KTCreateStudent = function () {
	// Elements
	var modal;	
	var modalEl;

	var stepper;
	var form;
	var formSubmitButton;
	var formContinueButton;
	var formPreviousButton;

	// Variables
	var stepperObj;
	var validations = [];

	// Private Functions
	var initStepper = function () {
		// Initialize Stepper
		stepperObj = new KTStepper(stepper);

		// Stepper change event(handle hiding submit button for the last step)
		stepperObj.on('kt.stepper.changed', function (stepper) {
			if (stepperObj.getCurrentStepIndex() === 4) {
				formSubmitButton.classList.remove('d-none');
				formSubmitButton.classList.add('d-inline-block');
				formContinueButton.classList.add('d-none');
			} else if (stepperObj.getCurrentStepIndex() === 5) {
				formSubmitButton.classList.add('d-none');
				formContinueButton.classList.add('d-none');
				formPreviousButton.classList.add('d-none');
			} else {
				formSubmitButton.classList.remove('d-inline-block');
				formSubmitButton.classList.remove('d-none');
				formContinueButton.classList.remove('d-none');
			}
		});

		// Validation before going to next page
		stepperObj.on('kt.stepper.next', function (stepper) {
			console.log('stepper.next');

			// Validate form before change stepper step
			var validator = validations[stepper.getCurrentStepIndex() - 1]; // get validator for currnt step

			if (validator) {
				validator.validate().then(function (status) {
					console.log('validated!');

					if (status == 'Valid') {
						stepper.goNext();

						//KTUtil.scrollTop();
					} else {
						// Show error message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
						Swal.fire({
							text: "Sorry, looks like there are some errors detected, please try again.",
							icon: "error",
							buttonsStyling: false,
							confirmButtonText: "Ok, got it!",
							customClass: {
								confirmButton: "btn btn-light"
							}
						}).then(function () {
							//KTUtil.scrollTop();
						});
					}
				});
			} else {
				stepper.goNext();

				KTUtil.scrollTop();
			}
		});

		// Prev event
		stepperObj.on('kt.stepper.previous', function (stepper) {
			console.log('stepper.previous');

			stepper.goPrevious();
			KTUtil.scrollTop();
		});

		formSubmitButton.addEventListener('click', function (e) {
			// Validate form before change stepper step
			var validator = validations[3]; // get validator for last form

			validator.validate().then(function (status) {
				console.log('validated!');

				if (status == 'Valid') {
					// Prevent default button action
					e.preventDefault();

					// Disable button to avoid multiple click 
					formSubmitButton.disabled = true;

					// Show loading indication
					formSubmitButton.setAttribute('data-kt-indicator', 'on');

					// Simulate form submission
					setTimeout(function() {
						// Hide loading indication
						formSubmitButton.removeAttribute('data-kt-indicator');

						// Enable button
						formSubmitButton.disabled = false;

						stepperObj.goNext();
						//KTUtil.scrollTop();
					}, 2000);
				} else {
					Swal.fire({
						text: "Sorry, looks like there are some errors detected, please try again.",
						icon: "error",
						buttonsStyling: false,
						confirmButtonText: "Ok, got it!",
						customClass: {
							confirmButton: "btn btn-light"
						}
					}).then(function () {
						KTUtil.scrollTop();
					});
				}
			});
		});
	}

	var initValidation = function () {
		// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
		// Step 1
		validations.push(FormValidation.formValidation(
			form,
			{ 
				fields: {
					'first_name': {
						validators: {
							notEmpty: {
								message: 'First name is required'
							}
						}
					},
					'middle_name': {
						validators: {
							notEmpty: {
								message: 'Middle name is required'
							}
						}
					},
					'last_name': {
						validators: {
							notEmpty: {
								message: 'Last name is required'
							}
						}
					},
					'gender': {
						validators: {
							notEmpty: {
								message: 'Gender is required'
							}
						}
					},
					'birth_date': {
						validators: {
							notEmpty: {
								message: 'Birth date is required'
							}
						}
					},
					'age': {
						validators: {
							notEmpty: {
								message: 'Age is required'
							},
							stringLength: {
								min: 1,
								max: 2,
								message: 'Age must contain 1 to 2 digits only'
							},
							between: {
								min: 1,
								max: 99,
								message: 'Age must be greater than 0 and less than 99'
							}
						}
					}

				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
					})
				}
			}
		));

		// Step 2
		validations.push(FormValidation.formValidation(
			form,
			{
				fields: {
					'region': {
						validators: {
							notEmpty: {
								message: 'Region is required'
							}
						}
					},
					'province': {
						validators: {
							notEmpty: {
								message: 'Province is required'
							}
						}
					},
					'city': {
						validators: {
							notEmpty: {
								message: 'City is required'
							}
						}
					},
					'barangay': {
						validators: {
							notEmpty: {
								message: 'Barangay is required'
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
					})
				}
			}
		));

		// Step 3
		validations.push(FormValidation.formValidation(
			form,
			{
				fields: {
					'contact_email': {
						validators: {
							notEmpty: {
								message: 'Contact email is required'
							},
							emailAddress: {
								message: 'The value is not a valid contact email'
							}
						}
					},
					'contact_number': {
						validators: {
							notEmpty: {
								message: 'Contact number is required'
							},
							stringLength: {
								min: 11,
								max: 11,
								message: 'Contact number must contain 11 digits only'
							},
							digits: {
								message: 'The value is not a valid contact number'
							}
						}
					}

				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
					})
				}
			}
		));

		// Step 4
		validations.push(FormValidation.formValidation(
			form,
			{
				fields: {
					'student_number': {
						validators: {
							notEmpty: {
								message: 'Student number is required'
							}
						}
					},
					'grade': {
						validators: {
							notEmpty: {
								message: 'Grade level is required'
							}
						}
					},
					'section': {
						validators: {
							notEmpty: {
								message: 'Section is required'
							}
						}
					},
					'strand': {
						validators: {
							notEmpty: {
								message: 'Strand is required'
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
					})
				}
			}
		));
	}

	return {
		// Public Functions
		init: function () {
			// Elements
			modalEl = document.querySelector('#kt_modal_create_student');

			if (!modalEl) {
				return;
			}

			modal = new bootstrap.Modal(modalEl);

			stepper = document.querySelector('#kt_modal_create_student_stepper');
			form = document.querySelector('#kt_modal_create_student_form');
			formSubmitButton = stepper.querySelector('[data-kt-stepper-action="submit"]');
			formContinueButton = stepper.querySelector('[data-kt-stepper-action="next"]');
			formPreviousButton = stepper.querySelector('[data-kt-stepper-action="previous"]');

			initStepper();
			initValidation();
		}
	};
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTCreateStudent.init();
});