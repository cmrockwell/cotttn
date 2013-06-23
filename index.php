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
    <?php echo $IPage->branding('c o t t t n | <span>connecting one thing to the NEXT</span>'); ?>
	

<div class="container-fluid">
      <?php echo $IPage->navBar('home'); ?>

      <div class="row-fluid">
      	
        <div class="span12">
          <div class="hero-unit">
            <h2>What is <strong>cotttn</strong>?</h2>
            <p>
            	<strong>cotttn</strong> stands for 'connecting one thing to the next.' 
            </p>
            <p>
            	Welcome to the personal site for Chris Rockwell. The site holds some apps, projects and papers I've made regarding 
              programming the web and mobile and some user experience stuff. The name <strong>cotttn</strong> is about connecting ideas with 
              users by building tested usable internet and mobile applications.  Feel free to drop me an email using the contact 
              page.  Thanks for stopping by!
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
              <p><a class="btn" href="apps#android">View details »</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>JavaScript</h2>
              <p>Long gone are the days when JavaScript was used only to add quirky animations to websites. Today JavaScript is a powerful language.
              	Node.js opens the door to server side applications. While Chrome's V8 engine and AJAX techniques make JS amazingly capable.  
              	Jasmine offers a nice test driven environment, so the JS apps can be lean and mean.</p>
              <p><a class="btn" href="apps#JavaScript">View details »</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Web Coding</h2>
              <p>Website interfaces that render consistently requires skillful HTML and CSS craftmanship.  An understanding
              	of user personas along with a site's analytics helps create plans to ensure pages always look fantastic!</p>
              <p><a class="btn" href="coding">View details »</a></p>
            </div><!--/span-->
          </div><!--/row-->
          <div class="row-fluid">
            <div class="span4">
              <h2>Server-Side</h2>
              <p>Java, node, PHP and Rails are fantastic options for the server side of things. Being technology agnostic means <strong>cotttn</strong>
              	apps use the best tools for the job. Behavior and integration tools such as Rspec, Cucumber and Capybara ensure <strong>cotttn</strong> 
              	server-side features are robust and reliable.    
              </p>
              <p><a class="btn" href="apps#ServerSide">View details »</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>User Experience</h2>
              <p> <strong>cotttn</strong> apps are designed for users. Information organization and design princple 
                guide layouts. The goal for each interface is to match users' intuition and expectations so it
               <strong>just works.</strong>    	    
              </p>
              <p><a class="btn" href="ux">View details »</a></p>
            </div><!--/span-->
           <div class="span4">
              <h2>Arduino</h2>
              <p>  Arduino is <strong>fantastic</strong>  It's such a powerful platform that really demystifies 
                embedded realtime systems. Prototyping with the power of this open source microcontroller opens the 
                door to the phsyical world computing. The possibilities are eye popping.  	   	    
              </p>
             
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