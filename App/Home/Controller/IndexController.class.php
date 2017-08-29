<?php
namespace Home\Model;
use Think\Model;
namespace Home\Controller;
use Think\Controller;

//看评论添加的


class IndexController extends Controller {


   /* function __construct()
    {
        $user = $_POST["username"];
        $psw = $_POST["password"];
        //var_dump($_POST);
        if($user == "" || $psw == "")
        {

        }
        else
        {
            $user = M('usercopy');
            $data = $user->where("username = '$_POST[username]' and password ='$_POST[password]' ")->select();
            if($data)
            {
                $_SESSION['name']= $_POST["username"];
                // $this->godname=$_SESSION['name'];
                $this->godname=$_POST["username"];
                //$this->assign('godname','$_POST["username"]');//
//                echo $this->godname."<br><br>";
//                echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['name']."&nbsp;&nbsp;"."登录成功"."<br>";
//                echo "<script>alert('用户存在');
//                      </script>";
//                redirect('/muke/index.php', 1, '页面跳转中...');
//                //redirect('https://www.baidu.com/', 1, '页面跳转中...');
            }
            else
            {
              //  echo "<script>alert('用户不存在');</script>";
            }

//            $data = $user->select();
//            dump($data);
        }

        return $this->godname;
//        else
//            echo "hehe";
        //  $this->display('/logincheck');

    }
*/



    public function index(){
        $person =  array(
            1=>array('name'=>'Jack','age'=>12),
            2=>array('name'=>'tom','age'=>17),
            3=>array('name'=>'lili','age'=>20),
            4=>array('name'=>'peter','age'=>21),
        );
//        $num=110;
//        $this->assign('num',$num);

        $this->assign('person',$person);
       // $godname = $this->getname();
       // $this->assign('godname',$godname);
       // $this->logout();

        //$this->logout();


       // $this->display('/index');
        $this->display('/index');
    }

    public  function user()
    {
        //数据库CURD操作
        //add 创建 创建多条数据
       /* $data=array(
            0=>array(
                'user_name'=>'xiaohong',
                'nickname'=>'小红',
                'password'=>md5('123456'),
                'score'=>'100',
                'creat_date'=>date('Y-m-d H:i:s'),
                'update_date'=>date('Y-m-d H:i:s'),

                ),
                1=>array(
                'user_name'=>'xiaobai',
                'nickname'=>'小白',
                'password'=>md5('123456'),
                'score'=>'100',
                'creat_date'=>date('Y-m-d H:i:s'),
                'update_date'=>date('Y-m-d H:i:s'),

                ),
                2=>array(
                'user_name'=>'xiaogang',
                'nickname'=>'小刚',
                'password'=>md5('123456'),
                'score'=>'100',
                'creat_date'=>date('Y-m-d H:i:s'),
                'update_date'=>date('Y-m-d H:i:s'),
            )
        );
        echo M('user')->addAll($data);//addAll方法只适合mysql数据库
        echo M()->getLastSql();*/
       // echo M('user')->add($data);

        //select 查询
            //1.直接使用字符串进行查找
            //$data=M('user')->where('id=1')->select();
            //2.使用数组方式进行查询
//            $where['id']=2;
//            $where['user_name']='xiaohong';
//            $where['_logic']='or';
//            $data=M('user')->where($where)->select();
//            dump($data);
            //3.表达式查询 eq neq egt gt lt elt between in like not between not in
            //$where['字段名']=array(表达式，查询条件);
                //$where['id']=array('lt',3);
                //$where['id']=array('between','1,8');
                //$where['id']=array('not in','1,2,8');
                //$where['user_name']=array('like','%gang');
                //$where['user_name']=array('like',array('%ming','xiao%'));
           //4.区间查询
            //$where['id']=array(array('gt',1),array('lt',10));
            //$where['id']=array(array('gt',100),array('lt',3),'or');

            //5.混合用法
              //$where['id']=array('gt',10);
              //$where['_string']='score>60';
              //$data=M('user')->where($where)->select();
            //6.统计用法
            //count 统计数量  可选
            //max 获取最大值  需要传入统计的字段名
            //min 最小值     需要传入统计的字段名
            //avg 平均值     需要传入统计的字段名
            //sum 求和       需要传入统计的字段名
            //$data = M('user')->count();
            //$data = M('user')->min('id');
            //dump($data);
        //update 更新
            //$where['id']=1;
            //$data =  M('user')->where($where)->select();

            //updata mk_user set score=60 where id=1;
            //$updata['score']=90;
            //$where['id']=1;
            //$data = M('user')->where($where)->save($updata);
            //$data =  M('user')->where($where)->select();
            //dump($data);
        //delete 删除
        //$where['id']=1;
        //$data =  M('user')->where($where)->select();
        //dump($data);
        //echo M('user')->where($where)->delete();
        //echo M('user')->delete(2);//切记这种写法只能传入主键

        //连续操作
        //1.order排序  order(字符串)多个条件的话用英文逗号隔开
        //$data = M('user')->order('score desc,id asc')->select();
        //dump($data);
        //2.field($string,false)$string传入多个字段名用英文逗号隔开
        //$data = M('user')->field('id,user_name')->select();
        //$data = M('user')->field('id,user_name',true)->select();
        //dump($data);
        //3. limit (start,length)
        /*$data = M('user')
            ->field('id,user_name',true)
            ->order('score desc,id asc')
            ->limit(1,2)
            ->select();*/
        //4.page(页码，每页的条数=20)  tp封装了分页类，更加的屌，更好用，
        //开发过程中不推荐使用着这种连贯操作
        /*$data = M('user')
            ->field('id,user_name')
            ->order('id asc')
            ->page(2,4)
            ->select();*/
        //group分组操作 having必须配合group使用，不然不生效
        //$data=M('user')->field('score,count(*) as total')->group('score')->select();
        /*$data=M('user')->field('score,count(*) as total')
            ->having('score>50')
            ->group('score')->select();*/

        //多表查询 table方法 table(array('表名'=>'别名')) 表名需要加前缀，前缀！
        //$data=M()->table(array('mk_user'=>'user','mk_userinfo'=>'info'))
        //   ->where('user.id=info.user_id')->select();

        //多表查询join方法 join()支持字符串和数组 默认是左关联
        //使用数组只能使用一个join查询，字符串可以多个
       //$data=M('user')->join('mk_userinfo On mk_userinfo.user_id=mk_user.id')
        //->select();  此处是以user为基础，去匹配userinfo
        //$data=M('user')->join('Right join mk_userinfo On mk_userinfo.user_id=mk_user.id')
        //    ->select(); //此处是以userinfo为基础，去匹配user1
        //$data=M('user')->join('inner join mk_userinfo On mk_userinfo.user_id=mk_user.id')
            //->join()
         //   ->select(); //此处是以userinfo为基础，去匹配user1
        //$data=M('user')->join(array('mk_userinfo On mk_userinfo.user_id=mk_user.id'))
            //->join()
         //   ->select();

        //多表查询 union查询 union('string array',true/false)
        //默认是false,true开启 union all，可以查出重复的
        /*$data=M('user')
        ->field('user_name')
        //->union('select user_name from mk_user2')
        ->union(array('field'=>'user_name','table'=>'mk_user2'),ture)
        ->select();
        dump($data);*/

        //过滤查询 distinct
        //$data=M('user')->field('score')->order('score asc')->select();
        $data=M('user')->distinct(true)->field('score')->order('score asc')->select();
        dump($data);
        $this->display('/user');
    }
    public  function technology()
    {
        $this->display('/technology');
    }

    public  function About()
    {
        $this->display('/about');
    }

    public  function blog()
    {
        $this->display('/blog');
    }

    public  function contact()
    {
        $message = M('message');
       // $where['id']=array('egt',1);
//        $result=$message->where($where)->select();
//        $data=$message->page(2,3)->select();
//        $this->assign('result',$result);
//        dump($result);
//        $this->assign('result',$data);
//        dump($data);
        $count = $message->where('id > 0')->count();  //查询总的留言数量
        $Page = new \Think\Page($count,4);  //实例化分页类，传入总留言数 每页显示的留言数量
        $show = $Page->show();//分页显示输出

        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性

//        $list = $message->where('$count')->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list = $message->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->reply();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display('/contact');
    }

    public  function contactcheck()
    {
        if(isset($_POST['submit']))
        {
            if (!isset($_SESSION['name'])) {
                echo "<script>alert('请先登录！'); history.go(-1);</script>";
                exit();
            }

            if (trim($_POST["userMsg"]) == "") {//这儿代码有问题
                echo "<script>alert('留言不能为空！'); history.go(-1);</script>";
                exit();
            }

            $message = M('message');
            $data=array(
                'username'=>$_SESSION['name'],
                'contents'=>$_POST['userMsg'],
                'lastdate'=>date('Y-m-d H:i:s'),
            );
            echo $message->add($data);
        }
    }

    public  function reply()   //控制显示留言的
    {
        $reply = M('reply');
        //$where['id']=
        $replyinfo = $reply->select();//需要找到匹配的id值
        $this->assign('replyinfo',$replyinfo);
       // dump($replyinfo);
       // $this->display('/blog');
       // $this->display('/contact');
    }


    public  function replycheck()   //留言 回复检查
    {
        if(isset($_POST['submit'])) {
            if (!isset($_SESSION['name'])) {
                echo "<script>alert('请先登录！'); history.go(-1);</script>";
                exit();
            }

            if (trim($_POST["replyMsg"]) == "") {
                echo "<script>alert('回复不能为空！'); history.go(-1);</script>";
                exit();
            }
            $reply = M('reply');
            $data = array(
                'm_id'=>$_POST['userid'],
                'username'=>$_SESSION['name'],
                'contents'=>$_POST['replyMsg'],
                'lastdate'=>date('Y-m-d H:i:s'),
            );
            $reply->add($data);
//            redirect('/muke/Home/contact', 1, '页面跳转中...');
        }
    }


    public  function thing()
    {
        $this->display('/thing');
    }

    public  function login()
    {
        $this->display('/login');
    }

    public  function logincheck()
    {
        $user = $_POST["username"];
        $psw = $_POST["password"];
        //var_dump($_POST);
    if($user == "" || $psw == "")
    {
        echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
    }
    else
    {
        $user = M('usercopy');
        $data1 = $user->where("username = '$_POST[username]'")->select();
        if(!$data1){

            echo "<script>alert('用户不存在');</script>";
        }
        $data = $user->where("username = '$_POST[username]' and password ='$_POST[password]' ")->select();
        if($data && $data1)
        {
            $_SESSION['name']= $_POST["username"];
            // $this->godname=$_SESSION['name'];
            $this->godname=$_POST["username"];
            //$this->assign('godname','$_POST["username"]');//
            echo $this->godname."<br><br>";
            echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['name']."&nbsp;&nbsp;"."登录成功"."<br>";
            redirect('/muke/index.php', 1, '页面跳转中...');
        }
        else
        {
            echo "<script>alert('密码不对');history.go(-1);</script>";
        }
//            $data = $user->select();
//            dump($data);
    }


//        else
//            echo "hehe";
//    $this->display('/logincheck');
}


    public  function logout()
    {
        $_SESSION = array(null); // 把session清空。
        session_destroy();   // 彻底销毁session
        echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['name']."&nbsp;&nbsp;"."注销成功"."<br>";
        echo  "<a href='/muke/index.php'>点此返回主页</a>";
       // redirect('/muke/index.php', 1, '页面跳转中...');
        //$this->display('/logout');
    }

    public  function register()
    {
/*
        if(isset($_POST["Submit"]) && $_POST["Submit"] == "注册"){
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
//                    $user = M('usercopy');
//                    $data = $user->where("username = '$_POST[username]' and password ='$_POST[password]' ")->select();
//                    if($data)
//                    {
//                        $_SESSION['name']= $_POST["username"];
//                        // $this->godname=$_SESSION['name'];
//                        $this->godname=$_POST["username"];
//                        //$this->assign('godname','$_POST["username"]');//
//                        echo $this->godname."<br><br>";
//                        echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['name']."&nbsp;&nbsp;"."登录成功"."<br>";
//                        echo "<script>alert('用户存在');
//                      </script>";
//                        //redirect('https://www.baidu.com/', 1, '页面跳转中...');
//                        redirect('/muke/index.php', 1, '页面跳转中...');


                    $user = M('usercopy');
                    $data = $user->where(" username = '$_POST[username]' ")->select();
                    if($data)//如果用户已经存在
                    {
                        echo "<script>alert('用户名已存在'); history.go(-1);</script>";
                    }
                    else //该用户还没被注册
                    {

                    }
                }
                else
                {
                    echo "<script>alert('密码不一致！'); history.go(-1);</script>";
                }
            }
        }else{

            echo "<script>alert('提交未成功！'); history.go(-1);</script>";
        }*/
        $this->display('/reg');
    }

    public  function regcheck()
    {
        if(isset($_POST["Submit"]) && $_POST["Submit"] == "注册"){
            $username = $_POST["username"];
            $psw = $_POST["password"];
            $psw_confirm = $_POST["confirm"];

            if($username == "" || $psw == "" || $psw_confirm == "")
            {
                echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
            }
            elseif( strlen($_POST["password"])<6)
            {
                echo "<script>alert('密码长度太短！'); history.go(-1);</script>";
            }
            else
            {
                if($psw == $psw_confirm)
                {
//                    $user = M('usercopy');
//                    $data = $user->where("username = '$_POST[username]' and password ='$_POST[password]' ")->select();
//                    if($data)
//                    {
//                        $_SESSION['name']= $_POST["username"];
//                        // $this->godname=$_SESSION['name'];
//                        $this->godname=$_POST["username"];
//                        //$this->assign('godname','$_POST["username"]');//
//                        echo $this->godname."<br><br>";
//                        echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['name']."&nbsp;&nbsp;"."登录成功"."<br>";
//                        echo "<script>alert('用户存在');
//                      </script>";
//                        //redirect('https://www.baidu.com/', 1, '页面跳转中...');
//                        redirect('/muke/index.php', 1, '页面跳转中...');


                    $user = M('usercopy');
                    $data = $user->where(" username = '$_POST[username]' ")->select();
                    if($data)//如果用户已经存在
                    {
                        echo "<script>alert('用户名已存在'); history.go(-1);</script>";
                    }
                    else //该用户还没被注册，则进行 注册
                    {
                        $data1=array(
                            'username' => $username,
                           // 'username' => $_POST["username"],
                            'password' => $psw,
                        );
                        $right =  M('usercopy')->add($data1);     //添加注册用户信息
                        if($right)
                        {
                            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."注册成功!"."<br><br>";
                            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='/muke/index.php'>点此返回主页</a>";
                        }
                    }
                }
                else
                {
                    echo "<script>alert('密码不一致！'); history.go(-1);</script>";
                }
            }

        }else{
            echo "<script>alert('提交未成功！'); history.go(-1);</script>";
        }
//        $this->display('/regcheck');
    }
}