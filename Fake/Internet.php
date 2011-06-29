<?php

/**
 * Not implemented. API port from Cpan Data::Faker.
 */
class Fake_Internet extends Fake {
	
	/**
	 * Workaround for lack of late static binding in PHP < 5.3.
	 */
	protected static function getClass($class = __CLASS__) {
		return $class;
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