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
 * Fake internet addresses.
 */
class Fake_Internet extends Fake {
	
	protected function getClass() {
		return __CLASS__;
	}
	
	/**
 	 * A fake email address.
	 */
	public function email() {
		return 'test@testy.com';
	}

	const UserNames = "xel helly moo shaz mated reu lonny mateo billpul hula ganj ahah drunk monk ey eye ore blast gubba roo";
	
	/**
 	 * A fake username.
	 */
	public function username() {
		return self::lexicalize(explode(' ', self::UserNames), 2, 2, 'ucfirst');
	}

	/**
 	 * A fake computer hostname
	 */
	public function hostname() {
		//
	}
	
	/**
 	 * A fake server name.
	 * Some service name such as mail, dns, etc, prepended to a fake domain name.
	 */
	public function server_name() {
		//
	}

	/**
	 * A fake domain name.
	 */
	public function domain_name() {
		//
	}

	/**
	 * A random network service name. Only fairly common services are included.
	 */
	public function network_service() {
		//
	}

	/**
	 * A random IP V4 Address.
	 */
	public function ip_v4() {
		//
	}
	
	/**
	 * A random IP V6 Address.
	 */
	public function ip_v6() {
		//
	}

}