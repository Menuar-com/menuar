<script>
var restInfoJSON = '{"email"："cksam@ust.hk","resName"："\u91d1\u9cf3\u8336\u9910\u5ef3","resOpenTime"："00：00：00","resCloseTime"："19：00：00","resAddress"："\u9999\u6e2f\u7063\u4ed4\u6625\u5712\u885741\u865f","resTel"："25720526","resPhoto"："upload\/img_resPhoto\/2.jpg","resTM"："upload\/img_reslogo\/2.jpg","lowestPrice"："0","resDescript"："\u91d1\u9cf3\u8336\u9910\u5ef3\u6b63","resNotics"："\u6210\u529f\u6210\u70ba\u7b2c\u4e00\u9593\u6e2c\u8a66\u8336\u9910\u5ef3"}';

$(document).ready(function(){
	$('.mu_rest_ranking').each(function(){
		$(this).mu_ranking();
	});
	$('#mu_cartTools #mu_cartDetails').fancybox({
		centerOnScroll: true,
		overlayShow: false,
		transitionIn: 'elastic',
		scrolling: 'no',
		height: 480
	});
	$('#mu_cartTools #mu_cartClear').fancybox({
		centerOnScroll: true,
		overlayShow: false,
		transitionIn: 'elastic',
		scrolling: 'no',
		height: 480
	});
	
});
</script>

<div id="mu_FO_s3_wrapper">
	<div id="mu_restInfo">
		<div id="mu_restPhoto" class="mu_ss_preview">[Photo]</div>
		<div id="mu_restImg" class="mu_ss_preview">[Rest logo]</div>
		<div id="mu_restName">
			<h3>[Rest Name]</h3>
		</div>
		<div id="mu_restDetails">
			<dl>
				<dt>營業時間： </dt>
				<dd>7:00 - 22:00</dd>
				<dt>平均送餐速度： </dt>
				<dd>29分鐘</dd>
				<dt>餐廳介紹： </dt>
				<dd>Photoshop好難用 ：(</dd>
				<dt>起送價： </dt>
				<dd>$30</dd>
				<dt>電話： </dt>
				<dd>23924880</dd>
				<dt>地址： </dt>
				<dd>旺角通菜街153-159號地舖</dd>
				<dt>公告： </dt>
				<dd>我想哭, 你可不可以暫時別要睡; 番番黎正題, 呢度分告最多比佢打140個字.</dd>
				<dt>評分： </dt>
				<dd>
					<div class="mu_rest_ranking" ranking="4"><img src="images/foodOrdering/ranking_star.png" /></div>
				</dd>
			</dl>
		</div>
		<div id="mu_tools">
			<div id="mu_t_bookmark">收藏此餐廳</div>
			<div id="mu_t_share">分享到： </div>
			<div id="mu_t_fblike">
				<div id="fb-root"></div>
				<script src="http：//connect.facebook.net/en_US/all.js#xfbml=1"></script>
				<fb：like href="http：//hk.yahoo.com/" send="true" width="450" show_faces="true" font=""></fb：like>
			</div>
		</div>
		<div class="clearer"></div>
	</div>
	<div id="mu_foodChoice">
		<div id="mu_foods">
			<h4 class="mu_subtitle">餐廳現在提供的食物：</h4>
			<div class="mu_col1">
				<div class="mu_foodBlk">
					<div class="mu_foodBlkName">
						<div class="mu-class-icon"></div>
						<span>中午套餐</span>
					</div>
					<div class="mu_entry_wrapper">
						<div class="mu-type1-entry-row" entryid="1"> <span class="mu-entry-number">1</span> <span class="mu-entry-name">蓮藕炆排骨</span> <span class="mu-entry-price">32</span> </div>
						<div class="mu-type1-entry-row" entryid="2"> <span class="mu-entry-number">2</span> <span class="mu-entry-name">草菇麵根炆雞</span> <span class="mu-entry-price">14</span> </div>
						<div class="mu-type1-entry-row" entryid="3"> <span class="mu-entry-number">3</span> <span class="mu-entry-name">香茅牛肉</span> <span class="mu-entry-price">51</span> </div>
						<div class="mu-type1-entry-row" entryid="4"> <span class="mu-entry-number">4</span> <span class="mu-entry-name">蓮藕馬蹄蒸牛肉餅</span> <span class="mu-entry-price">13</span> </div>
						<div class="mu-type1-entry-row" entryid="5"> <span class="mu-entry-number">5</span> <span class="mu-entry-name">什錦雞粒玉子豆腐</span> <span class="mu-entry-price">53</span> </div>
						<div class="mu-type1-entry-row" entryid="6"> <span class="mu-entry-number">6</span> <span class="mu-entry-name">鹹蛋馬蹄蒸肉餅</span> <span class="mu-entry-price">12</span> </div>
						<div class="mu-type1-entry-row" entryid="7"> <span class="mu-entry-number">7</span> <span class="mu-entry-name">冬菇炸菜蒸牛肉絲</span> <span class="mu-entry-price">43</span> </div>
						<div class="mu-type1-entry-row" entryid="8"> <span class="mu-entry-number">8</span> <span class="mu-entry-name">木耳馬蹄蒸肉餅</span> <span class="mu-entry-price">12</span> </div>
						<div class="mu-type1-entry-row" entryid="9"> <span class="mu-entry-number">9</span> <span class="mu-entry-name">yu</span> <span class="mu-entry-price">32</span> </div>
						<div class="mu-type1-entry-row" entryid="10"> <span class="mu-entry-number">10</span> <span class="mu-entry-name">yi</span> <span class="mu-entry-price">12</span> </div>
						<div class="mu-type1-entry-row" entryid="11"> <span class="mu-entry-number">11</span> <span class="mu-entry-name">yi</span> <span class="mu-entry-price">12</span> </div>
						<div class="mu-type1-entry-row" entryid="12"> <span class="mu-entry-number">12</span> <span class="mu-entry-name">yo</span> <span class="mu-entry-price">11</span> </div>
					</div>
				</div>
				<div class="mu_remarks"></div>
			</div>
			<div class="mu_col2"></div>
			<div class="clearer"></div>
		</div>
		<div id="mu_drinks">
			<h4 class="mu_subtitle">餐廳現在提供的飲品：</h4>
			<div class="mu_col1"></div>
			<div class="mu_col2"></div>
			<div class="clearer"></div>
		</div>
		<div id="mu_notInService">
			<h4 class="mu_subtitle">餐廳即將供應的食物：</h4>
			<div class="mu_col1"></div>
			<div class="mu_col2"></div>
			<div class="clearer"></div>
		</div>
	</div>
	<div id="mu_cart">
		<h5 id="mu_cartName">美食籃子</h5>
		<p id="mu_restname">金鳳茶餐廳</p>
		<table width="200">
			<tr class="mu_firstRow">
				<th width="104">美食</th>
				<th width="40" class="td_center">數量</th>
				<th width="40" class="td_center">價錢</th>
			</tr>
			<tr>
				<td>茄茸帆立貝有機意粉(可樂*2+凍檸水)</td>
				<td class="td_center">3</td>
				<td class="td_center">138</td>
			</tr>
			<tr>
				<td>沙律(鮮雜果拼盤+鮮雜果沙律)(凍咖啡)</td>
				<td class="td_center">1</td>
				<td class="td_center">43</td>
			</tr>
			<tr>
				<td>車仔麵(魚丸+魚丸+牛丸+ 河粉)</td>
				<td class="td_center">1</td>
				<td class="td_center">45</td>
			</tr>
			<tr class="mu_lastRow">
				<td class="mu_cartTotal">總數</td>
				<td class="td_center">5</td>
				<td class="td_center">226</td>
			</tr>
		</table>
		<div id="mu_cartTools">
			<div id="mu_cartDetails" href="#mu_popup_cartDetails">更改／詳細資料</div>
			<div id="mu_cartClear" href="#mu_popup_moreOption">清空美食籃子</div>
		</div>
	</div>
	<div class="clearer"></div>
</div>
<div style="display:none">
	<div id="mu_popup_moreOption">
		<div class="mu_CD_title">你選擇了：<span class="mu_CD_chosen">茄茸帆立貝有機意粉</span></div>
		<div class="mu_CD_subTitle">要求多多既你, 仲可以有以下要求:</div>
		<div class="mu_CD_main">
			<div class="mu_CD_opts" id="mu_CD_addDrinks">
				<h6>加飲品</h6>
				<div class="mu_col1">
					<h7>熱飲</h7>
					<div class="mu_CD_items">
						<div class="mu_CD_clickBox"></div>
						<div class="mu_CD_itemName">香滑奶茶</div>
						<div class="mu_CD_itemPrice">+0元</div>
					</div>
					<div class="mu_CD_items">
						<div class="mu_CD_clickBox"></div>
						<div class="mu_CD_itemName">檸檬蜂蜜</div>
						<div class="mu_CD_itemPrice">+0元</div>
					</div>
					<div class="mu_CD_items">
						<div class="mu_CD_clickBox"></div>
						<div class="mu_CD_itemName">香濃咖啡</div>
						<div class="mu_CD_itemPrice">+0元</div>
					</div>
					<div class="mu_CD_items">
						<div class="mu_CD_clickBox"></div>
						<div class="mu_CD_itemName">檸檬水</div>
						<div class="mu_CD_itemPrice">+0元</div>
					</div>
					<div class="mu_CD_items">
						<div class="mu_CD_clickBox"></div>
						<div class="mu_CD_itemName">朱古力</div>
						<div class="mu_CD_itemPrice">+0元</div>
					</div>
					<div class="mu_CD_items">
						<div class="mu_CD_clickBox"></div>
						<div class="mu_CD_itemName">柚子茶</div>
						<div class="mu_CD_itemPrice">+0元</div>
					</div>
				</div>
				<div class="mu_col2">
					<h7>凍飲</h7>
					<div class="mu_CD_items">
						<div class="mu_CD_clickBox"></div>
						<div class="mu_CD_itemName">純豆漿</div>
						<div class="mu_CD_itemPrice">+0元</div>
					</div>
					<div class="mu_CD_items">
						<div class="mu_CD_clickBox"></div>
						<div class="mu_CD_itemName">可樂</div>
						<div class="mu_CD_itemPrice">+0元</div>
					</div>
					<div class="mu_CD_items">
						<div class="mu_CD_clickBox"></div>
						<div class="mu_CD_itemName">七喜</div>
						<div class="mu_CD_itemPrice">+0元</div>
					</div>
					<div class="mu_CD_items">
						<div class="mu_CD_clickBox"></div>
						<div class="mu_CD_itemName">香濃咖啡</div>
						<div class="mu_CD_itemPrice">+0元</div>
					</div>
					<div class="mu_CD_items">
						<div class="mu_CD_clickBox"></div>
						<div class="mu_CD_itemName">鹹檸檬七喜</div>
						<div class="mu_CD_itemPrice">+0元</div>
					</div>
					<div class="mu_CD_items">
						<div class="mu_CD_clickBox"></div>
						<div class="mu_CD_itemName">檸檬利賓納</div>
						<div class="mu_CD_itemPrice">+999元</div>
					</div>
					<div class="mu_CD_items">
						<div class="mu_CD_clickBox"></div>
						<div class="mu_CD_itemName">香滑可樂</div>
						<div class="mu_CD_itemPrice">+99999元</div>
					</div>
				</div>
				<div class="clearer"></div>
			</div>
			<div class="mu_CD_opts">
				<h6>飯/意粉/薯菜</h6>
				<div class="mu_CD_items">
					<div class="mu_CD_clickBox"></div>
					<div class="mu_CD_itemName">飯</div>
					<div class="mu_CD_itemPrice">+0元</div>
				</div>
				<div class="mu_CD_items">
					<div class="mu_CD_clickBox"></div>
					<div class="mu_CD_itemName">意粉</div>
					<div class="mu_CD_itemPrice">+70元</div>
				</div>
				<div class="mu_CD_items">
					<div class="mu_CD_clickBox"></div>
					<div class="mu_CD_itemName">著菜</div>
					<div class="mu_CD_itemPrice">+80元</div>
				</div>
				<div class="mu_CD_items">
					<div class="mu_CD_clickBox"></div>
					<div class="mu_CD_itemName">天使麵</div>
					<div class="mu_CD_itemPrice">+90元</div>
				</div>
				<div class="clearer"></div>
			</div>
			<div class="mu_CD_opts">
				<h6>辣度</h6>
				<div class="clearer"></div>
			</div>
			<div class="mu_CD_opts">
				<h6>其他要求</h6>
				<textarea cols="90" rows="3"></textarea>
				<div class="clearer"></div>
			</div>
		</div>
		<div class="mu_CD_go"> 
			<script language="javascript">
				$(function() {
					$(".mu_CD_go button").button();
				});
			</script>
			<button class="mu_cancel">取消</button>
			<button class="mu_order">點餐</button>
		</div>
	</div>
	<div id="mu_popup_cartDetails">
		<div class="mu_CD_title">你選擇了：</div>
		<div class="mu_CD_main">
			<div class="mu_foodList">
				<div class="mu_row mu_fl_r1">
					<div class="mu_col mu_fl_c1">&nbsp;</div>
					<div class="mu_col mu_fl_c2">美食</div>
					<div class="mu_col mu_fl_c3 center">價錢</div>
					<div class="mu_col mu_fl_c4 center">數量</div>
					<div class="mu_col mu_fl_c5 center">總價</div>
					<div class="clearer"></div>
				</div>
				<div class="mu_row">
					<div class="mu_col mu_fl_c1">
						<div class="mu_iosIcon1"></div>
					</div>
					<div class="mu_col mu_fl_c2">茄茸帆立貝有機意粉<br />
						加: 可樂 +$2</div>
					<div class="mu_col mu_fl_c3 center">45</div>
					<div class="mu_col mu_fl_c4 center">
						<div class="mu_iosIcon2"></div>
						<input class="mu_CD_quantity" />
						<div class="mu_iosIcon3"></div>
					</div>
					<div class="mu_col mu_fl_c5 center">90</div>
					<div class="clearer"></div>
				</div>
				<div class="mu_row">
					<div class="mu_col mu_fl_c1">
						<div class="mu_iosIcon1"></div>
					</div>
					<div class="mu_col mu_fl_c2">茄茸帆立貝有機意粉<br />
						加: 凍檸水 +$5, 轉天使麵, 走冰, 少甜)</div>
					<div class="mu_col mu_fl_c3 center">45</div>
					<div class="mu_col mu_fl_c4 center">
						<div class="mu_iosIcon2"></div>
						<input class="mu_CD_quantity" />
						<div class="mu_iosIcon3"></div>
					</div>
					<div class="mu_col mu_fl_c5 center">90</div>
					<div class="clearer"></div>
				</div>
				<div class="mu_row">
					<div class="mu_col mu_fl_c1">
						<div class="mu_iosIcon1"></div>
					</div>
					<div class="mu_col mu_fl_c2">沙律(鮮雜果拼盤+鮮雜果沙律)<br />
						加: 凍咖啡 +$5, 凱撒沙律 +$20, 走冰, 少甜, <br />
						多奶</div>
					<div class="mu_col mu_fl_c3 center">45</div>
					<div class="mu_col mu_fl_c4 center">
						<div class="mu_iosIcon2"></div>
						<input class="mu_CD_quantity" />
						<div class="mu_iosIcon3"></div>
					</div>
					<div class="mu_col mu_fl_c5 center">90</div>
					<div class="clearer"></div>
				</div>
				<div class="mu_row">
					<div class="mu_col mu_fl_c1">
						<div class="mu_iosIcon1"></div>
					</div>
					<div class="mu_col mu_fl_c2">車仔麵(魚丸+魚丸+河粉)<br />
						加: 無</div>
					<div class="mu_col mu_fl_c3 center">45</div>
					<div class="mu_col mu_fl_c4 center">
						<div class="mu_iosIcon2"></div>
						<input class="mu_CD_quantity" />
						<div class="mu_iosIcon3"></div>
					</div>
					<div class="mu_col mu_fl_c5 center">90</div>
					<div class="clearer"></div>
				</div>
				<div class="mu_row mu_fl_rLast">
					<div class="mu_col mu_fl_c1">&nbsp;</div>
					<div class="mu_col mu_fl_c2">&nbsp;</div>
					<div class="mu_col mu_fl_c3">&nbsp;</div>
					<div class="mu_col mu_fl_c4 center">5</div>
					<div class="mu_col mu_fl_c5 center">249</div>
					<div class="clearer"></div>
				</div>
			</div>
			<!--
			<table width="740" cellpadding="0" cellspacing="0">
				<tr class="mu_firstRow">
					<th width="30">&nbsp;</th>
					<th width="310">美食</th>
					<th width="125" class="center">價錢</th>
					<th width="148" class="center">數量</th>
					<th width="125" class="center">總價</th>
				</tr>
				<tr class="mu_contentsRow">
					<td><div class="mu_iosIcon1"></div></td>
					<td>茄茸帆立貝有機意粉<br />
						加: 可樂 +$2</td>
					<td class="center">45</td>
					<td><div class="mu_iosIcon2"></div>
						<input class="mu_CD_quantity" />
						<div class="mu_iosIcon3"></div></td>
					<td class="center">90</td>
				</tr>
				<tr class="mu_contentsRow">
					<td><div class="mu_iosIcon1"></div></td>
					<td>茄茸帆立貝有機意粉<br />
						加: 凍檸水 +$5, 轉天使麵, 走冰, 少甜)</td>
					<td class="center">48</td>
					<td><div class="mu_iosIcon2"></div>
						<input class="mu_CD_quantity" />
						<div class="mu_iosIcon3"></div></td>
					<td class="center">48</td>
				</tr>
				<tr class="mu_contentsRow">
					<td><div class="mu_iosIcon1"></div></td>
					<td>沙律(鮮雜果拼盤+鮮雜果沙律)<br />
						加: 凍咖啡 +$5, 凱撒沙律 +$20, 走冰, 少甜, <br />
						多奶</td>
					<td class="center">68</td>
					<td><div class="mu_iosIcon2"></div>
						<input class="mu_CD_quantity" />
						<div class="mu_iosIcon3"></div></td>
					<td class="center">68</td>
				</tr>
				<tr class="mu_contentsRow">
					<td><div class="mu_iosIcon1"></div></td>
					<td>車仔麵(魚丸+魚丸+河粉)<br />
						加: 無</td>
					<td class="center">43</td>
					<td><div class="mu_iosIcon2"></div>
						<input class="mu_CD_quantity" />
						<div class="mu_iosIcon3"></div></td>
					<td class="center">43</td>
				</tr>
				<tr class="mu_lastRow">
					<td></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td class="center">5</td>
					<td class="center">249</td>
				</tr>
			</table>
			--> 
		</div>
		<div class="mu_CD_go"> 
			<script language="javascript">
				$(function() {
					$(".mu_CD_go button").button();
				});
			</script>
			<button class="mu_cancel">取消</button>
			<button class="mu_order">賣單</button>
		</div>
	</div>
</div>
