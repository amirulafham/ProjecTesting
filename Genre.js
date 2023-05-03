(function() {
	const form = document.querySelector('sectionForm');
	const checkboxes = form.querySelectorAll('input[type=checkbox]');
	const checkboxLength = checkboxes.length;
	const firstCheckbox = checkboxlength > 0 ? checkboxes[0] : null;
	
	function init() {
		if (fisrtCheckbox) {
			for (let i =0; i < checkboxLength; i++) {
				checkboxes[i].addEventListener('change', checkValidity);
			}
			
			checkValidity();
			
		}
	}

	function isChecked() {
		for (let i = 0; i < checkboxLength; i++) {	
			if (checkboxes[i].checked) return true;
		}
		
		return false;
	}
	
	function checkValidity() {
		const errorMessage = !isChecked() ? 'At least one checkbox must be selected.' : '';
		firstCheckbox.setCustomValidity(errorMessage);
	}
	init();
}) ();
	