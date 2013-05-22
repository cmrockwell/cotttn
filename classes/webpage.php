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
        return "<title>$title</title>";
    }
    
    public function style($spath="css/main.css"){
        return '<link href="'.$spath.'" rel="stylesheet" type="text/css" />';
    }
	
    public function headerText($htext="This Is The Page Title")
    {
            $headertxt = "<h1>".$htext."</h1>";
            return $headertxt;	
    }
    
    public function branding($h1Text='chris rockwell')//($ipath="images/pond.jpg", $btext="INP271 Project"){
    {    return '<div id="header"> <h1>$h1Text</h1> </div> <!-- end header-->';
        // '<div id="branding"><img src="'.$ipath.'" alt="logo" style="width:100%" />
            // <p style="top:1em; right:2em;">'.$btext.'</p>
            // </div><!-- End branding -->';
    }

    public function footer()
    {
            $footer = '<div id="footer"><p>Chris Rockwell &copy; 2012</p></div>';
            return $footer;	
    }

    public function navBar($page='home') // page 1: home, 2: portfolio, 3:chris, 4:cv, 5:contact
    {
            $navBar = '<div id="navbar">';
            $navBar .= '<ul>';
            switch ($page)
			{
			case 'home': //home
			  $navBar .= '<li> <span> home </span> </li>
	       			<!-- <li> <a href="#">blog</a> </li> -->
	       			<li> <a href="portfolio.php">portfolio </a> </li>
	       			<li> <a href="chris.php">about chris</a> </li>
	       			<li> <a href="cv.php">cv resume</a> </li>
	       			<li> <a href="contact.php">contact cr</a> </li>';
			  break;
			case 'portfolio': //portfolio
			  $navBar .= '<li> <a href="index.php"> home </a> </li>
	       			<!-- <li> <a href="#">blog</a> </li> -->
	       			<li> <span>portfolio </span> </li>
	       			<li> <a href="chris.php">about chris</a> </li>
	       			<li> <a href="cv.php">cv resume</a> </li>
	       			<li> <a href="contact.php">contact cr</a> </li>';
			  break;
			case 'about': // about
				$navBar .= '<li> <a href="index.php"> home </a> </li>
	       			<!-- <li> <a href="#">blog</a> </li> -->
	       			<li> <a href="portfolio.php">portfolio </a> </li>
	       			<li> <span>about chris</span> </li>
	       			<li> <a href="cv.php">cv resume</a> </li>
	       			<li> <a href="contact.php">contact cr</a> </li>';
				break;
			case 'cv': // cv
				$navBar .= '<li> <a href="index.php"> home </a> </li>
	       			<!-- <li> <a href="#">blog</a> </li> -->
	       			<li> <a href="portfolio.php">portfolio </a> </li>
	       			<li> <a href="chris.php">about chris</a> </li>
	       			<li> <span>cv resume</span> </li>
	       			<li> <a href="contact.php">contact cr</a> </li>';
				break;  
			case 'contact': // contact
				$navBar .= '<li> <a href="index.php"> home </a> </li>
		       			<!-- <li> <a href="#">blog</a> </li> -->
		       			<li> <a href="portfolio.php">portfolio </a> </li>
		       			<li> <a href="chris.php">about chris</a> </li>
		       			<li> <a href="cv.php">cv resume</a> </li>
		       			<li> <span>contact cr</span> </li>';
				break;  
			default:
			  ;
			}
			
	       	$navBar .= ' </ul>
	       		</div> <!--end nav-->';
            return $navBar;	
    }

	public function localNavPort($page='coding'){
		$localNav = '<div id="leftside">
       			<div class="leftside-area">';
		switch ($page) {
			case 'coding':
				$localNav .= '<h3>HTML &amp; CSS Web Coding</h3>
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
				</div>
				<div class="leftside-area">  		
       			<h3><a href="design-ux.html">Designing User Experience</a></h3>
				
				</div>  
				<div class="leftside-area">
       			<h3><a href="webapps.html"> Web Applications </a></h3>
				</div>	
				<div class="leftside-area">
				<h3> <a href="java.html"> Java Applications </a></h3>
				</div>';
				break;
			case 'design-ux':
				$localNav .= '<div class="leftside-area">  
				<h3><a href="coding.php">HTML &amp; CSS Web Coding</a></h3>				 
				</div>
				<div class="leftside-area">  		
       			<h3>Designing User Experience</h3>
				<ul>
					<li> <a href="#">Website Competitve Analysis</a></li>
					<li> <a href="#">Card Sort Analysis</a></li>
					<li> <a href="#">Interface Redesign Proposal</a></li>
					<li> <a href="#">Site Structure Analysis</a></li>
				</ul> 
				</div>  
				<div class="leftside-area">
       			<h3> <a href="webapps.php">Web Applications</a></h3>				
				</div>
				<div class="leftside-area">    	
				<h3> <a href="java.php"> Java Applications </a></h3>
				</div>';
				break;
			case 'webapps':
				$localNav .= '<div class="leftside-area">  
				<h3><a href="coding.php">HTML &amp; CSS Web Coding</a></h3>				 
				</div>
				<div class="leftside-area">  		
       			<h3><a href="design-ux.php">Designing User Experience</a></h3>
				</div>  
				<div class="leftside-area">
       			<h3>Web Applications</h3>
				<ul>
					<li> <a href="#">MVC: Game of Life</a></li>
					<li> <a href="#">AJAX: Mesostic</a></li>
					<li> <a href="#">Animation: Image Transistion</a></li>
					<li> <a href="#">Shopping Cart</a></li>
					<li> <a href="#">JS Jasmine TDD</a></li>				
				</ul>
				</div>
				<div class="leftside-area">    	
				<h3> <a href="java.php"> Java Applications </a></h3>
				</div>';
				break;
			case 'java':
				$localNav .= '<div class="leftside-area">  
				<h3><a href="coding.php">HTML &amp; CSS Web Coding</a></h3>				 
				</div>
				<div class="leftside-area">  		
       			<h3><a href="design-ux.php">Designing User Experience</a></h3>
				</div>  
				<div class="leftside-area">
       			<h3><a href="webapps.php">Web Applications</a></h3>				
				</div>
				<div class="leftside-area">
				<h3>Java Applications</h3>
				<ul>
					<li> <a href="#">Android PWM</a></li>
					<li> <a href="#">Date Wheel Classic</a></li>
					<li> <a href="#">Arduino Uno</a></li>									
				</ul>  
				</div>	';
				break;
			default:
				
				break;
		}
		$localNav .= "</div> <!--end left side-->   ";		
       						
	}

}

?>

