<script type="text/javascript">
$(document).ready(function(){
	$('#mu_FO_s1_wrapper').height($('#mu_FO_s1_wrapper #mu_FO_s1_tab1').height() + 2);
});
</script>

<div id="mu_FO_s1_wrapper">
	<div id="mu_FO_s1_left">
		<div class="mu_FO_s1_navs mu_active mu_first" id="mu_FO_s1_nav1" targetTab="1">
			<div class="mu_FO_s1_navs_icon"></div>
			<a>地圖</a> </div>
		<div class="mu_FO_s1_navs" id="mu_FO_s1_nav2" targetTab="2">
			<div class="mu_FO_s1_navs_icon"></div>
			<a>關鍵字</a> </div>
		<div class="mu_FO_s1_navs" id="mu_FO_s1_nav3" targetTab="3">
			<div class="mu_FO_s1_navs_icon"></div>
			<a>分區</a> </div>
		<div class="mu_FO_s1_navs" id="mu_FO_s1_nav4" targetTab="4">
			<div class="mu_FO_s1_navs_icon"></div>
			<a>地鐵站</a> </div>
	</div>
	<div class="mu_FO_s1_tabs mu_active" id="mu_FO_s1_tab1" tab="1">
		<div id="mu_FO_s1_tab1_wrapper">
			<iframe width="660" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.hk/?ie=UTF8&amp;hq=&amp;hnear=%E9%A6%99%E6%B8%AF&amp;ll=22.396428,114.109497&amp;spn=1.037326,1.134338&amp;z=10&amp;brcurrent=3,0x3403e2eda332980f:0xf08ab3badbeac97c,1&amp;output=embed"></iframe>
		</div>
	</div>
	<div class="mu_FO_s1_tabs" id="mu_FO_s1_tab2" tab="2">
		<div id="mu_posSearchWrapper">
			<form id="mu_posSearch" action="posSearch" method="post">
				<label for="posSearch_input"><span style="font-size: 24px;">我</span>而家係</label>
				<input type="text" value="" maxlength="10" name="posSearch_input" id="posSearch_input" title="你係邊到～？" />
				<button id="mu_posSearch_next">叫外賣</button>
				<script language="javascript">
					$('#mu_posSearch_next').button();
				</script>
			</form>
			<div class="clearer"></div>
			<div id="mu_hotPlace">
				<div class="mu_col1">
					<h6>灣仔</h6>
					<ul>
						<li>修頓</li>
						<li>灣仔道</li>
						<li>駱克道</li>
					</ul>
				</div>
				<div class="mu_col2">
					<h6>銅鑼灣</h6>
					<ul>
						<li>修頓</li>
						<li>灣仔道</li>
						<li>駱克道</li>
					</ul>
				</div>
				<div class="mu_col3">
					<h6>...</h6>
					<ul>
						<li>...</li>
						<li>...</li>
						<li>...</li>
					</ul>
				</div>
				<div class="mu_col4">
					<h6>...</h6>
					<ul>
						<li>...</li>
						<li>...</li>
						<li>...</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="clearer"></div>
	</div>
	<div class="mu_FO_s1_tabs" id="mu_FO_s1_tab3" tab="3"></div>
	<div class="mu_FO_s1_tabs" id="mu_FO_s1_tab4" tab="4"> <img src="images/mu_MTR.png" width="700" height="563" border="0" usemap="#mu_FO_MTR" />
		<map name="mu_FO_MTR" id="mu_FO_MTR">
			<area shape="rect" coords="61,4,106,50" href="#isl01" />
			<area shape="rect" coords="107,4,141,50" href="#isl02" />
			<area shape="rect" coords="142,4,176,50" href="#isl03" />
			<area shape="rect" coords="177,4,215,50" href="#isl04" />
			<area shape="rect" coords="216,4,261,50" href="#isl05" />
			<area shape="rect" coords="262,4,297,50" href="#isl06" />
			<area shape="rect" coords="298,4,339,50" href="#isl07" />
			<area shape="rect" coords="340,4,380,50" href="#isl08" />
			<area shape="rect" coords="381,4,424,50" href="#isl09" />
			<area shape="rect" coords="425,4,460,50" href="#isl10" />
			<area shape="rect" coords="461,4,501,50" href="#isl11" />
			<area shape="rect" coords="502,4,549,50" href="#isl12" />
			<area shape="rect" coords="550,4,599,50" href="#isl13" />
			<area shape="rect" coords="600,4,643,50" href="#isl14" />
			<area shape="rect" coords="8,69,50,124" href="#ktl01" />
			<area shape="rect" coords="51,69,93,124" href="#ktl02" />
			<area shape="rect" coords="94,69,137,124" href="#ktl03" />
			<area shape="rect" coords="138,69,183,124" href="#ktl04" />
			<area shape="rect" coords="184,69,229,124" href="#ktl05" />
			<area shape="rect" coords="230,69,265,124" href="#ktl06" />
			<area shape="rect" coords="266,69,308,124" href="#ktl07" />
			<area shape="rect" coords="309,69,356,124" href="#ktl08" />
			<area shape="rect" coords="357,69,399,124" href="#ktl09" />
			<area shape="rect" coords="400,69,447,124" href="#ktl10" />
			<area shape="rect" coords="448,69,499,124" href="#ktl11" />
			<area shape="rect" coords="500,69,543,124" href="#ktl12" />
			<area shape="rect" coords="544,69,581,124" href="#ktl13" />
			<area shape="rect" coords="582,69,624,124" href="#ktl14" />
			<area shape="rect" coords="625,69,680,124" href="#ktl15" />
			<area shape="rect" coords="8,136,48,193" href="#twl01" />
			<area shape="rect" coords="49,136,85,193" href="#twl02" />
			<area shape="rect" coords="86,136,123,193" href="#twl03" />
			<area shape="rect" coords="124,136,158,193" href="#twl04" />
			<area shape="rect" coords="159,136,194,193" href="#twl05" />
			<area shape="rect" coords="195,136,230,193" href="#twl06" />
			<area shape="rect" coords="231,136,270,193" href="#twl07" />
			<area shape="rect" coords="271,136,319,193" href="#twl08" />
			<area shape="rect" coords="320,136,364,193" href="#twl09" />
			<area shape="rect" coords="365,136,416,193" href="#twl10" />
			<area shape="rect" coords="417,136,459,193" href="#twl11" />
			<area shape="rect" coords="460,136,502,193" href="#twl12" />
			<area shape="rect" coords="503,136,544,193" href="#twl13" />
			<area shape="rect" coords="545,136,593,193" href="#twl14" />
			<area shape="rect" coords="594,136,634,193" href="#twl15" />
			<area shape="rect" coords="637,136,680,193" href="#twl16" />
			<area shape="rect" coords="145,211,196,254" href="#tkl01" />
			<area shape="rect" coords="156,255,215,280" href="#tkl02" />
			<area shape="rect" coords="197,211,254,254" href="#tkl03" />
			<area shape="rect" coords="255,211,319,254" href="#tkl04" />
			<area shape="rect" coords="320,211,381,254" href="#tkl05" />
			<area shape="rect" coords="382,211,438,254" href="#tkl06" />
			<area shape="rect" coords="439,211,498,254" href="#tkl07" />
			<area shape="rect" coords="499,211,555,254" href="#tkl08" />
			<area shape="rect" coords="132,282,175,330" href="#tcl01" />
			<area shape="rect" coords="176,282,219,330" href="#tcl02" />
			<area shape="rect" coords="220,282,267,330" href="#tcl03" />
			<area shape="rect" coords="268,282,317,330" href="#tcl04" />
			<area shape="rect" coords="318,282,374,330" href="#tcl05" />
			<area shape="rect" coords="375,282,426,330" href="#tcl06" />
			<area shape="rect" coords="427,282,477,330" href="#tcl07" />
			<area shape="rect" coords="478,282,535,330" href="#tcl08" />
			<area shape="rect" coords="36,350,85,390" href="#eal01" />
			<area shape="rect" coords="30,391,89,417" href="#eal02" />
			<area shape="rect" coords="100,350,145,390" href="#eal03" />
			<area shape="rect" coords="146,350,189,390" href="#eal04" />
			<area shape="rect" coords="190,350,228,390" href="#eal05" />
			<area shape="rect" coords="229,350,280,390" href="#eal06" />
			<area shape="rect" coords="281,350,325,390" href="#eal07" />
			<area shape="rect" coords="326,350,388,387" href="#eal08" />
			<area shape="rect" coords="332,388,386,417" href="#eal09" />
			<area shape="rect" coords="389,350,444,390" href="#eal10" />
			<area shape="rect" coords="445,350,493,390" href="#eal11" />
			<area shape="rect" coords="494,350,550,390" href="#eal12" />
			<area shape="rect" coords="551,350,602,390" href="#eal13" />
			<area shape="rect" coords="603,350,655,390" href="#eal14" />
			<area shape="rect" coords="40,418,87,465" href="#wrl01" />
			<area shape="rect" coords="88,418,134,465" href="#wrl02" />
			<area shape="rect" coords="135,418,189,465" href="#wrl03" />
			<area shape="rect" coords="190,418,236,465" href="#wrl04" />
			<area shape="rect" coords="237,418,288,465" href="#wrl05" />
			<area shape="rect" coords="289,418,347,465" href="#wrl06" />
			<area shape="rect" coords="348,418,405,465" href="#wrl07" />
			<area shape="rect" coords="407,418,456,465" href="#wrl08" />
			<area shape="rect" coords="457,418,502,465" href="#wrl09" />
			<area shape="rect" coords="503,418,547,465" href="#wrl10" />
			<area shape="rect" coords="548,418,607,465" href="#wrl11" />
			<area shape="rect" coords="608,418,656,465" href="#wrl12" />
			<area shape="rect" coords="105,482,153,535" href="#mol01" />
			<area shape="rect" coords="154,482,210,535" href="#mol02" />
			<area shape="rect" coords="211,482,261,535" href="#mol03" />
			<area shape="rect" coords="262,482,309,535" href="#mol04" />
			<area shape="rect" coords="310,482,369,535" href="#mol05" />
			<area shape="rect" coords="370,482,429,535" href="#mol06" />
			<area shape="rect" coords="430,482,481,535" href="#mol07" />
			<area shape="rect" coords="482,482,537,535" href="#mol08" />
			<area shape="rect" coords="538,482,591,535" href="#mol09" />
		</map>
	</div>
</div>
