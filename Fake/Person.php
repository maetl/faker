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
 * Fake personal identity.
 */
class Fake_Person extends Fake {
	
	const ProperNames = "Jackson Jack Bean Benetto Boris George Joerg Jakeson Mitch Bev Rich Shirl Shelly Hayden Howard Helen Helga Henriet";
	
	public function name() {
		return self::lexicalize(explode(' ', self::ProperNames), 2, 2, 'ucfirst');
	}
	
}