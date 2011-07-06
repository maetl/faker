<?php
/**
 * Faker {{version}}
 * A Fake Text Generator
 * <http://github.com/maetl/Faker>
 *
 * Copyright (c) 2011, Mark Rickerby <http://maetl.net>
 * All rights reserved.
 * 
 * This library is free software; refer to the terms in the LICENSE file found
 * with this source code for details about modification and redistribution.
 */

/**
 * A fake product item.
 */
class Fake_Product extends Fake {
	
	protected function getClass() {
		return __CLASS__;
	}
	
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