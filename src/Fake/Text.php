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
 * Generates streams of random text.
 */
class Fake_Text extends Fake {
	
	public function passage($paragraphs=3) {
		$passage = "";
		$counter = 0;
		while($counter < $paragraphs) {
			$passage .= self::paragraph(rand(3,12));
			if ($counter != $paragraphs-1) $passage .= "\n\n";
			$counter++;
		}
		return $passage;
	}

	public function paragraph($sentences=3) {
		$paragraph = "";
		$counter = 0;
		while($counter < $sentences) {
			$paragraph .= self::sentence(rand(3,22));
			if ($counter != $sentences-1) $paragraph .= " ";
			$counter++;
		}
		return $paragraph;
	}

	public function sentence($max=false, $min) {
		return ucfirst($this->words($max, $min)) . '.';
	}

	public function words($min=false, $max=false, $filter=false) {
		if (!$min) $min = 1;
		if (!$max) $max = rand(2,12);
		return $this->lexicalize($this->getCorpus(), $min, $max, $filter);
	}	
}