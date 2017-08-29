<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>计算机学院离散数学网</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/muke/App/Common/Common/css/bootstrap.min.css" rel='stylesheet' type='text/css'/>
    <link href="/muke/App/Common/Common/css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="/muke/App/Common/Common/fonts/css/font-awesome.min.css">
    <link rel="stylesheet" href="/muke/App/Common/Common/css/contact.css" type='text/css'/>
    <style>

    </style>
</head>
<body>

<!--用户名 使用 .supName-->
<!--留言内容 使用 .supContent-->
<!--留言时间 使用 .supTime-->

<div class="header_bg1">
    <div class="container">
        <div class="row header">
            <div class="logo navbar-left">
                <h1><a href="/muke/index.php">计算机学院离散数学网</a></h1>
            </div>
            <div class="h_search navbar-right">
                <form>
                    <input type="text" class="text" value="Enter text here" onFocus="this.value = '';"
                           onBlur="if (this.value == '') {this.value = 'Enter text here';}">
                    <input type="submit" value="search">
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row h_menu">
            <nav class="navbar navbar-default navbar-left" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="/muke/index.php">主页</a></li>
                        <li><a href="technology">主讲教师</a></li>
                        <li><a href="about">课程简介</a></li>
                        <li><a href="blog">课程难点</a></li>
                        <li><a href="thing">课程课件</a></li>
                        <li class="active"><a href="contact">在线交流</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
                <!-- start soc_icons -->
            </nav>
            <div class="soc_icons navbar-right">
                <ul class="list-unstyled text-center">
                    <!--<li><a href="#"><i class="fa fa-youtube#">登录</i></a></li>-->
                    <!--<li><a href="#"><i class="fa fa-linkedin#">注册</i></a></li>-->
                    <?php if(null != $_SESSION['name'] ): ?><li><a href="#" style="width:6em;"><i class="fa fa-youtube#"><?php echo $_SESSION['name'] ?></i></a></li>
                        <li><a href="logout" ><i class="fa fa-linkedin#">注销</i></a></li>
                    <?php else: ?>
                        <li><a href="login" ><i class="fa fa-youtube#">登录</i></a></li>
                        <li><a href="register"><i class="fa fa-linkedin#">注册</i></a></li><?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="main_bg"><!-- start main -->
    <div class="container big_border">

        <!--用户名 使用 .supName-->
        <!--留言内容 使用 .supContent-->
        <!--留言时间 使用 .supTime-->

        <section class="text_container">
        <?php if(is_array($list)): $i = 0; $__LIST__ = array_slice($list,0,null,true);if( count($__LIST__)==0 ) : echo "没有留言" ;else: foreach($__LIST__ as $key=>$sail): $mod = ($i % 2 );++$i;?><section class="left">
                <p class="id"><?php echo ($sail["id"]); ?></p>&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <p class="supName">用户名: <?php echo ($sail["username"]); ?></p>
            </section>
            <section class="right">
                <button class="goldid btn btn-primary btn-lg" name="<?php echo ($sail["id"]); ?>" data-toggle="modal" data-target="#myModal6"
                        style="float:right;">回复
                </button>
                <br><br>
                <p class="supContent">留言内容:<?php echo ($sail["contents"]); ?></p><br><br><br><br><br><br>
                <p class="supTime one_supTime">留言时间:<?php echo ($sail["lastdate"]); ?></p>
                <br><br><br>

                <?php if(is_array($replyinfo)): $i = 0; $__LIST__ = array_slice($replyinfo,0,null,true);if( count($__LIST__)==0 ) : echo "1" ;else: foreach($__LIST__ as $key=>$water): $mod = ($i % 2 );++$i; if($water['m_id'] == $sail['id']): ?><p class="supName1">用户名:<?php echo ($water["username"]); ?></p>
                        <p class="supContent"><?php echo ($water["contents"]); ?></p>
                        <p class="supTime tow_supTime">回复时间:<?php echo ($water["lastdate"]); ?></p><br><br>
                        <button class="goldid btn btn-primary btn-xs sail" name="<?php echo ($sail["id"]); ?>" data-toggle="modal"
                                data-target="#myModal6" style="float:right;">回复
                        </button>
                        <!--<p style="background-color:yellow;">嘿嘿<?php echo ($water["contents"]); ?>哈哈</p>-->
                        <br><br><?php endif; endforeach; endif; else: echo "没有留言" ;endif; ?>
            </section>
            <hr class="hr"><?php endforeach; endif; else: echo "1" ;endif; ?>
        </section>
        <br>
        <br>
        <span class="num_pages"><?php echo ($page); ?></span>
        <br>
        <br>
    </div>
</div><!-- end main -->
<div class="main_btm"><!-- start main_btm -->
    <div class="container">
        <div class="main row">


            <div class="col-md-8">
                <div class="contact-form">
                    <div>
                        <label class="fa-btn btn-1 btn-1e" data-toggle="modal" data-target="#myModal"><input
                                type="submit" value="留             言"></label>
                    </div>
                </div>
            </div>


            <!-- 模态框（Modal） -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">留 言</h4>
                        </div>


                        <form class="form-horizontal" role="form" method="post" action="/muke/Home/Index/contactcheck">
                            <!--<form class="form-horizontal" role="form" method="post" action="Home/Index/logincheck">-->

                            <div class="col-md-12">
                                <div class="contact-form">
                                    <div>
                                        <span>subject</span>
                                        <span><textarea name="userMsg" placeholder="请在此处输入你的留言"> </textarea></span>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                <button type="submit" name="submit" class="btn btn-primary">提交留言</button>
                            </div>
                        </form>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal -->
            </div>


            <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel6">回 复</h4>
                        </div>

                        <form class="form-horizontal" role="form" method="post" action="/muke/Home/Index/replycheck">
                            <div class="col-md-12">
                                <div class="contact-form">
                                    <div>
                                        <span><textarea name="replyMsg" placeholder="请在此处输入你的回复"> </textarea></span>
                                        <input type="hidden" name="userid" id="giveid" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                <button type="submit" name="submit" class="btn btn-primary ">提交回复</button>
                            </div>
                        </form>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal -->
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="footer_bg"><!-- start footer -->
    <div class="container">
        <div class="row  footer">
            <div class="copy text-center">
                <p class="link"><span>&#169; All rights reserved. More Templates <a href="http://www.cssmoban.com/"
                                                                                    target="_blank"
                                                                                    title="航仔之家">航仔之家</a> - Collect from <a
                        href="http://www.cssmoban.com/" title="不要模板" target="_blank">不要模板</a></span></p>
            </div>
        </div>
    </div>
</div>


<script>
    var hero = document.getElementsByClassName('goldid');
    for (var i = 0; i < hero.length; i++) {
        hero[i].onclick = function () {
            alert(this.getAttribute('name'));
            var apple = this.getAttribute('name');
            var sail = document.getElementById("giveid");
            sail.setAttribute("value", apple);
        }
    }
    alert(this.getAttribute('name'));
</script>
<script type="application/x-javascript"> addEventListener("load", function () {
    setTimeout(hideURLbar, 0);
}, false);
function hideURLbar() {
    window.scrollTo(0, 1);
} </script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="/muke/App/Common/Common/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- start plugins -->
<script type="text/javascript" src="/muke/App/Common/Common/js/jquery.min.js"></script>
<script type="text/javascript" src="/muke/App/Common/Common/js/bootstrap.js"></script>
<script type="text/javascript" src="/muke/App/Common/Common/js/bootstrap.min.js"></script>
<!----font-Awesome----->
</body>
</html>