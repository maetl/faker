<?php

class Fake_Color extends Fake {
	
	/**
	 * Return an HTML-style hex value representing a random color.
	 */
	static public function hex() {
		$color = "#";
    	for ($i = 0; $i<6; $i++) {
    		$color .=  dechex(rand(0,15));
    	}
    	return $color;
	}	
	
}