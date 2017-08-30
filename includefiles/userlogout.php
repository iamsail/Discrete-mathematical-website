<?php
include('head.php');
?>


<style>
    body
    {
        background:url(../css/bg.jpg);
    }
    .success
    {
        width:450px;
        height: 250px;
        marin:0 auto;
        background-color:deepskyblue;
        color:white;
        font-size: 28px;
        font-family: 微软雅黑;
        border-radius: 12px;
        margin-left: 500px;
        margin-top: 58px;
        padding-top:90px;
    }

    .success a
    {
        font-family: 微软雅黑;
        font-size:40px;
        text-decoration: none;
        color:white;
        font-weight: 600;
    }
</style>
<div class="success">

<?php
    //注销用户
//session_start();
$_SESSION = array(); // 把session清空。
session_destroy();   // 彻底销毁session
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."退出成功";
echo "<br><br>";
echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<a href='/sx'>点此返回主页</a>";  // 跳到登录页面
?>
</div>

<br>
<br>
<br>
<br>
<?php
include('footer.php');
?>


