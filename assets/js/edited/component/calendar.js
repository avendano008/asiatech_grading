"use strict";

// Class definition
var KTAppCalendar = function () {
    var startDatepicker;
    var startFlatpickr;

    // Initialize datepickers --- more info: https://flatpickr.js.org/
    const initDatepickers = () => {
        var maximumDate = new Date();
        startFlatpickr = flatpickr(startDatepicker, {
            enableTime: false,
            dateFormat: "Y-m-d",
            maxDate: maximumDate.setFullYear(maximumDate.getFullYear() - 15)
        });
    }

    return {
        // Public Functions
        init: function () {
            // Define variables
            startDatepicker = document.getElementById('birth_date');
            initDatepickers();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTAppCalendar.init();
});
