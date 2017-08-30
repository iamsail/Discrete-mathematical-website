<!--<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="GBK" />

    <title>离散数学网</title>
	<!--现在的问题看来是引入不了css文件-->
	<!--现在的问题看来是引入不了css文件-->
	<!--现在的问题看来是引入不了css文件-->
	<!--现在的问题看来是引入不了css文件-->
	<!--现在的问题看来是引入不了css文件-->
	<!--现在的问题看来是引入不了css文件-->
    <!--<link rel="stylesheet" type="text/css" href="{dede:global.cfg_cmspath/}/templets/lisanshuxue/css/index.css" />	-->
    <link rel="stylesheet" type="text/css" href=" /sx/css/head.css" />	
</head>
<body>
    
    <!--首页头部-->
	<div		class="container6"><!--外部大div-->

		<div><img src="/sx/css/xiaohui.png" alt="" ></div>

			<div		class="sail">计算机学院离散数学网</div>
		<div class="log">
		<?php
		@session_start();
		if(isset($_SESSION['name']))
		{
			echo $_SESSION['name'].'欢迎回家'.' | '."<a href='/sx/includefiles/userlogout.php'>注销</a>";
		}
		else
		{
			echo "<a href='/sx'>主页</a>"." | "."<a href='/sx/includefiles/login.php'>登录</a>"." | "."<a href='/sx/includefiles/register.php'>注册</a>";
		}

		?>
		</div>

		 <!--<div class="log"><a href="/sx">首页</a> | <a href="/sx/includefiles/login.php">登录</a> | <a href="/sx/includefiles/register.php">注册</a></div>-->
		<div style="clear:both;"></div>
	</div>
