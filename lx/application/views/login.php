<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登陆</title>
	<base href="<?php echo site_url(); ?>">
	<link rel="alternate icon" type="image/png" href="assets/i/favicon.png">
	<link rel="stylesheet" href="assets/css/amazeui.min.css"/>
<!--	<style>-->
<!--		#login{-->
<!--			width:300px;-->
<!--			height: 300px;-->
<!--			margin: 50px auto;-->
<!--			background: #eda4a2;-->
<!--			-webkit-border-radius: 12px;-->
<!--		}-->
<!--	</style>-->
<!--</head>-->
<!--<body>-->
<!--	<form action="user/getLogin" method="post" id="login">-->
<!--		<p>-->
<!--			用户名：<input type="text" name="username" id="username">-->
<!--		</p>-->
<!--		<p>-->
<!--			密码：<input type="password" name="password" id="password">-->
<!--		</p>-->
<!--		<p>-->
<!--			<input type="submit" value="登录" id="sub">-->
<!--		</p>-->
<!--	</form>-->
<!--	<script src="js/jquery.min.js"></script>-->
<!--	<script src="js/jquery.js"></script>-->
<!--	<script src="js/login.js"></script>-->
<!--</body>-->
<style>
	.header {
		text-align: center;
	}
	.header h1 {
		font-size: 200%;
		color: #333;
		margin-top: 30px;
	}
	.header p {
		font-size: 14px;
	}
</style>
</head>
<body>
<div class="header">
	<div class="am-g">
		<h1>用户登录</h1>
	</div>
	<hr />
</div>
<div class="am-g">
	<div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">

		<form method="post" class="am-form" action="user/getLogin">
			<label for="email">用户名:</label>
			<input type="text" name="username" id="admin_name" value="">
			<br>
			<label for="password">密码:</label>
			<input type="password" name="password" id="admin_pwd" value="">
			<br />
			<a href="user/zhuce">若没有账号请注册!!</a>
			<div class="am-cf">
				<input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
			</div>
		</form>
		<hr>
	</div>
</div>
</body>
</html>













