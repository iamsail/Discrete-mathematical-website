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
        $query1='select * from zjjs WHERE id=2';
        $result1=mysqli_query($link,$query1);
        ?>



    </div>
    <div class="oneright">
        <div class="top">
            <a href="/sx">首页</a>><a href="/sx/includefiles/zjjs.php">主讲教师</a>>王虎

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
                    &nbsp;&nbsp;&nbsp;<div class="img"><img src="../../images/wh.png" alt=""></div>
                    <h1 style="font-family: 华文行楷; padding-right: 150px; font-size:65px; font-weight: 500">王虎</h1><br>
                    <p style="font-size: 20px;font-family: 微软雅黑;font-weight: 400;">男，1977年11月出生，副教授，</p>
                    <h2 style="float:right; width:550px;   font-weight: 300;">研究方向:计算机网络和网络安全等</h2>
                    <br><br><br><br>
                    <p style="text-align: left; padding-left: 120px;"> 1999年6月本科毕业于中国矿业大学计算机科学与技术学院计算机应用专业，</p>
                    <p style="text-align: left; padding-left: 120px;">2005年7月在中国矿业大学计算机科学与技术学院取得硕士学位。</p>
                    <p style="text-align: left; padding-left: 120px;">参编教材两部，作为第一作者公开发表学术论文6篇，教学论文4篇，</p>
                    <p style="text-align: left; padding-left: 120px;">其中核心期刊学术论文3篇，国际会议学术论文2篇，并有一篇论文录入ISTP检索。</p>
                    <p style="text-align: left; padding-left: 120px;">参与“十二.五国家科技支撑计划课题”、863等多项纵向及横向科研课题，</p>
                    <p style="text-align: left; padding-left: 120px;">主持校青年基金项目一项。</p>
                    <br>
                    <h4 style="text-align: left; padding-left: 90px; font-size: 28px;font-weight: 300;">所获奖励:</h4><br>

                    <p style="text-align: left; padding-left: 120px;">2006年获校级优秀教学成果奖一等奖</p>
                    <p style="text-align: left; padding-left: 120px;">2007年获江苏省教学成果奖二等奖，</p>
                    <p style="text-align: left; padding-left: 120px;">2008年获校级优秀教学奖一等奖</p>
                    <p style="text-align: left; padding-left: 120px;">2007年获本科毕业设计优秀指导教师奖</p>
                    <p style="text-align: left; padding-left: 120px;">2014年获中国煤炭工业科学技术奖二等奖</p>
                    <p style="text-align: left; padding-left: 120px;">2015年指导学生参加全国大学生信息安全技术大赛，获优秀指导教师奖</p><br>
                    <p style="text-align: left; padding-left: 120px;">Email:wanghu@cumt.edu.cn</p>
                </div>
            </div>
        </div>
        <!--<div style="clear:both;"></div>-->
    </div>
</div>


<?php
include('../footer.php');
?>


