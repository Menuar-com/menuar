<div id="mu-login-bar">
	<input id="mu-login-email" name="email" type="text" />
	<input id="mu-login-password" name="password" type="password" />
	<div id="mu-login-btn-wrapper">
		<div class="mu-btn-l mu-btn-mid-size"></div>
		<div class="mu-btn-m mu-btn-mid-size">登入</div>
		<div class="mu-btn-r mu-btn-mid-size"></div>
	</div>
</div>
<script language="javascript">
$(document).ready(function() {
	$("#mu-login-email, #mu-login-password").keyup(function(event){
		if(event.keyCode == 13){
			memberLogin();
		}
	});
	$('#mu-login-btn-wrapper').click(function() {
		memberLogin();
	});
	function memberLogin() {
		var bodyContent = $.ajax({
			url: "online/welcome/login",
			global: false,
			type: "POST",
			data: ({email : $('#mu-login-email').val(), password : $('#mu-login-password').val()}),
			dataType: "html",
			async:false
		}).responseText;
		if (bodyContent != "") {
			$('#mu-login-bar').replaceWith(bodyContent);
			$('#mu-free-signup').fadeOut();
		} else {
			$.fancybox({'content' : "輸入資料錯誤，請重新輸入。"});
			//alert('Wrong info')
		}
	}
});
</script>