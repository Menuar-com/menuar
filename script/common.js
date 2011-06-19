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

function of_logged() {
	$('#fo_loginbar_wrapper .fo_notLogged').hide();
	$('#fo_loginbar_wrapper .fo_logged .of_username').html('hon');
	$('#fo_loginbar_wrapper .fo_logged').show();
}

function of_notlogged() {
	$('#fo_loginbar_wrapper .fo_notLogged').fadeIn();
	$('#fo_loginbar_wrapper .fo_logged').hide();
}

function of_logout() {
	$.post('online/welcome/logout.html');
	of_notlogged();	
}


$(document).ready(function(){
	// --------------- Handle the login and registration function --------------- 
	// Check Wherher logged in
	$.post('online/welcome/isLogged.html', function(data){
		if (data == 'X7plB7u3NM3i8hZ6') {
			//console.log('Already Logged.');
			FO_LOGGED = true;
			of_logged();
		} else {
			FO_LOGGED = false;
			of_notlogged();
		}
		
	});
	
	$("#fo_popup_loginBox form#fo_form_login").validate();
	$("#fo_popup_signupBox form#fo_popup_signupBox_form").validate();

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
	$('#fo_form_login').submit(function(){
		console.log($(this).serialize());
		var serverResponse = $.ajax({
			url: $(this).attr('action'),
			global: false,
			type: "POST",
			data: $(this).serialize(),
			dataType: "html",
			async:false
		}).responseText;
		if (serverResponse == "7R38M1t868ZC7YAH") {
			console.log('login successful');
			$.fancybox.close();
			of_logged();
		} else if (serverResponse == "21I741E113IRd10C") {
			//console.log('error');
			//$.fancybox({'content' : "輸入資料錯誤，請重新輸入。"});
			//alert('Wrong info')
		}
		return false;
	});
	$('#fo_popup_signupBox_form').submit(function(){
		console.log($(this).serialize());
		var serverResponse = $.ajax({
			url: $(this).attr('action'),
			global: false,
			type: "POST",
			data: $(this).serialize(),
			dataType: "html",
			async:false
		}).responseText;
		
		console.log(serverResponse);
		
		if (serverResponse == "L5UbSg6BATg8OfKE") {
			console.log('successful');
			$.fancybox({href: '#fo_popup_signedBox', height: 480});
			$('#fo_popup_signedBox button').button();
		} else if (serverResponse == "Qfl47cDJK0EbP45g") {
			//console.log('error');
			//$.fancybox({'content' : "輸入資料錯誤，請重新輸入。"});
			//alert('Wrong info')
		}
		return false;
	})
		
	
});