<?php
 $translation_array=GMSC_Translation::get_translation()
?>
<div id="map"></div>
<!-- Replace the value of the key parameter with your own API key. -->

<div class="jumbotron" style="margin-top:30px; font-size:1.3em; font-weight:bold;">
	<a class="btn btn-large btn-success" href="javascript:void(0);" onclick="javascript:introJs().start();">
		<?php echo $translation_array['open_tutorial'] ?>
	</a>
</div>

<div style="margin-top:30px;">
	<i class="fas fa-map-marker-alt custom-marker-alt animated infinite bounce" style="margin-left:5%;animation-duration: 5s;margin-top:30px;"></i>
	<input data-step="1" data-intro="<?php echo $translation_array['input_ship_start_point_tutorial'] ?>" id="origin-input" class="controls oriplaceinput" type="text"
		   placeholder="<?php echo $translation_array['input_ship_start_point_placeholder'] ?>">
	<i class="fas fa-map-marker-alt custom-marker-alt animated infinite bounce" style="margin-left:5%;animation-duration: 5s;margin-top:30px;"></i>
	<input data-step="2" data-intro="<?php echo $translation_array['input_ship_end_point_tutorial'] ?>"" id="destination-input" class="controls destninput" type="text"
		   placeholder="<?php echo $translation_array['input_ship_end_point_placeholder'] ?>">
</div>

<div class="resultdiv"><i class="fas fa-truck animated infinite pulse" style="color:#227700;"></i>&nbsp;&nbsp;估計運送價格&nbsp;:&nbsp;<span data-step="3" data-intro="<?php echo $translation_array['ship_price_tutorial'] ?>" class="estimateprice shadow">?</span>&nbsp;&nbsp;<?php echo $translation_array['dollar'] ?></div>

<br>
<br>
<form id="googleMapOrderForm" style="font-family:微軟正黑體;font-size:1.3em;padding:30px;font-weight:bold;" data-step="4" data-intro="<?php echo $translation_array['send_order_tutorial'] ?>">
	<div><?php echo $translation_array['start_point'] ?>&nbsp;&nbsp;:&nbsp;&nbsp;<span class="begspan"></span><br><br><?php echo $translation_array['end_point'] ?>&nbsp;&nbsp;:&nbsp;&nbsp;<span class="endspan"></span></div>
	<br>
	<div><?php echo $translation_array['ship_price'] ?>&nbsp;&nbsp;:&nbsp;&nbsp;$<span class="pricespan"></span></div>
	<br>	
	<span><?php echo $translation_array['ship_order_name'] ?>&nbsp;&nbsp;:&nbsp;&nbsp;</span><input type="text" id="name" name="name" style="width:300px;display:inline-block;font-size:1.1em;">
	<span class="phonespan"><?php echo $translation_array['phone_num'] ?>&nbsp;&nbsp;:&nbsp;&nbsp;</span><input type="text" id="phone" name="phone" style="width:300px;display:inline-block;font-size:1.1em;">
	<br>
	<button id="sendCustomShipOrder" type="button" style="float:right;"><?php echo $translation_array['send_order'] ?></button>
	<br>
</form>
<div id="resultdiv"></div>