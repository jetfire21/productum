
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Laminatrechner - (EN) R&G Faserverbundwerkstoffe GmbH</title>
<!-- <base href="http://www.r-g.de/"> -->
<base href="http://<?php echo $_SERVER['HTTP_HOST'];?>/wp-content/themes/productum/calc/">
<meta name="robots" content="index,follow">
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
<link rel="stylesheet" href="3bb01dbd511b.css">
<!-- <link rel="stylesheet" href="/calc/3bb01dbd511b-orig.css"> -->
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/jquery/core/1.11.3/jquery.min.js">\x3C/script>')</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if lt IE 9]><script src="plugins/html5shim/html5-HTML5SHIM.js"></script><![endif]-->
</head>
<body id="top" class="unix chrome webkit ch56 lang_en laminat">

<div id="main">
<div class="inside">

<!--<div class="mod_header">
  <a class="home_link" href="">R&G Website</a>
  <div class="links">
    <a href="en/contact.html" title="Contact">Contact</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="en/info/imprint.html" title="Imprint" target="_blank">Imprint</a>
  </div>
</div>-->
<div class="mod_article first last block" id="hauptspalte-48">


  <div class="mod_laminatrechner block">
<!-- indexer::stop -->

<form action="" id="tl_laminatrechner" method="post">
<div class="header">
<h1>R&amp;G Laminate Calculator</h1>
<p>http://www.r-g.de/laminatrechner</p>
</div>
<div class="formbody">
		<input type="hidden" name="FORM_SUBMIT" value="tl_laminatrechner" />
	<input type="hidden" name="REQUEST_TOKEN" value="7f403992b3b2f49c9597b4ba79e53cf7" />

	<div class="group first rhoFiber">
		<label>Fibre type</label>
		<div class="selection">
			<select name="rhoFiberSelect">
				<option value="*">(Insert own value)</option>
				<option value="glasfasern" data-value="2.6" selected="selected">Glass fibre - 2.6 g/cm³</option><option value="kohlefasern" data-value="1.77">Carbon fibre - 1.77 g/cm³</option><option value="aramidfasern" data-value="1.45">Aramid fibre - 1.45 g/cm³</option><option value="flachsfasern" data-value="1.35">Flax fibre - 1.35 g/cm³</option>			</select>
		</div>
		<div class="manual">
			<input type="text" name="rhoFiber" value="2.6" /><span class="unit"> g/cm³</span>
		</div>
	</div>
	<div class="group q">
		<label>Areal weight</label>
		<div class="selection" data-dependson="rhoFiberSelect">
						<select class="glasfasern" name="qSelect[glasfasern]">
				<option value="*">(Insert own value)</option>
				<optgroup label="Glass fabric" data-alias="glasgewebe"><option value="glasgewebe-25" data-value="25" selected="selected">25 g/m²</option><option value="glasgewebe-49" data-value="49">49  g/m²</option><option value="glasgewebe-50 &amp;#40;Panda&amp;#41;" data-value="50">50 g/m²</option><option value="glasgewebe-55" data-value="55">55 g/m²</option><option value="glasgewebe-80" data-value="80">80 g/m²</option><option value="glasgewebe-105" data-value="105">105 g/m²</option><option value="glasgewebe-108" data-value="108">108 g/m²</option><option value="glasgewebe-110" data-value="110">110 g/m²</option><option value="glasgewebe-162" data-value="163">163 g/m²</option><option value="glasgewebe-210" data-value="210">210 g/m²</option><option value="glasgewebe-220-UD" data-value="220">220 g/m² &#40;UD&#41;</option><option value="glasgewebe-280" data-value="280">280 g/m²</option><option value="glasgewebe-296" data-value="296">296 g/m²</option><option value="glasgewebe-390" data-value="390">390 g/m²</option><option value="glasgewebe-580" data-value="580">580 g/m²</option><option value="glasgewebe-600" data-value="600">600 g/m²</option></optgroup><optgroup label="Glass non-crimp fabric UD &#40;0°&#41;" data-alias="glasgelege-unidirektional"><option value="glasgelege-unidirektional-425" data-value="425">425 g/m²</option><option value="glasgelege-unidirektional-600" data-value="600">600 g/m²</option><option value="glasgelege-unidirektional-/950" data-value="950">950 g/m²</option><option value="glasgelege-unidirektional-/1210" data-value="1210">1210 g/m²</option></optgroup><optgroup label="Glass non-crimp fabric biaxial &#40;± 45°&#41;" data-alias="glasgelege-biaxial"><option value="glasgelege-multiaxial-311" data-value="311">311 g/m²</option><option value="glasgelege-multiaxial-430" data-value="430">430 g/m²</option><option value="glasgelege-biax-620" data-value="620">620 g/m²</option><option value="glasgelege-biax-988" data-value="988">988 g/m²</option></optgroup><optgroup label="Glass non-crimp fabric biaxial &#40;0°/± 90°&#41;" data-alias="glasgelege-biaxial &#40;0°/± 90°&#41;"><option value="glasgelege-biaxial-620" data-value="620">620 g/m²</option></optgroup><optgroup label="Glass non-crimp fabric triaxial &#40;0°/± 45°&#41;" data-alias="glasgelege-triaxial"><option value="glasgelege-multiaxial-600" data-value="600">600 g/m²</option><option value="glasgelege-multiaxial-830" data-value="830">830 g/m²</option><option value="glasgelege-triaxial-910" data-value="910">910 g/m²</option><option value="glasgelege-triaxial-1210" data-value="1210">1210 g/m²</option></optgroup><optgroup label="Glass non-crimp fabric quadraxial &#40;0°/+45°/90°/+45°&#41;" data-alias="glasgelege-quadaxial"><option value="glasgelege-multiaxial-620" data-value="620">620 g/m²</option><option value="glasgelege-triaxial-970" data-value="970">970 g/m²</option><option value="glasgelege-triaxial-1230" data-value="1230">1230 g/m²</option></optgroup><optgroup label="Non wovens" data-alias="glasmatte"><option value="glasmatte-30" data-value="30">30 g/m²</option><option value="glasmatte-225" data-value="225">225 g/m²</option><option value="glasmatte-300" data-value="300">300 g/m²</option><option value="glasmatte-450" data-value="450">450 g/m²</option><option value="M1-600" data-value="600">600 g/m² &#40;M1 Glass mat complex&#41;</option></optgroup>			</select>
						<select class="kohlefasern" name="qSelect[kohlefasern]">
				<option value="*">(Insert own value)</option>
				<optgroup label="Carbon fabric" data-alias="kohlegewebe"><option value="kohlegewebe-65" data-value="65" selected="selected">65 g/m²</option><option value="kohlegewebe-80" data-value="80">80 g/m²</option><option value="kohlegewebe-93" data-value="93">93 g/m²</option><option value="kohlegewebe-160" data-value="160">160 g/m²</option><option value="kohlegewebe-200" data-value="200">200 g/m²</option><option value="kohlegewebe-205" data-value="205">205 g/m²</option><option value="kohlegewebe-240" data-value="240">240 g/m²</option><option value="kohlegewebe-245" data-value="245">245 g/m²</option><option value="kohlegewebe-285" data-value="285">285 g/m²</option><option value="kohlegewebe-370" data-value="370">370 g/m²</option><option value="kohlegewebe-400" data-value="400">400 g/m²</option><option value="kohlegewebe-500" data-value="500">500 g/m²</option><option value="kohlegewebe-600" data-value="600">600 g/m²</option><option value="kohlegewebe-645" data-value="645">645 g/m²</option><option value="kohlegewebe-800" data-value="800">800 g/m²</option></optgroup><optgroup label="Carbon fabric Spread Tow" data-alias="kohlegewebe-spread-tow"><option value="kohlegewebe-spread-tow-46" data-value="46">46 g/m² Samurai SY-12k &#40;HM&#41;</option><option value="kohlegewebe-spread-tow-61" data-value="61">61 g/m² Samurai SY-1k &#40;HT&#41;</option><option value="kohlegewebe-spread-tow-62" data-value="62">62 g/m² A-Spread &#40;IM&#41;</option><option value="kohlegewebe-spread-tow-63" data-value="63">63 g/m² Samurai SY &#40;HT&#41;</option><option value="kohlegewebe-spread-tow-80" data-value="80">80 g/m² TeXtreme</option><option value="kohlegewebe-spread-tow-400" data-value="400">400 g/m²Spread tow uni &#40;50k&#41;</option></optgroup><optgroup label="Carbon non-crimp fabric UD &#40;0°&#41;" data-alias="kohlegelege-unidirektional"><option value="kohlegelege-unidirektional-30" data-value="30">30 g/m²</option><option value="kohlegelege-unidirektional-50" data-value="50">50 g/m²</option><option value="kohlegelege-unidirektional-80" data-value="80">80 g/m²</option><option value="kohlegelege-unidirektional-100" data-value="100">100 g/m² &#40;HM&#41;</option><option value="kohlegelege-unidirektional-125" data-value="125">125 g/m²</option><option value="kohlegelege-unidirektional-134" data-value="134">134 g/m²</option><option value="kohlegewebe-140-UD" data-value="140">140 g/m² &#40;UD&#41;</option><option value="kohlegelege-unidirektional-150" data-value="150">150 g/m²</option><option value="kohlegelege-unidirektional-154" data-value="154">154 g/m² &#40;IM&#41;</option><option value="kohlegelege-unidirektional-194" data-value="194">194 g/m² &#40;IMS / HTS&#41;</option><option value="kohlegelege-unidirektional-200" data-value="200">200 g/m²</option><option value="kohlegewebe-218 &amp;#40;UD&amp;#41;" data-value="218">218 g/m² &#40;UD&#41;</option><option value="kohlegelege-unidirektional-250 UHM" data-value="250">250 g/m² &#40;UHM&#41;</option><option value="kohlegelege-unidirektional-268 UHM" data-value="268">268 g/m² &#40;IMS / HTS&#41;</option><option value="kohlegewebe-270-UD" data-value="270">270 g/m² &#40;UD&#41;</option><option value="kohlegelege-unidirektional-400" data-value="400">400 g/m² &#40;Spread tow 50k&#41;</option><option value="kohlegewebe-540-UD" data-value="540">540 g/m² &#40;UD&#41;</option><option value="kohlegewebe-620-UD" data-value="620">620 g/m² &#40;UD&#41;</option></optgroup><optgroup label="Carbon non-crimp fabric biaxial &#40;± 45°&#41;" data-alias="kohlegelege-biaxial"><option value="kohlegelege-biaxial-20" data-value="20">20 g/m²</option><option value="kohlegelege-biaxial-29" data-value="29">29 g/m²</option><option value="kohlegelege-biaxial-30" data-value="30">30 g/m²</option><option value="kohlegelege-biaxial-39" data-value="39">39 g/m²</option><option value="kohlegelege-biaxial-40" data-value="40">40 g/m²</option><option value="kohlegelege-biaxial-80" data-value="80">80 g/m² &#40;50k&#41;</option><option value="kohlegelege-biaxial-100 &amp;#40;50k&amp;#41;" data-value="100">100 g/m² &#40;50k&#41;</option><option value="kohlegelege-biaxial-200 &amp;#40;12k&amp;#41;" data-value="200">200 g/m² &#40;12k&#41;</option><option value="kohlegelege-biaxial-268" data-value="268">268 g/m²</option><option value="kohlegelege-biaxial-300 &amp;#40;24k&amp;#41;" data-value="300">300 g/m² &#40;24k&#41;</option><option value="kohlegelege-biaxial-400 &amp;#40;24k&amp;#41;" data-value="400">400 g/m² &#40;24k&#41;</option><option value="kohlegelege-biaxial-411" data-value="411">411 g/m²</option><option value="kohlegelege-biaxial-600 &amp;#40;24k&amp;#41;" data-value="600">600 g/m² &#40;24k&#41;</option></optgroup><optgroup label="Carbon non-wovens" data-alias="kohlefaservlies"><option value="kohlefaservlies-2" data-value="2">2 g/m²</option><option value="kohlefaservlies-4" data-value="4">4 g/m²</option><option value="kohlefaservlies-8" data-value="8">8 g/m²</option><option value="kohlefaservlies-20" data-value="20">20 g/m²</option><option value="kohlefaservlies-100" data-value="100">100 g/m²</option></optgroup>			</select>
						<select class="aramidfasern" name="qSelect[aramidfasern]">
				<option value="*">(Insert own value)</option>
				<optgroup label="Aramid fabric" data-alias="aramidgewebe"><option value="aramidgewebe-36" data-value="36" selected="selected">36 g/m²</option><option value="aramidgewebe-61" data-value="61">61 g/m²</option><option value="aramidgewebe-110" data-value="110">110 g/m²</option><option value="aramidgewebe-170" data-value="170">170 g/m²</option><option value="aramidgewebe-300" data-value="300">300 g/m²</option></optgroup>			</select>
						<select class="flachsfasern" name="qSelect[flachsfasern]">
				<option value="*">(Insert own value)</option>
				<optgroup label="Flax fabric" data-alias="flachsgewebe"><option value="flachsgewebe-100" data-value="100" selected="selected">100 g/m²</option><option value="flachsgewebe-200" data-value="200">200 g/m²</option></optgroup><optgroup label="Flax non-crimp fabric UD &#40;0°&#41;" data-alias="flachsgelege-unidirektional"><option value="flachsgelege-unidirektional-100" data-value="100">100 g/m²</option><option value="flachsgelege-unidirektional-120" data-value="120">120 g/m²</option><option value="flachsgelege-unidirektional-300" data-value="300">300 g/m²</option></optgroup><optgroup label="Flax non-crimp fabric biaxial  &#40;±45°&#41;" data-alias="flachsgelege-biaxial"><option value="flachsgelege-biaxial-350" data-value="350">350 g/m²</option><option value="flachsgelege-biaxial-600" data-value="600">600 g/m²</option></optgroup>			</select>
					</div>
		<div class="manual">
			<input type="text" name="q" value="25" /><span class="unit"> g/m²</span>
		</div>
	</div>
	<div class="group phi">
		<label>Fibre volume fraction (Vf)</label>
		<div class="selection">
						<select class="volumenanteile" name="phiSelect[volumenanteile]">
				<option value="*">(Insert own value)</option>
				<option value="handlaminieren-35" data-value="35" selected="selected">Hand lay-up: 35%</option><option value="vakuumpressen-40" data-value="40">Vacuum bagging: 40 %</option><option value="vakuuminfusion-50" data-value="50" data-footnote="*) Additional resin consumption of flow media + peel ply 450-600 g/m² &amp;#40;resin feed line must be calculated separately&amp;#41;.">Vacuum resin infusion: 50 % *</option>			</select>
						<select class="volumenanteile-unidirektional" name="phiSelect[volumenanteile-unidirektional]">
				<option value="*">(Insert own value)</option>
				<option value="handlaminieren-40" data-value="40" selected="selected">Hand lay-up: 40 %</option><option value="vakuumpressen-50" data-value="50">Vacuum bagging: 50 %</option><option value="vakuuminfusion-60" data-value="60" data-footnote="*) Additional resin consumption of flow media + peel ply 450-600 g/m² &amp;#40;resin feed line must be calculated separately&amp;#41;.">Vacuum resin infusion: 60 % *</option>			</select>
						<select class="volumenanteile-multiaxial" name="phiSelect[volumenanteile-multiaxial]">
				<option value="*">(Insert own value)</option>
				<option value="handlaminieren-35.18" data-value="35" selected="selected">Hand lay-up: 35 %</option><option value="vakuumpressen-45" data-value="45">Vacuum bagging: 45 %</option><option value="vakuuminfusion-55" data-value="55" data-footnote="*) Additional resin consumption of flow media + peel ply 450-600 g/m² &amp;#40;resin feed line must be calculated separately&amp;#41;.">Vacuum resin infusion: 55 % *</option>			</select>
						<select class="volumenanteile-matten-vlies" name="phiSelect[volumenanteile-matten-vlies]">
				<option value="*">(Insert own value)</option>
				<option value="handlaminieren-15" data-value="15" selected="selected">Hand lay-up &#40;non wovens&#41;: 15 %</option>			</select>
					</div>
		<div class="manual">
			<input type="text" name="phi" value="35" /><span class="unit"> %</span>
		</div>
	</div>
	<div class="group d">
		<div class="toggler">
			<span class="nob"></span>
			<input class="layers" type="radio" name="mode" value="layers" checked="checked"/>
			<input class="thickness" type="radio" name="mode" value="thickness" />
		</div>
		<ul>
			<li class="layers first">
				<label>Number of layers</label><div class="manual">
					<input type="text" name="n" value="1" /><span class="unit"> Layers</span>
				</div>
			</li>
			<li class="thickness last disabled">
				<label>Laminate thickness</label><div class="manual">
					<input disabled="disabled" type="text" name="d" value="1" /><span class="unit"> mm</span>
				</div>
			</li>
		</ul>
	</div>
	<div class="group width">
		<label>Width</label>
		<div class="manual">
			<input type="text" name="width" value="1000" /><span class="unit"> mm</span>
		</div>
	</div>
	<div class="group length">
		<label>Length</label>
		<div class="manual">
			<input type="text" name="length" value="1000" /><span class="unit"> mm</span>
		</div>
	</div>
	<div class="group last rhoResin">
		<label>Resin type</label>
		<div class="selection">
			<select name="rhoResinSelect">
				<option value="*">(Insert own value)</option>
				<option value="epoxydharz" data-value="1.15" selected="selected">Epoxydharz - 1.15 g/cm³</option><option value="polyesterharz" data-value="1.1">Polyesterharz - 1.1 g/cm³</option>			</select>
		</div>
		<div class="manual">
			<input type="text" name="rhoResin" value="" /><span class="unit"> g/cm³</span>
		</div>
	</div>

</div>
<div class="footer">
	<div class="submit_container"><input type="submit" class="submit" value="berechnen"></div>

	<div class="paperslot">
		<span class="slotshadow"></span>
		<div class="paper">
			<div class="inside"></div>
		</div>
	</div>

<!-- ajax return -->
<!-- <div class="paperslot">
		<span class="slotshadow"></span>
		<div class="paper" style="top: 0px; height: 246px;">
			<div class="inside">
				<div class="print">print</div>
					<h3>Result:</h3>
					<table class="result"><tbody><tr class="even first">
					<td class="col_0">Number of layers</td>
					<td class="col_1">2 Layers</td>
				</tr><tr class="odd">
					<td class="col_0">Laminate thickness</td>
					<td class="col_1">0.30 mm</td>
				</tr><tr class="even">
					<td class="col_0">Fibre reinforcement surface area</td>
					<td class="col_1">2.00 m²</td>
				</tr><tr class="odd">
					<td class="col_0">Fibre reinforcement gross weight</td>
					<td class="col_1">200 g</td>
				</tr><tr class="even">
					<td class="col_0">Resin quantity</td>
					<td class="col_1">170 g</td>
				</tr><tr class="odd">
					<td class="col_0">Laminate weight</td>
					<td class="col_1">370 g</td>
				</tr><tr class="even">
					<td class="col_0">Fibre content (weight) </td>
					<td class="col_1">54.0 %</td>
				</tr><tr class="odd">
					<td class="col_0">Fibre content (volume)</td>
					<td class="col_1">50.0 %</td>
				</tr></tbody></table>
				<p>Ohne Gewähr</p>			
			</div>
		</div>
	</div> -->
<!-- ajax return -->

	<a class="smd" target="_blank" href="http://www.schmidt24.de/">design: www.smd.ag</a>
</div>
</form>

<!-- indexer::continue  -->
</div>


</div>

</div>

<div id="clear"></div>
</div>

<!-- foot::start -->

 <script>
 // setTimeout(function(){var e=function(e,t){try{var n=new XMLHttpRequest}catch(r){return}n.open("GET",e,!0),n.onreadystatechange=function(){this.readyState==4&&this.status==200&&typeof t=="function"&&t(this.responseText)},n.send()},t="system/cron/cron.";e(t+"txt",function(n){parseInt(n||0)<Math.round(+(new Date)/1e3)-86400&&e(t+"php")})},5e3);

 setTimeout(function() {
 	// console.log("this.responseText="+this.responseText);
 	console.log(this);
 	// for (var k in this) {
 	// 	console.log(k+"-"+this[k]);
 	// }

     var e = function(e, t) {
             try {
                 var n = new XMLHttpRequest
             } catch (r) {
                 return
             }
             n.open("GET", e, !0), n.onreadystatechange = function() {
                 this.readyState == 4 && this.status == 200 && typeof t == "function" && t(this.responseText)
             }, n.send()
         },
         t = "system/cron/cron.";
     e(t + "txt", function(n) {
         parseInt(n || 0) < Math.round(+(new Date) / 1e3) - 86400 && e(t + "php")
     })
 }, 5e3); 

 console.log(e);

 </script>

<!--
 <script src="http://graphite-pro.dev/calc/jquery.formdefaults.js"></script>
<script src="http://graphite-pro.dev/calc/scripts.js"></script>
 -->
<script src="jquery.formdefaults.js"></script>
<script src="scripts.js"></script>
<!-- foot::end -->

</body>
</html>
<script type="text/javascript">
// r-g.de/design/laminatrechner/images/
// http://r-g.de/system/cron/cron.txt
// 1493814300

/*
form data

FORM_SUBMIT:tl_laminatrechner
REQUEST_TOKEN:7f403992b3b2f49c9597b4ba79e53cf7
rhoFiberSelect:flachsfasern
rhoFiber:1.35
qSelect%5Bglasfasern%5D:glasgewebe-25
qSelect%5Bkohlefasern%5D:kohlegewebe-65
qSelect%5Baramidfasern%5D:aramidgewebe-36
qSelect%5Bflachsfasern%5D:flachsgewebe-100
q:100
phiSelect%5Bvolumenanteile%5D:vakuuminfusion-50
phiSelect%5Bvolumenanteile-unidirektional%5D:handlaminieren-40
phiSelect%5Bvolumenanteile-multiaxial%5D:handlaminieren-35.18
phiSelect%5Bvolumenanteile-matten-vlies%5D:handlaminieren-15
phi:50
mode:layers
n:2
width:1000
length:1000
rhoResinSelect:epoxydharz
rhoResin:1.15
*/

/*
FORM_SUBMIT:tl_laminatrechner
REQUEST_TOKEN:4f5d9bea3ec0312227ddf0f6227093f9
rhoFiberSelect:glasfasern
rhoFiber:2.6
qSelect[glasfasern]:glasgewebe-25
qSelect[kohlefasern]:kohlegewebe-65
qSelect[aramidfasern]:aramidgewebe-36
qSelect[flachsfasern]:flachsgewebe-100
q:25
phiSelect[volumenanteile]:handlaminieren-35
phiSelect[volumenanteile-unidirektional]:handlaminieren-40
phiSelect[volumenanteile-multiaxial]:handlaminieren-35.18
phiSelect[volumenanteile-matten-vlies]:handlaminieren-15
phi:35
mode:layers
n:1
width:1000
length:1000
rhoResinSelect:epoxydharz
rhoResin:1.15
*/

/*
FORM_SUBMIT:tl_laminatrechner
REQUEST_TOKEN:4f5d9bea3ec0312227ddf0f6227093f9
rhoFiberSelect:glasfasern
rhoFiber:2.6
qSelect[glasfasern]:glasgewebe-49
qSelect[kohlefasern]:kohlegewebe-65
qSelect[aramidfasern]:aramidgewebe-36
qSelect[flachsfasern]:flachsgewebe-100
q:49
phiSelect[volumenanteile]:handlaminieren-35
phiSelect[volumenanteile-unidirektional]:handlaminieren-40
phiSelect[volumenanteile-multiaxial]:handlaminieren-35.18
phiSelect[volumenanteile-matten-vlies]:handlaminieren-15
phi:35
mode:layers
n:2
width:1000
length:1000
rhoResinSelect:epoxydharz
rhoResin:1.15
*/
</script>