<?php
$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("cotttn | ".$view);
?>
<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
<?php echo $IPage->style('../css/main.css'); ?>
</head>
<body>
<div id="wrapper">
	<?php echo $IPage->branding('c o t t t n | <span>'.$view.'<span>'); ?>

	<?php require __DIR__.'/../views/'.$view.'.php'; ?>

<?php echo $IPage->footer(); ?> 
</div><!-- End wrapper -->
</body>
</html>
