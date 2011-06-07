<div id="mu-login-bar">
	<p>歡迎你：<span><?= $this->session->userdata('email') ?></span> | <span class="mu_logout">登出</span></p>
</div>
<script language="javascript">

	$('.mu_logout').click( function() {
		window.location = "online/welcome/logout"
	});

</script>