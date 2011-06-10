var DEBUG_MODE = false;
var FO_LOGGED = false;

if (getUrlParameter('debug') != null) DEBUG_MODE = true;

function getUrlParameter(name) { 
	name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
	var regexS = "[\\#&]"+name+"=([^&#]*)";
	var regex = new RegExp( regexS );
	var results = regex.exec( window.location.href );
	if( results == null )
		return "";
	else
		return results[1];
}


// jQuery input hints plug-in
(function ($) {

$.fn.hint = function (blurClass) {
  if (!blurClass) { 
    blurClass = 'blur';
  }
    
  return this.each(function () {
    // get jQuery version of 'this'
    var $input = $(this),
    
    // capture the rest of the variable to allow for reuse
      title = $input.attr('title'),
      $form = $(this.form),
      $win = $(window);

    function remove() {
      if ($input.val() === title && $input.hasClass(blurClass)) {
        $input.val('').removeClass(blurClass);
      }
    }

    // only apply logic if the element has the attribute
    if (title) { 
      // on blur, set value to title attr if text is blank
      $input.blur(function () {
        if (this.value === '') {
          $input.val(title).addClass(blurClass);
        }
      }).focus(remove).blur(); // now change all inputs to title
      
      // clear the pre-defined text when form is submitted
      $form.submit(remove);
      $win.unload(remove); // handles Firefox's autocomplete
    }
  });
};

})(jQuery);




$(document).ready(function(){
	// --------------- Handle the login function --------------- 
	// FO_LOGGED;
	$('#fo_loginbar_wrapper .fo_loginBtn').fancybox({
		centerOnScroll: true,
		overlayShow: false,
		transitionIn: 'elastic',
		scrolling: 'no',
		height: 480
	});
	$('#fo_loginbar_wrapper .fo_signupBtn').fancybox({
		centerOnScroll: true,
		overlayShow: false,
		transitionIn: 'elastic',
		scrolling: 'no',
		height: 480
	});
	$('#fo_popup_loginBox button.fo_login_btn').button();
	$('#fo_popup_signupBox button.of_signup_submitBtn').button();
	$('#fo_popup_signupBox button.of_signup_cancelBtn').button();
	
	$('#fo_popup_loginBox button.fo_login_btn').click(function(){
		var serverResponse = $.ajax({
			url: "online/welcome/login",
			global: false,
			type: "POST",
			data: ({email : $('#mu-login-email').val(), password : $('#mu-login-password').val()}),
			dataType: "html",
			async:false
		}).responseText;
		if (serverResponse != "") {
			//$('#mu-login-bar').replaceWith(bodyContent);
			//$('#mu-free-signup').fadeOut();
		} else {
			//$.fancybox({'content' : "輸入資料錯誤，請重新輸入。"});
			//alert('Wrong info')
		}

	});
	$('#fo_popup_signupBox button.of_signup_submitBtn').button();	
	
	
	
	
});