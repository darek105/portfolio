$('#accordion').collapse({
	toggle: true
});

$('#accordion').on('shown.bs.collapse', function () {
	alert('Szkoda, że zamknąłeś to okienko...');
	//jakikolwiek Twój kod
});

$('#toggleAccordion').on('click', function () {
	$('#accordion').collapse('toggle');
});