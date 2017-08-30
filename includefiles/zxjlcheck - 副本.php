<?php
    session_start();
// judge 值为0，表示为评论 ；judge值为1，表示回复
//if(isset($_GET['value'])){
//if(isset($_GET['submit']) && $_GET['value']=="发布留言")       //评论

    if (isset($_GET['submit'])) {
        if (!isset($_SESSION['name'])) {
            echo "<script>alert('请先登录！'); history.go(-1);</script>";
            exit();
        }

        if ($_GET["content"] == "") {
            echo "<script>alert('留言不能为空！'); history.go(-1);</script>";
        }

        $link = @mysqli_connect("localhost", "root", "sail", "", 3306);    //连接数据库
        //连接错误时的提示
        if (mysqli_connect_errno()) {
            exit(mysqli_connect_error());
        }

        mysqli_select_db($link, "lssx");
        mysqli_set_charset($link, 'utf8');    //设定字符集

        echo "么么哒"."<br>";


       // $sql_insert = "INSERT INTO message(username,contents,lastdate) VALUES('$_SESSION[name]','$_GET[content]',now())";
        $sql_insert = "INSERT INTO message(contents,username,lastdate) VALUES('$_GET[content]','$_SESSION[name]',now())";   //这句测试成功
        //$sql_insert = "INSERT INTO message(username) VALUES('$_SESSION[name]')";
        $res_insert = mysqli_query($link, $sql_insert);
        if(isset($res_insert))
        {

            echo  "存在"."<br>";
            echo "hah".$res_insert."heh";
            echo "<br>";
        }
        else
        {
            echo "操蛋"."<br>";
        }

        if ($res_insert)
        {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['name']."&nbsp;&nbsp;" . "发布成功";
        }
        else
        {
            echo "发布失败";
        }
    }




if(isset($_POST['submit'])) //回复
{
    if(!isset($_SESSION['name']))
    {
        echo "<script>alert('请先登录！'); history.go(-1);</script>";
        exit();
    }

    if($_POST["message"]=="")
    {
        echo "<script>alert('留言不能为空！'); history.go(-1);</script>";
    }

    $link=@mysqli_connect("localhost","root","sail","",3306);	//连接数据库
    //连接错误时的提示
    if(mysqli_connect_errno())
    {
        exit(mysqli_connect_error());
    }

    mysqli_select_db($link,"lssx");
    mysqli_set_charset($link,'utf8');	//设定字符集

    //$sql_cha = "SELECT id from message";
    //$sql_id  = mysqli_query($link,$sql_cha);
    //$row =mysqli_fetch_array($sql_id,MYSQLI_ASSOC);
   // echo $row['id'];
    //while($row =mysqli_fetch_array($sql_id,MYSQLI_NUM))
   // {
    //    echo $row['0'];
      //  break;
    //}
   // $a = $row[1];
    //echo $row[1];


  // $sql_insert = "INSERT INTO reply(username,contents,m_id,lastdate) VALUES('$_SESSION[name]','$_POST[message]','$_POST[userid]',now())";
   $sql_insert = "INSERT INTO reply(username,contents,m_id,lastdate) VALUES('$_SESSION[name]','$_POST[message]','$_POST[userid]',now())";
    $res_insert = mysqli_query($link,$sql_insert);
    if($res_insert)
    {
        echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['name']."&nbsp;&nbsp;"."回复成功";
    }
    else
    {
        echo  $_POST['userid'];
        echo "回复失败";
    }
}

?>