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
			<form action="index.php?controller=user&action=regisuser" class="login100-form validate-form" method="post">


				<span class="login100-form-title p-b-34 p-t-27">
					Sign Up
				</span>

				<div style="margin-bottom: 10px;">
					<p style="color: yellow; font-family: italic; font-size: 20px;">
					<?php 
						if(isset($err)) print($err);
					?>
					</p>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Full Name">
					<input class="input100" type="text" name="insertusername" placeholder="Full Name" value="<?php echo isset($username) ? $username : "" ?>">
					<span class="focus-input100" data-placeholder="&#xf207;"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Email">
					<input class="input100" type="email" name="insertemail" placeholder="Email" value="">
					<span class="focus-input100" data-placeholder="&#xf203;"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Enter password">
					<input class="input100" type="password" name="inserpassword" placeholder="Password" value="<?php echo isset($password) ? $password : "" ?>">
					<span class="focus-input100" data-placeholder="&#xf191;"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Enter DiaChi">
					<input class="input100" type="text" name="insertdiachi" placeholder="Địa Chỉ" value="<?php echo isset($diachi) ? $diachi : "" ?>">
					<span class="focus-input100" data-placeholder="&#xf210;"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Phone">
					<input class="input100" type="text" name="insertphone" placeholder="Điện Thoại " value="<?php echo isset($sdt) ? $sdt : "" ?>">
					<span class="focus-input100" data-placeholder="&#xf2b6;"></span>
				</div>
				<div class="contact100-form-checkbox">
					<input class="input-checkbox100" id="ckb1" type="checkbox" name=" I Agree to terms of user ">
					<label class="label-checkbox100" for="ckb1">
						I agree to <b>the terms of user</b>
					</label>
				</div>
				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Sign Up
					</button>
				</div>
				<div class="text-center p-t-90">
					<a class="txt1" href="index.php?controller=user&action=indexlogin">
						-> sign in
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
<script src="public/login/js/main.js"></script>