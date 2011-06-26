<?php

class Faker_Company extends Faker {
	
	const BULLSHIT_VERBS = 'implement utilize integrate streamline optimize evolve transform embrace enable orchestrate leverage reinvent aggregate architect enhance incentivize morph empower envisioneer monetize harness facilitate seize disintermediate synergize strategize deploy brand grow target syndicate synthesize deliver mesh incubate engage maximize benchmark expedite reintermediate whiteboard visualize repurpose innovate scale unleash drive extend engineer revolutionize generate exploit transition e-enable iterate cultivate matrix productize redefine recontextualize';
	
	const BULLSHIT_ADJECTIVES = 'clicks-and-mortar value-added vertical proactive robust revolutionary scalable leading-edge innovative intuitive strategic long-tail e-business mission-critical sticky one-to-one 24/7 end-to-end global B2B B2C granular frictionless virtual viral dynamic best-of-breed killer magnetic bleeding-edge web-enabled interactive dot-com sexy back-end real-time efficient front-end distributed seamless extensible turn-key world-class open-source cross-platform cross-media synergistic bricks-and-clicks out-of-the-box enterprise integrated impactful wireless transparent next-generation cutting-edge user-centric visionary customized ubiquitous plug-and-play collaborative compelling holistic rich';
	
	const BULLSHIT_NOUNS = 'synergies web-readiness paradigms markets partnerships infrastructures platforms initiatives channels eyeballs communities ROI solutions e-tailers e-services action-items portals niches technologies content vortals supply-chains convergence relationships architectures interfaces e-markets e-commerce systems bandwidth infomediaries models mindshare deliverables users schemas networks applications metrics e-business functionalities experiences web services methodologies';
	
	/**
	 * Generate a tagline of unadulterated Web 2.0 corporate bullshit.
	 *
	 * Based on the wordlist from http://dack.com/web/bullshit.html
	 */
	function bullshit() {
		return implode(' ', array(
								self::lexicalize(1, 1, array(' ', self::BULLSHIT_VERBS), 'ucfirst'),
								self::lexicalize(1, 1, array(' ', self::BULLSHIT_ADJECTIVES)),
								self::lexicalize(1, 1, array(' ', self::BULLSHIT_NOUNS))
								));
	}
	
}