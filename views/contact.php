<div class="container-fluid">
	<?php echo $IPage->navBar($view,2); ?>
	<div class="row-fluid">

	<div class="span12">	

		<div class="hero-unit">
				
				<h2>make contact with <strong>cotttn</strong> </h2>
				
				<?php if ($error != false ) { ?>
					<div class="alert alert-error"><?php echo $error; ?></div>
				<?php } else if ($sent ===true) {?>
					<div class="alert alert-success">Thank You for the email! You will have a response ASAP :-)</div>
				<?php } ?>
					
				<form class="form-horizontal" method="post" action="/contact">
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
