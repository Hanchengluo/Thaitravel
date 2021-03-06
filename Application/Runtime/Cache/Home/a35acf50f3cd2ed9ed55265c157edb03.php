<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>style.css" />
    <title></title>
</head>

<body>
<div class="page-heading">

    <!--导航 -->
    <div class="navbar navbar-inverse navbar-static-top" role="navigation" id="menu-nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">切换导航</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/ThaiTravel/index.php/Home/Index/index">ThaiTravel</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/ThaiTravel/index.php/Home/Index/index">首页</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">目的地 <span class="caret"></span></a>
                        <ul class="dropdown-menu">


                            <li><a href="/ThaiTravel/index.php/Home/Destination/desinterest">美丽风光</a></li>
                            <li><a href="/ThaiTravel/index.php/Home/Destination/despark">国家公园</a></li>

                        </ul>
                    </li>
                    <li><a href="/ThaiTravel/index.php/Home/Index/activity">活动</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">概况 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php
 if($_SESSION['user_id']){ echo '<li><a href="/ThaiTravel/index.php/Home/Story/storythai">写游记</a></li>'; } ; ?>
                            <li><a href="/ThaiTravel/index.php/Home/Story/storylist">我们的故事</a></li>
                        </ul>
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">路线推荐 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/ThaiTravel/index.php/Home/Route/recommendthai">Thai推荐</a></li>

                        </ul>
                    </li>

                    <li><a href="/ThaiTravel/index.php/Home/Index/FAQ">常见问题</a></li>
                    <?php
 if($_SESSION['user_id']){ echo '<li class="dropdown"  >'; echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">个人中心 <span class="caret"></span></a>'; echo '<ul class="dropdown-menu">'; echo '<li><a href="/ThaiTravel/index.php/Home/Index/edit">个人中心</a></li>'; echo '<li><a href="/ThaiTravel/index.php/Home/User/logout">注销登录</a></li>'; echo '</ul>'; echo '</li>'; }else{ echo '<li><a href="/ThaiTravel/index.php/Home/User/login">登录</a></li>'; } ; ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="cover-head">
        <div class="container">
            <h1>我们的故事</h1>
            <p>用文字和图片，将你的旅行变成永久的记忆！</p>
        </div>
    </div>
</div>

<div class="travel-notes container">
    <h2><?php echo ($rst["title"]); ?></h2>
    <div class="situation center-block">
        <div class="col-md-3 col-sm-3 col-xs-3">
            <span class="glyphicon glyphicon-user"><i>&nbsp;<?php echo ($rst["author"]); ?></i></span>

        </div>
        <div class="col-md-5 col-sm-5 col-xs-5">
            <span class="glyphicon glyphicon-time"><i>&nbsp;<?php echo ($rst["date"]); ?></i></span>

        </div>
        <div class="col-md-2 col-sm-2 col-xs-2">
            <span class="glyphicon glyphicon-pencil"><i>&nbsp;<?php echo ($count); ?></i></span>

        </div>
        <div class="col-md-2 col-sm-2 col-xs-2">
            <span class="glyphicon glyphicon-heart"><i>&nbsp;14</i></span>

        </div>
    </div>

    <div class="note-content center-block">
        <?php echo ($rst["content"]); ?>



        <div class="note-comment">
            <span class="glyphicon glyphicon-chevron-down"><i> 展开</i></span>
            <span class="glyphicon glyphicon-chevron-up"><i>收起</i></span>

            <ul class="comment">
                <h3 class="count"><?php echo ($count); ?>条评论</h3>
                <?php if(is_array($comment)): foreach($comment as $key=>$vo): ?><li>
                    <div class="user ">
                        <div class="glyphicon glyphicon-user"></div>

                    </div>
                    <p>用户<?php echo ($vo["user_name"]); ?>:<?php echo ($vo["comment"]); ?></p>
                    <a href="/ThaiTravel/index.php/Home/Story/commentdelete/userid/<?php echo ($vo["user_id"]); ?>/commentid/<?php echo ($vo["id"]); ?>">删除</a>
                </li><?php endforeach; endif; ?>
            </ul>
            <div class="mycomment">
                <h4>留下评论</h4>
                <form action="/ThaiTravel/index.php/Home/Story/commentadd/youjiid/<?php echo ($youjiid); ?>" method="post">
                <textarea name="comment" class="center-block"></textarea>

                    <input type="submit" class="btn btn-success center-block" value="提交">
                </form>
            </div>
        </div>

    </div>

</div>

<div id="scroll-top">
    <a href="#"></a>
</div>

<footer>
    <p>Copyright &copy;2016.Thai Travel All rights reserved.</p>
</footer>

<script src="<?php echo (HOME_JS_URL); ?>jquery-1.12.3.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo (HOME_JS_URL); ?>style.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo (HOME_JS_URL); ?>bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
</body>

</html>