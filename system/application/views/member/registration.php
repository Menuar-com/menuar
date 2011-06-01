<style type="text/css">
#mu-show-more-info { cursor: pointer; }
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$("#mu-member-reg-form").validate();
		$("#phone").mask("9999 9999",{placeholder:"*"});
		$("#birthday").mask("9999/99/99",{placeholder:"*"});
		$('#mu-more-info').hide();
		$('#mu-show-more-info').click( function() {
			$(this).hide();
			$("#mu-more-info").fadeIn();
		});
	});
</script>

<div id="mu-member-reg-wrapper" class="form">
	<form id="mu-member-reg-form" method="post" action="online/member/addMember.html">
		<div class="form_description">
			<h2>會員登記</h2>
		</div>
		<ul>
			<li id="mu-li-email" class="mu-form-crossline">
				<label class="description" for="email">請輸入你的電郵地址：</label>
				<div class="mu-form-input">
					<input id="email" name="email" class="required email" type="text" maxlength="255" value=""/>
				</div>
				<div class="clearer"></div>
			</li>
			<li id="mu-li-password" class="left" >
				<label class="description" for="password">請輸入你的密碼：</label>
				<div class="form_input">
					<input id="password" name="password" class="required password" type="password" maxlength="255" value=""/>
				</div>
				<div class="clearer"></div>
			</li>
			<li id="mu-li-re-password" class="right">請再輸入你的密碼：
				<div class="form_input">
					<input id="re_password" name="re_password" class="required password" type="password" maxlength="255" equalto="#password" value=""/>
				</div>
				<div class="clearer"></div>
			</li>
			<li id="mu-show-more-info" class="clear"><a>按此輸入詳細資料</a></li>
			<div id="mu-more-info" class="clear">
				<h3>更多資料(選擇填寫)：</h3>
				<li id="mu-li-fullname"  class="left">
					<label class="description" for="fullname">你的名字：</label>
					<div class="form_input">
						<input id="fullname" name="fullname" class="" type="text" maxlength="255" value=""/>
					</div>
				</li>
				<li id="mu-li-phone" class="right">
					<label class="description" for="phone">主要通訊電話：</label>
					<div class="form_input">
						<input id="phone" name="phone" class="phone" type="text" maxlength="255" value=""/>
					</div>
					<div class="clearer"></div>
				</li>
				<li id="mu-li-address" class="form_wholeline">
					<label class="description" for="address">主要地址：</label>
					<div class="form_input">
						<input id="address" name="address" class="" type="text" maxlength="255" value=""/>
					</div>
					<div class="clearer"></div>
				</li>
				<li id="mu-li-birthday" class="left">
					<label class="description" for="birthday">生日日期：</label>
					<div class="form_input">
						<input id="birthday" name="birthday" class="" type="text" maxlength="255" value=""/>
					</div>
					<div class="clearer"></div>
				</li>
				<li id="mu-li-gender" class="right">
					<label class="description" for="gender">性別：</label>
					<div class="form_input">
						<label class="left"><span>男</span>
							<input name="gender" type="radio" value="0" />
						</label>
						<label class="left"><span>女</span>
							<input name="gender" type="radio" value="1" />
						</label>
					</div>
					<div class="clearer"></div>
				</li>
				<div class="clearer"></div>
			</div>
			<li id="mu-li-promo" class="form_wholeline">
				<label>
					<input name="promo" type="checkbox" value="1" />
					我要定期在電子信箱中收到menuar的精選優惠資訊。<!-- Yes, sign me up for all the latest MenuAr news and info -->
				</label>
				<label>
					<input name="TandC" type="checkbox" value="1" />
					我同意且已閱讀Menuar的使用條款。<!-- I agree to the Terms of Use of MenuAr -->
				</label>
			</li>
			<li class="mu-submit-buttons">
				<input name="ssCode" type="hidden" value="3ephusP8" />
				<input id="submitForm" class="button_text" type="submit" name="submit" value="Submit" />
			</li>
		</ul>
	</form>
	<div class="clearer"></div>
</div>
