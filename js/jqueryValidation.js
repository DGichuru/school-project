// JavaScript Document
$(function() {
	$("#loginform").validate({
		rules: {
			email: {
				required: true,
				email: true
			},
			password: {
				required: true,
				minlength: 5
			},
			message: {
				email: "Please enter a valid email",
				password: {	
					minlength: "Password must be more than 5 characters"
					}	
			}
		}
	});
});