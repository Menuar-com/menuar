<base href="<?= base_url(); ?>" />
<script src="script/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="script/jquery-ui-1.8.5.custom.min.js" type="text/javascript"></script>
<script language="javascript">
$(document).ready(function(){
	var testData = {};
	testData.resName = "test1";
	testData.resAddress = "teset2";
	testData.resTel = "99912354";
	

	//$.post('online/testing/resAdminDataUpdate/stage2.html', {'data' : JSON.stringify(formData.s2Data), 'ssCode' : '3H98Ci11i2tE'}, function(data) {
	$.post('online/restaurantAdmin/resAdminDataUpdate/stage1', {'data' : JSON.stringify(testData), 'ssCode' : '3H98Ci11i2tE'}, function(data) {
		console.log(data);
	});
});




</script>