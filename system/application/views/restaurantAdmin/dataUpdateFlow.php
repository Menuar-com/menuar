<div id="mu-res-admin-submenu" class="mu-res-admin">
	<ul class="mu-admin-submenu">
		<li targetstage="1"><span class="mu-numberSet01 num1 finished"></span><span class="mu-admin-submenu-title">餐廳資料</span></li>
		<li targetstage="2"><span class="mu-numberSet01 num2"></span><span class="mu-admin-submenu-title">飲品／湯</span></li>
		<li targetstage="3"><span class="mu-numberSet01 num3"></span><span class="mu-admin-submenu-title">食物</span></li>
		<li targetstage="4"><span class="mu-numberSet01 num4"></span><span class="mu-admin-submenu-title">排序</span></li>
		<div class="clearer"></div>
	</ul>
</div>
<div style="height: 20px"></div>
<div id="mu-res-admin-stage-container">
	<div id="mu-res-admin-stage-items">
		<div id="mu-res-admin-stage1" class="mu-res-admin-stages">
			<dl>
				<dt>餐廳名稱：</dt>
				<dd>
					<input name="s1-resName" id="mu-resName" type="text" />
				</dd>
				<dt>營業時間：</dt>
				<dd>
					<dl>
						<dt>開店</dt>
						<dd><input name="s1-openTime" id="mu-resopenTime" type="text" /></dd>
						<dt>關門</dt>
						<dd><input name="s1-closeTime" id="mu-rescloseTime" type="text" /></dd>
					</dl>
					
				</dd>
				<dt>餐廳介紹：</dt>
				<dd>
					<input name="s1-resDescription" id="mu-resDesc" type="text" />
				</dd>
				<dt>起送價：</dt>
				<dd>
					<input name="s1-lowestPrice" id="mu-resLowerBound" type="text" />
				</dd>
				<dt>地址：</dt>
				<dd>
					<input name="s1-resAddress" id="mu-resAddress" type="text" />
				</dd>
				<dt>電話：</dt>
				<dd>
					<input name="s1-resTel" id="mu-resTelNo" type="text" />
				</dd>
				<dt>公告：</dt>
				<dd>
					<input name="s1-resNotics" id="mu-resNotice" type="text" />
				</dd>
				<div class="clearer"></div>
			</dl>
			<dl>
				<dt>商標：</dt>
				<dd>
					<div id="s1-resTM-upload" class="mu-upload-form">
						<form class="upload" action="online/restaurantAdmin/imageUpload/reslogo.html" method="POST" enctype="multipart/form-data">
						<input type="file" name="file" multiple>
						<button>Upload</button>
							<div class="uploadText">
							Upload files
							</div>
						</form>
						<div id="uploadResult"></div>
						<div class="upload_files" style=" display: none;">
							<div class="uploadText">
							Uploading...
							</div>
							<div id="progressCounter"></div>
							<div id="progressbar"></div>
						</div>
						<table class="download_files">
						</table>
					</div>
					<input name="s1-resTM" id="s1-resTM" value="" type="hidden" /></dd>
				<dt>餐廳外貌：</dt>
				<dd>
					<div id="s1-resPhoto-upload" class="mu-upload-form">
						<form class="upload" action="online/restaurantAdmin/imageUpload/resPhoto.html" method="POST" enctype="multipart/form-data">
						<input type="file" name="file" multiple>
						<button>Upload</button>
							<div class="uploadText">
							Upload files
							</div>
						</form>
						<div id="uploadResult"></div>
						<div class="upload_files" style=" display: none;">
							<div class="uploadText">
							Uploading...
							</div>
							<div id="progressCounter"></div>
							<div id="progressbar"></div>
						</div>
						<table class="download_files">
						</table>
					</div>
					<input name="s1-resPhoto" id="s1-resPhoto" value="" type="hidden" />
				</dd>
				<div class="clearer"></div>
			</dl>
			<div class="clearer"></div>
		</div>
		<div id="mu-res-admin-stage2" class="mu-res-admin-stages">
			<div class="mu-twoCol-container"> 
				<div class="mu-twoCol-col1"><div class="mu-twoCol mu-stage2-add-class"><img src="images/icon_set1/document_add.png" alt="新增類別" /><span>新增類別</span></div></div>
				<div class="mu-twoCol-col2"></div>
			</div>
			<div class="mu-rightCol" style="height: 250px;">
				<div id="S2Datatest"></div>
			</div>
			<div class="clearer"></div>
		</div>
		<div id="mu-res-admin-stage3" class="mu-res-admin-stages">
			<div id="mu-res-admin-stage3-form-container" class="mu-oneCol-container"> 
				<!-- --- Stage3 Form will be added here --- -->
				<div class="mu-oneCol mu-stage3-add-class"><img src="images/icon_set1/document_add.png" alt="新增類別" /><span>新增類別</span></div>
			</div>
			<div class="mu-stage3-managecol">
				<h2><img src="images/restaurantAdmin/mu_stage3_tools_icon.png" /><span>餐單管理工具</span>
					<div class="clearer"></div>
				</h2>
				<div class="mu-stage3-managetools-wrapper">
					<div id="mu-stage3-tool1" class="mu-stage3-managetools active" mtid="1"><img class="mu-stage3-tool1" src="images/restaurantAdmin/mu_stage3_tools.png" /></div>
					<div id="mu-stage3-tool2" class="mu-stage3-managetools" mtid="2"><img class="mu-stage3-tool2" src="images/restaurantAdmin/mu_stage3_tools.png" /></div>
					<div id="mu-stage3-tool3" class="mu-stage3-managetools" mtid="3"><img class="mu-stage3-tool3" src="images/restaurantAdmin/mu_stage3_tools.png" /></div>
					<div id="mu-stage3-tool4" class="mu-stage3-managetools" mtid="4"><img class="mu-stage3-tool4" src="images/restaurantAdmin/mu_stage3_tools.png" /></div>
					<div id="mu-stage3-tool5" class="mu-stage3-managetools" mtid="5"><img class="mu-stage3-tool5" src="images/restaurantAdmin/mu_stage3_tools.png" /></div>
					<div id="mu-stage3-tool6" class="mu-stage3-managetools" mtid="6"><img class="mu-stage3-tool6" src="images/restaurantAdmin/mu_stage3_tools.png" /></div>
					<div class="clearer"></div>
				</div>
				<div class="mu-stage3-managetools-block">
					<h3>彈出式選單 (Popup-menu)：</h3>
				</div>
				<div class="mu-stage3-managetools-block">
					<h3>其他選項：</h3>
				</div>
			</div>
		</div>
		<div id="mu-res-admin-stage4" class="mu-res-admin-stages">
			<div class="mu-twoCol-container"> 
				<div id="mu-sortable-col1" class="mu-twoCol-col1 mu-sortable"></div>
				<div id="mu-sortable-col2" class="mu-twoCol-col2 mu-sortable"></div>
			</div>
			<div class="mu-rightCol" style="height: 250px;">
				<div id="S2Datatest"></div>
			</div>
			<div class="clearer"></div>
		</div>
		<div class="clearer"></div>
	</div>
</div>
<div id="mu-stage-submit" class="mu-submit-btn-wrapper">
	<div class="mu-btn-l mu-btn-orange"></div>
	<div class="mu-btn-m mu-btn-orange">下一步</div>
	<div class="mu-btn-r mu-btn-orange"></div>
	<div class="clearer"></div>
</div>
<div class="clearer"></div>
<!-- Hidden div for the use of jQuery -->
<div id="mu-hidden-template" style="display: none;"> 
	<!-- --------------- Stage 2 --------------- -->
	<div id="mu-stage2-form-wrapper">
		<div class="mu-twoCol mu-stage2-form mu-form-selecting" formid="replace::s2ClassNumber" style="display: none;">
			<h4>
				<label for="mu-stage2-entry">請在此輸入類別名稱（如熱飲...）：</label>
				<input type="text" />
			</h4>
			<dl>
				<dt class="mu-twoCol-dl-header">項目名稱：</dt>
				<dd class="mu-twoCol-dl-header">價錢：</dd>
				<dt class="mu-twoCol-entry">
					<input entryid="1" type="text" value="" />
				</dt>
				<dd class="mu-twoCol-entry">
					<input entryid="1" type="text" value="" />
				</dd>
				<div class="clearer"></div>
				<dt class="mu-twoCol-entry">
					<input entryid="2" type="text" value="" />
				</dt>
				<dd class="mu-twoCol-entry">
					<input entryid="2" type="text" value="" />
				</dd>
				<div class="clearer"></div>
				<dt class="mu-twoCol-entry">
					<input entryid="3" type="text" value="" />
				</dt>
				<dd class="mu-twoCol-entry last">
					<input entryid="3" type="text" value="" />
				</dd>
				<div class="clearer"></div>
			</dl>
			<div class="mu-deleteForm"></div>
		</div>
	</div>
	<div id="mu-stage2-form-entry-wrapper">
		<dt class="mu-twoCol-entry">
			<input entryid="replace::s2FocusEntry" type="text" value="" />
		</dt>
		<dd class="mu-twoCol-entry last">
			<input entryid="replace::s2FocusEntry" type="text" value="" />
		</dd>
		<div class="clearer"></div>
	</div>
	<!-- --------------- Stage 3 --------------- -->
	<div id="mu-stage3-form1-wrapper">
		<div class="mu-oneCol mu-stage3-form1 mu-stage3-form mu-form-selecting" formid="" formtype="1">
			<div class="mu-stage3-form-header mu-stage3-form-header-tool1"><span>單選項目</span></div>
			<h4>
				<label for="mu-stage3-entry">請在此輸入類別名稱（如常餐...）：</label>
				<input name="mu-stage3-entry" type="text" />
			</h4>
			<div class="mu-oneCol-entry-orderlist-container">
				<dl>
					<dt class="mu-twoCol-dl-header">項目名稱：</dt>
					<dd class="mu-twoCol-dl-header">價錢：</dd>
					<dt class="mu-oneCol-entry"> <span class="mu-oneCol-entry-orderlist-number">1.</span>
						<input entryid="1" name="mu-stage3-entry-itemName" type="text" value="" />
					</dt>
					<dd class="mu-oneCol-entry">
						<input entryid="1" name="mu-stage3-entry-itemPrice" type="text" value="" />
					</dd>
					<dt class="mu-oneCol-entry"><span class="mu-oneCol-entry-orderlist-number">2.</span>
						<input entryid="2" name="mu-stage3-entry-itemName" type="text" value="" />
					</dt>
					<dd class="mu-oneCol-entry">
						<input entryid="2" name="mu-stage3-entry-itemPrice" type="text" value="" />
					</dd>
					<dt class="mu-oneCol-entry"><span class="mu-oneCol-entry-orderlist-number">3.</span>
						<input entryid="3" name="mu-stage3-entry-itemName" type="text" value="" />
					</dt>
					<dd class="mu-oneCol-entry last">
						<input entryid="3" name="mu-stage3-entry-itemPrice" type="text" value="" />
					</dd>
					<div class="clearer"></div>
				</dl>
			</div>
		</div>
	</div>
	<div id="mu-stage3-form1-entry-wrapper">
		<dt class="mu-oneCol-entry"> <span class="mu-oneCol-entry-orderlist-number"> 
			<!-- Will be replaced by entry number --> 
			</span>
			<input entryid="" name="mu-stage3-entry-itemName" type="text" value="" />
		</dt>
		<dd class="mu-oneCol-entry last">
			<input entryid="" name="mu-stage3-entry-itemPrice" type="text" value="" />
		</dd>
		<div class="clearer"></div>
	</div>
	<div id="mu-stage3-form2-wrapper">
		<div class="mu-oneCol mu-stage3-form2 mu-stage3-form mu-form-selecting" formid="" formtype="2">
			<div class="mu-stage3-form-header mu-stage3-form-header-tool2"><span>多項選目</span></div>
			<h4>
				<label for="mu-stage3-entry">請在此輸入類別名稱（如常餐...）：</label>
				<input name="mu-stage3-entry" type="text" />
			</h4>
			<div class="mu-oneCol-entry-orderlist-container">
				<dl>
					<dt class="mu-twoCol-dl-header">項目名稱：</dt>
					<dt class="mu-oneCol-entry"> <span class="mu-oneCol-entry-orderlist-number">1.</span>
						<input name="mu-stage3-entry-itemName" type="text" entryid="1" value=""  />
					</dt>
					<div class="clearer"></div>
					<div class="clearer"></div>
					<dt class="mu-oneCol-entry"><span class="mu-oneCol-entry-orderlist-number">2.</span>
						<input name="mu-stage3-entry-itemName" type="text" entryid="2" value="" />
					</dt>
					<div class="clearer"></div>
					<div class="clearer"></div>
					<dt class="mu-oneCol-entry last"><span class="mu-oneCol-entry-orderlist-number">3.</span>
						<input name="mu-stage3-entry-itemName" type="text" entryid="3" value="" />
					</dt>
					<div class="clearer"></div>
				</dl>
			</div>
		</div>
	</div>
	<div id="mu-stage3-form2-entry-wrapper">
		<dt class="mu-oneCol-entry last"> <span class="mu-oneCol-entry-orderlist-number"> 
			<!-- Entry ID will be filled here --> 
			</span>
			<input name="mu-stage3-entry-itemName" type="text" value="" />
		</dt>
		<div class="clearer"></div>
	</div>
	<div id="mu-stage3-form3-wrapper">
		<div class="mu-oneCol mu-stage3-form3 mu-stage3-form mu-form-selecting" formid="" formtype="3">
			<div class="mu-stage3-form-header mu-stage3-form-header-tool3"><span>多項選多項</span></div>
			<h4>
				<label for="mu-stage3-entry">請在此輸入類別名稱（如常餐...）：</label>
				<input name="mu-stage3-entry" type="text" />
			</h4>
			<div>
				<div class="mu-stage3-form3-class" formAB="A" style="padding-right: 30px;">
					<dl>
						<dt class="mu-twoCol-dl-header">項目A：</dt>
						<dt class="mu-oneCol-entry"><span class="mu-oneCol-entry-orderlist-number">A1.</span>
							<input name="mu-stage2-entry-itemName" type="text" entrytype="1" entryid="1" value="" />
						</dt>
						<div class="clearer"></div>
						<dt class="mu-oneCol-entry"><span class="mu-oneCol-entry-orderlist-number">A2.</span>
							<input name="mu-stage2-entry-itemName" type="text" entrytype="1" entryid="2" value="" />
						</dt>
						<div class="clearer"></div>
						<dt class="mu-oneCol-entry last"><span class="mu-oneCol-entry-orderlist-number">A3.</span>
							<input name="mu-stage2-entry-itemName" type="text" entrytype="1" entryid="3" value="" />
						</dt>
						<div class="clearer"></div>
					</dl>
				</div>
				<div class="mu-stage3-form3-class" formAB="B">
					<dl>
						<dt class="mu-twoCol-dl-header">項目B：</dt>
						<dt class="mu-oneCol-entry"><span class="mu-oneCol-entry-orderlist-number">B1.</span>
							<input name="mu-stage2-entry-itemName" type="text" entrytype="2" entryid="1" value="" />
						</dt>
						<div class="clearer"></div>
						<dt class="mu-oneCol-entry"><span class="mu-oneCol-entry-orderlist-number">B2.</span>
							<input name="mu-stage2-entry-itemName" type="text" entrytype="2" entryid="2" value="" />
						</dt>
						<div class="clearer"></div>
						<dt class="mu-oneCol-entry last"><span class="mu-oneCol-entry-orderlist-number">B3.</span>
							<input name="mu-stage2-entry-itemName" type="text" entrytype="2" entryid="3" value="" />
						</dt>
						<div class="clearer"></div>
					</dl>
				</div>
				<div class="clearer"></div>
			</div>
		</div>
	</div>
	<div id="mu-stage3-form3-entry-wrapper">
		<dt class="mu-oneCol-entry last"><span class="mu-oneCol-entry-orderlist-number"><!-- entry number will be filled here --></span>
			<input name="mu-stage2-entry-itemName" type="text" entrytype="" entryid="" value="" />
		</dt>
		<div class="clearer"></div>
	</div>
	<!-- --- Management Tool Box (MTB) --- --> 
	<!-- --- MTBform1 --- -->
	<div id="mu-stage3-managetools-form1">
		<div class="mu-stage3-managetools-block">
			<h3>彈出式選單 (Popup-menu)：</h3>
			<dl>
				<dt>飲品：</dt>
				<dd></dd>
				<dt></dt>
				<dd></dd>
				<dt></dt>
				<dd></dd>
			</dl>
		</div>
		<div class="mu-stage3-managetools-block">
			<h3>其他選項：</h3>
			<table class="mu-stage3-MTB-field2" width="100%" border="0">
				<tr>
					<td width="50">[name]&nbsp;</td>
					<td width="150">[desc]&nbsp;</td>
					<td width="50">[price]&nbsp;</td>
				</tr>
				<tr>
					<td><input class="mu-stage3-MTB-field2-col1" type="text" /></td>
					<td><input class="mu-stage3-MTB-field2-col2" type="text" /></td>
					<td><input class="mu-stage3-MTB-field2-col3" type="text" /></td>
				</tr>
				<tr>
					<td><input class="mu-stage3-MTB-field2-col1" type="text" /></td>
					<td><input class="mu-stage3-MTB-field2-col2" type="text" /></td>
					<td><input class="mu-stage3-MTB-field2-col3" type="text" /></td>
				</tr>
				<tr>
					<td><input class="mu-stage3-MTB-field2-col1" type="text" /></td>
					<td><input class="mu-stage3-MTB-field2-col2" type="text" /></td>
					<td><input class="mu-stage3-MTB-field2-col3" type="text" /></td>
				</tr>
			</table>
		</div>
	</div>
	<!-- --------------- Stage 4 --------------- --> 
	<div class="mu-stage4-general-block">
		<div class="mu-class-block mu-form-selecting" formid="" type="0" col="" row="">
			<div class="mu-class-name"><div class="mu-class-icon"></div><span>Class Name</span></div>
			<div class="mu-entry-wrapper">
				
			</div>
		</div>
	</div>
	<!-- Soup and Drinks -->
	<div class="mu-stage4-soupAndDrink-entry">
		<div class="mu-drink-entry-row mu-entry-selecting" entryid="">
			<span class="mu-entry-number"></span>
			<span class="mu-entry-name"></span>
			<span class="mu-entry-price"></span>
		</div>
	</div>
	<!-- Type1 single -->
	<div class="mu-stage4-type1-entry">
		<div class="mu-type1-entry-row mu-entry-selecting" entryid="">
			<span class="mu-entry-number"></span>
			<span class="mu-entry-name"></span>
			<span class="mu-entry-price"></span>
		</div>
	</div>
	<!-- Type2 multi -->
	<div class="mu-stage4-type2-entry">
		<div class="mu-type1-entry-row mu-entry-selecting" entryid="">
			<span class="mu-entry-number"></span>
			<span class="mu-entry-name"></span>
		</div>
	</div>
	<!-- Type3 n to n -->
	<div class="mu-stage4-type3-entry">
		<div class="mu-type3-entry-row mu-entry-selecting" entryid="">
			<span class="mu-entry-number"></span>
			<span class="mu-entry-A mu-type3AB-selecting"></span>
			<span class="mu-entry-B mu-type3AB-selecting"></span>
		</div>
	</div>
</div>
