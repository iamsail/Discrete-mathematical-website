
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
        margin-left: 500px;  margin-top: 58px;
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
//session_start();


if(isset($_POST["submit"]) && $_POST["submit"] == "登录")
{

    $user = $_POST["username"];
    $psw = $_POST["password"];
    if($user == "" || $psw == "")
    {
        echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
    }
    else
    {
        $link=@mysqli_connect("localhost","root","sail","",3306);	//连接数据库
        mysqli_select_db($link,"lssx");
        mysqli_set_charset($link,'utf8');	//设定字符集
        $sql = "select username,password from user where username = '$_POST[username]' and password = '$_POST[password]'";
        $result = mysqli_query($link,$sql);
        $num = mysqli_num_rows($result);
        if($num)
        {
            $row = mysqli_fetch_array($result);	//将数据以索引方式储存在数组中
            if (!session_id()) session_start();
             $_SESSION['name']= $_POST["username"];
            echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['name']."&nbsp;&nbsp;"."登录成功";
            echo "<br /><br />";
            echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='/sx'>点此返回主页</a>";
            //echo $row[0]."登录成功";
        }
        else
        {
            echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";
        }
    }
}
else
{
    echo "<script>alert('提交未成功！'); history.go(-1);</script>";
}
?>
</div>
<br>
<br>
<br>

<?php
include('footer.php');
?>


