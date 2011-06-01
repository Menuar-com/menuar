<style type="text/css">
#mu-region-select li { list-style: none; display: block; border: 1px solid #C63; text-align: center; padding: 5px; margin: 2px; cursor: pointer;}
#mu-region-select #mu-region-select-stage1 { width: 200px; float: left;}
#mu-region-select #mu-region-select-stage2 { width: 200px; float: left;}
#mu-region-select #mu-region-select-stage3 { width: 200px; float: left;}

#mu-region-select #mu-region-select-stage2 ul { display: none;}
#mu-region-select #mu-region-select-stage3 ul {display: none;}
</style>
<script language="javascript">
$(document).ready(function(){
	$('.mu-region-stage1-item').mouseover(function(){
		var parentid = $(this).attr('regid');
		$('#mu-region-select-stage2 ul').hide();
		$('#mu-region-select-stage3 ul').hide();
		$('#mu-region-select-stage2 ul[parentid=' + parentid + ']').show();
	});
	$('.mu-region-stage2-item').mouseover(function(){
		var parentid = $(this).attr('regid');
		$('#mu-region-select-stage3 ul').hide();
		$('#mu-region-select-stage3 ul[parentid=' + parentid + ']').show();
	});
});
</script>
<div id="mu-region-select">
	<div id="mu-region-select-stage1">
		<li class="mu-region-stage1-item" regid="0">中西區</li>
		<li class="mu-region-stage1-item" regid="5">灣仔區</li>
		<li class="mu-region-stage1-item" regid="16">港島東南</li>
		<li class="mu-region-stage1-item" regid="31">深水埗區</li>
		<li class="mu-region-stage1-item" regid="45">油尖旺</li>
		<li class="mu-region-stage1-item" regid="62">九龍城區</li>
		<li class="mu-region-stage1-item" regid="69">黃大仙區</li>
		<li class="mu-region-stage1-item" regid="76">觀塘區</li>
		<li class="mu-region-stage1-item" regid="90">新界西</li>
		<li class="mu-region-stage1-item" regid="116">沙田區</li>
		<li class="mu-region-stage1-item" regid="132">北區大埔</li>
		<li class="mu-region-stage1-item" regid="147">西貢離島</li>
		<div class="clear"></div>
	</div>
	<div id="mu-region-select-stage2">
		<ul parentid="0">
			<li class="mu-region-stage2-item" regid="1">上環</li>
			<li class="mu-region-stage2-item" regid="2">中環</li>
			<li class="mu-region-stage2-item" regid="3">西環</li>
			<li class="mu-region-stage2-item" regid="4">金鐘</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="5">
			<li class="mu-region-stage2-item" regid="6">灣仔</li>
			<li class="mu-region-stage2-item" regid="10">跑馬地</li>
			<li class="mu-region-stage2-item" regid="11">銅鑼灣</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="16">
			<li class="mu-region-stage2-item" regid="17">北角</li>
			<li class="mu-region-stage2-item" regid="18">港島東南</li>
			<li class="mu-region-stage2-item" regid="19">天后</li>
			<li class="mu-region-stage2-item" regid="20">太古</li>
			<li class="mu-region-stage2-item" regid="21">柴灣</li>
			<li class="mu-region-stage2-item" regid="22">炮台山</li>
			<li class="mu-region-stage2-item" regid="23">筲箕灣</li>
			<li class="mu-region-stage2-item" regid="24">華富村</li>
			<li class="mu-region-stage2-item" regid="25">西灣河</li>
			<li class="mu-region-stage2-item" regid="26">香港仔</li>
			<li class="mu-region-stage2-item" regid="30">鰂魚涌</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="31">
			<li class="mu-region-stage2-item" regid="32">深水埗</li>
			<li class="mu-region-stage2-item" regid="35">石硤尾</li>
			<li class="mu-region-stage2-item" regid="36">美孚</li>
			<li class="mu-region-stage2-item" regid="39">荔枝角</li>
			<li class="mu-region-stage2-item" regid="42">長沙灣</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="45">
			<li class="mu-region-stage2-item" regid="46">佐敦</li>
			<li class="mu-region-stage2-item" regid="49">大角咀</li>
			<li class="mu-region-stage2-item" regid="50">太子</li>
			<li class="mu-region-stage2-item" regid="51">尖沙咀</li>
			<li class="mu-region-stage2-item" regid="56">旺角</li>
			<li class="mu-region-stage2-item" regid="59">油麻地</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="62">
			<li class="mu-region-stage2-item" regid="63">九龍城</li>
			<li class="mu-region-stage2-item" regid="64">九龍塘</li>
			<li class="mu-region-stage2-item" regid="65">何文田</li>
			<li class="mu-region-stage2-item" regid="66">土瓜灣</li>
			<li class="mu-region-stage2-item" regid="67">紅磡</li>
			<li class="mu-region-stage2-item" regid="68">黃埔</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="69">
			<li class="mu-region-stage2-item" regid="70">彩虹邨</li>
			<li class="mu-region-stage2-item" regid="71">彩雲邨</li>
			<li class="mu-region-stage2-item" regid="72">慈雲山</li>
			<li class="mu-region-stage2-item" regid="73">新蒲崗</li>
			<li class="mu-region-stage2-item" regid="74">鑽石山</li>
			<li class="mu-region-stage2-item" regid="75">黃大仙</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="76">
			<li class="mu-region-stage2-item" regid="77">九龍灣</li>
			<li class="mu-region-stage2-item" regid="81">油塘</li>
			<li class="mu-region-stage2-item" regid="82">秀茂坪</li>
			<li class="mu-region-stage2-item" regid="83">藍田</li>
			<li class="mu-region-stage2-item" regid="86">觀塘</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="90">
			<li class="mu-region-stage2-item" regid="91">元朗</li>
			<li class="mu-region-stage2-item" regid="97">天水圍</li>
			<li class="mu-region-stage2-item" regid="102">屯門</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="116">
			<li class="mu-region-stage2-item" regid="117">大圍</li>
			<li class="mu-region-stage2-item" regid="120">沙田</li>
			<li class="mu-region-stage2-item" regid="125">火炭</li>
			<li class="mu-region-stage2-item" regid="128">馬鞍山</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="132">
			<li class="mu-region-stage2-item" regid="133">上水</li>
			<li class="mu-region-stage2-item" regid="137">大埔</li>
			<li class="mu-region-stage2-item" regid="142">粉嶺</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="147">
			<li class="mu-region-stage2-item" regid="148">坑口</li>
			<li class="mu-region-stage2-item" regid="149">將軍澳</li>
			<li class="mu-region-stage2-item" regid="150">新都城</li>
			<li class="mu-region-stage2-item" regid="151">東涌</li>
			<li class="mu-region-stage2-item" regid="152">西貢市</li>
			<li class="mu-region-stage2-item" regid="153">調景嶺</li>
		</ul>
		<div class="clear"></div>
	</div>
	<div id="mu-region-select-stage3">
		<ul parentid="6">
			<li class="mu-region-stage3-item" regid="7">修頓</li>
			<li class="mu-region-stage3-item" regid="8">灣仔道</li>
			<li class="mu-region-stage3-item" regid="9">駱克道</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="11">
			<li class="mu-region-stage3-item" regid="12">利園山道</li>
			<li class="mu-region-stage3-item" regid="13">糖街</li>
			<li class="mu-region-stage3-item" regid="14">銅鑼灣廣場</li>
			<li class="mu-region-stage3-item" regid="15">銅鑼灣道</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="26">
			<li class="mu-region-stage3-item" regid="27">鴨脷洲</li>
			<li class="mu-region-stage3-item" regid="28">香港仔中心</li>
			<li class="mu-region-stage3-item" regid="29">鴨脷洲</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="32">
			<li class="mu-region-stage3-item" regid="33">西九龍中心</li>
			<li class="mu-region-stage3-item" regid="34">黃金</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="36">
			<li class="mu-region-stage3-item" regid="37">盈暉臺</li>
			<li class="mu-region-stage3-item" regid="38">美孚新村</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="42">
			<li class="mu-region-stage3-item" regid="43">荔枝角道</li>
			<li class="mu-region-stage3-item" regid="44">青山道</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="46">
			<li class="mu-region-stage3-item" regid="47">南京街</li>
			<li class="mu-region-stage3-item" regid="48">寶靈街</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="51">
			<li class="mu-region-stage3-item" regid="52">加拿芬道</li>
			<li class="mu-region-stage3-item" regid="53">尖東</li>
			<li class="mu-region-stage3-item" regid="54">樂道</li>
			<li class="mu-region-stage3-item" regid="55">金巴利道</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="56">
			<li class="mu-region-stage3-item" regid="57">上海街</li>
			<li class="mu-region-stage3-item" regid="58">通菜街</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="59">
			<li class="mu-region-stage3-item" regid="60">窩打老道</li>
			<li class="mu-region-stage3-item" regid="61">駿發花園</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="77">
			<li class="mu-region-stage3-item" regid="78">宏照道</li>
			<li class="mu-region-stage3-item" regid="79">淘大</li>
			<li class="mu-region-stage3-item" regid="80">麗晶花園</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="83">
			<li class="mu-region-stage3-item" regid="84">匯景花園</li>
			<li class="mu-region-stage3-item" regid="85">麗港城</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="86">
			<li class="mu-region-stage3-item" regid="87">巧明街</li>
			<li class="mu-region-stage3-item" regid="88">裕民坊</li>
			<li class="mu-region-stage3-item" regid="89">開源道</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="91">
			<li class="mu-region-stage3-item" regid="92">元朗廣場</li>
			<li class="mu-region-stage3-item" regid="93">元朗舊墟</li>
			<li class="mu-region-stage3-item" regid="94">合益中心</li>
			<li class="mu-region-stage3-item" regid="95">大棠道</li>
			<li class="mu-region-stage3-item" regid="96">錦田</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="97">
			<li class="mu-region-stage3-item" regid="98">俊宏軒</li>
			<li class="mu-region-stage3-item" regid="99">新北江</li>
			<li class="mu-region-stage3-item" regid="100">銀座</li>
			<li class="mu-region-stage3-item" regid="101">頌富</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="102">
			<li class="mu-region-stage3-item" regid="103">兆康</li>
			<li class="mu-region-stage3-item" regid="104">友愛</li>
			<li class="mu-region-stage3-item" regid="105">大興</li>
			<li class="mu-region-stage3-item" regid="106">富健花園</li>
			<li class="mu-region-stage3-item" regid="107">屯門碼頭</li>
			<li class="mu-region-stage3-item" regid="108">山景</li>
			<li class="mu-region-stage3-item" regid="109">市中心</li>
			<li class="mu-region-stage3-item" regid="110">新墟</li>
			<li class="mu-region-stage3-item" regid="111">河田工業村</li>
			<li class="mu-region-stage3-item" regid="112">置樂</li>
			<li class="mu-region-stage3-item" regid="113">良田建生</li>
			<li class="mu-region-stage3-item" regid="114">藍地</li>
			<li class="mu-region-stage3-item" regid="115">蝴蝶美樂</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="117">
			<li class="mu-region-stage3-item" regid="118">大圍道</li>
			<li class="mu-region-stage3-item" regid="119">顯徑田心</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="120">
			<li class="mu-region-stage3-item" regid="121">新城市廣場</li>
			<li class="mu-region-stage3-item" regid="122">沙田圍</li>
			<li class="mu-region-stage3-item" regid="123">沙田第一城</li>
			<li class="mu-region-stage3-item" regid="124">瀝源邨</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="125">
			<li class="mu-region-stage3-item" regid="126">山尾街</li>
			<li class="mu-region-stage3-item" regid="127">銀禧花園</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="128">
			<li class="mu-region-stage3-item" regid="129">大水坑</li>
			<li class="mu-region-stage3-item" regid="130">新港城</li>
			<li class="mu-region-stage3-item" regid="131">烏溪沙</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="133">
			<li class="mu-region-stage3-item" regid="134">上水花園</li>
			<li class="mu-region-stage3-item" regid="135">彩園邨</li>
			<li class="mu-region-stage3-item" regid="136">石湖墟</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="137">
			<li class="mu-region-stage3-item" regid="138">大埔中心</li>
			<li class="mu-region-stage3-item" regid="139">大埔墟</li>
			<li class="mu-region-stage3-item" regid="140">太和邨</li>
			<li class="mu-region-stage3-item" regid="141">富善邨</li>
		</ul>
		<div class="clear"></div>
		<ul parentid="142">
			<li class="mu-region-stage3-item" regid="143">和合石</li>
			<li class="mu-region-stage3-item" regid="144">粉嶺中心</li>
			<li class="mu-region-stage3-item" regid="145">聯和墟</li>
			<li class="mu-region-stage3-item" regid="146">花都廣場</li>
		</ul>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>
