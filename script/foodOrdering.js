var passCode = "3e27GW7V729q60ud";

function mu_init() {
	$.post('online/foodOrdering/whereAreYou.html', {'ssCode' : passCode}, function(data) {
		$("#mu-res-foodordering-stage-container").html(data);
	});
}

(function($){
	$.fn.mu_ranking = function() {
		var ranking = parseInt($(this).attr('ranking'));
		$(this).width(20*ranking + 7*(ranking-1));
		$(this).find('img').attr('alt', 'Ranking: '+ranking);
	};
})( jQuery );

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
				contentURL = "online/foodOrdering/selectFood.html";
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
	
	// JS Style / Effect
	console.log($('input[title!=""]'))
	$('input[title!=""]').hint();
	
	// Event listerner
	$('#mu_FO_s1_wrapper .mu_FO_s1_navs').live('hover', function(){
		var targetTab = $(this).attr('targetTab');
		$('#mu_FO_s1_wrapper .mu_FO_s1_navs').removeClass('mu_active');
		$(this).addClass('mu_active');
		$('#mu_FO_s1_wrapper .mu_FO_s1_tabs').removeClass('mu_active');
		$('#mu_FO_s1_wrapper .mu_FO_s1_tabs[tab='+targetTab+']').addClass('mu_active');
		$('#mu_FO_s1_wrapper').height($('#mu_FO_s1_wrapper .mu_FO_s1_tabs[tab='+targetTab+']').height() + 2);
	})
	
	$('#mu_FO_s2_wrapper .mu_FO_tools').live('click', function(){
		$(this).toggleClass('mu_active');
	});
	
});
