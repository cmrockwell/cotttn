<?php
include_once('../../classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("cottn | test driven design");

?>
<script src="../../lib/jquery.js"> </script>
<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
<script src="../../lib/jquery.js"></script>


<?php echo $IPage->style('../../css/main.css'); ?>

<script> 
	$(function(){		
		$('#tdd-sb').addClass('active');
		$("iframe").contents().find("#__jasmine_TrivialReporter_showPassed__").attr('checked', 'true');
	});
</script>
</head>
<body>
<div id="wrapper" >
    <?php echo $IPage->branding('c o t t t n | <span>test driven design<span>'); ?>
	
	<div class="container-fluid">
		<?php echo $IPage->navBar('apps', 3); ?>
    	<div class="row-fluid">
      	<?php echo $IPage->stdLocalNav(3); ?>
			<div class="span9 rsgot">
				<div class="hero-unit rightside2">	
	          		<h2><strong>test driven design </strong> </h2>
	          	
	          	<p>Jasmine is a behavior-driven development framework for testing JavaScript code. More 
	          		information about Jasmine can be found at their <a href="http://pivotal.github.io/jasmine/">website</a>.
	          		Below are some example of tests made for the mesostic JavaScript app.  
	          		I've tweaked the report to show passing and failing tests using 
	          		<a href="http://havvy.wordpress.com/2011/12/20/jasmine/">these instructions</a>.
		        </p>

		        </p>
            	
		        </div>	
			</div>
		</div>
		<div class="row-fluid">
			<div id="span12">
				<div class="hero-unit">
				<iframe src="tdd.html" scrolling='no'></iframe>
				</div>
			</div>
		</div>
	</div>
</div>	

</body>
</html>			