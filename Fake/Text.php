<?php

class Fake_Text extends Fake {

	/**
	 * Workaround for lack of late static binding in PHP < 5.3.
	 */
	protected function getClass($class = __CLASS__) {
		return $class;
	}
	
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

	public function htmlPassage($paragraphs=3) {
		$passage = "";
		$counter = 0;
		while($counter < $paragraphs) {
			$passage .= self::htmlParagraph(rand(3,12));
			if ($counter != $paragraphs-1) $passage .= "\n\n";
			$counter++;
		}
		return $passage;
	}

	public function htmlParagraph($sentences=3) {
		return "<p>".self::paragraph($sentences)."</p>";
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

	public function sentence($words=false) {
		if (!$words) {
			$min = 1;
			$max = rand(1,12);
		} else {
			$min = $words;
			$max = $words;
		}
		
		$list = $this->getWordList();
		return ucfirst(self::lexicalize($list, $min, $max)) . '.';
	}

	public function words($words=false) {
		if (!$words) {
			$min = 1;
			$max = rand(1,12);
		} else {
			$min = $words;
			$max = $words;
		}
		return self::lexicalize(self::getList('words'), $min, $max);
	}
	
}