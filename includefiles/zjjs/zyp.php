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
        $query1='select * from zjjs WHERE id=6';
        $result1=mysqli_query($link,$query1);
        ?>



    </div>
    <div class="oneright">
        <div class="top">
            <a href="/sx">首页</a>><a href="/sx/includefiles/zjjs.php">主讲教师</a>>张永平

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
                    <div class="line">
                        <br>
                        &nbsp;&nbsp;&nbsp;<div class="img"><img src="../../images/zyp.png" alt=""></div>
                        <h1 style="font-family: 华文行楷; padding-right: 150px; font-size:65px; font-weight: 500">张永平</h1><br>
                        <h2 style="padding-right: 115px; font-weight: 300;">教授，硕士生导师</h2>
                        <h2 style="float:right; width:550px;   font-weight: 300;">研究方向：网络与信息安全，Android系统。</h2>
                        <br><br><br>
                        <p>全国计算机继续教育研究会江苏委员会理事，江苏省计算机学会计算机安全专业委员会常务委员，</p>
                        <p>江苏省计算机学会计算机与通信专业委员会委员，淮北矿业集团公司工程技术研究院机电信息研究所研究员。</p>
                        <h4 style="text-align: left; padding-left: 70px; font-size: 28px;font-weight: 300;">1.教学</h4>
                        <p style="text-align: left; padding-left: 120px;">教学课程有：</p>
                        <p style="text-align: left; padding-left: 150px;">研究生层次：密码学、算法与复杂性理论；</p>
                        <p style="text-align: left; padding-left: 150px;">本科层次：信息论与编码、算法设计与分析、离散数学、数据结构、大学计算机基础等。</p>
                        <p style="text-align: left; padding-left: 120px;">主持省教学改革项目“大学计算机基础课程分层教学的研究和实践”，</p>
                        <p style="text-align: left; padding-left: 120px;">获得校级优秀教学成果二等奖，全国煤炭教育优秀研究成果二等奖。</p><br>
                        <h4 style="text-align: left; padding-left: 70px; font-size: 28px;font-weight: 300;">2.科研</h4>
                        <p style="text-align: left; padding-left: 120px;">主持完成横向科研15项，参加完成横向科研项目6项。参与纵向科研项目7项。</p>
                        <p style="text-align: left; padding-left: 120px;">获得国家版权局软件著作权登记1项。</p><br>
                        <h4 style="text-align: left; padding-left: 70px; font-size: 28px;font-weight: 300;">3.论著</h4>
                        <p style="text-align: left; padding-left: 120px;">出版专著1部，主编教材等19部，发表学术论文70余篇。</p>
                        <p style="text-align: left; padding-left: 120px;">获北方十省市优秀科技图书二等奖1项。</p>　
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


