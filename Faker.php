<?php

spl_autoload_register(array('Faker', 'autoload'));

/**
 * A fake text generator.
 *
 * @todo document API
 */
class Faker {

	static function autoload($classname) {
		$classpath = dirname(__FILE__) . '/' . str_replace('_', '/', $classname) . '.php';
		if (file_exists($classpath)) require_once $classpath;
	}

	public function __get($property) {
		$classname = 'Fake_' . $property;
		return new $classname;
	}
	
	/**
 	 * Command line runner. Generates fake data from method specified by arguments.
	 *
	 * @param array $arguments
	 */
	static public function main($arguments) {
		
		if (!isset($arguments[1]) || $arguments[1] == '--help' || $arguments[1] == '-h') {
			echo "Faker\nA fake data generator.\n\nUsage:\n$ faker [method]\n$ faker [type]:[method]\n\n";
			return;
		}

		$targets = explode(':', $arguments[1]);
		$method = array_pop($targets);
		$object = 'Fake_' . implode('_', array_map('ucfirst', $targets));

		$faker = new $object();
		echo $object->method();
		return;		
	}
}
