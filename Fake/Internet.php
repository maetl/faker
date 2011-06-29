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
	public static function email() {
		return 'test@testy.com';
	}
	
	/**
 	 * A fake username.
	 */
	public static function username() {
		//
	}

	/**
 	 * A fake computer hostname
	 */
	public static function hostname() {
		//
	}
	
	/**
 	 * A fake server name.
	 * Some service name such as mail, dns, etc, prepended to a fake domain name.
	 */
	public static function server_name() {
		//
	}

	/**
	 * A fake domain name.
	 */
	public static function domain_name() {
		//
	}

	/**
	 * A random network service name. Only fairly common services are included.
	 */
	public static function network_service() {
		//
	}

	/**
	 * A random IP V4 Address.
	 */
	public static function ip_v4() {
		//
	}
	
	/**
	 * A random IP V6 Address.
	 */
	public static function ip_v6() {
		//
	}

}