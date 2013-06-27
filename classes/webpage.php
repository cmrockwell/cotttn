<?php

/**
 * This class makes stanard parts for web pages
 * @author chris rockwell
 */
//require_once __DIR__.'/../lib/silex/vendor/autoload.php';
 
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
    	$path = $_SERVER['SCRIPT_URI'];
    	if(preg_match("/www/", $path)) {
			//echo "mathed";
			$path = preg_replace('/www./', "", $path);
			header("LOCATION: {$path}");
		} else if(preg_match("/while-1/", $path)) {
			//echo "mathed";
			$path = preg_replace('/while-1/', "cotttn", $path);
			header("LOCATION: {$path}");
		}
    	
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
            $footer = '<hr/><div id="footer"><p>Chris Rockwell &copy; 2013</p></div>';
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
            $navBar = '<div id="nav" class="navbar navbar-static-top navbar-inverse">';//nav
            $navBar .= '<div class="navbar-inner">';
            $navBar .= '<ul class="nav">';
            $relPath = $this->getRelative($lvl);

            switch ($page)
			{
			case 'home': //home //<li> <a href="'.$relPath.'cv/">cv resume</a> </li>
			  $navBar .= '<li class="active"> <a href="'.$relPath.'index.php"><span>home</span></a></li>
	       			<!-- <li> <a href="#">blog</a> </li> -->
	       			<li> <a href="'.$relPath.'coding/">coding</a> </li>
	       			<li> <a href="'.$relPath.'apps/">apps</a> </li>
	       			<li> <a href="'.$relPath.'ux/">user experience</a> </li>
	       			<li> <a href="'.$relPath.'about/">about cotttn</a> </li>
	       			
	       			<li> <a href="'.$relPath.'contact/">contact cr</a> </li>';
			  break;
			case 'coding': //portfolio
			  $navBar .= '<li> <a href="'.$relPath.'index.php">home</a> </li>
	       			<!-- <li> <a href="#">blog</a></li> -->
	       			<li class="active"> <a href="'.$relPath.'coding/"><span>coding</span></a> </li>
	       			<li> <a href="'.$relPath.'apps/">apps</a> </li>
	       			<li> <a href="'.$relPath.'ux/">user experience</a> </li>
	       			<li> <a href="'.$relPath.'about/">about cotttn</a> </li>
	       			
	       			<li> <a href="'.$relPath.'contact/">contact cr</a> </li>';
			  break;
			case 'apps': //apps
			  $navBar .= '<li> <a href="'.$relPath.'index.php">home</a> </li>
	       			<!-- <li> <a href="#">blog</a> </li> -->
	       			<li> <a href="'.$relPath.'coding">coding</a></li>
	       			<li class="active"> <a href="'.$relPath.'apps/"><span>apps</span></a> </li>
	       			<li> <a href="'.$relPath.'ux/">user experience</a> </li>
	       			<li> <a href="'.$relPath.'about/">about cotttn</a> </li>
	       			
	       			<li> <a href="'.$relPath.'contact/">contact cr</a> </li>';
			  break;
			case 'ux': //apps
			  $navBar .= '<li> <a href="'.$relPath.'index.php">home</a> </li>
	       			<!-- <li> <a href="#">blog</a> </li> -->
	       			<li> <a href="'.$relPath.'coding">coding</a> </li>
	       			<li> <a href="'.$relPath.'apps">apps</a> </li>
	       			<li class="active"> <a href="'.$relPath.'ux"><span>user experience</span></a></li>
	       			<li> <a href="'.$relPath.'about/">about cotttn</a> </li>
	       			
	       			<li> <a href="'.$relPath.'contact/">contact cr</a> </li>';
			  break;
			case 'about': // about
				$navBar .= '<li> <a href="'.$relPath.'index.php">home</a> </li>
	       			<!-- <li> <a href="#">blog</a> </li> -->
	       			<li> <a href="'.$relPath.'coding/">coding</a> </li>
	       			<li> <a href="'.$relPath.'apps/">apps</a> </li>
	       			<li> <a href="'.$relPath.'ux/">user experience</a> </li>
	       			<li class="active"> <a href="'.$relPath.'about/"><span>about cotttn</span></a> </li>
	       			
	       			<li> <a href="'.$relPath.'contact/">contact cr</a> </li>';
				break;
			case 'cv': // cv
				$navBar .= '<li> <a href="'.$relPath.'index.php">home</a> </li>
	       			<!-- <li> <a href="#">blog</a> </li> -->
	       			<li> <a href="'.$relPath.'coding/">coding</a> </li>
	       			<li> <a href="'.$relPath.'apps/">apps</a> </li>
	       			<li> <a href="'.$relPath.'ux/">user experience</a> </li>
	       			<li> <a href="'.$relPath.'about/">about cotttn</a> </li>
	       			<li class="active"> <a href="'.$relPath.'cv/"><span>cv resume</span></a></li>
	       			<li> <a href="'.$relPath.'contact/">contact cr</a> </li>';
				break;  
			case 'contact': // contact
				$navBar .= '<li> <a href="'.$relPath.'index.php">home</a> </li>
		       			<!-- <li> <a href="#">blog</a> </li> -->
		       			<li> <a href="'.$relPath.'coding/">coding</a> </li>
		       			<li> <a href="'.$relPath.'apps/">apps</a> </li>
	       				<li> <a href="'.$relPath.'ux/">user experience</a> </li>
		       			<li> <a href="'.$relPath.'about/">about cotttn</a> </li>
		       			
		       			<li class="active"> <a href="'.$relPath.'contact/"><span>contact cr</span></a> </li>';
				break;  
			
			}
			
	       	$navBar .= ' </ul>
	       		</div> <!--end nav inner-->
	       		</div> <!--end nav-->';
            return $navBar;	
    }

	public function stdLocalNav($lvl=1){
		$relPath = $this->getRelative($lvl);
		//<li id='img-sb' class='subpage'><a href='${relPath}apps/image-trans'>Image Transition</a></li>
		$localNav = "<div class='span3 cottn'>
          <div class='well sidebar-nav'>
            <ul class='nav nav-list'>
              <li class='nav-header' id='apps-sb'><a href='${relPath}apps'>APPS</a></li>
	              <li id='pwm-sb' class='subpage'><a href='${relPath}apps/android-pwm'>Android PWM</a></li>
	              <li id='dwc-sb' class='subpage'><a href='${relPath}apps/datewheelclassic'>Date Wheel Classic</a></li>              
             
	              <li id='gol-sb' class='subpage'><a href='${relPath}apps/got'>Game of Life</a></li>
	              
	              <li id='meso-sb' class='subpage'><a href='${relPath}apps/meso'>Mesostic Generator</a></li>
	              <li id='tdd-sb' class='subpage'><a href='${relPath}apps/tdd-example'>Test Driven</a></li>                           
              	  <li id='ux-sb' class='nav-header'><a href='${relPath}ux'>USER EXPERIENCE</a></li>
	              <li id='cs-sb' class='subpage'><a href='${relPath}ux/card-sort'>Card Sort</a></li>
	              <li id='ir-sb' class='subpage'><a href='${relPath}ux/interface'>Interface Redesign</a></li>
	              <li id='sd-sb' class='subpage'><a href='${relPath}ux/site-diagrams'>Structural Diagrams</a></li>
	              <li id='ca-sb' class='subpage'><a href='${relPath}ux/comp-analysis'>Competitive Analysis</a></li>
              <li class='nav-header'><a href='${relPath}coding'>WEB CODING</a></li>
              	
            </ul>
          </div><!--/.well -->
        </div>"; //<li><a href='${relPath}coding'>HTML/CSS Examples</a></li>
        
        return $localNav;	
	}

}

?>

