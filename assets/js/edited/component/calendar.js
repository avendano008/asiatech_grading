"use strict";

// Class definition
var KTAppCalendar = function () {
    var datepicker;
    var dpFlatpickr;

    // Initialize datepickers --- more info: https://flatpickr.js.org/
    const initDatepickers = () => {
        var maximumDate = new Date();
        dpFlatpickr = flatpickr(datepicker, {
            enableTime: false,
            dateFormat: "Y-m-d",
            maxDate: maximumDate.setFullYear(maximumDate.getFullYear() - 15)
        });
    }

    return {
        // Public Functions
        init: function () {
            // Define variables
            datepicker = document.querySelectorAll('[data-kt-calendar-input="birth_date"]');
            initDatepickers();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTAppCalendar.init();
});
