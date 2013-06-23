<?php
include_once('../classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("cotttn | ux");
?>
<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
<?php echo $IPage->style('../css/main.css'); ?>
</head>
<body>
<div id="wrapper">
    <?php echo $IPage->branding('c o t t t n | <span>ux<span>'); ?>
	
<div class="container-fluid">
	<?php echo $IPage->navBar('ux',2); ?>
    <div class="row-fluid">
	<?php echo $IPage->stdLocalNav(2); ?>
	<div class="span9" id="android">	
		
    	<div class="hero-unit">
            <h2>Card Sort Testing</h2>
            <p>
            Good labels and good infomation organization are no accident.  Starting with best practices gets the information architecture
            close, but in the end user testing really makes a difference.  Eliminate confusing disorganization.  Do a card sort!                	
            </p>
            <br>
            <p><a href="./card-sort" class="btn btn-primary btn-large">See Card Sort Test Example</a>            	
            </p>
    	</div> <!--end hero unit -->     
    			      			
    	<div class="hero-unit">
            <h2>Competitive Analysis</h2>
            <p>
            	Capability to build web sites and applications is great.  But how can you be sure that you're building the right thing?
            	<strong>cotttn</strong> looks at local, regional and global competitors to learn what works and what to avoid. It's not
            	a monkey see monkey do mentality. It's kaizen through benchmarking.  
            </p>            
            <br>
            <p><a href="./comp-analysis" class="btn btn-primary btn-large">See a Competitive Analysis Example</a>            	
            </p>
    	</div> <!--end hero unit -->  
      			
    	<div class="hero-unit">
            <h2>Interface Redesign</h2>
            <p>
            	What's more fun than an interface redesign? Ok. There are plenty of things more fun. Redesigns are still pretty cool.  
            	Go from thumbnail sketches and wireframes to stylish page mockups.  
            </p>
            
            <br>
            <p><a href="./interface" class="btn btn-primary btn-large">See an Interface Redesign Example</a></p>
    	</div> <!--end hero unit -->        

       			
    	<div class="hero-unit">
            <h2>Structural Diagrams</h2>
            
            <p>
            	Simplify the mess.  Clarify things for yourself and the team.  Folks might underestimate these useful diagrams,
            	but with hundreds of dynamically created pages in multiple sub-categories things can get confusing. It helps to have
            	plan ;-)             	
            </p>
          	<br>
            <p><a href="./site-diagrams" class="btn btn-primary btn-large">See a Structural Diagram Example</a></p>
           
    	</div> <!--end hero unit -->         
    </div> <!--end span9 -->   		

	</div> <!--end row fluid -->     

</div><!-- End container -->
      <?php echo $IPage->footer(); ?> 
</div><!-- End wrapper -->
</body>
</html>