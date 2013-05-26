<?php
include_once('../classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("Chris Rockwell");
echo $IPage->style('../css/main.css');
?>
</head>
<body>
<div id="wrapper">
    <?php echo $IPage->branding(); ?>
	<?php echo $IPage->navBar('apps',2); ?>
<div id="content">
	<?php echo $IPage->localNavPort('apps'); ?>
<div id="rightside">       			      			
       		
</div> <!--end rightside-->     

</div><!-- End content -->
<?php echo $IPage->footer(); ?> 
</div><!-- End wrapper -->	
</body>
</html>