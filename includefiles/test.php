<script language="javascript">
    function check()
    {
        var zhi=document.getElementById("username").value;
        var Expression=/^(\w){3,10}$/;
        var objExp=new RegExp(Expression); //创建正则表达式对象
        if(objExp.test(zhi)!=true )
        {
            window.alert("用户名必须由3-10位的字母、数字和下划线组成的");
            return false;
        }
        //这是对密码进行判断的
        var pwd=document.getElementById("password").value;
        var apple=/^[A-Za-z]{1}([A-Za-z0-9]|[._]){5,19}$/;
        var girl=new RegExp(apple); //创建正则表达式对象
      //  if(objExp.test(zhi)==true && girl.test(pwd)==true){ //通过正则表达式验证

        //    return true;
       // }else{
         //   window.alert("不合法");
          //  return false;
       // }
        if(girl.test(pwd)==true )
        { //通过正则表达式验证
            return true;
        }else{
            window.alert("密码只能由6-20位的字母、数字、下划线和点“.”组成");
            return false;
        }

    }
</script>



<form action="regcheck.php" method="post" id="myform" onSubmit="return check();">
    <table class="mytable	regtable">
        <tr>
            <td class="lefttd">用户名:</td>
            <td class="righttd"><input type="text" name="username"  id="username" class="text"  /></td>
        </tr>
        <tr>
            <td class="lefttd">密码:</td>
            <td class="righttd"><input type="password" name="password"  id="password"   class="text"/></td>
        </tr>

        <tr>
            <td></td>
            <!-- <td><input type="Submit" name="Submit" value="注册" class="hehe"  onclick='show()'/></td>-->
            <td><input type="Submit" name="Submit" value="注册" class="hehe" /></td>
        </tr>
    </table>
</form>


