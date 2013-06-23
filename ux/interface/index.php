<?php
include_once('../../classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("cottn | ux");
//header("LOCATION: http://cotttn.com/ux/interface/");
?>
<script src="../../lib/jquery.js"> </script>
<script src="../../lib/compatibility.js"> </script>
<script src="../src/pdf_pager.js"> </script>
<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
<script src="../../lib/pdf.js"></script>
<?php echo $IPage->style('../../css/main.css'); ?>
<script> 
	PDFJS.workerSrc = 'worker_loader.js';
	$(function(){		
		$('#ir-sb').addClass('active');
	});
</script>
</head>
<body>
<div id="wrapper" >
    <?php echo $IPage->branding('c o t t t n | <span>interface redesign<span>'); ?>
	
	<div class="container-fluid">
		<?php echo $IPage->navBar('ux', 3); ?>
    	<div class="row-fluid">
      	<?php echo $IPage->stdLocalNav(3); ?>
			<div class="span9 rsgot">
				<div class="hero-unit rightside2">	
	          		<h2>The Village of Dexter  <strong>interface redesign </strong> </h2>
	          	
	          	<p>
	          		Report about the interface redesign for Dexter Mi website.
		        </p>

		        </p>
            	<a href="http://cotttn.com/ux/interface/interface_redesign.pdf" class="btn btn-primary btn-large">Download PDF</a> 
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
		try{
			var pdfpager = new pdf_pager('http://cotttn.com/ux/interface/interface_redesign17.pdf', 15, $('div#pager'),'the-canvas');
			pdfpager.getPage(1, 'the-canvas');
		} catch(err){
			$('#pager').remove();
			$('#the-canvas').remove();
			$('<embed/>', {
				type: 'application/pdf',
			    id: 'pdf-emb',
			    src: 'http://cotttn.com/ux/interface/interface_redesign.pdf',
			    width: '614px',
			    height: '794px',
			}).appendTo('#report');	
		}
	    
	    });
</script>
</body>
</html>			