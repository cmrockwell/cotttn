<?php
include_once('classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("Chris Rockwell");
echo $IPage->style();

?>
</head>
<body>
<div id="wrapper">
    <?php echo $IPage->branding(); ?>
	<?php echo $IPage->navBar('home'); ?>
<div id="content">
   <?php echo $IPage->headerText("UX | Site Structure");?>
	<h3> Projects </h3>
	<ul> 
		<li> <a href="review/">Review</a></li>
		<li> <a href="mortgage/">PHP JS Mortgage Calculator</a></li>
		<li> <a href="ajax/">AJAX Author Lookup</a></li>
		<li> <a href="dragndrop">Drag and Drop </a></li>
		<li> <a href="animation">Animation</a></li>
	</ul>
</div><!-- End content -->
</div><!-- End wrapper -->	
</body>
</html>