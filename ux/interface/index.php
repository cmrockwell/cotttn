<?php
include_once('../../classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("cottn | ux");

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
    <?php echo $IPage->branding('c o t t t n | <span>interface redesign<span>'); ?>
	<?php echo $IPage->navBar('ux', 3); ?>
	
	<div class="container-fluid">
    	<div class="row-fluid">
      	<?php echo $IPage->stdLocalNav(3); ?>
			<div class="span9 rsgot">
				<div class="hero-unit rightside2">	
	          		<h2>The Village of Dexter  <strong>interface redesign </strong> </h2>
	          	
	          	<p>
	          		Report about the interface redesign for Dexter Mi website.
		        </p>

		        </p>
            	<a href="" class="btn btn-primary btn-large">Download PDF</a> 
		        </div>	
			</div>
		</div>
		<div class="row-fluid">
			<div id="span12">
				<div class="hero-unit">
					<!-- <embed src="http://stu.wccnet.edu/~cmrockwell/inp170/interface_redesign.pdf" width="500" height="375"> -->
				<!-- <div id="pdf">
				  <object width="400px" height="400" type="application/pdf" 
				  data="http://localhost:8081/profile/ux/interface/interface_redesign.pdf?#zoom=85&scrollbar=0&toolbar=0&navpanes=0" 
				  	id="pdf_content">
				    <p>Insert your error message here, if the PDF cannot be displayed.</p>
				  </object>
				</div> -->
				<div class='pager'>
					<!-- <button class='btn' id='nextPage'>Next Page</button>
					<button class='btn' id='prevPage'>Previous Page</button> -->
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
	    var pdfpager = new pdf_pager('http://localhost:8081/profile/ux/interface/interface_redesign.pdf', 15);
		pdfpager.getPage();
	    });
</script>
</body>
</html>			