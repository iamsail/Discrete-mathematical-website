<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />

    <title>离散数学网</title>
	<!--现在的问题看来是引入不了css文件-->
	<!--现在的问题看来是引入不了css文件-->
	<!--现在的问题看来是引入不了css文件-->
	<!--现在的问题看来是引入不了css文件-->
	<!--现在的问题看来是引入不了css文件-->
	<!--现在的问题看来是引入不了css文件-->
    <link rel="stylesheet" type="text/css" href="/sx/css/index.css" />
<!--插件-->


	<link rel="stylesheet" href="css/example.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/sx/css/index.css" />
	<style>
		body {
			-webkit-font-smoothing: antialiased;
			font: normal 15px/1.5 "Helvetica Neue", Helvetica, Arial, sans-serif;
			color: #232525;


		}

		#slides {
			display: none
		}

		#slides .slidesjs-navigation {
			margin-top:5px;
		}

		a.slidesjs-next,
		a.slidesjs-previous,
		a.slidesjs-play,
		a.slidesjs-stop {
			background-image: url(img/btns-next-prev.png);
			background-repeat: no-repeat;
			display:block;
			width:12px;
			height:18px;
			overflow: hidden;
			text-indent: -9999px;
			float: left;
			margin-right:5px;
		}

		a.slidesjs-next {
			margin-right:10px;
			background-position: -12px 0;
		}

		a:hover.slidesjs-next {
			background-position: -12px -18px;
		}

		a.slidesjs-previous {
			background-position: 0 0;
		}

		a:hover.slidesjs-previous {
			background-position: 0 -18px;
		}

		a.slidesjs-play {
			width:15px;
			background-position: -25px 0;
		}

		a:hover.slidesjs-play {
			background-position: -25px -18px;
		}

		a.slidesjs-stop {
			width:18px;
			background-position: -41px 0;
		}

		a:hover.slidesjs-stop {
			background-position: -41px -18px;
		}

		.slidesjs-pagination {
			margin: 7px 0 0;
			float: right;
			list-style: none;
		}

		.slidesjs-pagination li {
			float: left;
			margin: 0 1px;
		}

		.slidesjs-pagination li a {
			display: block;
			width: 13px;
			height: 0;
			padding-top: 13px;
			background-image: url(img/pagination.png);
			background-position: 0 0;
			float: left;
			overflow: hidden;
		}

		.slidesjs-pagination li a.active,
		.slidesjs-pagination li a:hover.active {
			background-position: 0 -13px
		}

		.slidesjs-pagination li a:hover {
			background-position: 0 -26px
		}

		#slides a:link,
		#slides a:visited {
			color: #333
		}

		#slides a:hover,
		#slides a:active {
			color: #9e2020
		}

		.navbar {
			overflow: hidden
		}
	</style>
	<!-- End SlidesJS Optional-->

	<!-- SlidesJS Required: These styles are required if you'd like a responsive slideshow -->
	<style>
		#slides {
			display: none
		}

		.container {
			margin: 0 auto
		}

		/* For tablets & smart phones */
		@media (max-width: 767px) {
			body {
				padding-left: 20px;
				padding-right: 20px;
			}
			.container {
				width: auto
			}
		}

		/* For smartphones */
		@media (max-width: 480px) {
			.container {
				width: auto
			}
		}

		/* For smaller displays like laptops */
		@media (min-width: 768px) and (max-width: 979px) {
			.container {
				width: 724px
			}
		}

		/* For larger displays */
		@media (min-width: 1200px) {
			.container {
				width: 1178px
			}
		}
	</style>
	<!-- SlidesJS Required: -->

	<!--插件-->
</head>
 <!--  {dede:include filename='head.htm'/}-->

<!--插件-->


<?php
include('/includefiles/head.php');
?>


<!-- SlidesJS Required: Start Slides -->
<!-- The container is used to define the width of the slideshow -->
<div class="container">
	<div id="slides">
		<img src="img/example-slide-1.jpg" alt="Photo by: Missy S Link: http://www.flickr.com/photos/listenmissy/5087404401/">
		<img src="img/example-slide-2.jpg" alt="Photo by: Daniel Parks Link: http://www.flickr.com/photos/parksdh/5227623068/">
		<img src="img/example-slide-3.jpg" alt="Photo by: Mike Ranweiler Link: http://www.flickr.com/photos/27874907@N04/4833059991/">
		<img src="img/example-slide-4.jpg" alt="Photo by: Stuart SeegerLink: http://www.flickr.com/photos/stuseeger/97577796/">
	</div>
</div>
<!-- End SlidesJS Required: Start Slides -->

<!-- SlidesJS Required: Link to jQuery -->
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<!-- End SlidesJS Required -->

<!-- SlidesJS Required: Link to jquery.slides.js -->
<script src="js/jquery.slides.min.js"></script>
<!-- End SlidesJS Required -->

<!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
<script>
	$(function() {
		$('#slides').slidesjs({
			width: 940,
			height: 401,
			play: {
				active: true,
				auto: true,
				interval: 4000,
				swap: true
			}
		});
	});
</script>
<!-- End SlidesJS Required -->

<!--插件-->

    <!--首页主体-->
     <div class="body0"> 
        <div class="oneleft" >
				<ul>
					<li>

					 <a href="#">首页</a>
					 <a href="includefiles/kcjj.php">课程简介</a>
					 <a href="includefiles/zjjs.php">主讲教师</a>
					 <a href="includefiles/kckj.php">课程课件</a>
					 <a href="includefiles/kcnd.php">课程难点</a>
					 <a href="includefiles/zxjl.php">在线交流</a>
					<!--
					 <a href="/utf/">首页</a>
					{dede:channel type='top' } 
					<a href='[field:typelink/]' target="_top">[field:typename/]</a> 
					 {/dede:channel} 
					-->


					<div style="clear:both;"></div>
					</li>
				</ul>
        </div>
        <div class="oneright"	 	>
			<div		class="top">
						<a href="/sx">首页</a>
			</div>



			<div class="bottom">
           这是首页<br	/>
			<?php
				//session_start();
			if (!session_id()) session_start();
				if(isset($_SESSION['name']))
				echo $_SESSION['name'];
			?>
		   欢迎来到中国矿业大学离散数学网 
				<div>
					<img src="/sx/css/xiaohui.png" alt="">
				</div>
			</div>
			<br  />
			<br  />
			<br  />
		
		</div>
     </div>
	 <!--
	 <?php
		//	echo $_SERVER['PHP_SELF']."<br>";
			$a=$_SERVER['PHP_SELF'];
			switch($a)
			{			
				case '/sx/includefiles/zjjs.php#':
				    echo '>主讲教师'."<br >";
				    break;
				case '/sx/includefiles/kcjj.php':
				    echo '>课程简介'."<br >";
				    break;
				case '/sx/includefiles/kcfj.php':
				    echo '>课程附件'."<br >";
				    break;
				case '/sx/includefiles/kcnd.php':
				    echo '>课程难点'."<br >";
				    break;
				case '/sx/includefiles/zxjl.php':
				    echo '>在线交流'."<br >";
				    break;
				default:
					echo '首页';
			}
			?>
			-->
 <?php
	include('/includefiles/footer.php');
 ?>


