<script language="javascript">

$(document).ready(function (){
	$('#mu_CO_right .mu_basicBlk button').button();
});

</script>

<div id="mu_CO_wrapper">
<div id="mu_CO_left">
	<div id="mu_CO_foodChosen" class="mu_basicBlk">
		<h3>你已經選擇了：</h3>
		<div class="mu_foodList">
			<div class="mu_row mu_fl_r1">
				<div class="mu_col mu_fl_c2">美食</div>
				<div class="mu_col mu_fl_c3 center">價錢</div>
				<div class="mu_col mu_fl_c4 center">數量</div>
				<div class="mu_col mu_fl_c5 center">總價</div>
				<div class="clearer"></div>
			</div>
			<div class="mu_row">
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
				<div class="mu_col mu_fl_c2">&nbsp;</div>
				<div class="mu_col mu_fl_c3">&nbsp;</div>
				<div class="mu_col mu_fl_c4 center">5</div>
				<div class="mu_col mu_fl_c5 center">249</div>
				<div class="clearer"></div>
			</div>
		</div>
		<div class="mu_deliTime">
			<label for="mu_deliveryTime">送餐時間: </label>
			<select id="mu_deliveryTime">
				<option value="0">盡快送出</option>
				<option value="1300">1:00pm</option>
				<option value="1330">1:30pm</option>
				<option value="1400">2:00pm</option>
				<option value="1430">2:30pm</option>
				<option value="">...</option>
			</select>
		</div>
	</div>
</div>
<div id="mu_CO_right">
<div id="mu_CO_MB" class="mu_basicBlk">
<h3>己登入！</h3>
<h4>請檢查電話, 地址是否正確!(重要)</h4>
<dl>
<dt>電話:</dt>
<dd>
	<input />
</dd>
<p>(外賣仔會打這個電話聯絡你!)</p>
<dt>地址:</dt>
<dd>
	<input />
</dd>
<p>(寫中文會更方便茶餐廳老闆.)</p>
<dt>備用電話:</dt>
<dd>
	<input />
</dd>
<p>(留多一個電話, 更容易搵到你. 可以唔填.)</p>
<dl>
<div class="mu_orderBar">
	<button>落單</button>
</div>
<div class="clearer"></div>
</div>
<div id="mu_CO_OM" class="mu_basicBlk">
	<h3>舊會員：</h3>
	<dl>
		<dt>電郵地址:</dt>
		<dd>
			<input />
		</dd>
		<dt>密碼:</dt>
		<dd>
			<input />
		</dd>
	</dl>
	<div class="mu_loginBar">
		<div class="mu_loginWFB">
			<div id="fb-root"></div>
			<script src="http://connect.facebook.net/en_US/all.js"></script> 
			<script>
				FB.init({ 
					appId:'229460643747196', cookie:true, status:true, xfbml:true 
				});
 	     </script>
			<fb:login-button>Login with Facebook</fb:login-button>
		</div>
		<div class="mu_loginBtn">
			<button>登入</button>
		</div>
	</div>
	<div class="clearer"></div>
</div>
<div id="mu_CO_NM" class="mu_basicBlk">
	<h3>新會員：</h3>
	<div class="mu_FBconnect">[Connect with facebook]</div>
	<p class="mu_or">或</p>
	<dl>
		<dt>電郵地址:</dt>
		<dd>
			<input />
		</dd>
		<dt>密碼:</dt>
		<dd>
			<input />
		</dd>
		<dt>確認密碼:</dt>
		<dd>
			<input />
		</dd>
		<dt>電話:</dt>
		<dd>
			<input />
		</dd>
		<p>(外賣仔會打這個電話聯絡你呀!)</p>
		<dt>地址:</dt>
		<dd>
			<input />
		</dd>
		<p>(寫中文會更方便茶餐廳老闆.)</p>
		<dt>備用電話:</dt>
		<dd>
			<input />
		</dd>
		<p>(留多一個電話, 更容易搵到你. 可以唔填.)</p>
	</dl>
	<div class="clearer"></div>
</div>
</div>
<div class="clearer"></div>
</div>
