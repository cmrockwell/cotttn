<?php
include_once('../classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("cotttn | apps");
?>
<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
<script src="../lib/jquery.js"></script>
<script> 
	$(function(){		
		$('#apps-sb').addClass('active-loc');
	});
</script>
<?php echo $IPage->style('../css/main.css'); ?>
</head>
<body>
<div id="wrapper">
    <?php echo $IPage->branding('c o t t t n | <span>apps<span>'); ?>
	<?php echo $IPage->navBar('apps',2); ?>

<div class="container-fluid">
	<div class="row-fluid">
	<?php echo $IPage->stdLocalNav(2); ?>
	<div class="span9" id="android">	      			
    	<div class="hero-unit">
            <h2>Android</h2>
            <p>
            	Android apps are written in the Java language. The language is rich and mature. 
            	Java has lots of great tools that enable programming productivity. Test Driven paradigm fits nicely
            	into Android development. <strong>cotttn</strong> takes the red, green refactor cycle to create super Android apps.
            </p>
            <p>
            	Mobile apps have many implementation options, so a rich toolset is a neccissity. 
            	HTML5, native Java or Adobe AIR can each be a good option for mobile apps. 
            	It's important to make the correct choice based on the application requirements. 
            </p>
            <br>
            <p><a href="./datewheelclassic" class="btn btn-primary btn-large">Date Wheel Classic</a>
            	<a href="./android-pwm" class="btn btn-primary btn-large">Android PWM</a>
            </p>
    	</div> <!--end hero unit -->  
    	
    	<div class="hero-unit">
            <h2>JavaScript</h2>
            <p>
            	Today's browsers are so capable. AJAX opened the door for asynchronous updates.   
            	Possibilities are in a word, Limitless. Reminds me of the Matrix scene with Neo and spoon-boy.             	
            </p>
            <blockquote>Neo: What truth? Spoon boy: There is no spoon. Neo: There is no spoon? Spoon boy: Then you'll see, that it is not the spoon that bends, it is only yourself.
            </blockquote>
            	
            </p>
            <br>
            <p><a href="./meso" class="btn btn-primary btn-large">Mesostic</a>
            	<a href="./got" class="btn btn-primary btn-large">Game of Life</a>
            	<a href="./image-trans" class="btn btn-primary btn-large">Image Transitions</a>
            </p>
    	</div> <!--end hero unit -->        
  
      			
    	<div class="hero-unit">
            <h2>Ruby on Rails</h2>
            <p>
            	Rails is super.  Why spend time to solving the same problems repeatedly? 
            	The Rails web framework offers sensible conventions that expedite the development of new applications. Like Mesostica!
            </p>
            
            <br>
            <p><a href="#" class="btn btn-primary btn-large" disabled="disabled">Mesostica (coming soon)</a></p>
    	</div> <!--end hero unit -->        

       			
    	<div class="hero-unit">
            <h2>Other options: PHP &amp; Java</h2>
            
            <p>
            	PHP is kind of my go-to swiss army knife server language. When I need something specific done on a server quickly, 
            	lookout PHP to the rescue. Wordpress uses it, and WP powers 1 in every 6 pages on the net.            	
            </p>
            <p>
            	I like Java because the language is rich and mature (Does that make me a gold digger?).  
            	Java is my go-to language for desktop apps.  The JVM solves concerns 
            	related to cross platform operability. Plus like I said
            	Java's loaded.
            </p>
           
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