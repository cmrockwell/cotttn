<?php
include_once('../../classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("Chris Rockwell");
echo $IPage->style('../../css/main.css');
?>
<script type="text/javascript" src="swfobject.js"> </script>
<script type="text/javascript">			
	var swfVersionStr = "10.2.153";
	var xiSwfUrlStr = "";
	var flashvars = {};
	var params = {};
	params.quality = "high";
	params.bgcolor = "#d6d6d6";
	params.play = "true";
	params.loop = "false";
	params.wmode = "direct";
	params.scale = "showall";
	params.menu = "false";
	params.devicefont = "true";
	params.salign = "";
	params.allowscriptaccess = "sameDomain";
	var attributes = {};
	attributes.id = "DateWheelClassic_2";
	attributes.name = "DateWheelClassic_2";
	attributes.align = "middle";
	swfobject.createCSS("html", "height:100%; background-color: #d6d6d6;");
	swfobject.createCSS("body", "margin:0; padding:0; overflow:hidden; height:100%;");
	swfobject.embedSWF(
		"DateWheelClassic_2.swf", "flashContent",
		"360", "600",
		swfVersionStr, xiSwfUrlStr,
		flashvars, params, attributes);
</script>
</head>
<body>
<div id="wrapper">
    <?php echo $IPage->branding(); ?>
	<?php echo $IPage->navBar('apps',3); ?>
<div id="content">
   <?php echo $IPage->localNavPort('dwc'); ?>
   
   <div id="rightside">       			      			
    
    <div class="code_example grid4">
		<h3>  Date Wheel Classic   </h3>      				       		
		<p> This app was specificly designed for the Adobe AIR runtime. It is available through Google Play for Android.  
			The page contains an embedded flash version of the application. </p>
		<a class="button" target="none" href="https://play.google.com/store/apps/details?id=air.DateWheelClassic&hl=en">See on Google Play</a>
	</div>
       		
	<div id="flashContent" class="code_example grid4">
			<a href="http://www.adobe.com/go/getflash">
				<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
			</a>
			<p>This page requires Flash Player version 10.2.153 or higher.</p>
	</div>
	</div> <!--end rightside-->
</div><!-- End content -->
<?php echo $IPage->footer(); ?> 
</div><!-- End wrapper -->	
</body>
</html>