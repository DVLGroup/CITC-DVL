
<?php 
 	
	////Nếu là user thì gán $isUser = true
	if (isset($_SESSION['user'])){	
	
?>
<!-------------- Logined -------------->
<div class="panel panel-primary">
  <div class="panel-heading">Chào bạn!</br> <b><?php echo $_SESSION['user']; ?></b></div>
  <div class="panel-body">
    <div class="">
    	<h4></h4>
    </div>
  </div>
</div>


<?php
}else{
?>

<!-------------- Login -------------->
<div id="login-form">
	<div class="navbar" style="border-radius: 0; background-color: #fff; border: 1px solid #CCC;">
		<div class="navbar-inner" style="margin: 0 0 10px 0">
			<form class="form-horizontal">
				<legend for="Login-Email">
					<h3 class=""><i class="glyphicon glyphicon-user"></i> Đăng nhập</h3>
				</legend>
				<fieldset>
					<p class="loading"></p>
					<div class="form-group" style="margin-left: auto; margin-right: auto;">
						<img class='fbloginbtn' src="images/fbloginbtn.png" onclick="loginFB()" style="width: 200px"/>
					</div>
					<div class="form-group" style="margin-left: auto; margin-right: auto">
						<label for="Login-Email">Email:</label>
						<input class="form-textbox" name="user_email" type="email" placeholder="Your email" id="Login-Email"/>
					</div>
					<div class="form-group" style="margin-left: auto; margin-right: auto">
						<label for="Login-Password">Password:</label>
						<input class="form-textbox" name="user_password" type="password" placeholder="Your password" id="Login-Password"/>
					</div>
					<div style="">
						<label>
							<input type="checkbox" name="ckbox-rememberme" />
							Tự đăng nhập lần sau
						</label>
						<button type="button" class="btn btn-sm btn-primary" onclick="login()">
							Đăng nhập
						</button>
						<a href="#Signup" type="button" class="btn btn-sm btn-danger" data-toggle="modal">Đăng ký</a>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>


<?php
}
?>

