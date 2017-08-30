<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
    <title>离散数学网</title>
 <link rel="stylesheet" type="text/css" href="/sx/css/zhuye.css" />
  <link rel="stylesheet" type="text/css" href="/sx/css/zjjs.css" />
</head>
<?php
	include('head.php');
 ?>
    <!--首页主体-->
     <div class="body0"> 
        <div class="oneleft" >
				<ul>
					<li>

						<a href="/sx">首页</a>
						<a href="kcjj.php">课程简介</a>
						<a href="zjjs.php">主讲教师</a>
						<a href="kckj.php">课程课件</a>
						<a href="kcnd.php">课程难点</a>
						<a href="zxjl.php">在线交流</a>
					<!--
					 <a href="/utf/">首页</a>
					{dede:channel type='top' } 
					<a href='[field:typelink/]' target="_top">[field:typename/]</a> 
					 {/dede:channel} 
					-->
					<div style="clear:both;"></div>
					</li>
				</ul>

<!--连接数据库-->
<?php
$link=mysqli_connect('localhost','root','sail','lssx');
if($link)
{
    echo '';
}
else
    echo '数据库连接失败';

//设置默认字符编码
mysqli_set_charset($link,'utf8');
$query='select * from zjjs';
$result=mysqli_query($link,$query);
$query1='select * from zjjs WHERE id=1';
$result1=mysqli_query($link,$query1);
$query2='select * from zjjs';
$result2=mysqli_query($link,$query2);
?>

        </div>
			<div class="oneright">
				<div class="top">
							<a href="/sx">首页</a>>主讲教师
				</div>

				<div class="bottom">
					<div class="left">


						<ul>
							教授
							<li><a href="/sx/includefiles/zjjs/ctj.php">曹天杰</a></li>
							<li><a href="/sx/includefiles/zjjs/zyp.php">张永平</a></li>
						</ul>
						<ul>
							副教授
							<li><a href="/sx/includefiles/zjjs/zyq.php">张艳群</a></li>
							<li><a href="/sx/includefiles/zjjs/wh.php">王虎</a></li>
							<li><a href="/sx/includefiles/zjjs/wcj.php">汪楚娇</a></li>
						</ul>
						<ul>
							讲师
							<li><a href="/sx/includefiles/zjjs/hlx.php">韩丽霞</a></li>

						</ul>
					</div>

					<div class="right">
						<div class="box ">
							<br>
							&nbsp;&nbsp;&nbsp;<div class="img"><img src="../images/ctj.png" alt=""></div>
							<h1 style="font-family: 华文行楷; padding-right: 150px; font-size:65px; font-weight: 500">曹天杰</h1><br>
							<p style="font-size: 20px;font-family: 微软雅黑;font-weight: 400; padding-right: 0px;">男，1967年12月出生。</p>
							<p style="font-size: 20px;font-family: 微软雅黑;font-weight: 400; padding-right: 0px;">毕业于中科院软件所，教授，博士，博士生导师。</p>
							<p style="font-size: 20px;font-family: 微软雅黑;font-weight: 400; padding-right: 12px;">从事安全协议、网络安全、隐私保护等方面研究.</p>
							<br><br>
							<p style=" padding-left: 170px;">在国内外重要学术期刊、会议上发表学术论文80余篇，</p>
							<p style=" padding-left: 179px;">其中被SCI检索的论文10余篇，被EI检索的论文50余篇。</p>
							<br>
							<p style="text-align: left; padding-left: 120px;">主持江苏省基础研究计划、中国科学院信息安全国家重点实验室开放基金、</p>
							<p style="text-align: left; padding-left: 120px;">东南大学移动通信国家重点实验室开放基金等项目。</p>
							<br><br>
							<p style="text-align: left; padding-left: 120px;">参加国家自然科学基金等项目的研究。曹天杰曾获江苏省多媒体课件大赛三等奖，</p>
							<p style="text-align: left; padding-left: 120px;">煤炭工业协会科学技术奖二等奖等。</p>
							<br>
							<p style="text-align: left; padding-left: 120px;">出版“十一五”国家级规划教材一部。</p>
							<br>
							<p style="text-align: left; padding-left: 120px;">被聘为中国保密协会隐私保护专业委员会委员、江苏省计算机安全专委会副主任委员、</p>
							<p style="text-align: left; padding-left: 120px;">中国密码学会江苏省工作站委员等。</p>
							<br><br>
							<p style="text-align: left; padding-left: 120px;">Email:tjcao@cumt.edu.cn</p>
						</div>
					</div>
				</div>
				<!--<div style="clear:both;"></div>-->
			</div>
     </div>


 <?php
	include('footer.php');
 ?>


