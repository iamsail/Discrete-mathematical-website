<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>计算机学院离散数学网 </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link href="/muke/App/Common/Common/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="/muke/App/Common/Common/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="/muke/App/Common/Common/fonts/css/font-awesome.min.css">
	<style>
		.sail
		{
			margin-right: 15px;
		}
		.lsail
		{
			/*background-color: darkseagreen;*/
		}
	</style>

</head>
<body>
<div class="header_bg1">
<div class="container">
	<div class="row header">
		<div class="logo navbar-left">
			<h1><a href="/muke/index.php">计算机学院离散数学网 </a></h1>
		</div>
		<div class="h_search navbar-right" style="margin-right: 0px;">
			<form>
				<input type="text" class="text" value="Enter text here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter text here';}">
				<input type="submit" value="search">
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="row h_menu">
		<nav class="navbar navbar-default navbar-left" role="navigation">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		</nav>
		<div class="soc_icons navbar-right">
			<ul class="list-unstyled text-center">
				<li ><a href="#"  style="background-color: #F05252;"><i class=" fa fa-youtube#" >登录</i></a></li>
				<li><a href="register" class="sail"><i class=" fa fa-linkedin#">注册</i></a></li>
			</ul>	
		</div>
	</div>
	<div class="clearfix"></div>
</div>
</div>
<br>
<br>
<br>

<!--自己添加的代码-->

<div class="container ">
	<div class="jumbotron lsail">
		<h1 style="text-align: center;font-family: 微软雅黑;color:black;">登录</h1>
		<div >
		<!--<p>这是一个超大屏幕（Jumbotron）的实例。</p>-->
		<div class="form-group" >
			<div class="col-sm-offset-1 col-sm-10 ">
				<a href="#" class="btn btn-info btn-lg disabled">
					<span class="glyphicon glyphicon-hand-right"></span>
				</a>
			</div>
		</div>
	</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<form class="form-horizontal" role="form" method="post" action="/muke/Home/Index/logincheck" onsubmit="return check();">
		<!--<form class="form-horizontal" role="form" method="post" action="Home/Index/logincheck">-->
			<!--<form class="form-horizontal" role="form" method="post" action="Home/Index/logincheck">-->
			<div class="form-group">
				<label for="firstname" class="col-sm-4 control-label text-info"   style="font-family: 微软雅黑; font-size: 1.5rem;">用户名</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="username" id="firstname" placeholder="请输入用户名" style="border-width: thin;border-color:lightskyblue;">
				</div>
			</div>
			<div class="form-group">
				<label for="lastname" class="col-sm-4 control-label text-info" style="font-family: 微软雅黑; font-size: 1.5rem;">密码</label>
				<div class="col-sm-4">
					<input type="password" class="form-control" name="password" id="lastname" placeholder="请输入密码">
				</div>
			</div>

			<br>
			<div class="form-group">
				<div class="col-sm-offset-5 col-sm-10">
					<button type="submit" name="submit" class="btn btn-lg btn-info" value="登录">
						<span class="glyphicon glyphicon-user"></span> User 登录
					</button>
				</div>
			</div>
		</form>
		<br>
		<br>
	</div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="footer_bg"><!-- start footer -->
	<div class="container">
		<div class="row  footer">
			<div class="copy text-center">
				<p class="link"><span>&#169; All rights reserved. More Templates <a href="http://www.cssmoban.com/" target="_blank" title="航仔之家">航仔之家</a> - Collect from <a href="http://www.cssmoban.com/" title="不要模板" target="_blank">不要模板</a></span></p>
			</div>
		</div>
	</div>
</div>
<script language="javascript">
	function check()
	{	//用户名检测
		var firstname=document.getElementById("firstname").value;
		var Expression=/^\d{8}$/;
		var objExp=new RegExp(Expression);
		if(objExp.test(firstname)==true){
		}else{
			window.alert("用户名须为8位数字");
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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script type="text/javascript" src="/muke/App/Common/Common/js/jquery.min.js"></script>
<script type="text/javascript" src="/muke/App/Common/Common/js/bootstrap.js"></script>
<script type="text/javascript" src="/muke/App/Common/Common/js/bootstrap.min.js"></script>
</body>
</html>