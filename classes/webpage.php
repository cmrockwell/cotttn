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
	              <li><a href='${relPath}ux/interface'>Interface Redesign</a></li>
	              <li><a href='${relPath}ux/'>Structural Diagrams</a></li>
	              <li><a href='${relPath}ux/'>Competitive Analysis</a></li>
              <li class='nav-header'>Web Coding</li>
              	<li><a href='${relPath}coding'>HTML/CSS Examples</a></li>
            </ul>
          </div><!--/.well -->
        </div>";
        
        return $localNav;	
	}

}

?>

