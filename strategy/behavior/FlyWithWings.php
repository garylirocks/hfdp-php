<?php

namespace strategy\behavior;

class FlyWithWings implements FlyBehavior {
	public function fly() {
		echo 'fly with wings' . PHP_EOL;
	}
}