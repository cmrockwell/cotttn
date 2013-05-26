<?php
include_once('../classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("Chris Rockwell | About");
echo $IPage->style('../css/main.css');
?>
</head>
<body>
<div id="wrapper">
    <?php echo $IPage->branding(); ?>
	<?php echo $IPage->navBar('about',2); ?>
<div id="content">
   <?php echo $IPage->localNavPort('about'); ?>
   <div id="rightside">

	<h3> Chris Rockwell's Work </h3>
	<ul> 
		<li> <a href="webapps.php"> Web Application Development </a></li>
		<li> <a href="java.php"> Java, Android, Arduino &amp; Air </a></li>
		<li> <a href="ux/"> User Experience </a></li>
		<li> <a href="coding"> Web Coding </a></li>
		<li> <a href="testing/"> Testing </a></li>
		<li> <a href="mesostica/"> Rails 3 </a></li>
	</ul>	   	
   </div>
</div><!-- End content -->
	<?php echo $IPage->footer(); ?>
</div><!-- End wrapper -->	
</body>
</html>