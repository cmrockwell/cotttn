<?php
include_once('classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("cotttn | home");

?>
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<?php echo $IPage->style('css/main.css'); ?>
</head>
<body>
<div id="wrapper" >
    <?php echo $IPage->branding('c o t t t n | <span>connecting one thing to the NEXT<span>'); ?>
	<?php echo $IPage->navBar('home'); ?>

<div class="container-fluid">
      <div class="row-fluid">
      	<?/*php echo $IPage->stdLocalNav(); */?>
        <!--/span-->
        <div class="span12">
          <div class="hero-unit">
            <h2>What is <strong>cotttn</strong>?</h2>
            <p>
            	<strong>cotttn</strong> stands for 'connecting one thing to the next.' 
            </p>
            <p>
            	Dreamers have ideas. <strong>cotttn</strong> is about connecting those ideas with users by building tested usable internet and mobile applications.
            </p>
            <br>
            <p><a href="about/" class="btn btn-primary btn-large">Learn more »</a></p>
          	<br>
          <div class="row-fluid">
            <div class="span4">
              <h2>Android</h2>
              <p>Mobile apps are great.  We all love to discover a great app that is fun to use, makes life easier and fills a gap in our connected lives.  
              	Date wheel classic is a simple model of a typical business utility. Android PWM may seem not so simple. But for people that wanted
              	a utility app that connects Arduino to their Android, it's very usefull indeed. These are examples. What's your idea?</p>
              <p><a class="btn" href="#">View details »</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>JavaScript</h2>
              <p>Long gone are the days when JavaScript was used only to add quirky animations to websites. Today JavaScript is a powerful language.
              	Node.js opens the door to server side applications. While Chrome's V8 engine and AJAX techniques make JS amazingly capable.  
              	Jasmine offers a nice test driven environment, so the JS apps can be lean and mean.</p>
              <p><a class="btn" href="#">View details »</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Web Coding</h2>
              <p>Crafting website interfaces that render consistently requires skillful HTML and CSS craftmanship.  With developed understanding
              	of the sites user personas along with a site's analytics, we can design a test plan to ensure the pages always look fantastic!</p>
              <p><a class="btn" href="#">View details »</a></p>
            </div><!--/span-->
          </div><!--/row-->
          <div class="row-fluid">
            <div class="span4">
              <h2>Server-Side</h2>
              <p>Java, node, PHP and Rails are fantastic options for the server side of things. Being technology agnostic means <strong>cotttn</strong>
              	apps use the best tools for the job. Behavior and integration tools such as Rspec, Cucumber and Capybara ensure <strong>cotttn</strong> 
              	server-side features are robust and reliable.    
              </p>
              <p><a class="btn" href="#">View details »</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>User Experience</h2>
              <p> <strong>cotttn</strong> apps are designed for users.  A simple concept that runs through our core.  Existing apps are great resource for user testing 
              and lessons learned. Information organization and design princple guide out layouts. The goal for each interface is to match users' intuition and expectations. 
              In other words, <strong>it just works.</strong>    	    
              </p>
              <p><a class="btn" href="#">View details »</a></p>
            </div><!--/span-->
           <div class="span4">
              <h2>Arduino</h2>
              <p> At <strong>cotttn</strong>, we love Arduino.  It's such a wonderful platform that really demystifies embedded realtime systems. 
              Prototyping with the power of this open source microcontroller opens the door to the phsyical world. The possibilities are eye popping.  	   	    
              </p>
              <p><a class="btn" href="#">View details »</a></p>
            </div><!--/span-->
          </div><!--/row-->
          
          </div> <!--/hero-->
          
        </div><!--/span-->
      </div><!--/row-->

     
    </div>
      <?php echo $IPage->footer(); ?> 
	
</div><!-- End wrapper -->	
</body>
</html>