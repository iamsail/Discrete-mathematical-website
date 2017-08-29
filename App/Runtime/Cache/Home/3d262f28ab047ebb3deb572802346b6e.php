<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html>
<head>
<title>计算机学院离散数学网</title>
<!-- Bootstrap -->
<link href="/muke/App/Common/Common/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="/muke/App/Common/Common/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!----font-Awesome----->
   	<link rel="stylesheet" href="/muke/App/Common/Common/fonts/css/font-awesome.min.css">
<!----font-Awesome----->
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
				  <li class="active"><a href="technology">主讲教师</a></li>
				  <li><a href="about">课程简介</a></li>
				  <li><a href="blog">课程难点</a></li>
				  <li><a href="#">课程课件</a></li>
				  <li><a href="contact">在线交流</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		    <!-- start soc_icons -->
		</nav>
		<div class="soc_icons navbar-right">
			<ul class="list-unstyled text-center">
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
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="technology row">
			<h2>我们敬爱的园丁</h2>
			<div class="technology_list">
				<h4>曹天杰</h4>
				<div class="col-md-10 tech_para">
					<!--<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
					<p class="para">男，1967年12月出生。
						毕业于中科院软件所，教授，博士，博士生导师。
						从事安全协议、网络安全、隐私保护等方面研究.在国内外重要学术期刊、会议上发表学术论文80余篇，
						其中被SCI检索的论文10余篇，被EI检索的论文50余篇。
						主持江苏省基础研究计划、中国科学院信息安全国家重点实验室开放基金、
						东南大学移动通信国家重点实验室开放基金等项目。
						参加国家自然科学基金等项目的研究。曹天杰曾获江苏省多媒体课件大赛三等奖，
						煤炭工业协会科学技术奖二等奖等。
						出版“十一五”国家级规划教材一部。
						被聘为中国保密协会隐私保护专业委员会委员......


						</p>
				</div>
				<div class="col-md-2 images_1_of_4 bg1 pull-right">
					<span class="bg"><i class="fa fa-files-o"></i> </span>
				</div>
				<div class="clearfix"></div>
				<div class="read_more">
					<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>
				</div>	
			</div>
			<div class="technology_list1">
				<h4>张永平</h4>
				<div class="col-md-10 tech_para">
					<!--<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
					<p class="para">教授，硕士生导师
						研究方向：网络与信息安全，Android系统。全国计算机继续教育研究会江苏委员会理事，江苏省计算机学会计算机安全专业委员会常务委员，
						江苏省计算机学会计算机与通信专业委员会委员，淮北矿业集团公司工程技术研究院机电信息研究所研究员。
						1.教学
						教学课程有：
						研究生层次：密码学、算法与复杂性理论；
						本科层次：信息论与编码、算法设计与分析、离散数学、数据结构、大学计算机基础等。
						主持省教学改革项目“大学计算机基础课程分层教学的研究和实践”，
						获得校级优秀教学成果二等奖，全国煤炭教育优秀研究......
						</p>
				</div>
				<div class="col-md-2 images_1_of_4 bg1">
					<span class="bg"><i class="fa fa-laptop"></i> </span>
				</div>
				<div class="clearfix"></div>
				<div class="read_more">
					<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>
				</div>	
			</div>
			<div class="technology_list1">
				<h4>张艳群</h4>
				<div class="col-md-10 tech_para">
					<!--<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
					<p class="para">副教 授，博士。
						研究方向：信息安全、信息隐藏。
						1.教学
						主要讲授本科生课程：“数据结构”、“离散数学”、“信息隐藏”。
						2.科研
						主持中国矿业大学青年基金：动态网格环境下 信任策略的研究；
						参与江苏 省自然科学基金：嵌入式无线传感网络在矿区数据采集中的应用研究；
						参与“租赁设备管理系统的升级改造”和“隐患管理信息系统的研究 与开发”项目的开发。
						参与“租赁设备管理系统的升级改造”和“隐患管理信息系统的研究 与开发”项目的开发。
						负责计算机学院离散数学网(即本网站)开发
						3.论著
						参与编写本科教材《数据库原理及应用》，发表......
					</p>
				</div>
				<div class="col-md-2 images_1_of_4 bg1">
					<span class="bg"><i class="fa fa-cog"></i></span>
				</div>
				<div class="clearfix"></div>
				<div class="read_more">
					<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>
				</div>	
			</div>
			<div class="technology_list1">
				<h4>王虎</h4>
				<div class="col-md-10 tech_para">
					<!--<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
					<p class="para">男，1977年11月出生，副教授，
						研究方向:计算机网络和网络安全等
						1999年6月本科毕业于中国矿业大学计算机科学与技术学院计算机应用专业，
						2005年7月在中国矿业大学计算机科学与技术学院取得硕士学位。
						参编教材两部，作为第一作者公开发表学术论文6篇，教学论文4篇，
						其中核心期刊学术论文3篇，国际会议学术论文2篇，并有一篇论文录入ISTP检索。
						参与“十二.五国家科技支撑计划课题”、863等多项纵向及横向科研课题，
						主持校青年基金项目一项。
						所获奖励:
						2006年获校级优秀教学成果奖一等奖
						2007年获江苏省教学成果......
				<p>
				</div>
				<div class="col-md-2 images_1_of_4 bg1">
					<span class="bg"><i class="fa fa-files-o"></i> </span>
				</div>
				<div class="clearfix"></div>
				<div class="read_more">
					<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>
				</div>	
			</div>
			<ul class="pagination">
			  <li><a href="#">&laquo;</a></li>
			  <li><a href="#">1</a></li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li><a href="#">4</a></li>
			  <li><a href="#">5</a></li>
			  <li><a href="#">&raquo;</a></li>
			</ul>
			<div class="alert alert-warning alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			  <strong>Warning!</strong> Better check yourself, you're not looking too good.
			</div>
		</div>
	</div>
</div><!-- end main -->
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