<?php
include_once('../classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("cotttn | about");
?>
<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
<?php echo $IPage->style('../css/main.css'); ?>
</head>
<body>
<div id="wrapper">
    <?php echo $IPage->branding('c o t t t n | <span>about<span>'); ?>
	<?php echo $IPage->navBar('about',2); ?>
<div class="container-fluid">
	<div class="row-fluid">
	<?php echo $IPage->stdLocalNav(2); ?>
	<div class="span9" id="android">	
		
    	<div class="hero-unit">
            <h2>about cotttn</h2>
            <p>
            <strong>cotttn</strong> is the new brand from Chris Rockwell. The company makes websites and applications. <strong>cotttn</strong>
             also consults on user experience. The company is new, but Chris has been at this type of work for years.                  	
            </p>
            
    	</div> <!--end hero unit -->     
    	
    	<div class="hero-unit">
            <h2>about chris rockwell</h2>
            <p>
            <strong>chris rockwell</strong> is an engineer, coder, programmer and entrepreneur.  His previous business venture was
            called while-1, which released android apps. Chris has worked in automotive, educational and research fields providing 
            innovative apps for each.               	
            </p>
            <br>
            <p><a href="http://www.linkedin.com/pub/chris-rockwell/15/113/b94" class="btn btn-primary btn-large">See Chris on LinkedIn</a></p>
    	</div> <!--end hero unit -->     		      			
         
    </div> <!--end span9 -->   		

	</div> <!--end row fluid -->     

</div><!-- End container -->
      <footer>
        <p>© Company 2013</p>
      </footer>
</div><!-- End wrapper -->
</body>
</html>