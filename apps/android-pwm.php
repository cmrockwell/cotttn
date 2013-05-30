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
    <?php echo $IPage->branding(); ?>
	<?php echo $IPage->navBar('apps',2); ?>
<div id="content">
   <?php echo $IPage->localNavPort('pwm'); ?>
   <div id="rightside">  
   	<div class="code_example grid4">
		<h3>  Android PWM Intro   </h3>      				       				
		<a class="button" target="none" href="https://play.google.com/store/apps/details?id=com.chris.android.pwm">See on Google Play</a>
		<p> ‘Android PWM’ is an Android app that provides an interface to control the PWM settings of an Arduino UNO. 
			‘Android PWM’ has sliders to control pulse width modulation signal frequencies and duty cycles. </p>
		<p>
			<a href="http://www.youtube.com/watch?v=e4GBlr6jEIg">Android PWM YouTube Demo</a>
		</p>
		<p>	
			It’s useful for controlling motor speeds, or other devices. Three channels may be operated simultaneously. 
			It utilizes inexpensive Arduino hardware. And with less than $100 you can build yourself a PWM generator controlled by your phone. 
		</p>		
	</div> 

	<div class="code_example grid4">
		<h3>  Downloads</h3>  
		<p>Android &lt;= ADB =&gt; Arduino </p>
		<a href="https://play.google.com/store/apps/details?id=com.chris.android.pwm" target="none">
			<img src='../images/pwm1.jpg' height="100%" alt="screen shot image with buttons">	
		</a>
		<p>
			Download the Sketch for the Arduino here...
			<a target="_blank" href="android_pwm.zip">android_pwm.zip</a>	
			
		</p>
		<p>
			Download the latest ADB Libraries ...
			<a href="http://code.google.com/p/microbridge/">code.google.com/p/microbridge</a>
		</p>
		
	</div>

	<div class="code_example grid4">
		<h3>  Capabilities  </h3>      				       		
						
		<p>
			<ul>
				<li>Pin 3 has the following frequency selections: <ul> <li>30.5 hz</li>
					<li>122.1 hz </li> <li> 488.3 hz</li> <li>976.6 hz</li> <li> 3906.3 hz</li> <li> 31.25 kHz</li>
					</ul>
				</li>
				<li> Pin 3 uses a separate timer than Pins 5 and 6.</li>
				<li> Pin 5 & 6 have the frequency selections: 
					<ul>
						<li> 61 hz</li> <li>244.1 hz</li> <li> 976.6 hz</li> <li> 7812.5 hz</li> <li>and 62.5 kHz</li>
					</ul>	
				</li>
			</ul>

		</p>
		
	</div> 
	
	<div class="code_example grid4">
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
	
		<div class="code_example grid4">
		<h3>  Instructions 2: Continued  </h3>   
		<p>
			Once downloaded and saved, restart Arduino IDE. if you already had it running to make it detect the new library. 
			If the installation was successful, you should be able to go into file->examples and see an Adb submenu there. 
			Select the Shell example and upload it to your device. 
			
			On your phone, enable USB debugging if you hadn’t already (settings->applications->development->USB debugging).
			Connect the phone to the host shield and open a terminal to the Arduino (57600 baud). 
			
		</p>
		<p>
			A word of caution: The phone will attempt to charge the battery from the Arduino power supply regulator, which can become overloaded
			. It's recommended to provide a seperate USB power supply to the Arduino.
		</p>	
		<p>If all goes well, there will be a green indicator (not red) when the connection is established. 
			If you run into any issues please email me using the contact page.</p>
	</div>
	
	
	
	</div><!-- End right side -->
</div><!-- End content -->
</div><!-- End wrapper -->	
</body>
</html>