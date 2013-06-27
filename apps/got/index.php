<?php
include_once('../../classes/webpage.php');

$IPage = new webpage();

echo $IPage->doctype();
echo $IPage->metaData();
echo $IPage->title("cottn | apps");

?>
<script src="lib/jquery.js"> </script>
<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>

<script> 
	$(function(){		
		$('#gol-sb').addClass('active');
	});
</script>
<?php echo $IPage->style('../../css/main.css'); ?>
<?php echo $IPage->style('css/life.css'); ?>
</head>
<body>
<div id="wrapper" >
    <?php echo $IPage->branding('c o t t t n | <span>game of life</span>'); ?>
	
	<div class="container-fluid">
		<?php echo $IPage->navBar('apps', 3); ?>
    	<div class="row-fluid">
      	<?php echo $IPage->stdLocalNav(3); ?>
			<div class="span9 rsgot">
				<div class="hero-unit rightside2">	
	          		<h2><strong>game of life </strong> a coding exercise</h2>
	          	
	          	<p class="smaller">
	          		The Game of Life, also known simply as Life, is a cellular automaton devised by the British mathematician John Horton
	          		 Conway in 1970. The "game" is a zero-player game, meaning that its evolution is determined by its initial state, 
	          		 requiring no further input. One interacts with the Game of Life by creating an initial configuration and observing 
	          		 how it evolves.
		        </p>
		        <p class="smaller">
		        	This game features Gosper's gun. In 'Life,' a <em>gun</em> is a pattern with a main part that repeats periodically, 
		        	like an oscillator, and that also periodically emits spaceships.
		        </p>
            	<a href="#life" class="btn btn-primary btn-large">Play Game of Life</a> 
		        </div>	
			</div>
		</div>
		<div class="row-fluid">
			<div id="span12">
				<div class="hero-unit">
					
					<button class="goBtn btn"> Step </button>
					<button class="gunBtn btn"> Set up Gosper </button>
					<button class="runBtn stopped btn"> Run </button>
					<a class="reset btn" id="life" href="#life"> Reset </a> 
					<div id="lifegrid" >
					</div>
				</div>			
		    </div>      			
		</div>
	</div>
	
<?php echo $IPage->footer(); ?> 
</div>
<script src="src/Life.js"> </script>
<script src="src/LifeView.js"> </script>
<script type="text/javascript">
	$(function() {
	    var view = new LifeView(new Life(38));
	    view.init($('.lifegrid'));
	    });
		$("#life").click(function(){
			window.location.reload(true);	
		});
		
 </script>	
</body>
</html>
	
	
	
	
	


