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

</head>
<!--  {dede:include filename='head.htm'/}-->
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
    </div>
    <div class="oneright"	 	>
        <div		class="top">
            <a href="/utf">首页</a>>课程课件
        </div>



        <div class="bottom">
            这是课程课件<br	/>
            让我们下载资料开始学习！

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
include('footer.php');

?>


