<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1
	shrink-to-fit=no">
	<title>Signup_login_form</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
	<!-- ===NAVBAR == -->
	<?php include 'parts/nav.php'; ?>

		<div id="particles-js"></div>
		
		<div class="col-md-4" content>
			<div class="signup-cover">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-9">
							<h3 class="form-heading">Signup</h3>
							<p>Create and Explore</p>
						</div>
						<div class="col-md-3" text-right>
							<i class="fa fa-pencil-square-o fa-3x"></i>
						</div>
					</div>
					
				</div>
				<div class="card-body">
					<form id="signup_submit">
						<div class="form-group show-progress"></div>
						<div class="form-group">
							<input type="text" name="name" id="name" class="form-control" placeholder="Enter name">
							<div class="name-error error"></div>
						</div>
						<div class="form-group">
							<input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
							<div class="email-error error"></div>
						</div>

						
						
						<div class="form-group">
							<input type="password"  name="password" id="password" class="form-control" placeholder="Choose password"/>
							<div class="password-error error"></div>
							</div>
							<div class="form-group">
						<input type="password" id="confirm" class="form-control" placeholder="Confirm password"/>
							<div class="confirm-error error"></div>
						</div>

						
					
						<div class="form-group" id="gg">

                            <select class="form-control" id="gender" name="gender">
                            	<option value="0">Gender</option>
                               <option value="female">Female</option>
                               <option value="male">Male</option>
                               
                               </select>
                               <div class="gender-error error"></div>
							
						</div>
							<div class="form-group" id="dd">
							
                            <select class="form-control" id="degree" name="degree">
                            	<option value="0">Degree</option>
                               <option>B.tech</option>
                               <option>B.E</option>
                               <option>M.tech</option>
                               <option>M.E</option>
                               </select>
                               <div class="degree-error error"></div>
						</div>

						<div class="form-group">
							<buttontype="button" id="submit" class="btn
							btn-success btn-block">Create Account</button>
						</div>	<!-- form group -->	
						<div class="form-group">
							<a href="#" id="login">Already have an account</a>
						</div>		
					</form> <!--form-->
					
				</div>  <!--card body-->
			</div>  <!-- card-->
		</div> <!-- signup cover-->
             <div class="login-cover">
             	<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-9">
							<h3 class="form-heading">Login</h3>
							<p>Enter Email and Password</p>
						</div>
						<div class="col-md-3" text-right>
							<i class="fa fa-lock fa-3x"></i>
						</div>
					</div>
					
				</div>
				<div class="card-body">
					<form id="login-submit-form">
						<div class="form-group">
							<div class="login-error"></div>
						</div>
						
						<div class="form-group">
							<input type="email" name="login_email" id="login-email" class="form-control" placeholder="Enter email">
							<div class="login-email-error error"></div>
						</div>
						<div class="form-group">
							<input type="password" name="login_password" id="login-password" class="form-control" placeholder="Enter password">
							<div class="login-password-error error"></div>
						</div>
						
						
						<div class="form-group">
							<buttontype="button" id="login-submit" class="btn
							btn-success btn-block">Login</button>
						</div>	<!-- form group -->	
						<div class="form-group">
							<a href="#" id="signup">Create New account</a>
						</div>		
					</form> <!--form-->
					
				</div>  <!--card body-->
			</div>  <!-- card-->
             </div>

		</div>  <!--col-->
	</div><!--row-->
</div>  <!--container-->


<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>	
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript" src="assets/js/simple.js"></script>
<script type="text/javascript" src="assets/js/signup.js"></script>
<script type="text/javascript" src="assets/js/login.js"></script>
<script type="text/javascript" src="assets/js/particles.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
	
</body>
</html>


