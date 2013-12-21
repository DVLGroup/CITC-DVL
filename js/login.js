/**
 * @author TrongLoi
 */
window.fbAsyncInit = function() {
  FB.init({
    appId      : '531718326909547',
    status     : true, // check login status
    cookie     : true, // enable cookies to allow the server to access the session
    xfbml      : true  // parse XFBML
  });
};
  

  // Load the SDK asynchronously
  (function(d){
   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement('script'); js.id = id; js.async = true;
   js.src = "js/all.js";
   ref.parentNode.insertBefore(js, ref);
  }(document));

function logout(){
	var data_exitlogin = "logout=true";
	$.ajax({
		type: "GET",
		url: "login.php",
		data: data_exitlogin,
		success: function(rs){
			console.log(rs);
			if(rs == "success"){
				location.reload()
			}
		}
	});				
};

function loginFB(){
		FB.login(function(response){
			FB.api('/me', function(response){
				if(response.email != null){
					var data_fblogin = 'fbemail='+response.email;
					$.ajax({
						type: "GET",
						url: 'fblogin.php',
						data: data_fblogin,
						success: function(rs){
							console.log(rs);
							if(rs == 'error'){
								alert('Có lỗi rồi!');
							}else{
								if(rs == 'signup success'){
									alert('Tài khoản đã được tạo! Với email: '+response.email+' - Mật khẩu: 123456');
								}
							}
							location.reload();
						}
					})
				};
			})
		}, {scope: 'email'});
};



function login(){
	alert('ok');
	$('#login-form .loading').html('Loading...');
	var uemail = $('#login-form input[name="user_email"]').val();
	var upass = $('#login-form input[name="user_password"]').val();
	var data_login = 'login=true&uemail='+uemail+'&upass='+upass;
	
	$.ajax({
		type: "POST",
		url:	"login.php",
		data:	data_login,
		success: function(result){
			console.log(result);
			$('#login-form .loading').html('');
			//Nếu kết quả echo 
			////Là 1 chuỗi
			if(result == "login error"){
				$('#login-form .loading').html('<i class="text-danger">Đăng nhập thất bại</i>');
			}
			else{
				location.reload();
			}
		}
	});
};


