<?php
include_once('../classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("cotttn | contact");
?>
<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
<?php echo $IPage->style('../css/main.css'); ?>
</head>
<body>
<div id="wrapper">
    <?php echo $IPage->branding('c o t t t n | <span>contact<span>'); ?>
	<?php echo $IPage->navBar('contact',2); ?>
	<div class="container-fluid">
		<div class="row-fluid">
		<?php echo $IPage->stdLocalNav(2); ?>
		<div class="span9">	
			
	    	<div class="hero-unit">
	            <h2>make contact with <strong>cotttn</strong> </h2>

	            <form class="form-horizontal">
				  <div class="control-group">
				    <label class="control-label" for="inputEmail">Email</label>
				    <div class="controls">
				      <input type="text" id="inputEmail" placeholder="Dermot.Mahoney@cotttn.com">
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="inputPassword">Name</label>
				    <div class="controls">
				      <input type="text" id="inputName" placeholder="Dermot Mahoney">
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="inputMsg">Message</label>
				    <div class="controls">
				     <textarea rows="7" class="input-xxlarge" id="inputMsg"></textarea>				      
				    </div>
				  </div>
				  <div class="control-group">
				    <div class="controls">
				      <button type="submit" class="btn">Send Message</button>
				    </div>
				  </div>
				</form>
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