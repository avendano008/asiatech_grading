"use strict";

// Class definition
var KTAppAddress = function () {
	var regEmpty = true;
	var regSelect;
	var provSelect;
	var citySelect;
	var brgySelect;

    // Initialize Region
	const initRegion = () => {
		if(regEmpty){
			removeOptions(provSelect);
			removeOptions(citySelect);
			removeOptions(brgySelect);
			fetch('http://localhost/asiatech_grading/assets/js/edited/component/json/refregion.json')
			.then(response => response.json())
			.then(data => {
				data.RECORDS.forEach(obj => {
			   	var regCode = obj['regCode'];
			   	var regDesc = obj['regDesc'];
			   	let newOption = new Option(regDesc, regCode);
					regSelect.add(newOption, undefined);
					sortOptions(regSelect);
		  		})
			})
			.catch(error => console.log(error));
			regEmpty = false;
			regSelect.selectedValue = '';
		}
	}


	const initProvince = () => {
		removeOptions(provSelect);
		removeOptions(citySelect);
		removeOptions(brgySelect);
		fetch('http://localhost/asiatech_grading/assets/js/edited/component/json/refprovince.json')
		.then(response => response.json())
		.then(data => {
			data.RECORDS.forEach(obj => {
				if(regSelect.value === obj['regCode']){
					var provCode = obj['provCode'];
					var provDesc = obj['provDesc'];
					let newOption = new Option(provDesc, provCode);
					provSelect.add(newOption, undefined);
					sortOptions(provSelect);
				}
	  		})
		})
		.catch(error => console.log(error));
		provSelect.selectedValue = '';
	}

	const initCity = () => {
		removeOptions(citySelect);
		removeOptions(brgySelect);
		fetch('http://localhost/asiatech_grading/assets/js/edited/component/json/refcitymun.json')
		.then(response => response.json())
		.then(data => {
			data.RECORDS.forEach(obj => {
				if(provSelect.value === obj['provCode']){
					var cityCode = obj['citymunCode'];
					var cityDesc = obj['citymunDesc'];
					let newOption = new Option(cityDesc, cityCode);
					citySelect.add(newOption, undefined);
					sortOptions(citySelect);
				}
	  	})
		})
		.catch(error => console.log(error));
		citySelect.selectedValue = '';
	}

	const initBarangay = () => {
		removeOptions(brgySelect);
		fetch('http://localhost/asiatech_grading/assets/js/edited/component/json/refbrgy.json')
		.then(response => response.json())
		.then(data => {
			data.RECORDS.forEach(obj => {
				if(citySelect.value === obj['citymunCode']){
					var brgyCode = obj['brgyCode'];
					var brgyDesc = obj['brgyDesc'];
					let newOption = new Option(brgyDesc, brgyCode);
					brgySelect.add(newOption, undefined);
					sortOptions(brgySelect);
				}
	  	})
		})
		.catch(error => console.log(error));
		brgySelect.selectedValue = '';
	}

	const sortOptions = (elem) => {
   	var tmpAry = [];
   	var selectedValue = elem[elem.selectedIndex].value;
    	for (var i=0;i<elem.options.length;i++) tmpAry.push(elem.options[i]);
    	tmpAry.sort(function(a,b){ return (a.text < b.text)?-1:1; });
    	while (elem.options.length > 0) elem.options[0] = null;
    	var newSelectedIndex = 0;
    	for (var i=0;i<tmpAry.length;i++) {
      	elem.options[i] = tmpAry[i];
      	if(elem.options[i].value == selectedValue) newSelectedIndex = i;
    	}
    	elem.selectedIndex = newSelectedIndex;
    	return;
	}

	const removeOptions = (elem) => {
	   for(var i = elem.options.length - 1; i >= 0; i--) {
	   	if(i !== 0){
	      	elem.remove(i);
	   	}
	   }
	}

	// Handle change region
   const handleChangeRegion = () => {
		regSelect.onchange = () => { 
			initProvince();
		};
   }

   // Handle change region
   const handleChangeProvince = () => {
		provSelect.onchange = () => { 
			initCity();
		};
   }

   // Handle change region
   const handleChangeCity = () => {
		citySelect.onchange = () => { 
			initBarangay();
		};
   }

   return {
   	// Public Functions
   	init: function () {
         // Define variables
			regSelect = document.querySelector('[data-kt-address-select="region"]');
			provSelect = document.querySelector('[data-kt-address-select="province"]');
			citySelect = document.querySelector('[data-kt-address-select="city"]');
			brgySelect = document.querySelector('[data-kt-address-select="barangay"]');

         if (!regSelect) {
         	return;
         }

			initRegion();
         handleChangeRegion();
         handleChangeProvince();
         handleChangeCity();
   	}
   };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
	KTAppAddress.init();
});