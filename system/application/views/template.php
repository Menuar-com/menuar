<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<base href="<?= base_url(); ?>" />
<meta name="keywords" content="page_keywords">
<meta name="description" content="page_description">
<meta name="author" content="page_author">
<meta name="robots" content="page_robots">
<meta name="copyright" content="page_copyright">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link rel="stylesheet" href='style/base.css' type="text/css" />
<link rel="stylesheet" href='style/shadowbox.css' type="text/css" />
<link rel="stylesheet" href='plugin/fancybox/jquery.fancybox-1.3.4.css' type="text/css" />
<?= $_styles ?>

<!--[if lt IE 8]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
<script src="plugin/json2/json2.js" type="text/javascript"></script>
<![endif]-->

<![endif]–>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script language="javascript">
	google.load("jquery", "1.5.1");
	google.load("jqueryui", "1.8.10");
</script>
<script type="text/javascript" src="script/common.js"></script>
<script src="plugin/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="http://cdn.jquerytools.org/1.2.5/tiny/jquery.tools.min.js"></script>
<script src="script/jquery.livequery.js" type="text/javascript"></script>
<?= $_scripts ?>

<title><?= $title ?></title>
</head>

<body>
<div id="mu-page-wrapper">
	<div id="mu-promotional-message" style=" display: none;">
		<p>獲得即時優惠資訊</p>
		<input name="mu-prom-email" />
		<div id="mu-prom-btn-wrapper">
			<div class="mu-btn-l mu-btn-blue"></div>
			<div class="mu-btn-m mu-btn-blue">訂閱</div>
			<div class="mu-btn-r mu-btn-blue"></div>
		</div>
	</div>
	<div class="clearer"></div>
	<div id="mu-header">
		<div id="mu-site-logo">
			<h1><a href=""><img src="images/mu-site-logo.png" alt="Menuar - 香港線上訂餐平台" /></a></h1>
		</div>
		<?= $loginStatus ?>
		<div id="mu-social-network-bar"><span>追踪我們：</span>
			<div class="mu-sns-32x32-icon mu-sns-fb"><img src="images/sns_icon.png" alt="Facebook" usemap="#mu-sns-link" /></div>
			<div class="mu-sns-32x32-icon mu-sns-tt"><img src="images/sns_icon.png" alt="Twitter" usemap="#mu-sns-link" /></div>
			<div class="mu-sns-32x32-icon mu-sns-wb"><img src="images/sns_icon.png" alt="WeiBo" usemap="#mu-sns-link" /></div>
			<div class="mu-sns-32x32-icon mu-sns-rs"><img src="images/sns_icon.png" alt="RSS" usemap="#mu-sns-link" /></div>
			<map name="mu-sns-link" id="mu-sns-link">
				<area shape="rect" coords="0,0,32,32" href="#1" />
				<area shape="rect" coords="32,0,64,32" href="#2" />
				<area shape="rect" coords="64,0,94,32" href="#3" />
				<area shape="rect" coords="94,0,128,32" href="#4" />
			</map>
		</div>
		<?= $freeReg ?>
		<!-- -->
		<div class="clearer"></div>
	</div>
	<div id="mu-body-wrapper-t"></div>
	<div id="mu-body-wrapper-m">
		<?= $navBar ?>
		<div class="clearer"></div>
		<div id="mu-main-body">
			<div id="mu-contents-wrapper">
				<?= $content ?>
			</div>
		</div>
		<div id="mu-main-body-b"></div>
		<div id="mu-copyright">
			<p>MenuAr.com為香港網上訂餐平台，提供餐廳資料、飲食資訊、及餐廳優惠。<br />
				Copyright © 2000-2011 Menuar Group Inc. 版權所有 不得轉載</p>
		</div>
	</div>
	<div id="mu-body-wrapper-b"></div>
</div>
<div id="site-slide-bar"></div>
</body>
</html>
