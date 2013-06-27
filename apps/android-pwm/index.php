<?php
include_once('../../classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("cotttn | android pwm");

?>
<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
<?php echo $IPage->style('../../css/main.css'); ?>
<script src="../../lib/jquery.js"></script>
<script> 
	$(function(){		
		$('#pwm-sb').addClass('active');
		$('.sidebar-nav').height($('.span9 .hero-unit').height()+80)
	});
</script>
</head>
<body>
<div id="wrapper">
    <?php echo $IPage->branding('c o t t t n | <span>android pwm</span>'); ?>
	
<div class="container-fluid">
	<?php echo $IPage->navBar('apps', 3); ?>
	<div class="row-fluid">
      	<?php echo $IPage->stdLocalNav(3); ?>
      	<div class="span9">
      		<div class="hero-unit">
	            <h2><strong>android pwm </strong> an arduino interface</h2>
	            <p> ‘Android PWM’ is an Android app that provides an interface to control the PWM settings of an Arduino UNO. 
							‘Android PWM’ has sliders to control pulse width modulation signal frequencies and duty cycles. </p>
							
	            <br>
	            <p><a href="https://play.google.com/store/apps/details?id=com.chris.android.pwm" 
							class="btn btn-primary btn-large">See on Google Play »</a> &nbsp; &nbsp;        	
	            <a href="http://www.youtube.com/watch?v=e4GBlr6jEIg">or, view Android PWM YouTube Demo</a> </p>
	            
	            <p>	
	            	It’s useful for controlling motor speeds, or other devices. Three channels may be operated simultaneously. 
					It utilizes inexpensive Arduino hardware. And with less than $100 you can build yourself a PWM generator controlled by your phone.
				</p>	
				<p><strong>capabilities</strong></p>
	            <table class="table table-condensed">
				<tr> <th>Pin 3</th> <td>30.5 hz</td> <td>122.1 hz </td> <td> 488.3 hz</td> <td>976.6 hz</td> 
									<td> 3906.3 hz</td> <td> 31.25 kHz</td> </tr>
				<tr> <th>Pin 5 &amp; 6</th> <td>61 hz</td> <td>244.1 hz </td> <td> 976.6 hz</td> <td>7812 hz</td> 
									<td> 62.5 khz</td> <td> </td>  </tr>				
				</table>
				<p>Pin 3 uses a separate timer than Pins 5 and 6.</p>
				 
	    	</div> <!--end hero unit -->  
		</div>
	</div>	
	<div class="row-fluid">
      	<div class="span12">	    	
    		<div class="hero-unit rightside2">
    			<div class="span4">
						<h3>  Instructions 1: Requirements   </h3>   
						<p>
							Hardware: Arduino Uno microcontroller is needed. The USB shield available from Circuits-At-Home is also needed.</p>
						<p>	
							Software: The MicroBridge libraries must be installed into the Arduino Sketch directory. 
							This will enable the ADB shell communication between the Android phone and the Arduino Uno.
				
							Download the Adb library, and unpack it into the libraries directory of your Arduino installation 
							This should give you an ‘Adb’ directory.
						</p>	
						
						<p> To get Andoid PWM app connected, you need my version of the Sketch program loaded in your Arduino. 
							See the Download portion.  </p>
					</div>
					
						<div class="span4">
						<h3>  Instructions 2: Continued  </h3>   
						<p>
							Once downloaded and saved, restart Arduino IDE. if you already had it running to make it detect the new library. 
							If the installation was successful, you should be able to go into file->examples and see an Adb submenu there. 
							Select the Shell example and upload it to your device. 
							
							On your phone, enable USB debugging if you hadn’t already (settings->applications->development->USB debugging).
							Connect the phone to the host shield and open a terminal to the Arduino (57600 baud). 
							
						</p>
				
					</div>
					
					<div class="span3">
						<h3> Wrap Up / Caution  </h3>   	
						<p>If all goes well, there will be a green indicator (not red) when the connection is established. 
							If you run into any issues please email me using the contact page.</p>
						<p>
							A word of caution: The phone will attempt to charge the battery from the Arduino power supply regulator, 
							which can become overloaded. It's recommended to provide a seperate USB power supply to the Arduino.
						</p>				
					</div>	  
    			
    		</div>	
    		
    		<div class="hero-unit rightside2">
    			<h2>Download</h2>    			
				<div class="code_example grid4">
				<a href="https://play.google.com/store/apps/details?id=com.chris.android.pwm" target="none">
							<img src='../../images/pwm1.jpg' alt="screen shot image with buttons"></a>	
				</div>
				<div class="grid4">
					<p> <strong>android &lt;= ADB =&gt; arduino</strong></p>
					<p>Download the Sketch for the Arduino here...
						<a target="_blank" href="android_pwm.zip">android_pwm.zip</a>	
					</p>
					<p> Download the latest ADB Libraries ...
						<a href="http://code.google.com/p/microbridge/">code.google.com/p/microbridge</a>
					</p>
				</div>
				<div class="code_example grid4">
					
				</div> 				
    		</div>
    		
    					          		
      	</div>	
	</div>  
</div>
<?php echo $IPage->footer(); ?> 
</div><!-- End wrapper -->	
</body>
</html>