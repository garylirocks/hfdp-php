<?php

namespace strategy\behavior;

class FlyRocketPowered implements FlyBehavior {
	public function fly() {
		echo '-= ROCKET POWERED =-, fly like a boss' . PHP_EOL;
	}
}