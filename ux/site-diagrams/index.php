<?php
//header("LOCATION: http://cotttn.com/ux/site-diagrams/");
include_once('../../classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("cottn | site diagrams");

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
		$('#sd-sb').addClass('active');
	});
</script>
</head>
<body>
<div id="wrapper" >
    <?php echo $IPage->branding('c o t t t n | <span>site diagrams<span>'); ?>	
	
	<div class="container-fluid">
		<?php echo $IPage->navBar('ux', 3); ?>
    	<div class="row-fluid">
      	<?php echo $IPage->stdLocalNav(3); ?>
			<div class="span9 rsgot">
				<div class="hero-unit rightside2">	
	          		<h2>Ann Arbor Hands-on Museum <strong>site diagrams</strong> </h2>
	          	
	          	<p>
	          		Report analyzing Ann Arbor Hands-on Museum website structure and usability.   
		        </p>

		        </p>
            	<a href="http://cotttn.com/ux/site-diagrams/aahom.pdf"
            		class="btn btn-primary btn-large">Download Report PDF</a> 
            	<a href="http://cotttn.com/ux/site-diagrams/aahom-diagrams.pdf"
            		class="btn btn-primary btn-large">Download Diagrams PDF</a> 	
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
				
				<div class='pager' id='pager2'>

				</div>
				<div id="report2" style="width: 612px; margin-left: auto; margin-right: auto;">
					<canvas id="the-canvas2" style="border:1px solid black; "></canvas>
				</div>
				
				</div>
			</div>
		</div>
	</div>
</div>	
<script>
	$(function() {
		try{
			var pager = $('div#pager');
			var canvs1 = $('canvas#the-canvas');
		    pdfpager = new pdf_pager('http://cotttn.com/ux/site-diagrams/aahom17.pdf', 5, pager, 'the-canvas');
			pdfpager.getPage(1,'the-canvas');
			
			pdfpager2 = new pdf_pager('http://cotttn.com/ux/site-diagrams/aahom-diagrams17.pdf',
			 	7, $('div#pager2'),'the-canvas2');
			pdfpager2.getPage(1, 'the-canvas2');
		} catch(err){
			$('#pager').remove();
			$('#the-canvas').remove();
			$('#pager2').remove();
			$('#the-canvas2').remove();
			$('<embed/>', {
				type: 'application/pdf',
			    id: 'pdf-emb',
			    src: 'http://cotttn.com/ux/site-diagrams/aahom.pdf',
			    width: '614px',
			    height: '794px',
			}).appendTo('#report');	
			$('<embed/>', {
				type: 'application/pdf',
			    id: 'pdf-emb',
			    src: 'http://cotttn.com/ux/site-diagrams/aahom-diagrams.pdf',
			    width: '722px',
			    height: '542px',
			}).appendTo('#report2');	
		}
		
	    });
</script>
</body>
</html>			