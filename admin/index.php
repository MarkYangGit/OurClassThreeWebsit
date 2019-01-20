<!DOCTYPE >
<html>
    <head>
     	<title>钟灵中学九三班网站管理后台--登录</title>
     	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<meta http-equiv="Content-Language" content="zh-CN" />
    	<link href="../style/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
	<div name="main_body">
	    <div name="loading">
		    <center>
		    		<h1>后台登录</h1>
		    		<hr>
				<form method="POST">
				<input type="text" name="username" placeholder="用户名">
				<br>
				<input type="password" name="password" placeholder="密码">
				<br>
				<button type="submit"><span>登录</span></button>
				</form>
			</center>
			<?php
				session_start();
				if (isset($_POST['username'])) {
					$username = $_POST['username'];
					$password = $_POST['password'];
					if ($username == 'Markyang' || $username == 'MarkYang') {//验证正确
						if($password == "2019"){
							$_SESSION['user'] = $username;
						//跳转到首页
						header('localhost:admin/action.php');
						}else{
							echo "<script>alert('登录失败，用户名或密码不正确');</script>";
							exit();
						}
					}else{
						echo "<script>alert('登录失败，用户名或密码不正确');</script>";
						exit();
					}
				}
			?>
  	    </div>	 
	</div>
	
	<div name="font">
	
	</div>    

    </body>
</html>
