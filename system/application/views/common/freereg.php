<div id="mu-free-signup"><a>免費登記</a></div>
<script language="javascript">
var freeSignupClicked = false;
$('#mu-free-signup').click(function(){
	if (freeSignupClicked == false) {
		$.ajax({
			type: "GET",
			url: "script/jquery.validate.min.js",
			dataType: "script"
		});
		$.ajax({
			type: "GET",
			url: "script/jquery.maskedinput-1.2.2.min.js",
			dataType: "script"
		});
	}
	$.fancybox({'href': 'online/member/registrationShadowbox.html'},{
		type: 'ajax',
		centerOnScroll: true,
		hideOnOverlayClick: false,
		padding: 50
	});
	freeSignupClicked = true;
});
</script>