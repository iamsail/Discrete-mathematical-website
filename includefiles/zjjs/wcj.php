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
                    &nbsp;&nbsp;&nbsp;<div class="img"><img src="../../images/wcj.png" alt=""></div>
                    <h1 style="font-family: 华文行楷; padding-right: 150px; font-size:65px; font-weight: 500">汪楚娇</h1><br>
                    <p style="font-size: 20px;font-family: 微软雅黑;font-weight: 400;  padding-right: 50px;">博士，副教授</p>
                    <p style="font-size: 20px;font-family: 微软雅黑;font-weight: 400; width: 370px; padding-left: 245px;">中国矿业大学青年骨干教师。</p>
                    <p style="font-size: 20px;font-family: 微软雅黑;font-weight: 400; width: 370px;  padding-left: 297px;">研究方向：密码、信息安全、故障诊断。</p>
                    <br><h4 style="text-align: left; padding-left: 70px; font-size: 28px;font-weight: 300;">1.教学</h4>
                    <h style="text-align: left; padding-left: 120px;float:left;">教学课程有：　</h>
                    <br>
                    <p style="text-align: left; padding-left: 110px;">离散数学、信息安全数学基础、安全协议、网络安全。</p>
                    <p style="text-align: left; padding-left: 120px;">主持的“密码学课程教学改革研究”获中国矿业大学优秀教学成果三等奖</p>　
                    <p style="text-align: left; padding-left: 120px;">“信息安全数学基础教学改革”获得校优秀教学二等奖</p>
                    <p style="text-align: left; padding-left: 120px;">参加江苏省教改项目《安全协议》精品教材建设</p>
                    <h4 style="text-align: left; padding-left: 70px; font-size: 28px;font-weight: 300;">2.科研</h4>
                    <p style="text-align: left; padding-left: 120px;">主持完成校青年科研基金项目“语义环境下矿井提升机故障诊断免疫网络技术”；</p>　
                    <p style="text-align: left; padding-left: 120px;">参加教育部博士点基金“复杂系统故障知识语义表示与推理研究”；</p>
                    <p style="text-align: left; padding-left: 120px;">参加通信国家重点实验室开放基金项目“无线网络认证协议的设计与安全协议”并通过验收。</p>
                    <p style="text-align: left; padding-left: 120px;">获教育部科技进步一等奖1项。</p>
                    <h4 style="text-align: left; padding-left: 70px; font-size: 28px;font-weight: 300;">3.论著</h4>
                    <p style="text-align: left; padding-left: 120px;">编教材1部，发表学术论文10余篇，其中EI收录8篇。</p>

                </div>
            </div>
        </div>
        <!--<div style="clear:both;"></div>-->
    </div>
</div>


<?php
include('../footer.php');
?>


