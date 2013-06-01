<?php
include_once('../classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("Chris Rockwell");

?>
<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<?php echo $IPage->style('../css/main.css'); ?>
<script src="../lib/core-event-listeners.js"></script>
<script src="../lib/core-ajax.js"></script>
<script src="../lib/jquery.js"></script>
<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
<script src="meso/src/Mesostic.js"></script>
<script src="meso/src/MesoView.js"></script>   
</head>

<body>
<div id="wrapper">
    <?php echo $IPage->branding(); ?>
	<?php echo $IPage->navBar('apps', 2); ?>
	
<div id="content">
   <?php echo $IPage->localNavPort('mesostic'); ?>
   <div id="rightside">
	   <div id="got">
	   	  <h2>What's a mesostic?</h2>
	   	  <p>A mesostic is a poem or other typography such that a vertical phrase intersects lines of horizontal text.
	   	  	 It is similar to an acrostic, but with the vertical phrase intersecting the middle of the line, 
	   	  	 as opposed to beginning each new line. </p>
	   	 <p> The practice of using index words to select pieces from a pre-existing text was developed by Jackson Mac Low as "diastics". 
	   	 	It was used extensively by the experimental composer John Cage (Walsh 2001).</p>
	   	 <p> There are three types of mesostic: Basic, 50% and 100%. 
	   	 <ul>
	   	 	<li>basic mesostics only restriction when selecting words from pre-existing is that it should contain the capitalized letter</li>
	   	 	<li>in fifty percent, between any two capitalized letters, you can't have the second letter repeated</li>
	   	 	<li>in one-hundred percent, between any two capitalized letters, you cannot repeat the first nor second </li>
	   	 </ul>
	   	 </p>
		 
		 <h3>This is a mesostic poem generator app</h3> 
		  <p>Step 1: Enter a Spine word. This is the word spelled vertically in the poem </p>
	      <label class="indent">Spine</label>
			<input type="text" class="indent" name="spine" id ="spine" size="30" value="" 
			title="Vertical Spine Word"/>
		 <p>Step 2: Get pre-existing text. Seed text can be copied and pasted from anywhere. But with this app you can 
		 	query Wikipedia by entering a topic. The app will return the abstract if one exists. </p>
		 	
		 	<form id="getSeedForm" class="getSeedForm"> 
		 		<label>Search Phrase (optional): </label>
		 		<input type="text" name="wordphrase" id="wordphrase" /> <br>
		 		<button type="submit" id="getphrase" name="getphrase">Get Wikipedia Abstract</button> 
		 	</form> 
 			<div id="inputText">
	 			<label for="seedText"> Seed Text: </label> <br>		 	
				<textarea rows="10" cols="100%" title="Paste seed text here." name="seedText" > </textarea>	
 			</div>
		 	
			<br />
			<p>Step 3: Create it by selecting one of the three options. </p>
	        <button id="basicbtn" title="Basic"> Basic </button> 
	        <button id="btn50" title="50%"> 50% Mesostic </button> 
	        <button id="btn100" title="100%"> 100% Mesostic </button>
	
			<br/>
			
   			<!-- Modal -->
			<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  	<div class="modal-header">
			    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			    	<h3 id="myModalLabel">Your mesostic draft</h3>
			    	<textarea cols="50" title="Your mesostic!" id="poem"> </textarea>
			    				
				</div>
			  	<section>
					
				</section>
			
			</div>
   		</div>	
   </div>
	
</div><!-- End content -->
<?php echo $IPage->footer(); ?> 
</div><!-- End wrapper -->	

<script>
$(function() {
	var m = new Mesostic();
	//var seed = startAjax('mesostic');
	m.init($('#spine').val() , $('div#inputText textarea').val());
	var mv = new MesoView(m);
    mv.init($('#wrapper')); 
});
</script>   
</body>
</html>