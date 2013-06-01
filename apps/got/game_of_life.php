<?php
include_once('../classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("Chris Rockwell");
echo $IPage->style('../css/main.css');
?>
  <link href="got/css/life.css" rel="stylesheet" />
  <script src="../lib/jquery.js"></script>
  <script src="got/src/Life.js"></script>
  <script src="got/src/LifeView.js"></script>
  
</head>
<body>
<div id="wrapper">
    <?php echo $IPage->branding(); ?>
	<?php echo $IPage->navBar('apps',2); ?>
<div id="content">
   <?php echo $IPage->localNavPort('got'); ?>
	<div id="rightside">
		<div id="got">
			<button class="goBtn"> Step </button>
			<button class="gunBtn"> Set up Gosper </button>
			<button class="runBtn stopped"> Run </button>
			<a href=""><button class="reset"> Reset </button></a>
			<div id="lifegrid">
			</div>
		</div>			
    </div>	
</div><!-- End content -->
<?php echo $IPage->footer(); ?> 
</div><!-- End wrapper -->
<script type="text/javascript">
	$(function() {
	    var view = new LifeView(new Life(38));
	    view.init($('.lifegrid'));
	    });
 </script>	
</body>
</html>