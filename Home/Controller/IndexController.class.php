<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
        //echo C("name");
        $this->display('/login');
    }

    public function logincheck()
    {
        $user = $_POST["username"];
        $psw = $_POST["password"];
        //var_dump($_POST);
        if($user == "" || $psw == "")
        {
            echo "<script>alert('请输用户名或密码'); history.go(-1);</script>";
        }
        else
        {
            $user = M('tuser');
            $data = $user->where("username = '$_POST[username]' and password ='$_POST[password]' ")->select();
            if($data)
            {
                $_SESSION['name']= $_POST["username"];
                // $this->godname=$_SESSION['name'];
                $this->godname=$_POST["username"];
                //$this->assign('godname','$_POST["username"]');//
                echo $this->godname."<br><br>";
                echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['name']."&nbsp;&nbsp;"."登录成功"."<br>";
                echo "<script>alert('用户存在');
                      </script>";
                //redirect('https://www.baidu.com/', 1, '页面跳转中...');
                redirect('/muke/index.php', 1, '页面跳转中...');
            }
            else
            {
                echo "<script>alert('用户不存在');</script>";
            }
        }
    }
}