<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\phpStudy\WWW\xinwen\public/../application/index\view\index\contact.html";i:1510631778;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>联系我们</title>
	<link href="__PUBLIC__/news/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="__PUBLIC__/news/css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Blogname Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
	/>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

		  <script src="_PUBLIC__/news/js/jquery.min.js"></script>
		<!--end slider -->
				<!--script-->
<script type="text/javascript" src="__PUBLIC__/news/js/move-top.js"></script>
<script type="text/javascript" src="__PUBLIC__/news/js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!---->
</head>
<body>
<!---strat-banner---->
<div class="banner">				
	 <div class="header">  
		  <div class="container">
			  <div class="logo">
					<a href="index.html"> <img src="__PUBLIC__/news/images/logo.png" title="soup" /></a>
			 </div>
			 <!---start-top-nav---->
			 <div class="top-menu">
				  <span class="menu"> </span>
				   <ul>
					   <li><a href="<?php echo url('/index'); ?>">新闻主页</a></li>
					   <li class="active"><a href="<?php echo url('/index/contact'); ?>">联系我们</a></li>
					   <li><a href="<?php echo url('/index/terms'); ?>">条款</a></li>
					   <div class="clearfix"> </div>
				 </ul>
			 </div>
					<script>
					$("span.menu").click(function(){
					$(".top-menu ul").slideToggle("slow" , function(){
					});
					});
					</script>
				<!---//End-top-nav---->					
		 </div>
	 </div>
	 <div class="container">
		 <div class="banner-head">
			 <h1>最新 最快 最好玩的新闻</h1>
			 <h2>热烈庆祝党的十九大胜利圆满结束！</h2>
		 </div>
	 </div>
</div>
<!---//End-banner---->
<div class="contact">
	 <div class="container">

		 <div class="address">
			 <h3>我们的联系方式</h3>
			 <div class="col-md-6 locations">				 
				  <ul>
					 <li><span></span></li>					 					
					 <li>
						 <div class="address-info">	
							 <h4>软件园路08号</h4>
							 <p>xx大厦23层</p>
							 <p>电话：88888888</p>
							 <p>手机: 15842696705</p>
							 <p>邮箱: <a href="mailto:2395293586@qq.com">2395293586@qq.com</a></p>
						 </div>
					 </li>				
				  </ul>
			 </div>

			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!--fotter-->
<div class="fotter">
	<div class="container">
		<div class="col-md-4 fotter-info">
			<h3>关于我们</h3>
			<p>最新 最快 最好玩的新闻 </p>
			<p>热烈庆祝党的十九大胜利圆满结束！ </p>
		</div>
		<div class="col-md-4 fotter-list">
			<h3>新闻快看</h3>
			<ul>
				<li><a href="#">国内新闻</a></li>
				<li><a href="#">本地新闻</a></li>
				<li><a href="#">国际新闻</a></li>
			</ul>
		</div>
		<div class="col-md-4 fotter-list">
			<h3>联系我们</h3>
			<ul>
				<li><a>电话：88888888</a></li>
				<li><a>手机：15842696705</a></li>
				<li><a>地址：软件园路8号</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!---fotter/-->
<div class="copywrite">
	 <div class="container">
		 <p>新闻网站</p>
</div>
</div>
<!---->
<!---->
<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>




</body>
</html>