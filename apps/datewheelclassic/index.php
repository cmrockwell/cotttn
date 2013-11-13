<?php
include_once('../../classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("Chris Rockwell");
?>
<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
<?php echo $IPage->style('../../css/main.css'); ?>
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

	swfobject.embedSWF(
		"DateWheelClassic_2.swf", "flashContent",
		"360", "600",
		swfVersionStr, xiSwfUrlStr,
		flashvars, params, attributes);
</script>
<script src="../../lib/jquery.js"> </script>
<script> 
	$(function(){		
		$('#dwc-sb').addClass('active');
		$('#flashContent')..addClass("code_example grid4");
	});
</script>
</head>

<body>
<div id="wrapper">
    <?php echo $IPage->branding('c o t t t n | <span>date wheel classic </span>'); ?>
	
	<div class="container-fluid">
		<?php echo $IPage->navBar('apps', 3); ?>
		<div class="row-fluid">
	      	<?php echo $IPage->stdLocalNav(3); ?>
			<div class="span9">
				<div class="hero-unit">
					
					<h2><strong>date wheel </strong> a timeless classic</h2>
					<p> This app was specificly designed for the Adobe AIR runtime. It is available through Google Play for Android.  
						The page contains an embedded flash version of the application. </p>
					<br>
		            <p><a href="https://play.google.com/store/apps/details?id=air.DateWheelClassic" 
								class="btn btn-primary btn-large">See on Google Play »</a> </p>
					
					<div id="flashContent" >
						
						<p>This demo requires Flash Player version 10.2.153 or higher.
							Or try opening the page in Chrome</p>
					</div>
			
				</div>
			</div>
		</div>	
   </div>
<?php echo $IPage->footer(); ?>    
</div>    
</body>    
</html>
