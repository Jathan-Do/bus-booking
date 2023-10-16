$(document).on('submit', '.database_operation_from', function () {
	const url = $(this).attr('data-url');
	const data = $(this).serialize();
	$.post(url, data, function (resp) {
		let fb = JSON.parse(resp);
		if (fb.status == 'true') {
			alert("Data Successfully Inserted !")
            window.location.reload=fb.reload;
		} else {
			alert("Please try again !");
		}
	});
    return false;
});
