<!doctype html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=0">
	<meta name="viewport" content="width=drvice-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;"> -->
	<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1">
	<!-- <meta name="viewport" content="width=1200, initial-scale=1.0"> -->


	<title><?= isset($title) ? $title : ''; ?></title>
	<link rel="stylesheet" href="/css/swiper.min.css">
	<link rel="stylesheet" href="/css/app.css">
	<script type="text/javascript" src="/js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="/js/jquery.SuperSlide.2.1.3.js"></script>
	<script type="text/javascript" src="/js/swiper.min.js"></script>

</head>
<body>
<!-- 头部 -->
<div class="haed_k_top">
	<div class="px1200">
		<div class="logo"><img src="/images/logo.png" alt=""></div>
		<div class="right_Fd">
			<ol>
				<li><span>专业</span></li>
				<li><span>快速</span></li>
			</ol>
			<h2><span>咨询电话：</span> 18722985167</h2>
			<p>公司地址：贵州省铜仁市碧江区滑石乡谷坳</p>
		</div>
	</div>
</div>
<div class="shouy_daoh">
	<div class="px1200">
		<ul class="daoh_ul">
			<li><a href="<?= base_url('/') ?>">首页</a></li>
			<li><a href="<?= base_url('blog') ?>">博客</a></li>
			<li><a href="<?= base_url('blog/create') ?>">添加</a></li>
		</ul>
		<div class="sous_k">
			<input type="text" placeholder="请输入关键词">
		</div>
	</div>
</div>
<div style="padding: 10px">
	<?= $contents; ?>
</div>
<!-- 底部 -->
<div class="fooder_kuang">
	<div class="px1200">
		<div class="left">
			<p>公司名称：贵州省铜仁市金鑫矿业有限公司【官网】 网址：www.trjxky.com http://5617.wangid.com</p>
			<p>备案号：黔ICP备18002300号-2 咨询电话：18722985167</p>
			<p>地址：贵州省铜仁市碧江区滑石乡谷坳</p>
			<p>网站直达号ID：5617</p>
			<p>访问统计 总7368次 今日11次 建议(1024*768) IE8.0以上浏览器浏览本站 即时通管理 后台登录</p>
			<p>Powered by WangID 驰通集团</p>
			<p class="youqing_lianj">友情链接：
				<a href="#">驰通集团</a>
				<a href="#">苗谷科技</a>
				<a href="#">黄达网络</a>
				<a href="#">光束行者</a>
			</p>
		</div>
		<div class="erweim">
			<div class="erwem"><img src="/images/erwm.png" alt=""></div>
			<p>【扫码关注】</p>
		</div>
	</div>
</div>

</body>
</html>
