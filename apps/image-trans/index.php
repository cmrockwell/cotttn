<?php
include_once('../../classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("Chris Rockwell");
echo $IPage->style('../../css/main.css'); 
echo $IPage->style('styles/p1style.css'); 
?>

</head>
<body>
<div id="wrapper">
<?php echo $IPage->branding(); ?>
<?php echo $IPage->navBar('apps', 3); ?>

<div id="content">
   <?php echo $IPage->localNavPort('img'); ?>
   <div id="rightside">
	
	<div id="imageDiv">
		<div id="d1" class="image d1"></div>
		<div id="d2" class="image d2"></div>
		<div id="d3" class="image d3"></div>
		<div id="d4" class="image d4"></div>
		<div id="d5" class="image d5"></div>
	
		<div id="n1" class="nimage n1"></div>
		<div id="n2" class="nimage n2"></div>
		<div id="n3" class="nimage n3"></div>
		<div id="n4" class="nimage n4"></div>
		<div id="n5" class="nimage n5"></div>
	</div>
	<div>
		<button id="next"> Next Image </button>
	</div>
	</div> <!-- End rightside -->
</div><!-- End content -->
<?php echo $IPage->footer(); ?> 
</div><!-- End wrapper -->
<script type="text/javascript" src="js/core-event-listeners.js"></script>
<script type="text/javascript" src="js/core-ajax.js"></script>
<script type="text/javascript" src="js/animate.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>