$(window).on('load',function() {
	var all_skills = [
		'University College London',
		'Imperial College',
		'Kings College London',
		'London School of Economics',
		'Manchester University',
		'University of Bath',
		'York University',
		'City University of London'
	];
    $('#university').autocomplete({
        source: ''
        minLength: 4,
        autoFocus: true,
    	delay: 250
    });

});
