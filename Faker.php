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

spl_autoload_register(array('Faker', 'autoload'));

/**
 * A fake text generator.
 *
 * @todo document API
 */
class Faker {

	static function autoload($classname) {
		$classpath = dirname(__FILE__) . '/' . str_replace('_', '/', $classname) . '.php';
		if (file_exists($classpath)) {
			require_once $classpath;
		} else {
			throw new Exception();
		}
	}

	public function __get($property) {
		return new Faker_Invoker($property);
	}
	
	/**
 	 * Command line runner. Generates fake data from method specified by arguments.
	 *
	 * @param array $arguments
	 */
	static public function main($arguments) {
		
		if (!isset($arguments[1]) || $arguments[1] == '--help' || $arguments[1] == '-h') {
			echo "Faker\nA fake data generator.\n\nUsage:\n$ faker [method]\n$ faker [type]:[method]";
			return;
		}

		$targets = explode('.', $arguments[1]);
		$method = array_pop($targets);
		$object = 'Fake_' . implode('_', array_map('ucfirst', $targets));
		
		try {
			$generator = new $object();
			
			if (is_callable(array($generator, $method))) {
				echo $generator->$method();	
			} else {
				echo $method . " is not an attribute of " . implode('.', $targets) . "\n\n";
			}	
		} catch(Exception $error) {
			echo $arguments[1] . " not found.\n\n";
		}
		
		return;	
	}
}
