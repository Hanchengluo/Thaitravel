<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>style.css" />
		<title>Thai推荐</title>
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
							<li class="dropdown active">
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
					<h1>Thai推荐</h1>
				</div>
			</div>
		</div>

		<div class="plans">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="plan-name">
							<span class="price">1</span>
							<h3><?php echo ($rst[0]["route_name"]); ?></h3>
							<p class="p1"><?php echo ($rst[0]["route_price"]); ?></p>
						</div>
						<div class="plan-features">
							<ul>
								<?php echo ($rst[0]["route_content"]); ?>
							</ul>
						</div>
						<p><a href="" class="btn btn-success btn-lg">详情</a></p>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="plan-name">
							<span class="price2">2</span>
							<h4><?php echo ($rst[1]["route_name"]); ?></h4>
							<p class="p2"><?php echo ($rst[1]["route_price"]); ?></p>

						</div>
						<div class="plan-features">
							<ul>
								<?php echo ($rst[1]["route_content"]); ?>
							</ul>

						</div>
						<p><a href="" class="btn btn-danger btn-lg">详情</a></p>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="plan-name">
							<span class="price2">3</span>
							<h3><?php echo ($rst[2]["route_name"]); ?></h3>
							<p class="p1"><?php echo ($rst[2]["route_price"]); ?></p>

						</div>
						<div class="plan-features">
							<ul>
								<?php echo ($rst[2]["route_content"]); ?>
							</ul>

						</div>
						<p><a href="" class="btn btn-danger btn-lg">详情</a></p>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="plan-name">
							<span class="price">4</span>
							<h4><?php echo ($rst[3]["route_name"]); ?> </h4>
							<p class="p2"><?php echo ($rst[3]["route_price"]); ?></p>

						</div>
						<div class="plan-features">
							<ul>
								<?php echo ($rst[3]["route_content"]); ?>
							</ul>

						</div>
						<p><a href="" class="btn btn-success btn-lg">详情</a></p>
					</div>
				</div>

			</div>
		</div>

		<div class="divider"></div>
		
		<div class="saying">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-5 col-xs-12">
                        
					</div>
					<div class="col-md-8 col-sm-7 col-xs-12">
						<h1>What travelers are saying...</h1>
						<p>---“印象最好的一个国家，人民友善，物价便宜，性价比高，大海，人妖，寺庙，美食，独特的异国风情，甚是喜欢。最爱的地方是芭提雅。在泰国住五星级宾馆也毫无压力。”<br />
                           ---“感谢信仰让这个国家的人民都那么友善。一个有魅力的亚洲国家，就是在这里让我爱上了spa这个东西。”<br/>
                           ---“I love thailand 如果可以 好想在泰国生活一段时间，清迈 太美了 人们都好善良 好开心第一次出国就去了泰国，让我对我接下来的旅程有了更多的信心，走出去一点也不难！！！”
						</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="divider"></div>

		<footer>
			<p>Copyright &copy;2016.Thai Travel All rights reserved.</p>
		</footer>

		<script src="<?php echo (HOME_JS_URL); ?>jquery-1.12.3.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo (HOME_JS_URL); ?>bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	</body>

</html>