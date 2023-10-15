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
        console.log(obj);
	}
});
