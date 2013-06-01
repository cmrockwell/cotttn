<?php

/**
 * This class makes stanard parts for web pages
 * @author chris rockwell
 */

class webpage
{
    public function docType()
    {
        $docType = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> <head>';
        return $docType;
    }

    public function metaData()
    {
        $metaData = '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="Author" content="Chris Rockwell" />';
        return $metaData;
    }

    public function title($title="basic page")
    {
        return "<title>$title</title>";
    }
    
    public function style($spath="styles/p1style.css"){
        return '<link href="'.$spath.'" rel="stylesheet" type="text/css" />';
    }
	
    public function headerText($htext="This Is The Page Title")
    {
            $headertxt = "<h1>".$htext."</h1>";
            return $headertxt;	
    }
    
    public function branding($ipath="images/pond.jpg", $btext="INP271 Project"){
        return '<div id="branding"><img src="'.$ipath.'" alt="logo" style="width:100%" />
            <p style="top:1em; right:2em;">'.$btext.'</p>
            </div><!-- End branding -->';
    }

    public function footer()
    {
            $footer = '<div id="footer"><p>Chris Rockwell &copy; 2012</p></div>';
            return $footer;	
    }

    public function navBar()
    {
            $navBar = '<div id="navbar">';
            $navBar .= '<ul>';
            $navBar .= '<li><a href="index.php">Home</a></li>';
            $navBar .= '<li><a href="addcontact.php">Add Contact</a></li>';
            $navBar .= '<li><a href="viewcontacts.php">View Contacts</a></li>';
            $navBar .= '</ul>';
            $navBar .= '</div><!-- End navbar -->';
            return $navBar;	
    }

}

?>

