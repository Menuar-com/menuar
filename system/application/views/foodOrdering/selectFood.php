<script>
var restInfoJSON = '{"email"："cksam@ust.hk","resName"："\u91d1\u9cf3\u8336\u9910\u5ef3","resOpenTime"："00：00：00","resCloseTime"："19：00：00","resAddress"："\u9999\u6e2f\u7063\u4ed4\u6625\u5712\u885741\u865f","resTel"："25720526","resPhoto"："upload\/img_resPhoto\/2.jpg","resTM"："upload\/img_reslogo\/2.jpg","lowestPrice"："0","resDescript"："\u91d1\u9cf3\u8336\u9910\u5ef3\u6b63","resNotics"："\u6210\u529f\u6210\u70ba\u7b2c\u4e00\u9593\u6e2c\u8a66\u8336\u9910\u5ef3"}';

$(document).ready(function(){
	$('.mu_rest_ranking').each(function(){
		$(this).mu_ranking();
	});
	$('#mu_cartTools #mu_cartDetails').click(function(){
		
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
			<div class="mu_col1"></div>
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
			<div id="mu_cartDetails">詳細資料</div>
			<div id="mu_cartClear">清空美食籃子</div>
		</div>
	</div>
	<div class="clearer"></div>
</div>
