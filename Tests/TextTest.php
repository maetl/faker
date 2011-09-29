<?php
require_once dirname(__FILE__) . '/../Faker.php';

class Fake_Text_Test extends PHPUnit_Framework_TestCase {
	
	public function testLexicalizeWithDefaultArray() {
		 $this->assertEquals('word', Fake_Text::lexicalize(array('word','word','word')));
	}
	
	public function testLexicalizeWithArrayMinEqualsMax() {
		 $this->assertEquals('word word', Fake_Text::lexicalize(array('word','word','word'), 2, 2));
	}
	
}