var passCode = "3e27GW7V729q60ud";

function s1_view() {
	$.post('online/foodOrdering/whereAreYou.html', {'ssCode' : passCode}, function(data) {
		$("#mu-res-foodordering-stage-container").html(data);
	});
}

$(document).ready(function(){
	s1_view();
});
