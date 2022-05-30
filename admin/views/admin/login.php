<!-- 
<div class="login-box">
  <h2>Login</h2>
  <form method="post" action="index.php?controller=admin&action=loginAdmin" class="form-signin" role="form">
    <div class="user-box">
      <input type="text" name="username" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <button>Đăng Nhập</button>
    </a>
  </form>
</div> -->


<link rel="stylesheet" href="Public/admin/plugins/fontawesome-free/css/admin.css"> 

<div class="container">
		<header>Login Admin</header>
		<form method="post" action="index.php?controller=admin&action=loginAdmin">
			<div class="input-field">
				<input type="text" name="username" required>
				<label>Email or Username</label>
			</div>
			<div class="input-field">
				<input class="pswrd" type="password" name="password" required>
				<label>Password</label>
			</div>
			<div class="button">
				<div class="inner">
				</div>
				<button>LOGIN</button>
			</div>
		</form>
	
	</div>
