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
	<?php echo $IPage->navBar($view,2); ?>

<?php require __DIR__.'/../views/'.$view.'.php'; ?>
</body>
</html>
