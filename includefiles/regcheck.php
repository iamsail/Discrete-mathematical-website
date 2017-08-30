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
if(isset($_POST["Submit"]) && $_POST["Submit"] == "注册")
{
    $user = $_POST["username"];
    $psw = $_POST["password"];
    $psw_confirm = $_POST["confirm"];
    if($user == "" || $psw == "" || $psw_confirm == "")
    {
        echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
    }
    if( strlen($_POST["password"])<6)
    {
        echo "<script>alert('密码长度太短！'); history.go(-1);</script>";
    }
    else
    {
        if($psw == $psw_confirm)
        {
            $link=@mysqli_connect("localhost","root","sail","",3306);	//连接数据库
            //连接错误时的提示
            if(mysqli_connect_errno())
            {
                exit(mysqli_connect_error());
            }

            mysqli_select_db($link,"lssx");	//选择数据库
            mysqli_set_charset($link,'utf8');	//设定字符集
        //    $sql = "select username from user where username = '$_POST[username]'";	//SQL语句
            $sql = "SELECT username FROM user WHERE username = '$_POST[username]'";	//SQL语句,判断用户名是否重复
            $result = mysqli_query($link,$sql);	//执行SQL语句
            $num = mysqli_num_rows($result);	//统计执行结果影响的行数
            if($num)	//如果已经存在该用户
            {
                echo "<script>alert('用户名已存在'); history.go(-1);</script>";
            }
            else	//不存在当前注册用户名称
            {
               // $sql_insert = "insert into user (username,password) values('$_POST[username]','$_POST[password]')";
                $sql_insert = "INSERT INTO user(username,password) VALUES('$_POST[username]','$_POST[password]')";
                $res_insert = mysqli_query($link,$sql_insert);
                //$num_insert = mysql_num_rows($res_insert);
                if($res_insert)
                {
                    //echo "<script>alert('注册成功！'); history.go(-1);</script>";
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."注册成功!"."<br><br>";
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='/sx'>点此返回主页</a>";
                }
                else
                {
                    echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";
                }
            }
        }
        else
        {
            echo "<script>alert('密码不一致！'); history.go(-1);</script>";
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
<br><br>

<?php
include('footer.php');
?>

