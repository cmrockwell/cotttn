<?php
include_once('../classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("cotttn | apps");
?>
<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
<?php echo $IPage->style('../css/main.css'); ?>
</head>
<body>
<div id="wrapper">
    <?php echo $IPage->branding('c o t t t n | <span>apps<span>'); ?>
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