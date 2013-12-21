
<!-------------- Login -------------->
<div class="LoginForm">
	<div class="navbar" style="border-radius: 0; background-color: #fff; border: 1px solid #CCC;">
		<div class="navbar-inner" style="margin: 0 0 10px 0">
			<form class="form-horizontal">
				<legend for="Login-Email">
						<h3 class=""><i class="glyphicon glyphicon-user"></i> Đăng nhập</h3>
				</legend>
				<fieldset>
					<div class="form-group" style="margin-left: auto; margin-right: auto;">
						<img class='fbloginbtn' src="images/fbloginbtn.png" onclick="loginFB()" style="width: 200px"/>
					</div>
					<div class="form-group" style="margin-left: auto; margin-right: auto">
						<label for="Login-Email">Email:</label>
						<input class="form-textbox" type="email" placeholder="Your email" id="Login-Email"/>
					</div>
					<div class="form-group" style="margin-left: auto; margin-right: auto">
						<label for="Login-Password">Password:</label>
						<input class="form-textbox" type="password" placeholder="Your password" id="Login-Password"/>
					</div>
					<div style="">
						<label>
							<input type="checkbox" name="ckbox-rememberme" />
							Tự đăng nhập lần sau
						</label>
						<button type="submit" class="btn btn-sm btn-primary">
							Đăng nhập
						</button>
						<a href="#Signup" type="button" class="btn btn-sm btn-danger" data-toggle="modal">Đăng ký</a>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>

<!-------------- Logined -------------->
<div class="panel panel-primary">
  <div class="panel-heading">Chào bạn!</br> <b>trongloikt192@gmail.com</b></div>
  <div class="panel-body">
    <p><i class="glyphicon glyphicon-envelope"></i> Hộp thư <i class="panel">5</i></p>
    <p><a data-toggle="modal" data-target="#account-setting"><i class="glyphicon glyphicon-cog"></i> Chỉnh sửa hồ sơ</a></p>
    <p><a onclick="logout()"><i class="glyphicon glyphicon-off"></i> Đăng xuất</a></p>
  </div>
</div>

<?php 
	include 'tintuc-accsetting.php';
?>



