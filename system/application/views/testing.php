<base href="<?= base_url(); ?>" />
<script src="script/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="script/jquery-ui-1.8.5.custom.min.js" type="text/javascript"></script>
<script language="javascript">
$(document).ready(function(){
	var tempData = {}
	var ssCode = '3H98Ci11i2tE'
	
	var testData3 = '[{"entry":[{"entryName":"fdsa","entryPrice":"23"},{"entryName":"fdsag","entryPrice":"43"},{"entryName":"fdsag","entryPrice":"54"},{"entryName":"sdfa","entryPrice":"23"},{"entryName":"","entryPrice":""}],"className":"fads","formtype":1},{"entry":[{"entryName":"gadsfgads"},{"entryName":"hasdh"},{"entryName":"asdhashg"},{"entryName":"gdasg"},{"entryName":""}],"className":"fsdag","formtype":2},{"entry":[{"A":"dsa","B":"asd"},{"A":"f","B":"dsa"},{"A":"df","B":"as"},{"A":"fdsa","B":"as"},{"A":"fda","B":""},{"A":"fdas"},{"A":""}],"className":"fgsdag","formtype":3}]';
	/*  Stage 1
	tempData.resName = 'Sam';
	tempData.operationTime = '60371992';
	*/
	var testData3JSON = JSON.parse(testData3);
	console.log(testData3JSON);
	
	/*  Stage 2 */
	formData = {};
	formData.s2Data = [];
	numberOfForm = 3;
	for (var i = 0; i < numberOfForm; i++) {
		formData.s2Data[i] = {};
		formData.s2Data[i].entry = [];
		formData.s2Data[i].className = 'class' + i;
		var numberOfEntry = 5;
		for (var j = 0; j < numberOfEntry; j++) {
			formData.s2Data[i].entry[j] = {};
			formData.s2Data[i].entry[j].entryName = 'name' + i + ':' + j;
			formData.s2Data[i].entry[j].entryPrice = 'price' + i + ':' + j;
		}
	}
				

	//$.post('online/testing/resAdminDataUpdate/stage2.html', {'data' : JSON.stringify(formData.s2Data), 'ssCode' : '3H98Ci11i2tE'}, function(data) {
	$.post('online/testing/resAdminDataUpdate/stage3.html', {'data' : testData3, 'ssCode' : '3H98Ci11i2tE'}, function(data) {
		console.log(data);
	});
});




</script>