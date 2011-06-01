<style type="text/css">
#mu-region-select li { list-style: none; float: left; display: block; border: 1px dashed #C63; width: 50px; text-align: center; padding: 5px; margin: 2px; cursor: pointer;}
#mu-region-select #mu-region-select-stage1 {}
</style>
<div id="loadRegion">click</div>
<div id="mu-region-select">
	<div id="mu-region-select-stage1"> </div>
	<div id="mu-region-select-stage2"> </div>
	<div id="mu-region-select-stage3"> </div>
</div>



<script language="javascript">
var regionlv1  = new Array();
var regionlv2  = new Array();
var regionlv3  = new Array();
var regionjson = new Array();
$(document).ready(function(){
	$.getJSON('images/region_hk.json',{level : 1},function(data){
		regionjson = data;
		$.each(regionjson, function(key, value){
			if (value.level == 1){
				regionlv1 = regionlv1.concat(value.id);
			}
		});
		$.each(regionlv1, function(key, value){
			$('#mu-region-select-stage1').append('<li regid="'+data[value].id+'" class="mu-region-stage1-item">'+data[value].name+'</li>');
		});
		$('#mu-region-select-stage1').append('<div class="clear"></div>');
	});
	
	$('.mu-region-stage1-item').livequery(function(){
		var parentid = $(this).attr('regid');
		regionlv2 = [];
		//$('#mu-region-select-stage2').html('');
		$.each(regionjson, function(key, value){
			if (value.level == 2 && value.parent == parentid){
				regionlv2 = regionlv2.concat(value.id);
			}
		});
		if (regionlv2 != ''){
			var tempdata = ''
			tempdata = '<ul parentid='+parentid+'>';
			$.each(regionlv2, function(key, value){
				tempdata = tempdata + '<li regid="'+regionjson[value].id+'" class="mu-region-stage2-item">'+regionjson[value].name+'</li>'
			});
			tempdata = tempdata +'</ul><div class="clear"></div>'
			$('#mu-region-select-stage2').append(tempdata);
		}
	});
	$('.mu-region-stage2-item').livequery(function(){
		
		var parentid = $(this).attr('regid');
		regionlv3 = [];
		//$('#mu-region-select-stage2').html('');
		$.each(regionjson, function(key, value){
			if (value.level == 3 && value.parent == parentid){
				regionlv3 = regionlv3.concat(value.id);
			}
		});
		if (regionlv3 != ''){
			var tempdata = ''
			tempdata = '<ul parentid='+parentid+'>';
			

			$.each(regionlv3, function(key, value){
				tempdata = tempdata + '<li regid="'+regionjson[value].id+'" class="mu-region-stage3-item">'+regionjson[value].name+'</li>';
			});
			tempdata = tempdata + '</ul><div class="clear"></div>';
			
			$('#mu-region-select-stage3').append(tempdata);
		}
	});
});

$('#loadRegion').click(function() {
	$.each(regionjson, function(key, value){
		if (value.level == 1){
			regionlv1 = regionlv1.concat(value.id);
		}
	});
	console.log(regionlv1);
});
$.each(regionlv1)
</script>