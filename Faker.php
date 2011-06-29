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

	const ProperNames = "Jackson Jack Bean Benetto Boris George Joerg Jakeson Mitch Bev Rich Shirl Shelly Hayden Howard Helen Helga Henriet";

	const UserNames = "xel helly moo shaz mated reu lonny mateo billpul hula ganj ahah drunk monk ey eye ore blast gubba roo";

	static public function number($low=1, $high=10) {
		return round(rand($low, $high));
	}

	static public function price($low=10, $high=99) {
		return round(rand($low, $high), 2);
	}

	static public function color() {
		$color = "#";
    	for ($i = 0; $i<6; $i++) {
    		$color .=  dechex(rand(0,15));
    	}
    	return $color;
	}

	static public function sku($name=false) {
		if ($name) {
			$sku = substr(strtoupper(str_replace(array('a','e','i','o','u', ' '), '', $name)), 0, 6);
		} else {
			$sku = self::lexicalize(3, 6, array(',', 'b,c,d,f,g,h,j,k,l,m,n,p,q,r,s,t,v,w,x,y,z', ''), 'strtoupper');
		}
		return $sku . "-" . rand(100,999);
	}

	static public function name($words=5) {
		return self::lexicalize(1, $words, array(' ', self::RidiculousWords), 'ucfirst');
	}

	static public function title($words=5) {
		return self::lexicalize(2, $words, array(' ', self::RidiculousWords), 'ucfirst');
	}

	static public function fullname() {
		return self::lexicalize(2, 2, array(' ', self::ProperNames));
	}

	static public function username() {
		return self::lexicalize(2, 2, array('m', self::UserNames));
	}

	static public function spammername() {
		return self::lexicalize(2, 2, array('', self::UserNames)).rand(2,3);
	}

	static public function lexicalize($min, $max, $split, $filter=false) {
		$list = explode($split[0], $split[1]);
		$length = count($list);
		$total = ($min != $max) ? rand($min, $max) : $max;
		$counter = 0;
		$string = "";
		$join = (isset($split[2])) ? $split[2] : $split[0];
		while ($counter < $total) {
			$key = rand(1, $length);
			if (!$key || !isset($list[$key])) continue;
			if ($counter != 0) $string .= $join;
			$string .= ($filter) ? $filter($list[$key]) : $list[$key];
			$counter++;
		}
		return $string;
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
