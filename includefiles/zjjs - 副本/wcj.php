<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>离散数学网</title>
    <link rel="stylesheet" type="text/css" href="/sx/css/zhuye.css" />
    <link rel="stylesheet" type="text/css" href="/sx/css/zjjs.css" />
</head>
<?php
include('../head.php');
?>
<!--首页主体-->
<div class="body0">
    <div class="oneleft" >
        <ul>
            <li>
                <a href="/sx">首页</a>
                <a href="/sx/includefiles/kcjj.php">课程简介</a>
                <a href="/sx/includefiles/zjjs.php">主讲教师</a>
                <a href="/sx/includefiles/kckj.php">课程课件</a>
                <a href="/sx/includefiles/kcnd.php">课程难点</a>
                <a href="/sx/includefiles/zxjl.php">在线交流</a>
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
        $query1='select * from zjjs WHERE id=3';
        $result1=mysqli_query($link,$query1);
        ?>



    </div>
    <div class="oneright">
        <div class="top">
            <a href="/sx">首页</a>><a href="/sx/includefiles/zjjs.php">主讲教师</a>>汪楚娇

        </div>

        <div class="bottom">
            <div class="left">
                <li><a href="/sx/includefiles/zjjs/zyq.php">张艳群</a></li>
                <li><a href="/sx/includefiles/zjjs/wh.php">王虎</a></li>
                <li><a href="/sx/includefiles/zjjs/wcj.php">汪楚娇</a></li>
                <li><a href="/sx/includefiles/zjjs/hlx.php">韩丽霞</a></li>
                <li><a href="/sx/includefiles/zjjs/ctj.php">曹天杰</a></li>
                <li><a href="/sx/includefiles/zjjs/zyp.php">张永平</a></li>
            </div>

            <div class="right">
                <div class="box ">
                    <div class="line">
                        <?php
                        while($ai=mysqli_fetch_array($result1,MYSQLI_ASSOC))
                        {
                            echo $ai['intr']."<br>"."<br>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!--<div style="clear:both;"></div>-->
    </div>
</div>


<?php
include('../footer.php');
?>


