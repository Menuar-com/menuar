// Common variable
var ssCode = '3H98Ci11i2tE';
var resID = 1;

// Adjust the height of container
function muResAdminStagesHeight(){
    var stageIndex = $('#mu-res-admin-stage-container').data('scrollable').getIndex() % 4 + 1;
    $('#mu-res-admin-stage-container').animate({
        height: $('#mu-res-admin-stage' + stageIndex).height() + 10 + 'px'
    });
}

$(document).ready(function(){
    // Variable Initialization
	    // Stage 2 variable
	var s2ClassNumber = 0;
	var s2EntryNumber = 0;
	var s2FocusClass = 0;
	var s2FocusEntry = 0;
		 // Stage 3 variable
    var stage3formNumber = 0;
    var stage3formIndex = 0;
    var s3FocusFormIndex = 1;
		// Others
	var formData = {};
	
	
	
	
	
	
	// Initialization
    $('#mu-res-admin-stage-container').scrollable({
        keyboard: false
    });
    muResAdminStagesHeight();
    
	$('#mu-resopenTime').timepicker({});
	$('#mu-rescloseTime').timepicker({});
    
	// Received data
	function s1GetData() {
		$.post('online/restaurantAdmin/resGetData/stage1.html', {'ssCode' : '3H98Ci11i2tE'}, function(data) {
			if (data) {
				data = JSON.parse(data);
				$('input[name="s1-resName"]').val(data.resName),
				$('input[name="s1-openTime"]').val(data.resOpenTime),
				$('input[name="s1-closeTime"]').val(data.resCloseTime),
				$('input[name="s1-resDescription"]').val(data.resDescript),
				$('input[name="s1-lowestPrice"]').val(data.lowestPrice),
				$('input[name="s1-resAddress"]').val(data.resAddress),
				$('input[name="s1-resTel"]').val(data.resTel),
				$('input[name="s1-resNotics"]').val(data.resNotics)
			}
		});
	}
	function s2GetData() {
		$.post('http://localhost:8888/menuar/online/restaurantAdmin/resGetData/stage2.html', {'ssCode' : '3H98Ci11i2tE'}, function(data) {
			if (data) {
				jsonData = JSON.parse(data);
				var S2entryCount = 0;
				$.each(jsonData.type, function(key1, value1) {
					S2entryCount = 0
					S2AddForm(value1.s2typeName);					
					$.each(jsonData.entry, function(key2, value2){
						if (value2.s2entryType == value1.s2typeType){
							s2TypeBlockPointer = $('.mu-stage2-form[formid="' + (parseInt(value1.s2typeType) + 1) + '"]');
							if (S2entryCount < 3) {
								s2TypeBlockPointer.find("dt").eq(S2entryCount+1).find("input").val(value2.s2entryName);
								s2TypeBlockPointer.find("dd").eq(S2entryCount+1).find("input").val(value2.s2entryPrice);
							} else {
								selection = s2TypeBlockPointer.find(".last");
								S2AddEntry(selection, value2.s2entryName, value2.s2entryPrice);
							}
							S2entryCount++;
						}
					});
				});

			}
		});
	}
	
	function s3GetData() {
		$.post('online/restaurantAdmin/resGetData/stage3.html', {'ssCode' : '3H98Ci11i2tE'}, function(data) {
			if (data) {
				data = JSON.parse(data);
				// .................................
			}
		});
	}
	s1GetData();
	
    // Handle the "Next step" function, Post data
    $('.mu-submit-btn-wrapper').click(function(){
        var stageIndex = $('#mu-res-admin-stage-container').data('scrollable').getIndex() % 4 + 1;
        
        switch (stageIndex) {
            case 1:
                formData.s1Data = {
					'resName'		: $('input[name="s1-resName"]').val(),
					'resOpenTime'	: $('input[name="s1-openTime"]').val(),
					'resCloseTime'	: $('input[name="s1-closeTime"]').val(),
					'resDescript'	: $('input[name="s1-resDescription"]').val(),
					'lowestPrice'	: $('input[name="s1-lowestPrice"]').val(),
					'resAddress'	: $('input[name="s1-resAddress"]').val(),
					'resTel'		: $('input[name="s1-resTel"]').val(),
					'resNotics'		: $('input[name="s1-resNotics"]').val(),
					'resTM'			: $('input[name="s1-resTM"]').val(),
					'resPhoto'		: $('input[name="s1-resPhoto"]').val(),
				};
                $.post('online/restaurantAdmin/resAdminDataUpdate/stage1.html', {'data' : JSON.stringify(formData.s1Data), 'ssCode' : '3H98Ci11i2tE'}, function(data) {});
				s2GetData();
                break;
            case 2:
				formData.s2Data = [];
				
				var numberOfForm = $('#mu-res-admin-stage2 .mu-stage2-form').length;
				for (var i = 0; i < numberOfForm; i++) {
					formData.s2Data[i] = {};
					formData.s2Data[i].entry = [];
					formData.s2Data[i].className = $('#mu-res-admin-stage2 .mu-stage2-form[formid=' + (i + 1) + '] h4 input').val();
					var numberOfEntry = $('#mu-res-admin-stage2 .mu-stage2-form[formid=' + (i + 1) + '] input:last').attr('entryid');
					for (var j = 0; j < numberOfEntry; j++) {
						formData.s2Data[i].entry[j] = {};
						formData.s2Data[i].entry[j].entryName = $('#mu-res-admin-stage2 .mu-stage2-form[formid=' + (i + 1) + '] input[entryid=' + (j + 1) + ']:first').val();
						formData.s2Data[i].entry[j].entryPrice = $('#mu-res-admin-stage2 .mu-stage2-form[formid=' + (i + 1) + '] input[entryid=' + (j + 1) + ']:last').val();
					}
				}
				$.post('online/restaurantAdmin/resAdminDataUpdate/stage2.html', {'data' : JSON.stringify(formData.s2Data), 'ssCode' : '3H98Ci11i2tE'}, function(data) {});
				break;
            case 3:
                formData.s3Data = [];
                $('#mu-res-admin-stage3 .mu-stage3-form').each(function(formkey){
                    var formtype = parseInt($(this).attr('formtype'));
                    formData.s3Data[formkey] = {};
                    formData.s3Data[formkey].entry = [];
                    formData.s3Data[formkey].className = $(this).find('input:first').val();
                    if (formtype == 3) {
                        var numberOfEntryA = $(this).find('input[entrytype=1]:last').attr('entryid');
                        var numberOfEntryB = $(this).find('input[entrytype=2]:last').attr('entryid');
                        console.log(numberOfEntryA + '...' + numberOfEntryB);
                        if (numberOfEntryA > numberOfEntryB) {
                            numberOfEntry = numberOfEntryA;
                        }
                        else {
                            numberOfEntry = numberOfEntryB;
                        }
                    }
                    else {
                        var numberOfEntry = $(this).find('input:last').attr('entryid');
                    }
                    
                    for (var entrykey = 0; entrykey < numberOfEntry; entrykey++) {
                        formData.s3Data[formkey].entry[entrykey] = {};
						formData.s3Data[formkey].formtype = formtype;
                        switch (formtype) {
                            case 1:
                                formData.s3Data[formkey].entry[entrykey].entryName = $(this).find('input[entryid=' + (entrykey + 1) + ']:first').val();
                                formData.s3Data[formkey].entry[entrykey].entryPrice = $(this).find('input[entryid=' + (entrykey + 1) + ']:last').val();
                                break;
                            case 2:
                                formData.s3Data[formkey].entry[entrykey].entryName = $(this).find('input[entryid=' + (entrykey + 1) + ']').val();
                                break;
                            case 3:
                                formData.s3Data[formkey].entry[entrykey].A = $(this).find('input[entrytype=1][entryid=' + (entrykey + 1) + ']').val();
                                formData.s3Data[formkey].entry[entrykey].B = $(this).find('input[entrytype=2][entryid=' + (entrykey + 1) + ']').val();
                        }
                    }
                })
				$.post('online/restaurantAdmin/resAdminDataUpdate/stage3.html', {'data' : JSON.stringify(formData.s3Data), 'ssCode' : '3H98Ci11i2tE'}, function(data) {});
                break;
        }
        
        stageIndex++;
        $('.num' + stageIndex).addClass('finished');
        $('#mu-res-admin-stage-container').data('scrollable').next(500);
        muResAdminStagesHeight();
        
    });
    // ------------ Stage 2 ------------    
    function S2AddForm(typeName){
		if (typeof typeName == "undefined") {
			typeName = "";
		}
		
        s2ClassNumber++;
        var stage2Form = $('#mu-stage2-form-wrapper').html();
        stage2Form = stage2Form.replace(/replace::s2ClassNumber/gi, s2ClassNumber);
        $(stage2Form).insertBefore('#mu-res-admin-stage2 .mu-stage2-add-class').show().find('h4 input').val(typeName);
        var col1Height = $('#mu-res-admin-stage2 .mu-twoCol-col1').find('div:last').position().top + $('#mu-res-admin-stage2 .mu-twoCol-col1').find('div:last').height();
        var col2Height = $('#mu-res-admin-stage2 .mu-twoCol-col2').find('div:last').position();
        if (col2Height != null) {
            col2Height = col2Height.top + $('#mu-res-admin-stage2 .mu-twoCol-col2').find('div:last').height();
        }
        else {
            col2Height = 0;
        }
        if (col1Height > col2Height) {
        	$('#mu-res-admin-stage2 .mu-stage2-add-class').appendTo('#mu-res-admin-stage2 .mu-twoCol-col2');
        } else {
			$('#mu-res-admin-stage2 .mu-stage2-add-class').appendTo('#mu-res-admin-stage2 .mu-twoCol-col1');
		}
        muResAdminStagesHeight();
    }
    
	function S2AddEntry(selection, entryName, entryPrice) {
		if (typeof entryName == "undefined") {
			entryName = "";
			entryPrice = "";
		}
		$(selection).removeClass('last');
        s2FocusEntry = $(selection).find('input').attr('entryid');
        var stage2entry_temp = $('#mu-stage2-form-entry-wrapper').html();
        stage2entry_temp = stage2entry_temp.replace(/replace::s2FocusEntry/gi, parseInt(s2FocusEntry) + 1);
        entryPointer = $(selection).parent().append(stage2entry_temp);
		entryPointer.find("dt input").val(entryName);
		entryPointer.find("dd input").val(entryPrice);
        muResAdminStagesHeight();
	}
	
    $('.mu-stage2-form .last').live('focus', function(){
        S2AddEntry(this);
    })
	
    // Stage 2 Add Form
    $('#mu-res-admin-stage2 .mu-stage2-add-class').live('click', function(){
        S2AddForm();
    });
    
    var stage2FormEntry = $('#mu-stage2-form-entry-wrapper').html();
    
    // ------------ Stage 3 ------------
    
   
    
    // Preload Form 1
    stage3formNumber++;
    $('#mu-stage3-form1-wrapper .mu-stage3-form').attr('formid', stage3formNumber);
    $('#mu-res-admin-stage3 .mu-oneCol-container').prepend($('#mu-stage3-form1-wrapper').html()).show();
    
    // Stage 3 Form add entry
    $('#mu-res-admin-stage3 .mu-stage3-form .last').live('focus', function(){
        $(this).removeClass('last');
        var entryid = $(this).find('input').attr('entryid');
        entryid++;
        switch (parseInt($(this).parents('.mu-stage3-form').attr('formtype'))) {
            case 1:
                $('#mu-stage3-form1-entry-wrapper').find('input').each(function(){
                    $(this).attr('entryid', entryid);
                });
                $('#mu-stage3-form1-entry-wrapper').find('span:first').html(entryid + '.');
                $(this).parent().append($('#mu-stage3-form1-entry-wrapper').html());
                break;
            case 2:
                $('#mu-stage3-form2-entry-wrapper').find('input').each(function(){
                    $(this).attr('entryid', entryid);
                });
                $('#mu-stage3-form2-entry-wrapper').find('span:first').html(entryid + '.');
                $(this).parent().append($('#mu-stage3-form2-entry-wrapper').html());
                break;
            case 3:
                var entryType = parseInt($(this).find('input').attr('entrytype'));
                $('#mu-stage3-form3-entry-wrapper').find('input').attr({
                    'entrytype': entryType,
                    'entryid': entryid
                });
                var entryChar = '';
                if (entryType == 1) {
                    entryChar = 'A';
                }
                else 
                    if (entryType == 2) {
                        entryChar = 'B';
                    }
                $('#mu-stage3-form3-entry-wrapper').find('span:first').html(entryChar + entryid + '.');
                $(this).parent().append($('#mu-stage3-form3-entry-wrapper').html());
                break;
        }
        muResAdminStagesHeight();
    });
    
    // Stage 3 add Form function
    $('.mu-stage3-add-class').live('click', function(){
        stage3formNumber++;
        $('#mu-stage3-form1-wrapper .mu-stage3-form').attr('formid', stage3formNumber);
        $($('#mu-stage3-form1-wrapper').html()).insertBefore(this);
        muResAdminStagesHeight();
        s3FocusFormIndex = stage3formNumber;
        var MTB_top = $('#mu-res-admin-stage3 .mu-stage3-form[formid=' + s3FocusFormIndex + ']').position().top;
        $('#mu-res-admin-stage3 .mu-stage3-managecol').animate({
            'top': MTB_top
        });
    });
    
    // Stage 3 Management Tools function
    //
    $('#mu-res-admin-stage3 .mu-stage3-form  input').live('click', function(){
        var s3FocusFormIndex_new = parseInt($(this).parents('.mu-stage3-form').attr('formid'));
        if (s3FocusFormIndex_new != s3FocusFormIndex) {
            s3FocusFormIndex = s3FocusFormIndex_new;
            var MTB_top = $('#mu-res-admin-stage3 .mu-stage3-form[formid=' + s3FocusFormIndex + ']').position().top;
            $('#mu-res-admin-stage3 .mu-stage3-managecol').animate({
                'top': MTB_top
            });
        }
        // console.log(s3FocusFormIndex);
    })
    
    // Change form
    $('#mu-res-admin-stage3 .mu-stage3-managetools').live('click', function(){
        var S3mtid = parseInt($(this).attr('mtid'));
        switch (S3mtid) {
            case 1:
            case 2:
            case 3:
                // console.log(s3FocusFormIndex);
                $('#mu-stage3-form' + S3mtid + '-wrapper .mu-stage3-form').attr('formid', s3FocusFormIndex);
                $('#mu-res-admin-stage3 .mu-stage3-form[formid=' + s3FocusFormIndex + ']').replaceWith($('#mu-stage3-form' + S3mtid + '-wrapper').html());
                $('.mu-stage3-managetools').removeClass('active');
                $(this).addClass('active');
                break;
            case 4:
            case 5:
                break;
            case 6:
                var item_to_be_delete = $('#mu-res-admin-stage3 .mu-stage3-form[formid=' + s3FocusFormIndex + ']');
                s3FocusFormIndex = parseInt($(item_to_be_delete).prev().attr('formid'));
                $(item_to_be_delete).remove();
                if ($('#mu-res-admin-stage3 .mu-stage3-form').length != 0) {
                    var MTB_top = $('#mu-res-admin-stage3 .mu-stage3-form[formid=' + s3FocusFormIndex + ']').position().top;
                    $('#mu-res-admin-stage3 .mu-stage3-managecol').animate({
                        'top': MTB_top
                    });
                }
                break;
        }
    });
    
    // Go to stage directly
    $('.mu-admin-submenu li').live('click', function(){
        $('#mu-res-admin-stage-container').scrollable().seekTo(parseInt($(this).attr('targetstage')) - 1);
        muResAdminStagesHeight();
    })


	// ---------------------------- Image upload form ----------------------------  //

	$( "#progressbar" ).progressbar({
		value: 0
	});
	
	function resImgUpload(uploadBlk) {
		$(uploadBlk + ' .upload').fileUploadUI({
			uploadTable: $(uploadBlk + ' .upload_files'),
			downloadTable: $(uploadBlk + ' .download_files'),
			buildUploadRow: function (files, index) {/* ... */},
			buildDownloadRow: function (file) {/* ... */},
			beforeSend: function (event, files, index, xhr, handler, callBack) {
				var regexp = /\.(png)|(jpg)|(gif)$/i;
				if (!regexp.test(files[index].name)) {
					$('<p>ONLY IMAGES ALLOWED!</p>').hide().appendTo(uploadBlk + ' #uploadResult').fadeIn(1000);
					return;
				}
				if (files[index].size > 3145728) {
					$('<p>FILE TOO BIG!</p>').hide().appendTo(uploadBlk + ' #uploadResult').fadeIn(1000);
					return;
				}
				callBack();
			},
			/* to be added
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
			*/
			onComplete: function (event, files, index, xhr, handler) {
				$(uploadBlk + ' .upload').hide();
				$(uploadBlk + ' .download_files').hide();
				$(uploadBlk + ' .upload_files').hide();
				var doneOutput = '<tr id="" style=""><td class="file_preview"></td><td class="filename"></td><td class="filesize"></td><td class="file_delete"><button title="Delete" class="ui-state-default ui-corner-all ui-state-hover"><span class="ui-icon ui-icon-trash">Delete</span></button></td></tr>';
				//console.log(doneOutput);
				$(uploadBlk + ' .download_files').html(doneOutput).fadeIn();
				$('<img src="'+handler.response.imgPath+'" />').hide().appendTo(uploadBlk + ' .download_files .file_preview').fadeIn();
				$('<span>' + handler.response.imgName + '</span>').hide().appendTo(uploadBlk + ' .download_files .filename').fadeIn();
				$('<span>' + Math.round(handler.response.imgSize * 100 / 1024) / 100 + 'KB</span>').hide().appendTo(uploadBlk + ' .download_files .filesize').fadeIn();
				$(uploadBlk + ' .file_delete').click(function(){
					$(uploadBlk + ' .download_files').hide();
					$(uploadBlk + ' .upload').show();
				});
			}
		});
	}
	resImgUpload('#s1-resTM-upload');
	resImgUpload('#s1-resPhoto-upload');


});





