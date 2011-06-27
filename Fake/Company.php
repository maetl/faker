<?php

class Faker_Company extends Faker_Base {
	
	const MILITARY_INDUSTRIAL_VERBS = 'evolve enable target deliver mesh unleash engineer institute exploit visualize orchestrate drive schedule instantiate define execute';
	
	const MILITARY_INDUSTRIAL_ADJECTIVES = 'virtual dynamic infra-red cyber flexinol electroactive armoured command-and-control 360-degree live ubiquitous tactical autonomous composite versatile mission-critical multipurpose remote-controlled bio-inspired self-organizing embedded';
	
	const MILITARY_INDUSTRIAL_NOUNS = 'soldiers actuation nanotubes technology polymers robotics systems weapons drones robots battlespace battlefields sensing-units UAVs UCAVs payloads USVs weaponry mechanisms';
	
	const BULLSHIT_VERBS = 'implement utilize integrate streamline optimize evolve transform embrace enable orchestrate leverage reinvent aggregate architect enhance incentivize morph empower envisioneer monetize harness facilitate seize disintermediate synergize strategize deploy brand grow target syndicate synthesize deliver mesh incubate engage maximize benchmark expedite reintermediate whiteboard visualize repurpose innovate scale unleash drive extend engineer revolutionize generate exploit transition e-enable iterate cultivate matrix productize redefine recontextualize';
	
	const BULLSHIT_ADJECTIVES = 'clicks-and-mortar value-added vertical proactive robust revolutionary scalable leading-edge innovative intuitive strategic long-tail e-business mission-critical sticky one-to-one 24/7 end-to-end global B2B B2C granular frictionless virtual viral dynamic best-of-breed killer magnetic bleeding-edge web-enabled interactive dot-com sexy back-end real-time efficient front-end distributed seamless extensible turn-key world-class open-source cross-platform cross-media synergistic bricks-and-clicks out-of-the-box enterprise integrated impactful wireless transparent next-generation cutting-edge user-centric visionary customized ubiquitous plug-and-play collaborative compelling holistic rich';
	
	const BULLSHIT_NOUNS = 'synergies web-readiness paradigms markets partnerships infrastructures platforms initiatives channels eyeballs communities ROI solutions e-tailers e-services action-items portals niches technologies content vortals supply-chains convergence relationships architectures interfaces e-markets e-commerce systems bandwidth infomediaries models mindshare deliverables users schemas networks applications metrics e-business functionalities experiences web services methodologies';
	
	/**
	 * Generate a tagline of rapacious military industrial doom.
	 */
	public static function military_industrial_bullshit() {
		return implode(' ', array(
								self::lexicalize(1, 1, array(' ', self::MILITARY_INDUSTRIAL_VERBS), 'ucfirst'),
								self::lexicalize(1, 1, array(' ', self::MILITARY_INDUSTRIAL_ADJECTIVES)),
								self::lexicalize(1, 1, array(' ', self::MILITARY_INDUSTRIAL_NOUNS))
								));
	}
	
	/**
	 * Generate a tagline of unadulterated corporate bullshit.
	 *
	 * Based on the wordlist from http://dack.com/web/bullshit.html
	 */
	static function web2_bullshit() {
		return implode(' ', array(
								self::lexicalize(1, 1, array(' ', self::BULLSHIT_VERBS), 'ucfirst'),
								self::lexicalize(1, 1, array(' ', self::BULLSHIT_ADJECTIVES)),
								self::lexicalize(1, 1, array(' ', self::BULLSHIT_NOUNS))
								));
	}
	
}