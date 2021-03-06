<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title>计算机学院离散数学网</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/muke/App/Common/Common/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="/muke/App/Common/Common/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="/muke/App/Common/Common/fonts/css/font-awesome.min.css">
</head>
<body>
<div class="header_bg1">
<div class="container">
	<div class="row header">
		<div class="logo navbar-left">
			<h1><a href="index.html">计算机学院离散数学网 </a></h1>
		</div>
		<div class="h_search navbar-right">
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
		        <li  class="active"><a href="about">课程简介</a></li>
		        <li><a href="blog">课程难点</a></li>
				<li><a href="thing">课程课件</a></li>
		        <li><a href="contact">在线交流</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		    <!-- start soc_icons -->
		</nav>
		<div class="soc_icons navbar-right">
			<ul class="list-unstyled text-center">
				<?php if(null != $_SESSION['name'] ): ?><li><a href="#"  style="width:6em;"><i class="fa fa-youtube#"><?php echo $_SESSION['name'] ?></i></a></li>
					<li><a href="logout" ><i class="fa fa-linkedin#">注销</i></a></li>
				<?php else: ?>
					<li><a href="login" ><i class="fa fa-youtube#">登录</i></a></li>
					<li><a href="register" ><i class="fa fa-linkedin#">注册</i></a></li><?php endif; ?>
			</ul>	
		</div>
	</div>
	<div class="clearfix"></div>
</div>
</div>
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="about row">
			<h2>关于&nbsp;&nbsp;离散数学</h2>
			<!--<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
			<p class="para">离散数学(Discrete mathematics)是研究离散量的结构及其相互关系的数学学科，是现代数学的一个重要分支。离散的含义是指 不同的连接在一起的元素，主要是研究基于离散量的结构和相互间的关系，其对象一般是有限个或可数个元素。离散数学在各学 科领域，特别在计算机科学与技术领域有着广泛的应用，同时离散数学也是计算机专业的许多专业课程，如程序设计语言、数据 结构、操作系统、编译技术、人工智能、数据库、算法设计与分析、理论计算机科学基础等必不可少的先行课程。通过离散数学 的学习，不但可以掌握处理离散结构的描述工具和方法，为后续课程的学习创造条件，而且可以提高抽象思维和严格的逻辑推理 能力，为将来参与创新性的研究和开发工作打下坚实的基础。 随着信息时代的到来......</p>
			<!--<p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words. </p>-->
			<p class="para">离散数学是传统的逻辑学，集合论（包括函数），数论基础，算法设计，组合分析，离散概率，关 系理论，图论与树，抽象代数（包括代数系统，群、环、域等），布尔代数，计算模型（语言与自动机）等汇集起来的 一门综合学科。离散数学的应用遍及现代科学技术的诸多领域。离散数学也可以说是计算机科学的基础核心学科，在离散数学中的有一 个著名的典型例子-四色定理又称四色猜想，这是世界近代三大数学难题之一，它是在1852年，由英国的一名绘图员弗南西斯·格思里提 出的，他在进行地图着色时，发现了一个现象，“每幅地图都可以仅用四种颜色着色，并且共同边界的国家都可以被着上不同的颜色”。那么这能否从数学上进行证明呢？100多年后的1976年，肯尼斯·阿佩尔（Kenneth Appel）......</p>
			<a href="single-page.html" class="fa-btn btn-1 btn-1e">更&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;多</a>
		</div>
	</div>
</div><!-- end main -->
<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<div class="main row">
			<div class="col-md-6 content_left">
				<img src="/muke/App/Common/Common/images/pic1.jpg" alt="" class="img-responsive">
			</div>
			<div class="col-md-6 content_right">
				<h4>Lorem Ipsum is simply <span>dummy text of the ornare  </span> vulputate printing and  There are many variations of passages.</h4>
				<p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words. </p>
				<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>
			</div>
		</div>
	</div>
</div>
<div class="footer_bg"><!-- start footer -->
	<div class="container">
		<div class="row  footer">
			<div class="copy text-center">
				<p class="link"><span>&#169; All rights reserved. More Templates <a href="http://www.cssmoban.com/" target="_blank" title="ģ��֮��">长航之家</a> - Collect from <a href="http://www.cssmoban.com/" title="��ҳģ��" target="_blank">不要模板</a></span></p>
			</div>
		</div>
	</div>
</div>
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
</body>
</html>