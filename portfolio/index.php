<?php
include_once('../classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("Chris Rockwell");
echo $IPage->style('../css/main.css');
?>
</head>
<body>
<div id="wrapper">
    <?php echo $IPage->branding('c o t t t n | <span>coding<span>'); ?>
	<?php echo $IPage->navBar('portfolio',2); ?>
<div id="content">
	<?php echo $IPage->localNavPort('coding'); ?>
	
<div id="rightside"> 
	<h2 class="title">HTML &amp; CSS Web Coding</h2>
	<p> These pages were hand coded by Chris for a web coding class at Washtenaw Community College.  
		This work counts towards web application and development certificates.  
		The course work for these certificates includes:      				       			    
	</p>
	<ul> 
		<li>HTML/CSS using the latest techniques</li>
		<li>User Experience design and testing</li>
		<li>PHP server-side programming</li>
		<li>JavaScript client-side programming </li>
	</ul>
	<div id="code_examples"> 
		
	<div class="code_example grid4">
		<h3> <a id="liquid"> Liquid Layout </a>  </h3>      				       		
		<img src="../images/liquid_layout.png" alt="screenshot"/>
		<p> The page below featured a partial liquid layout that expanded right to fill the browser view port. </p>
		<a class="button" target="none" href="projects/cmrockwell-centering">See this page</a>
	</div>
	
	<div class="code_example grid4">
		<h3> <a id="responsive">Responsive Design</a></h3>       				       		
		<img src="../images/responsive.png"  alt="screenshot"/>
		<p>This responsive web site design changes the layout depending on the dimensions of the browser view port.  
			The lauout is responsive to PC, tablets and mobile screens.</p>
		<a class="button" target="none" href="projects/cmrockwell-responsive">See this page</a>
	</div> 
	
	
	<div class="code_example grid4">
		<h3><a id="float">Float Project</a></h3>       				       		
		<img src="../images/float.png"  alt="screenshot"/>
		<p>Float is a positioning technique to place block level elements in a side by side fashion</p>
		<a class="button" target="none" href="projects/cmrockwell-float">See this page</a>
	</div>
	
	
	
	<div class="code_example grid4">
		<h3><a id="form">Form Example</a></h3>       				       		
		<img src="../images/form.png"  alt="screenshot"/>
		<p> Forms are indespensible part of any website.  This example employs many standard elements in addition to 
			keyboard shortcuts and tab indexes. </p>
		<a class="button" target="none" href="projects/cmrockwell-forms">See this page</a>
	</div> 
	
	<div class="code_example grid4">
		<h3><a id="email">HTML Email</a></h3>       				       		
		<img src="../images/html_email.png"  alt="screenshot"/>
		<p>HTML emails are a great way to stay in touch with customers or members or a group.  
			This project explores how emails that appear like modern pages are created. </p>
		<a class="button" target="none" href="projects/cmrockwell-email">See this page</a>
	</div>
	
	<div class="code_example grid4">
		<h3><a id="frames">Frames Example</a></h3>       				       		
		<img src="../images/frames.png"  alt="screenshot"/>
		<p> Granted, frames are kind of out of style. But, frames can be useful in specific situations.  
			The example uses different html files to construct the layout. </p>
		<a class="button" target="none" href="projects/cmrockwell-frames">See this page</a>
	</div>        							
	
	<div class="code_example grid4">
		<h3><a id="position">CSS Positioning</a></h3>       				       		
		<img src="../images/position.png"  alt="screenshot"/>
		<p>Understanding relative and absolute positioning is what this project was all about.  Using these techniques the elements
			can be positioning absolute accuracy relative to a parent element. This is a great way to ensure page layout precision. </p>
		<a class="button" target="none" href="projects/cmrockwell-position">See this page</a>
	</div> 
	
	<div class="code_example grid4">
		<h3><a id="html5">HTML5 &amp; CSS3</a></h3>       				       		
		<img src="../images/html5css3.png"  alt="screenshot"/>
		<p>HTML5 and CSS3 are super exciting web technologies. There are currently some cross browser concerns, but in 
			general these techniques will soon become the norm. This example uses HTML5 elements and CSS3 styling. </p>
		<a class="button" target="none" href="projects/cmrockwell-html5">See this page</a>
	</div> 
	<!-- <div class="clear"> </div> -->
	
	<div class="code_example grid4">
		<h3><a id="slicing">Slicing Project</a></h3>       				       		
		<img src="../images/slice.png"  alt="screenshot"/>
		<p>Slicing is important technique in web page design. Using a tool like Photoshop or Gimp, images are <em>sliced</em>
			out from a comp or other source.  The sliced out images are then used to build the page.
		</p>
		<a class="button" target="none" href="projects/cmrockwell-slicing">See this page</a>
	</div>

	
	<div class="code_example grid4">
		<h3><a id="final">Final Project</a></h3>       				       		
		<img src="../images/final.png"  alt="screenshot"/>
		<p>Given an image of this web page, the task was to recreate the page using HTML and CSS.
			All layout size attributes were measured out and adjusted using an overlay technique. </p>
		<a class="button" target="none" href="projects/cmrockwell-final">See this page</a>
	</div> 
	
	
	</div> 
       			    			      			
</div> <!--end rightside-->     

</div><!-- End content -->
<?php echo $IPage->footer(); ?> 
</div><!-- End wrapper -->	
</body>
</html>