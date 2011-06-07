<script type="text/javascript" src="<? echo base_url() ?>/script/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<? echo base_url() ?>/script/jquery.validate.min.js"></script>
<script type="text/javascript" src="<? echo base_url() ?>/script/jquery.maskedinput-1.2.2.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#member_reg_form").validate();
		$("#phone").mask("9999 9999",{placeholder:"*"});
		$("#birthday").mask("9999/99/99",{placeholder:"*"});
		//alert("hihi");
	});
</script>

<div id="member_reg_div" class="form">
	<form id="member_reg_form" method="post" action="insertData.html">
		<div class="form_description">
			<h2>Sign up for Menuar</h2>
		</div>
		<ul>
			<li id="li_email" class="form_wholeline">
				<label class="description" for="email">What is your Email Address? </label>
				<div class="form_input">
					<input id="email" name="email" class="required email" type="text" maxlength="255" value=""/>
				</div>
				<div class="clearer"></div>
			</li>
			<li id="li_password" class="left" >
				<label class="description" for="password">Choose your clever Password: </label>
				<div class="form_input">
					<input id="password" name="password" class="required password" type="password" maxlength="255" value=""/>
				</div>
				<div class="clearer"></div>
			</li>
			<li id="li_re_password" class="right">Re-type password, just in case:
				<div class="form_input">
					<input id="re_password" name="re_password" class="required password" type="password" maxlength="255" equalto="#password" value=""/>
				</div>
				<div class="clearer"></div>
			</li>
			<div id="more-info">
				<h3>Optional:</h3>
				<li id="li_fullname"  class="left">
					<label class="description" for="fullname">What is your full name?</label>
					<div class="form_input">
						<input id="fullname" name="fullname" class="" type="text" maxlength="255" value=""/>
					</div>
				</li>
				<li id="li_phone" class="right">
					<label class="description" for="phone">Main Phone Number: </label>
					<div class="form_input">
						<input id="phone" name="phone" class="phone" type="text" maxlength="255" value=""/>
					</div>
					<div class="clearer"></div>
				</li>
				<li id="li_address" class="form_wholeline">
					<label class="description" for="address">Main Address: </label>
					<div class="form_input">
						<input id="address" name="address" class="" type="text" maxlength="255" value=""/>
					</div>
					<div class="clearer"></div>
				</li>
				<li id="li_birthday" class="left">
					<label class="description" for="birthday">Birthday: </label>
					<div class="form_input">
						<input id="birthday" name="birthday" class="" type="text" maxlength="255" value=""/>
					</div>
					<div class="clearer"></div>
				</li>
				<li id="li_gender" class="right">
					<label class="description" for="gender">Gender: </label>
					<div class="form_input"> <span>Male</span>
						<input name="gender" type="radio" value="0" />
						<span>Female</span>
						<input name="gender" type="radio" value="1" />
					</div>
					<div class="clearer"></div>
				</li>
				<div class="clearer"></div>
			</div>
			<li id="li_promo" class="form_wholeline">
				<input name="promo" type="checkbox" value="1" />
				Yes, sign me up for all the latest MenuAr news and info </li>
			<li id="li_TandC" class="form_wholeline">
				<input name="TandC" type="checkbox" value="1" />
				I agree to the Terms of Use of MenuAr</li>
			<li class="buttons">
				<input id="submitForm" class="button_text" type="submit" name="submit" value="Submit" />
			</li>
		</ul>
	</form>
	<div class="clearer"></div>
</div>

