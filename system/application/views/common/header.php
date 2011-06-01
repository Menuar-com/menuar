<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="page_keywords">
<meta name="description" content="page_description">
<meta name="author" content="page_author">
<meta name="robots" content="page_robots">
<meta name="copyright" content="page_copyright">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href='<? echo base_url() ?>style/base.css' type="text/css" />  
<title>{page_title}</title>
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
			<h1><a href="<? echo base_url() ?>"><img src="<? echo base_url() ?>images/mu-site-logo.png" alt="Menu Ar - 咩料呀？！" /></a></h1>
		</div>
		<div id="mu-login-bar">
			<input name="mu-login-email" />
			<input name="mu-login-password" />
			<div id="mu-login-btn-wrapper">
				<div class="mu-btn-l mu-btn-mid-size"></div>
				<div class="mu-btn-m mu-btn-mid-size">登入</div>
				<div class="mu-btn-r mu-btn-mid-size"></div>
			</div>
		</div>
		<div id="mu-social-network-bar"><span>追踪我們：</span>
			<div class="mu-sns-32x32-icon mu-sns-fb"><img src="<? echo base_url() ?>images/sns_icon.png" alt="Facebook" usemap="#mu-sns-link" /></div>
			<div class="mu-sns-32x32-icon mu-sns-tt"><img src="<? echo base_url() ?>images/sns_icon.png" alt="Twitter" usemap="#mu-sns-link" /></div>
			<div class="mu-sns-32x32-icon mu-sns-wb"><img src="<? echo base_url() ?>images/sns_icon.png" alt="WeiBo" usemap="#mu-sns-link" /></div>
			<div class="mu-sns-32x32-icon mu-sns-rs"><img src="<? echo base_url() ?>images/sns_icon.png" alt="RSS" usemap="#mu-sns-link" /></div>
			<map name="mu-sns-link" id="mu-sns-link">
				<area shape="rect" coords="0,0,32,32" href="#1" />
				<area shape="rect" coords="32,0,64,32" href="#2" />
				<area shape="rect" coords="64,0,94,32" href="#3" />
				<area shape="rect" coords="94,0,128,32" href="#4" />
			</map>
		</div>
		<div id="mu-free-signup">免費登記</div>
		<div class="clearer"></div>
	</div>
	<div id="mu-body-wrapper-t"></div>
	<div id="mu-body-wrapper-m">
		<? $this->load->view('common/nav'); ?>
		<div class="clearer"></div>
		<div id="mu-main-body">
			<div id="mu-contents-wrapper"> 