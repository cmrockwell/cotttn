<?php
include_once('../classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("cottn | coding");

?>
<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
<?php echo $IPage->style('../css/main.css'); ?>
</head>
<body>
<div id="wrapper" >
    <?php echo $IPage->branding('c o t t t n | <span>coding<span>'); ?>
	
	<div class="container-fluid">
		<?php echo $IPage->navBar('coding', 2); ?>
	      <div class="row-fluid">
	      
	        <!--/span-->
	        <div class="span12">
	          <div class="hero-unit rightside2">	
	          		<h2><strong>cotttn</strong> coding examples</h2>
	          		<div>
		          		<div class="code_example grid4">
							<h3> Liquid Layout   </h3>      				       		
							<div class="thumbimg">
								<img src="../images/liquid_layout.png" alt="screenshot"/>
							</div>						
							<!-- <p> The page below featured a partial liquid layout that expanded right to fill the browser view port. </p> -->
							<a class="btn" target="none" href="projects/cmrockwell-centering">See this page</a>
						</div>
						
						<div class="code_example grid4">
							<h3>Responsive Design</h3>       				       		
							<div class="thumbimg">
							<img src="../images/responsive.png"  alt="screenshot"/>
							<!-- <p>This responsive web site design changes the layout depending on the dimensions of the browser view port.  
								The lauout is responsive to PC, tablets and mobile screens.</p> -->
							</div>
							<a class="btn" target="none" href="projects/cmrockwell-responsive">See this page</a>
						</div> 
						
						
						<div class="code_example grid4">
							<h3>Float Project</h3> 
							<div class="thumbimg">      				       		
							<img src="../images/float.png"  alt="screenshot"/>
							<!-- <p>Float is a positioning technique to place block level elements in a side by side fashion</p> -->
							</div>
							<a class="btn" target="none" href="projects/cmrockwell-float">See this page</a>
						</div>
						
						<div class="code_example grid4">
							<h3>Form Example</h3>
							<div class="thumbimg">       				       		
							<img src="../images/form.png"  alt="screenshot"/>
							<!-- <p> Forms are indespensible part of any website.  This example employs many standard elements in addition to 
								keyboard shortcuts and tab indexes. </p> -->
							</div>
							<a class="btn" target="none" href="projects/cmrockwell-forms">See this page</a>
						</div> 
						
						<div class="code_example grid4">
							<h3>HTML Email</h3>       				       		
							<div class="thumbimg">
							<img src="../images/html_email.png"  alt="screenshot"/>
							<!-- <p>HTML emails are a great way to stay in touch with customers or members or a group.  
								This project explores how emails that appear like modern pages are created. </p> -->
							</div>
							<a class="btn" target="none" href="projects/cmrockwell-email">See this page</a>
						</div>
						
						<div class="code_example grid4">
							<h3>Frames Example</h3>       				       		
							<div class="thumbimg">
							<img src="../images/frames.png"  alt="screenshot"/>
							<!-- <p> Granted, frames are kind of out of style. But, frames can be useful in specific situations.  
								The example uses different html files to construct the layout. </p> -->
							</div>
							<a class="btn" target="none" href="projects/cmrockwell-frames">See this page</a>
						</div>        							
						
						<div class="code_example grid4">
							<h3>CSS Positioning</h3>       				       		
							<div class="thumbimg">
							<img src="../images/position.png"  alt="screenshot"/>
							<!-- <p>Understanding relative and absolute positioning is what this project was all about.  Using these techniques the elements
								can be positioning absolute accuracy relative to a parent element. This is a great way to ensure page layout precision. </p> -->
							</div>
							<a class="btn" target="none" href="projects/cmrockwell-position">See this page</a>
						</div> 
						
						<div class="code_example grid4">
							<h3>HTML5 &amp; CSS3</h3>       				       		
							<div class="thumbimg">
							<img src="../images/html5css3.png"  alt="screenshot"/>
							<!-- <p>HTML5 and CSS3 are super exciting web technologies. There are currently some cross browser concerns, but in 
								general these techniques will soon become the norm. This example uses HTML5 elements and CSS3 styling. </p> -->
							</div>
							<a class="btn" target="none" href="projects/cmrockwell-html5">See this page</a>
						</div> 
						<!-- <div class="clear"> </div> -->
						
						<div class="code_example grid4">
							<h3>Image Slicing</h3>       				       		
							<div class="thumbimg">
							<img src="../images/slice.png"  alt="screenshot"/>
							<!-- <p>Slicing is important technique in web page design. Using a tool like Photoshop or Gimp, images are <em>sliced</em>
								out from a comp or other source.  The sliced out images are then used to build the page.
							</p> -->
							</div>
							<a class="btn" target="none" href="projects/cmrockwell-slicing">See this page</a>
						</div>
					
						
						<div class="code_example grid4">
							<h3>PSD to HTML</h3>       				       		
							<div class="thumbimg">
							<img src="../images/final.png"  alt="screenshot"/>
							<!-- <p>Given an image of this web page, the task was to recreate the page using HTML and CSS.
								All layout size attributes were measured out and adjusted using an overlay technique. </p> -->
							</div>
							<a class="btn button" target="none" href="projects/cmrockwell-final">See this page</a>
						</div> 
					</div>	
	          </div>
	        </div>  
	      </div>  	
	</div>
<?php echo $IPage->footer(); ?> 	
</div><!-- End wrapper -->	
</body>
</html>



