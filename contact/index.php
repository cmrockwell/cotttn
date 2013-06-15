<?php

require __DIR__.'/../vendor/autoload.php';

session_start();

$error = false;
$contact = new Model\Contact();

$view = 'form';
require __DIR__.'/../inc/form_check.php';
$_SESSION['csrf'] = uniqid('csrf_token');
//

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
<!--		/*php echo $IPage->stdLocalNav(2); *-->
		<div class="span12">	
			
	    	<div class="hero-unit">
					<?php if ($error != false) { ?>
						<div id="error"><?php echo $error; ?></div>
					<?php } ?>
	            <h2>make contact with <strong>cotttn</strong> </h2>

	            <form class="form-horizontal" method="post" action="">
						<input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf']; ?>" />
						<div class="control-group">
						  <label class="control-label" for="inputName">Name</label>
						  <div class="controls">
							 <input type="text" 
									  id="inputName" 
									  placeholder="Dermot Mahoney"
									  name="contact[name]"
									  value="<?php echo htmlentities($contact->name); ?>">
						  </div>
						</div>
						<div class="control-group">
						  <label class="control-label" for="inputEmail">Email</label>
						  <div class="controls">
							 <input type="text" 
									  id="inputEmail"
									  placeholder="Dermot.Mahoney@cotttn.com"
									  name="contact[email]"
									  value="<?php echo htmlentities($contact->email); ?>">
						  </div>
						</div>						
						<div class="control-group">
						  <label class="control-label" for="inputMsg">Message</label>
						  <div class="controls">
							<textarea rows="7" class="input-xxlarge" id="inputMsg"
										 name="contact[message]">
								<?php echo htmlentities($contact->message); ?>
							</textarea>
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
<?php echo $IPage->footer(); ?> 
</div><!-- End wrapper -->
</body>
</html>