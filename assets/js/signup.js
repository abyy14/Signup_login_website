$(document).ready(function(){
	var name="";
	var email="";
	var password="";
	var confirm="";
	
	var  degree="";
	var gender="";
	var name_reg = /^[a-z ]+$/i;
	var email_reg = /^[a-z]+[0-9a-zA-Z_\.]*@[a-z_]+\.[a-z]+$/;
	var password_reg = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9]{8,}$/;
	
	// === name validation ===
	$("#name").focusout(function(){
		var store=$.trim($("#name").val());
		if(store.length==""){
			$(".name-error").html("Name is reqd");
			$("#name").addClass("border-red");
			$("#name").removeClass("border-green");
			name="";

			

		}else if(name_reg.test(store)){

		
			$(".name-error").html("");
			$("#name").addClass("border-green");
			$("#name").removeClass("border-red");
			name = store;
			
		}else{
			$(".name-error").html("integer is not allowed");
			$("#name").addClass("border-red");
			$("#name").removeClass("border-green");
			name="";
			
		}

	}) //close validation

	//gender validation



	// *=== email validation  ===*
	$("#email").focusout(function(){
		var email_store = $.trim($("#email").val());
		if(email_store.length==""){
			$(".email-error").html("email is reqd");
			$("#email").addClass("border-red");
			$("#email").removeClass("border-green");
			email="";
		}else if(email_reg.test(email_store)){
			$.ajax({
				type : 'POST',
				url  : 'ajax/signup.php',
				dataType: 'json',
				beforeSend : function(){
					$(".email-error").html('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>');
                
				},
				data : {'check_email' : email_store},
				success : function(feedback){
					setTimeout(function(){
							if(feedback['error'] == 'email_success'){
						$(".email-error").html("<div class='text-success'><i class='fa fa-check-circle'></i>Available</div>");
			            $("#email").addClass("border-green");
			            $("#email").removeClass("border-red");
			            email=email_store;
					}else if(feedback['error'] =='email_fail'){
						$(".email-error").html("Sorry this email already exist");
			            $("#email").addClass("border-red");
			            $("#email").removeClass("border-green");
			            email="";
			        }
			    },1000);
				
				}

			});
		}else{
			$(".email-error").html("Invalid email format");
			$("#email").addClass("border-red");
			$("#email").removeClass("border-green");
			email="";

		}
	})// close email validation



	//validate password

	$("#password").focusout(function(){
		var password_store = $.trim($("#password").val());
		if(password_store.length == ""){
           $(".password-error").html("Password is reqd");
           $("#password").addClass("border-red");
			$("#password").removeClass("border-green");
			password = "";

		}else if(password_reg.test(password_store)){
               $(".password-error").html("<div class='text-success'><i class='fa fa-check-circle'></i>Your password is strong</div>");
               $("#password").addClass("border-green");
			   $("#password").removeClass("border-red");
			   password = password_store;


		}else {
			$(".password-error").html("8 characters or longer.Combine upper and lowercase letters and numbers");
           $("#password").addClass("border-red");
			$("#password").removeClass("border-green");
			password = "";
		}

		})

	// validate confirm password
	$("#confirm").focusout(function(){
		var confirm_store = $.trim($("#confirm").val());
		if(confirm_store.length == ""){
			$(".confirm-error").html("confirm password is reqd");
            $("#confirm").addClass("border-red");
			$("#confirm").removeClass("border-green");
			confirm= "";

		}else if(confirm_store != password){

			$(".confirm-error").html("password not matched");
            $("#confirm").addClass("border-red");
			$("#confirm").removeClass("border-green");
			confirm= "";

		}else{
			$(".confirm-error").html("");
            $("#confirm").addClass("border-green");
			$("#confirm").removeClass("border-red");
			confirm= confirm_store;


		}




	})// confirm password








//gender validation
      
      	$("#gender").focusout(function(){
		var gender_store=$("#gender").val();
		if(gender_store=="0"){
			$(".gender-error").html("select anyone");
			$("#gender").addClass("border-red");
			$("#gender").removeClass("border-green");
			gender="";

          }else{
	        $(".gender-error").html("");
			$("#gender").addClass("border-green");
			$("#gender").removeClass("border-red");
			gender = gender_store;
			
}
});

      	
//degree validation
$("#degree").focusout(function(){
		var degree_store=$("#degree").val();
		if(degree_store=="0"){
			$(".degree-error").html("select anyone");
			$("#degree").addClass("border-red");
			$("#degree").removeClass("border-green");
			degree="";

          }else{
	        $(".degree-error").html("");
			$("#degree").addClass("border-green");
			$("#degree").removeClass("border-red");
			degree = degree_store;
			
}
});

      // *=== submit the form ===*

	$("#submit").click(function(){
		if(name.length == ""){
			$(".name-error").html("Name is reqd");
			$("#name").addClass("border-red");
			$("#name").removeClass("border-green");
			name="";

		}

			if(email.length == ""){
			$(".email-error").html("email is reqd");
			$("#email").addClass("border-red");
			$("#email").removeClass("border-green");
			email="";

		}

		if(password.length == ""){
			$(".password-error").html("password is reqd");
			$("#password").addClass("border-red");
			$("#password").removeClass("border-green");
			password="";

		}

		if(confirm.length == ""){
			$(".confirm-error").html("confirm password is reqd");
			$("#confirm").addClass("border-red");
			$("#confirm").removeClass("border-green");
			confirm="";

		}
	
		if (name.length != "" && email.length != "" && password.length != "" && confirm.length !="" && gender!="0" && degree!="0") {
			$.ajax({
				type : 'POST',
				url : 'ajax/signup.php?signup=true',
				data : $("#signup_submit").serialize(),
				dataType : 'json',
				beforeSend : function(){
					$(".show-progress").addClass('progress');

				},
				
				success : function(feedback){
					setTimeout(function(){
							if(feedback['error']=="success"){
								location = feedback.msg;
							}
						},3000);
					}
				

			});
		}
	})
	
});