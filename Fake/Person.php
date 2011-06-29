<?php

class Fake_Person extends Fake {
	
	const ProperNames = "Jackson Jack Bean Benetto Boris George Joerg Jakeson Mitch Bev Rich Shirl Shelly Hayden Howard Helen Helga Henriet";
	
	public function name() {
		return self::lexicalize(explode(' ', self::ProperNames), 2, 2, 'ucfirst');
	}
	
}