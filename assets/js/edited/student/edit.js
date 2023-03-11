"use strict";

// Class definition
var KTStudentProfileDetails = function () {
    // Private variables
    var form;
    var submitButton;
    var validation;

    // Private functions
    var initValidation = function () {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
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
                    'phone_number': {
                        validators: {
                            notEmpty: {
                                message: 'Phone number is required'
                            },
                            digits: {
                                message: 'Phone number must contain only digits'
                            },
                            stringLength: {
                                min: 11,
                                max: 11,
                                message: 'Phone number must contain 11 digits'
                            }
                        }
                    },
                    'email': {
                        validators: {
                            notEmpty: {
                                message: 'Email address is required'
                            },
                            emailAddress: {
                                message: 'The value is not a valid email address'
                            }
                        }
                    },
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
                    },
                    'grade_level': {
                        validators: {
                            notEmpty: {
                                message: 'Grade level is required'
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
                    submitButton: new FormValidation.plugins.SubmitButton(),
                    //defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );
    }

    var handleForm = function () {
        submitButton.addEventListener('click', function (e) {
            e.preventDefault();

            validation.validate().then(function (status) {
                if (status == 'Valid') {
                    form.submit();
                    swal.fire({
                        text: "Thank you! You've updated your basic info",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-light-primary"
                        }
                    });

                } else {
                    swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-light-primary"
                        }
                    });
                }
            });
        });
    }

    // Public methods
    return {
        init: function () {
            form = document.querySelector('#kt_student_profile_details_form');

            if (!form) {
                return;
            }

            submitButton = form.querySelector('#kt_student_profile_details_submit');
            initValidation();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTStudentProfileDetails.init();
});
