<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html>
<head>
<title>计算机学院离散数学网 </title>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
<!-- Bootstrap -->
<link href="/muke/App/Common/Common/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="/muke/App/Common/Common/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="/muke/App/Common/Common/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="/muke/App/Common/Common/js/jquery.min.js"></script>
<script type="text/javascript" src="/muke/App/Common/Common/js/bootstrap.js"></script>
<script type="text/javascript" src="/muke/App/Common/Common/js/bootstrap.min.js"></script>
<!----font-Awesome----->
   	<link rel="stylesheet" href="/muke/App/Common/Common/fonts/css/font-awesome.min.css">
<!----font-Awesome----->
	<style>
		table{
			font-size:18px;
			font-family: 微软雅黑;
		}

		.table-responsive tr td:first-child{

			padding-left:10%;
		}

		.table-responsive tr td:nth-child(2){

		}

		.sail
		{

			 margin-right: 15px;
		}

	</style>
</head>
<body>
<div class="header_bg1">
<div class="container">
	<div class="row header">
		<div class="logo navbar-left">
			<h1><a href="index.html">计算机学院离散数学网 </a></h1>
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
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="/muke/index.php">主页</a></li>
		        <li><a href="technology">主讲教师</a></li>
		        <li><a href="about">课程简介</a></li>
		        <li><a href="blog">课程难点</a></li>
				<li class="active"><a href="thing">课程课件</a></li>
		        <li><a href="contact">在线交流</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		    <!-- start soc_icons -->
		</nav>
		<div class="soc_icons navbar-right">
			<ul class="list-unstyled text-center">
				<!--<li><a href="#"><i class="fa fa-youtube#">登录</i></a></li>-->
				<!--<li><a href="#" class="sail"><i class="fa fa-linkedin#">注册</i></a></li>-->
				<?php if(null != $_SESSION['name'] ): ?><li><a href="#" style="width:6em;"><i class="fa fa-youtube#"><?php echo $_SESSION['name'] ?></i></a></li>
					<li><a href="logout" ><i class="fa fa-linkedin#">注销</i></a></li>
				<?php else: ?>
					<li><a href="login" ><i class="fa fa-youtube#">登录</i></a></li>
					<li><a href="register"><i class="fa fa-linkedin#">注册</i></a></li><?php endif; ?>
			</ul>	
		</div>
	</div>
	<div class="clearfix"></div>
</div>
</div>

<br>
<br>
<div class="table-responsive">
	<table class="table table-hover class table-striped class" style="width:74%; margin:0 auto;">

		<thead>
		<tr>
			<th style="width:70%; padding-left:10%;">课件</th>
			<th style="width:11%; ">下载</th>
			<th style="width:11%;">预览</th></tr>
		</thead>
		<tbody>
		<tr>
			<td >第2章集合论</td>
			<td><a href="/muke/App/Common/Common/download/第2章集合论.ppt"><button type="submit"  class="btn btn-sm btn-info" >
				<span class="glyphicon glyphicon-cloud-download"></span>
			</button></a></td>

			<td><a href="/muke/App/Common/Common/ylkckj/第2章集合论.ppt/index.html" target="_blank"><button type="submit"  class="btn btn-sm btn-info" >
				<span class="glyphicon glyphicon-play"></span>
			</button></a></td></tr>
		<tr>
			<td>第3章函数</td>
			<td><a href="/muke/App/Common/Common/download/第3章函数.ppt"><button type="submit"  class="btn btn-sm btn-info" >
				<span class="glyphicon glyphicon-cloud-download"></span>
			</button></a></td>

			<td><a href="/muke/App/Common/Common/ylkckj/第3章函数.ppt/index.html" target="_blank"><button type="submit"  class="btn btn-sm btn-info" >
				<span class="glyphicon glyphicon-play"></span>
			</button></a></td></tr>
		<tr>
			<td>第三章关系与映射</td>
			<td><a href="/muke/App/Common/Common/download/第三章关系与映射.ppt"><button type="submit"  class="btn btn-sm btn-info" >
				<span class="glyphicon glyphicon-cloud-download"></span>
			</button></a></td>

			<td><a href="/muke/App/Common/Common/ylkckj/第三章关系与映射.ppt/index.html" target="_blank"><button type="submit"  class="btn btn-sm btn-info" >
				<span class="glyphicon glyphicon-play"></span>
			</button></a></td></tr>
		<tr>
			<td>第5章代数系统qs</td>
			<td><a href="/muke/App/Common/Common/download/第5章代数系统qs.ppt"><button type="submit"  class="btn btn-sm btn-info" >
				<span class="glyphicon glyphicon-cloud-download"></span>
			</button></a></td>

			<td><a href="/muke/App/Common/Common/ylkckj/第5章代数系统qs.ppt/index.html" target="_blank"><button type="submit"  class="btn btn-sm btn-info" >
				<span class="glyphicon glyphicon-play"></span>
			</button></a></td></tr>
		<tr>
			<td>第6章半群与群浅色</td>
			<td><a href="/muke/App/Common/Common/download/第6章半群与群浅色.ppt"><button type="submit"  class="btn btn-sm btn-info" >
				<span class="glyphicon glyphicon-cloud-download"></span>
			</button></a></td>

			<td><a href="/muke/App/Common/Common/ylkckj/第6章半群与群浅色.ppt/index.html" target="_blank"><button type="submit"  class="btn btn-sm btn-info" >
				<span class="glyphicon glyphicon-play"></span>
			</button></a></td></tr>
		<tr>
			<td>第7章 环与域</td>
			<td><a href="/muke/App/Common/Common/download/第7章 环与域.ppt"><button type="submit"  class="btn btn-sm btn-info" >
				<span class="glyphicon glyphicon-cloud-download"></span>
			</button></a></td>

			<td><a href="/muke/App/Common/Common/ylkckj/第7章 环与域.ppt/index.html" target="_blank"><button type="submit"  class="btn btn-sm btn-info" >
				<span class="glyphicon glyphicon-play"></span>
			</button></a></td></tr>
		<tr>
			<td>第8章图的基本概念</td>
			<td><a href="/muke/App/Common/Common/download/第8章图的基本概念.ppt"><button type="submit"  class="btn btn-sm btn-info" >
				<span class="glyphicon glyphicon-cloud-download"></span>
			</button></a></td>

			<td><a href="/muke/App/Common/Common/ylkckj/第8章图的基本概念.ppt/index.html" target="_blank"><button type="submit"  class="btn btn-sm btn-info" >
				<span class="glyphicon glyphicon-play"></span>
			</button></a></td></tr>
		<tr>
			<td>第九章常用图之平面图加两步</td>
			<td><a href="/muke/App/Common/Common/download/第九章常用图之平面图加两步.ppt"><button type="submit"  class="btn btn-sm btn-info" >
				<span class="glyphicon glyphicon-cloud-download"></span>
			</button></a></td>

			<td><a href="/muke/App/Common/Common/ylkckj/第九章常用图之平面图加两步.ppt/index.html" target="_blank"><button type="submit"  class="btn btn-sm btn-info" >
				<span class="glyphicon glyphicon-play"></span>
			</button></a></td></tr>
		<tr>
			<td>第十章命题逻辑</td>
			<td><a href="/muke/App/Common/Common/download/第十章命题逻辑.ppt"><button type="submit"  class="btn btn-sm btn-info" >
				<span class="glyphicon glyphicon-cloud-download"></span>
			</button></a></td>

			<td><a href="/muke/App/Common/Common/ylkckj/第十章命题逻辑.ppt/index.html" target="_blank"><button type="submit"  class="btn btn-sm btn-info" >
				<span class="glyphicon glyphicon-play"></span>
			</button></a></td></tr>
		<tr>
			<td>第十一章谓词逻辑</td>
			<td><a href="/muke/App/Common/Common/download/第十一章谓词逻辑.ppt"><button type="submit"  class="btn btn-sm btn-info" >
				<span class="glyphicon glyphicon-cloud-download"></span>
			</button></a></td>

			<td><a href="/muke/App/Common/Common/ylkckj/第十一章谓词逻辑.ppt/index.html" target="_blank"><button type="submit"  class="btn btn-sm btn-info" >
				<span class="glyphicon glyphicon-play"></span>
			</button></a></td></tr>
		<!--<tr>-->
			<!--<td>产品4</td>-->
			<!--<td><a href="/muke/App/Common/Common/download/第2章集合论.ppt"><button type="submit"  class="btn btn-sm btn-info" >-->
				<!--<span class="glyphicon glyphicon-cloud-download"></span>-->
			<!--</button></a></td>-->
			<!--<td><button type="submit"  class="btn btn-sm btn-info" >-->
				<!--<span class="glyphicon glyphicon-play"></span>-->
			<!--</button></td></tr>-->
		<!--<tr>-->
			<!--<td>产品4</td>-->
			<!--<td><a href="/muke/App/Common/Common/download/第2章集合论.ppt"><button type="submit"  class="btn btn-sm btn-info" >-->
				<!--<span class="glyphicon glyphicon-cloud-download"></span>-->
			<!--</button></a></td>-->
			<!--<td><button type="submit"  class="btn btn-sm btn-info" >-->
				<!--<span class="glyphicon glyphicon-play"></span>-->
			<!--</button></td></tr>-->
		</tbody>
	</table>
</div>


<div class="footer_bg"><!-- start footer -->
	<div class="container">
		<div class="row  footer">
			<div class="copy text-center">
				<p class="link"><span>&#169; All rights reserved. More Templates <a href="http://www.cssmoban.com/" target="_blank" title="长航之家">长航之家</a> - Collect from <a href="http://www.cssmoban.com/" title="不要模板" target="_blank">不要模板</a></span></p>
			</div>
		</div>
	</div>
</div>
</body>
</html>