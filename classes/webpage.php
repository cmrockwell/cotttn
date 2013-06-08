<?php

/**
 * This class makes stanard parts for web pages
 * @author chris rockwell
 */

class webpage
{
    public function docType()
    { 
        $docType = '<!DOCTYPE html> <html lang="en"> 
        <head>';
        return $docType;
    }

    public function metaData()
    {
        $metaData = '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="Author" content="Chris Rockwell" />';
        
        return $metaData;
    }

    public function title($title="basic page")
    {
        return "<title>".$title."</title>";
    }
    
    public function style($spath="css/main.css"){
        return '<link href="'.$spath.'" rel="stylesheet" type="text/css" />';
    }
	
    // public function headerText($htext="This Is The Page Title")
    // {
            // $headertxt = "<h1>".$htext."</h1>";
            // return $headertxt;	
    // }
    
    public function branding($h1Text='chris rockwell')//($ipath="images/pond.jpg", $btext="INP271 Project"){
    {    return '<div class="chris" id="header"> <h1>'.$h1Text.'</h1> </div> <!-- end header-->';
        // '<div id="branding"><img src="'.$ipath.'" alt="logo" style="width:100%" />
            // <p style="top:1em; right:2em;">'.$btext.'</p>
            // </div><!-- End branding -->';
    }

    public function footer()
    {
            $footer = '<div id="footer"><p>Chris Rockwell &copy; 2013</p></div>';
            return $footer;	
    }

	public function getRelative($level) {
		switch($level)
			{
				case 1:
					$relPath = "";	 
					break;
				case 2:  
					$relPath = "../";
					break;
				case 3:  
					$relPath = "../../";
					break;	
				case 4:  
					$relPath = "../../../";
					break;
				default:
					$relPath = "";									
			}
		return $relPath;	
	}

    public function navBar($page='home', $lvl =1) // page 1: home, 2: portfolio, 3:chris, 4:cv, 5:contact
    {
            $navBar = '<div id="nav">';
            $navBar .= '<ul>';
            $relPath = $this->getRelative($lvl);

            switch ($page)
			{
			case 'home': //home //<li> <a href="'.$relPath.'cv/">cv resume</a> </li>
			  $navBar .= '<li> <a href="'.$relPath.'index.php"><span>home</span></a></li>
	       			<!-- <li> <a href="#">blog</a> </li> -->
	       			<li> <a href="'.$relPath.'coding/">coding</a> </li>
	       			<li> <a href="'.$relPath.'apps/">apps</a> </li>
	       			<li> <a href="'.$relPath.'ux/">user experience</a> </li>
	       			<li> <a href="'.$relPath.'chris/">about chris</a> </li>
	       			
	       			<li> <a href="'.$relPath.'contact/">contact cr</a> </li>';
			  break;
			case 'coding': //portfolio
			  $navBar .= '<li> <a href="'.$relPath.'index.php">home</a> </li>
	       			<!-- <li> <a href="#">blog</a></li> -->
	       			<li> <a href="'.$relPath.'coding/"><span>coding</span></a> </li>
	       			<li> <a href="'.$relPath.'apps/">apps</a> </li>
	       			<li> <a href="'.$relPath.'ux/">user experience</a> </li>
	       			<li> <a href="'.$relPath.'chris/">about chris</a> </li>
	       			
	       			<li> <a href="'.$relPath.'contact/">contact cr</a> </li>';
			  break;
			case 'apps': //apps
			  $navBar .= '<li> <a href="'.$relPath.'index.php">home</a> </li>
	       			<!-- <li> <a href="#">blog</a> </li> -->
	       			<li> <a href="'.$relPath.'coding">coding</a></li>
	       			<li> <a href="'.$relPath.'apps/"><span>apps</span></a> </li>
	       			<li> <a href="'.$relPath.'ux/">user experience</a> </li>
	       			<li> <a href="'.$relPath.'chris/">about chris</a> </li>
	       			
	       			<li> <a href="'.$relPath.'contact/">contact cr</a> </li>';
			  break;
			case 'ux': //apps
			  $navBar .= '<li> <a href="'.$relPath.'index.php">home</a> </li>
	       			<!-- <li> <a href="#">blog</a> </li> -->
	       			<li> <a href="'.$relPath.'coding">coding</a> </li>
	       			<li> <a href="'.$relPath.'apps">apps</a> </li>
	       			<li> <a href="'.$relPath.'ux"><span>user experience</span></a></li>
	       			<li> <a href="'.$relPath.'chris/">about chris</a> </li>
	       			
	       			<li> <a href="'.$relPath.'contact/">contact cr</a> </li>';
			  break;
			case 'about': // about
				$navBar .= '<li> <a href="'.$relPath.'index.php">home</a> </li>
	       			<!-- <li> <a href="#">blog</a> </li> -->
	       			<li> <a href="'.$relPath.'coding/">coding</a> </li>
	       			<li> <a href="'.$relPath.'apps/">apps</a> </li>
	       			<li> <a href="'.$relPath.'ux/">user experience</a> </li>
	       			<li> <a href="'.$relPath.'chris/"><span>about chris</span></a> </li>
	       			
	       			<li> <a href="'.$relPath.'contact/">contact cr</a> </li>';
				break;
			case 'cv': // cv
				$navBar .= '<li> <a href="'.$relPath.'index.php">home</a> </li>
	       			<!-- <li> <a href="#">blog</a> </li> -->
	       			<li> <a href="'.$relPath.'coding/">coding</a> </li>
	       			<li> <a href="'.$relPath.'apps/">apps</a> </li>
	       			<li> <a href="'.$relPath.'ux/">user experience</a> </li>
	       			<li> <a href="'.$relPath.'chris/">about chris</a> </li>
	       			<li> <a href="'.$relPath.'cv/"><span>cv resume</span></a></li>
	       			<li> <a href="'.$relPath.'contact/">contact cr</a> </li>';
				break;  
			case 'contact': // contact
				$navBar .= '<li> <a href="'.$relPath.'index.php">home</a> </li>
		       			<!-- <li> <a href="#">blog</a> </li> -->
		       			<li> <a href="'.$relPath.'coding/">coding</a> </li>
		       			<li> <a href="'.$relPath.'apps/">apps</a> </li>
	       				<li> <a href="'.$relPath.'ux/">user experience</a> </li>
		       			<li> <a href="'.$relPath.'chris/">about chris</a> </li>
		       			
		       			<li> <a href="'.$relPath.'contact/"><span>contact cr</span></a> </li>';
				break;  
			
			}
			
	       	$navBar .= ' </ul>
	       		</div> <!--end nav-->';
            return $navBar;	
    }

	public function stdLocalNav($lvl=1){
		$relPath = $this->getRelative($lvl);
		$localNav = "<div class='span3 cottn'>
          <div class='well sidebar-nav'>
            <ul class='nav nav-list'>
              <li class='nav-header'>APPS</li>
	              <li><a href='${relPath}apps/android-pwm'>Android PWM</a></li>
	              <li><a href='${relPath}apps/datewheelclassic'>Date Wheel Classic</a></li>              
             
	              <li><a href='${relPath}apps/got'>Game of Life</a></li>
	              <li><a href='${relPath}apps/image-trans'>Image Transition</a></li>
	              <li><a href='${relPath}apps/meso'>Mesostic Generator</a></li>
	              <li><a href='${relPath}apps/tdd-example'>Test Driven</a></li>                           
              <li class='nav-header'>User Experience</li>
	              <li><a href='${relPath}ux/'>Card Sort</a></li>
	              <li><a href='${relPath}ux/'>Interface Redesign</a></li>
	              <li><a href='${relPath}ux/'>Structural Diagrams</a></li>
	              <li><a href='${relPath}ux/'>Competitive Analysis</a></li>
              <li class='nav-header'>Web Coding</li>
              	<li><a href='${relPath}coding'>HTML/CSS Examples</a></li>
            </ul>
          </div><!--/.well -->
        </div>";
        
        return $localNav;	
	}
	
	public function localNavPort($page='coding'){
		$localNav = '<div id="leftside">';
		$androidAppLinks ='<h3> Android Apps </h3>
					<ul>
						<li> <a href="../datewheelclassic">Date Wheel Classic</a></li>
						<li> <a href="../android-pwm">Android PWM</a></li>					
					</ul>';
					
		$jsAppLinks ='<h3>JavaScript Apps</h3> <ul>'.
					'<li> <a href="../got">MVC: Game of Life</a></li>'.
					'<li> <a href="../meso">AJAX: Mesostic</a></li>'.
					'<li> <a href="../img-trans">Animation: Image Transistion</a></li>'.
					'<li> <a href="../tdd-ex">Jasmine TDD Example</a></li>'.
					'</ul>';
							
		switch ($page) {
			case 'home':
				$localNav .= '<div class="leftside-area">
				<h3><a href="coding/">HTML &amp; CSS Web Coding</a></h3>		
				</div>
				<div class="leftside-area">  		
       			<h3><a href="ux/">Designing User Experience</a></h3>
				
				</div>  
				<div class="leftside-area">
       			<h3><a href="apps/"> Web Applications </a></h3>
				</div>	
				';
				break;
			case 'coding':
				$localNav .= '<div class="leftside-area">
				<h3>HTML &amp; CSS Web Coding</h3>
				<ul>					
					<li> <a href="#liquid">Liquid Layout</a></li>
					<li> <a href="#responsive">Responsive Design</a></li>
					<li> <a href="#float">Float</a></li>
					<li> <a href="#form">Form</a></li>
					<li> <a href="#email">HTML Email</a></li>
					<li> <a href="#frames">Frames</a></li>
					<li> <a href="#position">Positioning</a></li>				
					<li> <a href="#slicing">Slice</a></li>
					<li> <a href="#final">Final</a></li>
					<li> <a href="#html5">HTML5 &amp; CSS3</a></li>
				</ul>  
				</div>';				
				break;
			case 'ux':
				$localNav .= '
				<div class="leftside-area">  		
       			<h3>Designing User Experience</h3>
				<ul>					
					<li> <a href="#">Interface Redesign Proposal</a></li>					
				</ul> 
				</div>  
				<div class="leftside-area">
       				<h3>UX Site Analysis</h3>				
					<ul>
					<li> <a href="#">Website Competitve Analysis</a></li>
					<li> <a href="#">Card Sort Testing</a></li>					
					<li> <a href="#">Site Structure Report</a></li>
				</ul> 
				</div>
				';
				break;
			case 'mesostic':
				$localNav .= '
				<div class="leftside-area">    	
					'.$androidAppLinks.'
				</div>
				<div class="leftside-area"> 
				<h3>JavaScript Apps</h3>
					<ul>
					<li> <a href="../got">MVC: Game of Life </a> </li>
					<li> <span>AJAX: Mesostic </span> </li>
					<li> <a href="../image-trans">Animation: Image Transistion </a> </li>
					<li> <a href="../tdd-example">Jasmine TDD Example</a></li>
					</ul>
				</div>
				<div class="leftside-area">  
       			<h3>Web Apps</h3>
				<ul>
					<li> <a href="#">Rails: Mesostica</a></li>
					<li> <a href="#">Shopping Cart</a></li>					
					<li> <a href="#">Contact List</a></li>
					<li> <a href="#">Mortgage Calculator</a></li>									
				</ul>
				</div>';
				break;
			case 'img':
				$localNav .= '
				<div class="leftside-area">    	
					'.$androidAppLinks.'
				</div>
				<div class="leftside-area"> 
				<h3>JavaScript Apps</h3>
					<ul>
					<li> <a href="../got">MVC: Game of Life </a> </li>
					<li> <a href="../meso">AJAX: Mesostic </a> </li>
					<li> <span>Animation: Image Transistion </span> </li>
					<li> <a href="../tdd-example">Jasmine TDD Example</a></li>
					</ul>
				</div>
				<div class="leftside-area">  
       			<h3>Web Apps</h3>
				<ul>
					<li> <a href="#">Rails: Mesostica</a></li>
					<li> <a href="#">Shopping Cart</a></li>					
					<li> <a href="#">Contact List</a></li>
					<li> <a href="#">Mortgage Calculator</a></li>									
				</ul>
				</div>';
				break;	
			case 'got':
				$localNav .= '
				<div class="leftside-area">    	
					'.$androidAppLinks.'
				</div>
				<div class="leftside-area"> 
				<h3>JavaScript Apps</h3>
					<ul>
					<li> <span>MVC: Game of Life</span></li>
					<li> <a href="../meso">AJAX: Mesostic</a></li>
					<li> <a href="../image-trans">Animation: Image Transistion</a></li>
					<li> <a href="../tdd-example">Jasmine TDD Example</a></li>
					</ul>
				</div>
				<div class="leftside-area">  
       			<h3>Web Apps</h3>
				<ul>
					<li> <a href="#">Rails: Mesostica</a></li>
					<li> <a href="#">Shopping Cart</a></li>					
					<li> <a href="#">Contact List</a></li>
					<li> <a href="#">Mortgage Calculator</a></li>									
				</ul>
				</div>';
				break;
			case 'dwc':
				$localNav .= 
				'<div class="leftside-area"> 	
					<h3> Android Apps </h3>
					<ul>
						<li> <span>Date Wheel Classic </span></li>
						<li> <a href="../android-pwm">Android PWM</a></li>					
					</ul>
				</div>
				<div class="leftside-area"> '
				.$jsAppLinks.'</div>'.
				'
				<div class="leftside-area">  
       			<h3>Web Apps</h3>
				<ul>
					<li> <a href="#">Rails: Mesostica</a></li>
					<li> <a href="#">Shopping Cart</a></li>					
					<li> <a href="#">Contact List</a></li>
					<li> <a href="#">Mortgage Calculator</a></li>									
				</ul>
				</div>';
				break;
			case 'pwm':
				$localNav .= '
				<div class="leftside-area">    	
					<h3> Android Apps </h3>
					<ul>
						<li> <a href="../datewheelclassic">Date Wheel Classic </a></li>
						<li> <span>Android PWM</span></li>					
					</ul>
				</div>
				<div class="leftside-area"> '
				.$jsAppLinks.'
				</div>
				<div class="leftside-area">  
       			<h3>Web Apps</h3>
				<ul>
					<li> <a href="#">Rails: Mesostica</a></li>
					<li> <a href="#">Shopping Cart</a></li>					
					<li> <a href="#">Contact List</a></li>
					<li> <a href="#">Mortgage Calculator</a></li>									
				</ul>
				</div>';
				break;	
			case 'apps':
				$localNav .= '
				<div class="leftside-area">    	
					'.$androidAppLinks.'
				</div>
				<div class="leftside-area"> 
				<h3>JavaScript Apps</h3>
					<ul>
					<li> <a href="game_of_life.php">MVC: Game of Life</a></li>
					<li> <a href="#">AJAX: Mesostic</a></li>
					<li> <a href="#">Animation: Image Transistion</a></li>
					<li> <a href="#">Jasmine TDD Example</a></li>
					</ul>
				</div>
				<div class="leftside-area">  
       			<h3>Web Apps</h3>
				<ul>
					<li> <a href="#">Rails: Mesostica</a></li>
					<li> <a href="#">Shopping Cart</a></li>					
					<li> <a href="#">Contact List</a></li>
					<li> <a href="#">Mortgage Calculator</a></li>									
				</ul>
				</div>';
				break;
			case 'java':
				$localNav .= '
				<div class="leftside-area">
				<h3>Java Applications</h3>
				<ul>
					<li> <a href="#">Android PWM</a></li>
					<li> <a href="#">Date Wheel Classic</a></li>
					<li> <a href="#">Arduino Uno</a></li>									
				</ul>  
				</div>	';
				break;

		}
		$localNav .= "</div> <!--end left side-->   ";		
       	return $localNav;					
	}

}

?>

