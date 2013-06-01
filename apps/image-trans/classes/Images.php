<?php

/**
 * Returns the image path array from the server
 *
 * @author chris
 */
$s = new Images();

class Images {
    
	private $directory = "../user-images"; 
	private $imagePaths = Array();
	
	public function __construct() {
		$this->imagePaths = scandir($this->directory); 		
		echo json_encode($this->imagePaths);
	}	
}

?>
