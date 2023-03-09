"use strict";

// Class definition
var KTAccountSettingsSigninMethods = function () {
    // UI elements
    var signInMainEl = document.querySelector('#kt_signin_email');
    var signInEditEl = document.querySelector('#kt_signin_email_edit');
    var passwordMainEl = document.querySelector('#kt_signin_password');
    var passwordEditEl = document.querySelector('#kt_signin_password_edit');

    // button elements
    var signInChangeEmail = document.querySelector('#kt_signin_email_button');
    var signInCancelEmail = document.querySelector('#kt_signin_cancel');
    var passwordChange = document.querySelector('#kt_signin_password_button');
    var passwordCancel = document.querySelector('#kt_password_cancel');

    // Private functions
    var initSettings = function () {

        // toggle UI
        signInChangeEmail.querySelector('button').addEventListener('click', function () {
            toggleChangeEmail();
        });

        signInCancelEmail.addEventListener('click', function () {
            toggleChangeEmail();
        });

        passwordChange.querySelector('button').addEventListener('click', function () {
            toggleChangePassword();
        });

        passwordCancel.addEventListener('click', function () {
            toggleChangePassword();
        });

        var toggleChangeEmail = function () {
            signInMainEl.classList.toggle('d-none');
            signInChangeEmail.classList.toggle('d-none');
            signInEditEl.classList.toggle('d-none');
        }

        var toggleChangePassword = function () {
            passwordMainEl.classList.toggle('d-none');
            passwordChange.classList.toggle('d-none');
            passwordEditEl.classList.toggle('d-none');
        }
    }

    var handleChangeEmail = function (e) {
        var validation;

        // form elements
        var signInForm = document.querySelector('#kt_signin_change_email');

        validation = FormValidation.formValidation(
            signInForm,
            {
                fields: {
                    emailaddress: {
                        validators: {
                            notEmpty: {
                                message: 'Email is required'
                            },
                            emailAddress: {
                                message: 'The value is not a valid email address'
                            }
                        }
                    },

                    confirmemailpassword: {
                        validators: {
                            notEmpty: {
                                message: 'Password is required'
                            }
                        }
                    }
                },

                plugins: { //Learn more: https://formvalidation.io/guide/plugins
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row'
                    })
                }
            }
        );

        signInForm.querySelector('#kt_signin_submit').addEventListener('click', function (e) {
            e.preventDefault();
            console.log('click');

            validation.validate().then(function (status) {
                if (status == 'Valid') {
                    swal.fire({
                        text: "Sent password reset. Please check your email",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light-primary"
                        }
                    }).then(function(){
                        signInForm.reset();
                        validation.resetForm(); // Reset formvalidation --- more info: https://formvalidation.io/guide/api/reset-form/
                    });
                } else {
                    swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light-primary"
                        }
                    });
                }
            });
        });
    }

    var handleChangePassword = function (e) {
        var validation;

        // form elements
        var passwordForm = document.querySelector('#kt_signin_change_password');

        validation = FormValidation.formValidation(
            passwordForm,
            {
                fields: {
                    currentpassword: {
                        validators: {
                            notEmpty: {
                                message: 'Current Password is required'
                            }
                        }
                    },

                    newpassword: {
                        validators: {
                            notEmpty: {
                                message: 'New Password is required'
                            }
                        }
                    },

                    confirmpassword: {
                        validators: {
                            notEmpty: {
                                message: 'Confirm Password is required'
                            },
                            identical: {
                                compare: function() {
                                    return passwordForm.querySelector('[name="newpassword"]').value;
                                },
                                message: 'The password and its confirm are not the same'
                            }
                        }
                    },
                },

                plugins: { //Learn more: https://formvalidation.io/guide/plugins
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row'
                    })
                }
            }
        );

        passwordForm.querySelector('#kt_password_submit').addEventListener('click', function (e) {
            e.preventDefault();
            console.log('click');

            validation.validate().then(function (status) {
                if (status == 'Valid') {
                    swal.fire({
                        text: "Sent password reset. Please check your email",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light-primary"
                        }
                    }).then(function(){
                        passwordForm.reset();
                        validation.resetForm(); // Reset formvalidation --- more info: https://formvalidation.io/guide/api/reset-form/
                    });
                } else {
                    swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light-primary"
                        }
                    });
                }
            });
        });
    }

    // Public methods
    return {
        init: function () {
            if (!signInMainEl) {
                return;
            }
            
            initSettings();
            handleChangeEmail();
            handleChangePassword();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTAccountSettingsSigninMethods.init();
});
