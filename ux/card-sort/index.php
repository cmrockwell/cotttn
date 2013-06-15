<?php
include_once('../../classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("cottn | card sort");

?>
<script src="../../lib/jquery.js"> </script>
<script src="../src/pdf_pager.js"> </script>
<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://raw.github.com/mozilla/pdf.js/gh-pages/build/pdf.js"></script>
<?php echo $IPage->style('../../css/main.css'); ?>

</head>
<body>
<div id="wrapper" >
    <?php echo $IPage->branding('c o t t t n | <span>card sort<span>'); ?>
	<?php echo $IPage->navBar('ux', 3); ?>
	
	<div class="container-fluid">
    	<div class="row-fluid">
      	<?php echo $IPage->stdLocalNav(3); ?>
			<div class="span9 rsgot">
				<div class="hero-unit rightside2">	
	          		<h2>Cell Journal  <strong>card sort user testing</strong> </h2>
	          	
	          	<p>
	          		Report for Cell Journal labels and information architecture.
		        </p>

		        </p>
            	<a href="http://localhost:8081/profile/ux/card-sort/CellCardSort.pdf"
            		class="btn btn-primary btn-large">Download PDF</a> 
		        </div>	
			</div>
		</div>
		<div class="row-fluid">
			<div id="span12">
				<div class="hero-unit">

				<div class='pager' id='pager'>

				</div>
				<div id="report" style="width: 612px; margin-left: auto; margin-right: auto;">
					<canvas id="the-canvas" style="border:1px solid black; "></canvas>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<script>
	$(function() {
	    var pdfpager = new pdf_pager('http://localhost:8081/profile/ux/card-sort/CellCardSort.pdf', 15,$('div#pager'),'the-canvas');
		pdfpager.getPage(1, 'the-canvas');
	    });
</script>
</body>
</html>			