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
        $query1='select * from zjjs WHERE id=1';
        $result1=mysqli_query($link,$query1);
        ?>



    </div>
    <div class="oneright">
        <div class="top">
            <a href="/sx">首页</a>><a href="/sx/includefiles/zjjs.php">主讲教师</a>>张艳群

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
                <div class="box">
                    <br>
                    &nbsp;&nbsp;&nbsp;<div class="img"><img src="../../images/zyq.png" alt=""></div>
                    <h1 style="font-family: 华文行楷; padding-right: 150px; font-size:65px; font-weight: 500">张艳群</h1><br>
                    <h2 style="padding-right: 115px; font-weight: 300;">副教 授，博士。</h2>
                    <h2 style="float:right; width:550px;   font-weight: 300;">研究方向：信息安全、信息隐藏。 </h2><br><br><br>
                    <h4 style="text-align: left; padding-left: 70px; font-size: 28px;font-weight: 300;">1.教学</h4><br>
                    <p>主要讲授本科生课程：“数据结构”、“离散数学”、“信息隐藏”。</p><br><br>
                    <h4 style="text-align: left; padding-left: 70px; font-size: 28px;font-weight: 300;">2.科研</h4><br>
                    <p>主持中国矿业大学青年基金：动态网格环境下 信任策略的研究；</p>
                    <p>   参与江苏 省自然科学基金：嵌入式无线传感网络在矿区数据采集中的应用研究；</p>
                    <p>    参与“租赁设备管理系统的升级改造”和“隐患管理信息系统的研究 与开发”项目的开发。</p><br><br>
                     <h4 style="text-align: left; padding-left: 70px; font-size: 28px;font-weight: 300;">3.论著</h4><br>
                    <p>参与编写本科教材《数据库原理及应用》，发表数篇学术论文和教学 论文 ，其中EI收录5篇。</p><br><br>

                </div>


            </div>
        </div>
        <!--<div style="clear:both;"></div>-->
    </div>
</div>


<?php
include('../footer.php');
?>


