<?php

class Faker_Locale {
	
	private static $locale;
	
	/**
	 * Set a default global locale for all data generators.
	 *
	 * @param string $code language code
	 */
	public static function set($code) {
		self::$locale = $code;
	}
	
	/**
	 * Return the default global locale.
	 *
	 * @return string language code
	 */
	public static function get() {
		return (self::$locale) ? self::$locale : 'en';
	}
	
}