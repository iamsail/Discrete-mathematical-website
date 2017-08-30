<?php
$link = @mysqli_connect("localhost", "root", "sail", "", 3306);    //连接数据库
//连接错误时的提示
if (mysqli_connect_errno()) {
    exit(mysqli_connect_error());
}

mysqli_select_db($link, "lssx");
mysqli_set_charset($link, 'utf8');    //设定字符集
?>

<head>
    <meta charset="utf-8"/>

    <title>离散数学网</title>
    <!--<link rel="stylesheet" type="text/css" href="/sx/css/index.css" /> -->
    <link rel="stylesheet" type="text/css" href="/sx/css/zxjl.css"/>
    <script type="text/javascript" src="jquery.js"></script>

    <style>


        /*类选择器*/
        .win {
            /*希望窗口有边框*/
            border: 1px red solid;
            /*希望窗口宽度和高度固定，不要太大*/
            width: 400px;
            height: 260px;
            /*希望控制窗口的位置*/
            /*  position: absolute;  绝对定位*/
            z-index: 100;
            position: fixed;
            top: 100px;
            left: 850px;
            /*希望窗口开始时不可见*/
            display: none;
            border-radius: 12px;
        }

        /*控制标题栏的样式*/
        #title {
            /*控制标题栏的背景色*/
            background-color: deepskyblue;
            /*控制标题栏中文字的颜色*/
            color: yellow;
            /*控制标题栏的左内边距*/
            padding-left: 20px;
            height: 34px;
            line-height: 34px;
            font-family: 微软雅黑;
            font-weight: 400;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;

        }

        #title span {
            float: right;
            padding-right: 6px;
        }

        /*控制内容区域的样式*/
        #content {
            /*  padding-left: 3px; */

        }

        /*控制关闭按钮的位置*/
        #close {
            /*使关闭按钮向右侧移动*/
            margin-left: 158px;
            /*让鼠标进入时可以显示小手，告知用户可以点击操作*/
            cursor: pointer;
        }

        .textarea {
            width: 400px;
            height: 185px;
            border: none;
            background-color: darkgray;
        }

        #answer
            /*回复按钮*/
        {
            height: 41px;
            width: 400px;
            background-color: pink;
            float: right;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
            font-family: 微软雅黑;
            font-size: 28px;
            line-height: 40px;
        }
    </style>
</head>

<?php
include('head.php');
?>
<!--首页主体-->
<div class="body0">
    <div class="oneleft">
        <ul>
            <li>

                <a href="/sx">首页</a>
                <a href="kcjj.php">课程简介</a>
                <a href="zjjs.php">主讲教师</a>
                <a href="kckj.php">课程课件</a>
                <a href="kcnd.php">课程难点</a>
                <a href="zxjl.php">在线交流</a>
                <!--
                 <a href="/utf/">首页</a>
                {dede:channel type='top' }
                <a href='[field:typelink/]' target="_top">[field:typename/]</a>
                 {/dede:channel}
                -->


                <div style="clear:both;"></div>
            </li>
        </ul>
    </div>
    <div class="oneright">
        <div class="top">
            <a href="/utf">首页</a>>在线交流
        </div>

        <?php
        // $query='select * from message order by rid desc';
        // $result=mysqli_query($link,$query);
        ?>


        <div class="allask">
            <p>留言列表</p>
            <br>

            <ul>
                <!--实现留言分页-->


                <?php
                $url = $_SERVER["REQUEST_URI"]; //获取服务器url
                $pagesize = 3;   //每页的留言数量
                $sql = "select  count(*) as c from  message";
                $num = mysqli_fetch_assoc(mysqli_query($link, $sql));  //查询表中的总记录数
                $rows = $num['c'];   //得到表中总记录数
                $pages = ceil($rows / $pagesize);   //计算出页数
                $curpage = 1; //当前要显示第几页，默认显示第一页

                if (isset($_GET['curpage'])) //假如用户提交了指定的页数
                {
                    $curpage = $_GET['curpage'];  //就将欲显示的页数设定为用户指定的值
                }

                // $sql = "SELECT * FROM message ORDER BY id DESC"." LIMIT ".($curpage -1)*$pagesize.", $pagesize";      //修改sql语句，使得可以查询出指定的结果集
                $sql = "SELECT * FROM message LIMIT ($curpage-1) * $pagesize,$pagesize ";      //修改sql语句，使得可以查询出指定的结果集
                $offset = ($curpage - 1) * $pagesize;
                //显示全部分页的链接

                $query = "select * from message order by id desc limit $offset , $pagesize";
                // $query="select * from message order by id desc ";
                $result = mysqli_query($link, $query);


                if ($result) {
                    while ($ai = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<li>" . "<strong>留言</strong>" . "<strong>" . $ai['id'] . "</strong>" . "&nbsp;&nbsp; <strong>用户:</strong>&nbsp;"
                            . $ai['username'] .
                            "<a onclick=\"showwin(" . $ai['id'] . ")\" href=\"#\">回复</a>

		                            <div id=\"win" . $ai['id'] . "\" class='win'>
                                         <div id=\"title\">我是标题栏啊(回复)<span id=\"close\" onclick=\"hide(" . $ai['id'] . ")\">X</span></div>
                                          <div id=\"content\">
                                              <form action=\"zxjlcheck.php\" method='post'>
                                                <input type=\"hidden\" name=\"userid\" value=\"" . $ai['id'] . "\">

                                                <textarea name=\"message\" id=\"\" cols=\"32\" rows=\"8\" class=\"textarea\"></textarea>
                                                <input type=\"submit\" name=\"submit\" value=\"提交回复\" class=\"deliver\" id=\"answer\">
                                              </form>
                                          </div>
                                  </div>


                                    <br><br>
                            " . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . "&nbsp;" . $ai['contents'] . "&nbsp;&nbsp;<br><br>"
                            . "<div class='time'>" . "留言时间:" . $ai['lastdate'] . "</div>" . "<br>";
                        //自己加的
                        $query1 = "select * from message mes inner join  reply rep on mes.id = rep.m_id ";
                        $result1 = mysqli_query($link, $query1);
                        //$hi=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                        echo "<strong>回复列表</strong>" . "<br><br>";
                        while ($hi = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
                            if ($ai['id'] == $hi['m_id']) {
                                echo "&nbsp;&nbsp;&nbsp;<strong>用户:</strong>&nbsp;" . $hi['username'] . "&nbsp;&nbsp;&nbsp;&nbsp;";

                                echo "<a onclick=\"showwin(" . $ai['id'] . ")\" href=\"#\">回复</a>
		                            <div id=\"win" . $ai['id'] . "\" class='win'>
                                         <div id=\"title\">我是标题栏啊(回复)<span id=\"close\" onclick=\"hide(" . $ai['id'] . ")\">X</span></div>
                                          <div id=\"content\">
                                              <form action=\"zxjlcheck.php\" method='post'>
                                                <input type=\"hidden\" name=\"userid\" value=\"" . $ai['id'] . "\">
                                                <textarea name=\"message\" id=\" \" cols=\"32\" rows=\"8\" class=\"textarea\"></textarea>
                                                <input type=\"submit\" name=\"submit\" value=\"提交回复\" class=\"deliver\" id=\"answer\">
                                              </form>
                                          </div>
                                  </div>";


                                //      echo  "<a onclick=\"showwin(".$ai['id'].")\" href=\"#\">回复</a>
                                //         <div id=\"win".$ai['id']."\" class='win'>
                                //             <div id=\"title\">我是标题栏啊(回复)<span id=\"close\" onclick=\"hide()\">X</span></div>
                                //             <div id=\"content\">
                                //                <form action=\"zxjlcheck.php\" method='post'>
                                //                <input type=\"hidden\" name=\"userid\" value=\"".$ai['id']."\">
                                //               <textarea name=\"message\" id=\"\" cols=\"32\" rows=\"8\" class=\"textarea\"></textarea>
                                //              <input type=\"submit\" name=\"submit\" value=\"回复\" class=\"deliver\">
                                //         </form>
                                //        </div>
                                //     </div>";


                                echo "<br>";
                                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $hi['contents'] . "<br>";
                                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            回复时间&nbsp;&nbsp;&nbsp;" . $hi['lastdate'] . "<br>";
                            }
                        }
                        //自己加的


                        echo "</li>";

                    }


                    for ($i = 1; $i <= $pages; $i++) {   //循环显示，每个链接指定curPage属性为其指向的页数就可以了
                        //  echo "<a href='$url?curpage=$i'>$i</a>  ";
                        echo "<a href='zxjl.php?curpage=$i'>$i</a>  ";
                    }

                    echo "当前留言有 " . $rows . " 条 " . "有 " . $pages . "  页";

                    //下拉框分页
                    echo "<form name = 'form1' action = 'zxjl.php?curpage=$curpage' method = 'GET'>";
                    echo "  <select name= 'curpage' onchange = 'document.form1.submit();'>";
                    for ($i = 1; $i <= $pages; $i++) {
                        if ($i == $curpage)
                            echo "<option selected>$i</option>";
                        else
                            echo "<option>$i</option>";
                    }
                    echo "  </select>";
                    echo "  </form>";
                    //下拉框分页

                    if ($curpage > 1) {
                        echo "<a href = 'zxjl.php?curpage=1'>首页</a>  ";
                        echo "<a href = 'zxjl.php?curpage=" . ($curpage - 1) . "'>前页</a>  ";

                    }
                    if ($curpage < $pages) {
                        echo "<a href='zxjl.php?curpage=" . ($curpage + 1) . "'>后页</a>  ";
                        echo "<a href = 'zxjl.php?curpage=$pages'>末页</a>  ";
                    }

                } else
                    echo "暂时没有留言";
                ?>


            </ul>
            <!--实现留言分页-->
        </div>


        <div class="ask">
            <p>留言界面</p>
            <form action="zxjlcheck.php" method="get">

                <div class="left">

                    <textarea name="content" id="" cols="60" rows="8" class="talk" placeholder="在此处输入你的留言内容"></textarea>
                </div>
                <div class="right">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <!-- <input type="submit" name="submit" value="发布留言" class="deliver"/>-->
                    <input type="submit" name="submit" value="发布留言" class="deliver"/>
                </div>
            </form>
        </div>
        <br/>
        <br/>
        <br/>
    </div>
</div>
<!--
	        <?php
//	echo $_SERVER['PHP_SELF']."<br>";
$a = $_SERVER['PHP_SELF'];
switch ($a) {
    case '/sx/includefiles/zjjs.php#':
        echo '>主讲教师' . "<br >";
        break;
    case '/sx/includefiles/kcjj.php':
        echo '>课程简介' . "<br >";
        break;
    case '/sx/includefiles/kcfj.php':
        echo '>课程附件' . "<br >";
        break;
    case '/sx/includefiles/kcnd.php':
        echo '>课程难点' . "<br >";
        break;
    case '/sx/includefiles/zxjl.php':
        echo '>在线交流' . "<br >";
        break;
    default:
        echo '首页';
}
?>
			-->

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<script>
    //显示浮动窗口的方法
    function showwin(id) {
//1.找到窗口对应的div节点

        var winNode = $("#win" + id);
//2.让div对应的窗口显示出来
//方法1,修改节点的css值，让窗口显示出来
//winNode.css("display","block");
//方法2，利用Jqeury的show方法
//winNode.show("slow");
//方法3，利用JQuery的fadeIn方法
        winNode.fadeIn("slow");
    }

    //隐藏窗口的方法
    function hide(id) {
//1.找到窗口对应的节点
        var winNode = $("#win" + id);
//2.将窗口隐藏起来
//方法1，修改css
//winNode.css("display","none");
//方法2，利用hide方法
//winNode.hide("slow");
//方法3，利用fadeOut方法
        winNode.fadeOut("slow");
    }
</script>
<?php
include('footer.php');
?>


