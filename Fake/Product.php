<?php

class Fake_Product extends Fake {
	
	/**
	 * Generate a price.
	 *
	 * @param int $low
	 * @param int $high
	 */
	static public function price($low=10, $high=99) {
		return round(rand($low, $high), 2);
	}
	
	/**
	 * Generate a stock-keeping unit identifier.
	 *
	 * @param string $name name of the product to base the identifier
	 */
	static public function sku($name=false) {
		if ($name) {
			$sku = substr(strtoupper(str_replace(array('a','e','i','o','u', ' '), '', $name)), 0, 6);
		} else {
			$sku = self::lexicalize(explode(',', 'b,c,d,f,g,h,j,k,l,m,n,p,q,r,s,t,v,w,x,y,z'), 3, 6, 'strtoupper');
		}
		return $sku . "-" . rand(100,999);
	}
	
}