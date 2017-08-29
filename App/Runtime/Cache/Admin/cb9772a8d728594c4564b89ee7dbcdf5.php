<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/muke/App/Admin/Common/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="/muke/App/Admin/Common/css/style.css" rel='stylesheet' type='text/css' />
<link href="/muke/App/Admin/Common/font-awesome.css" rel="stylesheet">
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.html"><img src="/muke/App/Admin/Common/images/logo.png" alt=""/></a>
  </div>
  <h2 class="form-heading">login</h2>
  <div class="app-cam">
	  <!--<form method="post" action="/muke/Home/Index/logincheck">-->
	<form method="post" action="/muke/Admin/Index/logincheck">
		<input type="text" class="text" value="请输入用户名" id="firstname" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入用户名';}">
          <br>
		<input type="password" value="Password"  name="password"  id="lastname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><br><br>
		<div class="submit"><input type="submit" onclick="myFunction()" value="Login"></div>
		<div class="login-social-link">
        </div>
		<ul >
			<li  style="padding: 0 auto;margin:0 auto; list-style: none;"><p><a href="#">Forgot Password ?</a></p></li>
			<!--<div class="clearfix"></div>-->
		</ul>
	</form>
  </div>
<script language="javascript">
	  function check()
	  {	//用户名检测
		  var firstname=document.getElementById("firstname").value;
		  var Expression=/\w{3,10}/;
		  var objExp=new RegExp(Expression);
		  if(objExp.test(firstname)==true){
		  }else{
			  window.alert("用户名不能为空，且必须为3到10为的字符串");
			  return false;
		  }
		  //密码检测
		  var lastname=document.getElementById("lastname").value;
		  var Expression=/^[0-9A-Za-z,.#]{6,18}$/;
		  var objExp=new RegExp(Expression);
		  if(objExp.test(lastname)==true){
		  }else{
			  window.alert("密码不得少于6为位，不得多于18位");
			  return false;
		  }
	  }
</script>
<script src="/muke/App/Admin/Common/js/jquery.min.js"></script>
<script src="/muke/App/Admin/Common/js/bootstrap.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</body>
</html>