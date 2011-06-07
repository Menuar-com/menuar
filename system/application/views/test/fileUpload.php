<!DOCTYPE HTML>
<html lang="en">
<head>
<base href="<?= base_url(); ?>" />
<meta charset="utf-8">
<title>jQuery File Upload Example</title>
<link rel="stylesheet" href="plugin/fileUpload/jquery.fileupload-ui.css">
<link rel="stylesheet" href="style/ui-lightness/jquery-ui-1.8.9.custom.css">
<script src="script/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="script/jquery-ui-1.8.5.custom.min.js" type="text/javascript"></script>
<script src="plugin/fileUpload/jquery.fileupload.js"></script>
<script src="plugin/fileUpload/jquery.fileupload-ui.js"></script>
<style>
body { font-family: Verdana, Arial, sans-serif; font-size: 13px; margin: 0; padding: 20px; }
</style>
</head>
<body>
<form class="upload" action="online/restaurantAdmin/imageUpload" method="POST" enctype="multipart/form-data">
	<input type="file" name="file" multiple>
	<button>Upload</button>
	<div class="uploadText">
		Upload files
	</div>
</form>
<div id="uploadResult">
</div>
<div class="upload_files" style=" display: none;">
	<div class="uploadText">
		Uploading...
	</div>
	<div id="progressCounter"></div>
	<div id="progressbar">
	</div>
</div>
<table class="download_files">
</table>
<script>
/*global $ */

(function($) {
$.fn.weekpicker = function() {
	$(this).addClass('ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all');
	var contents = '<div class="ui-widget-header ui-helper-clearfix ui-corner-all"><div class="ui-weekpicker-title">Choose Week</div></div>';
	contents += '<button class="ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all" type="button">Mon</button>';
	$(contents).appendTo(this);
}
})(jQuery);





(function (jQuery) {
jQuery.fn.vAlign = function() {
	return this.each(function(i){
	var ah = jQuery(this).height();
	var ph = jQuery(this).parent().height();
	var mh = ((ph - ah) / 2);
	jQuery(this).css('margin-top', mh);
	});
};
})(jQuery);


$(function () {
	$('#weekpicker').weekpicker();
	$( "#progressbar" ).progressbar({
		value: 0
	});
    $('.upload').fileUploadUI({
		uploadTable: $('.upload_files'),
		downloadTable: $('.download_files'),
		buildUploadRow: function (files, index) {/* ... */},
		buildDownloadRow: function (file) {/* ... */},
		beforeSend: function (event, files, index, xhr, handler, callBack) {
			var regexp = /\.(png)|(jpg)|(gif)$/i;
			if (!regexp.test(files[index].name)) {
				$('<p>ONLY IMAGES ALLOWED!</p>').hide().appendTo('#uploadResult').fadeIn(1000);
				return;
			}
			if (files[index].size > 3145728) {
				$('<p>FILE TOO BIG!</p>').hide().appendTo('#uploadResult').fadeIn(1000);
				return;
			}
			callBack();
		},
		onProgress: function (event, files, index, xhr, handler) {
			$('.upload').hide();
			$('.upload_files').show();
			var progress = '';
			var outputText = '';
			window.setInterval(function() {
				progress = parseInt(event.loaded / event.total * 100, 10);
				outputText = '<span>' + progress + '%</span>';
				$("#progressbar").progressbar({value: progress});
				$("#progressCounter").html(outputText);
			}, 10);
		},
		onComplete: function (event, files, index, xhr, handler) {
			$('.download_files').hide();
			$('.upload_files').hide();
			var doneOutput = '<tr id="" style=""><td class="file_preview"></td><td class="filename"></td><td class="filesize"></td><td class="file_delete"><button title="Delete" class="ui-state-default ui-corner-all ui-state-hover"><span class="ui-icon ui-icon-trash">Delete</span></button></td></tr>';
			//console.log(doneOutput);
			$('.download_files').html(doneOutput).fadeIn();
			$('<img src="'+handler.response.imgPath+'" />').hide().appendTo('.download_files .file_preview').fadeIn();
			$('<span>' + handler.response.imgName + '</span>').hide().appendTo('.download_files .filename').fadeIn();
			$('<span>' + Math.round(handler.response.imgSize * 100 / 1024) / 100 + 'KB</span>').hide().appendTo('.download_files .filesize').fadeIn();
			$('.file_delete').click(function(){
				$('.download_files').hide();
				$('.upload').show();
			});
        }
	});
	
	$(".valign").vAlign();
	
	
	
});
</script>

<div id="weekpicker"></div>
</body>
</html>