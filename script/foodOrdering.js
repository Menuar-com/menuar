var passCode = "3e27GW7V729q60ud";

function mu_init() {
	$.post('online/foodOrdering/whereAreYou.html', {'ssCode' : passCode}, function(data) {
		$("#mu-res-foodordering-stage-container").html(data);
	});
}

$(document).ready(function(){
	mu_init();
	
	$('.mu-order-submenu li').click(function(){
		var stageIndex = $(this).attr("targetstage");
		
		var contentURL = "";
		
		switch (parseInt(stageIndex)) {
			case 1:
				contentURL = 'online/foodOrdering/whereAreYou.html';
				break;
			case 2:
				contentURL = 'online/foodOrdering/chooseRestautant.html';
				break;
			case 3:
				contentURL = "online/foodOrdering/whereAreYou.html";
				break;
			case 4:
				contentURL = "online/foodOrdering/whereAreYou.html";
				break;
		}
		console.log(contentURL);
		$.post(contentURL, {'ssCode' : passCode}, function(data) {
			$("#mu-res-foodordering-stage-container").html(data);
		});
	});
	
	// Event listerner
	$('#mu_FO_s2_wrapper .mu_FO_tools').live('click', function(){
		$(this).toggleClass('mu_active');
	});
});
