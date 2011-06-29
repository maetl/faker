<?php

/**
 * Base class for fake generator objects.
 */
abstract class Fake {

	/**
	 * Workaround for lack of late static binding in PHP < 5.3.
	 */
	protected function getClass($class = __CLASS__) {
		return $class;
	}
	
	public function __get($property) {
		$classname = $this->getClass() . '_' . $property;
		return new $classname;
	}
	
	/**
	 * Cache of stored word lists.
	 */
	private static $lists = array();
	
	/**
	 * Get a stored word list.
	 *
	 * @param string $index
	 * @return array|false
	 */
	protected static function getList($index) {
		return (isset(self::$lists[$index])) ? self::$lists[$index] : array();
	}
	
	/**
	 * Store a word list.
	 *
	 * @param string $index
	 * @param array|string $list
	 */
	protected static function addList($index, $list, $delimiter=' ') {
		if (is_string($list)) $list = explode($delimiter, $list);
		self::$lists[$index] = $list;
		return self::$lists[$index];
	}
	
	/**
	 * Generates a random sequence of words from given input list.
	 *
	 * @param array $list input sequence of words
	 * @param int $min minimum number of words in the sequence (defaults to 1)
	 * @param int $max maximum number of words in the sequence (defaults to 1)
	 * @param string $filter apply an optional filter function to each word
	 */
	static public function lexicalize($list, $min=1, $max=1, $filter=false) {
		$length = count($list);
		$total = ($min != $max) ? rand($min, $max) : $max;
		$counter = 0;
		$output = '';
		while ($counter < $total) {
			$key = rand(1, $length);
			if (!$key || !isset($list[$key])) continue;
			if ($counter != 0) $output .= ' ';
			$output .= ($filter) ? $filter($list[$key]) : $list[$key];
			$counter++;
		}
		return $output;
	}
	
}