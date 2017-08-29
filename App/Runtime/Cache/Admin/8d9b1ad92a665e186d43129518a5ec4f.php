<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalabel=0">
    <title>离散数学网后台管理系统</title>
    <link href="/muke/App/Admin/Common/css/common.css" rel='stylesheet' type='text/css' />
</head>
<body>
<nav>
    离散数学后台管理系统
</nav>
<section class="left">
    <ul>
        <li class="left_li"><a href="manage">主页</a></li>
        <li class="left_li"><a href="#">学生管理</a></li>
        <li class="left_li"><a href="message">留言管理</a></li>
    </ul>
</section>
<section class="right">
    <h2>学生信息</h2>

    <?php if(is_array($password)): $k = 0; $__LIST__ = array_slice($password,0,null,true);if( count($__LIST__)==0 ) : echo "没有学生信息" ;else: foreach($__LIST__ as $key=>$sail): $mod = ($k % 2 );++$k;?><span>编号</span><?php echo ($key+1); ?>
        学生姓名<?php echo ($sail["username"]); ?>
        学生密码<?php echo ($sail["password"]); ?> <br><?php endforeach; endif; else: echo "没有学生信息" ;endif; ?>
</section>
</body>
</html>