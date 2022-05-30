	<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="public/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="public/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="public/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="public/login/css/main.css">
<!--===============================================================================================-->

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form action="index.php?controller=user&action=forgetpassword" class="login100-form validate-form"  method="post">
					 
				
					<span class="login100-form-title p-b-34 p-t-27">
						forget password 
					</span>

					<div style="margin-bottom: 10px;">
						<p style="color: yellow; font-family: italic; font-size: 20px;">
						<?php 
							if(isset($err)) print($err);
							if(isset($pass)) print("Mật khẩu của bạn là: ".$pass);
						?>
						</p>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter Email">
						<input class="input100"  type="email" name="emailcheck" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							submit
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="index.php?controller=user&action=indexlogin">
							Sign In 
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="public/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="public/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="public/login/vendor/bootstrap/js/popper.js"></script>
	<script src="public/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="public/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="public/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="public/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="public/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>



