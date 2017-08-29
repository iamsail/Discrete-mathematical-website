<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<link href="Home/Common/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="Home/Common/css/style.css" rel='stylesheet' type='text/css' />
<link href="Home/Common/css/font-awesome.css" rel="stylesheet">
<link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.html"><img src="Home/Common/images/logo.png" alt=""/></a>
  </div>
  <h2 class="form-heading">login</h2>
  <div class="app-cam">
	  <!--<form method="post" action="/muke/Home/Index/logincheck">-->
	<form method="post" action="Admin/Admin/Index/logincheck">
		<input type="text" class="text" value="请输入用户名" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入用户名';}">
          <br>
		<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><br><br>
		<div class="submit"><input type="submit" onclick="myFunction()" value="Login"></div>
		<div class="login-social-link">
        </div>
		<ul >
			<li  style="padding: 0 auto;margin:0 auto; list-style: none;"><p><a href="#">Forgot Password ?</a></p></li>
			<!--<div class="clearfix"></div>-->
		</ul>
	</form>
  </div>
<script src="Home/Common/js/jquery.min.js"></script>
<script src="Home/Common/js/bootstrap.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</body>
</html>