$(document).on("click", "#loginbutton", function () {
	let email = $("#email").val();
	let password = $("#password").val();
	if (email == "") {
		alert("Please Enter Your Email !!!");
	} else if (password == "") {
		alert("Please Enter Your Password !!!");
	} else {
		let obj = {
			email: email,
			password: password,
		};
		$.post(BASE_URL + "signIn/login", obj, function (resp) {
			let fb = JSON.parse(resp);
			if (fb.status == "true") {
				window.location.href = BASE_URL + "home";
			} else {
				alert("Username and password not match");
			}
		});
	}
});

$(document).on("click", "#signupbutton", function () {
	let name = $("#nameUser").val();
	let email = $("#emailSignup").val();
	let password = $("#passwordSignup").val();
	let confirm_password = $("#repasswordSignup").val();

	if (email == "") {
		alert("Please Enter Your Email !!!");
	} else if (name == "") {
		alert("Please Enter Your Name !!!");
	} else if (password == "") {
		alert("Please Enter Your Password !!!");
	} else if (password !== confirm_password) {
		alert("Password and Confirm Password do not match");
	} else {
		let obj = {
			email: email,
			password: password,
			name: name,
		};
		$.post(BASE_URL + "signIn/signup", obj, function (resp) {
			let fb = JSON.parse(resp);
			if (fb.status == "true") {
				alert("Đăng ký tài khoản thành công");
				window.location.href = BASE_URL + "signIn";
			} else {
				alert(fb.message);
			}
		});
	}
});
