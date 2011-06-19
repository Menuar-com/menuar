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
<link rel="stylesheet" href='style/ui-lightness/jquery-ui-1.8.9.custom.css' type="text/css" />
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
<script type="text/javascript" src="plugin/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="http://cdn.jquerytools.org/1.2.5/tiny/jquery.tools.min.js"></script>
<script type="text/javascript" src="script/jquery.livequery.js"></script>
<script type="text/javascript" src="script/jquery.validate.min.1.8.1.js"></script>
<?= $_scripts ?>

<title><?= $title ?></title>
</head>

<body>
<div id="mu-page-wrapper">
	<div id="mu-promotional-message" style=" display: none;">
		<p>即時注冊成為會員：</p>
		<label for="mu_hb_username"></label>
		<input name="mu_hb_username" id="mu_hb_username" />
		
		<label for="mu_hb_password"></label>
		<input name="mu_hb_password" id="mu_hb_password" />
		
		<button id="mu_hb_signup">注冊</button>
		<script language="javascript">
			$(document).ready(function(){
				$('#mu_hb_signup').button();
			})
		</script>
		<!--
		<div id="mu-prom-btn-wrapper">
			<div class="mu-btn-l mu-btn-blue"></div>
			<div class="mu-btn-m mu-btn-blue">訂閱</div>
			<div class="mu-btn-r mu-btn-blue"></div>
		</div>
		
		-->
	</div>
	<div class="clearer"></div>
	<div id="mu-header">
		<div id="mu-site-logo">
			<h1><a href=""><img src="images/of_logo.png" alt="OrderFood - 香港線上訂餐平台" /></a></h1>
		</div>
		<div id="fo_loginbar_wrapper">
			<div class="fo_loginbar_l"></div>
			<div class="fo_loginbar_m">
				<div class="fo_notLogged" style="display: none;">
					<span><a class="fo_signupBtn" href="#fo_popup_signupBox">新用戶?</a> | <a class="fo_loginBtn" href="#fo_popup_loginBox">登入</a> </span>
					<!-- Connect to Facebook -->
				</div>
				<div class="fo_logged" style="display: none;">
					<span>您好! <span class="of_username">Username</span> | <a  href="#" onclick="of_logout(); return false;">登出</a></span>
					<!-- Facebook Logged icon -->
				</div>
			</div>
			<div class="fo_loginbar_r"></div>
		</div>
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
			<p class="mu_copyright_text">OrderFood.com.hk 為你提供線上訂餐服務、餐廳資料、飲食資訊、及餐廳優惠。<br />
				Copyright © 2000-2011 OrderFood Inc. 版權所有 不得轉載</p>
			<div id="mu-social-network-bar">
				<span>追踪我們：</span>
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
			<div class="clearer"></div>
		</div>
	</div>
	<div id="mu-body-wrapper-b"></div>
</div>
<div id="site-slide-bar"></div>

<div style="display: none;">
	<div id="fo_popup_loginBox">
		<div class="fo_left">
			<h5>Facebook 用戶登入</h5>
			<p>使用你的Facebook 帳號登入，便可……..與朋友分享！</p>
			<!-- Add Facebook connect here -->
		</div>
		<div class="fo_right">
			<h5><img src="images/fo_small_logo.png" />會員登入</h5>
			<form id="fo_form_login" class="form" action="online/welcome/login.html">
				<div class="fo_textinputWrapper">
					<label class="fo_textboxLB">登入電郵：</label>
					<input type="text" value="" maxlength="255" class="required email" name="email" id="email">
				</div>
				<div class="fo_textinputWrapper">
					<label class="fo_textboxLB">密碼：</label>
					<input type="password" value="" maxlength="255" class="required password" name="password" id="password">
				</div>
				<div class="fo_checkboxWrapper">
					<input type="checkbox" name="rememberMe" id="fo_rememberMe" value="1" />
					<label class="fo_checkboxLB" for="fo_rememberMe">記住我既登入資料～</label>
				</div>
				<button class="fo_login_btn" type="submit">登入</button>
			</form>
			<div class="clearer"></div>
		</div>
	</div>
	<div id="fo_popup_signupBox">
		<h5><img src="images/fo_small_logo.png">新用戶登記</h5>
		<form id="fo_popup_signupBox_form" class="form" action="online/welcome/registration.html">
			<ul>
				<li class="mu-form-crossline" id="mu-li-email">
					<label for="email" class="description fo_textboxLB">電郵地址：</label>
					<div class="mu-form-input">
						<input type="text" value="" maxlength="255" class="required email" name="email" id="email">
					</div>
					<div class="clearer"></div>
				</li>
				<li class="left" id="mu-li-password">
					<label for="password" class="description fo_textboxLB">密碼：</label>
					<div class="form_input">
						<input type="password" value="" maxlength="255" class="required password" name="password" id="password">
					</div>
					<div class="clearer"></div>
				</li>
				<li class="right" id="mu-li-re-password">
					<label for="re_password" class="description fo_textboxLB">重複輸入密碼：</label>
					<div class="form_input">
						<input type="password" value="" equalto="#fo_popup_signupBox_form #password" maxlength="255" class="required password" name="re_password" id="re_password">
					</div>
					<div class="clearer"></div>
				</li>
				<li class="form_wholeline fo_checkboxWrapper">
					<input type="checkbox" value="1" name="promo" id="of_form_promo">
					<label for="of_form_promo">
						我不想定期在電子信箱中收到OrderFood.com.hk的精選優惠資訊。
					</label>
				</li>
				<li class="form_wholeline fo_checkboxWrapper">
					<input type="checkbox" value="1" name="TandC" id="of_form_TandC">
					<label for="of_form_TandC">
						我同意且已閱讀OrderFood.com.hk的使用條款。
					</label>
				</li>
				<li class="of_signup_submit">
					<input type="hidden" value="3ephusP8" name="ssCode">
					<button class="of_signup_submitBtn" type="submit">遞交</button>
					<button class="of_signup_cancelBtn" type="reset">取消</button>
				</li>
			</ul>
		</form>
	</div>
	<div id="fo_popup_signedBox">
		<h5>成功注冊</h5>
		<p>恭喜你，你經已成功注冊成為OrderFood.com.hk的會員，可享用本平台叫外賣。</p>
		<button>叫外賣</button>
	</div>
</div>

</body>
</html>
