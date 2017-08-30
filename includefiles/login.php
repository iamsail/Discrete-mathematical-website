<?php
include('head.php');
?>

<style>
    body
    {
        background-image: url(/sx/css/bg.jpg);
    }


    .regtable{width:600px;	background:#fff;		border-radius:5px;	padding-top:30px;	padding-bottom:100px;}
    .regtable th {font-size:26px;	color:#9c9c9c;}
    .regtable td {padding:6px;}
    .regtable td a {color:green;}
    .regtable .lefttd {text-align:right;	width:25%;	color:gray;}
    .regtable .righttd {text-align:left;	width:75%;}
    .regtable .text {width:58%;	border:solid 1px #ddd;	height:34px;	line-height:28px;	background:#f5f5f5;	border-radius:5px;}
    .mytable	{margin:30px auto;	}
    input	{		text-align:left;		text-indent:3px;	}


    .hehe
    {
        width: 200px;	height: 40px;	text-align: center;	color: #fff;	border:0;	background:#e96481;	border-radius:5px;
    }
</style>

<form action="logincheck.php" method="post" class="login" onload="init()">
    <table class="mytable	regtable">
    <tr>
        <th></th>
        <th class="righttd">用户登录</th>
    </tr>
    <tr>
        <td class="lefttd">用户名:</td>
        <td class="righttd"><input type="text" name="username"   class="text"/></td>
    </tr>
    <tr>
        <td class="lefttd">密码:</td>
        <td class="righttd"><input type="password" name="password"   class="text"/></td>
    </tr>
    <tr>
        <td class="lefttd"></td>
        <td class="righttd"><input type="submit" name="submit" value="登录" class="hehe"/></td>
    </tr>
    </table>
</form>


<br>
<br>
<br>


<br>
<?php
include('footer.php');
?>



