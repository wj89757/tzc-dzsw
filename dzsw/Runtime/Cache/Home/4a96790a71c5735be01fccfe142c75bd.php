<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<title>台州学院-电商实验室</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<!-- STYLESHEET CSS FILES -->
	<!-- 基本样式 -->
	<link rel="stylesheet" type="text/css" href="/tzc-dzsw/Public/css/jquery-ui.css" />
	<link rel="stylesheet" type="text/css" href="/tzc-dzsw/Public/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="/tzc-dzsw/Public/css/animate.min.css" />
	<link rel="stylesheet" type="text/css" href="/tzc-dzsw/Public/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="/tzc-dzsw/Public/css/nivo-lightbox.css" />
	<link rel="stylesheet" type="text/css" href="/tzc-dzsw/Public/css/nivo_themes/default/default.css" />
	<link rel="stylesheet" type="text/css" href="/tzc-dzsw/Public/css/templatemo-style.css" />
	<!-- 加载动态云背景 -->
	<link rel="stylesheet" type="text/css" href="/tzc-dzsw/Public/css/clouds.css" />
	<!-- 登录注册窗口 -->
	<link rel="stylesheet" type="text/css" href="/tzc-dzsw/Public/css/demo.css" />
	<link rel="stylesheet" type="text/css" href="/tzc-dzsw/Public/css/iziModal.css" />
	<!-- 自建样式 -->
	<link rel="stylesheet" type="text/css" href="/tzc-dzsw/Public/css/style.css" />
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
	<!-- 前台导航栏页面 -->
<!-- preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-rotating-plane"></div>
</div>
<!-- home section -->
<section id="home">
	<div id="far-clouds" class="stage far-clouds"></div>
	<div id="near-clouds" class="stage near-clouds"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1 class="wow bounceInDown rotate">台院电子商务实验室</h1>
				<h2 class="wow bounce">OUR TIME</h2>
				<a class="btn btn-default smoothScroll trigger-custom">登录/注册</a>
				<a href="#intro" class="btn btn-default smoothScroll">了解看看</a>
			</div>
		</div>
	</div>
</section>

<!-- navigation section -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">台院电商实验室</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#home" class="smoothScroll">首页</a>
				</li>
				<li>
					<a href="#intro" class="smoothScroll">电商介绍</a>
				</li>
				<li>
					<a href="#work" class="smoothScroll">工作介绍</a>
				</li>
				<li>
					<a href="#team" class="smoothScroll">优秀团队</a>
				</li>
				<li>
					<a href="#contact" class="smoothScroll">联系我们</a>
				</li>
				<li class="dropdown" id="logined">
					<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" id="member">
						用户名 <b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href=<?php echo U('Admin/index');?>>个人中心</a>
						</li>

						<li>
							<a href="javascript:void(0)" id="logout">注销</a>
						</li>
					</ul>
				</li>
				<li id="nologin_user">
					<a class="smoothScroll trigger-custom">未登录</a>
				</li>
			</ul>
		</div>
	</div>
</div>
	<div id="loading">数据交互中....</div>
<!-- intro section -->
<section id="intro">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 title">
				<h4>WELCOME TO TZCEC</h4>
				<h2>台州学院 &amp; 理成庚电子商务公司</h2>
				<hr>
				<p>
					数信学院《信息管理与信息系统》专业设有电子商务人才培养方向，本专业学生在浙江省电子商务大赛中多次荣获佳绩，同时电子商务在人才培养中已经成为一个重要方向，为给选择电子商务专业方向和对电子商务感兴趣的学生提供学习、交流、实践的场所。
					<br></p>
				<p>
					并且与杭州理成庚电子商务有限公司进行校企合作共同开设电子商务实验室。本实验室的电子商务培训由杭州理成庚电子商务有限公司负责，同时逐步提供电商项目，让学生在校期间就具备一定的项目经验，为以后就业或创业创造良好的条件，欢迎有兴趣的同学们加入。
				</p>
			</div>
		</div>
	</div>
</section>
<!-- work section -->
<section id="work">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 title">
				<h2>
					<a title="点击工作介绍了解更多">工作介绍</a>
				</h2>
				<hr><p style="text-align: center;letter-spacing: 0">如何快速简单完成开店<br>标准版旺铺的装修实战<br>搜索排名提升/关键字优化<br>旺铺装修/拍摄技巧/PS技巧<br>淘宝实操运营<br>
				</p>
			</div>
			<div class="col-md-8 col-sm-8">
				<div class="col-md-6 col-sm-6 bg-blue"> <i class="fa fa-mobile"></i>
					<h3>淘宝运营</h3>
				</div>
				<div class="col-md-6 col-sm-6 bg-white"> <i class="fa fa-cloud"></i>
					<h3>店铺装修</h3>
				</div>
				<div class="col-md-6 col-sm-6 bg-white">
					<i class="fa fa-link"></i>
					<h3>网店美工</h3>
				</div>
				<div class="col-md-6 col-sm-6 bg-blue">
					<i class="fa fa-globe"></i>
					<h3>线下活动</h3>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- team section -->
<section id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 title">
				<h2>优秀团队</h2>
				<hr>
				<p>
					优秀团队是根据什么什么规则按照积分排序的balabala.后台定期分配认为balabala，可以让每个人参与进来balabla
				</p>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="0.9s">
				<img src="/tzc-dzsw/Public/img/sjzt.jpg" class="img-responsive" alt="team img">
				<div class="team-des">
					<h4>何燕红组</h4>
					<h3>私家侦探</h3>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="1.3s">
				<img src="/tzc-dzsw/Public/img/yaho.jpg" class="img-responsive" alt="team img">
				<div class="team-des">
					<h4>冯家誉组</h4>
					<h3>yaho美妆小屋</h3>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="1.6s">
				<img src="/tzc-dzsw/Public/img/f4plus2.png" class="img-responsive" alt="team img">
				<div class="team-des">
					<h4>Mary</h4>
					<h3>Developer</h3>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- contact section -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 title">
				<h2>联系我们</h2>
				<hr>
				<p class="contact_p">
					实验室地址：5号楼5111
					<br>
					联系人：陈华老师
					<br>
					电话：665600
					<br>QQ：15041247</p>
			</div>
			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 contact-form wow fadeInUp" data-wow-delay="0.9s">
				<form action="#" method="post">
					<input type="text" class="form-control" placeholder="请输入昵称">
					<input type="email" class="form-control" placeholder="请输入邮箱地址">
					<textarea class="form-control" placeholder="请输入您要发送的内容" rows="6"></textarea>
					<input type="submit" class="form-control" value="发送邮件"></form>
			</div>
		</div>
	</div>
</section>
<!--模态窗口-->
<div id="modal-custom" class="iziModal">
	<button data-iziModal-close class="icon-close"></button>
	<header>
		<a href="javascript:void(0)">注册</a>
		<a href="javascript:void(0)" class="active">登录</a>
		
	</header>
	<form id="reg" action="<?php echo U('Index/register');?>" class="hide">
		<section>
			<ol class="reg_error modal_error"></ol>
			<input type="text" placeholder="请输入账号" name="reg_username" class="text" id="user">
			<input type="text" placeholder="请输入常用邮箱" name="reg_email" class="text" id="email">
			<input type="password" placeholder="请输入密码" name="reg_password" id="reg_password" class="text">
			<input type="password" placeholder="再次确认密码" name="passwordcheck" class="text">
			<footer>
				<button class="submit">注册</button>
				<button data-iziModal-close>取消</button>
			</footer>
		</section>
	</form>
	<form id="login" name="<?php echo U('Index/login');?>">
		<section>
			<ol class="reg_error modal_error"></ol>
			<input type="text" placeholder="请输入账号" name="login_username" class="text" id="login_user">
			<input type="password" placeholder="请输入密码" name="login_password" class="text">
			<label for="check">
				<input type="checkbox" name="checkbox" id="expires" value="1">记住我</label>
			<footer>
				<button class="submit">登录</button>
				<button data-iziModal-close>取消</button>
			</footer>
		</section>
	</div>
</form>
	<!-- 底部导航栏开始 -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h2 class="wow fadeIn" data-wow-delay="0.9s">关注我们</h2>
                <ul class="social-icon">
                    <div class="wechatcode">
                        <img src="/tzc-dzsw/Public/img/barcode.jpg" class="img-thumbnail"></div>
                    <li>
                        <a href="#" class="fa fa-wechat wow bounceIn wechat" data-wow-delay="0.3s"></a>
                    </li>
                    <li>
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=&site=qq&menu=yes" class="fa fa-qq wow bounceIn" data-wow-delay="0.6s"></a>
                    </li>
                    <li>
                        <a href="http://weibo.com/tzxyshop" target="_blank" class="fa fa-weibo wow bounceIn" data-wow-delay="0.9s"></a>
                    </li>
                    <li>
                        <a href="http://t.qq.com/taiyuandia5374" target="_blank" class="fa fa-tencent-weibo wow bounceIn" data-wow-delay="0.9s"></a>
                    </li>
                    <li>
                        <a href="http://www.renren.com/902065193" target="_blank" class="fa  fa-renren wow bounceIn" data-wow-delay="0.9s"></a>
                    </li>
                    <li>
                        <a href="tel:665600" class="fa fa-phone wow bounceIn" data-wow-delay="0.9s"></a>
                    </li>

                </ul>
            </div>
            <div class="col-md-12 col-sm-12 copyright">
                <p>Copyright © 2016 台院电商实验室 | wjun89757@foxmail.com</p>
            </div>
        </div>
    </div>
</footer>
	<!-- JAVASCRIPT JS FILES -->
	<!-- 基本js -->
	<script type="text/javascript" src="/tzc-dzsw/Public/js/jquery.js"></script>
	<script type="text/javascript" src="/tzc-dzsw/Public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/tzc-dzsw/Public/js/nivo-lightbox.min.js"></script>
	<script type="text/javascript" src="/tzc-dzsw/Public/js/smoothscroll.js"></script>
	<script type="text/javascript" src="/tzc-dzsw/Public/js/jquery-ui.js"></script>
	<script type="text/javascript" src="/tzc-dzsw/Public/js/jquery.sticky.js"></script>
	<script type="text/javascript" src="/tzc-dzsw/Public/js/jquery.parallax.js"></script>
	<!-- jquery验证插件 -->
	<script type="text/javascript" src="/tzc-dzsw/Public/js/jquery.cookie.js"></script>
	<script type="text/javascript" src="/tzc-dzsw/Public/js/jquery.form.js"></script>
	<script type="text/javascript" src="/tzc-dzsw/Public/js/jquery.validate.js"></script>
	<script type="text/javascript" src="/tzc-dzsw/Public/js/wow.min.js"></script>
	<!-- 动态云加载 -->
	<script type="text/javascript" src="/tzc-dzsw/Public/js/clouds.js"></script>
	<!-- jqeury调用窗口 -->
	<script type="text/javascript" src="/tzc-dzsw/Public/js/custom.js"></script>
	<!-- 登录注册窗口 -->
	<script type="text/javascript" src="/tzc-dzsw/Public/js/iziModal.js"></script>
</body>
</html>