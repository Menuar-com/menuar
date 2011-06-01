// Common variable
var ssCode = '3H98Ci11i2tE';
var resID = 1;

// Adjust the height of container
function muResAdminStagesHeight(noAnimation){
	var stageIndex = $('#mu-res-admin-stage-container').data('scrollable').getIndex() % 4 + 1;
	$('#mu-res-admin-stage-container').css({
		height: $('#mu-res-admin-stage' + stageIndex).height() + 10 + 'px'
	});
}

$(document).ready(function(){
    // Variable Initialization
		// Scrollable variable
	
	var anchorStr = self.document.location.hash.substring(1);
	var currentStage = 1;
	if (anchorStr) {
		currentStage = parseInt(anchorStr.replace("stage", ""));
	}
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
	var isDataChange = []; 

	
	// Initialization
    $('#mu-res-admin-stage-container').scrollable({
        keyboard: false
    });
	$('#mu-res-admin-stage-container').data('scrollable').seekTo(currentStage-1);
    muResAdminStagesHeight();
    
	$('#mu-resopenTime').timepicker({});
	$('#mu-rescloseTime').timepicker({});
    
	// Received data
	function s1GetData() {
		if (DEBUG_MODE) {
			console.log('********** Stage1 Get Data **********');
		}
		
		$.post('online/restaurantAdmin/resGetData/stage1.html', {'ssCode' : '3H98Ci11i2tE'}, function(data) {
			if (data) {
				if (data == "NoData") {
					resImgUpload('#s1-resPhoto-upload');
					resImgUpload('#s1-resTM-upload');
					return false;
				}
				data = $.parseJSON(data);
				$('input[name="s1-resName"]').val(data.resName);
				$('input[name="s1-openTime"]').val(data.resOpenTime);
				$('input[name="s1-closeTime"]').val(data.resCloseTime);
				$('input[name="s1-resDescription"]').val(data.resDescript);
				$('input[name="s1-lowestPrice"]').val(data.lowestPrice);
				$('input[name="s1-resAddress"]').val(data.resAddress);
				$('input[name="s1-resTel"]').val(data.resTel);
				$('input[name="s1-resNotics"]').val(data.resNotics);
				$('input[name="s1-resPhoto"]').val(data.resPhoto);
				$('input[name="s1-resTM"]').val(data.resTM);
				resImgUpload('#s1-resTM-upload');
				resImgUpload('#s1-resPhoto-upload');
				
				if (data.resPhoto){
					imageUploadComplete(data.resPhoto, data.resPhoto.replace('upload/img_resPhoto/', ''), 0, '#s1-resPhoto-upload');
				}
				if (data.resTM){
					imageUploadComplete(data.resTM, data.resTM.replace('upload/img_reslogo/', ''), 0, '#s1-resTM-upload');
				}
			}
		});
	}
	
	function s2GetData() {
		$('#mu-res-admin-stage2 .mu-stage2-form').remove();
		s2ClassNumber = 0;
		$.post('online/restaurantAdmin/resGetData/stage2.html', {'ssCode' : '3H98Ci11i2tE'}, function(data) {
			if (data) {
				if (data == "NoData") {
					S2AddForm();
					return false;
				}
				jsonData = $.parseJSON(data);
				var S2entryCount = 0;
				$.each(jsonData.type, function(key1, value1) {
					
					S2entryCount = 0;
					S2AddForm(value1.s2typeName);		
					
					$.each(jsonData.entry, function(key2, value2){
						//console.log(value1.s2typeName);
						if (value2.s2entryType == value1.s2typeID) {
							s2TypeBlockPointer = $('#mu-res-admin-stage2 .mu-stage2-form.mu-form-selecting');
							
							//console.log(s2TypeBlockPointer);
							if (S2entryCount < 3) {
								s2TypeBlockPointer.find("dt.mu-twoCol-entry input[entryid="+(S2entryCount+1)+"]").val(value2.s2entryName);
								s2TypeBlockPointer.find("dd.mu-twoCol-entry input[entryid="+(S2entryCount+1)+"]").val(value2.s2entryPrice);
							} else {
								selection = s2TypeBlockPointer.find(".last");
								S2AddEntry(selection, value2.s2entryName, value2.s2entryPrice);
							}
							S2entryCount++;
						}
					});
					
					$(s2TypeBlockPointer).attr('col', value1.blkCol).attr('pos', value1.blkPosition).removeClass('mu-form-selecting');
				});
				muResAdminStagesHeight();
			}
		});
	}
	
	function s3GetData() {
		
		$('#mu-res-admin-stage3 .mu-stage3-form').remove();
		stage3formNumber = 0;
		stage3formIndex = 0;
		s3FocusFormIndex = 1;
		$.post('online/restaurantAdmin/resGetData/stage3.html', {'ssCode' : '3H98Ci11i2tE'}, function(data) {
			if (data) {
				if (data == "NoData") {
					S3AddForm();
					return false;
				}
				jsonData = $.parseJSON(data);
				var S3entryCount = 0;
				$.each(jsonData.type, function(key1, value1) {
					S3entryCount = 0;
					S3entryCountAB = [];
					S3entryCountAB["A"] = 0;
					S3entryCountAB["B"] = 0;
					
					S3AddForm(value1.s3FormName, value1.s3FormClass);
					
					//s3FormPointer = $('#mu-res-admin-stage3 .mu-stage3-form[formid="' + (parseInt(value1.s3FormType) + 1) + '"]');
					s3FormPointer = $('#mu-res-admin-stage3 .mu-form-selecting');
					
					$.each(jsonData.entry, function(key2, value2){
						if (value2.s3entryType == value1.s3FormID) {
							switch(parseInt(value1.s3FormClass)) {
								
								case 1:
									if (S3entryCount >= 3) {
										S3AddEntry(s3FormPointer, 1);
									}
									$(s3FormPointer).find("dt input[entryid="+(S3entryCount+1)+"]").val(value2.s3entryName);
									$(s3FormPointer).find("dd input[entryid="+(S3entryCount+1)+"]").val(value2.s3entryPrice);
									
									S3entryCount++;
									break;
								case 2:
									if (S3entryCount >= 3) {
										S3AddEntry(s3FormPointer, 2);
									}
									$(s3FormPointer).find("dt input[entryid="+(S3entryCount+1)+"]").val(value2.s3entryName);
									
									S3entryCount++;
									break;
								case 3:
									if (S3entryCountAB[value2.s3entryAB] >= 3){
										S3AddEntry(s3FormPointer, 3, value2.s3entryAB);
									}
									$(s3FormPointer).find(".mu-stage3-form3-class[formab='"+value2.s3entryAB+"']").find("input[entryid="+(S3entryCountAB[value2.s3entryAB]+1)+"]").val(value2.s3entryName);
									S3entryCountAB[value2.s3entryAB]++;
									break;
							}
						}
					});
					$(s3FormPointer).attr('col', value1.blkCol).attr('pos', value1.blkPosition).removeClass('mu-form-selecting');
					
				});
				muResAdminStagesHeight();
			}
		});
	}
	
	function s4GetData(){
		if (DEBUG_MODE) console.log('********** Stage4 Get Data **********');
		
		$.post('online/restaurantAdmin/resGetData/stage4.html', {'ssCode' : '3H98Ci11i2tE'}, function(data) {
			if (data) {
				if (data == "NoData") {
					return false;
				}
				
				$('#mu-res-admin-stage4 .mu-twoCol-container .mu-sortable.ui-sortable').html('');
				
				jsonData = $.parseJSON(data);
				var S3entryCount = 0;
				
				$.each(jsonData.type, function(key1, value1) {
					S3entryCount = 0;
					S3entryCountAB = [];
					S3entryCountAB["A"] = 0;
					S3entryCountAB["B"] = 0;
					
					S4AddForm(value1.blockName, value1.blockCol);
					
					s4BlkPointer = $('#mu-res-admin-stage4 .mu-form-selecting');
					
					$(s4BlkPointer).attr('type', (parseInt(value1.blockClass)));
					
					$.each(jsonData.entry, function(key2, value2){
						//console.log(value2.entryType, value1.blockID)
						if (value2.entryType == value1.blockID) {
							S3entryCount++;
							switch(parseInt(value1.blockClass)) {
								case 0:
								case 1:
									$(s4BlkPointer).find('.mu-entry-wrapper').append($('#mu-hidden-template .mu-stage4-type1-entry').html());
									$(s4BlkPointer).find('.mu-entry-selecting .mu-entry-number').html(S3entryCount);
									$(s4BlkPointer).find('.mu-entry-selecting .mu-entry-name').html(value2.entryName);
									$(s4BlkPointer).find('.mu-entry-selecting .mu-entry-price').html(value2.entryPrice);
									$(s4BlkPointer).find('.mu-entry-selecting').attr('entryid', S3entryCount);
									break;
								case 2:
									$(s4BlkPointer).find('.mu-entry-wrapper').append($('#mu-hidden-template .mu-stage4-type2-entry').html());
									$(s4BlkPointer).find('.mu-entry-selecting .mu-entry-number').html(S3entryCount);
									$(s4BlkPointer).find('.mu-entry-selecting .mu-entry-name').html(value2.entryName);
									$(s4BlkPointer).find('.mu-entry-selecting').attr('entryid', S3entryCount);
									break;
								case 3:
									S3entryCountAB[value2.entryAB]++;
									if ($(s4BlkPointer).find('.mu-type3-entry-row:last').attr("entryid") < S3entryCountAB[value2.entryAB] || (S3entryCountAB['A'] + S3entryCountAB['B'] == 1)) {
										$(s4BlkPointer).find('.mu-entry-wrapper').append($('#mu-hidden-template .mu-stage4-type3-entry').html());
										$(s4BlkPointer).find('.mu-entry-selecting').attr('entryid', S3entryCountAB[value2.entryAB]);
									}
									$(s4BlkPointer).find('.mu-type3AB-selecting.mu-entry-'+value2.entryAB).html(value2.entryName).removeClass('mu-type3AB-selecting');
									break;
							}
						}
						$(s4BlkPointer).find('.mu-entry-selecting').removeClass('mu-entry-selecting');
					});
					$(s4BlkPointer).removeClass('mu-form-selecting').attr('formid', value1.blockID);
				});
				$(".mu-sortable").sortable({
					connectWith: '.mu-sortable',
					update: function() {
						muResAdminStagesHeight();
					}
				});
			}
			muResAdminStagesHeight();
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
					'resPhoto'		: $('input[name="s1-resPhoto"]').val()
				};
                $.post('online/restaurantAdmin/resAdminDataUpdate/stage1.html', {'data' : JSON.stringify(formData.s1Data), 'ssCode' : '3H98Ci11i2tE'}, function(data) {});
				s2GetData();
                break;
            case 2:
				formData.s2Data = [];
				
				var numberOfForm = $('#mu-res-admin-stage2 .mu-stage2-form').length;
				if ((DEBUG_MODE) == true) console.log('Stage2 Number of Blocks = ' + numberOfForm);
				
				$.each($('#mu-res-admin-stage2 .mu-stage2-form'), function(key1){
					formData.s2Data[key1] = {};
					formData.s2Data[key1].entry = [];
					formData.s2Data[key1].className = $(this).find('h4 input').val();
					formData.s2Data[key1].blkCol = $(this).attr('col');
					if (!formData.s2Data[key1].blkCol) formData.s2Data[key1].blkCol = 1;
					formData.s2Data[key1].blkPosition = $(this).attr('pos');
					if (!formData.s2Data[key1].blkPosition) formData.s2Data[key1].blkPosition = 0;
					
					var numberOfEntry = $('#mu-res-admin-stage2 .mu-stage2-form[formid=' + (key1 + 1) + '] input:last').attr('entryid');
					
					$.each($(this).find('dt.mu-twoCol-entry'), function(){
						console.log($(this).find('input').val(), $(this).next().find('input').val());
					});
					/*
					for (var j = 0; j < numberOfEntry; j++) {
						formData.s2Data[key1].entry[j] = {};
						formData.s2Data[key1].entry[j].entryName = $('#mu-res-admin-stage2 .mu-stage2-form[formid=' + (i + 1) + '] input[entryid=' + (j + 1) + ']:first').val();
						formData.s2Data[key1].entry[j].entryPrice = $('#mu-res-admin-stage2 .mu-stage2-form[formid=' + (i + 1) + '] input[entryid=' + (j + 1) + ']:last').val();
					}
					*/
				});
					
				
				//$.post('online/restaurantAdmin/resAdminDataUpdate/stage2.html', {'data' : JSON.stringify(formData.s2Data), 'ssCode' : '3H98Ci11i2tE'}, function(data) {});
				s3GetData();
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
						
						formData.s3Data[formkey].blkCol = $(this).attr('col');
						if (!formData.s3Data[formkey].blkCol){
							formData.s3Data[formkey].blkCol = 1;
						}
						formData.s3Data[formkey].blkPosition = $(this).attr('pos');
						if (!formData.s3Data[formkey].blkPosition){
							formData.s3Data[formkey].blkPosition = 0;
						}
						
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
								break;
                        }
                    }
					//console.log(formData);
                })
				$.post('online/restaurantAdmin/resAdminDataUpdate/stage3.html', {'data' : JSON.stringify(formData.s3Data), 'ssCode' : '3H98Ci11i2tE'}, function(data) {});
				s4GetData();
                break;
			case 4:
				var postData = [];
				var postDataCounter = 0;
				
				function s4postDataConstructor(formid, formType, col, position) {
					postData[postDataCounter] = {};
					postData[postDataCounter].formid = formid;
					postData[postDataCounter].formType = formType;
					postData[postDataCounter].col = col;
					postData[postDataCounter].position = position;
					postDataCounter++;
				}
				
				$('#mu-res-admin-stage4 #mu-sortable-col1 .mu-class-block').each(function(key){
					s4postDataConstructor($(this).attr('formid'), $(this).attr('type'), 1, key);
				})
				$('#mu-res-admin-stage4 #mu-sortable-col2 .mu-class-block').each(function(key){
					s4postDataConstructor($(this).attr('formid'), $(this).attr('type'), 2, key);
				})
				//console.log(postData);
				$.post('online/restaurantAdmin/resAdminDataUpdate/stage4.html', {'data' : JSON.stringify(postData), 'ssCode' : '3H98Ci11i2tE'});
				break;
        }
        
		if (stageIndex != 4) {
			stageIndex++;
			//$('.num' + stageIndex).addClass('finished');
			$('#mu-res-admin-stage-container').data('scrollable').next(500);
			muResAdminStagesHeight();
		}
        
    });
    // ------------ Stage 2 ------------    
    function S2AddForm(typeName, formCol){
		if (typeof typeName == "undefined") {
			typeName = "";
		}
		
		if (s2ClassNumber == 0) {
			$('#mu-res-admin-stage2 .mu-stage2-add-class').appendTo('#mu-res-admin-stage2 .mu-twoCol-col1');
		} else if (formCol == 1) {
			$('#mu-res-admin-stage2 .mu-stage2-add-class').appendTo('#mu-res-admin-stage2 .mu-twoCol-col1');
		} else if (formCol == 2) {
			$('#mu-res-admin-stage2 .mu-stage2-add-class').appendTo('#mu-res-admin-stage2 .mu-twoCol-col2');
		}
		
        s2ClassNumber++;
        var stage2Form = $('#mu-stage2-form-wrapper').html();
        stage2Form = stage2Form.replace(/replace::s2ClassNumber/gi, s2ClassNumber);
        
		
		
		$(stage2Form).insertBefore('#mu-res-admin-stage2 .mu-stage2-add-class').show().find('h4 input').val(typeName);
		
		
		
        var col1Height = $('#mu-res-admin-stage2 .mu-twoCol-col1').find('div:last').position()
		if (col1Height != null) {
            col1Height = col1Height.top + $('#mu-res-admin-stage2 .mu-twoCol-col1').find('div:last').height();
        }
        else {
            col1Height = 0;
        }
		
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
		
        if (typeName == ""){
			muResAdminStagesHeight();
		}
    }
    
	function S2AddEntry(selection, entryName, entryPrice) {
		
		if (typeof entryName == "undefined") {
			entryName = "";
			entryPrice = "";
		}
		
		$(selection).removeClass('last');
        
		s2FocusEntry = parseInt($(selection).find('input').attr('entryid')) + 1;
        
		var stage2entry_temp = $('#mu-stage2-form-entry-wrapper').html();
        stage2entry_temp = stage2entry_temp.replace(/replace::s2FocusEntry/gi, s2FocusEntry);
		
        entryPointer = $(selection).parent().append(stage2entry_temp);
		entryPointer.find("dt input[entryid="+s2FocusEntry+"]").val(entryName);
		entryPointer.find("dd input[entryid="+s2FocusEntry+"]").val(entryPrice);
		if (entryName == "") {
        	muResAdminStagesHeight();
		}
		
	}
	
    $('.mu-stage2-form .last').live('focus', function(){
        S2AddEntry(this);
    })
	
    // Stage 2 Add Form
    $('#mu-res-admin-stage2 .mu-stage2-add-class').live('click', function(){
        S2AddForm();
		$('#mu-res-admin-stage2 .mu-form-selecting').removeClass('mu-form-selecting');
    });
    
    var stage2FormEntry = $('#mu-stage2-form-entry-wrapper').html();
    
	
	$('#mu-res-admin-stage2 .mu-deleteForm').live('click', function(){
		$(this).parents('.mu-stage2-form').fadeOut(function(){
			$(this).remove();
		});
	})
	
    // ------------ Stage 3 ------------
	
	function S3AddForm(typeName, formClass){
		if (!formClass){
			formClass = 1;
		}
		
		insertPointer = $.find('#mu-res-admin-stage3 .mu-stage3-add-class');
		stage3formNumber++;
		
		$('#mu-stage3-form'+formClass+'-wrapper .mu-stage3-form').attr('formid', stage3formNumber);
		
		$($('#mu-stage3-form'+formClass+'-wrapper').html()).insertBefore(insertPointer);		
		
		s3FocusFormIndex = stage3formNumber;
		
		s3FocusFormPointer = $('#mu-res-admin-stage3 .mu-stage3-form[formid=' + s3FocusFormIndex + ']');
		
		// Assign the name of the form
		
		if (typeName) {
			$(s3FocusFormPointer).find("input[name=mu-stage3-entry]").val(typeName);
		}
		
		// Move S3 management tool bar
		var MTB_top = s3FocusFormPointer.position().top;
		$('#mu-res-admin-stage3 .mu-stage3-managecol').animate({
			'top': MTB_top
		});
		
	}
    
    // Stage 3 Form add entry
	function S3AddEntry(formPointer, formClass, formAB) {
		if (formAB){
			insertPointer = $(formPointer).find(".mu-stage3-form3-class[formAB="+formAB+"]").find(".last")
		} else {
			insertPointer = $(formPointer).find(".last")
		}
		
		$(insertPointer).removeClass('last');
        
		var entryid = $(insertPointer).find("input").attr('entryid');
        entryid++;
		
        switch (formClass) {
            case 1:
                $('#mu-stage3-form1-entry-wrapper').find('input').each(function(){
                    $(this).attr('entryid', entryid);
                });
                $('#mu-stage3-form1-entry-wrapper').find('span:first').html(entryid + '.');
                $(insertPointer).parent().append($('#mu-stage3-form1-entry-wrapper').html());
                break;
            case 2:
                $('#mu-stage3-form2-entry-wrapper').find('input').each(function(){
                    $(this).attr('entryid', entryid);
                });
                $('#mu-stage3-form2-entry-wrapper').find('span:first').html(entryid + '.');
                $(insertPointer).parent().append($('#mu-stage3-form2-entry-wrapper').html());
                break;
			case 3:
				var entryType = parseInt($(insertPointer).find('input').attr('entrytype'));
				
				$('#mu-stage3-form3-entry-wrapper').find('input').attr({
					'entrytype': entryType,
					'entryid': entryid
				});
				
				$('#mu-stage3-form3-entry-wrapper').find('span:first').html(formAB + entryid + '.');
				
				$(insertPointer).append($('#mu-stage3-form3-entry-wrapper').html());
				
				break;
        }
        //muResAdminStagesHeight();
	}
	
    $('#mu-res-admin-stage3 .mu-stage3-form .last').live('focus', function(){
		var s3clickFormType = parseInt($(this).parents('.mu-stage3-form').attr('formtype'));
		if (s3clickFormType == 3) {
			formAB = $(this).parents(".mu-stage3-form3-class").attr('formAB');
		} else {
			formAB = null;
		}
        S3AddEntry($(this).parents('#mu-res-admin-stage3 .mu-stage3-form'), s3clickFormType, formAB);
		muResAdminStagesHeight();
    });
    
    // Stage 3 add Form function
    $('.mu-stage3-add-class').live('click', function(){
        S3AddForm();
		muResAdminStagesHeight();
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
    })
    
    // Change form
    $('#mu-res-admin-stage3 .mu-stage3-managetools').live('click', function(){
        var S3mtid = parseInt($(this).attr('mtid'));
        switch (S3mtid) {
            case 1:
            case 2:
            case 3:
                var formName = $('#mu-res-admin-stage3 .mu-stage3-form[formid=' + s3FocusFormIndex + ']').find('h4 input').val();
				$('#mu-stage3-form' + S3mtid + '-wrapper .mu-stage3-form').attr('formid', s3FocusFormIndex);
                $('#mu-res-admin-stage3 .mu-stage3-form[formid=' + s3FocusFormIndex + ']').replaceWith($('#mu-stage3-form' + S3mtid + '-wrapper').html())
				$('#mu-res-admin-stage3 .mu-form-selecting').find('h4 input').val(formName);
				$('#mu-res-admin-stage3 .mu-form-selecting').removeClass('mu-form-selecting');
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
    
	
	// ------------ Stage 4 ------------
	// Stage 4 add form
	
	
	function S4AddForm(formName, blkRow) {
		//console.log(blkRow);
		if (blkRow == 0){
			blkRow = 1;
		}
		$($('#mu-hidden-template .mu-stage4-general-block').html()).appendTo('#mu-res-admin-stage4 .mu-twoCol-col'+blkRow);
		$('#mu-res-admin-stage4 .mu-form-selecting .mu-class-name span').html(formName);
	}
	
    // Go to stage directly
    $('.mu-admin-submenu li').live('click', function(){
		var targetStage = parseInt($(this).attr('targetstage'));
        $('#mu-res-admin-stage-container').scrollable().seekTo(targetStage - 1);
		
		switch (targetStage){
			case 1:
				s1GetData();
				break;
			case 2:
				s2GetData();
				break;
			case 3:
				s3GetData();
				break;
			case 4:
				s4GetData();
				break;
		}
		
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
				imageUploadComplete(handler.response.imgPath, handler.response.imgName, Math.round(handler.response.imgSize * 100 / 1024) / 100, uploadBlk);
			}
		});
	}
	
	function imageUploadComplete(imgPath, imgName, imgSize, uploadBlk) {
		$(uploadBlk + ' .upload').hide();
		$(uploadBlk + ' .download_files').hide();
		$(uploadBlk + ' .upload_files').hide();
		var doneOutput = '<tr id="" style=""><td class="file_preview"></td><td class="filename"></td><td class="filesize"></td><td class="file_delete"><button title="Delete" class="ui-state-default ui-corner-all ui-state-hover"><span class="ui-icon ui-icon-trash">Delete</span></button></td></tr>';
		//console.log(doneOutput);
		$(uploadBlk + ' .download_files').html(doneOutput).fadeIn();
		$('<img src="'+ imgPath +'" />').hide().appendTo(uploadBlk + ' .download_files .file_preview').fadeIn();
		$('<span>' + imgName + '</span>').hide().appendTo(uploadBlk + ' .download_files .filename').fadeIn();
		$('<span>' + imgSize + 'KB</span>').hide().appendTo(uploadBlk + ' .download_files .filesize').fadeIn();
		$(uploadBlk + ' .file_delete').click(function(){
			$(uploadBlk + ' .download_files').hide();
			$(uploadBlk + ' .upload').show();
		});
		$('#mu-res-admin-stage1 input#'+uploadBlk.replace('-upload', '')).val(imgPath);
	}


});





