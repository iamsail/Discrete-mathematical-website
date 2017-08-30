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

<!--
<form action="regcheck.php" method="post">
    用户名：<input type="text" name="username"/>
    <br/>
    密　码:<input type="password" name="password"/>
    <br/>
    确认密码：<input type="password" name="confirm"/>
    <br/>
    <input type="Submit" name="Submit" value="注册"/>
</form>
-->




<!--
<form action="regcheck.php" method="post">
    用户名：<input type="text" name="username"/>
    <br/>
    密　码:<input type="password" name="password"/>
    <br/>
    确认密码：<input type="password" name="confirm"/>
    <br/>
    <input type="Submit" name="Submit" value="注册"/>
</form>
-->


<!--验证用户名是否由3-10位的字母、数字和下划线组成的正则表达式如下：
<script language="javascript">
    function checkeusername(username){
        var str=username;
//在JavaScript中，正则表达式只能使用"/"开头和结束，不能使用双引号
        var Expression=/^(\w){3,10}$/;
        var objExp=new RegExp(Expression); //创建正则表达式对象
        if(objExp.test(str)==true){ //通过正则表达式验证
            return true;
        }else{
            return false;
        }
    }
</script>
-->

<!--验证密码是否由6-20位的字母、数字、下划线和点“.”组成的正则表达式如下：
<script language="javascript">
    function checkePWD(PWD){
        var str=PWD;
//在JavaScript中，正则表达式只能使用"/"开头和结束，不能使用双引号
        var Expression=/^[A-Za-z]{1}([A-Za-z0-9]|[._]){5,19}$/;
        var objExp=new RegExp(Expression); //创建正则表达式对象
        if(objExp.test(str)==true){ //通过正则表达式验证
            return true;
        }else{
            return false;
        }
    }
</script>-->


<script language="javascript">
    function check()
    {
        var zhi=document.getElementById("username").value;
        var Expression=/^(\w){3,10}$/;
        var objExp=new RegExp(Expression); //创建正则表达式对象
            //这是对密码进行判断的
        var pwd=document.getElementById("password").value;
        var apple=/^[A-Za-z]{1}([A-Za-z0-9]|[._]){5,19}$/;
        var girl=new RegExp(apple); //创建正则表达式对象
        if(objExp.test(zhi)==true && girl.test(pwd)==true){ //通过正则表达式验证

            return true;
        }else{
              window.alert("不合法");
            return false;
        }
    }
</script>

<script language="javascript">
    function checkePWD(PWD){
        var str=PWD;
//在JavaScript中，正则表达式只能使用"/"开头和结束，不能使用双引号
        var Expression=/^[A-Za-z]{1}([A-Za-z0-9]|[._]){5,19}$/;
        var objExp=new RegExp(Expression); //创建正则表达式对象
        if(objExp.test(str)==true){ //通过正则表达式验证
            return true;
        }else{
            return false;
        }
    }
</script>


<form action="regcheck.php" method="post" id="myform" onSubmit="return check();">
<table class="mytable	regtable">
    <tr>
        <th></th>
        <th class="righttd">用户注册</th>
    </tr>
    <tr>
        <td class="lefttd">用户名:</td>
        <td class="righttd"><input type="text" name="username"  id="username" class="text"  /></td>
    </tr>
    <tr>
        <td class="lefttd">密码:</td>
        <td class="righttd"><input type="password" name="password"  id="password"   class="text"/></td>
    </tr>
    <tr>
        <td class="lefttd">确认密码:</td>
        <td class="righttd"><input type="password" name="confirm"  class="text"/></td>
    </tr>
    <tr>
        <td></td>
       <!-- <td><input type="Submit" name="Submit" value="注册" class="hehe"  onclick='show()'/></td>-->
        <td><input type="Submit" name="Submit" value="注册" class="hehe" /></td>
    </tr>
</table>
</form>

<br>
<br>

<?php
include('footer.php');
?>




