
$(document).on("click", "#updatePasswordButton", function (e) {
	e.preventDefault();
	let passwordNew  = $("#passwordNew").val();
	let passwordReNew  = $("#passwordReNew").val();
	if (passwordNew !== passwordReNew) {
		alert("Password and Confirm Password do not match");
	}else{
		let obj = {
			passwordNew: passwordNew,
			passwordReNew: passwordReNew,
		};
		$.post(BASE_URL + "updatePassword/update_password", obj, function (resp) {
			let fb = JSON.parse(resp);
			if (fb.status == "true") {
				alert(fb.message);
				window.location.href = BASE_URL + "home";
			} else {
				alert(fb.message);
				window.location.href = BASE_URL + "updatePassword";
			}
		});
	}
}
);