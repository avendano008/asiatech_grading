"use strict";

// Class definition
var KTAppYear = function () {
    var datepicker;
    var dpFlatpickr;

    // Initialize datepickers --- more info: https://flatpickr.js.org/
    const initDatepickers = () => {
        var maximumDate = new Date();
        dpFlatpickr = flatpickr(datepicker, {
            enableTime: false,
            dateFormat: "Y"
        });
    }

    return {
        // Public Functions
        init: function () {
            // Define variables
            datepicker = document.querySelectorAll('[data-kt-calendar-input="year"]');
            initDatepickers();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTAppYear.init();
});