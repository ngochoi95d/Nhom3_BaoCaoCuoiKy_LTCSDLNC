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
		<div class="container-login100" >
			<div class="wrap-login100">
				
				<form action="index.php?controller=user&action=loginuser" class="login100-form validate-form"  method="post">
			
					<span class="login100-form-logo">
					<a href="index.php"> <img src="public/images/logo2.png" alt=""></a>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div style="margin-bottom: 10px;">
						<p style="color: yellow; font-family: italic; font-size: 20px;">
						<?php 
							if(isset($err)) print($err);
						?>
						</p>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter Email">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="index.php?controller=user&action=indexforgetpassword">
							Forgot Password?
						</a>
						<a class="txt1" href="index.php?controller=user&action=indexregistration">
							&nbsp;&nbsp;&nbsp;Register?
						</a>
					</div>
					<?php
					// }
					?>
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




